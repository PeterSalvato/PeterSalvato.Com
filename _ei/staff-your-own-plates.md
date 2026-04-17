---
layout: post
title: "Staff Your Own Plates"
date: 2026-03-30
published: true
description: "Build a multi-tool AI workflow the way a print shop staffs a multi-color job."
seo_keywords: ['workflow', 'AI tools', 'practicum', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 100
depth: making
domain: All
function: Practicum
seed_status: DEEP
last_modified: 2026-03-30
---

In screenprinting, a multi-color job needs multiple screens. Each screen carries one color. Each color has its own plate. You staff the plates in order: which color prints first, which prints second, which prints last. The order matters. Light colors under dark colors, not the other way around. The registration has to hold across every pass.

A multi-tool AI workflow works the same way. Each tool does one thing. The order matters. The handoff between tools has to carry the right context or the output drifts.

Here's how to staff your own plates for a content production workflow.

**Plate 1: Source extraction.** The first tool's job is to find the raw material. Conversations, notes, rough drafts, existing content. This tool doesn't write anything. It gathers. The output is a pile of source material organized by relevance.

**Plate 2: Compilation.** The second tool takes the source material and compiles it into a draft. This is the generation step. The tool has the source material and the constraints (voice protocol, project conventions, topic scope). It produces a first draft.

**Plate 3: Evaluation.** The third tool evaluates the draft against specific criteria. Voice consistency. Factual accuracy. Structural coherence. Each evaluation dimension gets its own pass. The evaluator doesn't know what the compiler intended. It only knows the criteria.

**Plate 4: Verification.** The fourth tool (or the human) checks the evaluation results against the draft. Where evaluations flag issues, the draft gets revised. Where evaluations pass, the draft moves forward.

**The handoff is everything.** When Plate 1 passes material to Plate 2, the context has to be explicit. What's source material and what's metadata. What's high confidence and what's uncertain. If the handoff is a raw dump, Plate 2 guesses about what matters. Guessing is where drift starts.

**The registration is the governing document.** A FormWork session file or a CLAUDE.md that every plate references. The same way every screen in a print job references the same artwork. If Plate 2 is working from a different understanding than Plate 3, the output won't register.

**Start with two plates, not four.** A compiler and an evaluator. That's enough to see the value of decomposition. The compiler writes. The evaluator checks. They don't talk to each other. You read both results and make the call. Add plates when you understand where the process breaks.

The goal isn't a complex workflow. The goal is a clean handoff between tools that each do one thing well. Same as a print shop. Each screen does one color. The registration holds them together. The result is something none of them could produce alone.
