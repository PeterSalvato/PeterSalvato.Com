---
layout: context
title: "Fidelity"
permalink: /vocabulary/fidelity/
description: "The gap between what was meant and what survived. Fidelity erodes at handoffs: voice loses fidelity when forced into structure at the point of capture, context loses fidelity when sessions close, design intent loses fidelity through implementation."
last_modified: 2026-03-16
icon: menu_book
seo_keywords:
  - fidelity
  - design fidelity
  - why does my design look different from the mockup
  - losing ideas between meetings
  - intent vs execution gap
  - design intent degradation
  - voice fidelity AI
  - context fidelity
  - losing reasoning between sessions
  - why does AI forget what we discussed
  - what was meant vs what shipped
  - handoff degradation
  - implementation drift
  - idea fidelity capture
  - preserving design intent
  - original intent legible
  - fidelity loss at scale
  - Peter Salvato
related:
  - /vocabulary/drift
  - /evidence/encore
  - /systems/savepoint
  - /research/accommodation-design
  - /essays/voice-governance
  - /essays/i-needed-a-better-tool
---

## What It Is

Fidelity is the measure of how much of the original meaning survived the transfer.

A designer has an intent. It passes through a brief, a handoff, a review, a build cycle, and arrives in production. How much of the original intent is still present? That gap is a fidelity question.

Fidelity is not about quality. A high-quality product can have low fidelity to what was originally meant. A rough prototype can have perfect fidelity to the idea it was built to test. The question isn't "is this good?" It's "does this still resemble what was meant?"

Fidelity erodes at handoff points. Every time understanding passes from one context to another (person to person, session to session, concept to execution) some meaning leaks. The erosion is usually invisible in the moment. It accumulates into a gap between what was meant and what arrived.

Three types of fidelity loss keep showing up across every domain I work in. Voice fidelity: ideas lose their character when forced into structure at the point of capture. Context fidelity: active reasoning evaporates when the session closes. Visual fidelity: design intent degrades through implementation when the intent was never externalized.

---

## Where It Comes From

Twelve years on [Encore](/evidence/encore/) produced the clearest demonstration of fidelity held over time. Three complete technology shifts. The original intent: a browser-based platform that could serve the complexity of enterprise recruiting without drowning the person using it. That intent is still legible in the product. The design system encoded the standard in the code itself, not in documentation that developers ignore. Constraints that hold their own shape without depending on someone to enforce them.

The counterexample is in the same project. The picture of how the whole thing fit together lived in one person's head. When that person wasn't in the room, the picture wasn't in the room. Features shipped that contradicted architecture built over years, because the people shipping them didn't have the context for why the architecture was shaped that way. The intent was there. It couldn't survive the handoff.

The pattern repeats at every scale. A voice note dictated on the commute contains the real shape of an idea: the specific phrasing, the exact analogy, the emphasis that makes it land. Transcribed into an outline an hour later, those qualities are gone. The outline is accurate. It has low fidelity to the original idea.

Months of AI sessions developing a novel, a brand system, a career framework. The connections between ideas existed inside the conversation. When the thread closed, they were gone. Not the notes. The reasoning. The continuity that made the notes mean something.

Fidelity loss is not carelessness. It's what happens when the distance between intent and execution is larger than the system can hold.

---

## How It Works

Fidelity erodes through three specific mechanisms.

### Premature structure

Ideas lose fidelity when forced into structure at the point of capture. An outline imposes hierarchy before hierarchy has been earned. A template forces categorization before categories have emerged. A recording pushed to transcription-plus-summary strips the qualifications and backtracks that carry the actual shape of the thinking.

The accommodation move: remove friction at the point of capture so the raw material carries the real structure of the thinking. Generate first. Structure afterward. [Input inversion](/research/input-inversion/) is this principle formalized: reverse the burden of structure from the human to the tooling. The human speaks without constraint. The tools find the structure in what was already expressed.

When the ideas lose fidelity on the way in, everything downstream works from a diminished version of the original.

### Context loss at session boundaries

Active understanding exists only inside the session where it was built. The reasoning that connected a set of ideas, the turning point where a decision locked in, the specific phrasing that made an argument work: none of it survives the close.

[SavePoint Syntax](/systems/savepoint/) was built because this was causing real loss. Not across a single session but across months of interconnected work. The connections between ideas evaporated when threads closed. A re-opened session started from what the notes said, not from what the understanding actually was.

