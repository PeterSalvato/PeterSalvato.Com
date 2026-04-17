---
layout: post
title: "Construction to Enterprise"
date: 2026-03-30
published: true
description: "My father held the whole picture while fifty trades worked their piece."
seo_keywords: ['construction', 'enterprise', 'coordination', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 61
depth: making
domain: Design practice + Operational methodology
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

My father ran construction sites. Electricians, plumbers, ironworkers, carpenters, masons. Every one of them good at their job. Nobody responsible for how the pieces fit together except him. He held the whole picture while fifty trades worked their piece.

The foreman doesn't do the electrical work. He doesn't pour the concrete. His job is making sure the picture of how the whole thing fits together survives every handoff. The electrician shows up, does excellent electrical work, and leaves. The plumber shows up, does excellent plumbing, and leaves. If nobody is holding the coordination layer, the pipes go where the wires are supposed to go. Each individual trade did their job correctly. The result doesn't work.

I watched this my whole childhood and didn't realize I was learning the job I'd spend my career doing.

At Encore, the engineering team had front-end developers, back-end developers, database architects, designers, QA. Every one of them good at their job. The design system I built in 2013 was the coordination layer. The variables file that governed every color, every spacing value, every component pattern. It was the blueprint that made sure the electrical didn't conflict with the plumbing.

When a developer needed a new component, they built it from existing patterns. The design system told them what the spacing should be, what the color values were, what the interaction patterns looked like. They didn't have to ask me. The system answered the question before it was asked. Same way a good set of blueprints answers the electrician's question about where the conduit runs before they cut into the wall.

The failure mode is the same in both contexts. On a construction site, it's when a trade makes a field decision without checking the plans. The decision makes sense locally. It solves the immediate problem. It creates a conflict somewhere else that nobody discovers until the next trade shows up. In enterprise software, it's when a developer adds a color that isn't in the variables file because it looked right on their screen. The decision makes sense locally. It breaks the system globally. Nobody notices until the inconsistency stacks up across a hundred screens.

Thirteen years and 1,100 deployments across six continents. The same variables file governing every decision. That's what coordination looks like at scale. The individual trades change. New developers join, old ones leave. The coordination layer holds because it's in the structure, not in any one person's head.

My father kept it in his head. That's the fragile version. When he went home for the day, the coordination went with him. The design system I built was the durable version. The coordination lives in the code. It's there at 3 AM when nobody's watching. It's there when I'm not in the room.

The transfer from construction to enterprise was the most natural one I've ever made. Different materials, same job: hold the whole picture while the specialists work their piece, and make sure it stays coherent after you leave.
