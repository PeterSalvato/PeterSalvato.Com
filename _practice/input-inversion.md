---
layout: project
redirect_from: /governance/input-inversion/
practice_group: whitepaper
title: "Input Inversion"
subtitle: "Why Unstructured Human Thinking Produces Better AI Output"
icon: construction
status: "Published"
faculty: ["design", "engineering"]
seo_keywords: ["input inversion", "unstructured AI input", "structured prompts overrated", "raw thinking AI", "voice input AI", "prompt engineering diminishing returns", "talking to AI", "AI brainstorming", "accommodation design", "better AI results without structure", "why prompt engineering fails", "unstructured data AI quality"]
description: "A whitepaper challenging the foundational assumption of prompt engineering: that quality AI output requires structured human input. Three years of applied evidence demonstrates that raw, unstructured thinking produces better results when purpose-built tools handle the translation."
last_modified: 2026-03-11
permalink: /practice/input-inversion/
related:
  - /practice/accommodation-design
  - /essays/the-unstructured-corpus
  - /essays/talk-to-it
---

Everyone assumes you need to give AI structured, precise instructions to get good output. I spent three years proving the opposite. Raw thinking, voice notes, unfinished sentences, arguments with myself: when purpose-built tools handle the translation, the unstructured material produces better results than any prompt template. This paper documents why.

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18962881.svg)](https://doi.org/10.5281/zenodo.18962881)

**Source:** [github.com/PeterSalvato/input-inversion](https://github.com/PeterSalvato/input-inversion)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

The prevailing assumption in AI interaction design is that quality output requires structured input: specific instructions, defined output formats, few-shot examples, chain-of-thought scaffolds. This paper presents evidence from three years of applied practice that the inverse produces better results. When purpose-built tools handle the translation between raw human thinking and model-ready input, unstructured ideation becomes the highest-value substrate. The paper documents a production workflow where three years of unstructured thinking were processed by accommodation tools into a deployed professional site that third-party evaluation classified as direct human writing. It situates this practice within converging industry evidence: the measured decline of prompt engineering as a standalone discipline, research demonstrating that agentic workflows outperform optimized single prompts, voice interaction research showing speech produces richer and more detailed output than typed input, and the RAG industry's wholesale move toward unstructured data processing. The paper proposes input inversion as a formal design principle: reverse the burden of structure from the human to the tooling, and the quality of AI output improves because the source material is richer.

---

## 1. The Assumption

The AI industry operates on a foundational assumption: the quality of AI output is a function of the quality of AI input, where "quality" means structure, specificity, and format.

Best-practice guidance is consistent. "Write clear, specific instructions." "Define the output format." "Use few-shot examples." "Apply chain-of-thought reasoning." "Avoid dumping unstructured data at an LLM" (LogRocket, 2025). The prompt engineering field has produced taxonomies of 58 distinct prompting techniques (Schulhoff et al., 2024) and a cottage industry of courses, certifications, and role definitions organized around the same claim: better-structured input produces better output.

The assumption feels obviously true. And the evidence is starting to contradict it.

---

## 2. The Counter-Evidence

### 2.1 Prompt Engineering's Diminishing Returns

The job title "prompt engineer" has effectively disappeared. As of mid-2025, 68% of firms provide prompt skills as standard training across all roles rather than hiring specialists (Fast Company, 2025). Microsoft's survey of 31,000 workers ranked Prompt Engineer second to last among new roles companies plan to add.

Research from Levy, Jacoby, and Goldberg (2024) found that LLM reasoning performance degrades around 3,000 tokens, well below technical maximums. The practical sweet spot for most tasks is 150-300 words. More structured detail doesn't help. It hurts.

Andrej Karpathy (founding member of OpenAI) publicly reframed the field in June 2025: the term "prompt engineering" trivializes the real work. The model is a CPU, the context window is RAM, the practitioner's job is to be the operating system. The value moved from crafting input to designing systems.

### 2.2 Systems Outperform Prompts

Andrew Ng's team demonstrated the point empirically. On the HumanEval coding benchmark, GPT-3.5 with a single optimized prompt achieved 48.1% accuracy. GPT-4 with a single optimized prompt reached 67%. GPT-3.5 wrapped in an agentic workflow (multiple steps, decomposed tasks, iterative evaluation) hit 95.1%. A weaker, cheaper model nearly doubled the advanced model's performance by changing how the system worked, not what the input said.

The implication is direct: optimizing the prompt has a ceiling. Designing the system around the prompt has a much higher one.

### 2.3 Voice Input Produces Richer Material

Research on speech-to-text interaction consistently shows that spoken input produces more detailed, higher-quality material than typed input. Speech recognition notes averaged 320.6 words versus 180.8 for typed notes, with higher ratings for clarity, completeness, and information density.

The mechanism is straightforward. Humans speak at 125-150 words per minute and type at 40. The friction of the keyboard compresses thought. By the time a typed prompt reaches the model, the human has already edited, compressed, and filtered the raw thinking. The unfiltered version, the one that contains false starts, mid-sentence corrections, and the moment where the idea actually crystallized, never makes it into the prompt.

Voice input bypasses that filter. The human thinks out loud. The full texture of the thinking reaches the system.

### 2.4 The RAG Industry's Unstructured Turn

The entire Retrieval-Augmented Generation industry is built on processing unstructured data. Enterprise RAG platforms in 2025-2026 have evolved from simple question-answering knowledge bases into general-purpose unstructured data processing engines: emails, chat logs, documents, audio, video, code. The infrastructure exists specifically to take messy, unformatted human material and make it usable for models (RAGFlow, 2025; Squirro, 2026).

Memory systems (storing, indexing, and retrieving conversation history) are now recognized as a specialized form of RAG for conversational data (RAGFlow, 2025). The industry is building, at massive scale, infrastructure to process exactly the kind of unstructured conversational corpus this paper describes.

---

## 3. The Pedagogical Parallel

A teacher does not require a student to organize their thoughts before speaking. The student speaks. The teacher listens, captures what was expressed, identifies the structure in it, and designs the next instructional step to fit. The accommodation runs from the teacher to the student's processing reality, not from the student to the teacher's preferred format.

This is foundational practice in special education. A student with processing delays who is required to pre-structure their thoughts before communicating will produce less, not more. The filtering suppresses the raw material the teacher needs: how the student actually thinks, where they get stuck, what language they reach for, where their understanding breaks down.

The parallel to AI interaction is direct. A practitioner required to pre-structure their input before communicating with a model will produce less raw material for the system to work with. The prompts are cleaner. They're also thinner. The false starts, contradictions, mid-sentence direction changes, and moments of sudden clarity that characterize real thinking never reach the model. The accommodation tools that could process that raw material into high-quality structured input never get to operate on it.

The structured-input assumption puts the burden on the human to make up for the model's processing limits. Input inversion reverses that: build tools that handle the translation, and let the human stay raw.

---

## 4. The Practice: Three Years of Evidence

### 4.1 The Corpus

Between 2023 and 2026, I accumulated three years of unstructured thinking across ChatGPT, Claude, and Gemini: brainstorming, arguing with myself, changing direction mid-sentence, working through problems at 2 AM, dictated voice notes while driving. No performance. No formatting. No pre-organization.

This corpus was not designed as a dataset. It accumulated naturally from thinking out loud with AI rather than assigning it tasks. The material includes unfinished thoughts, abandoned arguments, contradictions, and false starts alongside the moments where something actually clicked.

### 4.2 The Tools

Five accommodation tools process this corpus:

**Voice sampling** extracts how I actually talk from conversation transcripts. Published writing is performance. Conversation is the source register. The tool identifies sentence rhythm, vocabulary patterns, opening moves, qualifiers, and absent words, then encodes them as generation constraints.

The first time an idea appears in the corpus, it probably wasn't called by its final name. Keyword search can't find it. **Knowledge traversal** solves this by reading chronologically through conversation exports and carrying understanding forward. Sequential processing catches what indexing misses.

**Interview** mines the corpus for real stories and real language. The stories that matter for a professional site are rarely the ones you'd put on a resume. They surface in conversation at 2 AM, not in a structured intake.

Cognitive turning points need marking as they happen, or they disappear into the stream. **Savepoint Syntax** drops machine-readable tags inline during conversation: the moment something clicked, the moment understanding shifted. When the tools re-enter the corpus later, the savepoints tell them where the important moments were.

Finally, compound evaluation collapses when a model tries to assess multiple dimensions at once. **[LensArray](/systems/lensarray/)** separates them: independent dimensions, each assessed against its own criteria by a lens extracted from a real practitioner's body of work. One dimension per pass.

### 4.3 The Output

The production site petersalvato.com was compiled from this unstructured corpus. Every page was processed by the accommodation tools, evaluated by decomposed lenses, and verified against voice patterns extracted from conversation. A blind third-party assessment classified the output as direct human writing, not AI-assisted.

The quality came from the depth of the raw material, not from structuring the input. A structured prompt gives the tools one sanitized snapshot. The unstructured corpus gave them three years of how I actually think, including the parts I would have edited out.

---

## 5. The Principle: Input Inversion

Input inversion is a formal design principle: reverse the burden of structure from the human to the tooling.

The conventional model:

**Human** (structures thinking) → **Structured prompt** → **Model** → **Output**

The inverted model:

**Human** (thinks out loud) → **Raw input** → **Accommodation tools** (structure for model) → **Model** → **Output**

The difference is where the structuring happens. In the conventional model, the human does it before the input reaches any system. In the inverted model, purpose-built tools do it after the human has finished thinking. The human contributes raw material. The tools translate it into whatever structure the model needs.

The inverted model produces better results for three reasons:

**Richer source material.** Unfiltered thinking contains information that structured prompts discard: false starts that reveal what the person considered and rejected, contradictions that map the boundaries of their understanding, language patterns that reveal how they actually communicate rather than how they perform.

**Better tools for the job.** The accommodation tools are designed specifically for the translation between raw human thinking and model-ready input. They handle voice extraction, knowledge traversal, story mining, context marking, and decomposed evaluation. A human pre-structuring their prompt is doing ad hoc translation without specialized tooling.

**Preserved cognitive state.** The act of pre-structuring disrupts the thinking it's trying to capture. A practitioner who pauses to format their insight into a well-structured prompt has already lost the flow state that produced the insight. Voice dictation and raw conversational input preserve the cognitive state the thinking happened in.

---

## 6. The Bidirectional Accommodation

Input inversion is one half of a bidirectional accommodation pattern described in the [accommodation design framework](/practice/accommodation-design/) (Salvato, 2026).

The human's processing reality: ideas lose fidelity when forced into structure at the point of capture. The act of organizing, outlining, or formatting disrupts the thinking it's trying to capture. When the burden of structure is removed, the human can talk, dictate, answer questions. What comes out carries the maker's actual voice, actual thinking, actual structure.

The model's processing reality: context limits, attention degradation, instruction sensitivity. The accommodation is structured input: decomposed tasks, one objective at a time, individualized evaluation criteria, context markers at cognitive turning points.

In [FormWork](/systems/formwork/), the pour is the first accommodation, aimed at the human. Every other tool accommodates the model. Both are designed from the same question: what does this system actually need?

The classroom version of this: a student speaks freely, and the teacher takes what was expressed and builds the next instructional step around the student's processing profile. The burden of translation sits with the teacher, not the student. The student's job is to think. The teacher's job is to make that thinking usable.

The accommodation tools serve the same function. They sit between the raw human and the structured model, translating in both directions. The human doesn't need to think like a model. The model doesn't need to process like a human. Each system operates in its natural mode. The tools handle the interface.

---

## 7. Dictation as Pure Input

If unstructured input is more valuable than structured input, then dictation is the purest form of input inversion. The voice research documented in Section 2.3 explains why: speech bypasses the lossy compression that typing imposes on thinking. The human speaks at the speed of thought. False starts, corrections, tangents, and moments of clarity all reach the system intact.

But the advantage goes beyond volume. Dictation preserves cognitive state. A practitioner who pauses to type is editing in real time, filtering the raw thought through the effort of the keyboard. A practitioner who speaks is still inside the thinking when it reaches the system. The accommodation tools process thought that was caught in the moment, not a compressed summary put together after the fact.

The practical implication: practitioners who want richer AI output should talk to their tools instead of typing at them. Voice notes, dictated brainstorming, spoken observations. The tools can extract voice patterns, trace concept lineage, and mine for real stories from spoken input. They can't extract what the keyboard filtered out.

---

## 8. Accessibility and Entry Points

Input inversion does not require three years and thousands of sessions. The principle scales down:

**One month of voice notes.** Dictated observations on the commute, spoken reactions to the day's work, brainstormed solutions while walking. Enough for an initial voice sample and a body of raw thinking the tools can process.

**A few dozen conversations.** Open-ended sessions where the practitioner thinks out loud about their work. "Tell me about what you're building." The interview skill processes these into stories, language patterns, and concept maps.

**A single dictated session.** Even one conversation where someone speaks freely about their work produces richer material than a carefully structured brief. The rawness is what makes it work.

The barrier to entry is not technical infrastructure. It's the willingness to stop organizing input and start organizing tools. The industry has trained practitioners to perform for the model: clean prompts, specific instructions, defined formats. Input inversion asks you to stop performing and start thinking out loud.

---

## 9. Implications

**The structured-input assumption constrains the human.** Pre-structuring thoughts to compensate for model processing limitations is accommodation in the wrong direction. It constrains the human to fit the model instead of building tools that translate between them.

The evidence from agentic workflows (Ng, 2025), voice interaction research, and RAG infrastructure all point the same direction: system design produces larger quality gains than input optimization. Prompt engineering optimizes the wrong layer. Input inversion extends this principle to the human side of the interaction.

**The corpus is an asset class.** Three years of unstructured thinking is a dataset. The conversational history, the voice notes, the 2 AM brainstorming sessions contain information that no structured brief captures: how the person actually thinks, the language they reach for, the stories that matter to them, the moments where their understanding shifted.

What should the default interface be? Speech. The industry's investment in voice AI (projected $29.28 billion speech recognition market by 2026) implicitly acknowledges that speech is a richer input modality. Input inversion provides the framework for why: speech preserves cognitive state, produces more detailed material, and bypasses the lossy compression of typing.

If raw input is more valuable than structured input, the competitive advantage shifts to tool design. The practitioner who builds the best translation layer between raw human thinking and model-ready input produces the best output, regardless of how "good" their prompts are.

**The corpus compounds.** A structured prompt gets used once. You write it, the model processes it, the output arrives, the prompt is spent. An unstructured corpus works differently. The same conversations can be traversed from completely different angles, and each traversal produces a genuinely different compiled document.

Read three years of conversations looking for where accommodation thinking shows up in how I describe my design process, and you get one focused document. Read the same conversations looking for where print production instincts shaped my approach to digital systems, and you get another. The raw material is identical. The interpretive frame changed. The output is new.

Each compiled document goes back into the data source. The next traversal has access to the original conversations and every previously compiled document. A focused document on accommodation patterns and a focused document on structural thinking can be traversed together to surface connections that neither one contains alone. The corpus gets richer without the maker adding new input.

This is why unstructured input is not just richer at the point of capture. It is a better long-term investment. Structured prompts are consumable. You use them and they're done. An unstructured corpus is generative. The same material I recorded in 2023 is still producing new compiled documents in 2026, each traversal asking a question I hadn't thought to ask when I was talking. The knowledge traversal tool makes this practical: sequential processing through a large corpus, holding a specific conceptual angle, compiling a focused output that would take a human researcher weeks to produce manually. The LLM doesn't get tired of reading the same conversations again. It just reads them differently.

The competitive implication is direct. Two practitioners with the same tools and the same model, one who accumulated three years of unstructured thinking and one who wrote three years of structured prompts, are not in the same position. The first has a renewable source that yields new compiled documents on demand. The second has a folder of spent instructions.

---

## 10. Conclusion

The AI industry's foundational assumption, that quality output requires structured input, is being contradicted by its own evidence. Prompt engineering is declining as a standalone discipline. Agentic workflows outperform optimized single prompts. Voice input produces richer material than typing. The RAG industry is building infrastructure specifically to process unstructured data.

Input inversion formalizes what this evidence suggests: reverse the burden of structure from the human to the tooling. Let humans think out loud. Build tools that translate raw thinking into model-ready input. The output improves because the source material is richer, more detailed, and more honest than anything a structured prompt captures.

This principle was developed through three years of applied practice and is demonstrated by a production site compiled entirely from unstructured conversational data. It extends the [accommodation design framework](/practice/accommodation-design/) (Salvato, 2026) into a bidirectional pattern: structure for the model, freedom for the human.

The practitioner who builds the best translation layer between raw human thinking and model-ready input produces the best output. The prompts were never the bottleneck.

---

## Applied Tools

The following open-source tools implement input inversion:

- **[FormWork](/systems/formwork/)**: The accommodation design process. Coordination harness for all tools during a project.
- **[SavePoint Syntax](https://github.com/PeterSalvato/Savepoint.Protocol)**: Context preservation markup for cognitive turning points (v3.2)
- **[LensArray](/systems/lensarray/)**: Decomposed evaluation with practitioner-extracted lenses
- **[Skills Architecture](https://github.com/PeterSalvato/formwork)**: Accommodation tools including voice sampling, knowledge traversal, and interview

The production site [petersalvato.com](/) was compiled from unstructured conversational data using these tools.

---

## References

- Karpathy, A. (2025). Post on X regarding "prompt engineering" terminology and context engineering.
- Levy, M., Jacoby, A., & Goldberg, Y. (2024). "Same Task, More Tokens: The Impact of Input Length on the Reasoning Performance of Large Language Models." ACL.
- Ng, A. (2025). Agentic workflow benchmarks: HumanEval coding results with GPT-3.5 and GPT-4.
- Schulhoff, S. et al. (2024). "The Prompt Report: A Systematic Survey of Prompt Engineering Techniques." arXiv:2406.06608.
- LogRocket (2025). "Prompt Engineering Best Practices."
- RAGFlow (2025). "From RAG to Context: A 2025 Year-End Review of RAG."
- Squirro (2026). "RAG in 2026: Bridging Knowledge and Generative AI."
- Fast Company (2025). "The prompt engineer job title has all but disappeared."
- Salvato, P. (2026). "AI Governance as Accommodation Design." DOI: 10.5281/zenodo.18941231.
- Salvato, P. (2026). "A Different Kind of Harness: AI as Cognitive Prosthetic Through Mutual Accommodation." DOI: 10.5281/zenodo.18962893.
- Salvato, P. (2025–2026). Savepoint Syntax v3.2. [github.com/PeterSalvato/Savepoint.Protocol](https://github.com/PeterSalvato/Savepoint.Protocol)

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent twelve years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