A savepoint carries enough semantic payload to reconstruct the understanding, not just mark its location. The gap between those two things (index entry versus preservation format) is the gap v3.2 was built to close. The `context:` field holds one sentence of actual substance: what was decided, what shifted, what the realization contains.

### Implementation handoff

Design intent degrades when it exists only in someone's head. A designer carries a clear picture of how something should feel. That picture passes through a conversation, then a spec, then a build. Each translation reduces fidelity. If the intent was never externalized in a form the next person can hold, the handoff transfers only the surface.

This is why [governance as a design material](/essays/drift-how-good-work-dies-slowly/) matters. Encode the standard in the code itself. Make the right thing easier to do than the wrong thing. When the intent is structural rather than remembered, it can survive the handoff.

---

## Three Applied Examples

### Voice fidelity (Voice Governance)

AI copy loses voice fidelity because the model learns from published writing. Published writing is performance: shaped for an audience, polished, filtered. The real voice is in the conversations, the working messages, the unguarded explanations where someone is thinking out loud instead of presenting.

A voice pipeline built on conversation transcripts has higher fidelity to how someone actually sounds. A pipeline built on published writing has high fidelity to published writing, which has already filtered out the thing it needs. The [voice governance pipeline](/essays/voice-governance/) samples from the conversations. The governance rules prevent the model's default register from overwriting the source material. Every published page is checked against patterns extracted from the conversations, not from the published pages. That is the fidelity check.

### Context fidelity (SavePoint)

Five months of a novel in development. Dozens of sessions where worldbuilding connected to character connected to structure connected to theme. Every session ended with the thread closing. The next session started from the summary, not from the understanding. The reasoning that made the summaries meaningful was gone.

The loss wasn't the notes. It was the continuity. [SavePoint Syntax](/systems/savepoint/) addresses fidelity loss at session boundaries by marking the exact moment understanding shifted, before the context closes. Not a summary of what was discussed. A marker that carries enough orientation to reconstruct where the thinking was. High fidelity capture requires capturing the moment, not the narrative version of the moment.

### Visual fidelity (Encore, twelve years)

A design system is a fidelity mechanism. It externalizes the intent into constraints the code enforces. Color values in the variables file. Component patterns in shared modules. When a developer builds from those constraints, the output has high fidelity to the design intent whether or not the designer is in the room.

A design system that lives in documentation has lower fidelity because the handoff depends on the developer reading it, understanding it, and applying it consistently across hundreds of decisions. Each step introduces error. The SCSS design system at [Encore](/evidence/encore/) wasn't documentation. It was structure: if a color wasn't in the variables file, it didn't belong. The intent held for twelve years because it was encoded, not remembered.

---

## Connected Concepts

- **[Drift](/vocabulary/drift/)** — Fidelity loss accumulated over time through reasonable decisions. Drift is how fidelity erodes when the original intent stops being the thing everyone checks against.
- **[SavePoint](/systems/savepoint/)** — Context preservation syntax. Built specifically to hold fidelity at session boundaries, where reasoning evaporates when threads close.
- **[Accommodation Design](/vocabulary/accommodation-design/)** — Ideas lose fidelity when forced into structure at the point of capture. Accommodation design removes that friction from the human side and handles structure on the tool side.
- **[Input Inversion](/vocabulary/input-inversion/)** — The design principle that reverses the burden of structure from the human to the tooling. Fidelity is highest when the source material is unprocessed.
- **[Load-bearing](/vocabulary/load-bearing/)** — Fidelity loss often begins by removing load-bearing elements that were never identified as such. The removal felt safe. The system felt it later.
- **[Scaffold](/vocabulary/scaffold/)** — A scaffold that stays permanent builds dependency. A scaffold that disappears too early isn't a fidelity problem; it was always temporary.

---

## Go Deeper

- [Encore](/evidence/encore/) — twelve years of fidelity held through governance, not memory
- [Drift: How Good Work Dies Slowly](/essays/drift-how-good-work-dies-slowly/) — the mechanism by which fidelity erodes through accumulated reasonable decisions
- [Voice Governance](/essays/voice-governance/) — fidelity applied to voice: why AI copy loses it and how the pipeline holds it
- [I Needed a Better Tool](/essays/i-needed-a-better-tool/) — context fidelity loss across sessions and the reflex that became SavePoint
- [SavePoint Syntax](/systems/savepoint/) — the preservation format built specifically for context fidelity at session boundaries
- [AI Governance as Accommodation Design](/research/accommodation-design/) — the bidirectional framework, including why ideas lose fidelity when forced into structure at capture
