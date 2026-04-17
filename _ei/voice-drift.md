---
layout: post
title: "Voice Drift"
date: 2026-03-09
published: true
description: "AI copy flattening."
seo_keywords: ['ai', 'drift', 'fidelity', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 97
depth: survival
domain: AI/governance
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---

Read ten AI-assisted "About" pages and you'll hear the same voice. Same cadence. Same transitions. Same way of building to a point. Different words, identical register. The person who wrote them is gone. What's left is the model's default: a statistical average of published writing that sounds professional and belongs to nobody.

That's voice drift. The human register erodes through AI-assisted production until everything sounds like competent generic copy. Each individual piece seems fine. Read them together and the person has disappeared.

---

The mechanism is structural. Large language models learn to write from published text. Blog posts, articles, marketing copy, documentation. All of it polished. All of it shaped for an audience. Published writing is a performance. The way someone writes a LinkedIn post is not how they think. The rough edges, the false starts, the way someone actually arrives at an idea: gone before publication.

When you ask an AI to write "in your voice" and give it your published work as examples, you're handing it the performance. The AI learns to imitate that performance, and since most people's published performances converge toward the same conventions (clean transitions, parallel structure, building to a thesis), the output converges too. Different people, same register. That's voice drift at scale.

The real voice lives in conversations. Working messages. The unguarded explanations where someone is thinking out loud instead of presenting a finished thought. The way I start sentences, the vocabulary I reach for when I'm not performing, how I describe problems (feeling first or situation first), how I transition between ideas (connectors or hard breaks), what makes me frustrated.

---

The voice protocol I built for this site uses conversations as the source, not published pages. A voice-sample skill reads my conversation transcripts and captures observations about how I actually talk. It tracks sentence rhythm, opening moves, natural vocabulary, transitions, qualifying phrases. Each session that does copy work adds observations to a persistent file. Over time, it builds a fingerprint that's specific to me.

The governance rules follow from specific failures I caught. I had a draft that ended with "The structure is the signal." It scanned fine. The rhythm was satisfying. I read it twice before I noticed it meant nothing. That sentence could end any page about systems, infrastructure, design. It belonged to nobody. That catch became a rule: no fortune-cookie closers.

Each rule got built the same way. I caught an AI writing pattern in my output, named what was wrong, and wrote a prohibition specific enough that I couldn't rationalize my way past it. Zero em dashes (they accumulate into a rhythm that signals machine output). Zero negation-affirmation patterns unless the negation corrects a genuine misunderstanding. Zero banned words (paradigm, leverage, passionate, innovative, synergy, empower). The rules are binary. The enforcement is mechanical. The voice is what survives the filtering.

---

Voice drift is a fidelity problem. The gap between what the person sounds like and what the output sounds like widens with each AI-assisted draft. Without governance, the gap compounds. The voice gets cleaner and more generic. The person gets quieter. By the time someone notices, the original register is gone and the copy has converged toward the same default that everyone else's copy converged toward.

The fix is structural: use conversations as the source material, not published writing. Build a checklist that catches specific AI patterns before they ship. Sample the real voice continuously. The person's register has to be the input. Otherwise the model replaces it with the average.
