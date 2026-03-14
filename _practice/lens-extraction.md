---
layout: project
practice_group: whitepaper
title: "Lens Extraction"
subtitle: "Decomposed Evaluation Through Practitioner-Derived Criteria"
icon: construction
status: "Published"
faculty: ["design", "engineering"]
seo_keywords: ["lens extraction", "AI evaluation decomposition", "practitioner-derived evaluation", "design critique AI", "multi-perspective evaluation", "LLM-as-judge", "decomposed evaluation", "accommodation design", "SVA critique room", "Vignelli lens", "design evaluation framework", "AI design review"]
description: "A whitepaper proposing lens extraction: a protocol for extracting named practitioners' evaluative frameworks, codifying them as testable criteria, and running multiple lenses independently against the same work. Where they disagree is where the maker's judgment is needed."
last_modified: 2026-03-12
permalink: /practice/lens-extraction/
related:
  - /practice/accommodation-design
  - /systems/formwork
  - /essays/persona-extraction
---

Ask AI to evaluate your work and you get a blended average: everything is "good" or "needs work" with no way to act on it. In the critique room at SVA, five people evaluated the same piece and disagreed. That was the point. This paper documents how I extract a real practitioner's evaluative framework, codify it as testable criteria, and run multiple lenses independently against the same work. Where they disagree is where the real decisions live.

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18986295.svg)](https://doi.org/10.5281/zenodo.18986295)

**Source:** [github.com/PeterSalvato/lens-extraction](https://github.com/PeterSalvato/lens-extraction)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

AI evaluation of creative and professional work typically operates in one of two modes: single-model scoring ("rate this 1-10") or rubric-based assessment against generic criteria. Both flatten the evaluative function by treating quality as a single dimension. This paper proposes lens extraction, a protocol for studying a practitioner's body of work, identifying the evaluative framework underneath their visible decisions, and codifying it as testable criteria that an AI can execute independently. Multiple extracted lenses run in parallel across independent evaluation dimensions. Where they agree is signal. Where they disagree is where the maker's judgment is required. The protocol is demonstrated through three years of applied practice using lenses extracted from real practitioners (Vignelli, Bierut, Millman, Victore, Rams, Shaw, Muller-Brockmann, Draplin) deployed on a production site. The paper situates lens extraction within the accommodation design framework (Salvato, 2026): compound evaluation degrades in AI systems the same way compound instructions degrade in special education classrooms. The fix is the same. Decompose.

---

## 1. Twelve Questions Disguised as One

"Is this good?"

I asked an AI that question in 2023. The first approach was conventional: a compound prompt asking the model to evaluate a portfolio site across voice quality, structural integrity, narrative coherence, and brand alignment. The model processed the first criterion with full attention. Each subsequent criterion got less. The output blurred all four together into a blended average that was none of them. Criteria contaminated each other. Contradictions showed up within a single evaluation pass.

I recognized it immediately. A compound instruction given to a system that cannot process it whole produces failure. I had seen this every day in the classroom. The fix is the same fix. Decompose. One dimension per prompt. One clear objective. One clear output. Run them independently.

That solves the compound-evaluation problem. It does not solve the criteria problem: who decides what "good" means for each dimension?


## 2. The Criteria Problem

Generic evaluation criteria produce generic evaluation. "Is the typography clean?" is answerable but uninformative. "Does the type system demonstrate the economy of means and systematic limitation that Vignelli consistently demanded across forty years of practice?" produces a different evaluation entirely.

The difference is not precision alone. It is perspective. A generic criterion evaluates against a statistical average of what "good" means. An extracted criterion evaluates against a specific practitioner's consistent, documented standards. The first tells you whether the work is competent. The second tells you whether the work would satisfy someone whose judgment you trust.

The model for this existed before AI. The critique room at the School of Visual Arts. Multiple faculty evaluating the same work independently, from different perspectives, in good faith, at the same time. Where they agreed, strong signal. Where they disagreed, a decision for the maker. The evaluative function was decomposed across independent perspectives, and the disagreements were the most valuable output. Not noise. Decision points.

The question is how to reconstruct that evaluative function in AI-mediated work.


## 3. What the Field Is Doing

### 3.1 LLM-as-Judge

The dominant approach to AI evaluation is LLM-as-judge: a single model scores output against a rubric. The rubric may be generic ("rate creativity, coherence, and relevance on a scale of 1-5") or domain-specific. The model applies all criteria in a single pass.

The architecture has the same flaw as my initial compound prompt. The model blends criteria. A piece of work that is structurally excellent but narratively weak receives a middling score that obscures both the strength and the weakness. The evaluative function is flattened.

Recent work on multi-model debate (multiple models arguing about quality) addresses the perspective problem by introducing disagreement. But the models are not staffed with specific evaluative frameworks. They are generic models generating generic arguments. The disagreement is artificial.

### 3.2 Style Transfer and Aesthetic Scoring

Machine learning approaches to aesthetic evaluation train models on datasets of human preference judgments. The model learns to predict what humans rate highly. The output is a score or a ranking.

These systems capture statistical preferences. They do not capture evaluative logic. Knowing that a design will score 7.2/10 on a preference model tells you nothing about whether the typography serves the content, whether the grid is honest, or whether the identity is present. The score compresses every evaluative dimension into a single number.

### 3.3 Design Linting and Automated Review

Rule-based systems check mechanical properties: spacing consistency, color contrast, accessibility compliance. These are valuable and necessary. They are not evaluation. Passing every accessibility check does not mean the design communicates. Correct grid spacing does not mean the hierarchy works.

### 3.4 Rubric-Based AI Assessment

Predefined rubrics applied by AI models. The rubrics are generic by necessity, designed to apply across many projects. "Does the design have a clear visual hierarchy?" "Is the color palette consistent?" The criteria are testable but shallow. They evaluate the surface without evaluating the thinking.


## 4. The Gap

Nobody is extracting a named practitioner's evaluative framework from their body of work, codifying it as testable criteria, and running multiple extracted lenses independently against the same work to read convergence and divergence.

The evaluative function in the current literature is either:
- **Single-perspective** (one model, one rubric, blended output)
- **Generic-perspective** (multiple models, no specific evaluative frameworks)
- **Mechanical** (rule-based, surface properties only)
- **Statistical** (preference prediction, compressed to a single score)

Missing: multi-perspective evaluation using criteria extracted from the documented practice of specific, named practitioners, run independently, with convergence and divergence both treated as signal.


## 5. Lens Extraction

### 5.1 The Protocol

A lens is a codified evaluative framework extracted from a real practitioner's body of work. The extraction protocol:

1. **Study the practitioner's output.** Read their books, examine their work, listen to their talks. Massimo Vignelli has forty years of documented practice and published design philosophy. Debbie Millman has twenty years of interviews where her evaluative questions are explicit.

2. **Extract the framework.** What does this practitioner consistently ask? What do they never tolerate? Vignelli consistently demands economy of means: systematic limitation, type discipline, nothing that does not earn its place. Victore consistently demands personality: is the maker fiercely present? Does the work have the courage of its own identity?

3. **Codify as testable criteria.** Turn the extracted questions into specific, evaluable checks. "Does each typeface earn its presence, or could one be removed?" (Vignelli). "Would a stranger know who made this just by being in the room?" (Shaw). "Is there a real person in this text, or could it be anyone's?" (Millman).

4. **Validate against their known work.** The lens should confirm what the practitioner would confirm. Run a Vignelli lens against Vignelli's own work. If it scores poorly, the extraction is wrong.

This is what a good creative director does when building a team: systematize how strong practitioners think so the thinking scales beyond one person's presence. Lens extraction formalizes the process.


### 5.2 Multiple Lenses, Independent Dimensions

Each layer of concern gets its own lenses. On the production site (petersalvato.com), the layers are:

**Structural lenses** evaluate whether the design is well-built:
- Vignelli: restraint, economy, systematic limitation
- Rams: as little design as possible, everything earning its place
- Muller-Brockmann: the grid as order, structure creating clarity from complexity

**Narrative lenses** evaluate whether the site communicates identity:
- Victore: is the maker fiercely present? Does the work have personality?
- Millman: is there a real person here? Is the stake specific enough to be believed?
- Shaw: does this feel like a world? Would a stranger know who this person is?
- Draplin: is there a human with opinions here? Does the brand feel like the person?

Each lens runs independently. Each produces its own verdict. The coordinator collects the verdicts and maps convergence.


### 5.3 Why Tension Is the Point

A single lens produces imitation. If you extract Vignelli and apply only Vignelli, you get work that looks like Vignelli's. Multiple lenses produce tension. Vignelli demands restraint. Victore demands personality. Vignelli says remove everything unnecessary. Victore says put yourself into everything. Those two instructions, applied to the same page, force a decision no single influence would have produced.

The tensions between lenses are where the interesting decisions live. Over time, the accumulated resolutions become the work itself. The maker resolves every disagreement. The system identifies where the disagreements are. That is the accommodation: the system does the parallel evaluation the maker cannot hold simultaneously, and the maker provides the judgment the system cannot perform.

The IEP parallel is direct. Individualized criteria, independent assessment, the practitioner resolving conflicts between goals that measure different things. A student's IEP has multiple goals that sometimes conflict (build independence vs. provide support). The teacher navigates the tension. The framework holds both goals without pretending they are the same dimension.


## 6. Applied Evidence

### 6.1 The Steward Paradox

During one evaluation pass on petersalvato.com, the structural lenses scored seven out of nine criteria at the top tier. The grid was sound. The typography was clean. The spacing held.

The narrative lens that asks "does this feel like a world? would a stranger know who this person is just by being in the room?" scored WEAK.

Same site. Two layers. Opposite readings.

That looked like a contradiction until I recognized what the two layers were actually measuring. The structural layer was evaluating craft: is the thing well-built? The narrative layer was evaluating identity: does the thing feel like a specific person's space?

Both layers were right. The craft was sound and the identity was buried. I kept the structural foundation and rewrote the copy to bring the identity forward. That was a convergence decision: two layers, opposite readings, one choice that honored both.

A single-score evaluation would have returned something middling. "The site is adequate." The decomposed evaluation told me exactly what was strong, exactly what was weak, and exactly where my judgment was needed. The contradiction was the most valuable output.


### 6.2 Generation Constraints

The same lenses that evaluate can constrain generation. When the evaluation identifies that the voice is too generic, the voice lens criteria become generation inputs. The model writes under specific constraints: "lead with a real situation, not a concept" (Millman), "show the work, do not describe the methodology" (craftsman register), "no sentence exists to impress rather than demonstrate" (Victore).

Every generative output stops before writing to disk. The maker sees what was produced, decides, approves. The system handles analysis and generation. The maker handles creative direction. The lenses ensure that the generation is evaluated against specific, extracted standards, not against a generic sense of "good enough."


### 6.3 Scale

The production system currently runs twenty-two single-purpose diagnostic skills and five coordinators. Each diagnostic has one objective, one clear output. The coordinators dispatch them in parallel where they are independent and sequentially where one depends on another. The model never receives twelve evaluation goals at once.

This is task decomposition as accommodation. The model's processing limitation (compound evaluation degrades) is accommodated by the architecture (single-objective skills, coordinator orchestration). The individual assessments stay focused. The coordinator handles synthesis. The practitioner resolves disagreements.


## 7. Connection to Accommodation Design

Lens extraction applies the accommodation design framework (Salvato, 2026) to the evaluation function:

**The disability.** The model cannot evaluate across multiple dimensions simultaneously without blending them. Compound evaluation degrades the same way compound instruction degrades in the classroom. Criteria contaminate each other. The output is a blended average.

**The accommodation.** Decompose the evaluative function. Staff each dimension with criteria extracted from a practitioner whose judgment you trust. Run them independently. Give the model one evaluation task per lens. Collect results and map convergence.

**The human's role.** The maker resolves disagreements between lenses. The system identifies where judgment is needed. The human provides the judgment. The model never decides whether structural integrity outweighs narrative presence. That is a creative decision. The model does not make creative decisions.

The accommodation is bilateral. The AI cannot evaluate across all dimensions simultaneously (so we decompose). The human cannot hold nine independent perspectives simultaneously (so the AI runs them in parallel). Each system compensates for the other's processing limitation.


## 8. Implications

**Evaluation is decomposable.** "Is this good?" is twelve questions. Each question needs its own criteria, its own lens, its own definition of success. Systems that compress evaluation into a single score or a single rubric will always flatten the evaluative function.

**Practitioner extraction scales critique.** A junior designer working alone has access to their own judgment. With lens extraction, they have access to a codified approximation of Vignelli's judgment, Millman's judgment, Victore's judgment, all running in parallel. The critique room scales beyond the physical room.

**Disagreement is signal, not noise.** Multi-perspective systems should expect and value disagreement between lenses. The disagreements identify exactly where the maker's judgment is needed. A system that eliminates disagreement by averaging has removed the most valuable output.

**The maker stays in the loop.** Lens extraction does not replace the maker's judgment. It identifies where the maker's judgment is required and provides the specific criteria each perspective would bring to the decision. The final choice is always the maker's. The system was designed to produce that outcome.

**The protocol is replicable.** Any practitioner with a documented body of work can be extracted into a lens. Any domain with multiple evaluative perspectives can benefit from decomposed, lens-based evaluation. The protocol is not limited to visual design. Any field where "is this good?" is multiple questions disguised as one is a candidate.


## 9. Conclusion

The AI evaluation field is organized around single-perspective scoring. One model, one rubric, one score. The evaluative function is flattened into a number that obscures what is strong, what is weak, and where the maker's judgment is needed.

Lens extraction reconstructs the multi-perspective evaluation that working practitioners have always relied on. Multiple perspectives, extracted from real practice, running independently, with convergence and divergence both treated as signal. The tensions between lenses force decisions that no single perspective would produce. Those decisions, accumulated across every page, are what make the work specific to its maker.

The protocol is derived from the accommodation design framework: decompose the compound task, individualize the criteria, let the practitioner resolve the conflicts. The same move that works in a self-contained classroom works in AI-mediated evaluation, because the processing limitation is the same. Compound tasks degrade. Decomposed tasks produce usable results. The evaluative function is no exception.

---

## References

Salvato, P. (2026). AI Governance as Accommodation Design: A Pedagogical Framework for Human-AI System Architecture. petersalvato.com.

Salvato, P. (2026). Input Inversion: Why Unstructured Human Thinking Produces Better AI Output. petersalvato.com.

Salvato, P. (2026). A Different Kind of Harness: AI as Cognitive Prosthetic Through Mutual Accommodation. petersalvato.com.

Salvato, P. (2026). Semantic Flattening and the Case for Human-Marked Importance in AI Memory. petersalvato.com.

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent twelve years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
