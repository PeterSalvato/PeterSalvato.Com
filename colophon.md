---
layout: context
title: "Colophon"
permalink: /colophon/
description: "How this site was compiled from a three-year corpus using the protocols and tools described on it. Not a hand-written portfolio, but a mined artifact of intent."
seo_keywords: ["compiled portfolio", "epistemic mining", "sp CLI", "provenance", "formwork protocol", "savepoint syntax", "voice protocol", "methodology-driven development"]
last_modified: 2026-03-03
faq: true
faq_items:
  - question: "How was petersalvato.com built?"
    answer: "The site was compiled from three years of conversation transcripts using the Formwork Protocol, Savepoint Syntax, and a voice protocol derived from how Peter actually talks in unguarded sessions. The methodology came first. The AI tools serve it. Every claim traces to real ideation history."
  - question: "What is lens extraction in design evaluation?"
    answer: "Lens extraction studies a practitioner's body of work, identifies the evaluative framework underneath their visible decisions, and codifies it as testable criteria. The Formwork Protocol uses multiple extracted lenses per evaluation layer so their tensions produce original work, not imitation of any single influence."
  - question: "What tools were used to build this site?"
    answer: "Jekyll 4.4.1 with custom SCSS, hosted on GitHub Pages. Build tools include ChatGPT for exploratory thinking, Gemini for planning, and Claude Code for engineering. Visual treatments produced by PressWorks. The governance infrastructure (Formwork Protocol, Savepoint Syntax, voice protocol) was assembled over nearly a year before the current tools existed."
---

The system described here (what gets written down, where it lives, who checks it, what happens when someone contradicts it) took nearly a year to assemble. The current tools run inside that system. They follow rules set before they existed. The methodology came first. The tools serve it. That order matters for everything that follows.

I use AI every day. I also assembled the governance layer that makes sure the human doesn't disappear inside it. Not a contradiction. The whole point.

Every page on this site was compiled from three years of my conversations: over 60,000 documents of thinking out loud into AI tools, mined by the skills described here, evaluated against the lenses on the Formwork page, assembled under voice rules derived from how I actually talk in unguarded sessions. I didn't write the site. I assembled the system that compiled it from my own raw material.

This is compilation, not generation. The distinction matters. Most people use AI as a generator: prompt in, content out. The AI is the author and the human is the editor. I use it as a compiler. I am the source code: twenty-five years of decisions, instincts, and working knowledge accumulated across conversations. The system mines, evaluates, and assembles that source material into output. The AI is the toolchain. You don't say gcc wrote the program.

---

The first complete draft of this site came out of an AI session that ran clean. Good structure, clear hierarchy, reasonable copy. Session two adjusted the naming conventions. Session three adjusted them again. By session five the layouts were breaking, the three-tier taxonomy had been renamed twice, and a full teardown was required to get back to the decisions I'd actually made. The AI wasn't the problem. The project's decisions lived in my head, and every new context window started from zero.

I rebuilt it. The second draft had the architecture right: three tiers organized by intent ([Governance](/governance/), [Infrastructure](/infrastructure/), [Output](/output/)), a frontmatter schema that forces concrete answers (what broke, the gap between intent and execution, the structural fix, whether it held), a sidebar that generates from JSON. That structure locked early and never drifted.

The copy was a different story. Every page opened with an abstract concept before any real situation was established. "This project explores the intersection of..." on a page that should have said what broke and what I built to fix it. Twenty-one project pages, and not one of them sounded like a person had written them.

---

## Formwork held the shape

The teardown problem didn't have an obvious fix. I tried several before one held.

The first attempt was manual: copy-pasting context between ChatGPT threads. Dozens of overlapping conversations, each prefixed and numbered, decisions from one thread invisible to the next. I'd end a session by asking for a savepoint summary, copy it, paste it into the next thread to reconstruct my headspace. It worked until it didn't. The pasted context was a snapshot, not a living document, and it went stale the moment the next thread moved forward.

> "We wind up with these marathon sessions and your memory limitations cause us to lose things. There's a lot of overlap between conversations so I want the date and timestamp to be when the decision was made so that we can track as they grow and change by traversing all the documents."
> — from the session where the Savepoint Syntax was born, March 2025

So I tried embedding governance in the tool itself. ChatGPT's project instruction box: rules for how to respond, what syntax to use, what to check before answering. I wrote instruction sets, rewrote them, versioned them (v1.1, v2.2, v3.0). The tool ignored them. It would follow the rules one reply and break them the next. It checked the wrong URLs. It mangled the savepoint formatting I'd spent hours designing. I built modes and submodes for different work contexts — programming, writing, design — trying to narrow the scope enough that the instructions would hold. They didn't.

