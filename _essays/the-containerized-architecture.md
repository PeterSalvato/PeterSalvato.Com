---
layout: post
title: "The Containerized Architecture"
series: "homeworks"
chapter: 2
description: "Break the meal into components. Each one independent, self-contained, forgiving. When one fails, the rest survive."
seo_keywords: ["modular meal prep", "batch cooking systems", "neurodivergent kitchen", "ARFID meal planning", "executive function cooking", "containerized cooking", "kitchen systems design", "sous vide meal prep", "accommodation design kitchen"]
published: false
last_modified: 2026-03-17
related:
  - /essays/the-accommodation-kitchen/
  - /essays/everybodys-got-a-plan/
  - /essays/the-cook-who-falls-through-the-system/
---

For a long time I cooked dinner the way most people do. One meal, one process, start to finish. Everything depended on everything else. The rice had to be ready when the chicken was done. The vegetables had to be prepped before the pan was hot. Every step was wired to the next, and if one thing went wrong the whole sequence broke. Burned the rice? Now the timing is off. Forgot to defrost the protein? Start over. One failure and the meal is gone.

That's a monolithic system. One process, one shot. It either works or it doesn't, and when it doesn't, the whole thing goes in the trash.

I don't build anything else that way. Not software, not design systems, not project structure. Everything I build professionally is modular. Small, contained units that run independently and assemble later. The kitchen was the last place I applied the pattern, and the place that needed it most.

---

The batch cook happens on Sunday, when I have capacity. That's a deliberate choice. Sunday me can plan, shop, sequence. Tuesday me at 5 PM cannot. The batch cook is Sunday me leaving building blocks for Tuesday me.

I figure out what components the week needs. Proteins, vegetables, rice, maybe bread. Then I go to the store and get everything at once. Come home, clear the kitchen, fill the sous vide, and get to work.

The sequencing follows the tools. The sous vide runs hottest first: vegetables go in at 200 degrees for about an hour. Then I drop the temperature to 155 or 160 and add the chicken. Drop it again for beef. That's a sequential pipeline inside one appliance, and it takes several hours. But it doesn't need my attention. Sous vide is forgiving by nature. There's no moment where you have to be standing there or the food is ruined. It holds at temperature until you deal with it.

While that pipeline runs, other things happen in parallel. A batch of rice and beans in the Zojirushi. A batch of white rice. Coconut rice. The rice cooker finishes and switches to keep warm. It can sit there until I'm ready. The oven runs bread if I have the bandwidth for it that week.

None of these appliances need to know about each other. The rice cooker doesn't care what the sous vide is doing. The oven doesn't depend on the rice cooker. They run in parallel because they're isolated, and I think that's the thing that makes the whole approach work for me. Each one is its own contained process with its own timeline, and if I lose track of one for twenty minutes it doesn't take the others down with it.

I chose these tools because they're forgiving. They keep food warm when it's done, but more than that, they're modular and atomic in nature. They let me focus on the components and the pieces without worrying about the whole assembly. The assembly happens later, at dinner, when someone pulls from what's available.

---

Monday morning the fridge is a parts bin. Containers of protein. Cooked vegetables. Raw vegetables chopped and prepped for my son, who won't eat cooked veg. Fruit washed and cut for lunches and snacking. Two or three types of rice. On a good week, a loaf of gluten-free bread.

No plate is pre-assembled. Each container is a self-contained unit. At dinner I pull components, warm what needs warming, and put options on the table. My daughter builds her plate from the things she can eat. My son builds his from different things. I eat what's celiac-safe.

This doesn't make dinner autopilot. I'm still assembling every night. But it changes what I'm doing at 5 PM. Instead of planning, shopping, and cooking from scratch under pressure, I'm pulling from a stocked system. The cognitive load shifts from "what do I make" to "what do I pull." That's a different problem. A manageable one. It means I have something to reach for instead of starting from nothing and trying to figure it all out when I don't have the bandwidth to figure anything out.

---

The containers do more than store food. They're quarantine boundaries.

Everything that comes out of the batch cook goes into its own sealed container. The gluten status of what's inside is decided at prep time, on Sunday, when I have the capacity to be careful about it. By Tuesday at 5 PM that capacity is gone.

Gluten-free containers go on the shelf above gluten-containing ones. If something falls or drips, the contamination goes down, not up. Gravity as a safety rule, baked into shelf position.

When it's time to assemble, the gluten components can be handled with gloves, or my wife can do that portion. The protocol is decided. The boundaries are physical. Tuesday me doesn't have to think about cross-contamination because Sunday me already handled it.

---

The real advantage shows up when something goes wrong.

In the old monolithic approach, one failure killed the whole meal. Now failure is local. The rice didn't work but the protein is fine. I forgot to start the rice cooker but the sous vide bags are ready. One component breaks, the rest survive. The meal degrades gracefully instead of collapsing entirely.

At the table, the same principle holds. My son picks up a piece of chicken and the texture is wrong. The brand changed, or something about it is off in a way I can't see but he can feel. He won't eat it. In the old system, that's a crisis. In this system, I reach into the fridge for something else. A different protein, a different component. The rejected piece gets swapped out. The rest of his plate is untouched.

The system has redundancy because the parts are interchangeable. A component gets rejected at the table, another component takes its place. Nobody's dinner depends on one thing going right.

---

I run this pattern everywhere. Smaller contained processes. When things are broken into their smallest units, they're more flexible. More interoperable. Easier to trace when something breaks. In software, a monolithic process can fail anywhere along the way and you can't tell where it went wrong. In the kitchen, the same thing. One long cook with everything wired together, and when it fails you're standing there trying to figure out what happened while two kids are getting hungrier.

Break it into components and the failure is localized. The rice failed. OK. The rice failed. Everything else is fine. Dinner still happens.

That's the containerized architecture. A set of behaviors. Independent units, forgiving tools, quarantine boundaries, graceful degradation. I didn't sit down and design it. I just kept breaking things into smaller pieces until the failures stopped taking everything else down with them.
