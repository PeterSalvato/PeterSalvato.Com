---
layout: post
redirect_from:
  - /blog/the-iep-for-ai-systems/
title: "The IEP for AI Systems"
published: true
order: 9
description: "I've been solving the same problem my entire career: decompose complex work for a system that can't process it whole, scaffold the structure, individualize the criteria. A self-contained classroom in Sunset Park is where I learned it."
seo_keywords: ["special education", "agentic architecture", "task decomposition", "scaffolding", "IEP", "AI governance", "coordinator pattern", "skill architecture", "design engineering", "IEP strategies for AI", "scaffolding AI prompts", "special education methods technology", "breaking down tasks for AI", "both sides of the IEP table", "teacher to tech pipeline", "special ed skills transfer"]
---

I've been solving the same problem my entire career. Take something too complex for the system receiving it, decompose it into pieces the system can actually process, build structure to hold the pieces in relation, and make sure they produce a coherent result when they come back together.

I've done this on construction sites, in print shops, on enterprise platforms, and inside AI skill architectures. But I learned it in a classroom.

I taught a self-contained 4/5 bridge class in Sunset Park, Brooklyn. Twelve kids, every subject, every accommodation, every IEP goal. Self-contained means there's no other teacher running the plan. You are the plan. You build it, run it, and adjust it in real time when it falls apart at 10:15 on a Tuesday because the thing that worked yesterday doesn't work today.

An IEP is an Individualized Education Program. Federal law requires one for every student receiving special education services. It specifies what the student needs, how progress gets measured, what accommodations are required, and what success looks like for that specific learner. Not for the class. Not for the grade level. For that student.

In a self-contained classroom, you're running twelve of these simultaneously. Twelve different sets of goals, twelve different accommodation profiles, twelve different definitions of progress. The class moves forward together, but the path through the material is individualized per student.

You learn three things fast in that room. All three turned out to be the same things I use to architect AI systems.

---

## Decompose or fail

A fourth grader with processing delays can't receive a multi-step math problem as a single instruction. "Solve for the missing number, show your work, and explain your reasoning" is three tasks disguised as one. The student hears the first instruction, starts working, and the second two are gone.

Task decomposition means breaking that into discrete steps. Each step has one clear objective. Each step produces a visible result before the next step begins. The student isn't doing less work. The work is sequenced so each piece is achievable on its own.

This isn't a simplification. It's a structural decision about how complex work gets delivered to a system that can't process it whole. That sentence describes a fourth grader in Sunset Park. It also describes a large language model receiving a compound evaluation prompt.

A monolithic prompt that says "evaluate this portfolio for voice quality, structural integrity, narrative coherence, and brand alignment" is four tasks disguised as one. The model receives the first criterion, starts working, and the others drift. Output quality degrades as the instruction gets longer. Context gets polluted. The model can't hold all four evaluation frames simultaneously, so it collapses them into a blended average that's none of the four.

The fix is the same fix. Decompose. One skill per evaluation dimension. Each skill has one clear objective. Each skill produces a visible result before the next one runs.

I call the single-purpose skills "atomics." Each one does one thing. The [Formwork Protocol](/systems/formwork/) runs them as separate diagnostics: one lens tests for structural restraint (extracted from Vignelli's body of work), another tests for narrative identity (extracted from Victore's), another tests for whether a stranger would understand this in sixty seconds. They don't know about each other. They don't need to. Their job is to measure one thing accurately.

Same operation as the classroom. Break the complex task into pieces the system can hold. Let each piece produce a clear result. Sequence them so nothing gets lost.

---

## Scaffold, then remove

Scaffolding in special education is temporary support structure. You provide it while the student is building competence, and you remove it as the competence solidifies. A graphic organizer helps a student plan a paragraph. Once the student can plan without the organizer, the organizer goes away. If you leave the scaffold in place permanently, you've built a dependency, not a skill.

