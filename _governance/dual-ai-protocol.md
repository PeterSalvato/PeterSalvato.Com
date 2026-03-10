---
layout: project
title: "Dual-AI Protocol"
subtitle: "Claude and Gemini as Complementary Agents, Separated by Role, Connected by Handoff"
icon: sync_alt
altitude: "01"
status: "Active"
published: false
context: "I was running two AI tools on the same project with no way to connect them. I'd work on copy with Gemini, then Claude would implement it wrong, because Claude didn't know what Gemini had decided. I was the relay. My memory was the protocol. Things dropped."
drift: "Without a handoff structure, the human carries the context. That's the failure point, not the AIs."
scaffold: "Role separation enforced by dedicated instruction files (GEMINI.md, CLAUDE.md), a live handoff document both AIs read and write, and implementation annotations Claude leaves in Gemini's planning docs so neither starts a session blind."
fidelity: "Neither AI carries the full context alone. Each informs the other. The relay is structural now, not memorial."
faculty: ["engineering", "uxia"]
seo_keywords: ["AI Collaboration", "Multi-Agent Protocol", "Claude", "Gemini", "Workflow Architecture", "AI Governance"]
description: "Role separation for dual-AI workflows. Dedicated instruction files and a live handoff document so neither agent starts a session blind."
last_modified: 2026-02-21
---

## The Pressure

I couldn't afford to run everything through Claude. Claude Code is exceptional at implementation: engineering, file architecture, git, build systems. But budget is real. So I leaned on Gemini for planning and copy work, Claude for building.

The split made sense on paper. In practice, I was the only thing connecting them. I'd finish a Gemini session with decisions made and copy drafted. I'd open Claude. Claude knew none of it. I'd explain. Incompletely. Claude would implement based on what I remembered to say, not what Gemini had actually decided. Things drifted. Copy got miswired. Gemini would re-plan work Claude had already built.

The problem wasn't the tools. The problem was that the relay between them lived in my head.

---

## The Build

Three files. They work together.

**`GEMINI.md`** Gemini reads this at startup. Establishes role (content, copy, planning, not implementation), mandates reading the handoff before any work, and requires updating the handoff before ending every session.

**`CLAUDE.md`** Claude reads this at startup. Mandates scanning the handoff first, reading any new Gemini planning docs, reconciling conflicts before touching anything, and annotating planning docs with implementation status after building.

**`.gemini/HANDOFF.md`** The live relay. Gemini writes what it decided, what files it changed, what Claude needs to implement. Claude reads it at the start of every session. Neither AI starts blind.

The annotation convention closes the loop: when Claude builds something from a Gemini plan, it marks the plan inline (`<!-- IMPLEMENTED: [what] [date] -->`). Gemini reads those marks. It knows what's been built. It doesn't re-plan it.

The roles are enforced by what each AI's instruction file tells it to do, and not do. Gemini does not edit site files. Claude does not write copy without following the knowledge escalation protocol. The boundary is structural.

---

## What It Proves

Budget constraint forced role clarity. Role clarity forced a handoff protocol. The protocol produces something neither tool delivers alone: compounding intelligence across sessions, with the human no longer serving as the relay.

Same principle as the AI DevOps Workbench: agents need architecture, not just instructions. The difference: DevOps Workbench prevents contradiction among agents working the same problem. This protocol enables collaboration between agents working different problems toward the same goal.

<!--
Peter: Add your actual thinking here.
- Any specific sessions where the handoff caught something that would have been dropped?
- What does the copy/implementation split feel like in practice?
- What would you add or change now that it's running?
-->
