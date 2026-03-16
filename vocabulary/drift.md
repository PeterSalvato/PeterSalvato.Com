---
layout: context
title: "Drift"
permalink: /vocabulary/drift/
description: "Six months into a project, the output starts degrading. Nobody changed anything. Nobody made a bad call. But somewhere around month three, the original intent stopped being the thing everyone was checking against."
last_modified: 2026-03-16
icon: menu_book
seo_keywords:
  - drift
  - design drift
  - why does software quality decline over time
  - design system degradation
  - preventing UX drift
  - how good products get worse
  - technical debt vs drift
  - quality erosion enterprise software
  - design consistency across teams
  - invisible quality loss
  - software entropy
  - maintaining design systems
  - why products stop feeling like one product
  - governance as design material
  - institutional memory loss
  - context loss between sessions
  - specification drift
  - method drift
  - reasonable decisions bad outcomes
  - design system maintenance long term
  - Peter Salvato
related:
  - /evidence/encore
  - /systems/savepoint
  - /systems/formwork
  - /practice/accommodation-design
  - /essays/drift-how-good-work-dies-slowly
---

## What It Is

Six months into a project, the output starts degrading. Nobody changed anything. Nobody made a bad call. But somewhere around month three, the original intent stopped being the thing everyone was checking against. That is drift.

Drift is not technical debt. Technical debt is a known shortcut. You take it on purpose: ship the quick version, log the cost, plan to pay it back. It sits on a backlog. Someone owns it. Drift does not work that way. Nobody logs drift because nobody sees it happening. Each individual decision looks fine. The cumulative effect is invisible until it's catastrophic.

The distinction matters because the fixes are different. Technical debt responds to prioritization: put it on the backlog, allocate time, pay it down. Drift doesn't respond to prioritization because nobody knows it's there. You can't schedule a fix for something the team doesn't perceive as broken.

Drift happens to methods, not just to outputs. A naming convention that made perfect sense in year one gets bent slightly in year three. By year five, half the codebase follows one convention and half follows the mutation, and nobody remembers which was original. The standard itself went invisible.

---

## Where It Comes From

A button on the Encore recruiter dashboard had 16 pixels of left padding on one screen and 12 on another. Same button. Same label. Same function. Built by two different engineers, probably two years apart, each one making a reasonable call with the information they had.

That button was fine. In isolation it was nothing. You'd never file a ticket for four pixels.

Multiply that by twelve years of active development. Hundreds of engineers touching the same product. Thousands of small decisions about spacing, alignment, type size, color values, border radius, hover states. Each one close enough. None of them quite right. After a decade the product starts to look like broken windows. Everything is a little bit off. The alignment is off everywhere, so you can't even see the baseline anymore.

Every time an engineer had to decide how to style a button, how to space a component, how to handle an edge case, the system was asking them for a judgment call the system should have made for them. The system had no opinion. It offered no constraints, no defaults, no governed tokens. It just said "build the thing" and left every micro-decision to whoever picked up the ticket.

A hundred engineers making a hundred reasonable decisions will produce a hundred slightly different products. That's not a people problem. That's a governance problem.

---

## How It Works

Drift operates through three mechanisms. All three are invisible in the moment and obvious in retrospect.

### Accumulated reasonable decisions

No single decision causes drift. Each one is defensible on its own terms. The engineer who chose 12px padding instead of 16px made a reasonable call. The problem is that the next engineer also makes a reasonable call, and so does the one after that, and the cumulative effect is something nobody designed.

The fix is not better engineers or stricter reviews. The fix is a system that holds the line so the people inside it can focus on the work that actually requires their judgment. Encode the baseline once. Make deviation require intent instead of making consistency require vigilance.

### Invisible standard loss

When the original intent stops being legible, people stop checking against it. Not because they stopped caring. Because the reference is gone. The specification existed in someone's head, or in a document nobody reads, or in a convention that was obvious when three people used the system and invisible when thirty did.

This is why [SavePoint](/systems/savepoint/) exists. The turning points disappear when the context closes. A savepoint marks where the thinking was, so the next person (or the same person, months later) can reconstruct what was decided and why. Without those markers, every new participant starts from what the system looks like now, not from what it was supposed to be.

### Method drift

