---
layout: post
title: "Classroom to AI"
date: 2026-03-30
published: true
description: "Twelve students, twelve IEPs, every subject. The same structural problems showed up in AI three years later."
seo_keywords: ['classroom', 'AI', 'IEP', 'transfer', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 60
depth: reading
domain: Education + AI implementation
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

I taught a self-contained 4/5 bridge class in Sunset Park, Brooklyn. Twelve students. Twelve IEPs. Every subject. Self-contained means the students don't go to other classrooms. I was the whole school for those kids. Math, reading, writing, science, social studies, all in one room with one teacher.

Every student processed information differently. One kid needed instructions broken into single steps. Another needed visual scaffolding for every writing assignment. Another needed movement breaks every twenty minutes or the whole afternoon fell apart. The accommodations weren't interchangeable. What worked for one student made things harder for another.

Three things I figured out in that room:

First, you have to decompose the task before the student sees it. A compound instruction ("take out your notebook, turn to page 42, and answer questions 3 through 7") is one task for a neurotypical student and three tasks for a student with processing delays. If I didn't break it apart, the student failed before they started. The failure wasn't about ability. It was about input format.

Second, the scaffolding has to match the gap. Too much support and the student never builds independence. Too little and they can't access the material. The IEP is supposed to tell you where the gap is. In practice, I was recalibrating constantly. The document said one thing. The kid in front of me needed something different today.

Third, evaluation has to be decomposed too. "Is this student doing well?" is not one question. It's twelve questions depending on what you're measuring. Reading comprehension, writing mechanics, mathematical reasoning, social regulation, attention, processing speed. Each one needs its own measure. Blending them into a single grade hides everything useful.

When I started working with AI tools three years later, the same problems showed up.

The input format problem: an AI tool that receives a compound prompt ("evaluate this for voice quality, structural integrity, narrative coherence, and brand alignment") processes the first criterion with full attention and the rest gets progressively less. The model's context window is a working memory ceiling. Same problem as the student with processing delays. Same fix. Decompose the task. One criterion per pass.

The scaffolding problem: a CLAUDE.md that's too prescriptive makes the tool rigid. A CLAUDE.md that's too sparse lets it drift. The accommodation has to match the gap between what the tool can do on its own and what you need it to do.

The evaluation problem: "is this output good?" is not one question. LensArray exists because I needed to decompose evaluation into independent dimensions. Each lens measures one thing. They don't see each other's results. Where they agree, you have signal. Where they disagree, you have a decision to make. Same structure as a multidisciplinary evaluation team looking at a student from different angles.

I didn't design these parallels. I discovered them after the fact. The classroom forced me to figure out decomposition, scaffolding, and independent evaluation because twelve kids with twelve different needs demanded it. AI tools forced me to figure out the same things for the same reasons. Different system, same structural problem at the center of it.
