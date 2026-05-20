---
layout: post
title: "Attunement in AI: Why CLAUDE.md Is an Attunement Document"
date: 2026-03-09
published: true
description: "The system that reads the maker and adjusts."
seo_keywords: ['ai', 'attunement', 'governance', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 93
depth: making
domain: AI/governance
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---
A CLAUDE.md file is not a configuration file. It's an attunement document.

I spent a year treating it like settings. Instructions. Constraints. "Do this, don't do that." The file got longer. The output got flatter. I was encoding rules when I should have been encoding orientation.

The shift happened when I started writing it the way I used to write IEPs. An IEP is not a rulebook for a student. It's a reading of their processing profile: what they can handle, where they stall, what they need from the system to do their best work. The IEP doesn't constrain the student. It adjusts the environment so the student can operate in their strength.

That's what a CLAUDE.md should do for a language model.

A model has a processing profile. Context windows are working memory ceilings. Long inputs degrade attention. Compound prompts get flattened. Instruction ordering changes what gets prioritized. These are not bugs. They're characteristics. You read them and you design the environment to accommodate them.

But the document also has to attune to the maker. My CLAUDE.md carries my voice protocol, my privacy rules, my vocabulary, my positioning decisions, my project architecture. It encodes what I need from the system so my thinking comes through the output. If the model produces copy that uses words I'd never say, the document failed. Not because the model is bad. Because the attunement wasn't specific enough.

The [FormWork](/systems/formwork/) protocol coordinates this. SavePoint preserves context so the model can find its way back in. LensArray decomposes evaluation so the model handles one dimension at a time instead of trying to hold everything at once. The voice pipeline shapes register so the output sounds like me instead of sounding like a language model.

Each of these tools is an accommodation. The model can't remember what happened last session, so SavePoint carries the memory forward. The model flattens compound evaluations, so LensArray separates them. The model defaults to a generic register, so the voice protocol governs tone, banned words, sentence structure.

None of this is about making the model "better." It's about reading its processing profile and designing the interaction to match it. The same move I made for twelve students in a self-contained classroom in Brooklyn.

The CLAUDE.md at the root of every project I work on is the largest single document I maintain. It carries years of accumulated decisions. It tells the model who I am, what the project is, what matters, what to protect, and what to avoid. When I open a new session, the model reads that document and arrives oriented. Not perfectly. But oriented enough that the first five minutes are productive instead of calibration.

That's attunement. The system reads the maker and adjusts. The maker reads the system and adjusts. Both directions run on the same question: what does the system on the other end actually need to do its best work?