Drift doesn't only affect outputs. It affects the process itself. A review cadence that started weekly becomes biweekly because nothing seemed urgent. A naming convention gets bent for one edge case, then the exception becomes the pattern. A design system that was built to enforce consistency starts accumulating one-off overrides until the overrides outnumber the rules.

Method drift is harder to catch because the people inside the process adapted gradually. The frog in the pot. The current state feels normal because nobody experienced the full delta.

---

## Three Applied Examples

### Enterprise Platform (Encore)

Twelve years on one product. The SCSS design system was specifically a set of constraints encoded in the code itself: if a color value wasn't in the variables file, it didn't belong. If a component wasn't built from the existing patterns, the code made that visible. Not documentation sitting in a shared drive that developers ignore. Actual constraints that enforce consistency.

Building it was a project. Keeping it clean for twelve years was the practice. The whole point was to keep the original intent legible through every handoff, so the thing that shipped still resembled the thing someone needed.

The institutional memory problem: the picture of how the whole thing fit together lived in one person's head. When that person wasn't in the room, the picture wasn't in the room. Features would ship that contradicted architecture maintained for years, because the people shipping them didn't have the context for why the architecture was shaped that way.

### AI Session Context

A conversation with an AI tool runs for forty messages. The first few responses are sharp, specific, useful. By message thirty, the responses are vague, repetitive, contradictory. The model didn't get worse. The context window filled up. Earlier decisions lost attention weight. The session drifted from what was established at the start.

This is the same mechanism as enterprise drift operating on a compressed timescale. Minutes instead of years. [SavePoint Syntax](/systems/savepoint/) addresses it the same way: mark the turning points before they disappear, so the system can reconstruct where the thinking was.

### Voice in AI Copy

Read ten AI-assisted "About" pages and they sound identical. Same cadence, same transitions, same way of building to a point. The person disappears. What remains is the tool's default register.

This is voice drift. The model's training data is dominated by published writing: polished, performative, audience-aware. Without explicit governance, every piece of output drifts toward that average. The [voice pipeline](/practice/voice-governance/) is a drift-prevention system: sample from conversations (where the real voice lives), encode the patterns as constraints, and verify every output against them before it ships.

---

## The Relationship to Accommodation Design

Drift is what happens when [accommodation](/vocabulary/accommodation-design/) stops. The system stops being designed for the processing realities of the people inside it and starts asking them for judgment calls it should handle structurally.

The governance response to drift is not more rules or stricter reviews. It's encoding the standard in a form that holds without requiring human intervention at every step. Make the right thing easier to do than the wrong thing. Make deviation require intent. That's an accommodation move: read what the system receiving the work actually needs, and build structure that meets it.

[FormWork](/systems/formwork/) is the coordination harness that prevents method drift. [SavePoint](/systems/savepoint/) prevents context drift. [LensArray](/systems/lensarray/) prevents evaluation drift (criteria bleeding together across assessment passes). Each one addresses a different surface where drift operates, using the same structural principle: externalize what would otherwise depend on one person's memory.

---

## Connected Concepts

- **[Fidelity](/vocabulary/fidelity/)** — The gap between what was meant and what survived. Drift is how fidelity erodes.
- **[FormWork](/systems/formwork/)** — The coordination harness that prevents method drift.
- **[SavePoint](/systems/savepoint/)** — Context preservation. Marks the turning points before they disappear.
- **[Accommodation Design](/vocabulary/accommodation-design/)** — Drift is what happens when accommodation stops.
- **[Load-bearing](/vocabulary/load-bearing/)** — Drift removes load-bearing elements without anyone noticing, because the removal was never a single decision.
- **[Scaffold](/vocabulary/scaffold/)** — A scaffold that stays permanent builds dependency. A scaffold that disappears too early enables drift.

---

## Go Deeper

- [Drift: How Good Work Dies Slowly](/essays/drift-how-good-work-dies-slowly/) — the four-pixel button and what it taught
- [Encore](/evidence/encore/) — what twelve years without catastrophic drift looks like, and the governance that held it
- [I Needed a Better Tool](/essays/i-needed-a-better-tool/) — context drift across AI sessions and the reflex that became SavePoint
- [Voice Governance](/essays/voice-governance/) — drift prevention applied to AI-generated copy
- [SavePoint Syntax](/systems/savepoint/) — the tool built specifically to catch drift at the moment it happens
