---
layout: post
title: "The Skill/Agent Decomposition Pattern"
date: 2026-03-09
published: true
description: "How the skill system is built."
seo_keywords: ['ai', 'decomposition', 'registration', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 132
depth: making
domain: AI/governance
function: SEO
seed_status: DEEP
last_modified: 2026-03-14
---
The skill architecture I've built follows a strict decomposition pattern. Two types: atomic skills and coordinator skills. The relationship between them mirrors every decomposition pattern I've used across every domain.

An atomic skill does one thing. The voice-sample skill studies how I actually talk. The copy-verify skill runs a thirteen-item checklist against a piece of copy. The texture-grain skill generates paper grain overlays. Each one has a single responsibility, a defined input, and a defined output.

A coordinator skill dispatches atomics. The copy skill chains source-extraction, voice-sample, writing, and copy-verify into a sequence. The audit skill runs capture, baseline, lenses, and synthesis in enforced order, where each step produces an artifact the next step requires.

The pattern is the same one my father used on construction sites. The atomic skills are the trades. Each trade does its job. The coordinator is the superintendent. The superintendent doesn't hang drywall. The superintendent decides which trades work in what order and manages the handoffs.

The decomposition has rules.

An atomic skill never calls another atomic skill. It doesn't know about the system it lives in. It takes input, does its job, and returns output. The same way an electrician doesn't need to know the plumber's schedule. The skill system calls the electrician when the wiring needs to happen.

A coordinator skill never does the work itself. It sequences, dispatches, and integrates. The same way a superintendent never picks up a hammer. The coordinator skill's job is dependency management: which atomic runs first, what does the second one need from the first, and what happens when one of them fails.

The separation prevents cascading complexity. When I need a new capability, I build an atomic skill. I don't modify an existing coordinator. When I need a new workflow, I build a coordinator that dispatches existing atomics in a new sequence. I don't build a monolithic skill that tries to do everything.

This scales. I currently have over sixty skills. Some are pure atomics (sensitivity-check, repo-hygiene, container-status). Some are coordinators (design-review dispatches capture then runs nine visual lenses, service-health dispatches five health checks in parallel). The architecture stays legible because the decomposition pattern is consistent.

The registration principle applies. Each skill occupies one layer. Atomics operate at the execution layer. Coordinators operate at the orchestration layer. They don't bleed. A coordinator that starts doing execution work is a coordinator that should be split into a coordinator and a new atomic.

I built this pattern because I watched the alternative fail. A monolithic AI workflow that tries to handle voice governance, lens evaluation, design review, and copy editing in a single prompt produces flat, averaged output. The model can't hold all those objectives simultaneously. The compound task degrades the same way a compound classroom instruction degrades: the first objective gets most of the attention and the rest get fragments.

The decomposition pattern solves this the same way I solved it in the classroom. One objective at a time. One skill, one task, one verdict. Then the coordinator integrates the verdicts into a coherent assessment. The work stays sharp because each piece is focused. The whole stays coherent because the coordinator manages the sequence.
