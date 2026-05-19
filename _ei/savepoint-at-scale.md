---
layout: post
title: "Savepoint at Scale: 60,000 Documents"
date: 2026-03-19
published: true
description: "The SavePoint protocol was designed for one session. Then I pointed it at 52,000 documents across three years of AI conversations, and the problem changed completely."
seo_keywords: ["savepoint protocol", "personal knowledge base", "AI session capture", "institutional memory", "knowledge management", "Peter Salvato", "design engineering", "PKB", "conversation archaeology"]
series: "engineering-intent"
seed_status: DEEP
last_modified: 2026-03-19
---

I was looking for something I'd said about registration in a Claude session from October 2024. I knew I'd said it. I could feel the shape of the idea. But I had no idea which session, which platform, or which week. The thought existed somewhere inside a corpus that had grown to over 52,000 documents across ChatGPT, Claude Code, Claude.ai, and Gemini.

I found it. It took forty minutes.

That's when I realized SavePoint had a scale problem it was never designed to handle.

The original protocol was simple. During a conversation, when something crystallized (a decision, a realization, a reframe), you drop a savepoint. Timestamp, context, the insight. It prints in the conversation stream. It never writes to disk. The conversation export IS the archive. For a single session, this works cleanly. You finish the session, the savepoints are embedded in the transcript, and the next session can reference them if you need continuity.

But I don't work in single sessions. I work across hundreds of sessions, across months, across platforms that don't talk to each other. By early 2026 the corpus was massive. Hundreds of conversations in ChatGPT alone. Hundreds of Claude Code threads. Dozens of Gemini evaluations. Each one potentially containing a savepoint that marked a moment where the thinking turned.

The problem isn't volume. The problem is that crystallized moments don't announce themselves retroactively. A savepoint dropped in real time says "this matters" at the moment it matters. A savepoint buried in a transcript from fourteen months ago says nothing until you go looking for it. And you only go looking when you need it, which means you're already under pressure, which means you're searching blind.

So I started building what I think of as the PKB: a personal knowledge base assembled from continuous session capture. The idea is straightforward. Every conversation I have with an AI tool gets exported and indexed. The savepoints embedded in those conversations become searchable nodes. The corpus isn't a reference library. It's an ideation history. It captures what I was thinking, when I was thinking it, and what shifted.

The technical challenge turned out to be less about search and more about signal. Full-text search across 52,000 documents returns too much. Every conversation mentions "governance" or "drift" or "registration" because those are the words I use constantly. The savepoints are the signal layer. They mark the moments where a term gained new meaning, where a connection formed that hadn't existed before, where a decision closed off one path and opened another. Without the savepoints, the corpus is just a pile of transcripts. With them, it's a navigable map of how my thinking evolved.

Here's what surprised me. The protocol I designed for capturing single-session insights turned out to be the indexing system for the entire corpus. I didn't plan that. I designed savepoints to solve the problem of losing context between Tuesday's session and Thursday's session. The fact that they also solve the problem of finding a specific realization across three years of scattered conversations is a structural accident that worked.

The reason it worked is that savepoints are semantically rich. They don't just say "we talked about X." They capture the shift. "Was treating voice as a style choice. Now treating it as a governance layer." That kind of entry is findable because it describes a transition, and transitions are specific enough to surface in search even when the surrounding vocabulary is generic.

I keep finding things I forgot I knew. That's the strangest part. I'll be working through a problem in a current session and search the PKB for related savepoints, and I'll find a version of the same realization from eight months earlier, phrased differently, arrived at from a completely different direction. Sometimes the earlier version is better. Sometimes it's a dead end that I can now recognize as a dead end because I have more context. Either way, it changes the current session. I'm not starting from zero. I'm starting from wherever I last left off on that particular thread, even if I didn't remember leaving off anywhere.

This is what I mean by continuous session capture. The goal isn't to record everything. The goal is to make the crystallized moments retrievable across time. The raw conversations are the substrate. The savepoints are the index. The PKB is the system that connects them.

The scaling problems are real. Platform exports are inconsistent. ChatGPT JSON exports have a different structure than Claude conversation logs. Timestamps don't always align. Some savepoints reference other savepoints that live in different exports. The tooling to normalize all of this is still rough.

But the core insight holds: a protocol designed for one session scales to an entire ideation history if the protocol captures the right kind of moment. SavePoint was always about marking cognitive turns. At scale, those turns become the topology of a knowledge base that no one else could build, because no one else had those specific turns in that specific sequence.

The corpus is mine. The turns are mine. The system that makes them findable is the same system that captured them in the first place. That's the part that makes me think this isn't just a personal tool. Anyone who works with AI across multiple sessions, multiple platforms, multiple months, is generating this corpus whether they index it or not. The difference is whether you can find the moment where the thinking changed, or whether you have to reconstruct it from scratch every time.

I've been reconstructing from scratch for most of my career. Forty minutes to find a sentence about registration. The PKB is what happens when you decide that's not acceptable anymore.
