---
layout: context
title: "Context"
permalink: /vocabulary/context/
description: "The active state of understanding that exists in the moment of working and disappears when the session ends. The most perishable thing in knowledge work."
last_modified: 2026-03-15
icon: menu_book
seo_keywords:
  - context loss knowledge work
  - losing ideas between meetings
  - AI forgets what we discussed
  - knowledge loss between sessions
  - context window AI
  - session continuity AI
  - how to pick up where I left off AI
  - losing reasoning between sessions
  - ideation loss AI chat
  - team handoff context loss
  - project knowledge disappears
  - institutional memory AI
  - cognitive continuity
  - working memory knowledge work
  - AI session memory loss
  - SavePoint Syntax
  - Peter Salvato
  - context preservation
  - why AI loses track of decisions
  - what was decided in the last meeting
  - knowledge work perishable thinking
related:
  - /systems/savepoint
  - /research/prosthetic-cognition
  - /evidence/encore
  - /practice/new-city
  - /essays/i-needed-a-better-tool
---

## What It Is

Context is the active state of understanding that exists in the moment of working. The picture in someone's head. The whole project at once: what was decided, what depends on what, which call downstream will break if this one drifts.

It is the most perishable thing in knowledge work.

Documents persist. Decisions persist. You can write down a decision and it will still be there next week. What disappears is the web of reasoning around the decision: why it was made, what it was checked against, what it ruled out, what it left open. That's the connective tissue. When the session ends, the tissue goes.

This is why two people who were in the same meeting three months ago can describe it completely differently. The context in which they encoded the meeting has been overwritten by other work since then. What survives is a fragment, interpreted through whatever frame they're in today.

---

## Where It Comes From

My father held the whole picture of a construction site in his head. Fifty trades working their piece. He knew what each crew needed, what depended on what, where a decision made Tuesday would surface as a problem in another crew's work by Friday. He didn't document it. He held it. When he left the site, the picture left with him.

I watched what happened when he wasn't there. Jobs slowed. Coordination broke. Things were redone. Not because anyone made a bad decision, but because the reasoning that connected the decisions was gone.

I have been trying to externalize that picture for most of my career. [Encore](/evidence/encore/) gave me twelve years of evidence about what happens when institutional context is held in one person's head. Features shipped that contradicted architecture maintained for years, because the people shipping them didn't have the context for why the architecture was shaped that way. They had the documents. They didn't have the reasoning.

The problem sharpened when I started working inside long AI sessions. A conversation would run for hours, something important would shift, and then the thread would close. The model had no memory between sessions. None of what happened survived.

That's where [SavePoint Syntax](/systems/savepoint/) started. The specific experience of doing hours of thinking and arriving the next day to an empty room.

---

## How It Works

Context operates on three timescales, and it degrades differently on each one.

**Within a session.** A conversation starts sharp. Decisions get made, reasoning accumulates, understanding deepens. Somewhere around message thirty in a long AI session, or around hour three of a complex meeting, something starts to soften. The early decisions lose weight. New input crowds out what was established at the start. The session drifts from its own opening. This is the same mechanism as [drift](/vocabulary/drift/) compressed into hours instead of years.

**Across sessions.** The session ends. The next one starts. Even with notes, even with summaries, something is missing. The connective tissue between decisions is harder to reconstruct than the decisions themselves. You know what was concluded. You don't know what was ruled out, what was almost chosen, or why the chosen path was chosen over the alternative. That reasoning lived only inside the previous session.

**Across teams and handoffs.** The person who holds the context leaves. Or a new person joins. Or a project pauses for three months. The documents are there. The institutional reasoning is not. The new person reads the documents, builds their own interpretation, and starts making reasonable decisions against a frame that's different from the one the original work was built in. That's how you get drift without anyone doing anything wrong.

The common thread: context is generated in real time by the people doing the work, and none of the normal documentation practices preserve it. Notes capture conclusions. Wikis capture states. None of them capture the reasoning web.

---

## Three Applied Examples

### New City (Lost Ideation)

I had been building the architecture for a novel across dozens of AI sessions. Fractal structure. Beat specifications. Somatic layer. Each session built on the previous one, decisions referencing earlier decisions, the whole system becoming increasingly interconnected.

Then the threads closed. Not a crisis. Just the normal end of a session.

I came back and the continuity was gone. The thinking had happened. The connections between ideas had happened. But the architecture existed in fragments across closed conversations, and none of it survived as a usable state I could resume from.

What I lost wasn't the documents. I had the structural notes. What I lost was the live understanding that had been running alongside those notes: why a specific beat structure had been chosen, what it was meant to solve, what alternatives had been discarded. [New City](/practice/new-city/) is the project that made context loss concrete for me.

### Encore (Institutional Memory)

Twelve years on one platform. The picture of how the whole thing fit together lived in my head. When I wasn't in the room, the picture wasn't in the room.

Same problem, slower timescale. Individual engineers made reasonable decisions. Nobody made a bad call. But the reasoning web that connected the architecture choices, that explained why the platform was shaped a particular way and what would break if it changed, existed only inside the context I was carrying.

Features shipped that contradicted architecture maintained for years. Not because the documentation was wrong. Because the context that gave the documentation meaning wasn't in the room. [Encore](/evidence/encore/) is what twelve years of fighting that problem looks like.

### AI Session Handoff

The specific failure that produced [SavePoint Syntax](/systems/savepoint/): a pitch strategy developed in one session, a critical three-layer plan, wasn't in the savepoint that was supposed to preserve it. The savepoint reached the right neighborhood. It couldn't reconstruct what happened there. Claude had to read two hundred lines of surrounding conversation to reconstruct what had been decided.

The savepoint had the marker. It was missing the context. The v3.2 update added a `context:` field: one sentence of actual substance. What was decided, what shifted, what the realization contains. The difference between an index entry and a preservation format.

---

## Connected Concepts

- **[SavePoint](/systems/savepoint/)** — The tool built specifically because context is the most perishable thing in knowledge work. Marks the turning points before they disappear.
- **[Drift](/vocabulary/drift/)** — What accumulates when context isn't preserved. Reasonable decisions made against frames that have shifted from the original.
- **[Accommodation Design](/vocabulary/accommodation-design/)** — Accommodating the model's lack of persistent memory is one half of the framework. The other half accommodates the human's natural context limits.
- **[Prosthetic Cognition](/research/prosthetic-cognition/)** — The model extends working memory and holds context across a larger corpus than any human can maintain. The prosthetic relationship only works if context is preserved at the interface.
- **[Fidelity](/vocabulary/fidelity/)** — Context loss is the primary mechanism of fidelity loss. What was meant and what survived diverge when the reasoning web disappears.
- **[FormWork](/systems/formwork/)** — The coordination harness that holds the right context available at the right moment.

---

## Go Deeper

- [SavePoint Syntax](/systems/savepoint/) — the protocol built to preserve context at cognitive turning points
- [I Needed a Better Tool](/essays/i-needed-a-better-tool/) — the specific experience of losing reasoning across AI sessions
- [Encore](/evidence/encore/) — what twelve years of institutional context loss looks like in an enterprise platform
- [New City](/practice/new-city/) — lost ideation and the architecture that emerged from trying to preserve it
- [A Different Kind of Harness](/research/prosthetic-cognition/) — the prosthetic relationship depends entirely on preserving context at the interface
