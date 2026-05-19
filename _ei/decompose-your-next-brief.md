---
layout: post
title: "Decompose Your Next Brief"
date: 2026-03-09
published: true
description: "Father's method applied to any project."
seo_keywords: ['enterprise', 'decomposition', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 77
depth: making
domain: Practicum
function: SEO
seed_status: DEEP
last_modified: 2026-03-14
---
Every brief is a compound instruction. Most people try to solve it as one thing. That's where the trouble starts.

My father coordinated fifty trades on construction sites. Steel, concrete, electrical, plumbing, HVAC, drywall, fire suppression. His job was holding the whole picture. But his method was decomposition: break the whole into its trades, schedule each trade's dependencies, coordinate the joints where they meet. He never tried to build the building all at once. He built it one trade at a time, in the right order.

I do the same thing with a brief.

A brand project arrives as a single document. "We need a new identity that positions us in the premium market, resonates with women 25-45, works across digital and print, includes packaging, and needs to be ready in eight weeks." That's five different problems compressed into one sentence.

The first move is to pull them apart. What is the positioning problem? What is the audience problem? What is the cross-medium problem? What is the packaging problem? What is the timeline problem? Each one has its own constraints, its own dependencies, its own sequence. Solve the positioning before the audience, because positioning governs who the audience actually is. Solve the cross-medium problem before packaging, because the system that works across digital and print constrains what the packaging can do.

This is what I did with [Encore](/evidence/encore/) for thirteen years. The platform migration started as one problem: move a Windows Forms application to the browser. But that decomposes into migration strategy (Strangler Fig pattern), front-end architecture (modular JS framework, SCSS design system), information architecture (complex recruiting workflows), and governance (keeping everything aligned over years of feature additions). Each layer had to be addressed in sequence. Migration strategy first, because it governed how the front end would be built. Front-end architecture second, because it governed how the IA would be organized. Governance last, because it could only be designed after the system existed.

The classroom taught me this before enterprise did. "Solve for the missing number, show your work, and explain your reasoning" is three tasks disguised as one instruction. A student with processing challenges can't hold all three. You decompose: first find the number. Then show how you found it. Then explain why that method works. Three separate tasks, each one completable before the next begins.

If you're looking at a brief and feeling overwhelmed, the brief is probably compound. Here's the move:

List every distinct problem hidden inside it. Just list them. Don't solve anything. Then put them in order: which one has to be answered before the others can proceed? That's your first task. Complete it. Then look at the list again. The dependencies will have shifted now that the first answer exists. The next task reveals itself.

This sounds simple. It is simple. The hard part is resisting the urge to solve everything simultaneously. Compound problems feel urgent because they're big. But urgency and sequence are different things. The most urgent piece might depend on a quiet foundational piece that nobody's even identified yet.

My father never rushed the steel because the client wanted the drywall. The steel goes first because the drywall depends on it. Every time someone tried to skip the sequence, the joints failed.

Decompose the brief. Work the sequence. Let the dependencies tell you what to do next.
