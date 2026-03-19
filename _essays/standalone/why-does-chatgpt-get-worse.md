---
layout: post
title: "Why Does ChatGPT Get Worse the More You Type?"
description: "Your AI gives sharp answers at the start of a conversation and vague ones by the end. It's a processing constraint that special education teachers have been designing around for decades."
seo_keywords: ["why ChatGPT gets worse", "AI output degrades", "ChatGPT long conversation problems", "context window explained", "AI forgets earlier messages", "how to get better AI results", "ChatGPT losing context", "accommodation design", "processing profile", "special education AI"]
published: true
order: 13
icon: edit_note
last_modified: 2026-03-11
related:
  - /research/accommodation-design
  - /systems/savepoint
  - /research/input-inversion
permalink: /essays/why-does-chatgpt-get-worse/
---

You start a conversation with ChatGPT. The first few responses are sharp. Specific. Useful. An hour later, the responses are vague. It's repeating itself. It contradicts something it said twenty messages ago. You haven't changed how you're prompting. The model got worse on its own.

It's a processing constraint.

## What's actually happening

A language model has a [context window](/vocabulary/context/): the total amount of text it can hold in working memory at once. Early in a conversation, everything fits. The model gives full attention to your prompt and its own previous responses. As the conversation grows, older content gets compressed. Details from the beginning carry less weight. By the time you're deep into a long session, the model is working with a fading picture of what you discussed an hour ago.

This is the same thing a teacher sees when a lesson runs too long without a checkpoint. Student attention is finite. You can watch it degrade in real time. The material from the first ten minutes is clear. The material from minute forty is gone.

## The fix teachers already use

In a classroom, you don't give a student forty minutes of continuous instruction and hope they retain all of it. You break it into segments. You check understanding before moving on. You give one instruction at a time instead of stacking three together.

The same fix works for AI:

**Break long conversations into focused sessions.** When the topic shifts, start a new conversation. The model gets a fresh [context window](/vocabulary/context/){:.vocab-ref} with full attention on the new problem.

**One objective per prompt.** "Evaluate this for voice quality, structural integrity, and brand alignment" is three tasks disguised as one. The model processes the first with full attention. Each one after that gets less. Give it one at a time.

**Check the output before stacking more.** If the response to your first prompt is solid, build on it. If it's already drifting, adding more instructions makes it worse.

## The deeper pattern

These are accommodations for a system with specific processing constraints. Working memory limits, attention degradation, sensitivity to instruction ordering. In special education, this is called a [processing profile](/essays/processing-profiles/): a documented picture of how a specific learner takes in and processes information, used to design instruction that fits.

Language models have [processing profiles](/vocabulary/processing-profile/){:.vocab-ref} too. The specs are published (context windows, token limits, attention mechanisms) but they're treated as engineering numbers. I think they're closer to cognitive constraints, and once you see them that way, you can design around them the same way a teacher designs around a student's working memory ceiling.

I spent a year teaching special education in Brooklyn. The framework I use now for AI system design came directly from that classroom. I call it [accommodation design](/vocabulary/accommodation-design/), and the core idea is simple: instead of fighting a system's limitations with more rules and longer prompts, you design the task to fit how the system actually processes.

The [full whitepaper](/research/accommodation-design/) documents the framework. The short version is that your AI isn't getting dumber. You're just asking it to hold more than it can hold at once, and nobody told you that was happening.
