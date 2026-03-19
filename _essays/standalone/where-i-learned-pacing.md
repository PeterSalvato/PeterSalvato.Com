---
layout: post
title: "Where I Learned Pacing"
description: "A DJ doesn't just pick good tracks. A DJ reads the room and sequences energy for what the crowd can absorb right now. That skill transferred to a classroom, then to AI architecture. The material changed. The read didn't."
seo_keywords: ["pacing design", "DJ culture design", "reading the room", "attunement", "sequencing UX", "spiral curriculum", "AI task sequencing", "accommodation design", "Twilo", "experience design", "why AI gets worse in long conversations", "attention degradation AI", "task ordering matters AI", "pacing in teaching", "energy management design", "how DJs read a room"]
published: false
order: 16
icon: edit_note
last_modified: 2026-03-11
permalink: /essays/where-i-learned-pacing/
---

Saturday night, 1998. Twilo on West 27th. Three thousand people on the floor and the DJ drops the energy by twenty percent. On purpose.

Nobody leaves. The room settles. Breathing changes. Conversations start at the edges. Then the build comes back, and because there was space, the next peak lands in the body instead of bouncing off a crowd that was already at capacity.

I never DJed. I received. I stood on that floor and felt what sequencing does when someone who understands pacing controls it. The tracks matter. The order matters more. And the order changes depending on what the room needs at 2 AM versus what it needed at midnight.

## What pacing actually is

You read the state of the system receiving your work, then you design the sequence around what you read. In FormWork, pacing depends on the dump. The unstructured thinking carries the maker's actual process: how they sequence ideas, where they backtrack, what they connect to what. You can't pace effectively without reading that material. It tells you what the maker's thinking actually looks like, which tells you how to sequence the tools around it.

A DJ doing this well is processing in real time: energy level, fatigue, where the room peaked last, how long ago, what hasn't been heard yet. The decision about the next track is made from what the room is showing you right now. You can plan a set list. The good DJs I watched abandoned it within the first hour because the room told them something the plan didn't know.

I watched DJs do this for years before I realized I was learning something transferable. Reading a room and adjusting the sequence of what you deliver based on what the room can absorb right now.

## The same skill in a different room

Six years later I'm standing in front of twelve students in a self-contained classroom in Sunset Park, Brooklyn. Fourth and fifth graders with twelve different processing profiles. Forty-minute lesson blocks.

The pacing problem is identical. Push too fast and you lose the back of the room. Stay too long on one concept and the front checks out. The material from minute ten is solid. The material from minute thirty-five is gone. Not because the content is harder. Because the capacity to absorb it ran out twenty minutes ago.

So you read the room. You watch for the signals: fidgeting, glazed eyes, the kid who stopped writing. And you adjust. You break the lesson into segments. You spiral: introduce a concept, move forward, come back to it later at a higher level. The repetition is pacing. The spacing is pacing. The decision to stop and do a physical activity before the next cognitive push is pacing.

The spiral curriculum does the same thing a DJ set does. Introduce a theme early, build on it, return to it, build higher. You sequence for what the room can absorb, and the textbook order rarely matches that.

## The same skill in a context window

A language model has the same constraint. Attention degrades over time. Front-load the complex material and everything after it gets less processing. Stack four objectives in one prompt and the model handles the first one with full attention. Each one after that flattens.

Task decomposition is pacing. You read the system's processing profile and design the sequence around what it can absorb. One objective at a time. Check the output. Then the next. The spacing between tasks is as important as the tasks themselves.

The skill architecture I built works this way. Twenty-two single-purpose skills, each handling one objective. Five coordinators that sequence them. The coordinators decide the order based on what depends on what, the same way a DJ decides the next track based on where the room is right now. A responsive sequence.

Evaluation works this way too. Ask a model to evaluate something on six dimensions simultaneously and you get a blended average. The dimensions contaminate each other. Run them one at a time and each evaluation is honest about what it sees. I learned that the hard way after watching LensArray produce flattened scores until I separated the passes.

## The principle underneath

The receiver changes. A crowd that's been dancing for four hours, a student with attention limits documented in an IEP, a model with a context window and attention degradation. The operation stays the same: figure out what the system can absorb right now, and design the sequence around that.

I keep coming back to what made those Twilo sets work. When the pacing was right, nobody noticed the structure. The lesson felt like one continuous thing. The prompt sequence felt like a conversation. The structure disappears into the experience, and that's what I'm trying to build into [accommodation design](/research/accommodation-design/) at every level.
