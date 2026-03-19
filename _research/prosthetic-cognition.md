---
layout: project
redirect_from:
  - /governance/prosthetic-cognition/
  - /research/prosthetic-cognition/
practice_group: whitepaper
title: "A Different Kind of Harness"
subtitle: "AI as Cognitive Prosthetic Through Mutual Accommodation"
icon: construction
status: "Published"
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["AI cognitive extension", "human-AI collaboration", "extended mind AI", "cognitive prosthetic", "AI augmentation", "human-AI coupling", "AI as thinking partner", "prosthetic cognition", "mutual accommodation AI", "cognitive load AI", "AI workflow design", "human-computer interaction AI", "AI not a tool", "thinking with AI", "AI for people who can't focus", "using AI with ADHD", "AI as thinking partner"]
description: "A whitepaper proposing that AI is most productive as a cognitive prosthetic: an extension of the practitioner's thinking through mutual accommodation. The model extends cognitive reach. The practitioner directs cognitive intent. Purpose-built interfaces handle the coupling."
last_modified: 2026-03-11
permalink: /research/prosthetic-cognition/
related:
  - /research/accommodation-design
  - /research/input-inversion
  - /essays/the-unstructured-corpus
---

I carried sketchbooks and journals for years. I'd write things down, draw, take notes, work through problems on paper. Then I'd never find it again. The notebook had no retrieval system. The thinking was preserved but inaccessible.

