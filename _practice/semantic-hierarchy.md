---
layout: project
practice_group: whitepaper
title: "Semantic Flattening and the Case for Human-Marked Importance in AI Memory"
subtitle: "Why Machine-Scored Memory Systems Erase What Matters Most"
icon: construction
status: "Published"
faculty: ["design", "engineering"]
seo_keywords: ["semantic flattening", "AI memory importance", "human-marked memory", "savepoint syntax", "cognitive turning points", "AI memory systems", "MemGPT", "semantic hierarchy", "accommodation design", "intent-relative importance", "AI conversation memory", "human in the loop memory"]
description: "A whitepaper arguing that semantic importance in AI memory is a relationship between content and intent, not a property of content alone. Presents Savepoint Syntax as human-marked semantic hierarchy and contrasts it with machine-determined approaches."
last_modified: 2026-03-12
permalink: /practice/semantic-hierarchy/
related:
  - /practice/accommodation-design
  - /systems/savepoint
  - /essays/the-iep-for-ai-systems
---

In early 2025, months of ideation for a novel were distributed across dozens of AI sessions. When the sessions closed, the continuity was severed. The thinking was preserved in conversation exports, but without any marking of which moments were turning points, the archive was flat. Keyword search could find topics. Nothing could find the moments where my understanding shifted.

