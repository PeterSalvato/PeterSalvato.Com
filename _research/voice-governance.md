---
layout: project
practice_group: whitepaper
doi: "10.5281/zenodo.18986297"
title: "Voice Governance"
subtitle: "Generation Constraints vs. Post-Hoc Filtering in AI-Mediated Writing"
icon: construction
status: "Published"
faculty: ["design", "engineering"]
seo_keywords: ["voice governance", "AI writing voice", "generation constraints", "post-hoc filtering", "AI voice fidelity", "AI slop", "voice protocol", "accommodation design", "AI copy sounds generic", "how to make AI writing sound human", "AI writing voice matching", "why AI text sounds the same", "AI writing sounds generic", "how to keep your voice with AI", "why all AI text sounds the same"]
description: "A whitepaper arguing that voice constraints applied during AI text generation produce structurally different output than the same constraints applied as post-hoc filters. Presents a forty-rule voice protocol developed over three years of applied practice."
last_modified: 2026-03-12
redirect_from: /practice/voice-governance/
permalink: /research/voice-governance/
related:
  - /research/accommodation-design
  - /research/input-inversion
  - /essays/voice-governance
---

The first complete draft of this site was produced through conventional AI-assisted writing. Twenty-one project pages. Every one of them opened with an abstract concept before any real situation was established. "This project explores the intersection of..." on a page that should have said what broke and what I built to fix it. The pages were competent. Not one of them sounded like a person had written it.

