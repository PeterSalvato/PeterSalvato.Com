#!/usr/bin/env python3
"""
Daily Workplan Generator v1
Runs overnight via cron. Produces a single markdown file telling Peter
exactly what to do today. Zero decisions. Just execution.

Usage:
    python3 scripts/daily-workplan-generator.py

Output:
    scripts/daily-workplan.md

State:
    scripts/.workplan-state.json
"""

import json
import os
import re
import subprocess
from datetime import datetime, date
from pathlib import Path

# ---------------------------------------------------------------------------
# Paths
# ---------------------------------------------------------------------------
REPO_ROOT = Path(__file__).resolve().parent.parent
SCRIPTS_DIR = REPO_ROOT / "scripts"
STATE_FILE = SCRIPTS_DIR / ".workplan-state.json"
OUTPUT_FILE = SCRIPTS_DIR / "daily-workplan.md"

LINKEDIN_POSTS = REPO_ROOT / "docs" / "plans" / "2026-Q2-linkedin-posts.md"
CONTENT_CALENDAR = REPO_ROOT / "docs" / "plans" / "2026-03-25-content-calendar.md"
REDDIT_MORNING = SCRIPTS_DIR / "reddit-morning.md"

# ---------------------------------------------------------------------------
# Weekly rotation
# ---------------------------------------------------------------------------
ROTATION = {
    0: {"label": "Reddit + LinkedIn + EI writing", "crosspost": False, "writing": True, "review": False, "rest": False, "batch": False},
    1: {"label": "Reddit + LinkedIn + cross-post day", "crosspost": True, "writing": False, "review": False, "rest": False, "batch": False},
    2: {"label": "Reddit + LinkedIn + EI writing", "crosspost": False, "writing": True, "review": False, "rest": False, "batch": False},
    3: {"label": "Reddit + LinkedIn + cross-post day", "crosspost": True, "writing": False, "review": False, "rest": False, "batch": False},
    4: {"label": "Reddit + LinkedIn + review/catch-up", "crosspost": False, "writing": False, "review": True, "rest": False, "batch": False},
    5: {"label": "EI assembly line batch", "crosspost": False, "writing": False, "review": False, "rest": False, "batch": True},
    6: {"label": "Rest", "crosspost": False, "writing": False, "review": False, "rest": True, "batch": False},
}

DAY_NAMES = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]

# LinkedIn slot schedule: Mon=A, Wed=B, Fri=C
LINKEDIN_SLOT_DAYS = {0: "A", 2: "B", 4: "C"}

# Cross-post queue (parsed from content calendar)
CROSSPOST_QUEUE = [
    "How I Got Here",
    "I Needed a Better Tool",
    "Processing Profiles",
    "Reading the Room",
    "Talk To It",
    "The Unstructured Corpus",
    "What Does the System Actually Need",
    "What Special Ed Teachers Already Know",
    "Where I Learned Pacing",
    "Why Does ChatGPT Get Worse",
    "HomeWorks Ch 1", "HomeWorks Ch 2", "HomeWorks Ch 3",
    "HomeWorks Ch 4", "HomeWorks Ch 5", "HomeWorks Ch 6",
    "HomeWorks Ch 7", "HomeWorks Ch 8", "HomeWorks Ch 9",
    "HomeWorks Ch 10", "HomeWorks Ch 11", "HomeWorks Ch 12",
    "HomeWorks Ch 13",
]


# ---------------------------------------------------------------------------
# State management
# ---------------------------------------------------------------------------
def load_state():
    defaults = {
        "linkedin_week": 1,
        "linkedin_slot": "A",
        "crosspost_index": 0,
        "last_run": None,
    }
    if STATE_FILE.exists():
        try:
            with open(STATE_FILE) as f:
                saved = json.load(f)
            defaults.update(saved)
        except (json.JSONDecodeError, IOError):
            pass
    return defaults


def save_state(state):
    with open(STATE_FILE, "w") as f:
        json.dump(state, f, indent=2)


# ---------------------------------------------------------------------------
# Data sources
# ---------------------------------------------------------------------------
def get_git_log():
    """Last 5 commits from the repo."""
    try:
        result = subprocess.run(
            ["git", "log", "--oneline", "-5"],
            capture_output=True, text=True, cwd=str(REPO_ROOT),
            timeout=10,
        )
        if result.returncode == 0 and result.stdout.strip():
            return result.stdout.strip()
    except Exception:
        pass
    return None


def get_reddit_morning():
    """Read overnight Reddit matches if the file exists."""
    if REDDIT_MORNING.exists():
        try:
            text = REDDIT_MORNING.read_text().strip()
            if text:
                return text
        except IOError:
            pass
    return None


