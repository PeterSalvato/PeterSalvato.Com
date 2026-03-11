---
layout: post
title: "What Does the System Actually Need?"
description: "I gave a language model four evaluation criteria in one prompt. The output degraded the same way a compound instruction degrades in a classroom. The fix was the same fix. I'm calling the framework accommodation design."
seo_keywords: ["accommodation design", "AI governance", "special education", "IEP", "task decomposition", "processing profile", "prompt architecture", "constraint vs accommodation", "why AI output degrades", "better AI results", "AI prompt not working", "how to improve ChatGPT output", "AI for educators", "compound prompt problem"]
published: true
order: 10
last_modified: 2026-03-11
---

In 2023 I gave a language model a prompt: evaluate this portfolio for voice quality, structural integrity, narrative coherence, and brand alignment. Four dimensions, one prompt.

The model processed the first criterion with full attention. Each subsequent criterion got less. By the fourth, the output was a blended average. Criteria contaminated each other. Contradictions showed up within a single evaluation pass. The model couldn't hold four evaluation frames simultaneously, so it collapsed them into one.

I recognized what was happening because I'd seen it every day for a year in a classroom in Sunset Park, Brooklyn. A self-contained fourth and fifth grade bridge class. Twelve students, twelve IEPs, twelve processing profiles. When a student hears three instructions and only processes the first one, that's a processing reality you design around.

The fix in the classroom: one instruction at a time. One clear objective. One visible result before the next step.

The fix for the model: one evaluation dimension per prompt. One clear criterion. One output before the next dimension runs.

Same structural accommodation, different system.

## The framework

I call this accommodation design. The central question: what is the processing reality of the system receiving this task?

For a student: working memory capacity, attention profile, sensory processing, prior knowledge. The IEP documents this and prescribes accommodations.

For a large language model: context window limits, attention degradation over long inputs, sensitivity to instruction ordering, tendency to blend concurrent criteria, loss of coherence across extended sessions.

The AI governance field is organized around constraining model behavior. Safety guardrails, compliance frameworks, output filtering. When output degrades, the response is more constraint: longer prompts, tighter formatting, more rules. The prompts grow. The output keeps degrading.

Accommodation takes the opposite approach. Instead of fighting the model's limitations, you design the task to work within them. Decompose compound instructions. Evaluate one dimension at a time. Build temporary scaffolding that carries the structure without creating dependency. Monitor progress against specific, individualized goals.

These are the same architectural patterns that federal law (IDEA, the Individuals with Disabilities Education Act) requires for students with disabilities. I didn't invent them. I learned them in a classroom and recognized them when the same processing failures showed up in a different system.

## What the term means

Accommodation design is a structural claim: AI systems have specific processing realities that can be accommodated, and the quality of the output depends on how well the task design meets those processing needs.

The distinction matters. Prompt engineering treats the model as a system that needs better instructions. Accommodation design treats the model as a system with a [processing profile](/essays/processing-profiles/) that the task needs to fit. One puts the burden on the instructions. The other puts it on the task architecture.

The full framework is documented in the whitepaper [AI Governance as Accommodation Design](/governance/accommodation-design/), with six tools built over three years of applied architecture. The [IEP essay](/essays/the-iep-for-ai-systems/) goes deep on the classroom origin: decomposition, scaffolding, individualized criteria. This essay names the framework and the question that drives it.

The question is simple. What does this system actually need to do this job well? The AI governance field is full of people answering a different question: how do I make it do what I want? Those two questions produce completely different architecture.
