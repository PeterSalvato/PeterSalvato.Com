---
layout: post
title: "What Claude Code Gets Wrong"
date: 2026-03-09
published: true
description: "Six specific failures. The governance infrastructure exists because the tool has predictable failure modes."
seo_keywords: ['ai', 'governance', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 136
depth: survival
domain: AI/governance
function: Payload
last_modified: 2026-03-14
---
I use Claude Code every day. The governance infrastructure exists because I've cataloged specific, repeatable failure modes. Six of them.

**Vocabulary overcorrection.** The voice protocol flags certain words and patterns. The model over-applies the flags. A word that's fine in context gets replaced because it appears on a watchlist. "Innovative" is banned. "Innovation" used descriptively in a sentence about a historical event gets caught and rewritten. The overcorrection produces copy that avoids problems it doesn't have. The fix is human override at the word level, not a looser rule.

**Compound evaluation degradation.** Ask the model to evaluate a page against one lens and you get a sharp, specific verdict. Ask it to evaluate the same page against five lenses simultaneously and the verdicts soften. Each lens gets less attention. The specificity drops. The evaluations start converging toward "adequate" because the model can't hold five distinct evaluative frameworks at full resolution at the same time. The fix is sequential evaluation: one lens, full resolution, next lens, full resolution. The skill architecture (coordinator dispatches atomics) is built for this.

**Context loss between sessions.** The model starts each session without the decisions made in the previous one. A vocabulary choice, a positioning decision, a voice rule adjustment. Gone. The CLAUDE.md and the Savepoint Protocol exist specifically to bridge this gap. The savepoint carries the decision forward in a format the model can parse. Without it, the model makes the same decisions again, and sometimes it makes different ones.

**Copy that sounds like no one.** The model produces clean, competent prose that belongs to nobody. Same cadence, same transitions, same way of building to a point. The voice protocol catches the surface tells (em dashes, negation-affirmation, epigrammatic closers). But the deeper failure is tonal: the copy passes every check and still sounds generated. The fix is compilation, not generation. Source the material from real conversations where my voice is already present. Let the model assemble from source, not generate from prompt.

**False positive governance.** The model catches a pattern it was told to catch, but the pattern isn't a problem in context. "Not X. Y." is a banned structure because it's the primary AI tell. But I sometimes speak in negation-affirmation naturally. "That wasn't a design problem. It was a governance problem." That's how I talk. The protocol flags it. The model replaces it. The replacement is technically compliant and loses my voice. The governance system was too tight. The fix was human override: governance that informs while the human decides.

**Epigrammatic closers that mean nothing.** The model gravitates toward short, punchy, quotable closing sentences. Mirrored structures. Symmetrical reversals. Sentences that sound like they belong on a poster. "The materials changed. The operations didn't." Pull that sentence apart and it's a compression of the section's point into a form designed to land hard. But it doesn't communicate anything the section hasn't already communicated. It performs insight instead of adding it. The voice protocol now catches these explicitly, but the model still reaches for them because the pattern is deeply embedded in its training.

Each of these failures is predictable. Each one has a structural fix. The governance infrastructure is not about the model being bad. It's about the model being consistent in ways that erode the specific qualities that make work belong to a person. The tool is excellent at processing. The failures are all in judgment. That distinction is the whole architecture.
