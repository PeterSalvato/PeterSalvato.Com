---
layout: post
title: "Processing Profiles"
description: "Your AI forgets the beginning of a long conversation for the same reason a student loses the third instruction in a compound prompt. A special education teacher already knows the fix."
seo_keywords: ["processing profile", "IEP", "accommodation design", "context window", "working memory", "token limits", "attention degradation", "special education AI", "CLAUDE.md", "why ChatGPT forgets context", "AI loses track of conversation", "long prompt problems", "how to structure AI prompts", "ChatGPT context window explained", "teaching methods for AI"]
published: true
order: 11
icon: edit_note
last_modified: 2026-03-11
related:
  - /practice/accommodation-design
  - /practice/prosthetic-cognition
---

Your AI forgets the beginning of a long conversation for the same reason a student loses the third instruction in a compound prompt. The system ran out of room.

In a special education classroom, the first thing you do with a new student is read the processing profile. Working memory capacity. Attention span. How they take in information. Where they lose the thread. You don't start teaching until you know how that student's brain works, because the instruction has to fit the student. I wrote dozens of these in a classroom in Sunset Park. Each one starts with the same move: assess the processing reality, then design the instruction to fit.

When I started working with language models in 2023, I recognized the pattern. The models have processing profiles too. Nobody was calling them that. The specs exist (context windows, token limits, attention mechanisms) but they're treated as product features. Numbers on a spec sheet. I think they're closer to cognitive constraints, and you can design around them the same way.

## The mapping

A context window is a working memory ceiling. The model can hold this much. After that, things start dropping. Earlier context gets less attention. Details from the beginning of a long prompt carry less weight by the end. Any teacher who's worked with processing delays recognizes this pattern. The first instruction is clear. The third one is fuzzy. The fifth one is gone.

You wouldn't give a student a 500-word instruction and expect them to hold all of it. You break it into pieces. Token limits work the same way. The model processes this many tokens with this level of quality. Beyond that, quality degrades. So you break it into pieces.

Run a lesson too long without a checkpoint and you watch attention degrade in real time. The model does the same thing over long inputs. Both need pacing, both need checkpoints, both need the complex task broken into pieces that fit their processing window. And primacy and recency effects show up in both: students and models give more weight to what they hear first and last. The middle gets compressed. Curriculum design accounts for this. Prompt design should too.

## The IEP for a language model

If you were writing an IEP for a large language model, it would look something like this:

**Processing profile:** High capacity for single-objective tasks. Degrades on compound instructions. Sensitive to ordering effects. No persistent memory between sessions. Attention diminishes over long contexts.

**Accommodations:** One objective per prompt. Independent evaluation dimensions. Context markers at cognitive turning points. [Scaffolding](/vocabulary/scaffold/) through coordinator patterns that don't create dependency.

**Success criteria:** Per-task, not global. Each skill measured against its own standard. The coordinator synthesizes, but the atomics each have their own definition of done.

**Progress monitoring:** Iterative evaluation loops. Each output assessed against the specific criteria for that specific task before the next task begins.

This is a CLAUDE.md file. The persistent system context that tells the model what it needs to know, how to approach tasks, what constitutes success. Every developer who writes one is writing an IEP. Most of them don't know it because they've never written a real one.

## Why teachers already know this

Every special education teacher reading this recognizes the framework. Processing profiles, task decomposition, [scaffolding](/vocabulary/scaffold/){:.vocab-ref}, individualized criteria, progress monitoring. This is the daily work.

The people who know how to ask "[what does this system actually need?](/essays/what-does-the-system-actually-need/)" are the ones who've been asking it about human learners for years. The skill set is already in classrooms. The framework is [accommodation design](/vocabulary/accommodation-design/), and the whitepaper documents the full architecture.
