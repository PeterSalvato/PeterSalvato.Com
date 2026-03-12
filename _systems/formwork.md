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
seo_keywords: ["AI accommodation design", "formwork protocol", "AI task decomposition", "context preservation", "evaluation lenses", "voice sampling AI", "knowledge traversal", "AI governance process", "accommodation design process", "cognitive accommodation AI", "how to build AI tools", "AI workflow for creative work", "better AI evaluation", "AI keeps forgetting context", "structured AI process"]
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

Formwork is Peter Salvato's [accommodation design](/practice/accommodation-design/) process: a set of tools that shape how AI systems receive and process work. Each tool accommodates a specific processing constraint in the model. Together they form the process that produced this site.

The name comes from concrete construction. You build formwork before you pour. The temporary structure shapes the work while things are fluid. Once the concrete sets, the form comes off. The shape holds on its own. Every tool in this system follows that pattern.

---

## The question underneath

[Accommodation design](/practice/accommodation-design/) is the framework, the theory, the "why." It originated in a special education classroom in Brooklyn where I ran twelve IEPs simultaneously and learned to read what a system needs before designing the task.

Formwork is the process, the toolkit, the "how." The question underneath every tool is the same one I learned to ask in that classroom: what does this system actually need to do this job well?

---

## The tools

### Savepoint Syntax: context accommodation

Models have no persistent memory between sessions. When a thread closes, the context evaporates. The thinking that happened, the moment something clicked, the point where understanding shifted: none of it survives into the next session. If you have ever returned to an AI conversation and found the model has no memory of where the work was headed, this is the constraint.

[Savepoint Syntax](/systems/savepoint/) is a self-closing tag dropped inline at the moment of a cognitive turning point. Machine-readable, human-writable. One line of content, forced precision. The syntax is designed for how the model retrieves, not for how I remember: structured, atomic, searchable markers instead of narrative notes.

**The constraint it accommodates:** No persistent memory between sessions. Savepoints give the model enough orientation to reconstruct where the thinking was.

### LensArray: evaluation accommodation

"Is this good?" is twelve questions disguised as one. Give that compound evaluation to a model and the criteria blur together. Structural assessment contaminates narrative assessment. The result is a blended average that tells you nothing actionable.

[LensArray](/systems/lensarray/) decomposes evaluation into distinct layers of concern, each staffed with lenses extracted from real practitioners. Each lens runs independently with its own criteria and its own definition of success. A coordinator collects verdicts and maps where they agree and where they disagree. The maker resolves the disagreements.

**The constraint it accommodates:** Models flatten compound evaluations. Concurrent criteria contaminate each other. Independent layers, each with one clear question, produce verdicts you can act on.

### Voice sampling: voice accommodation

Ask a model to write in someone's voice and it produces competent content marketing that sounds like everyone and no one. The model's training data is dominated by published writing: polished, performative, audience-aware. If your AI output sounds generic no matter how much you describe the target voice, this is why.

The voice pipeline samples from conversation transcripts instead. Three years of sessions, dictated voice notes, rough thinking full of false starts. The pipeline extracts patterns (sentence rhythm, vocabulary I reach for, what I never say) and encodes them as constraints on all written output.

**The constraint it accommodates:** Models default to a training-data average that reads like published writing. Sampling from conversation instead of publication gives the model source material that matches the target register.

### Knowledge traversal: retrieval accommodation

The first time an idea appears in conversation history, it probably was not called by its final name. Keyword search misses the origin. Grep cannot find the embryonic mention because the term did not exist yet.

The knowledge traversal skill reads chronologically through conversation exports, carries understanding forward, and catches mentions that no search would find. It builds understanding through sequential processing, not indexed lookup.

**The constraint it accommodates:** Standard retrieval systems assume you already know what you are looking for. Chronological traversal matches how the model actually builds understanding.

### Skill architecture: task decomposition accommodation

Give a model twelve objectives in a single prompt and it prioritizes the first few. The rest degrade. Instruction ordering changes which objectives get attention. If you have noticed that the end of a complex prompt gets ignored, this is the constraint.

Every skill has one objective, one output, no knowledge of other skills. Twenty-two single-purpose diagnostics and five coordinators. The coordinators dispatch skills in parallel where they are independent, sequentially where one depends on another's output. The model never receives twelve goals at once.

**The constraint it accommodates:** Models cannot hold twelve goals simultaneously without flattening them. One objective per skill, with coordinators handling the orchestration, keeps each task within the model's processing strengths.

---

## How they work together

The tools form a process, not a collection.

Raw, unstructured thinking goes in: voice notes, brainstorming sessions, conversations where I argue with myself and change direction mid-sentence. Three years of that produced the corpus everything else operates on.

Savepoint Syntax marks where the thinking turned. Knowledge traversal traces how ideas developed across the corpus. The voice pipeline extracts how I actually communicate. LensArray evaluates the output across independent dimensions. The skill architecture keeps every task within the model's processing range.

[petersalvato.com](/) was compiled through this process. Every page evaluated by independent lenses. Every piece of copy verified against voice patterns extracted from conversation. Context preserved across hundreds of sessions by savepoints. Concepts traced through three years of unstructured thinking by the traversal system. Each skill receiving one clear objective at a time.

---

## The scaffold principle

In concrete construction, formwork is temporary by definition. You pour, it sets, the form comes off. If the form has to stay permanently, you have built a dependency, not structure.

The same principle governs every tool in this process. A graphic organizer helps a student plan a paragraph. Once the student can plan without it, you take it away. A coordinator orchestrates skills during evaluation. Once the evaluation is complete, the coordinator's job is done.

Every scaffold in the system should be questioned: is this building capability, or is this building dependency? The current AI tool development trend pushes toward longer system prompts, more elaborate orchestration, increasingly complex context documents. The accommodation framework asks which of those scaffolds are doing structural work and which have become permanent crutches.

The goal is structure that holds on its own.

---

## The recursive proof

The strongest evidence for a process is the thing it produces.

[petersalvato.com](/) was compiled using Formwork. The [whitepaper](/practice/accommodation-design/) documents the framework. [This Site](/practice/this-site/) shows the tools running on the site you are reading: the evaluation system, the context preservation, the voice pipeline, the knowledge traversal. All visible in what shipped.
