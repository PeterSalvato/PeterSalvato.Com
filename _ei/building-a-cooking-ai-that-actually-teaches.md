---
layout: post
title: "Building a Cooking AI That Actually Teaches"
date: 2026-03-30
published: true
description: "A recipe tells you what to do. A teacher tells you why. The AI agent I built does the second thing."
seo_keywords: ['cooking', 'AI', 'teaching', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 80
depth: making
domain: AI implementation + Education
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

Most cooking apps give you recipes. A recipe is a set of instructions. Do this, then this, then this. The output is a dish. If you follow the instructions correctly, you get the intended result. If you don't understand why a step exists, you can't adapt when something goes wrong.

I built a cooking mentor agent. It runs on my home server. FAISS vector database, PostgreSQL backend, a knowledge base of processed culinary information. The agent doesn't give you recipes. It teaches you to cook.

The difference is structural. A recipe is a procedure. It works for one dish in one context. A teaching interaction builds understanding that transfers. Why does this technique work? What would happen if you changed this variable? How does this ingredient behave under heat? Those questions produce knowledge that applies to the next dish you make, not just this one.

[VERIFY: Peter should confirm specific details of the cooking mentor's knowledge base, what sources were processed, and any specific interactions worth sharing.]

This is the same distinction I make between scaffolding and the finished product. A recipe is the finished product. You follow it and you get dinner. A teaching interaction is scaffolding. It supports you while you build understanding. The scaffolding comes off when you can cook without it.

The IEP parallel is direct. A worksheet tells a student what to do. Step 1, step 2, step 3. The student completes the worksheet and has a finished assignment. A teaching interaction builds the understanding underneath. Why does this math operation work? What would change if the numbers were different? When would you use this in a context that isn't a worksheet?

The agent architecture reflects this. It doesn't retrieve recipes from a database and hand them to you. It processes your question, identifies the underlying concept, and teaches the concept with the specific dish as the example. The dish is a vehicle for the concept, and the concept is what transfers to the next meal.

The hardest part was the knowledge base. Culinary knowledge is messy. Techniques overlap. Terminology varies by tradition. What one cuisine calls braising, another calls a variation of stewing. The processing step was its own decomposition problem. Break the knowledge into atomic concepts. Tag them by technique, ingredient, cuisine, principle. Build the relationships between them so the agent can traverse from a specific question to the broader concept and back.

I built this because I struggle to feed myself consistently. The systems I use in the kitchen are the same systems I use in every other domain. Defaults that remove daily decisions. Decomposed processes that break complex tasks into steps. Scaffolding that supports the gap between where I am and where I need to be. The cooking agent is one more accommodation in a household that runs on structure.
