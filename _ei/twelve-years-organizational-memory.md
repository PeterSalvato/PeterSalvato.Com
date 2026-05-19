---
layout: post
title: "What Twelve Years Teaches About Organizational Memory"
date: 2026-03-19
published: true
description: "Thirteen years at Encore. The decisions encoded in structure survived. The decisions encoded in people's heads didn't. The case for externalizing reasoning alongside decisions."
seo_keywords: ["organizational memory", "institutional knowledge", "enterprise design", "Encore", "design systems", "Peter Salvato", "knowledge management", "governance", "design engineering"]
series: "engineering-intent"
seed_status: DEEP
last_modified: 2026-03-19
---

Around year four, new leadership came in. New priorities. Same product, same codebase, same customers. The incoming team asked a reasonable question: why is the recruiter dashboard laid out this way? The answer involved three years of user research, a compliance requirement that had since been relaxed, and a performance constraint from a database architecture that had been replaced eighteen months earlier. Nobody who was present for those decisions could explain all three factors. I could explain two. The third, I had to reconstruct by reading old Jira tickets.

The dashboard layout was correct. The reasons it was correct were mostly gone.

This is the organizational memory problem. Not whether the right decisions get made, but whether the reasoning behind those decisions survives long enough to be useful when someone asks why.

I spent thirteen years on Encore. Multiple engineering teams cycling through. Redesigns, re-architectures, pivots. The product kept working because the structural decisions (the component architecture, the SCSS variable system, the naming conventions) were encoded in a form that didn't require human memory to persist. A variable called `$spacing-unit-base` communicates its role every time someone reads it. The SCSS import order enforces precedence without anyone needing to remember why the order matters. These decisions survived because they were embedded in the material.

The decisions that didn't survive were the ones that required context. Why does this component have an unusual breakpoint at 1180px instead of 1200px? Because there was a specific client whose recruiters used a particular monitor resolution, and the account was worth enough to justify the accommodation. The client left three years later. The breakpoint stayed. Eventually someone changed it to 1200px because it "looked wrong," and nothing broke. But if that client had still been active, something would have broken, and nobody would have known why.

I watched this pattern repeat across thirteen years. The what survives. The why doesn't.

The obvious solution is documentation. Write it down. Record the reasoning. Maintain a decision log. I tried this. We tried wikis, decision records in the repo, architectural decision records (ADRs), comments in the code. Some of it helped. Most of it decayed. The wiki pages went stale within months because nobody's job was to maintain them. The code comments drifted out of sync with the code they described. The ADRs were thorough when written and never updated when circumstances changed.

Documentation fails when it's a separate artifact from the decision it describes. The moment the documentation lives in a different place than the implementation, they can diverge. And they will diverge, because updating documentation is work that doesn't ship features, and organizations optimize for shipping features.

What I learned is that the decisions that persist are the ones where the reasoning is inseparable from the implementation. A well-named variable is its own documentation. A mixin that encodes a rule (not just a pattern) carries its reasoning in its structure. An import order that enforces a governance hierarchy is self-documenting because the hierarchy IS the file organization.

This is why I eventually built reasoning into the structure of everything I ship.

[FormWork](/systems/formwork/) doesn't just coordinate tools. It encodes why the tools exist and in what order they run. The voice protocol doesn't just list prohibited patterns. It explains what each prohibition protects against. The CLAUDE.md files that govern my AI sessions don't just set rules. They carry the context behind the rules, so a new session (which has no memory of previous sessions) can understand not just what to do but why.

That's the transfer from thirteen years at Encore. The case for externalizing reasoning alongside decisions.

Most systems externalize the decision: here's the color value, here's the spacing unit, here's the component API. The reasoning stays internal: someone knows why the value is what it is, or it's written in a document that nobody reads, or it's lost entirely. When the reasoning is lost, the decision becomes a fossil. It's there, it works (probably), but nobody knows whether it's still correct for current conditions. Changing it feels risky because no one can assess the consequences. Keeping it feels wasteful because no one can confirm it's still necessary.

After thirteen years, a product accumulates thousands of these fossils. Each one is a small tax on every team that inherits the codebase. Not because the decisions are wrong, but because the cost of understanding them is higher than the cost of routing around them. So teams route around. They build new patterns alongside old ones. They duplicate instead of extending. The codebase gets larger and less coherent, not because anyone is doing bad work, but because the organizational memory that would have prevented the duplication was never externalized.

I think the most valuable thing I carried out of Encore wasn't any specific technical skill. It was the conviction that reasoning is a first-class deliverable. If I make a decision and the reasoning doesn't survive in the same form as the implementation, the decision is already dying. It just doesn't know it yet.

Every system I build now carries its reasoning with it. The variable names explain their roles. The skill files explain their purpose. The coordination layers explain their sequence. When the next version of me (or the next collaborator, or the next AI session) encounters the system, they can understand not just what it does but why it does it that way, and that understanding is what makes the system changeable instead of frozen.

Twelve years taught me that the work survives, but the thinking behind the work evaporates unless you encode the reasoning into the same structure that carries the decisions.
