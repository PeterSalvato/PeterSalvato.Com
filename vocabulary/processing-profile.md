---
layout: context
title: "Processing Profile"
permalink: /vocabulary/processing-profile/
description: "Why AI gets worse mid-conversation. Why a student loses the third instruction. The same constraint operating in two different systems. You read the profile first, then design the task to fit."
last_modified: 2026-03-15
icon: menu_book
seo_keywords:
  - processing profile
  - why does ChatGPT forget
  - AI loses context mid-conversation
  - context window explained simply
  - why AI gets worse over time
  - working memory AI
  - attention degradation language model
  - IEP for AI systems
  - special education AI design
  - how to structure AI prompts
  - accommodation design processing
  - AI processing constraints
  - compound prompt problem
  - AI session degradation
  - task design for AI
  - individualized education planning AI
  - Peter Salvato
  - read the profile first
  - what does the system actually need
  - cognitive load model
related:
  - /practice/accommodation-design
  - /essays/processing-profiles
  - /essays/why-does-chatgpt-get-worse
  - /essays/the-iep-for-ai-systems
  - /systems/formwork
  - /systems/savepoint
---

## What It Is

A processing profile documents what a system can and cannot handle. For a student: working memory capacity, attention span, how they receive information, where they lose the thread. For a language model: context window limits, attention degradation over long inputs, sensitivity to instruction ordering, tendency to flatten compound evaluations, no persistent memory between sessions.

The term comes from special education. Before any instruction happens, you read the profile. You do not start teaching until you know how that student's brain works, because the instruction has to fit the student. The same move applies to any system you are designing for. You read the processing reality first, then design the task to meet it.

The failure to do this is what produces most bad AI results. Practitioners blame the model. A processing profile assessment usually shows the task was designed for a system that does not exist: one with unlimited working memory, equal attention across long inputs, and the ability to hold four evaluation criteria simultaneously without contamination.

That system does not exist. The one that does exist has a documented profile. [Accommodation design](/practice/accommodation-design/) starts by reading it.

---

## Where It Comes From

A self-contained special education classroom in Sunset Park, Brooklyn. Twelve students, twelve IEPs, every subject, every accommodation running simultaneously. Each Individualized Education Program begins with the same section: the student's processing profile. What they can hold. What they cannot. Where the thread gets lost. What form the instruction needs to take.

The profile is not a limitation document. It does not say "this student cannot do X." It says: given how this student processes, here is what the task needs to look like. The information in that section governs every subsequent design decision: how instructions are broken up, how much is presented at once, how checkpoints are timed, how success is defined.

Running twelve of these simultaneously teaches you something that is hard to learn any other way: the profile is not a workaround. It is the design input. The task that ignores the profile will fail. The task that fits the profile will succeed. Nothing else determines the outcome as reliably.

In 2023 the same pattern showed up in a different system. A compound prompt asking a language model to evaluate a portfolio across four dimensions at once produced a blended average that was none of them. The first criterion got full attention. Each one after that degraded. Criteria contaminated each other. The model was not broken. The task was wrong for the profile.

The classroom instinct kicked in immediately. Separate the dimensions. Give the model one thing to evaluate at a time, one objective, one output. Collect the results after.

---

## How It Works

A processing profile covers the dimensions where constraint matters. For a large language model, the profile looks like this:

**Working memory ceiling.** The context window is the model's working memory. Earlier content gets compressed as the window fills. Details from the beginning of a long conversation carry less weight by the end. Any teacher who has worked with processing delays recognizes this: the first instruction is clear, the third is fuzzy, the fifth is gone.

**Attention degradation over long inputs.** Run a lesson past the student's attention window without a checkpoint and you watch comprehension drop in real time. The model does the same thing over long prompts. Both need pacing. Both need the complex task broken into segments that fit their processing window.

**Compound instruction failure.** "Solve for the missing number, show your work, and explain your reasoning" is three tasks disguised as one. A student with processing delays starts on the first and the rest is gone. A model given four evaluation criteria treats them the same way: the first gets full processing, each subsequent one gets less, and the criteria bleed together. One instruction at a time.

