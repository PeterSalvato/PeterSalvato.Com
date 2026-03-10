---
layout: project
title: "Savepoint Syntax"
subtitle: "Semantic Markup for Cognitive Turning Points"
icon: code
altitude: "01"
status: "V3.1 Open Source"
context: "Understanding shifts in the middle of work. Those shifts are the most perishable thing in any knowledge workflow. The tools store everything that was said. Nothing marks where the thinking turned."
drift: "Documentation systems capture what was decided. They don't capture where the thinking was going. Notes accumulate without architecture. The thread vanishes at exactly the moment you need to resume it."
scaffold: "A symbolic markup system for capturing cognitive turning points: moments when realization clicks, phrasing locks in, or meaning shifts direction. A way to mark where you were, not a map of everywhere you've been."
fidelity: "When you come back weeks later, you find your way in. v3.1, open source."
faculty: ["design", "uxia"]
external_url: "https://github.com/PeterSalvato/Savepoint.Protocol"
seo_keywords: ["context switching", "decision logging", "cognitive state management", "semantic markup", "knowledge management", "thinking tools", "project filtering"]
description: "Structural markup for cognitive turning points. Adds structure to unstructured ideation across sessions, conversations, and teams. Marks where understanding shifts before the context closes. v3.1 adds project scoping and keyword filtering for traversal at scale. Open source."
last_modified: 2026-03-03
related:
  - /governance/formwork-protocol
  - /infrastructure/encore
  - /output/new-city
cta:
  text: "See this protocol running on a real build"
  link: /colophon
glyphs: "▼ ▲ ⬣"
codex: "/Æ/#|●▼||▲|||⬣⟩⟩[governance.savepoint-syntax]/"
---

Understanding shifts in the middle of work (conversations, sessions, sketches) and nothing captures those shifts. I'd been losing them for twenty years. Sketchbooks since art school. Notes that captured information but not where the thinking turned. The book wasn't lost. The thinking was.

AI made the same problem happen at machine speed. Working on [New City](/output/new-city/), ideation sprawled across dozens of sessions. Then the sessions closed and the continuity was gone. Fragments survived. The connections between them didn't.

The problem wasn't forgetting. Documentation handles forgetting fine. The failure is that understanding shifts in the middle of unstructured work, and nothing captures those shifts. Notes accumulate without architecture. I stopped asking "how do I document my thinking?" and started asking "how do I mark where my thinking forked?"

And then a harder question: what does the model actually need to reconstruct where I was? Not what I need to remember. What it needs to find its way back in. The syntax came from that question.

The reflex came before the syntax. For five months, at the end of marathon sessions, I'd type the same request: "give me a savepoint." The word showed up in twenty-plus conversations before it ever became a system.

> "I basically just don't want to lose any of the brainstorming ideation that we do. We wind up with these marathon sessions and your memory limitations cause us to lose things."
> — from the session where the syntax was born, March 2025

What came out was a syntax. A way to mark, inline, the exact point where understanding shifted, without stopping the flow. That tag went through months of revision.

Something I didn't expect: I could go back through months of ideation and find the exact moment a decision locked in. A trail system through the mess.

---

Three versions. v1.0 was YAML frontmatter: loose, reflective, and it stripped out the concrete content it was supposed to preserve. The protocol reproduced the exact loss it was built for.

```yaml
# v1.0 — YAML frontmatter (March 2025)
---
category: design
timestamp: 2025-03-01T10:00:00Z
---
[freeform narrative content that drifted
 into journaling and lost the actual decision]
```

v2.0 used triple-pipe attributes, still too verbose.

```
# v2.0 — Triple-pipe blocks (late March 2025)
||| protocol_version:2.0
||| category:system_logic
||| function:declaration
||| timestamp:2025-03-28T15:43:00Z
<Savepoint>
The content block was open-ended.
You could write paragraphs.
That was the problem.
</Savepoint>
```

v3.0 came from a front-end instinct: CSS selectors and HTML attributes, applied to thought. A self-closing tag. Atomic. Parseable by machines. Writable by hand.

```
# v3.0 — Self-closing tag (April 2025)
<Savepoint
  protocol_version:3.0
  category:system_logic
  function:declaration
  timestamp:2025-04-08T15:43:00Z
  # Recursive structures should replace version snapshots wherever drift is likely.
/>
```

One line of content. One moment captured.

The tag carries its own context. `category` marks the domain. `function` marks why the Savepoint exists: a declaration, a revision, a drift detected, a milestone. Optional fields for `importance`, `confidence`, and `influence` when the moment warrants it.

v3.1 added two more optional fields: `project` and `keywords`. I was dropping savepoints across half a dozen parallel projects (homelab infrastructure, the portfolio site, the skill system, the protocol itself) and the archive grew past 60,000 documents. Finding "the savepoint about plate boundaries" meant scanning everything. `project` scopes a savepoint to a specific body of work. `keywords` tags it with free-form search terms. Both are blank by default. The core syntax didn't change. The tag just got two more handles for when you need to find something later.

```
<Savepoint
  protocol_version:3.1
  category:content_rules
  function:drift_detected
  importance:medium
  confidence:moderate
  timestamp:2025-04-15T11:22:00Z
  project:savepoint
  keywords:content rules, enforcement, clarity
  # Early users are writing multi-line content after the # marker. The protocol allows exactly one content line. Enforcing strictly preserves the constraint that forces clarity.
/>
```

```
<Savepoint
  protocol_version:3.1
  category:protocol_evolution
  function:revision
  importance:high
  confidence:strong
  timestamp:2025-04-10T09:15:00Z
  # The self-closing tag format is final. v1 (YAML frontmatter) was too heavy, v2 (triple-pipe) was too clever. v3 sits at the right weight.
/>
```

```
<Savepoint
  protocol_version:3.1
  category:design_philosophy
  function:declaration
  confidence:strong
  timestamp:2025-04-12T16:00:00Z
  project:savepoint
  keywords:notes vs savepoints, inflection
  # A Savepoint is not a note. Notes capture information. Savepoints mark inflection. The moment thinking changed shape. If you can write it without stopping, it probably wasn't a Savepoint.
/>
```

Along the way, the syntax became the topic of conversation. All flow gone. That's how I knew it wasn't done yet: when I was thinking about tagging instead of thinking about the work. If you're conscious of Savepoint while working, it has failed.

> "It genuinely felt like Savepoint was going to save people from AI recursiveness and black box thinking. Looking back that feels crazy."
> — months later, questioning whether the whole project was delusional

The kind of continuity I lost before the syntax existed stopped happening. Not because the memory improved. Because the markers were in place.

Drop one in the middle of dense thinking. Come back weeks later. You find your way in. The syntax runs across everything now: [Encore's](/infrastructure/encore/) platform decisions, [Aiden Jae's](/output/aiden-jae/) brand architecture, the portfolio site itself, the novel that started it. v3.1, open source. Human preservation infrastructure. Making sure the person doesn't disappear inside tools that don't care whether they do.

Savepoints mark where understanding shifts. The [Formwork Protocol](/governance/formwork-protocol/) structures how the work gets evaluated: distinct layers of concern, run independently, read together. The [Colophon](/colophon/) shows both running on the site you're reading now.
