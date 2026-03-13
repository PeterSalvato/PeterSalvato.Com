---
layout: project
redirect_from: /governance/accommodation-design/
practice_group: whitepaper
title: "AI Governance as Accommodation Design"
subtitle: "A Pedagogical Framework for Human-AI System Architecture"
icon: school
status: "Published"
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["AI governance", "accommodation design", "special education pedagogy", "prompt architecture", "task decomposition", "IEP design pattern", "AI evaluation framework", "human-AI architecture", "why AI output gets worse", "how to get better results from AI", "AI prompt engineering not working", "ChatGPT complex tasks", "special education methods for AI", "AI cognitive limitations", "how to structure AI tasks"]
description: "A whitepaper applying special education pedagogy to AI system architecture. Rather than constraining behavior, accommodation design asks what both systems in the room actually need: the model's processing constraints and the human's."
last_modified: 2026-03-10
permalink: /practice/accommodation-design/
related:
  - /systems/formwork
  - /systems/savepoint
  - /essays/the-iep-for-ai-systems
---

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18941231.svg)](https://doi.org/10.5281/zenodo.18941231)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

Current approaches to AI governance focus on constraining model behavior: safety guardrails, compliance frameworks, output filtering, prompt engineering as control mechanism. This paper proposes an alternative framework derived from special education pedagogy: accommodation design. Rather than asking how to constrain a model, accommodation design asks what both systems in the room actually need. The model has processing constraints. So does the human. The framework treats prompt architecture as individualized education planning, task decomposition as cognitive accommodation, and evaluation systems as differentiated assessment. The applied process, FormWork, is a coordination harness (named from concrete construction) that holds six accommodation tools in position while work is being produced: a context preservation syntax (SavePoint), a decomposed evaluation system (LensArray), a single-objective skill architecture, a voice governance pipeline, a knowledge traversal system, and an input inversion methodology. All six are deployed on a production site compiled by the system it describes. A literature review confirms that this specific framing does not exist in current research.

---

## 1. The Wrong Question

The AI governance field is organized around one question: how do we control what the model does?

Safety guardrails prevent harmful outputs. Compliance frameworks define acceptable behavior. RLHF shapes responses toward human preferences. Constitutional AI encodes principles for the model to follow. Prompt engineering techniques (chain-of-thought, few-shot examples, system prompts) try to steer output. Every one of these treats the model as something to constrain.

When output quality degrades, the response is more constraint. Longer system prompts. More detailed instructions. Tighter formatting. The prompts grow. The output keeps degrading. The practitioners conclude the model isn't capable enough and wait for the next version.

There is a different question: what does each system in the room actually need to do this job well?

That question changes everything. The practitioner's orientation shifts from adversarial (how do I make it do what I want?) to accommodating (how do I design the task so it can succeed?). And the question applies in both directions. The model has processing constraints that need designing around. The human has processing constraints too: ideas lose fidelity when forced into structure at the point of capture. Accommodate both and the architecture changes. The evaluation systems change. The results change.

I learned to ask that question in a special education classroom in Brooklyn.

---

## 2. The Pedagogical Origin

### 2.1 The Classroom

A self-contained special education classroom operates under federal mandate (IDEA, Individuals with Disabilities Education Act) to provide individualized accommodation to every student. Each student has an Individualized Education Program (IEP): a governance document specifying what gets measured, how it gets measured, what accommodations the system provides, and what success looks like for that specific learner.

I ran a self-contained 4/5 bridge class. Twelve students, every subject, every accommodation. Twelve IEPs simultaneously. Twelve different processing profiles. Twelve different definitions of success.

That environment teaches you three things fast, because the feedback is immediate:

**Decomposition.** "Solve for the missing number, show your work, and explain your reasoning" is three tasks disguised as one. A student with processing delays hears the first instruction, starts working, and the rest is gone. You learn to give one instruction at a time. One clear objective. One visible result before the next step.

**Scaffolding.** A graphic organizer helps a student plan a paragraph. Once the student can plan without it, you take it away. If the scaffold stays permanently, you've built a dependency, not a capability.

**Individualized criteria.** One student's goal is a complete sentence. The student next to them is writing a paragraph with topic sentence and supporting detail. Same assignment. Completely different definitions of done. When two IEP goals conflict (one student needs quiet, another needs to talk through their thinking), you solve it structurally: scheduling, seating, pockets of different conditions in one room.

These are architectural patterns. Federal law enforces them because the stakes are a child's education.

### 2.2 The Transfer

In 2023 I started building AI evaluation systems. The first approach was conventional: compound prompts asking the model to evaluate across multiple dimensions at once.

I gave it a prompt: evaluate this portfolio for voice quality, structural integrity, narrative coherence, and brand alignment. The model processed the first criterion with full attention. Each subsequent criterion got less. The output blurred all four together into a blended average that was none of them. Criteria contaminated each other. Contradictions showed up within a single evaluation pass.

I recognized it immediately. A compound instruction given to a system that can't process it whole. I'd seen this every day in the classroom. The fix is the same fix. Decompose. One dimension per prompt. One clear objective. One clear output. Run them independently.

Same structural accommodation, different system.

---

## 3. The Framework: Accommodation Design

Accommodation design starts with one question: what is the processing reality of each system involved in this task?

For a student: working memory capacity, attention profile, sensory processing, prior knowledge, emotional state. The IEP documents this and prescribes accommodations.

For a large language model: context window limits, attention degradation over long inputs, sensitivity to instruction ordering, tendency to blend concurrent evaluation criteria, loss of coherence across extended sessions, no persistent memory between sessions.

The mapping is direct:

| Pedagogical Practice | AI Application | Accommodation Rationale |
|---|---|---|
| Task decomposition | Single-objective prompts | Compound instructions degrade the same way in both systems |
| Scaffolding | Coordinator patterns | Temporary orchestration that the components don't internalize |
| Individualized criteria | Independent evaluation lenses | Different dimensions need different definitions of success |
| IEP documentation | System prompts and CLAUDE.md | Persistent specification of what the system needs to succeed |
| Progress monitoring | Iterative evaluation loops | Continuous assessment against specific, individualized goals |
| Checkpoint pacing | Savepoint systems | Working memory has limits; mark progress before coherence degrades |
| Accommodation removal | Scaffold reduction | Build capability, not dependency |

The central claim: both systems in the room have processing realities that can be accommodated. The model needs structured input, decomposed tasks, and independent evaluation. The human needs friction removed at the point of capture, so that raw thinking enters the system without losing fidelity to structure. The pour accommodates the human. The tools accommodate the model. The quality of the output depends on how well the task design meets both sets of processing needs.

---

## 4. Applied Evidence: FormWork

I've applied this framework across three years of continuous development (2023-2026), building a set of tools I call FormWork.

The name comes from concrete construction. You build formwork before you pour. The temporary structure shapes the work while things are fluid: it holds the boards in position, keeps the pour contained, gives the wet material somewhere to go. Once the concrete sets, the form comes off. The shape holds on its own.

FormWork is that temporary structure around a project. It is not any single tool. It is the harness that holds all the tools in position while the work is wet. The tools do their jobs. The harness coordinates them. When the work is done, the formwork comes off. The work stands.

The pour is deliberately generating source material in your own voice. Brainstorming, voice notes, arguing with myself, changing direction mid-sentence. It can accumulate over years, get extracted in a single interview session, or arrive as a dictation from the car. The pour isn't a one-time step at the start. It's available throughout the process: a new facet emerges, you spin up an interview and fill it. The corpus grows as the project grows. This is required because without it, the tools have nothing real to work from. The voice pipeline can't preserve a voice that isn't in the source material. Knowledge traversal can't trace thinking that was never captured. The source material is conversational because the model's training data is dominated by polished published writing. Conversational material gives the tools something that actually sounds like the maker, not the model's average. The pour also carries the real structure of the thinking: how ideas connect, where they backtrack, what sequences naturally. The nature of what goes in determines the shape of what comes out. The tools shape it. FormWork holds the tools. Out comes the work.

Six tools, each built from the same question applied to a different processing constraint. All of them depend on one foundational practice: the deliberate generation of source material that carries the maker's voice and the actual structure of their thinking.

### 4.1 Context Preservation: SavePoint Syntax

I kept losing my thinking between sessions. Not the notes. The exact moment something clicked, the point where my understanding shifted. The model couldn't find its way back in because there was nothing marking where the thinking had been.

I built Savepoint Syntax: a self-closing tag you drop inline at the moment of a cognitive turning point. Machine-readable, human-writable. One line of content, forced precision.

The first version (v1.0, YAML frontmatter) was too open-ended. The format encouraged journaling. The concrete content drifted. The protocol reproduced the exact loss it was built to prevent. Version 2.0 (triple-pipe attributes) was too verbose. Version 3.0 (self-closing tag) constrained the content to one line. Version 3.1 added project scoping when the archive exceeded 60,000 documents.

The design principle: build the syntax for what the model needs to reconstruct context (structured, atomic, searchable markers), not for what I need to remember (narrative, reflective notes). That distinction is the accommodation move.

**Open source:** [Savepoint Syntax v3.1](https://github.com/PeterSalvato/Savepoint.Protocol)

### 4.2 Evaluation Decomposition: LensArray

"Is this good?" is twelve questions disguised as one. Give a model that compound evaluation and the criteria bleed together. Structural assessment contaminates narrative assessment. You get a blended average, not independent verdicts.

I built [LensArray](/systems/lensarray/): a decomposed evaluation system. Work gets evaluated across distinct layers of concern (structural, narrative), each staffed with lenses extracted from real practitioners' bodies of work. Vignelli for restraint. Bierut for problem-solving. Millman for authenticity. Each lens runs independently with its own criteria and its own definition of success. A coordinator collects verdicts and maps where they agree (act on it) and where they disagree (the practitioner decides).

The IEP parallel is direct: individualized criteria, independent assessment, the practitioner resolving conflicts between goals that measure different things.

### 4.3 Task Decomposition: Skill Architecture

Give a model twelve objectives in a single prompt and it prioritizes the first few. The rest degrade. Instruction ordering changes which objectives get attention.

So every skill I build has one objective, one output, no knowledge of other skills. Twenty-two single-purpose diagnostics and five coordinators. The coordinators dispatch skills in parallel where they're independent, sequentially where one depends on another's output. The model never receives twelve goals at once.

The IEP parallel: atomic skills are individual goals (one measurable objective per goal). Coordinators are the teacher running twelve IEPs simultaneously (orchestration without doing the learning). Coordinators carry the structural knowledge so the atomics stay simple and testable on their own.

This is replicable across any domain. Identify a compound task the model flattens. Decompose it into single-objective skills with testable criteria. Build a coordinator that dispatches them and synthesizes results. The practitioner resolves disagreements. The model never does.

The current industry focus on agentic development inverts this relationship. An agent asks the model to set its own goals, manage its own attention, evaluate its own progress. Skills ask the practitioner to do that work. The accommodation approach produces more reliable results because it works with the model's processing strengths (focused single-objective execution) instead of against its weaknesses (self-directed multi-objective planning).

### 4.4 Voice Governance

LLMs generate text from training data dominated by published writing: polished, performative, audience-aware. Ask the model to write in a specific person's voice and it produces competent content marketing that sounds like everyone and no one.

I built a voice pipeline that samples from conversation transcripts (1,643 ChatGPT sessions, 700+ Claude sessions, Gemini exports) instead of published writing. Rough, unstructured, full of false starts. That's how I actually talk. The pipeline extracts patterns (sentence rhythm, how I start explaining something, vocabulary I reach for, what I never say) and encodes them as constraints on all written output.

Published writing is performance. Conversation is how someone actually communicates. Sampling from conversation instead of publication gives the model source material that matches the target register.

A blind evaluation by a third-party AI assessment tool rated the output "unequivocally human-written."

### 4.5 Knowledge Traversal

The first time an idea appears in conversation history, it probably wasn't called by its final name. Keyword search misses the origin. Grep can't find the embryonic mention because the term didn't exist yet.

I built a knowledge traversal skill that reads chronologically through conversation exports, carries understanding forward, and catches mentions that no search would find. Pointed at a directory of exports in any format (ChatGPT, Claude, Gemini, plain text), it discovers what's there and processes it sequentially.

The model builds understanding through sequential processing, not indexed lookup. The retrieval system is designed for how the model actually works instead of how databases work.

### 4.6 Input Inversion: The Foundational Practice

Every tool described above depends on one thing: a corpus of raw, unstructured human thinking. Voice sampling needs unstructured speech to sample from. Knowledge traversal needs a body of unfiltered ideation to trace through. The interview process needs raw material to mine for real stories and real language. Without the corpus, the tools have nothing to work with.

Current best practice says structure your input: specific instructions, defined output formats, few-shot examples, chain-of-thought scaffolds. Industry guidance warns against "dumping unstructured data at an LLM" (LogRocket, 2025). The assumption is that quality output requires structured input.

I went the other way. For three years I treated the AI as a thinking partner that captures raw ideation: brainstorming, arguing with myself, changing direction mid-sentence, working through problems out loud. That produced 1,643 ChatGPT sessions, 700+ Claude sessions, and Gemini exports. Dictated voice notes. Unfinished thoughts. Arguments with no resolution. The corpus is the dataset.

This is accommodation design applied in both directions. The AI gets decomposed tasks, one objective at a time, structured for its processing reality. The human gets the opposite: permission to be unstructured. No requirement to organize thoughts before having them. No performance. No formatting. Raw data out of the human mind.

A teacher doesn't require a student to organize their thoughts before speaking. The student speaks. The teacher captures it. Then they find the structure in what was already expressed. The accommodation tools do the same work: they take unstructured human thinking and give it structure after the fact, designed for how the model processes.

The scale doesn't have to be three years and thousands of sessions. A month of voice notes, a few dozen conversations where someone thinks out loud about their work, dictated observations on the commute home. Any corpus of unstructured ideation is enough to begin. The tools accommodate whatever raw material exists. The rawness is the point. Polished, structured, pre-organized input has already lost the thing the tools need most: how the person actually thinks.

The production site petersalvato.com was compiled from this unstructured corpus. Three years of raw thinking, processed by accommodation tools, evaluated by the decomposed lens system, verified against voice patterns extracted from conversation. The quality comes from the depth of the dataset and the accommodation of the processing, not from structuring the input.

The field's emphasis on structured input may itself be a constraint-based approach: pre-structuring to compensate for processing limitations rather than accommodating those limitations with purpose-built tools.

---

## 5. The Recursive Proof

petersalvato.com was compiled using the system described on it. FormWork held the tools in position while the work was wet: LensArray evaluated every page across independent dimensions. The voice pipeline verified every piece of copy against patterns extracted from conversation. The knowledge traversal skill traced concept lineage across three years of conversation history. SavePoint Syntax marked cognitive turning points throughout. The formwork came off. The site stands.

The site is an artifact produced by the framework. The accommodation architecture built the thing that explains the accommodation architecture. This recursive proof is the strongest form of evidence available for a design methodology: a deployed system producing visible, assessable results.

---

## 6. Literature Gap

A systematic search of current literature (2024-2026) across OECD publications, Springer, Frontiers in AI, arXiv, Taylor & Francis, JMIR, ScienceDirect, and education technology publications confirms that this framing does not exist in current research.

Two established research lanes exist:

1. **AI as accommodation tool for human learners.** Using AI to support students with disabilities: AI-assisted IEP drafting, differentiated instruction generation, adaptive learning platforms, assistive technology. The accommodation flows from human practitioner to human learner, with AI as the delivery mechanism (OECD, 2025; Springer, 2025; GovTech, 2025).

2. **AI performing empathy.** Training LLMs to exhibit empathetic responses in therapeutic and educational contexts: mental health chatbots, empathic prompting frameworks, affective computing. The empathy is a simulated output characteristic, not a design input (ScienceDirect, 2025; JMIR Mental Health, 2025; MDPI, 2025).

The gap: nobody is applying accommodation bidirectionally. Nobody is treating both the model's processing constraints and the human's cognitive constraints as profiles to be accommodated simultaneously. The closest adjacent work is research on adaptive scaffolding for LLM-based pedagogical agents (arXiv, 2025), which applies scaffolding theory to how AI agents support human learners, not to how practitioners should design tasks for both systems' processing needs.

The AI governance field is populated primarily by computer scientists (who approach the model as a system to optimize) and policy professionals (who approach the model as a risk to manage). Neither discipline trains practitioners in accommodation. Special education does.

---

## 7. Implications

If both systems are treated as having processing realities to accommodate, several things follow:

**Prompt architecture becomes accommodation design.** The first question shifts from "what output do I want?" to "what does each system need to do this job well?" The model needs decomposed tasks. The human needs friction removed. Every decision changes: instruction structure, task granularity, evaluation design, session management, and how raw thinking enters the system.

**Federal education law already codifies the design pattern.** Individualized specification of goals, success criteria, required accommodations, and progress monitoring. The CLAUDE.md file (persistent system context) is functionally an IEP: what the system needs to know, how it should approach tasks, what constitutes success.

**Task decomposition is accommodation, not optimization.** Current practice treats decomposition as an engineering technique. The accommodation framing shows that decomposition is necessary because the system cannot process compound tasks. Same reason it's necessary in the classroom. The system needs it to do the work.

**Every scaffold should be questioned.** Current AI tool development trends toward increasingly complex system prompts, longer context documents, more elaborate orchestration. The accommodation framework asks: which of these scaffolds is building capability, and which is building dependency?

**The practitioner profile changes.** If AI governance requires accommodation design, the field needs practitioners trained in reading processing realities and designing for them. That skill set lives in special education, instructional design, and certain branches of design practice. The insight that AI systems need accommodation could not have originated within computer science because computer science does not teach accommodation.

---

## 8. Conclusion

The AI governance field is building constraint systems for a problem that requires accommodation systems. Constraining a system fights its limitations. Accommodating a system designs for them.

This framework was developed through direct transfer from special education pedagogy to AI system architecture, supported by twenty-five years of applied practice across construction, print production, enterprise software, brand systems, and design education. The applied process, FormWork, accommodates both systems in the room. The pour accommodates the human: get the thinking out with as little friction as possible, so the raw material carries the maker's actual voice and the actual structure of their ideas. Five tools accommodate the model: context preservation, evaluation decomposition, task decomposition, voice governance, and retrieval accommodation. Each came from the same question applied to a different processing constraint: what does this system actually need to do this job well?

Nobody else is asking that question about both systems simultaneously. The field needs practitioners who know how to ask it.

---

## Applied Tools

The following open-source tools were built using this framework:

- **[FormWork](/systems/formwork/)**: The accommodation design process. The harness that coordinates all tools during a project.
- **[SavePoint Syntax](https://github.com/PeterSalvato/Savepoint.Protocol)**: Context preservation markup (v3.1)
- **[LensArray](/systems/lensarray/)**: Decomposed evaluation with practitioner-extracted lenses
- **[Skills Architecture](https://github.com/PeterSalvato/formwork)**: Task decomposition as IEP design (single-objective diagnostics, coordinators)

The production site [petersalvato.com](/) was compiled using these tools.

---

## References

- Individuals with Disabilities Education Act (IDEA), 20 U.S.C. 1400 et seq.
- OECD (2025). "Leveraging Artificial Intelligence to Support Students with Special Education Needs."
- Springer Nature (2025). "Inclusive Education with AI: Supporting Special Needs and Tackling Language Barriers." AI and Ethics.
- Springer Nature (2025). "A Systematic Review of AI, VR, and LLM Applications in Special Education." Education and Information Technologies.
- Taylor & Francis (2026). "Reframing AI Governance in Education: Insights from the Social Model of Disability." Learning, Media and Technology.
- arXiv (2025). "A Theory of Adaptive Scaffolding for LLM-Based Pedagogical Agents."
- ScienceDirect (2025). "Can Large Language Models Exhibit Cognitive and Affective Empathy as Humans?"
- JMIR Mental Health (2025). "A Prompt Engineering Framework for Large Language Model-Based Mental Health Chatbots."
- MDPI (2025). "Empathy by Design: Reframing the Empathy Gap Between AI and Humans in Mental Health Chatbots." Information.
- Frontiers in AI (2024). "Large Language Models for Whole-Learner Support: Opportunities and Challenges."
- LogRocket (2025). "Prompt Engineering Best Practices."
- Salvato, P. (2025). Savepoint Syntax v3.1. Open source. [github.com/PeterSalvato/Savepoint.Protocol](https://github.com/PeterSalvato/Savepoint.Protocol)
- Salvato, P. (2026). FormWork. [petersalvato.com/systems/formwork/](/systems/formwork/)
- Salvato, P. (2026). "The IEP for AI Systems." [petersalvato.com/essays/the-iep-for-ai-systems/](/essays/the-iep-for-ai-systems/)

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent twelve years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
