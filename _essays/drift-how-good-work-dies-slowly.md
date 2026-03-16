---
layout: post
title: "Drift: How Good Work Dies Slowly"
date: 2026-03-09
published: true
description: "A four-pixel padding difference between two screens. Nobody files a ticket for four pixels. That's how good work dies."
seo_keywords: ['enterprise', 'drift', 'Peter Salvato', 'design engineering', 'why does software quality decline over time', 'design system degradation', 'preventing UX drift', 'how good products get worse', 'technical debt design systems', 'quality erosion enterprise software', 'design consistency across teams']
series: "engineering-intent"
chapter: 64
order: 16
icon: edit_note
---

There was a button on the Encore recruiter dashboard that had 16 pixels of left padding on one screen and 12 on another. Same button. Same label. Same function. Just built by two different engineers, probably two years apart, each one making a reasonable call with the information they had.

That button was fine. In isolation it was nothing. Nobody files a ticket for four pixels.

But multiply that by twelve years of active development. Hundreds of engineers touching the same product. Thousands of small decisions about spacing, alignment, type size, color values, border radius, hover states. Each one close enough. None of them quite right. After a decade the product starts to look like the Bronx in the eighties with broken windows. Everything is a little bit off. The alignment is off everywhere, so you can't even see the baseline anymore.

This is drift. And drift is not the same thing as technical debt.

Technical debt is a known shortcut. You take it on purpose. You ship the quick version, you log the cost, you plan to pay it back. It sits on a backlog. Someone owns it. Drift doesn't work that way. Nobody logs drift because nobody sees it happening. Each individual decision looks fine. The cumulative effect is invisible until it's catastrophic.

I spent twelve years on Encore. I watched it happen in real time, and I still couldn't point to the moment it started. That's the nature of drift. It doesn't announce itself. The product just slowly stops feeling like one product.

Here's what I had to reckon with: it wasn't the developers' fault.

Every time an engineer had to decide how to style a button, how to space a component, how to handle an edge case in the UI, the system was asking them for a judgment call the system should have made for them. Not because they lacked judgment. Because the system had no opinion. It offered no constraints, no defaults, no governed tokens. It just said "build the thing" and left every micro-decision to whoever happened to pick up the ticket.

A hundred engineers making a hundred reasonable decisions will produce a hundred slightly different products. That's not a failure of the people. The system had no opinion, so everyone brought their own.

The system failed to hold the standard. Not because someone forgot to write documentation. Because the standard was never encoded in a form that could hold itself without human intervention at every step. The humans were doing their best inside a system that asked too much of them. Every one of those four-pixel discrepancies was someone trying to get the work right with no structural opinion to lean on.

This is what pushed me toward governance as a design material. Not policy or process or bureaucracy. The layer that absorbs the decisions the system shouldn't be asking people to make. You encode the baseline once. You make deviation require intent instead of making consistency require vigilance. The default path produces the right output. The wrong output takes effort.

That idea eventually became [FormWork](/systems/formwork/). But the seed was sitting in front of a screen full of almost-right buttons, realizing that twelve years of reasonable decisions had built a system no one recognized.

I think what drift taught me is that consistency isn't really a visual design problem. It's structural. And you don't fix it with better designers or stricter reviews. You fix it by building a system that holds the baseline so the people inside it can spend their judgment on the things that actually need it.
