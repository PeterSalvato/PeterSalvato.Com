---
layout: post
title: "Prompt Architecture Is Information Architecture"
date: 2026-03-09
published: true
description: "AI governance through a design lens."
seo_keywords: ['ai', 'decomposition', 'governance', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 131
depth: making
domain: AI/governance
function: SEO+Payload
seed_status: DEEP
last_modified: 2026-03-14
---

At Sterling Publishing, I laid out catalogs. Hundreds of pages of titles, prices, category breaks. Given this density and this limited attention, where does the eye go first? The answer was always structural: hierarchy, grouping, sequencing. The grid was the navigation system. Get the hierarchy wrong and the reader gives up.

A prompt is a catalog page. Given this instruction and this model's limited attention, what gets processed first? What gets lost? Where does the model's focus drift as the input gets longer? The answer is structural: hierarchy, grouping, sequencing. The prompt is the navigation system. Get the hierarchy wrong and the output degrades.

---

Information architecture organizes content so the person receiving it can find what they need, process it in the right order, and act on it without confusion. That's what a well-structured prompt does for a language model. The model is a system with processing constraints (context windows, attention degradation, sensitivity to ordering) that you design around.

Most prompt engineering treats the model like a conversation partner who needs better instructions. That's the wrong frame. The model is a processing system with a specific capacity profile, the same way a catalog reader is a person with limited attention and a specific scanning pattern. You don't make the catalog work by writing better product descriptions. You make it work by organizing the information so the reader's eye moves through it efficiently.

The same principles apply. Group related information together. Put the most important context first (primacy effects are real in both humans and models). Separate evaluation criteria into independent dimensions instead of packing them into one compound instruction. Break compound tasks into atomic steps, each with its own clear objective and its own visible output before the next step begins.

---

This is where the CLAUDE.md file becomes information architecture in practice. The file doesn't just store settings. It organizes the institutional memory of the project so the model can process it efficiently. Voice rules up front because they constrain everything that follows. Technical stack details where they're needed. Published pages listed so the model knows what exists. Positioning intent so the model knows what the project is trying to say.

The structure of the CLAUDE.md is an IA decision. What goes first matters because the model gives it more weight. What gets grouped together matters because context bleeds between adjacent elements. What gets separated matters because independent concerns contaminate each other when they're packed into the same section.

I didn't learn this from prompt engineering guides. I learned it from catalog layout at Sterling, from information architecture on the [Encore](/infrastructure/encore/) platform, from years of structuring content for human processors. The model is a different processor with different constraints, but the discipline carries over.

---

The [Formwork Protocol](/governance/formwork-protocol/) takes this further. Each evaluation lens runs as an independent prompt with its own criteria, its own instructions, its own output format. The lenses don't know about each other because compound evaluation instructions contaminate each other in the same way compound catalog sections confuse the reader. One lens per prompt. One dimension per evaluation. The coordinator collects the results afterward.

That's information architecture applied to AI governance: organizing the work so the system receiving it can process each piece cleanly. The tools changed, but the discipline I learned laying out catalogs at Sterling is the same discipline I use structuring prompts now.
