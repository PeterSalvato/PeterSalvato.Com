---
layout: post
title: "Fidelity in AI Output"
date: 2026-03-30
published: true
description: "The output is competent. It's also not what you meant."
seo_keywords: ['fidelity', 'AI governance', 'voice', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 45
depth: reading
domain: AI implementation + Operational methodology
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

AI tools produce competent output. The grammar is correct. The structure is logical. The tone is professional. If you asked for a bio, you get a bio. If you asked for a project description, you get a project description. The output passes every quality check you can think of.

And it doesn't sound like you.

This is the fidelity problem. Quality asks whether the output is good. Fidelity asks whether the output is yours. Those are different questions and AI tools are very good at the first one and very bad at the second.

I found this out the hard way. I was building my site using Claude as a compiler for three years of my own raw thinking. Conversations, notes, rough drafts. The AI processed my material. The output read well. It read clearly. Every page made its point. And then I read the whole site top to bottom as a stranger and found a fabricated claim. A sentence about work I never did, written in my voice, that sounded specific and grounded. It had survived every quality check I had. Five independent evaluation tools had looked at the page. All five passed it. The sentence was still wrong.

That's a quality failure and a fidelity failure at the same time, but the fidelity failure is worse. The quality failure is a bug. The fidelity failure is structural. The tool doesn't know what you meant. It knows what the pattern suggests. And the pattern suggests smooth, confident, specific prose. So it generates smooth, confident, specific prose. Some of it matches what you actually did. Some of it matches what someone like you probably did. The tool can't tell the difference.

The voice problem is the same thing at a different scale. AI tools learned from published writing. Published writing is performance. It's edited, smoothed, structured for an audience. Real voice lives in conversations. The rough, unguarded explanations where someone is thinking out loud instead of presenting a finished thought. The places where a sentence starts going one direction and ends up somewhere else. The vocabulary that's specific to one person's experience. "Out of register" means something to me because I pulled squeegees in a print shop. An AI tool uses that phrase because it appeared in training data. Same words, different load.

I built a voice protocol with 40 rules that constrain AI generation during production. Zero em dashes. Zero negation-affirmation patterns. No epigrammatic closers. No personification of tools. The rules exist because each one catches a specific way that AI output drifts from human voice. Em dashes are the simplest example. Every LLM defaults to em dashes where a human would use a period or a comma. One draft had eleven em dashes. Each one looked fine individually. Together they created a rhythm that belonged to no specific person.

The protocol doesn't make the AI sound like me. It stops the AI from sounding like itself. That's a different operation. Fidelity in AI output isn't about adding personality. It's about preventing the tool from overwriting the personality that's already in the source material.

This is why I use AI as a compiler, not a generator. The source material is mine. The conversations, the rough thinking, the specific moments and vocabulary and structural instincts. The AI transforms it. Compiles it into publishable form. But it doesn't originate any of it. When the output drifts from the source, the protocol catches it. When the protocol misses something, the evaluation lenses catch it. When the lenses miss something, I catch it by reading the whole thing as a stranger.

The fidelity chain is: source material, constrained generation, independent evaluation, human verification. Skip any link and the output drifts. It'll still be competent. It just won't be yours.