def parse_linkedin_post(week_num, slot_letter):
    """
    Parse a specific post from the LinkedIn posts file.
    Returns the post text and any comment URL, or None.
    """
    if not LINKEDIN_POSTS.exists():
        return None, None

    try:
        content = LINKEDIN_POSTS.read_text()
    except IOError:
        return None, None

    # Find the week section
    week_pattern = rf"## WEEK {week_num}\b.*?\n(.*?)(?=\n## WEEK |\Z)"
    week_match = re.search(week_pattern, content, re.DOTALL)
    if not week_match:
        return None, None

    week_text = week_match.group(1)

    # Map slot letter to day label
    slot_map = {"A": "Slot A", "B": "Slot B", "C": "Slot C"}
    slot_label = slot_map.get(slot_letter, slot_letter)

    # Find the slot section within the week
    slot_pattern = rf"### \w+ — {slot_label}\n(.*?)(?=\n### |\n---|\Z)"
    slot_match = re.search(slot_pattern, week_text, re.DOTALL)
    if not slot_match:
        return None, None

    block = slot_match.group(1).strip()

    # Separate post text from comment URL
    lines = block.split("\n")
    post_lines = []
    comment_url = None
    for line in lines:
        if line.strip().startswith("Comment:"):
            comment_url = line.strip().replace("Comment:", "").strip()
        else:
            post_lines.append(line)

    post_text = "\n".join(post_lines).strip()
    return post_text, comment_url


def parse_overdue_milestones():
    """Pull unchecked milestones from the content calendar."""
    if not CONTENT_CALENDAR.exists():
        return None

    try:
        content = CONTENT_CALENDAR.read_text()
    except IOError:
        return None

    # Find Q2 milestones (the nearest quarter)
    q2_pattern = r"### Q2.*?(?=### Q[34]|\Z)"
    q2_match = re.search(q2_pattern, content, re.DOTALL)
    if not q2_match:
        return None

    # Extract unchecked items
    unchecked = []
    for line in q2_match.group(0).split("\n"):
        if re.match(r"\s*- \[ \]", line):
            unchecked.append(line.strip())

    return unchecked if unchecked else None


# ---------------------------------------------------------------------------
# Workplan generation
# ---------------------------------------------------------------------------
def advance_linkedin_state(state, today_weekday):
    """
    Determine which LinkedIn post to show today and advance state.
    Posts happen Mon (A), Wed (B), Fri (C).
    After C, advance to next week.
    """
    slot = LINKEDIN_SLOT_DAYS.get(today_weekday)
    if slot is None:
        return None, None, None  # Not a LinkedIn posting day

    week = state["linkedin_week"]
    post_text, comment_url = parse_linkedin_post(week, slot)

    # Advance state after this post
    if slot == "C":
        state["linkedin_week"] = week + 1
        state["linkedin_slot"] = "A"
    else:
        next_slot = {"A": "B", "B": "C"}
        state["linkedin_slot"] = next_slot.get(slot, "A")

    return post_text, comment_url, f"Week {week}, Slot {slot}"


def advance_crosspost_state(state):
    """Get the next cross-post item and advance index."""
    idx = state["crosspost_index"]
    if idx >= len(CROSSPOST_QUEUE):
        return None
    item = CROSSPOST_QUEUE[idx]
    state["crosspost_index"] = idx + 1
    return item


