---
layout: post
title: "Fidelity Across Twelve Years"
date: 2026-03-19
published: true
description: "Encore went through three ownership changes in twelve years. The technology held. The intent didn't always survive the handoff."
seo_keywords: ["enterprise fidelity", "platform longevity", "design system durability", "ownership changes", "Peter Salvato", "design engineering", "Encore platform", "institutional memory", "what survives handoff", "long-term software maintenance"]
series: "engineering-intent"
zone: 1
sequence: 38
depth: room
domain: "Enterprise"
function: "SEO+Payload"
seed_status: DEEP
last_modified: 2026-03-19
---

I got to Encore in 2013 through a friend from the songwriter community in Park Slope. They heard "web guy" and figured I'd be useful. What I found was a Windows Forms application. Desktop-only, OS-dependent. The software underneath was solid, built by the founder who'd started it in his dorm room a decade earlier. The delivery layer was the constraint. I made the case for the browser. They said yes.

That was twelve years ago. Three ownership changes ago. I'm still there.

The question I keep coming back to, the one that matters more than any technology decision I made in those twelve years, is what survives the handoff. A founder sells, or a partner changes, or leadership restructures, and the thing you built is suddenly being stewarded by people who weren't in the room when the decisions were made. The codebase survives. The infrastructure survives. The reasoning behind both of them starts to evaporate the moment the person holding it walks out.

The first ownership change was the clearest example. The platform had been running on decisions that lived in one person's head. The founder knew why every module was shaped the way it was, why certain features existed for certain clients, why the information architecture made the choices it made. None of that was written down in a form that could survive without him explaining it. When the structure shifted, the institutional knowledge didn't transfer cleanly. It couldn't. It was stored in conversations, in history, in the accumulated context of having been there.

I watched the same components start rendering differently on different pages. Headlines that had been consistent across the platform drifted into three variations. Color values shifted: off-blacks instead of blacks, blues that were close but not the same. Spacing and alignment moved by small increments, each one a reasonable decision made by someone who didn't have access to the original intent. The product started to feel like several related products instead of one.

This is [drift](/vocabulary/drift/). And the thing that made it hard to fight was that none of it was wrong in isolation. Every individual decision was defensible. An engineer needed a button styled slightly differently for a new context, so they duplicated the component and adjusted it. Reasonable. Another engineer needed a color that was close to the brand blue but worked better on a dark background, so they hardcoded it. Reasonable. Twelve years of reasonable decisions by hundreds of contributors, and the product no longer reflected any single intent.

What held was the structural layer. The modular JS framework I'd built from scratch. The SCSS design system with its governed variables. The naming conventions that made the codebase navigable. These were encoded in the code itself, not in a document someone had to remember to read. If a color value wasn't in the variables file, it stood out. If a component wasn't built from the existing patterns, the code made that visible. The constraints were embedded at the point of development.

What didn't hold was the intent behind the constraints. Why this color and not that one. Why the information architecture grouped these features together. Why certain client-specific modules existed at all. The structural layer kept the product from falling apart, but it couldn't explain its own reasoning. You could see that the system had opinions. You couldn't always see why.

I think the distinction between what held and what didn't is the most useful thing twelve years taught me. Structure survives handoffs. Reasoning doesn't, unless you encode it somewhere durable. And "durable" means in the codebase, in the architecture, in the constraints themselves. Documentation helps, but documentation requires maintenance, and maintenance requires someone who knows what the documentation is supposed to say. The governance that lasted was the governance that was structural: you couldn't build the wrong thing without the code telling you something was off.

After the second ownership change, I started encoding more of the reasoning directly into the system. Comments in the SCSS that explained not just what a variable was but why it existed. Component patterns that made the intended use obvious from the structure. Variable names that carried meaning. I was trying to make the codebase explain itself to someone who had never met me.

I don't know if it worked completely. I'm still there, which means the real test, someone maintaining the system with zero access to the original architect, hasn't happened yet. But I've watched new engineers come in and build things that held fidelity to the original system because the system itself guided them there. The constraints did the work. The intent was legible from the structure.

Twelve years on one platform is unusual in this industry. Most people move on in two or three. The thing that kept me was the problem itself: how do you make something hold its shape across time, across people, across changes in ownership and direction and priority? That's a governance problem, and governance problems don't get solved by building something once. They get solved by maintaining something continuously, catching the drift before it compounds, and making sure the structure carries enough of the intent that the next person can pick it up and keep going.

The technology changed several times, but the intent behind it stayed the same. The question was always: does the thing someone encounters still match the thing someone intended? When it does, that's [fidelity](/vocabulary/fidelity/). When it doesn't, you trace back to find where the gap opened, and you close it. After twelve years, the practice shifted. I spend more time maintaining what exists than building anything new.
