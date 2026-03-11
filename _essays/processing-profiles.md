---
layout: post
title: "Processing Profiles"
description: "Your AI forgets the beginning of a long conversation for the same reason a student loses the third instruction in a compound prompt. A special education teacher already knows the fix."
seo_keywords: ["processing profile", "IEP", "accommodation design", "context window", "working memory", "token limits", "attention degradation", "special education AI", "CLAUDE.md", "why ChatGPT forgets context", "AI loses track of conversation", "long prompt problems", "how to structure AI prompts", "ChatGPT context window explained", "teaching methods for AI"]
published: true
order: 11
last_modified: 2026-03-11
---

The first thing you do when you get a new student's IEP is read the processing profile. Working memory capacity. Attention span. How they take in information. Where they lose the thread. You don't start teaching until you know how that student's brain works, because the instruction has to fit the student.

I wrote dozens of these in a classroom in Sunset Park. Each one starts with the same move: assess the processing reality, then design the instruction to fit.

When I started working with language models in 2023, I noticed something. The models have processing profiles too. Nobody was documenting them as processing profiles. The specs exist (context windows, token limits, attention mechanisms) but they're treated as product features. Engineering constraints. Numbers on a spec sheet.

They're cognitive constraints you design around.

## The mapping

A context window is a working memory ceiling. The model can hold this much. After that, things start dropping. Earlier context gets less attention. Details from the beginning of a long prompt carry less weight by the end. Any teacher who's worked with processing delays recognizes this pattern. The first instruction is clear. The third one is fuzzy. The fifth one is gone.

You wouldn't give a student a 500-word instruction and expect them to hold all of it. You break it into pieces. Token limits are the same constraint. The model processes this many tokens with this level of quality. Beyond that, quality degrades. Same reasoning, same accommodation.

Run a lesson too long without a checkpoint and you watch attention degrade in real time. The model does the same thing over long inputs. Both need pacing. Both need checkpoints. Both need the complex task broken into pieces that fit their processing window. Primacy and recency effects work the same way: students and models give more weight to what they hear first and last. The middle gets compressed. Curriculum design accounts for this. Prompt design should too.

## The IEP for a language model

If you were writing an IEP for a large language model, it would look something like this:

**Processing profile:** High capacity for single-objective tasks. Degrades on compound instructions. Sensitive to ordering effects. No persistent memory between sessions. Attention diminishes over long contexts.

**Accommodations:** One objective per prompt. Independent evaluation dimensions. Context markers at cognitive turning points. Scaffolding through coordinator patterns that don't create dependency.

**Success criteria:** Per-task, not global. Each skill measured against its own standard. The coordinator synthesizes, but the atomics each have their own definition of done.

**Progress monitoring:** Iterative evaluation loops. Each output assessed against the specific criteria for that specific task before the next task begins.

This is a CLAUDE.md file. The persistent system context that tells the model what it needs to know, how to approach tasks, what constitutes success. Every developer who writes one is writing an IEP. Most of them don't know it because they've never written a real one.

## Why teachers already know this

Every special education teacher reading this recognizes the framework. Processing profiles, task decomposition, scaffolding, individualized criteria, progress monitoring. This is the daily work. This is what the classroom requires.

The AI governance field is populated by computer scientists and policy professionals. Computer scientists approach the model as a system to optimize. Policy professionals approach it as a risk to manage. Neither discipline trains practitioners in accommodation.

The people who know how to ask "[what does this system actually need?](/essays/what-does-the-system-actually-need/)" are the people who've been asking it about human learners for their entire careers. The skill set the field needs is already in classrooms. I'm calling the framework [accommodation design](/governance/accommodation-design/). The whitepaper documents the full architecture.
