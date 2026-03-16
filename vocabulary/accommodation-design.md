---
layout: context
title: "Accommodation Design"
permalink: /vocabulary/accommodation-design/
description: "A framework for AI system architecture that comes from special education. Instead of constraining a model's behavior, ask what each system actually needs to do its best work."
last_modified: 2026-03-16
icon: menu_book
seo_keywords:
  - accommodation design
  - AI governance framework
  - special education AI
  - IEP design pattern
  - task decomposition AI
  - processing profile
  - prompt engineering alternative
  - why AI output degrades
  - how to get better results from AI
  - ChatGPT gets worse over time
  - AI processing constraints
  - compound prompt problem
  - special education methods for technology
  - bidirectional accommodation
  - cognitive load AI
  - what does AI actually need
  - scaffolding AI prompts
  - individualized evaluation AI
  - IDEA IEP framework
  - AI needs accommodation not constraint
  - working memory AI context window
  - FormWork coordination harness
  - Peter Salvato
related:
  - /practice/accommodation-design
  - /systems/formwork
  - /essays/the-iep-for-ai-systems
  - /essays/what-does-the-system-actually-need
  - /essays/processing-profiles
  - /essays/why-does-chatgpt-get-worse
---

## What It Is

Accommodation design is a framework for AI system architecture derived from special education pedagogy. The central move: instead of asking how to constrain a model's behavior, ask what each system in the room actually needs to do its best work.

The model has processing constraints. Context window limits, attention degradation over long inputs, sensitivity to instruction ordering, tendency to flatten compound evaluations. The human has processing constraints too. Ideas lose fidelity when forced into structure at the point of capture. Executive function is finite. Working memory drops the thread.