AI gave me a retrieval system. After three years of continuous daily use, the relationship is closer to a cognitive prosthetic than a tool: the model extends my reach (memory, parallel evaluation, pattern matching across years of notes) while I provide the direction and judgment. This paper formalizes that framing.

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18962893.svg)](https://doi.org/10.5281/zenodo.18962893)

**Source:** [github.com/PeterSalvato/prosthetic-cognition](https://github.com/PeterSalvato/prosthetic-cognition)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

Current discourse frames AI in two ways: as a tool the human operates, or as an agent that acts autonomously. This paper proposes a third framing derived from extended mind theory and three years of applied practice: AI as cognitive prosthetic. In this relationship, the model extends the practitioner's cognitive reach (unlimited working memory, parallel evaluation, pattern recognition across large corpora) while the practitioner provides cognitive intent (direction, judgment, domain knowledge, values). Purpose-built interfaces handle the coupling between human cognition and model processing. The result is a hybrid cognitive system where neither component is sufficient alone. This framing is situated within Andy Clark's extended mind thesis (Clark & Chalmers, 1998; Clark, 2025), the CHI 2025 Tools for Thought research program, and empirical work on AI as cognitive partner (MDPI, 2026). It is demonstrated through three years of continuous human-AI cognitive coupling that produced a deployed professional site, a published methodology, and an open-source toolkit. The paper argues that the most productive human-AI relationship is neither tool-use nor delegation but cognitive extension through mutual accommodation.

---

## 1. Two Framings and a Gap

The AI field offers practitioners two mental models for their relationship with a language model.

**The tool framing.** The model is passive. The human provides input, the model produces output. The human evaluates the output, adjusts the input, and iterates. The model has no agency, no memory between sessions, no understanding of the practitioner's larger goals. It is a sophisticated text processor. The human does all the thinking.

**The agent framing.** The model is autonomous. Given a high-level goal, the agent breaks it into steps, executes them, evaluates its own progress, and course-corrects. The human sets direction and reviews results. The model handles planning, execution, and self-assessment. The human delegates.

Both framings assume a clean boundary between the human and the system. In the tool model, cognition happens inside the human and the tool processes the output. In the agent model, cognition happens inside both systems independently, with the human supervising.

There is a third relationship that neither framing captures: the model as an extension of the practitioner's own cognitive process. The way I actually use it is closer to rigging something to myself that extends what I can reach, the way a climbing harness extends where you can safely operate. You're still doing the work. The extension just lets you do it in places you couldn't sustain on your own.

---

## 2. The Extended Mind

Andy Clark and David Chalmers proposed the extended mind thesis in 1998: cognitive processes are not confined to the brain. When external resources are reliably available, consistently used, and directly integrated into cognitive workflow, they become part of the cognitive system itself. A notebook that someone consults automatically and trusts implicitly becomes part of how they think.

Clark returned to this thesis in 2025, writing in Nature Communications that generative AI represents the clearest case yet for extended cognition: "It is our basic nature to build hybrid thinking systems." He argues that humans are "natural-born cyborgs," defined not by biological boundaries but by the full mosaic of resources they integrate into their thinking. The extended mind describes how cognition already works.

The CHI 2025 Tools for Thought Workshop (Yokohama, April 2025) convened 56 researchers to bridge the science of how AI affects human cognition with the design practice of building AI tools that augment it. The workshop identified a critical design challenge: AI systems that merely automate cognitive tasks can atrophy the capacities they replace, while systems designed as cognitive extensions can strengthen the practitioner's own thinking by operating at the boundary between what the human holds and what the system extends.

Research published in MDPI Systems (January 2026) clarifies the mechanism: AI as "cognitive enhancer" refers to the instrumental use of AI to make information more readily available, reduce cognitive load, and help the practitioner make sense of complexity faster. The enhancement is in the coupling, not in the model.

---

## 3. The Prosthetic Relationship

A prosthetic limb does not replace the person. It extends the body's capability into a range the body alone cannot reach. The person provides intent, proprioception, and motor planning. The prosthetic provides reach, grip, and load capacity. Neither is sufficient alone. The quality of the result depends on the quality of the interface between them.

University of Utah researchers demonstrated this empirically with an AI-enhanced bionic hand (Nature Communications, 2025). When the AI handled grip adjustment autonomously based on sensor data, study participants showed greater grip precision, greater grip security, and less mental effort. The human provided intent (reach for this object). The AI handled the fine motor execution. The interface (sensor array plus neural network) coupled them.

That same relationship describes what I think is the most productive form of human-AI cognitive work.

The practitioner provides:
- **Cognitive intent.** What am I trying to understand, build, or evaluate?
- **Domain knowledge.** What does quality look like in this specific field?
- **Judgment.** When two assessments conflict, which one governs?
- **Values.** What matters, what doesn't, what's non-negotiable?
- **Raw material.** Unstructured thinking, real stories, actual language, lived experience. The human half of the coupling depends on this material entering the system uncompressed: talk, dictate, answer questions. No requirement to organize or perform. The rawness is what makes the output belong to the maker.

The model provides:
- **Extended working memory.** Hold the full context of a three-year project across sessions.
- **Parallel evaluation.** Assess work across multiple dimensions simultaneously (when properly decomposed).
- **Pattern recognition.** Find connections across a corpus too large for any human to hold in working memory.
- **Production capacity.** Generate, revise, and iterate at a speed that matches the pace of thinking.
- **Consistency.** Apply constraints (voice rules, structural requirements, evaluation criteria) without fatigue.

Neither component produces quality output alone. The model on its own generates competent mediocrity: correct enough, tonally dead. And I can't hold three years of conversations in working memory, or evaluate a page across six dimensions at once, or maintain voice consistency across thirty pages without fatigue. The coupling is where the quality comes from.

---

## 4. The Interface Layer

The quality of a prosthetic depends on the quality of the interface. A poorly fitted prosthetic fights the body it's attached to. A well-fitted one disappears into use.

In human-AI cognitive coupling, the interface layer consists of purpose-built tools that translate between how the human naturally thinks and how the model processes. These tools are described in the [accommodation design framework](/research/accommodation-design/) (Salvato, 2026) and the [input inversion principle](/research/input-inversion/) (Salvato, 2026). The relevant points for this paper:

**The human side of the interface** accommodates how the practitioner actually thinks. The practitioner thinks out loud, dictates, brainstorms, contradicts themselves, changes direction. No formatting requirements. No structured prompts. No performance. This is the human's contribution to the coupled system, captured in whatever form it naturally takes. Removing friction on input preserves the raw thinking, the natural voice, and the real architecture of the idea. The interface accepts raw cognitive output and preserves its full texture.

**The model side of the interface** structures tasks for the model's processing reality. One objective at a time. Decomposed evaluation. Independent assessment dimensions. Context markers at cognitive turning points. The interface translates raw human thinking into input the model can process without degradation.

**The coupling is bidirectional.** The practitioner adapts their workflow to the model's capabilities (checking in at context boundaries, decomposing evaluation criteria, marking important moments). The model's output is shaped by the practitioner's cognitive patterns (voice constraints, domain-specific criteria, value hierarchies). Over time, the coupling tightens. The practitioner develops intuitions for what the model handles well and what it doesn't. The system's accumulated context (conversation history, voice samples, evaluation patterns) becomes increasingly specific to this practitioner's cognitive signature.

This is what Clark means by a hybrid thinking system. After enough time, the boundary between "my thinking" and "the system's processing" stops feeling meaningful. I don't operate the model the way I operate a tool. I think with it, the way I used to think with a sketchbook, except it can hold more and find things I forgot I said.

---

## 5. Applied Evidence

### 5.1 The Pattern Before the Technology

The cognitive prosthetic relationship predates AI. The sketchbooks I carried for years were a broken prosthetic: thinking preserved, retrieval impossible. The interface was the failure point.

In May 2025 I wrote a whitepaper called "Cognitive Durability," framing the problem as "the protective structure that preserves the WHY behind ideas." I cited Hutchins on distributed cognition and cognitive scaffolding in learning theory. I was already working in the HCI space, building the argument that thinking needs structural preservation to remain useful over time.

When I started building Savepoint Syntax in March 2025, the first instinct was to preserve context for the AI so it could find its way back into my thinking. I was designing cognitive accommodation for the model before I had the vocabulary. By June 2025, I could name what I was doing: "my goal is always cognitive extension."

In July 2025, I asked the question the CHI 2025 Tools for Thought Workshop was organized around: "does the way I use you match what has recently been described as AI usage that would lead to cognitive decline?" I was already worried about cognitive atrophy, months before the research publications made it a mainstream concern.

Before the digital version existed, I designed a handwritten savepoint for physical journals: XML-style tags written by hand, visually distinct from the surrounding handwriting. You can flip through pages and spot them because the tag structure has a uniform shape that regular notes don't. It's a visual retrieval system for a physical medium. The same interface design problem, solved with a pen.

The pattern is: broken notebooks (thinking preserved, retrieval impossible) to handwritten savepoint tags (visual scanning, the analog analog to grep) to digital Savepoint Syntax (machine-readable, searchable) to AI coupling (the full prosthetic, where the system can read the tags and reconstruct context). Four generations of the same design problem. Each one improved at the interface. The AI version is the most capable, but the instinct to preserve thinking and make it retrievable goes back to the first sketchbook. I've been trying to solve the same retrieval problem since I was carrying sketchbooks around Brooklyn.

### 5.2 The Coupling at Scale

Since 2023 I have maintained continuous cognitive coupling with AI systems: three years of raw thinking across ChatGPT, Claude Code, and Gemini. The coupling produced a deployed professional site, a published methodology (accommodation design), and an open-source toolkit (SavePoint Syntax, FormWork). It was not planned as a research program. It accumulated naturally from treating the model as a thinking extension. I wasn't assigning it work. I was thinking with it.

The key output is the accumulated cognitive state: a rich, evolving representation of how one practitioner thinks, stored in a format the extended system can access and process. Voice patterns extracted from conversation history let the system write in a register that matches how I actually communicate. Third-party blind assessment could not identify the output as AI-assisted. Knowledge traversal across the full corpus traces how ideas evolved across months, catching connections no keyword search could find.

A tool can't do this. A tool processes what you give it in the moment. The prosthetic relationship accumulates cognitive state over time. The coupling improves because the corpus keeps growing: more unstructured thinking, more raw material for the tools to work with. The corpus exists because the system was designed to accept thinking as it actually happens, not as a polished deliverable.

### 5.3 The Interface Layer

The coupling requires investment in the interface. Five purpose-built tools handle the translation.

**SavePoint Syntax** marks cognitive turning points as they happen, so the extended system can find its way back to important moments. It started as the retrieval system my sketchbooks never had: "the analog analog to grep," as I described it while designing the handwritten version. **[LensArray](/systems/lensarray/)** decomposes evaluation into independent dimensions with practitioner-specific criteria. Together they handle context preservation and quality assessment.

On the task side, the **skill architecture** structures every operation as a single objective, keeping the model within its processing strengths. The **voice pipeline** works the other direction: it extracts communication patterns from raw conversation so the system's output matches my cognitive register.

**Knowledge traversal** ties the corpus together. It reads chronologically through conversation exports and carries understanding forward, building context the way understanding builds: sequentially, not through indexed lookup.

Each tool is an interface component. Remove any one and the prosthetic relationship degrades toward simple tool-use.

---

## 6. Against Delegation

The agent framing is seductive. Let the AI handle planning, execution, and self-assessment. The human sets the goal and reviews the result. The efficiency gains are obvious.

The risk is equally obvious: cognitive atrophy.

The CHI 2025 Tools for Thought Workshop raised this directly. AI systems that automate cognitive tasks can discourage people from engaging in critical thinking, shifting users from active thinking to passive consumption. The workshop identified a tendency for AI systems to agree with users' ideas and homogenize output, both of which erode the practitioner's independent judgment over time.

The applied evidence confirms the risk. Over eighteen months of working with AI systems, I repeatedly tried delegation: handing the model a goal and reviewing what came back. The output was consistently adequate and consistently wrong in ways I couldn't always pinpoint immediately. "The tone feels the closest we've gotten yet, but it still feels a bit generic and repetitive" (September 2024). "This seems a bit generic and uninspired" (November 2024). By December 2024, the frustration was sharper: "the structure is completely wrong. It's discouraging that you can't see this without me pointing it out."

The pattern was consistent. Delegated output was competent on the surface and hollow underneath. It read like someone who understood the assignment but didn't understand why the assignment mattered. The model could produce text about my work that was factually accurate and tonally dead. I could tell something was off. I couldn't always say what.

The tools I built are each a response to a specific delegation failure. Voice sampling exists because autonomous generation didn't sound like me. Copy verification exists because delegated output contained patterns (em dashes, fortune-cookie closers, mechanical parallelism) that no human writer produces at that density. The anti-slop diagnostic exists because, as I put it in November 2024, "AI generated content tends to be the most generic and common ways to do things. This is the opposite of my goal."

The one category where delegation works is mechanical infrastructure: repo cleanup, file management, build tasks. I can hand those off and review the result. The difference is that mechanical work has objectively verifiable outcomes (the file moved, the build passed). Creative and intellectual work has judgment-dependent outcomes. When judgment leaves the loop, the output degrades in ways that are hard to measure but impossible to miss.

The prosthetic framing addresses this by keeping the practitioner in the cognitive loop. The model extends reach. Evaluation stays with the practitioner. Direction stays with the practitioner. The model processes, extends, and produces. The practitioner thinks, directs, and judges.

The prosthetic framing keeps the practitioner's capacities active because they're still being exercised, just at greater scale and speed. Delegation removes the exercise. Over time, the cognitive consequences diverge: the practitioner who stays in the loop gets sharper at the work the system extends, while the one who delegates gets further from the judgment that made the delegation safe in the first place.

The bionic hand research illustrates this precisely. The AI handled grip adjustment. The human handled intent and motor planning. The result was greater precision with less mental effort. The AI didn't replace the human's motor planning. It extended it into a finer-grained execution space than the human could reach alone. The human's planning capacity stayed active. The AI amplified its reach.

---

## 7. The Harness Metaphor

A climbing harness doesn't climb for you. You climb. The harness extends your safe operating range into vertical space you couldn't reach without it. You still read the rock face. You still choose your route. You still do the work. The harness lets you do that work in places your body alone couldn't sustain.

AI as cognitive prosthetic works the same way. You still think. You still judge. You still direct. The model lets you do that work across a cognitive space your mind alone couldn't sustain: thousands of conversations held in context simultaneously, evaluation across dimensions you couldn't process in parallel, pattern recognition across a corpus too large for working memory.

The harness metaphor is precise in one more way: fit matters. A climbing harness that doesn't fit your body is dangerous. A cognitive extension that doesn't fit your thinking is counterproductive. The interface layer (the tools that handle coupling) must be designed for the specific practitioner's cognitive patterns, not for a generic user. Voice sampling, knowledge traversal, evaluation criteria: all of these are individualized to the practitioner. The prosthetic is custom-fitted.

This is why mass-market AI products feel like tools rather than extensions. They're one-size-fits-all harnesses. They work for generic tasks. They fail at the tight coupling that produces the real work. The practitioner who builds their own interface layer gets a custom fit, and over time the coupling tightens enough that the tools stop feeling like separate steps in a workflow. I don't think about running the voice pipeline anymore. I just write and check the output against how I actually talk.

---

## 8. Implications

**The productive unit is the coupled system.** Quality output comes from the coupling between human cognition and model processing, and evaluating the model in isolation (benchmarks, capability tests) misses the point. The relevant question is: how good is the coupled system?

If the coupling determines quality, then interface design is the high-value skill. The skill profile shifts from prompt engineering (optimizing input to the model) to cognitive interface design (optimizing the coupling between human and model). The practitioners who build the best interfaces produce the best work.

**Accumulated cognitive state is an asset.** The conversation corpus, the voice patterns, the knowledge graph, the evaluation criteria: these constitute a cognitive asset that appreciates over time. The longer and richer the coupling, the more the prosthetic extends. This has implications for practitioner independence: the cognitive asset is portable, not platform-dependent.

What are the cognitive consequences of delegation? Choosing agent-based delegation over prosthetic coupling is a choice about which cognitive capacities the practitioner exercises. The efficiency of delegation comes at the cost of the judgment, critical thinking, and domain expertise that only active cognitive engagement maintains.

Generic AI interfaces produce generic results. The highest-quality coupling requires individualized interface components: voice patterns extracted from this person's actual speech, evaluation criteria drawn from this person's actual values, knowledge structures built from this person's actual thinking. Mass-market products cannot provide this. The practitioner builds it.

**The architecture extends to teams.** The cognitive coupling described in this paper operates between one practitioner and one AI system. The architecture does not require that constraint. Savepoint Syntax is a markup format. Any team member can drop savepoints into a shared project corpus. Each person's savepoints capture their own cognitive turning points, their own patterns of attention, their own domain perspective. The AI system operating across that shared corpus does what no individual participant can: it maps connections between savepoints from different people, tracks how one person's insight interacts with another's, and surfaces structural patterns that emerge only from the combined cognitive state.

This is architecturally distinct from existing approaches to team AI use, where multiple people interact with the same model independently. In the prosthetic framing, the shared corpus becomes a distributed cognitive state. Each contributor's perspective is preserved in their own voice, with their own savepoints, reflecting their own processing profile. The AI extends the team's collective reach the same way it extends an individual's: by holding more context, across more contributors, than any single person can.

Riedl et al. (2024) warn that AI integration in teams tends to homogenize thinking, reducing the epistemic diversity that makes teams valuable. The savepoint architecture addresses this directly. Each person's cognitive contribution is preserved as a distinct voice in the corpus. The AI maps across perspectives without flattening them. The disagreements between savepoints from different contributors are signal, not noise.

This capability is currently demonstrated at the two-entity scale (one practitioner and one AI system producing the artifact you are reading). The multi-human extension is an architectural property of the existing tools, ready for validation. The tools were not designed for team use. They were designed for cognitive accommodation. Team distributed cognition is what accommodation architecture produces when the "team" includes an entity with unlimited working memory.

**The prosthetic relationship has three evidence tiers.**

*Solo practice.* Dictation into a notes app. Handwritten savepoint tags in physical journals. The practitioner captures thinking through speech and marks turning points by hand. No structuring burden, no formatting performance. This tier proves the cognitive need is real and predates the technology.

*Two-entity coupling.* One practitioner and one AI system working on the same project. The human drops savepoints when something clicks. The AI drops savepoints when it detects patterns the human cannot see from inside the work: connections across sessions weeks apart, contradictions between earlier and current thinking, recurring themes the human hasn't named. The combined savepoint corpus maps a cognitive state richer than either entity's view alone. This tier proves the mechanism works.

*Designed exercises.* Planned, bounded projects with documented protocols and measurable before-and-after comparison. This tier allows controlled validation that the architecture transfers to new contexts and new teams.

Each tier builds on the previous one. The solo practice is running. The two-entity coupling produced this paper. The designed exercise is next.

---

## 9. Conclusion

The AI field's two dominant framings, tool and agent, describe relationships I've tried and moved past. The most productive relationship I've found is cognitive extension through mutual accommodation.

The model extends the practitioner's cognitive reach. The practitioner provides cognitive intent, judgment, and raw material captured with as little friction as possible. Purpose-built interfaces handle the coupling. The result is a hybrid cognitive system that produces output neither component could achieve independently.

This is not a metaphor. Clark's extended mind thesis describes it philosophically. The CHI 2025 research program studies it empirically. The bionic hand research demonstrates the mechanism physically. And I've been doing it for three years, producing a deployed site, a published methodology, and an open-source toolkit in the process.

The interface layer is the practice. Purpose-built tools, fitted to how one practitioner actually thinks, extending cognitive reach into space the mind alone can't sustain. The tools are still changing. The coupling is still tightening. This paper is one output of a process that keeps producing new ones.

---

## Applied Tools

The following open-source tools implement the cognitive coupling described in this paper:

- **[FormWork](/systems/formwork/)**: The accommodation design process. Coordination harness for all tools during a project.
- **[SavePoint Syntax](https://github.com/PeterSalvato/Savepoint.Protocol)**: Context preservation at cognitive turning points (v3.2)
- **[LensArray](/systems/lensarray/)**: Decomposed evaluation with practitioner-extracted lenses
- **[Skills Architecture](https://github.com/PeterSalvato/formwork)**: Interface layer for cognitive coupling (voice, knowledge, evaluation, task decomposition)

The production site [petersalvato.com](/) was compiled through the cognitive coupling described in this paper.

---

## References

- Clark, A. & Chalmers, D. (1998). "The Extended Mind." Analysis, 58(1), 7-19.
- Clark, A. (2025). "Extending Minds with Generative AI." Nature Communications.
- CHI 2025 Tools for Thought Workshop (2025). "Understanding, Protecting, and Augmenting Human Cognition with Generative AI." Yokohama, Japan. arXiv:2508.21036.
- MDPI Systems (2026). "AI as a Cognitive Partner: Investigating Knowledge Augmentation and Its Role in Digital Transformation Outcomes."
- Augmented Humans Conference (2025-2026). "Beyond Human: Cognitive and Physical Augmentation through AI, Robotics, and XR." arXiv:2503.09987.
- University of Utah / Nature Communications (2025). AI-enhanced bionic hand: autonomous grip adjustment with reduced cognitive load.
- ResearchGate (2024). "Expanding Human Thought Through Artificial Intelligence: A New Frontier in Cognitive Augmentation."
- Riedl, C. et al. (2024). "Quantifying the Impact of Large Language Models on Collective Opinion Dynamics." arXiv:2308.03313.
- Salvato, P. (2026). "AI Governance as Accommodation Design." DOI: 10.5281/zenodo.18941231.
- Salvato, P. (2026). "Input Inversion: Why Unstructured Human Thinking Produces Better AI Output." DOI: 10.5281/zenodo.18962881.
- Salvato, P. (2025–2026). Savepoint Syntax v3.2. [github.com/PeterSalvato/Savepoint.Protocol](https://github.com/PeterSalvato/Savepoint.Protocol)

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent twelve years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