[![DOI](https://zenodo.org/badge/DOI/10.5281/zenodo.18986290.svg)](https://doi.org/10.5281/zenodo.18986290)

**Source:** [github.com/PeterSalvato/semantic-hierarchy](https://github.com/PeterSalvato/semantic-hierarchy)

**Peter Salvato**
Design Engineer | [petersalvato.com](/)
March 2026

---

## Abstract

Current AI memory systems determine importance computationally: frequency scoring, recency weighting, surprise metrics, embedding similarity. This paper argues that semantic importance is not a property of content but a relationship between content and intent. Only the human participant can identify which moments in a conversation stream represent cognitive turning points. The paper presents Savepoint Syntax, a human-marked semantic hierarchy system developed over three years of applied practice, and contrasts it with machine-determined approaches (MemGPT, LUFY, Semantic Anchoring, Google Titans/MIRAS, MemOS). It introduces a bilateral accommodation model where the AI identifies the shape of potential turning points and the human's declared intent context gives them weight. A literature review of AI memory research (2024-2026) confirms that no existing system places human-marked importance at the center of its architecture. The paper situates this gap within the accommodation design framework (Salvato, 2026): the AI's memory disability (no durable memory, no continuity, no ability to distinguish weight) produces a specific harm (semantic flattening), which requires a specific accommodation (human-marked hierarchy supported by AI pattern recognition).

---

## 1. The Flattening Problem

Every AI conversation produces a stream of text. Some of that text is filler. Some of it is where the thinking turned.

The model cannot tell the difference. It processes every token with equal attention within its context window and retains nothing between sessions. A sentence where the practitioner changes their mind about the entire architecture of a project receives the same treatment as a sentence asking the model to fix a typo.

This is not a performance issue. It is a structural disability. The model has no durable memory, no continuity across sessions, and no mechanism for distinguishing a cognitive turning point from a passing comment. Everything enters at the same weight and leaves at the same weight. The sharp turns, the moments something clicked, the decisions that changed everything downstream: the model treats them identically to the sentences surrounding them.

The result is semantic flattening. Over time, across sessions, the human's thinking gets averaged. The corpus of conversation history becomes undifferentiated. A practitioner who has spent months building understanding through AI-mediated work finds that the accumulated record of that work has no hierarchy. The moments that mattered are buried in the moments that did not, and nothing in the system can tell them apart.

The human disappears from the record because nothing in the system can register what mattered to them.


## 2. How the Field Is Responding

The AI memory research community is working intensively on this problem. A December 2025 survey paper, "Memory in the Age of AI Agents" (arXiv:2512.13564), documents a rapidly expanding field. An ICLR 2026 workshop (MemAgents) is dedicated specifically to the memory layer. The problem is well recognized. The proposed solutions share a common architecture: the machine determines what mattered.


### 2.1 Automated Importance Scoring

**MemGPT** implements strategic forgetting through summarization and targeted deletion. The system decides what to retain, what to compress, and what to discard. Its most notable feature is treating forgetting as a design choice rather than a failure. The AI manages its own memory contents through "self-directed editing and retrieval." The human provides the conversation. The machine curates it without asking what mattered.

**LUFY** (Long-term Understanding and identiFYing key exchanges) evaluates six memory-related metrics derived from psychological models, using learned weights to determine which memories to prioritize. The metrics include recency, frequency, and social reasoning. The system aims to capture "the richness of human remembering and forgetting." All six metrics are computed from the text itself.

**Google Titans/MIRAS** introduces a neural long-term memory module that learns to prioritize storage using a "surprise metric." Unexpected information is more likely to be retained, mirroring human memory bias toward anomalous events. The assumption: if the model did not expect it, it must be important. The practitioner's assessment of importance never enters the calculation.

**Mnemosyne** prunes memory via hybrid scoring that combines connectivity, frequency of reinforcement, recency, and entropy. The system implements temporal decay analogous to human memory consolidation. Sophisticated engineering, and every parameter is derived from the content alone.


### 2.2 Structural Approaches

**Semantic Anchoring** (Chatterjee, 2025) is the closest existing work to the territory this paper addresses. It enriches vector-based memory storage with explicit linguistic cues: dependency parsing, discourse relation tagging, coreference resolution. The system creates structured memory entries that capture "finer linguistic structures" beyond embedding similarity. Experiments show improvements of up to 18% in factual recall and discourse coherence over standard RAG baselines.

The approach is sound. The limitation is architectural: the AI performs all the structural analysis. The system identifies which linguistic structures are important based on computational parsing. What the practitioner thought was a turning point, what they would have marked if asked, that signal is not part of the architecture.

**MemOS** (2025) treats memory as a system-level resource with semantic indexes, graph-based topologies, and a MemReader module that parses incoming prompts to extract "task intent, temporal scope, entity focus, memory type, and contextual anchors." The intent extraction is machine-performed. MemOS infers what the human wants rather than asking.

**Animesis** (2026) proposes a Constitutional Memory Architecture with a four-layer governance hierarchy. To the authors' knowledge, "no prior AI memory system architecture places governance before functionality." The governance is real, but it governs the AI's memory operations, not the question of what mattered to the person in the conversation.


### 2.3 Vendor Memory Features

The major AI providers have shipped memory features in 2025-2026. Anthropic's chat recall allows the model to reference prior conversations. ChatGPT's memory stores facts about the user across sessions. Google's context windows have expanded to process longer histories.

All of these solve the retrieval problem: can the model find what was said before. None solve the weight problem: can the model tell what mattered. The model can recall that a three-tier taxonomy was discussed in January. It cannot tell that the moment that taxonomy was abandoned was the turning point that restructured everything downstream.

Better recall with no sense of weight produces more flattened material faster. The practitioner gets back more of what was said but still has no way to distinguish the turning points from the filler.


## 3. The Missing Layer

Every system described above asks one question: how can the machine determine what was important?

There is a different question: who decides what mattered?


### 3.1 Importance Is Intent-Relative

The same sentence is a throwaway comment in one project and a governing decision in another. "We should use a three-tier structure" means nothing in isolation. In the context of a project that has been wrestling with taxonomy for weeks, it might be the decision that locks the architecture. In a casual brainstorming session, it might be a suggestion that gets discarded two minutes later.

No content-scoring model can tell the difference. A surprise metric scores novelty. A frequency metric scores repetition. An embedding similarity metric scores topical relevance. None of them score: this is where the practitioner changed their mind about how the project is organized.

That determination requires knowing what the practitioner was trying to do. Importance is not an intrinsic property of the content. It is a relationship between the content and the practitioner's intent.


### 3.2 Only the Human Knows When Their Thinking Turned

A reframe is only a reframe if there was a prior frame that just shifted. A drift detection is only meaningful if there was an intent to drift from. A decision is only load-bearing if the practitioner knows what it governs.

The model can recognize that the topic changed. It can detect that the language shifted from exploratory to declarative. It can identify that a new term was introduced. What it cannot determine is whether that change represents a cognitive turning point or a momentary tangent.

The practitioner knows because they are inside the thinking. They can feel when something clicks. They know when a decision governs everything downstream. They know the difference between "I am exploring an option" and "I just decided." That knowledge is not in the text. It is in the relationship between the text and the practitioner's evolving understanding.


### 3.3 The Accommodation Design Framing

In the accommodation design framework (Salvato, 2026), this is a specific disability producing a specific harm:

**The disability.** The model has no durable memory, no continuity across sessions, and no mechanism for distinguishing semantic weight. This is a processing limitation, the same way a student who cannot hold three instructions simultaneously has a processing limitation.

**The harm.** Semantic flattening. The practitioner's thinking becomes undifferentiated across the conversation archive. The turning points are buried. The human disappears inside the record of their own work.

**The accommodation.** Build infrastructure that compensates for the disability. The human marks what mattered. The system preserves those marks in a searchable, traceable format. The accommodation is bilateral: the AI helps identify candidates, the human provides the weight.

The accommodation response is to design infrastructure that compensates for the processing limitation, the same way a teacher designs instruction that compensates for a student's processing profile.


## 4. Savepoint Syntax

I built Savepoint Syntax in March 2025 after losing months of novel ideation to the flattening problem. The first version failed immediately. Three more versions before the structure held. The current version (v3.2) has been in continuous use for over a year across more than 60,000 documents of ideation history. v3.2 added a `context:` field after real traversal work revealed that savepoints got you to the right location but couldn't reconstruct what was decided without reading the surrounding conversation.


### 4.1 The Format

A savepoint is a self-closing tag dropped inline at the moment of a cognitive turning point:

```
<Savepoint
  protocol_version:3.1
  category:decision
  function:declaration
  timestamp:2026-03-12T04:32:47Z
  project:petersalvato.com
  keywords:taxonomy, structure, naming
  # The three-tier taxonomy is locked. Practice, Systems, Evidence.
/>
```

One line of content, forced precision. The content line captures the crystallized thought, not a summary of the session. The metadata (category, function, project, keywords) enables structured search across a large archive. The timestamp enables chronological tracing.

The format is machine-readable and human-writable. The practitioner drops the tag during conversation. The AI can parse the tags during knowledge traversal. The tags live in the conversation stream, which means they appear in session exports, chat history archives, and any downstream processing of the conversation corpus.


### 4.2 The Bilateral Accommodation

The system is not purely human-marked. It is a hybrid.

**The AI accommodates the human's limited bandwidth.** A codified skill with explicit trigger criteria trains the AI to recognize the shape of a turning point: reframes ("wait, it is actually..."), structural decisions (naming, hierarchy, what goes where), insights that connect previously unconnected things, energy shifts when something clicks, drift detection when work has deviated from intent. The AI watches for these patterns and drops savepoints proactively. The human does not have to remember to mark every important moment.

**The human accommodates the AI's inability to judge weight.** The AI can recognize the shape of a potential turning point. It cannot determine whether that potential turning point is actually load-bearing. That determination comes from the human's declared project context: the institutional memory files (CLAUDE.md), the project governance documents, the conversation history that establishes what the practitioner is trying to do. The human's intent context is what makes the trigger criteria meaningful.

This is bilateral accommodation. The AI compensates for the human's limited bandwidth by watching for turns. The human compensates for the AI's inability to judge semantic weight by being the source of intent. Neither one alone solves the flattening problem. The AI alone produces another content-scoring system. The human alone cannot mark every moment in a high-bandwidth thinking session. Together, they produce marked hierarchy.


### 4.3 Intent-Shaped Markers

The skill does not score content. It watches for moments that matter relative to what the human defined they are doing. It reads the project's institutional memory (the CLAUDE.md file that carries what has been decided, the current state of every workstream, what not to touch) and evaluates moments against the human's declared intent.

This is what makes savepoints accommodation rather than scoring. The system is designed around the human's purpose. A reframe is recognized as a reframe because the skill knows the project's current direction and can detect when the conversation departs from it. A drift detection is meaningful because the skill knows what the project's intent is and can identify when work has deviated.

Remove the intent context and the triggers become generic pattern matching. The intent context transforms them into purpose-relative importance markers.


### 4.4 The Downstream Loop

Savepoints accumulate in conversation exports across tools: Claude Code session transcripts, ChatGPT JSON exports, Claude.ai markdown, Gemini exports. A knowledge traversal skill reads chronologically through these exports, carrying understanding forward. When it encounters savepoints, it treats them as high-weight markers. The savepoints tell the traversal system where the thinking was, not just what was discussed.

The complete loop: the AI watches for turning points, marks them in structured syntax, the human's presence in the conversation stream confirms their weight, the markers persist in conversation exports, the knowledge traversal skill mines them later for grounded content, and the output traces back to real moments in real sessions.

The site petersalvato.com was compiled through this loop. Every page traces back to things said or decided in working sessions. The savepoints are the trail system through three years of ideation history. Without them, the continuity between a naming decision in January and a copy rewrite in March would be gone.


## 5. What the Versions Taught

Savepoint Syntax did not arrive as a finished protocol. It failed three times before the structure held. Each failure exposed a different dimension of the flattening problem.

**Version 1.0 (YAML frontmatter)** was too open-ended. The format encouraged journaling rather than precision. The content drifted from crystallized thoughts into session summaries. The protocol reproduced the exact flattening it was built to prevent: long-form entries with no hierarchy, indistinguishable from the conversation they were supposed to mark.

**Version 2.0 (triple-pipe attributes)** constrained the format but was too verbose. The overhead of dropping a savepoint interrupted the thinking it was supposed to preserve. If marking a turning point takes long enough to break the flow state, the practitioner stops marking.

**Version 3.0 (self-closing tag)** constrained the content to one line. Forced precision. The format was fast enough to drop without breaking flow and constrained enough to prevent drift. The crystallized thought had to fit in one sentence.

**Version 3.1** added project scoping when the archive exceeded 60,000 documents. Without project tags, searching the archive for savepoints relevant to a specific project returned results from every project. The addition was an accommodation of scale.

Each version failure was an accommodation failure. The format did not fit the practitioner's processing reality. Version 1.0 did not constrain enough (the practitioner drifts without structure). Version 2.0 constrained the wrong thing (the practitioner's flow state). Version 3.0 got the constraint right but did not scale. The design principle throughout: build the syntax for what the model needs to reconstruct context, not for what the human needs to remember. That distinction is where the accommodation happens.


## 6. Literature Gap

A systematic search of current AI memory research (2024-2026) across arXiv, ICLR, NeurIPS, ACL, and related venues, supplemented by the comprehensive survey "Memory in the Age of AI Agents" (December 2025), confirms that no existing system places human-marked semantic hierarchy at the center of its memory architecture.

The field has three established lanes:

1. **Machine-determined importance scoring.** MemGPT, LUFY, Titans/MIRAS, Mnemosyne. The machine scores content using computational metrics. The human provides content and nothing else.

2. **Structural analysis for memory enrichment.** Semantic Anchoring, MemOS, SGMem. The machine parses linguistic or graph structure to improve retrieval. The structural analysis is machine-performed.

3. **Governance architectures for AI memory.** Animesis, MemOS governance layers. The governance is machine-governed. The human is absent from the governance loop.

The gap: nobody is asking who decides what mattered. Every system assumes the machine decides. No system places the human's intent-relative assessment of importance at the center of its architecture. No system proposes that semantic weight is a relationship between content and intent rather than a property of content alone.

The closest work, Semantic Anchoring (Chatterjee, 2025), enriches memory with linguistic structure, but the enrichment is computational. The human's assessment of which moments were turning points never enters the system. The paper represents the state of the art in structural memory enrichment. What it does not address is semantic importance: what that moment meant to the person who was thinking through it, as opposed to what the text looks like structurally.


## 7. Implications

If semantic importance is a relationship between content and intent, several things follow.


**Memory systems need human-marked hierarchy.** Computational importance scoring can identify candidates. It cannot assign definitive weight. The practitioner must be in the loop, not as a reviewer of machine-scored results, but as the primary source of importance markers. The system should make marking easy (the AI watches for candidates) and the marks should be structured (searchable, traceable, machine-readable). But the human is the authority on what mattered.

**Intent context changes what importance means.** The same system will score the same content differently depending on the project context. This is not a bug. It is the correct behavior. A memory system that scores identically regardless of the practitioner's declared purpose is ignoring the most relevant signal.

**Vendor memory features are necessary but not sufficient.** Better recall solves the retrieval problem. It does not solve the weight problem. Chat history features that store everything with equal weight give the practitioner a larger flat archive. The value comes when the archive has hierarchy. Savepoint Syntax provides that hierarchy. It is the layer that vendor memory features are missing, and it is the layer only the human can provide.

**The accommodation is bilateral.** The AI compensates for the human's limited bandwidth. The human compensates for the AI's inability to judge weight. Systems that attempt to solve memory with machine-only approaches will always flatten, regardless of scoring sophistication. Systems that require the human to mark everything manually will fail because the human cannot track every important moment in a high-bandwidth session. The bilateral model (AI proposes, human's intent confirms) is the accommodation that fits both processing realities.

**The conversation stream is the archive.** Savepoints live in conversation history, not in a separate database. This means they persist in session exports, appear in knowledge traversal, and travel with the practitioner across tools. The archive is not a curated knowledge base. It is the full stream of thinking, marked at the points where the thinking turned. That stream, with its hierarchy intact, is the highest-value dataset a practitioner can accumulate.


## 8. Conclusion

The AI memory research community is building increasingly sophisticated systems for determining what matters in conversation history. Surprise metrics, frequency scoring, discourse analysis, embedding similarity. Each approach treats importance as a property of the content: something the machine can compute from the text alone.

This paper proposes a different framing. Semantic importance is not a property of content. It is a relationship between content and intent. The same sentence is filler in one context and a governing decision in another. The machine can score the text, but it has no access to what that text meant to the practitioner.

Savepoint Syntax provides the infrastructure for human-marked semantic hierarchy: structured tags dropped at cognitive turning points, supported by AI pattern recognition, shaped by the practitioner's declared intent. The system has been in continuous use for over a year across more than 60,000 documents of ideation history. It was built as accommodation for a specific disability (the model's inability to distinguish weight) producing a specific harm (the flattening of the practitioner's thinking across the conversation archive).

The field is building better recall. The missing piece is weight. Without a human source for that weight, and infrastructure designed to preserve it, the practitioner's presence in AI-mediated work erodes over time.

---

## References

Chatterjee, M. (2025). Semantic Anchoring in Agentic Memory: Leveraging Linguistic Structures for Persistent Conversational Context. arXiv:2508.12630.

Liu, S. et al. (2025). Memory in the Age of AI Agents: A Survey. arXiv:2512.13564.

MemOS. (2025). MemOS: A Memory OS for AI System. arXiv:2507.03724.

ICLR 2026 Workshop. MemAgents: Memory for LLM-Based Agentic Systems.

Salvato, P. (2026). AI Governance as Accommodation Design: A Pedagogical Framework for Human-AI System Architecture. petersalvato.com.

Salvato, P. (2026). Input Inversion: Why Unstructured Human Thinking Produces Better AI Output. petersalvato.com.

Salvato, P. (2026). A Different Kind of Harness: AI as Cognitive Prosthetic Through Mutual Accommodation. petersalvato.com.

---

## License

This work is licensed under [Creative Commons Attribution 4.0 International (CC BY 4.0)](https://creativecommons.org/licenses/by/4.0/).

You are free to share and adapt this material for any purpose, including commercially, with attribution.

---

*Peter Salvato is a design engineer based in Fort Lauderdale, FL. He studied Visual Communication at the School of Visual Arts, taught special education in Brooklyn, NY, and spent twelve years building the front end of an enterprise recruiting platform. His AI governance work applies twenty-five years of practice across construction, print production, pedagogy, enterprise software, and brand systems to the question of what AI systems actually need to produce quality output. His work is published at [petersalvato.com](/).*
