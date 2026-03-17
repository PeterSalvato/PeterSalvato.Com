---
layout: project
title: "FormWork"
redirect_from: /governance/formwork-protocol/
subtitle: "The Accommodation Design Process"
icon: handyman
status: "Active"
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["AI accommodation design", "FormWork", "AI task decomposition", "context preservation", "evaluation lenses", "voice sampling AI", "knowledge traversal", "AI governance process", "accommodation design process", "cognitive accommodation AI", "how to build AI tools", "AI workflow for creative work", "better AI evaluation", "AI keeps forgetting context", "structured AI process"]
description: "The accommodation design process. Named from concrete construction: the temporary structure that holds the tools in position while the work is wet. You dump your thinking. The tools structure it. Dumps become source material. FormWork coordinates them. Out comes the work. The formwork comes off."
last_modified: 2026-03-11
faq: true
faq_items:
  - question: "What is FormWork?"
    answer: "The accommodation design process. Not any single tool. The coordination harness that holds all the tools in position while the work is wet. You start by getting the idea out of your head with as little friction as possible. Talk, dictate, answer questions. The raw material carries your voice, your thinking, the way you actually connect ideas. SavePoint preserves context. LensArray decomposes evaluation. Skills execute one objective at a time. The voice pipeline shapes register. Knowledge traversal traces ideation history. FormWork coordinates them: which tool, when, in what order. The raw material is what gives the downstream tools something real to work with."
  - question: "Where does the name come from?"
    answer: "Concrete construction. You build formwork before you pour. The temporary structure holds the boards in position, keeps the pour contained, gives the wet material somewhere to go. Once the concrete sets, the form comes off. The shape holds on its own."
  - question: "How is this different from prompt engineering?"
    answer: "Prompt engineering starts with what you want and tries to steer the model toward it. FormWork starts with what the model needs and designs the task to meet that processing reality. The question isn't how do I get what I want. The question is what does this system require to handle the task."
  - question: "Does this only work for design?"
    answer: "The architecture is medium-independent. A chef, an educator, a writer, an engineer all face the same structural problem: compound tasks that need decomposing, context that needs preserving, evaluation that needs separating into independent concerns. The tools accommodate processing constraints. Those constraints don't change by field."
related:
  - /systems/savepoint
  - /systems/lensarray
  - /evidence/encore
cta:
  text: "Read the whitepaper"
  link: /practice/accommodation-design/
---

I was six months into using Claude for serious production work when the pattern became obvious. Sessions would run for hours. The output was sharp at the start, then gradually lost the thread. I'd add more context, write longer prompts, stack instructions. The output kept degrading.

The instinct is to blame the model. But I'd seen this before, in a special education classroom in Brooklyn. Give a student three instructions at once and they process the first one. The rest drops. You don't fix that by speaking louder. You redesign the task for what the student can actually handle.

That same move, applied to AI tools, is what I've been building for the last three years. FormWork is the process. Not any single tool. The coordination harness that holds all the tools in position while the work is wet.

The name comes from concrete construction. You build formwork before you pour. The temporary structure shapes the work while things are fluid. It holds the boards in position, keeps the pour contained, gives the wet material somewhere to go. Once the concrete sets, the form comes off. The shape holds on its own.

In concrete construction, you pour before anything else. Same here. You dump your thinking before any tool touches it. Talk, dictate, think out loud. Dumps become source material. That raw, unperformed material is what gives the downstream tools something real to work with.

---

## The question underneath

[Accommodation design](/practice/accommodation-design/) is the framework, the theory, the "why." It originated in a special education classroom in Brooklyn where I ran twelve IEPs simultaneously and learned to read what a system needs before designing the task.

FormWork is the process, the coordination, the "how." Each tool inside the harness accommodates a specific processing constraint. The question underneath every tool is the same one I learned to ask in that classroom: what does this processing reality demand from the task design?

That question applies to the model and to the human. Both have processing constraints. Both need the task designed for what they can actually handle.

---

## The tools

### The dump

You have an idea and you need to get it out of your head. Most workflows ask you to structure your thinking before you begin: outline it, organize it, write it up. That's a friction point. Structure at the point of capture kills the thing you're trying to capture. The idea calcifies into something less than what it actually is.

So you just talk. Dictate. Answer questions. Don't organize, don't outline, don't write. The system is designed so the gap between "I have an idea" and "it's captured" is as small as possible.

What that looks like in practice: a five-minute voice note from the car. An interview skill that asks you questions and pulls the thinking out through conversation. A brainstorming session dumped raw into a markdown file. Sometimes a single session fills the corpus. Sometimes it accumulates over years, a few voice notes a week, conversations where you argue with yourself, dictated observations between meetings. The output is messy: transcripts full of false starts, unfinished sentences, tangents that turn out to be the real insight. That mess is the point. It carries your actual voice, your actual thinking, the way you actually connect ideas.

The only requirement is that you don't perform. No audience awareness. No structuring for the model. No outline. The rawness is what makes the downstream tools work. The voice pipeline can only extract your patterns from material that sounds like you, and the knowledge traversal can only trace your thinking through material that contains it.

This is FormWork's first accommodation, and the only one aimed at the human. Every other tool in the harness accommodates the model. This one accommodates the maker.

