---
layout: project
title: "Formwork"
redirect_from: /governance/formwork-protocol/
subtitle: "The Accommodation Design Process"
icon: layers
altitude: "01"
status: "Active"
context: "I spent a summer building concrete forms on a construction site in South Florida. You build the form before you pour. The form shapes the work while things are fluid. Once the concrete sets, the form comes off. Every tool I've built for working with AI follows that pattern."
drift: "The AI governance field treats every processing failure as a control problem. More rules, longer prompts, tighter guardrails. Output keeps degrading. Nobody asks whether the task design is the problem, not the model."
scaffold: "Formwork is the accommodation design process: a set of tools that shape how AI systems receive and process work. Context preservation, decomposed evaluation, voice sampling, knowledge traversal, task decomposition. Each tool accommodates a specific processing constraint. Together they form the pour."
fidelity: "Every page on this site was produced through this process. The tools built the thing that describes the tools."
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["AI accommodation design", "formwork protocol", "AI task decomposition", "context preservation", "evaluation lenses", "voice sampling AI", "knowledge traversal", "AI governance process", "accommodation design process", "cognitive accommodation AI"]
description: "The accommodation design process. A set of tools that shape how AI systems receive and process work: context preservation, decomposed evaluation, voice sampling, knowledge traversal, task decomposition. Each tool accommodates a specific processing constraint. Together they form the pour."
last_modified: 2026-03-11
faq: true
faq_items:
  - question: "What is Formwork?"
    answer: "The accommodation design process. A set of tools that shape how AI systems receive and process work. Savepoint Syntax preserves context between sessions. LensArray decomposes evaluation into independent layers. Voice sampling pulls from conversation, not publication. Knowledge traversal reads chronologically instead of searching. The skill architecture gives the model one objective at a time. Each tool accommodates a specific processing constraint. Together they form the process that produced this site."
  - question: "Where does the name come from?"
    answer: "Concrete construction. You build formwork before you pour. The temporary structure shapes the work while things are fluid. Once the concrete sets, the form comes off. The shape holds on its own. Every tool in this process works the same way: temporary structure that shapes thinking while it's still moving."
  - question: "How is this different from prompt engineering?"
    answer: "Prompt engineering starts with what you want and tries to steer the model toward it. Formwork starts with what the model needs and designs the task to meet that processing reality. The question isn't how do I get what I want. The question is what does this system actually need to do the job."
  - question: "Does this only work for design?"
    answer: "The architecture is medium-independent. A chef, an educator, a writer, an engineer all face the same structural problem: compound tasks that need decomposing, context that needs preserving, evaluation that needs separating into independent concerns. The tools accommodate processing constraints. Those constraints don't change by field."
related:
  - /systems/savepoint
  - /systems/lensarray
  - /evidence/encore
cta:
  text: "Read the whitepaper"
  link: /practice/accommodation-design/
glyphs: "▲ ⬣ ■"
codex: "/Æ/#|●▲||⬣■|||▲⟩⟩[systems.formwork]/"
---

I spent a summer building concrete forms on a job site in South Florida. Plywood, braces, rebar. You build the form before you pour. The concrete goes in fluid and the form gives it shape. Once it sets, the form comes off. The shape holds on its own.

That image stayed with me longer than any design theory I studied at SVA.

Twenty years later I started building tools for working with AI. The first one solved a specific problem: I kept losing my thinking between sessions. The second solved another: compound evaluations where every dimension bled into every other one. A third, a fourth, a fifth. Each one started from the same question. What does this system actually need to do the job?

Every tool I built turned out to be formwork. A temporary structure that shapes the pour.

---

## The question underneath

[Accommodation design](/practice/accommodation-design/) is the framework. The theory. The "why." It came from a special education classroom in Brooklyn where I ran twelve IEPs simultaneously and learned to read what a system needs before designing the task.

Formwork is the process. The toolkit. The "how." Each tool accommodates a specific processing constraint in the model. Together they form the accommodation design process.

The question underneath every tool is the same one I learned to ask in that classroom: what does this system actually need to do this job well?

---

## The tools

### Savepoint Syntax: context accommodation

I kept losing the thinking between sessions. Not the notes. The exact moment something clicked, the point where my understanding shifted. The model couldn't find its way back in because nothing marked where the thinking had been.

[Savepoint Syntax](/systems/savepoint/) is a self-closing tag you drop inline at the moment of a cognitive turning point. Machine-readable, human-writable. One line of content, forced precision. The syntax is designed for how the model retrieves, not for how I remember. Structured, atomic, searchable markers instead of narrative notes.