After repeated collapses, I built a validator: a suite of documents that act as rules for the AI to check against before responding. Render contracts, SEO specs, naming conventions, all scaffolded into a directory and version-controlled. The idea was sound. The execution depended on the tool reliably reading its own reference material, and it couldn't.

> "I just have no idea how to work with a tool that is this inconsistent and mysterious. I never know if I can trust what you say and to have to fact check every response makes you fairly useless to me."
>
> "These solutions can't be 'moving forward I'll...' from you cause you won't respect it. This needs to be about behavioral hygiene on my part."
> — from the session that broke the instruction model, April 2025

I was building governance infrastructure by hand, solving the same problem from different angles, and every solution exposed the same root failure: the tool had no durable memory. Each session started from zero regardless of what I'd written down for it. And this wasn't theoretical. I was doing this work to figure out how to bring AI tooling to my team at work. I needed governance patterns I could actually hand to other people, not workarounds that only held because I was babysitting them.

At one point I stepped back from the site entirely and asked: *"Am I somehow in my own way without knowing or realizing it in regard to getting this constellation of work completed?"* The answer was partly yes. The governance problem wasn't only about the tool. It was about how I was organizing my own thinking across tools and sessions.

I started adding governance documents to my repos. A CONVENTIONS.md to hold institutional memory: what's been decided, why, what not to touch. Then a SYMBOL-INDEX.md that mapped dependencies between components, like a database index but for architecture instead of code.

> "I feel like it would need to be able to follow each of the functions and see its dependencies and such."
> — describing how the symbol index should work, August 2025

The interconnections mattered as much as the components. That pattern worked because the documents lived in the project, not in a tool's instruction box.

When I moved to Claude Code, the pieces landed. A CLAUDE.md file at the project root carries the site's institutional memory (what's been decided, the current state of every workstream, what not to touch, how the site speaks) and every session reads it automatically before work begins. No copy-pasting. No instruction box that gets ignored. The file is the session context.

What I found validating: Anthropic's engineering team built the same patterns into their product that I'd been assembling by hand for months. Persistent project memory, convention files, context that survives between sessions. I didn't adopt their solution. They arrived at mine. I use the Claude ecosystem now because it's the first tool that made the governance I'd already invented actually functional.

That was the seed of the [Formwork Protocol](/governance/formwork-protocol/). Not a theory I worked out and then applied. Nearly a year of failed attempts, manual workarounds, and real collapses that kept exposing the same problem from new angles. The fix held and kept expanding as the project exposed new failure modes.

The contradictions between sessions stopped. But governance was only the first layer. The copy problem was still there, and it needed a different kind of structure.

---

## Savepoint Syntax marked the turns

The build ran across multiple tools and sessions: exploratory work in ChatGPT, structural planning in Gemini, engineering and implementation in Claude Code. Each one a different context window. Decisions made in one session were invisible to the next.

I started dropping [savepoints](/governance/savepoint-syntax/) routinely, marking the cognitive turning points as they happened: when the three-tier structure locked, when the voice protocol crystallized, when the frontmatter schema stopped changing. Those markers live inside the conversation stream. When I come back weeks later or switch tools, the savepoints tell me where the thinking was, not just what was decided.

The build produced over 60,000 documents of ideation history across all the sessions. Savepoints are the trail system through that mass. Without them, the continuity between a naming decision in January and a copy rewrite in March would be gone.

> "The overarching goal of this is to create a creativity generation machine. It's not using the AI tools to ideate. It's using them to extract from the user and organize it and channel it."
> — realizing what the savepoint system was actually for, March 2025

---

## The knowledge skill replaced invention

The copy problem had a specific shape: every page needed real moments, real decisions, real language. The voice protocol (more on that below) demanded specificity. But the specifics were scattered across months of conversation exports in four different formats.

So I built a skill that traverses all of it. Claude Code session transcripts, ChatGPT JSON exports, Claude.ai markdown, Gemini exports. You give it a query and it searches the full ideation history for real moments: what actually happened, what I actually said, what decisions were actually made.

> "This is the first time we're able to chat against the entire conversation base. So we're feeling our way around. We have no hard rules in place... we need to figure out what the plan is to get you to reliably look at the documentation before responding."
> — the first session where I tested traversing my own ideation history, April 2025

The copy on this site traces back to things I said or decided in working sessions. The [Savepoint Syntax](/governance/savepoint-syntax/) page describes five months of typing "give me a savepoint" before the system existed because that's what happened. The knowledge skill finds those moments so the writing doesn't have to invent them.

---

## The voice protocol caught the marketing language