The coordinator pattern in my skill architecture works the same way. A coordinator is a thin orchestration layer that dispatches atomic skills, collects their results, and synthesizes a verdict. The coordinator doesn't do the evaluation. It manages the flow. It decides which atomics run in parallel (because they're independent) and which run in sequence (because one depends on another's output).

The coordinator is scaffolding. It holds the structure while the pieces do the work. If I hardcoded the synthesis logic into the atomics themselves, each one would need to know about all the others. They'd be coupled. Change one and you'd break three. Instead, the coordinator carries the structural knowledge. The atomics stay simple, single-purpose, and independently testable.

When I built the [audit coordinator](/systems/formwork/), it dispatches nine evaluation lenses in parallel. Each lens runs independently. The coordinator collects nine separate verdicts and identifies where they agree and where they contradict. That contradiction is the valuable signal. Two lenses scoring the same work differently means there's a real tension to resolve. The coordinator surfaces it. The atomics just measured.

Same principle as a well-designed classroom. The structure holds while the learners do the work. The structure doesn't do the learning for them. And the goal is always the same: build the capacity so the scaffolding can come down.

---

## Individualize the criteria

The hardest part of running twelve IEPs simultaneously isn't the paperwork. It's that success looks different for every student. One student's goal is writing a complete sentence. Another student's goal is writing a paragraph with a topic sentence and supporting detail. They're sitting next to each other. They're working on the same assignment. The criteria for "done" are completely different.

This is exactly the problem with evaluating creative work. "Is this portfolio good?" is not a meaningful question. Good by whose criteria? Structural lenses say the grid is clean and the typography is consistent. Narrative lenses say it feels like it could be anyone's site. Both verdicts are correct. They're measuring against different criteria.

The Formwork Protocol handles this the way an IEP handles a classroom. Each evaluation lens has its own criteria, its own definition of success, its own pass/fail threshold. The lenses don't vote. They don't average. They each produce an independent verdict against their own standard. The convergence analysis (where lenses agree) and the contradiction analysis (where they disagree) are both useful outputs. A consensus means the work is solid on that dimension. A contradiction means there's a design decision to make.

In the classroom, when two IEP goals conflicted (one student needed quiet, another needed verbal processing), the resolution was a structural decision: where to seat them, when to schedule which activity, how to create pockets of different conditions within one room. The conflict wasn't a problem. It was information about what the room needed to accommodate.

Same with evaluation lenses. When structural and narrative lenses disagree, the disagreement tells me what the work needs. Not which lens is right. What decision I need to make as the designer. The conflict is the most useful output the system produces.

---

## One lane

The AI governance conversation is dominated by two groups. Computer scientists who think about model architecture. Business strategists who think about risk and compliance. Neither group has stood in a room where the system you're managing is twelve human beings with twelve different definitions of success, and the feedback loop is immediate because a ten-year-old will tell you in real time when your scaffolding isn't working.

Special education teaches you that complex systems with variable inputs require individualized evaluation criteria, temporary support structures, and task decomposition. Not because it's theoretically sound. Because the alternative is a room that doesn't function.

Every IEP is a governance document. It specifies what gets measured, how it gets measured, what accommodations the system provides, and what success looks like. It gets reviewed. It gets updated. It gets enforced by federal law because the stakes are that high.

I didn't study AI governance and then discover it maps to pedagogy. I spent a year in a self-contained classroom in Sunset Park, then spent eighteen years applying the same structural patterns to enterprise platforms, brand systems, and design evaluation. When I started building AI skill systems, the architecture was already in my hands.

Decompose the complex task. Scaffold the structure. Individualize the criteria. Monitor progress against specific goals. Adjust when the feedback says your plan isn't working.

But underneath all of that is a simpler move. Before I built any of the architecture, before I decomposed a single prompt, I asked the same question I asked about every student in that classroom: what does this system actually need to do this job? Not what do I need from it. What does it need from me.

That question changes everything. It's the difference between treating a model like an employee who should be better and treating it like a system with a specific processing reality that you can accommodate. Token limits aren't a spec sheet. They're a working memory profile. Context windows aren't a feature. They're the attention span you're designing for. The model doesn't need a better prompt. It needs someone who bothered to ask how it works before handing it twelve things at once.