**The constraint it accommodates:** Models have no persistent memory between sessions. Context evaporates when the thread closes. Savepoints give the model enough orientation to reconstruct where the thinking was.

### LensArray: evaluation accommodation

"Is this good?" is twelve questions disguised as one. Give that compound evaluation to a model and the criteria blur together. Structural assessment contaminates narrative assessment. You get a blended average that tells you nothing.

[LensArray](/systems/lensarray/) decomposes evaluation into distinct layers of concern, each staffed with lenses extracted from real practitioners. Each lens runs independently with its own criteria and its own definition of success. A coordinator collects verdicts and maps where they agree and where they disagree. The maker resolves the disagreements.

**The constraint it accommodates:** Models flatten compound evaluations. Concurrent criteria contaminate each other. Independent layers, each with one clear question, produce verdicts you can actually use.

### Voice sampling: voice accommodation

Ask a model to write in someone's voice and it produces competent content marketing that sounds like everyone and no one. The model's training data is dominated by published writing: polished, performative, audience-aware.

The voice pipeline samples from conversation transcripts instead. Three years of sessions, dictated voice notes, rough thinking full of false starts. That's how I actually talk. The pipeline extracts patterns (sentence rhythm, vocabulary I reach for, what I never say) and encodes them as constraints on all written output.

**The constraint it accommodates:** Models default to a training-data average that sounds like published writing. Sampling from conversation instead of publication gives the model source material that matches the target register.

### Knowledge traversal: retrieval accommodation

The first time an idea appears in conversation history, it probably wasn't called by its final name. Keyword search misses the origin. Grep can't find the embryonic mention because the term didn't exist yet.

The knowledge traversal skill reads chronologically through conversation exports, carries understanding forward, and catches mentions that no search would find. It builds understanding through sequential processing, not indexed lookup.

**The constraint it accommodates:** Models process sequentially, but standard retrieval systems assume you already know what you're looking for. Chronological traversal matches how the model actually builds understanding.

### Skill architecture: task decomposition accommodation

Give a model twelve objectives in a single prompt and it prioritizes the first few. The rest degrade. Instruction ordering changes which objectives get attention.

So every skill has one objective, one output, no knowledge of other skills. Twenty-two single-purpose diagnostics and five coordinators. The coordinators dispatch skills in parallel where they're independent, sequentially where one depends on another's output. The model never receives twelve goals at once.

**The constraint it accommodates:** Models can't hold twelve goals simultaneously without flattening them. One objective per skill, with coordinators handling the orchestration, keeps each task within the model's processing strengths.

---

## How they work together

The tools don't operate in isolation. They form a process.

Raw, unstructured thinking goes in. Voice notes, brainstorming sessions, conversations where I argue with myself and change direction mid-sentence. Three years of that produced the corpus everything else operates on.

Savepoint Syntax marks where the thinking turned. Knowledge traversal traces how ideas developed across the corpus. The voice pipeline extracts how I actually communicate. LensArray evaluates the output across independent dimensions. The skill architecture keeps every task within the model's processing range.

The concrete goes in fluid. The forms give it shape. Once it sets, the forms come off.

This site was compiled through that process. Every page evaluated by independent lenses. Every piece of copy verified against voice patterns extracted from conversation. Context preserved across hundreds of sessions by savepoints. Concepts traced through three years of unstructured thinking by the traversal system. Each skill receiving one clear objective at a time.

The tools built the thing that describes the tools.

---

## The scaffold principle

In concrete construction, formwork is temporary by definition. You pour, it sets, the form comes off. If the form has to stay permanently, you didn't build structure. You built a dependency.

The same principle governs every tool in this process. A graphic organizer helps a student plan a paragraph. Once the student can plan without it, you take it away. A coordinator orchestrates skills during evaluation. Once the evaluation is complete, the coordinator's job is done.

Every scaffold in the system should be questioned: is this building capability, or is this building dependency? The current AI tool development trend pushes toward longer system prompts, more elaborate orchestration, increasingly complex context documents. The accommodation framework asks which of those scaffolds are doing structural work and which have become permanent crutches the system can't function without.

The goal is structure that holds on its own. The formwork comes off.

---

## The recursive proof

The strongest evidence for a process is the thing it produces.

[petersalvato.com](/) was compiled using Formwork. The [whitepaper](/practice/accommodation-design/) documents the framework. The [Colophon](/colophon/) shows the tools running on the site you're reading. The evaluation system, the context preservation, the voice pipeline, the knowledge traversal. All of it visible in what shipped.

The accommodation architecture built the thing that explains the accommodation architecture. That's the proof.
