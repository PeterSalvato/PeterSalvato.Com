---
layout: post
redirect_from:
  - /blog/voice-governance/
title: "Voice Governance"
published: true
order: 3
icon: edit_note
description: "AI copy all sounds the same because it learned from published writing. Published writing is performing. Real voice is in conversations."
seo_keywords: ["AI voice", "voice governance", "AI copywriting", "voice protocol", "AI writing quality", "Peter Salvato", "copy verification", "why does AI writing sound generic", "AI copy sounds the same", "how to make AI write in my voice", "AI tone of voice", "ChatGPT writing sounds fake", "brand voice AI"]
related:
  - /research/voice-governance
  - /systems/lensarray
  - /research/accommodation-design
---

Read ten AI-assisted "About" pages and you'll notice they sound identical. The same cadence, the same transitions, the same way of building to a point. Different words, same voice. The person disappears and what's left is the tool's default register.

You can fix this partially with style guides, voice examples, tone specifications. The output gets better than the default, but it still won't sound like the person. It sounds like an AI doing an impression of a style guide. The reason is structural, and once I figured out why, I could build something that actually works.

## Why it happens

Large language models learn to write from published text. Blog posts, articles, marketing copy, documentation, books. All of it polished. All of it shaped for an audience. Published writing is a performance.

The way someone writes a LinkedIn post is not how they think. The way someone writes a case study is not how they explain the same project to a friend over dinner. The rough edges, the false starts, the way someone actually arrives at an idea: gone before publication.

So when you ask an AI to write "in your voice" and give it your published work as examples, you're handing it the performance. The AI learns to imitate that, and since most people's published performances converge toward the same conventions (clean transitions, parallel structure, building to a thesis), the output converges too. Different people, same register.

The real voice lives in conversations. Working messages. The unguarded explanations where someone is thinking out loud instead of presenting a finished thought.

## The conversations

Between January 2023 and early 2026, I talked to AI tools the way I used to talk into sketchbooks. ChatGPT first, then Claude Code, then Claude.ai and Gemini alongside them. Thousands of sessions. Indexed together, tens of thousands of documents.

Most of that material is me talking. Explaining problems, working through decisions, arguing with myself about naming, reacting to what the tool produced, directing implementation. The way I start sentences, the vocabulary I reach for when I'm not performing, how I describe problems (feeling first or situation first), how I transition between ideas (connectors or hard breaks), what makes me funny and what makes me frustrated.

That conversational material is the actual voice. Published writing filters it out, which is why you can't use published writing as the source.

## The pipeline

Tens of thousands of documents of me talking. The question was what to do with them.

### Voice sampling

The voice-sample skill reads my conversation transcripts and captures observations about how I actually talk. The output isn't a style guide. It's a tuning fork. It tracks sentence rhythm (short bursts or long flowing thoughts?), opening moves ("so basically...", "the thing is...", "yeah let's..."), natural vocabulary, transitions, humor, qualifying phrases. Each session that does copy work adds observations to a persistent file, and over time it builds a detailed fingerprint.

The key constraint: voice sampling reads conversations, not published pages. Published pages are the output. Conversations are the source. Conflating those is how you end up with AI voice that sounds polished but empty.

### Governance constraint

I had a draft of my [This Site](/practice/this-site/) page that ended with "The structure is the signal." It scanned fine. The rhythm was satisfying. I read it twice before I noticed it meant nothing. That sentence could end any page about systems, infrastructure, design, governance. It belonged to no one in particular and said nothing specific about my work. That catch became a rule: no fortune-cookie closers. Sentences that feel like insight without containing any.

That's how most of these rules got built. I caught a pattern, named it, codified the prohibition.

I feed the voice sample into the copywriting protocol as a hard constraint. When I write anything with the system, the rules are specific: vary sentence length (short declaratives mixed with longer causal chains), use material vocabulary (holds, breaks, drifts, scaffold, fidelity, load, joints, terrain, coherence, lock), open with a real moment rather than a concept, show action and consequence rather than description and explanation.