def generate_workplan():
    today = date.today()
    weekday = today.weekday()  # 0=Mon ... 6=Sun
    day_name = DAY_NAMES[weekday]
    rotation = ROTATION[weekday]
    date_str = today.strftime("%B %d, %Y")

    state = load_state()

    lines = []
    lines.append(f"# Daily Workplan — {day_name}, {date_str}")
    lines.append("")
    lines.append(f"**Today's mode:** {rotation['label']}")
    lines.append("")

    # -----------------------------------------------------------------------
    # Rest day shortcut
    # -----------------------------------------------------------------------
    if rotation["rest"]:
        lines.append("Rest day. Do whatever you want.")
        lines.append("")
        lines.append("If you feel like working, check the overdue list below. Otherwise, close this file.")
        lines.append("")
        # Still show overdue
        overdue = parse_overdue_milestones()
        if overdue:
            lines.append("## Overdue / Reminders")
            lines.append("")
            for item in overdue[:5]:
                lines.append(f"  {item}")
            lines.append("")

        state["last_run"] = today.isoformat()
        save_state(state)
        OUTPUT_FILE.write_text("\n".join(lines))
        return "\n".join(lines)

    # -----------------------------------------------------------------------
    # Morning (with coffee)
    # -----------------------------------------------------------------------
    lines.append("## Morning (with coffee)")
    lines.append("")

    # Reddit
    reddit = get_reddit_morning()
    if reddit:
        lines.append("**Reddit matches found overnight:**")
        lines.append("")
        # Indent the reddit content
        for r_line in reddit.split("\n")[:20]:
            lines.append(f"> {r_line}")
        lines.append("")
    else:
        lines.append("- Reddit: No overnight matches file found. Browse manually if you feel like it.")
        lines.append("")

    # LinkedIn browsing
    lines.append("- LinkedIn: Browse feed. Comment on 1-2 posts worth engaging with. Add value, don't promote.")
    lines.append("")

    # -----------------------------------------------------------------------
    # Today's Work
    # -----------------------------------------------------------------------
    lines.append("## Today's Work")
    lines.append("")

    # LinkedIn post (Mon/Wed/Fri)
    post_text, comment_url, slot_info = advance_linkedin_state(state, weekday)
    if post_text:
        lines.append(f"### LinkedIn Post ({slot_info})")
        lines.append("")
        lines.append("Copy and paste this into LinkedIn:")
        lines.append("")
        lines.append("```")
        lines.append(post_text)
        lines.append("```")
        lines.append("")
        if comment_url:
            lines.append(f"**First comment:** {comment_url}")
            lines.append("")
    elif weekday in LINKEDIN_SLOT_DAYS:
        lines.append("### LinkedIn Post")
        lines.append("")
        lines.append("No post found in queue. Check `docs/plans/2026-Q2-linkedin-posts.md` — you may have reached the end of the prepared posts.")
        lines.append("")

    # Cross-post (Tue/Thu)
    if rotation["crosspost"]:
        crosspost_item = advance_crosspost_state(state)
        if crosspost_item:
            lines.append("### Cross-Post")
            lines.append("")
            lines.append(f"**Essay to cross-post today:** {crosspost_item}")
            lines.append("")
            lines.append("1. Format for Dev.to (full URLs, cover image, no Jekyll markup)")
            lines.append("2. Import to Medium via URL")
            lines.append("3. Import to Hashnode via URL")
            lines.append("4. Set canonical URL back to petersalvato.com")
            lines.append("5. Three platforms, 15 minutes total.")
            lines.append("")
        else:
            lines.append("### Cross-Post")
            lines.append("")
            lines.append("Cross-post queue exhausted. Check for new EI drafts or HomeWorks chapters to add.")
            lines.append("")

    # EI writing (Mon/Wed)
    if rotation["writing"]:
        lines.append("### EI Writing")
        lines.append("")
        lines.append("Assembly line work. Pick up where you left off:")
        lines.append("")
        lines.append("- Check `docs/plans/master-syllabus.md` for next DEEP seeds")
        lines.append("- Pass 1: Seed into draft markdown (raw compilation, no polish)")
        lines.append("- Target: 10 seeds per sitting, one pass at a time")
        lines.append("")

    # Saturday batch
    if rotation["batch"]:
        lines.append("### EI Assembly Line Batch")
        lines.append("")
        lines.append("Batch day. Extended session if energy allows:")
        lines.append("")
        lines.append("- Check `docs/plans/master-syllabus.md` for current pass status")
        lines.append("- Work one pass across the full set (seed, voice, verify, or publish)")
        lines.append("- Target: 10+ seeds. No context switching between passes.")
        lines.append("")

    # Friday review
    if rotation["review"]:
        lines.append("### Review / Catch-Up")
        lines.append("")
        lines.append("- Review what shipped this week (see Recent Wins below)")
        lines.append("- Check overdue milestones")
        lines.append("- Prep next week's cross-posts if needed")
        lines.append("- Clean up any loose ends")
        lines.append("")

    # -----------------------------------------------------------------------
    # Overdue / Reminders
    # -----------------------------------------------------------------------
    overdue = parse_overdue_milestones()
    if overdue:
        lines.append("## Overdue / Reminders")
        lines.append("")
        for item in overdue:
            lines.append(f"  {item}")
        lines.append("")

    # -----------------------------------------------------------------------
    # Recent Wins
    # -----------------------------------------------------------------------
    git_log = get_git_log()
    lines.append("## Recent Wins")
    lines.append("")
    if git_log:
        for gl in git_log.split("\n"):
            lines.append(f"- `{gl.strip()}`")
    else:
        lines.append("- (could not read git log)")
    lines.append("")

    # -----------------------------------------------------------------------
    # Save state and write output
    # -----------------------------------------------------------------------
    state["last_run"] = today.isoformat()
    save_state(state)

    output = "\n".join(lines)
    OUTPUT_FILE.write_text(output)
    return output


# ---------------------------------------------------------------------------
# Main
# ---------------------------------------------------------------------------
if __name__ == "__main__":
    result = generate_workplan()
    print(result)