It's not a one-time step. A new facet emerges mid-project, you spin up an interview and fill it. The corpus grows as the project grows, and the tools can re-sample from it at any point.

### SavePoint Syntax: context accommodation

Models have no persistent memory between sessions. When a thread closes, the thinking evaporates. [Savepoint Syntax](/systems/savepoint/) marks the turning points before they disappear: a self-closing tag dropped inline at the moment understanding shifts. Machine-readable, human-writable. One line of content, forced precision. The syntax is designed for how the model retrieves (structured, atomic, searchable markers), not for how I remember (narrative notes that drift).

### [LensArray](/systems/lensarray/): evaluation accommodation

Ask a model to evaluate a page for voice, structure, narrative, and brand at the same time and the criteria bleed together. You get a blended average: everything is "good" or "needs work" with no way to act on it. The model can't hold those dimensions independently any more than a student can hold three compound instructions at once.

LensArray separates them. Each layer of concern gets its own lenses, extracted from real practitioners, running independently. A coordinator collects verdicts. Where lenses agree, strong signal. Where they disagree, a decision for the maker.

### Voice sampling: voice accommodation

Models default to a training-data average that reads like published writing: polished, performative, everyone and no one. The voice pipeline samples from conversation transcripts instead. Three years of sessions, dictated voice notes, rough thinking full of false starts. It extracts patterns (sentence rhythm, vocabulary I reach for, what I never say) and encodes them as constraints on all written output. Conversation is how someone actually communicates. Published writing is performance.

### Knowledge traversal: retrieval accommodation

"Accommodation design" didn't start with that name. The first time the idea appeared in my conversation history, I was describing what happened in a classroom. Keyword search would never find it. Grep can't locate a term that didn't exist yet.

The knowledge traversal skill reads chronologically through conversation exports, carries understanding forward, and catches those embryonic mentions. It builds understanding through sequential processing, not indexed lookup, which matches how the model actually works.

But retrieval is only the first pass. The same corpus can be traversed again from a completely different angle. Read three years of conversations looking for where mid-century modern design thinking shows up in how I make decisions, and you get one compiled document. Read the same conversations looking for where typographic hierarchy thinking appears in how I structure systems, and you get a different one. Same raw material, different interpretive frame, genuinely different output.

Each traversal produces a focused document that goes back into the data source. Now the next traversal has access to the original conversations and the previously compiled documents. The corpus gets richer without new input from the maker. A compiled document on accommodation patterns and a compiled document on structural thinking can be traversed together to surface connections neither one contains alone.

This is not retrieval. Retrieval pulls something out and it's done. This is a production loop. The same conversations I recorded in 2023 are still generating new compiled documents in 2026, each traversal asking a question I hadn't thought to ask when I was talking. The raw material doesn't get used up.

### Skill architecture: task decomposition accommodation

Give a model twelve objectives in a single prompt and it prioritizes the first few. The rest degrade. Instruction ordering changes which objectives get attention.

So every skill has one objective, one output, no knowledge of other skills. Twenty-two single-purpose diagnostics and five coordinators. The coordinators dispatch skills in parallel where they're independent, sequentially where one depends on another's output. The model never receives twelve goals at once. Same accommodation as the classroom: one instruction at a time, one visible result before the next step.

---

## How they work together

FormWork is the harness. The tools do their jobs inside it.

You dump your thinking first. Voice notes, brainstorming sessions, conversations where I argue with myself and change direction mid-sentence. A corpus can accumulate over years or get extracted in a single interview session. The method doesn't matter. What matters is that the source material carries the maker's actual voice and the actual structure of their thinking. Without that material, the tools have nothing to work from. The voice pipeline can't extract patterns from material that doesn't exist. Knowledge traversal can't trace ideas that were never captured. The dump is what makes the output belong to the maker instead of the model.

SavePoint Syntax marks where the thinking turned. Knowledge traversal traces how ideas developed across the corpus. The voice pipeline extracts how I actually communicate. LensArray evaluates the output across independent dimensions. The skill architecture keeps every task within the model's processing range. FormWork coordinates them: which tool, when, in what order.

[petersalvato.com](/) was compiled through this process. Every page evaluated by independent lenses. Every piece of copy verified against voice patterns extracted from conversation. Context preserved across hundreds of sessions by savepoints. Concepts traced through three years of unstructured thinking by the traversal system. Each skill receiving one clear objective at a time. The process ran, the tools did their work, and the output stands without them.

---

## The scaffold principle

In concrete construction, formwork is temporary by definition. You pour, it sets, the form comes off. If the form has to stay permanently, you have built a dependency, not structure.

The same principle governs every tool in this process. A graphic organizer helps a student plan a paragraph. Once the student can plan without it, you take it away. A coordinator orchestrates skills during evaluation. Once the evaluation is complete, the coordinator's job is done.

Every scaffold in the system should be questioned: is this building capability, or is this building dependency? The current AI tool development trend pushes toward longer system prompts, more elaborate orchestration, increasingly complex context documents. The accommodation framework asks which of those scaffolds are doing structural work and which have become permanent crutches.

A tool that has to stay permanently is a dependency, and I try to catch those early.

---

[petersalvato.com](/) was compiled inside FormWork. [This Site](/practice/this-site/) shows the process: the dump, the tools, the coordination, what the output looks like after the scaffolding is removed.
