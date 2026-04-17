---
layout: post
title: "The Overcorrection: When Governance Catches False Positives"
date: 2026-03-30
published: true
description: "The voice protocol flagged a sentence that was actually mine. The system was too tight."
seo_keywords: ['governance', 'false positive', 'failure', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 109
depth: reading
domain: AI implementation + Operational methodology
function: Failure
seed_status: DEEP
last_modified: 2026-03-30
---

The voice protocol has 40 rules. Zero em dashes. Zero negation-affirmation. No epigrammatic closers. No personification of tools. Each rule exists because it catches a specific AI pattern that makes copy sound machine-generated.

The rules work. They catch a lot. But a system tuned to catch every AI pattern will also catch human writing that happens to share the same pattern.

I write short declarative sentences followed by other short declarative sentences. Sometimes those sentences land in a rhythm that the protocol flags as "constructed staccato." The protocol says: "Short. Sentence. After. Short. Sentence. Vary paragraph lengths." But that's how I actually talk. The protocol can't tell the difference between an AI producing staccato because it defaults to staccato and a human producing staccato because that's their rhythm.

The negation-affirmation rule catches the most AI tells. "Not X. Y." is the pattern. Every LLM does it. Zero tolerance. But I've caught myself writing negation-affirmation naturally in conversation. "Not the whole system. Just the front end." That's a real thing I said to a real person. The protocol would flag it.

This is a false positive problem. The same problem that happens in every governance system. An IEP accommodation that's too specific might restrict a student in a context where they didn't need the restriction. A design system that's too rigid might prevent a legitimate design decision because it falls outside the defined patterns. The governance catches the thing it's supposed to catch and also catches things it shouldn't.

The fix isn't loosening the rules. Loosening the rules lets the real violations through. The fix is a human override that acknowledges the false positive and proceeds. In the classroom, the IEP is a legal document but the teacher still exercises professional judgment about implementation. "The IEP says no timed tests, but this student wants to try the timed version today." That's a professional decision, not a violation.

In the voice protocol, the override is me reading the flagged sentence and deciding: is this actually an AI pattern, or is this me? If it's me, the sentence stays. The protocol caught a real pattern that happens to also be my pattern. The governance worked. The judgment was wrong.

The lesson is that governance without judgment is just automation. The rules catch patterns. The human decides what to do about the catch. A system that automatically corrects every flag will overcorrect until the output has no personality left. A system that flags without correcting gives the human the information and the choice.

This is the argument for evaluation over enforcement. LensArray doesn't fix anything. It reports. The lenses flag issues and the human decides what's actually an issue. The reconciliation agent doesn't correct drift in infrastructure. It reports the discrepancy. The human decides which side is wrong.

Governance that enforces without judgment strips the human out of the loop. Governance that informs while the human decides keeps the human where they need to be: making the calls that only a person can make.