**Primacy and recency effects.** Students and models both give more weight to what comes first and last. The middle gets compressed. This is not a bug. It is how attention distributes across a bounded window. Curriculum design accounts for it. Prompt design should too.

**No persistent memory between sessions.** A student carries prior learning into every new session. A model does not. Every session starts from what is in the context window. What is not in the window does not exist. This is why [SavePoint](/systems/savepoint/) exists: to mark the turning points before they disappear, so the next session can reconstruct where the thinking was.

**Instruction ordering sensitivity.** Position changes priority. The same instruction placed first versus fourth receives different attention weight. Task design has to account for this deliberately, not incidentally.

---

## Three Applied Examples

### The AI Evaluation System

The first accommodation design move I made with AI tools was a processing profile assessment. I was running compound evaluation prompts and getting mush: voice quality, structural integrity, narrative coherence, and brand alignment blended together into a vague response that addressed none of them precisely.

The profile told me why. The model cannot hold four independent evaluation frames simultaneously without contamination. It does not have a processing profile that supports that task structure. The accommodation: [LensArray](/systems/lensarray/), where each evaluation dimension runs as a separate prompt with its own criteria and its own definition of done. The coordinator collects the independent verdicts. The practitioner resolves conflicts between them.

Same architecture as running twelve IEPs. Individualized criteria, independent assessment, one person holding the whole picture.

### The AI Session

You start a conversation with ChatGPT. The first few responses are sharp. An hour later, the responses are vague and repetitive. You have not changed how you are prompting. What changed is the context window. Earlier context got compressed. The model is now working with a fading picture of what was established at the start.

The profile constraint here is working memory capacity combined with attention degradation. The accommodation: break long conversations into focused sessions. One topic per conversation. Fresh context window, full attention on the new problem. [SavePoint](/systems/savepoint/) marks where the thinking was so the next session can pick it up without losing the thread.

This is the same mechanism as enterprise drift operating on a compressed timescale. Minutes instead of years.

### The Household Kitchen

Four people, four constraint profiles. Celiac disease. Two children with ARFID (opposite restrictions). ADHD affecting executive function at the time of day when dinner needs to happen.

The processing profile for the household is not a list of problems. It is the design input. The constraint on executive function at 5 PM means the cook cannot hold a complex recipe in working memory, track multiple timers, and make real-time adjustments simultaneously. The accommodation: batch the shared base during a higher-capacity part of the day, apply the cuisine framework, accommodate individually at assembly. Three layers, one operation. The system carries what working memory cannot.

The profile here includes the human in the system, not just the tools. [Accommodation design](/practice/accommodation-design/) runs in both directions.

---

## Connected Concepts

- **[Accommodation Design](/vocabulary/accommodation-design/)** — The framework built on reading processing profiles and designing tasks to fit them.
- **[FormWork](/systems/formwork/)** — The coordination harness that holds accommodation tools in position. It is the operational response to what the profile reveals.
- **[Drift](/vocabulary/drift/)** — What happens when a system's processing profile stops being the design input. Reasonable decisions accumulate into something nobody chose.
- **[Scaffold](/vocabulary/scaffold/)** — Temporary structure that meets a processing constraint without building permanent dependency.
- **[SavePoint](/systems/savepoint/)** — The tool built specifically for the model's no-persistent-memory constraint.
- **[Input Inversion](/practice/input-inversion/)** — The design principle that reverses the burden of structure from the human to the tooling. The human's processing profile gets accommodated too.

---

## Go Deeper

- [Processing Profiles](/essays/processing-profiles/) — the direct mapping between student constraints and model constraints
- [Why Does ChatGPT Get Worse the More You Type?](/essays/why-does-chatgpt-get-worse/) — the working memory ceiling and how to design around it
- [The IEP for AI Systems](/essays/the-iep-for-ai-systems/) — the classroom origin of this framing
- [AI Governance as Accommodation Design](/practice/accommodation-design/) — the full whitepaper
- [FormWork](/systems/formwork/) — the coordination process built from the profile assessment
- [SavePoint Syntax](/systems/savepoint/) — the tool that addresses the no-persistent-memory constraint directly
