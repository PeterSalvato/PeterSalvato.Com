---
layout: post
redirect_from:
  - /blog/the-system/
title: "The Integrated System"
published: true
order: 4
icon: edit_note
description: "Coordinators dispatch independent diagnostics in parallel, surface where they agree and disagree, and leave the decisions to the maker."
seo_keywords: ["AI skill architecture", "coordinator pattern", "AI governance system", "creative evaluation", "FormWork", "Peter Salvato", "Claude Code skills", "AI agent architecture", "how to build AI workflows", "modular AI system", "multi-agent coordination", "AI task orchestration"]
related:
  - /systems/formwork
  - /systems/savepoint
  - /systems/lensarray
---

I caught the system inventing a detail about Encore during a copy pass. A sentence about a feature the platform never had. It read well. It sounded specific. It was fabricated. Every individual quality check passed: it sounded like me, the opening landed with a stranger, the page was structurally clean. Five independent tools, all working correctly, and the result was wrong.

The problem was coordination. I had seventeen skills and no way to run them together. Each one worked on its own, but nothing connected what the system wrote to what actually happened. That's the same problem my father solved on construction sites. Fifty trades, each good at their piece, nobody responsible for how it all fits together.

So I built the coordination layer.

## What happens without one

That fabrication passed because no skill was checking claims against verified history. The voice protocol confirmed the sentence sounded like me. The Grip Test confirmed the opening landed. Every individual diagnostic passed. The coordination failure was upstream.

I built the no-hallucination policy the same week. Every skill that writes copy now operates under a hard constraint: no skill may invent, infer, or assume any detail about the work. Every concrete claim must trace to a verified source in a Personal Knowledge Base spanning three years of session transcripts, conversation exports, and project records. When a skill can't find verification, it stops and asks. At no point is "make something up that sounds right" an option.

Individual skills that each work correctly can still produce wrong results if nothing coordinates what they know. The hallucination was an architecture problem, not a skill problem.

## Two kinds of components

The system has two kinds of components. Individual skills each do one thing. A manifest maps every dependency: what calls what, what needs what, what produces what. That separation is what the hallucination incident broke: a skill that writes copy and a skill that verifies claims were both working, but nothing required the first to consult the second. The architecture exists to enforce that requirement.

The **Millman lens** takes a portfolio page and evaluates it against five criteria extracted from Debbie Millman's body of work. It returns a verdict per criterion (STRONG, HOLDS, WEAK, BROKEN) with specific findings. The **Grip Test** takes opening paragraphs and evaluates whether a stranger would feel the problem or just be informed about it. The **texture-grain** skill generates a paper grain tile from reference material and waits for approval before writing to disk. Each skill is self-contained and produces a clear result.

Coordinators run multiple skills together. The **audit coordinator** runs a baseline check and then fires five evaluative lenses at once: Millman, Bierut, Appleton, Peers, and Victore. Each lens evaluates the same pages from a different perspective. The audit collects all verdicts and presents them together. The **design review coordinator** captures screenshots at four breakpoints, then runs nine visual lenses covering restraint, type craft, personality, grid, and five other dimensions. If the print-craft lens scores below PRESSED, the coordinator triggers a texture generation pass: the lens identifies the gap, the generative skill fills it, and I approve or reject what it produces.

The rule that makes this work: individual skills stay single-purpose and coordinators handle the structure. No skill needs to know what else is running. The methodology underneath is on the [FormWork](/systems/formwork/) page.

## What the full pass surfaces

The **steward coordinator** is the top-level pass. It dispatches eight arms in parallel:

1. **Audit** (baseline + 6 content lenses + Victore)
2. **Position** (magnetism, market fit, discoverability, peer credibility, substance, esoteric risk)
3. **Design Review** (screenshots + 9 visual lenses + conditional texture generation)
4. **Copy Review** (grip test + copy verify per published page)
5. **Visitor Journeys** (3 paths: discovery, deep dive, peer evaluation)
6. **Speed Tiers** (what registers at 10 seconds, 2 minutes, 20 minutes)
7. **Forwarding** (per-page: would someone send this? who? what would they say?)
8. **Cross-Page Arc** (intra-tier, inter-tier, the through-line)

Each arm runs its own nested evaluations. The audit arm fires its own lenses. The design review arm fires its own visual lenses. Eight reports land in a timestamped directory.

Eight independent reports sitting next to each other is a filing cabinet, not a diagnosis. What makes the system work is what happens after: convergence runs sequentially, reads the audit output, and maps where lenses agree and where they disagree. Where they agree, I have a strong signal. Where they disagree, I have a decision to make.

My job is to read the disagreements and decide which value wins for this page.

## Convergence

On a recent pass of the bio page, the Millman lens returned STRONG on vulnerability. The page opens with a specific morning: breakfast took ninety minutes because three people needed different things from the same hour. Millman's criteria reward that kind of directness. But the Vignelli-derived restraint lens returned WEAK on the same page. Too much personal detail for the visual economy it was evaluating against. The convergence report mapped the tension: raw personal directness vs. visual discipline. At stake: whether the bio leads with the human moment or the professional identity.

That's a real creative decision, not a setting to optimize. The Millman lens and the restraint lens are both correct. They measure different things. The convergence pass surfaces the specific point where their evaluations diverge and names what's at stake. My job is to decide which value wins on this page, for this audience, at this level of the site.

Every generative output in the system follows the same pattern. The print-craft lens evaluates whether pages feel like pressed artifacts. When it scores below PRESSED, the texture-grain skill generates paper grain tiles, film noise overlays, halftone treatments. Playwright captures the result at four breakpoints. The visual lenses run again. Did it improve? Did anything regress? The loop continues until the work converges toward the identity I extracted. But the loop only works because convergence already identified which dimensions matter for this specific page. Without that, generation is guesswork with better tools.

## The manifest

Everything described here is documented in a single manifest file. Every skill, what it does, what calls it, what it needs, what it returns. The manifest is the set of plans: the document my father carried that let him hold the whole structure in his head while every individual trade worked their piece. Nobody on site had to know how the plumbing connected to the electrical. He did. That's what the manifest does here.

The coordination layer exists so that accommodating the model's processing constraints doesn't erase the human's thinking. The dump carries the original intent into the system, and the coordination keeps it intact while the tools do their work.

The methodology governing all of this is [FormWork](/systems/formwork/). What you're reading is one implementation, built against twelve years of enterprise platform work and twenty years of design practice.
