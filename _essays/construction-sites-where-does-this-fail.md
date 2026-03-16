---
layout: post
title: "Construction Sites: Where Does This Fail?"
date: 2026-03-08
published: true
description: "My father held the whole picture while fifty trades worked their piece. I learned decomposition before I had the word for it. I also learned where it breaks."
seo_keywords: ["construction management", "general contractor", "decomposition", "systems thinking", "methodology limits", "design engineering", "Peter Salvato", "single point of failure leadership", "why projects fail when key person leaves", "bus factor team risk", "knowledge transfer complex projects", "coordination failure", "systems that survive their designer"]
series: "engineering-intent"
chapter: 21
order: 14
icon: edit_note
---

My father could hold an entire building in his head. Not the blueprints. The state of it. Which trades were where, what was poured, what was curing, what couldn't start until Thursday because the glaziers were two days behind on the curtain wall. Fifty trades on a skyscraper site, each one working their piece, and he held the picture of how all those pieces fit together at any given moment.

That picture is what made the building go up straight.

I didn't understand this as a kid. I just knew that when my father was on a site, things moved. When he wasn't, they didn't. I thought that was about authority. Someone in charge, people listen. It took me years to understand it was about something more specific. He was the only person on the site who could see the whole thing at once.

The trades couldn't see it. They didn't need to. An electrician running conduit through a concrete pour needs to know his channel. He needs to know where the rebar is, where his boxes land, what's getting buried when the next truck shows up. He does not need to know that the plumber two floors up is behind schedule and that the delay is going to cascade into the HVAC install next week. That's the super's problem.

So the super holds the picture. And the building goes up.

## Where it breaks

Here's the question I keep coming back to: where does this fail?

It fails at the joints. Every time. When the steel meets the concrete. When the electrician's conduit has to pass through the plumber's chase. When two trades arrive at the same wall on the same morning and neither one knew the other was coming. The pieces are fine. The coordination between pieces is where things go wrong.

But there's a deeper failure, and it took me a long time to name it. The picture my father held, the one that made the building go up, lived in one place. His head. When he left a job site, the picture left with him.

That's what happened. He would hand off a project, or take a day off, or move to the next phase on a different site, and the coordination would slip. Things that were obvious to him weren't obvious to anyone else because he hadn't put them anywhere anyone else could see them. The picture was sovereign to him. His tools, his calibration, his read of the site. Nobody else could pick them up.

A tradesman carries his own tools, calibrated to his hand. That's a point of pride. It's also a single point of failure.

## The same pattern, twelve years later

I recognized this at Encore and ignored it for a long time. Twelve years building and maintaining an enterprise platform. I held the architecture in my head: where every module connected, which components were [load-bearing](/vocabulary/load-bearing/), what would break if you changed this one SCSS variable three levels deep. I could navigate twelve years of accumulated decisions because I'd made most of them.

That's strength. It's also fragility. What happens when I'm not in the room? The same thing that happened on the construction site. The picture leaves.

I was the [scaffolding](/vocabulary/scaffold/). And [scaffolding](/vocabulary/scaffold/){:.vocab-ref} is supposed to come off. That's the whole point of it. You put it up so the structure can stand, and then you take it away. But I never took it away because the structure couldn't stand without me. I hadn't externalized the picture. I hadn't built anything that could hold what I was holding.

## The honest part

The methodology I use now, the decomposition, the separation of concerns, the insistence on making structure visible, all of it comes from watching this failure up close. First on construction sites. Then in my own work.

I built [FormWork](/systems/formwork/) because I needed a coordination harness that wasn't me. I built [SavePoint](/systems/savepoint/) because context kept leaving when I left. These aren't products I invented out of ambition. They're patches on a failure I kept repeating.

The interesting question is always where does this fail. I got that from the job sites, from watching fifty trades work their piece and knowing that the building doesn't care how good any single trade is if the joints don't register. But the harder version of that question, the one I avoided for a long time, points inward. Where does this fail when the failure is you? When the single point of failure is the person who built the methodology in the first place?

I don't have a clean answer. The tools help. Externalizing the picture helps. But the instinct to hold it all in my head, to be the one who sees the whole thing, that doesn't go away. My father had it. I have it. The best I can do is build structures that survive the moments when I'm not in the room. And be honest about the moments when they don't.
