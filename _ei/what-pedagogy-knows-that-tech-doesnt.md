---
layout: post
title: "What Pedagogy Knows That Tech Doesn't"
date: 2026-03-09
published: true
description: "The education sector as a design resource. Scaffolding, accommodation, and attunement predate every AI framework by decades."
seo_keywords: ['education', 'scaffolding', 'attunement', 'accommodation', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 122
depth: machine
domain: Education
function: Payload
last_modified: 2026-03-14
---
Special education figured out the accommodation problem decades before tech started talking about "human-centered AI." The IEP (Individualized Education Program) is a living document that reads the student, identifies processing realities, and structures the environment so the student can succeed at the task. Not a deficit model. A design model. The system adjusts to serve how the person actually learns.

I wrote IEPs for five years in a self-contained special education classroom. A student with processing delays can't receive a compound instruction as one task. That's a processing reality, not a deficit. You accommodate it: decompose the task into discrete steps, scaffold the structure so each step has a clear entry point, individualize the criteria so success is measured against where that student actually is.

When I started building AI systems, I asked the same question I asked in the classroom: what does this system actually need to succeed at this task? Token limits are a processing profile. Context windows are a working memory ceiling. Prompt architecture is an IEP. The Savepoint Protocol came from asking what the model needs to find its way back in. The Formwork Protocol came from asking what the model needs to evaluate one dimension without contaminating another. The skill architecture (coordinator dispatches atomics, each atomic does one job) came from asking what happens when you give a system twelve goals at once versus one at a time.

Pedagogy has names for all of this. Scaffolding: temporary support structures built toward independence. The scaffold holds while competence develops, then you remove it. Zone of proximal development: the space between what a learner can do alone and what they can do with support. That's where the teaching happens. Differentiated instruction: the same objective, different paths to reach it, because the class has twelve different processing profiles.

Tech talks about these concepts as if they're discoveries. "Prompt chaining" is decomposition. "Retrieval-augmented generation" is scaffolding. "Few-shot prompting" is modeling. "Human-in-the-loop" is the teacher checking the student's work. The vocabulary is different. The operation is identical.

The advantage pedagogy has over most AI governance thinking is that pedagogy starts from the receiver. What does the student need? What are their processing realities? How do they demonstrate understanding? The answer shapes the design. Tech tends to start from the tool. What can the model do? What are its capabilities? How do we unlock more performance? The answer shapes the product. One approach builds outward from the person. The other builds outward from the system.

I think the gap between those two approaches is the same gap I see in enterprise platforms, brand systems, and household infrastructure. The coherence problem is always the same: someone built a system without reading what the system was receiving. In a classroom, that produces a student who fails because the instruction didn't match their processing. In AI, that produces a tool that generates slop because nobody asked what the output needed to be.
