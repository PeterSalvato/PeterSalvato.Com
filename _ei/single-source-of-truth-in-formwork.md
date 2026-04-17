---
layout: post
title: "Single Source of Truth in FormWork"
date: 2026-03-30
published: true
description: "One file governs the session. Everything references it. Nothing overrides it."
seo_keywords: ['constraint', 'FormWork', 'AI governance', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 51
depth: reading
domain: Operational methodology + AI implementation
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

FormWork coordinates AI tool sessions. I named it after concrete formwork. You build the form, pour the material, wait for it to set, strip the form. The structure stands because the form held it while it was curing. The form is temporary. The structure is permanent.

The core constraint in FormWork is single source of truth. One governing document per session. Every tool in the session references it. No tool overrides it. If a tool needs something that isn't in the document, the document gets updated before the tool proceeds. The document is the form. Everything else is the pour.

This sounds simple. It is simple. That's the point.

The failure mode it prevents is tool-to-tool drift. When multiple AI tools work on the same project without a shared reference point, each one makes locally reasonable decisions that diverge from each other. Tool A decides the tone is conversational. Tool B decides the tone is authoritative. Both decisions make sense in isolation. The output is incoherent because nobody told them to agree.

In enterprise code, the single source of truth is the variables file. Every color, every spacing value, every font stack references one file. A developer who needs a new color doesn't pick one. They use what's in the file. If the color they need doesn't exist, they propose adding it to the file. The file is the governance. The distributed decisions all point back to one place.

In the classroom, the single source of truth was the IEP. Every accommodation, every goal, every assessment criterion referenced one document. When a specialist (speech therapist, occupational therapist, reading intervention) worked with a student, they referenced the same IEP I referenced. We might emphasize different goals. We never contradicted each other because the document held the shared understanding.

The constraint in FormWork is architectural, not bureaucratic. The goal is coherence. When five tools reference one document, their outputs converge. When five tools each maintain their own understanding of the project, their outputs diverge. Convergence isn't automatic. It requires structure. The structure is: one file, everything references it, nothing overrides it.

The simplest version of this constraint is the most effective. A CLAUDE.md file in a project directory. The AI reads it before every interaction. The conventions, the boundaries, the goals are all in one place. That's FormWork at its most basic: one source, one truth. The complexity of the output can be arbitrarily high. The governance structure stays simple.