Every rule is enforceable and has a specific origin. "Zero em dashes" because they accumulate into a rhythm that belongs to no specific person. "Every negation-affirmation pattern has to be earned" because that pattern ("Not X. Y.") is the single most common AI writing tell and most people don't notice it until you point it out. The test: does the negation correct a genuine misunderstanding the reader would actually have? If you're using it for emphasis or contrast, rewrite it. Every rule in the protocol got built the same way: I caught it in real output, named what was wrong, and wrote a prohibition specific enough that I couldn't rationalize my way past it later.

### The 12-item checklist

Before anything publishes, a copy-verify skill runs a 12-item pass/fail check. Twelve items sounds like a lot. Most of them are fast. A few do real work.

Item 7 checks whether every "Not X. Y." pattern is earned. That pattern is the single most common tell in AI-assisted copy. "Not a portfolio. A world." "Not documentation. A living system." The structure feels insightful because the rhythm implies a correction, but most of the time there's no genuine misunderstanding being corrected. The negation is doing emphasis work, not clarification work. The rule: if the reader wouldn't actually think X before you said Y, rewrite it. On early drafts of my project pages, item 7 flagged three or four instances per page. Every one of them was emphasis disguised as insight.

Item 4 is the simplest and catches the most. Zero em dashes. AI writing defaults to em dashes the way spoken English defaults to "like." One draft of a project page had eleven. They all looked fine individually. Together they created a rhythm that belonged to no specific person. The rule is binary: zero, not fewer.

Item 10 asks whether the copy feels like a room. Would it feel wrong on someone else's site? This is the identity coherence check. A page can pass every mechanical rule and still read like competent generic copy. Item 10 catches the kind of writing that could belong to anyone with similar credentials.

The remaining nine items cover the rest of the surface: does the opener land with a stranger, does it pass the Grip Test, are details traceable to verified sources, zero banned words (paradigm, leverage, passionate, innovative, synergy, empower, journey, transformative), no fortune-cookie closers, no ungrounded metaphors, no personification of tools, frontmatter matching body, and index entries staying current.

Eleven of the twelve items are mechanical. They require checking specific, verifiable conditions. That's by design: governance works when the checks are concrete enough that you can't rationalize your way past them.

## The Grip Test

Item 2 is not mechanical. It asks whether the writing passes the Grip Test at Grip or Lock level, but answering that requires judgment about a stranger's experience. You already understand the work, so you can't tell whether a stranger would.

I named it after my friend Ben. I showed him an early draft of the [SavePoint](/systems/savepoint/) Syntax page and asked what he thought. He said he could get "a fingernail hold" on it. He could tell it was something, but he couldn't feel why it mattered. That phrase became the standard.

The Grip Test has three ratings:

**Fingernail:** The reader can see it's something but can't feel why it matters. They'd leave the page without a clear reason to care.

**Grip:** The reader feels the problem even if they haven't lived it. They understand the stakes through the writing alone.

**Lock:** The reader recognizes their own experience in what they're reading. The writing connects to something they already know but maybe haven't articulated.

Every page should land at Grip or Lock for a stranger. If a page sits at Fingernail, the opening isn't working. The test also identifies the "in": what shared human experience does this connect to? Losing something you can't get back? Building something nobody asked for? The gap between what you know and what you can prove?

## What this solves

The pipeline constrains the space of possible output so the things AI writing typically gets wrong are caught before they ship. The voice sample sets the tuning reference. The governance rules knock out the most common failure modes. The checklist catches what slips through. Voice still requires a person. What the pipeline does is keep the tool from overwriting that person with its default register.

Every published page on my site has been through this pipeline. Read them back to back and you'll hear a specific person with real opinions and a specific way of getting to the point. That's the thing I was trying to protect.