I found that applying voice rules during generation, not after, produces structurally different output. This paper documents a forty-rule protocol built from how I actually talk in conversation, not from how I write when I know someone is reading.

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18986297.svg)](https://doi.org/10.5281/zenodo.18986297)

**Source:** [github.com/PeterSalvato/voice-governance](https://github.com/PeterSalvato/voice-governance)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

AI-generated text exhibits a consistent voice problem: competent prose that sounds like everyone else's competent prose. The industry's dominant approach treats voice as a post-generation concern: produce output, then check it against style guidelines, then revise. This paper argues that the generate-then-filter architecture is an accommodation failure, equivalent to letting a student attempt a compound task without scaffolding and then correcting their work. It proposes voice governance as a generation constraint architecture where codified rules, extracted from how the practitioner actually talks in unguarded conversation rather than from published writing, are applied during production. The paper presents a voice protocol developed over three years of applied practice, including forty discrete generation constraints, a voice extraction methodology using over 4,500 conversation transcripts as source material, and applied results where the output consistently reads as human-written under informal review. It situates voice governance within the accommodation design framework (Salvato, 2026): the model's voice disability (defaulting to the statistical center of its training data) is accommodated by constraining generation to prevent the default patterns from activating, the same way a teacher scaffolds instruction to prevent processing failures before they occur.

---

## 1. The Voice Disability

LLMs generate text from training data dominated by published writing: polished, performative, audience-aware. The statistical center of that data produces a specific voice: hedged, parallel, abstract-leading, em-dash-heavy, fortune-cookie-closing prose. Ask the model to write in a specific person's voice and it produces competent content marketing that sounds like everyone and no one.

This is not a capability limitation. The model can generate text in virtually any style. The problem is that its default patterns are deeply embedded, and those defaults reassert themselves within paragraphs even when the model has been instructed to write differently. A paragraph that begins in a practitioner's voice drifts back to the statistical center by its third sentence. The pull is constant.

I tried the standard fixes. Longer style descriptions. More examples of the target voice. "Write like a practitioner, not a marketer." "Be direct and specific." "Sound like a real person." The model followed the instruction for a sentence, sometimes two, and then the defaults came back. Abstract openings. Mechanical parallelism. Three consecutive sections with identical skeleton structures. The pull of the training distribution was stronger than any style prompt I could write.


## 2. The Industry's Architecture

The dominant approach to voice in AI-generated text is generate-then-filter:

1. **Generate.** Provide context and style guidance. The model produces text.
2. **Check.** Review the output against voice or brand guidelines.
3. **Revise.** Ask the model to adjust what does not match, or edit manually.

This architecture is standard across every major AI writing tool and every major set of best practices for AI-assisted writing. The assumption is that generation and voice are separable: you can produce content first and apply voice second.


### 2.1 Style Transfer

The academic approach trains or fine-tunes models on a corpus of the target writer's published work. The model learns to reproduce surface features: sentence length, vocabulary, punctuation patterns. The output reads as imitation. It captures how the writer's published work looks without capturing how the writer actually thinks. Published writing is performed. It has already been edited, shaped, and filtered for an audience. Training on performance produces performed output.

### 2.2 Persona Prompting

"You are a senior design engineer with 25 years of experience." The model generates a caricature. It performs confidence, uses jargon, and structures its responses the way it predicts a senior design engineer would structure them. Change the persona label and the output changes less than you would expect. The persona changes the surface. The underlying voice, the sentence structure, the rhythm, the way the model builds a paragraph, stays the same regardless of the label.

### 2.3 Controllable Generation

Attribute-level control: formality sliders, sentiment adjustment, topic steering. These are mechanical knobs applied to the generation process. They adjust parameters of the output without touching the underlying structure. Turn the formality dial up and you get a more formal version of generic prose.

### 2.4 Constitutional AI and RLHF

Constraint systems that shape what the model will and will not say. Constitutional AI encodes principles. RLHF shapes outputs toward human preferences. Both operate on the content of the output, not on its voice. A model trained via RLHF to be helpful, harmless, and honest will be all three of those things, and it will sound like every other model trained the same way.


## 3. Why Generate-Then-Filter Fails

### 3.1 The Default Voice Is Structural

By the time the model has generated a paragraph, the voice is embedded in the structure, not just the word choice. A paragraph that opens with "This project explores the intersection of..." has that shape baked in. The abstract concept leads. The specific situation follows (if it appears at all). The closing resolves neatly.

Post-hoc editing can change the words. It cannot easily change the shape. Rewriting "This project explores the intersection of" to "I walked into a company and found a Windows Forms application" requires restructuring the entire paragraph, because the second opening demands a different sequence: situation first, then implication. The paragraph was generated around the abstract opening. The structure supports the abstraction. Swapping the opening without rebuilding the structure produces incoherence.

### 3.2 Style Prompts Are Underspecified

"Write like a practitioner" is not actionable for a model. The model interprets it as a tone adjustment: slightly more direct, slightly less formal. The underlying structure remains the same. The model does not know what "practitioner authority" means operationally. It does not know that a practitioner leads with what happened before explaining why it matters. It does not know that a practitioner never opens with an abstract concept. It does not know that mechanical parallelism (three consecutive sections with the same skeleton) is a signature of AI-generated text that no human writer produces at that density.

"Write with authority" translates, for the model, to shorter sentences and fewer qualifiers. The authority is performed rather than demonstrated. The result sounds like a model trying to sound authoritative, which is a recognizable pattern.

### 3.3 The Accommodation Failure

Generate-then-filter is the equivalent of giving a student a compound task, letting them attempt it without scaffolding, and then correcting their work after they fail.

A teacher working with a student who has processing limitations does not say: "Write an essay. I will tell you what is wrong after you are done." The teacher scaffolds the production: provide the structure, constrain the approach, define success criteria before the work begins. The accommodation happens at the point of production, not at the point of review.

Post-hoc voice correction is post-hoc accommodation. It doesn't work for the same reason post-hoc instruction doesn't work: the processing that produced the output already happened with the wrong architecture. Fixing the output doesn't fix the process.


## 4. Voice Governance as Generation Constraint

### 4.1 The Protocol

I wrote a voice governance protocol in response to the copy failure. Codified rules applied during generation, not after. The protocol has been in continuous use since mid-2025 across every page of petersalvato.com.

**Hard rules (zero tolerance, applied during generation):**
- Zero em dashes. Periods, commas, colons, parentheses.
- Zero banned words: paradigm, leverage, passionate, innovative, synergy, empower, journey, transformative.
- Negation-affirmation ("Not X. Y.") maximum one per page. Must correct a genuine misunderstanding the reader would actually have. If it is emphasis or contrast, rewrite as direct statement.
- No fortune-cookie closers ("The [noun] is the [noun].").
- No personification of tools or methods ("does the thinking," "holds itself").
- No ungrounded metaphors (figurative language requires literal setup in surrounding text).
- No academic register where spoken English works.
- No mechanical parallelism (three consecutive sections with identical skeleton).

**Register definition (testable criteria):**
- Practitioner authority: first person, direct, specific, no hedging, no performing. Personal without being casual.
- The test: would Peter say this to a peer he respects in an adjacent field?
- Lead with the specific moment, not the concept.
- Material vocabulary: holds, breaks, drifts, scaffold, fidelity, load, joints, structure, craft.

When the model receives these constraints before generation begins, the output takes a different shape from the first token. The model routes around its defaults. It cannot open with an abstract concept because the rules prohibit it. It cannot close with a fortune-cookie because the rules prohibit it. It cannot fall into mechanical parallelism because the rules flag it.

The constraints don't tell the model what to write. They tell it what it can't do. Once the defaults are blocked, the model has to find another way to build the paragraph. That other way is closer to the target voice, because the most common failure modes have been taken off the table.


### 4.2 Voice Extraction From Conversation

The source material for the protocol is conversation, because published writing is performance. The practitioner has already edited, compressed, and shaped their thinking for an audience. Training on performance produces performed output.

The source material is conversation transcripts accumulated over three years across ChatGPT, Claude, and Gemini. Rough, unstructured, full of false starts. That is how I actually talk. This raw corpus is what the voice pipeline operates on. The pipeline extracts patterns from that material: sentence rhythm, how I start explaining something, vocabulary I reach for, what I never say.

Published writing says: "The methodology was developed through iterative refinement of governance patterns." Conversation says: "I kept losing things between sessions. Not the notes. The exact moment something clicked." The conversation version is the actual voice. The published version is what the voice sounds like after it has been cleaned up.

Sampling from conversation instead of publication gives the model source material that matches the target register. The model is not imitating published prose. It is working from the patterns of actual speech, encoded as constraints.

The extraction pipeline has two stages. The first samples how I talk in conversation: sentence rhythm, opening moves, vocabulary, transitions, emotional register. Raw observations, accumulated across sessions. The second converts those observations into operational generation rules organized by dimension: how sentences connect, how paragraphs open, where imagery comes from, how feeling enters the text. The protocol tells the model what it cannot do. The fingerprint tells it what I do. Both are loaded before generation begins.


### 4.3 The Structural Difference

When constraints are applied during generation, the model builds the paragraph around the constraints. The structure supports the voice from the first sentence. The paragraph is organized to lead with situation because the rules prohibit leading with abstraction. The rhythm varies because the rules prohibit mechanical parallelism. The closing is specific because the rules prohibit fortune-cookie resolution.

When constraints are applied after generation, the model builds the paragraph around its defaults and then tries to edit it. The bones are wrong. The structure was built to support abstraction-first, parallel, neatly-resolved prose. Changing the words does not change the bones.

This is the accommodation insight. Constrain during generation, not filter after. The same text, produced under different architectural conditions, has a different structure. The paragraph that was built under constraints has different bones than the paragraph that was built freely and then edited to match.


## 5. Applied Evidence

### 5.1 Before and After

The first complete draft of petersalvato.com was produced without voice governance. Twenty-one pages of competent copy. Abstract openings, generic register, no human presence. Clean architecture, wrong voice.

Every page was rewritten under the voice protocol. Some pages took three passes before the voice held. The FormWork page, which describes the coordination process, was one of the hardest. The instinct is to explain how evaluation works. The protocol demanded I show what evaluation produced: the SVA critique room, the construction metaphor, what happens when lenses disagree.

The same model, the same source material, the same project. The difference was the generation constraints. The constraints changed what the model could do, which changed the structure of what the model built, which changed whether a reader could hear a person in the text.

### 5.2 Evaluation

Informal review of the site's copy has consistently read as human-written rather than AI-assisted. No formal detection study has been conducted, but the contrast between constrained and unconstrained output from the same model is striking. The protocol is the variable. The model's capability did not change. The accommodation did.

### 5.3 What the Protocol Catches

The protocol catches patterns that the writer cannot hear in their own copy. After reading twenty drafts, the em-dash frequency becomes invisible. The fortune-cookie closers sound fine. The mechanical parallelism feels like "good structure." The protocol makes the patterns visible by prohibiting them. When the model cannot use them, the writer can see what remains, and what remains is either specific and grounded or it is empty.

The voice protocol is a diagnostic and a generation constraint simultaneously. It tells you what is wrong with the draft by preventing it from being wrong in those specific ways. If the constrained output is still flat, the voice was never the issue. The content itself needs work.


## 6. Connection to Accommodation Design

Voice governance applies the accommodation design framework (Salvato, 2026) to the voice problem specifically. The voice protocol constrains generation so the human's voice survives. The source material (unstructured conversation, voice notes, raw thinking) is the substrate the constraints operate on. The generation constraints accommodate the model's voice processing:

**The disability.** The model defaults to the statistical center of its training data. Generic, hedged, parallel, abstract-leading prose. This is a processing tendency, not a capability limitation. The model can produce distinctive voice. Its default is to not do so.

**The harm.** The human disappears. The output sounds like everyone else's AI output. The practitioner's actual voice, thinking patterns, and evaluative logic are erased by the statistical average.

**The accommodation.** Constrain during generation. Give the model specific, testable rules that prevent the default patterns from activating. Decompose "sound like this person" into forty discrete checks the model can follow independently. Extract the target voice from how the person actually talks (conversation transcripts), not from how they write (published, performed, edited).

**The principle.** Constrain during generation, not filter after. This is the accommodation design principle applied to itself: the voice protocol is structured the way it is because that is what the model's processing reality requires.

The IEP parallel: you do not let a student attempt a task with twelve implicit requirements, watch them fail, and then tell them what they did wrong. You make the requirements explicit. You give them scaffolding before they begin. You constrain the production so they can succeed at each piece. Then you evaluate.


## 7. Literature Gap

A search of current literature on voice, style, and controllable generation in AI systems confirms that no existing work frames voice governance as a generation constraint architecture derived from accommodation design.

The field has established lanes:
1. **Style transfer** (training on published corpora, surface imitation)
2. **Persona prompting** (role labels, caricature)
3. **Controllable generation** (attribute sliders, mechanical adjustment)
4. **Post-hoc editing** (generate then revise, the dominant approach)
5. **Constitutional AI/RLHF** (content constraints, not voice)

Missing: voice as a set of generation constraints applied during production, extracted from conversation rather than publication, framed as accommodation for the model's processing tendency toward its statistical center.

The closest adjacent work is research on "AI slop" detection and mitigation, which identifies the default patterns (hedging, parallelism, overuse of certain structures) but treats them as detection targets rather than generation constraints. The detection literature says: "here is how to tell if AI wrote this." Voice governance says: "here is how to prevent the model from writing that way in the first place."


## 8. Implications

**Voice is not style.** Style is surface: word choice, sentence length, formality level. Voice is structural: what does this person lead with, what do they never tolerate, what's the relationship between the specific and the abstract, how do they use evidence. Style can be adjusted after the fact. Voice lives in the paragraph structure, and that structure is set during generation.

Where should voice extraction sample from? Conversation. Published writing is performed. It has been edited for an audience. The patterns in conversation are the actual voice. The patterns in published writing are the voice after it has been filtered.

The same model, the same content, the same prompt: output produced under voice constraints has a different paragraph structure than output produced without them and then edited. The constraints reach the structure. Post-hoc editing only reaches the words.

**The protocol functions as an IEP.** Decompose "sound like this person" into specific, testable rules. Give the model one constraint at a time. Scaffold the generation so the model can succeed. The accommodation must happen before and during production, not after. The design pattern is the same one that governs a classroom: make the requirements explicit before the work begins.

The accommodation principle generalizes beyond voice. Any AI processing tendency that degrades output quality can be addressed through generation constraints rather than post-hoc filtering. Voice is one application. The principle (constrain during, not filter after) applies to any dimension where the model's defaults produce suboptimal results and post-hoc correction fails to fix the underlying structure.


## 9. Conclusion

The AI writing field is organized around a generate-then-filter architecture. Produce text, then check voice, then revise. This paper argues that the architecture is backwards. Voice constraints applied during generation produce structurally different output than the same constraints applied after generation. The difference is structural.

Voice governance provides the generation constraint architecture: codified rules extracted from conversation, applied during production, preventing the model's default patterns from activating. The result is text that consistently reads as human-written under informal review, produced by the same model that generates recognizably AI-flavored text without the constraints.

The insight is accommodation design applied to voice. The model has a processing tendency (statistical center of training data). The tendency produces a specific harm (the human disappears). The accommodation (generation constraints, not post-hoc filters) is designed for the model's processing reality: give it explicit rules before it begins, the same way you give a student explicit scaffolding before they attempt the task. The accommodation has to happen during production. By the time you are reviewing output, the structure is already set, and changing words on top of the wrong structure does not fix it.

---

## References

Salvato, P. (2026). AI Governance as Accommodation Design: A Pedagogical Framework for Human-AI System Architecture. petersalvato.com.

Salvato, P. (2026). Input Inversion: Why Unstructured Human Thinking Produces Better AI Output. petersalvato.com.

Salvato, P. (2026). A Different Kind of Harness: AI as Cognitive Prosthetic Through Mutual Accommodation. petersalvato.com.

Salvato, P. (2026). Semantic Flattening and the Case for Human-Marked Importance in AI Memory. petersalvato.com.

Salvato, P. (2026). Lens Extraction: Decomposed Evaluation Through Practitioner-Derived Criteria. petersalvato.com.

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

## Learn It

[Joinery](https://joineryschool.com) teaches voice governance in applied practice — on your own real project, not a fictional example.

**Source:** [GitHub](https://github.com/PeterSalvato/voice-governance)

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent thirteen years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
