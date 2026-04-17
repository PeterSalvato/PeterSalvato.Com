---
layout: post
title: "What Twelve Years Teaches About Organizational Memory"
date: 2026-03-30
published: true
description: "I've outlasted every developer, every designer, every product manager. The system remembers what the people forgot."
seo_keywords: ['organizational memory', 'enterprise', 'Encore', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 91
depth: making
domain: Operational methodology + Design practice
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

Thirteen years at one company. I've outlasted every developer who was there when I started. Every designer. Every product manager. The people who made the original decisions are gone. The decisions are still in the code.

That's organizational memory. The system remembers what the people forgot. The variable names carry the reasoning of someone who left five years ago. The component patterns reflect a design philosophy that nobody on the current team was around to learn. The folder structure encodes priorities that made sense in 2014 and may or may not make sense now.

The design system I built in 2013 is the organizational memory of the front end. Every color, every spacing value, every component pattern was a decision I made with specific reasoning. The variables file doesn't explain the reasoning. It just holds the decisions. A new developer opens the file and sees `$color-primary: #1a6baa`. They don't know why that specific blue. They don't know what other blues were considered and rejected. They know the system says this is the blue, and they use it.

That's the strength and the weakness. The strength is consistency. Thirteen years and 1,100 deployments and the blue is still the same blue. The weakness is that the reasoning is invisible. If the reasoning behind a decision changes but nobody updates the system, the system preserves a decision that no longer makes sense. The organizational memory becomes organizational inertia.

I've seen both failure modes. The first is amnesia. A team with no organizational memory reinvents decisions every quarter. Someone proposes a new color system. Someone else already tried it three years ago and discovered it broke the accessibility contrast ratios. That discovery is in a Jira ticket nobody will find. The team spends two weeks rediscovering it.

The second is inertia. The team follows a convention nobody remembers the reason for. The convention made sense when the codebase was smaller, or when the browser landscape was different, or when the team had a different composition. But it's in the system and nobody questions the system because questioning it means auditing hundreds of files.

The CONVENTIONS.md file I maintain for my homelab is my attempt to solve both problems. Every decision includes the reasoning. When the reasoning changes, the decision gets reviewed. The document carries both the what and the why, so a future reader can evaluate whether the why still holds.

In the classroom, the IEP carried the organizational memory for each student. When I was out sick and a substitute walked in, the IEP told them what each student needed. The memory survived my absence. But if the IEP was outdated, the substitute would implement accommodations that no longer matched the student's current needs. Organizational memory has to be maintained or it becomes organizational misinformation.

Thirteen years is long enough to see every cycle. A decision gets made. The decision gets encoded in the system. The person who made it leaves. New people arrive and follow the system. The context changes. The system doesn't update. Someone questions the system. The answer is "that's how we've always done it." Someone has to dig into the history to find the original reasoning. If the reasoning still holds, the system is confirmed. If it doesn't, the system gets updated.

That cycle is governance. The organizational memory lives in the artifact, but only if someone maintains it. Without maintenance, the artifact fossilizes. With it, the system stays current enough to be useful.