I didn't catch the copy problem by reading the pages. I caught it by running the writing through evaluation questions: is there a real person in this text? Is the stake specific enough to be believed? Could you hear someone say this out loud?

The answer to all three was no. Clean architecture, wrong voice.

I wrote a voice protocol in response. Codified rules based on Debbie Millman's interview discipline (give me the real human moment, name what you were chasing, make the stakes specific enough to be believed) held together by a craftsman's instinct (show the work, lead with action, use material vocabulary, no hype). The protocol checks every draft against both sides: Millman asks whether there's a real person in the text, whether the stake is specific enough to be believed. The craftsman asks whether it shows instead of tells, whether you can hear it spoken out loud, whether any sentence exists to impress rather than demonstrate. If a sentence fails either test, it gets cut or rewritten.

Then I rewrote every page against it. Some pages took three passes before the voice held. The [Formwork Protocol](/governance/formwork-protocol/) page, which is about evaluation methodology, was one of the hardest. The instinct is to explain how evaluation works. The protocol demanded I show what evaluation produced: the SVA critique room, the construction metaphor, what happens when lenses disagree.

---

## The steward found the paradox

The evaluation system described on the [Formwork](/governance/formwork-protocol/) page runs on this site. Structural lenses (extracted from Vignelli, Rams, Muller-Brockmann) evaluate whether the design is well-built: grid, typography, spacing, hierarchy. Narrative lenses (extracted from Victore, Millman, Draplin) evaluate whether the site feels like my world, measured against the identity system codified in the [Order of the Aetherwright](/governance/order-of-the-aetherwright/).

During one evaluation pass, the structural lenses scored seven out of nine criteria at the top tier. The narrative lens that asks "does this feel like a world? would a stranger know who this person is just by being in the room?" scored WEAK. Projects like [Versagrams](/output/versagrams/) and [The Deep Cuts](/output/the-deep-cuts/) existed in the collection, but nothing in the site's structure made you hear the music playing. Same site. Two layers. Opposite readings.

That looked like a contradiction until I recognized what the two layers were actually measuring. The structural layer was evaluating craft: is the grid sound, is the typography clean, does the spacing hold. The narrative layer was evaluating identity: does this feel like a specific person's space, or could it be anyone's portfolio.

Both layers were right. The craft was sound and the identity was buried. I kept the structural foundation and rewrote the copy to bring the identity forward. That was a convergence decision: two layers, opposite readings, one choice that honored both. That tension cracked open the layered architecture that became the core of the Formwork Protocol. The principle was old: multiple perspectives, accumulated decisions, the SVA critique room. The operational structure came from watching that principle produce a real contradiction on a real build.

---

## What the structure produces

The projects cross-link by concept, not by category. [Encore](/infrastructure/encore/) links to [Formwork](/governance/formwork-protocol/) because the institutional memory accumulated across twelve years of running that platform fed the protocol. The [vocabulary](/vocabulary/) page links to every project that demonstrates each term. You can follow a thread from a governing principle through the infrastructure it produced to the work it delivered.

Every project page carries machine-readable metadata: altitude (01, 02, 03 for which tier), faculty (design, engineering, UX/IA), JSON-LD structured data for search engines and LLMs. The sidebar navigation, the tier landing pages, and the index all generate from JSON data files. One source of truth, templated everywhere it appears.

---

## Tech stack

**Generator:** Jekyll 4.4.1, native SCSS compilation
**Styling:** Custom SCSS, no utility framework. Visual treatment (grain, halftone textures) produced by [PressWorks](/infrastructure/pressworks/)
**Typography:** Rubik (body), Chainprinter (structural headings, self-hosted), Space Mono (monospace)
**Layout:** Fixed sidebar + main content, responsive to mobile
**Collections:** _governance/, _infrastructure/, _output/
**Data:** JSON (navigation, index, vocabulary, contact)
**Structured data:** JSON-LD (Person, CreativeWork, BreadcrumbList, FAQPage)
**Automation:** Liquid templates driven by navigation.json
**Hosting:** GitHub Pages, deployed on push
**Build tools:** ChatGPT (exploratory), Gemini (planning), Claude Code (engineering)

---

## The interlock

The [Formwork Protocol](/governance/formwork-protocol/) describes how to build an evaluation room and staff it with extracted lenses. [Savepoint Syntax](/governance/savepoint-syntax/) describes how to mark cognitive turning points so they survive context loss. The voice protocol enforces how the site speaks. The knowledge skill grounds every claim in real ideation history.

This site runs on all of them. The Colophon is the build story. The project pages are the proof. The Formwork page ends by pointing here. This page points back by showing what happened when those patterns ran on a real project, including the failures that shaped them.
