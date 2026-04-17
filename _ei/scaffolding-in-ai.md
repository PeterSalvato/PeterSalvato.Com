---
layout: post
title: "Scaffolding in AI"
date: 2026-03-09
published: true
description: "Skill architecture."
seo_keywords: ['ai', 'scaffolding', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 91
depth: making
domain: AI/governance
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---

Scaffolding in special education is temporary support structure. You provide it while the student is building competence, and you remove it as the competence solidifies. A graphic organizer helps a student plan a paragraph. Once the student can plan without the organizer, the organizer goes away. If you leave the scaffold in place permanently, you've built a dependency, not a skill.

The coordinator pattern in my AI skill architecture is scaffolding. A coordinator dispatches atomic skills, collects their results, and synthesizes a verdict. The coordinator doesn't do the evaluation. It manages the flow.

---

The audit coordinator dispatches nine evaluation lenses in parallel. Each lens runs independently: Vignelli tests for restraint, Victore tests for identity, Bierut tests for whether the form is doing thinking, Rams tests for economy. Each lens produces its own verdict. The coordinator collects nine separate results and identifies where they agree and where they contradict.

The coordinator is scaffolding because the atomic skills stay simple, single-purpose, and independently testable. The Vignelli lens doesn't need to know about the Victore lens. It doesn't need to know what else is running. It measures one thing against one set of criteria and returns a verdict. The structural knowledge (which skills run in parallel, which run in sequence, how results get synthesized) lives in the coordinator, not in the skills.

If I hardcoded the synthesis logic into the atomic skills themselves, each one would need to know about all the others. They'd be coupled. Change one and you'd break three. Instead, the coordinator carries the structural knowledge. The atomics stay clean.

---

The parallel to the classroom is precise. In a well-designed classroom, the teacher holds the structure. The students do the work. The graphic organizer scaffolds the writing process: topic sentence here, supporting detail here, conclusion here. Each box is an atomic unit with a clear purpose. The student fills the boxes independently. The organizer holds them in relation.

When the student can plan without the organizer, you remove it. The competence lives in the student. The scaffold was temporary.

In the skill architecture, the coordinator holds the structure while the skills do the work. If I need to rebuild the synthesis logic (new lenses, different ordering, different convergence rules), I change the coordinator. The atomic skills are untouched. The structure is separate from the execution. The scaffold can be adjusted without rebuilding the skills.

---

The risk in both environments is the same: permanent scaffolding creates dependency. A student who always uses the graphic organizer never learns to plan independently. An AI architecture where the coordinator does the thinking (not just the dispatching) makes the atomic skills useless on their own.

The test is whether each component can stand alone. Can the Vignelli lens run independently and produce a useful result? Yes. Can the voice protocol verify a page without the audit coordinator? Yes. Can the knowledge skill find real moments in the corpus without being told what else is running? Yes. Each skill is self-contained. The coordinator is the scaffold that holds them in relation during a complex evaluation pass. Remove the coordinator and each skill still works. That's scaffolding done right.