Both systems get accommodated. The [pour](#the-pour) accommodates the human: get the thinking out with as little friction as possible. The tools accommodate the model: structured input, decomposed tasks, independent evaluation. [FormWork](/systems/formwork/) coordinates both directions.

The distinction from prompt engineering matters. Prompt engineering treats the model as a system that needs better instructions. Accommodation design treats the model as a system with a [processing profile](/vocabulary/processing-profile/) that the task needs to fit. One puts the burden on the instructions. The other puts it on the task architecture.

---

## Where It Comes From

A self-contained special education classroom in Sunset Park, Brooklyn. Twelve students, every subject, every accommodation, every IEP goal. Self-contained means there is no other teacher running the plan. You build it, run it, and adjust it in real time.

Each student has an Individualized Education Program (IEP): a governance document required by federal law (IDEA, the Individuals with Disabilities Education Act). It specifies what gets measured, how it gets measured, what accommodations the system provides, and what success looks like for that specific learner.

Running twelve IEPs simultaneously teaches you three things fast, because the feedback is immediate:

**Decomposition.** "Solve for the missing number, show your work, and explain your reasoning" is three tasks disguised as one. A student with processing delays hears the first instruction, starts working, and the rest is gone. You learn to give one instruction at a time. One clear objective. One visible result before the next step.

**Scaffolding.** A graphic organizer helps a student plan a paragraph. Once the student can plan without it, you take it away. If the scaffold stays permanently, you have built a dependency, not a capability.

**Individualized criteria.** One student's goal is a complete sentence. The student next to them is writing a paragraph with topic sentence and supporting detail. Same assignment. Completely different definitions of done.

These are architectural patterns. Federal law enforces them because the stakes are a child's education.

In 2023, the same processing failures showed up in a different system. A compound prompt asking a language model to evaluate across four dimensions at once produced a blended average that was none of them. The first criterion got full attention. Each one after that degraded. Criteria contaminated each other. The model could not hold four evaluation frames simultaneously.

The fix was the same fix. Decompose. One dimension per prompt. One clear objective. One clear output. Same structural accommodation, different system.

---

## How It Works

Accommodation design starts with one question: what is the processing reality of each system involved in this task?

For a student: working memory capacity, attention profile, sensory processing, prior knowledge, emotional state. The IEP documents this and prescribes accommodations.

For a large language model: context window limits, attention degradation over long inputs, sensitivity to instruction ordering, tendency to blend concurrent evaluation criteria, loss of coherence across extended sessions, no persistent memory between sessions.

The mapping is direct:

| Pedagogical Practice | AI Application | Why |
|---|---|---|
| Task decomposition | Single-objective prompts | Compound instructions degrade the same way in both systems |
| Scaffolding | Coordinator patterns | Temporary orchestration that the components don't internalize |
| Individualized criteria | Independent evaluation lenses | Different dimensions need different definitions of success |
| IEP documentation | System prompts and CLAUDE.md | Persistent specification of what the system needs to succeed |
| Progress monitoring | Iterative evaluation loops | Continuous assessment against specific, individualized goals |
| Checkpoint pacing | Savepoint systems | Working memory has limits; mark progress before coherence degrades |

### The Pour

The pour is the first accommodation, aimed at the human. Named from concrete construction: you build [FormWork](/systems/formwork/) before you pour. The temporary structure shapes the work while things are fluid.

The pour means deliberately generating source material in your own voice. Brainstorming, voice notes, arguing with yourself, changing direction mid-sentence. It can accumulate over years, get extracted in a single interview session, or arrive as a dictation from the car. The pour is not a one-time step at the start. It is available throughout the process.

This is [input inversion](/practice/input-inversion/). The standard approach says structure your input for the model. Accommodation design says the opposite: remove friction at the point of capture so the raw material carries the maker's actual voice and the real structure of their thinking. The tools structure it afterward. A teacher does not require a student to organize their thoughts before speaking. The student speaks. The teacher captures it. Then they find the structure in what was already expressed.

### Both Systems

The framework accommodates in both directions simultaneously:

**The model's side.** Decomposed tasks, one objective at a time. Independent evaluation dimensions with individualized success criteria. Context markers at cognitive turning points. Structured input designed for the model's attention patterns.

**The human's side.** Permission to be unstructured. No requirement to organize thoughts before having them. Friction removed at the point of capture. Raw thinking enters the system without losing fidelity to premature structure.

The quality of the output depends on how well the task design meets both sets of processing needs.

---

## Three Applied Examples

### Enterprise Platform (Encore)

A recruiting platform maintained for twelve years across three complete technology shifts. The accommodation move: understand what the system (and the people building inside it) actually needs at each stage, then design the transition to fit those constraints. Drift (the invisible degradation where the original intent stops being the thing everyone checks against) is what happens when accommodation stops. [SavePoint](/systems/savepoint/) was built to mark where the thinking was, so the next person (or the same person, months later) can reconstruct it.

### AI Evaluation System (LensArray)

A monolithic evaluation prompt asking a model to assess voice, structure, narrative, and brand simultaneously produced mush. The accommodation: [LensArray](/systems/lensarray/), a decomposed evaluation system. Each lens runs independently with its own criteria and its own definition of success. A coordinator collects verdicts and maps where they agree and where they contradict. The contradiction is the valuable signal. Same architecture as running twelve IEPs: individualized criteria, independent assessment, the practitioner resolving conflicts.

### Household Kitchen

Four people, four constraint profiles. Celiac disease. Two children with ARFID (opposite restrictions). ADHD affecting executive function at the time of day when dinner needs to happen. The accommodation: stop treating dinner as a willpower problem and start treating it as a design problem. Batch the shared base (group body), apply the cuisine framework (persona), accommodate individually at assembly (the last mile). Three layers, one operation. Same structural pattern as the classroom, the codebase, the evaluation system.

---

## The Literature Gap

A systematic search of current research (2024-2026) confirms that this specific framing does not exist. Two established lanes:

1. **AI as accommodation tool for human learners.** Using AI to support students with disabilities. The accommodation flows from practitioner to learner, with AI as delivery mechanism.

2. **AI performing empathy.** Training models to exhibit empathetic responses. The empathy is simulated output, not design input.

Nobody is applying accommodation bidirectionally. Nobody is treating both the model's processing constraints and the human's cognitive constraints as profiles to be accommodated simultaneously. The AI governance field is populated by computer scientists (who approach the model as a system to optimize) and policy professionals (who approach it as a risk to manage). Neither discipline trains practitioners in accommodation. Special education does.

---

## Connected Concepts

- **[Processing Profile](/vocabulary/processing-profile/)** — What a system can and cannot handle. You read the profile first, then design the task to meet it.
- **[FormWork](/systems/formwork/)** — The coordination harness that holds all accommodation tools in position while the work is wet.
- **[Drift](/vocabulary/drift/)** — What happens when accommodation stops. The original intent becomes invisible.
- **[Scaffold](/vocabulary/scaffold/)** — Temporary structure. Its purpose is to become unnecessary.
- **[Input Inversion](/vocabulary/input-inversion/)** — The design principle that reverses the burden of structure from the human to the tooling.
- **[Fidelity](/vocabulary/fidelity/)** — The gap between what was meant and what survived.

---

## Go Deeper

- [AI Governance as Accommodation Design](/practice/accommodation-design/) — the full whitepaper
- [The IEP for AI Systems](/essays/the-iep-for-ai-systems/) — the classroom origin story
- [What Does the System Actually Need?](/essays/what-does-the-system-actually-need/) — naming the framework
- [Processing Profiles](/essays/processing-profiles/) — the mapping between student and model constraints
- [Why Does ChatGPT Get Worse the More You Type?](/essays/why-does-chatgpt-get-worse/) — the problem accommodation design solves
- [What Special Ed Teachers Already Know About AI](/essays/what-special-ed-teachers-already-know/) — the practitioner profile
- [Talk to It, Don't Type at It](/essays/talk-to-it/) — the pour in practice
- [The Three Layers](/essays/the-three-layers/) — group body, persona, individual accommodation
