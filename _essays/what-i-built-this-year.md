---
layout: post
redirect_from:
  - /blog/what-i-built-this-year/
title: "What I Built This Year"
published: true
order: 8
icon: edit_note
description: "Each tool exists because the previous one failed. SavePoint because context evaporated. The voice protocol because the output stopped sounding like me. LensArray because evaluation was one question pretending to be twelve."
seo_keywords: ["design engineering", "design methodology", "AI governance", "creative evaluation framework", "operational methodology", "Peter Salvato", "FormWork", "building AI tools for creative work", "AI workflow for designers", "what can you build with AI in a year", "AI productivity for creatives", "AI tools I built", "personal AI workflow", "tools for ADHD writers"]
related:
  - /systems/formwork
  - /systems/savepoint
  - /practice/this-site
---

In February I read this site top to bottom as a visitor and found a fabricated claim. A sentence about work I never did, written in my voice, that sounded specific and grounded. It had survived every quality check I had. Five independent tools had evaluated the page. All five passed it. The sentence was still wrong.

That failure produced the last tool I built this year. But it only makes sense if you see the failures that came before it.

## The dump (realized last, existed first)

Everything downstream depends on getting raw thinking into the system without friction. I didn't understand this until after I'd built the tools that process the material. Looking back, I'd been dumping for three years before I recognized it as a practice: thousands of sessions of thinking out loud, dictating on drives, brainstorming at 2 AM. That raw material carried my actual voice, my actual sentence structure, the way I actually move between ideas. Every tool I built afterward draws from it.

## SavePoint

Context kept evaporating across sessions. I'd have a breakthrough, the session would close, and the reasoning that connected everything would disappear. The next session started from zero. I started typing "give me a savepoint" before conversations ended. Same instinct as saving a video game before a boss fight: you're about to lose your progress, so you dump your state. That survival reflex became [SavePoint](/systems/savepoint/). It preserved the thinking across session boundaries so the next session could pick up where the last one left off.

## Voice protocol

The output stopped sounding like me. The tools were producing competent prose that could have been anyone's. LLMs learn from published writing, and published writing is performance. My real voice is in conversation transcripts: rough, full of false starts, full of direction changes. Twenty-five years of design practice taught me to hear when something drifts from the original intent. The voice protocol externalized that ear so it could run at scale, and it governs every sentence on this site.

## LensArray

"Is this good?" was never one question. It was twelve questions collapsed into one, and the answer was always vague. I needed evaluation decomposed into independent dimensions. Millman's criteria for authenticity. Bierut's criteria for whether design is solving a problem or decorating one. Shaw's test for whether something feels like a world. Extracted from real practitioners' bodies of work, codified as testable diagnostics. They disagree with each other. The disagreements are where the real decisions live.

## The coordination layer

Individual tools, each working correctly, producing wrong results. That hallucinated attribution was the proof. Seventeen diagnostic skills that each do one thing. Coordinators that dispatch them in parallel. Convergence that surfaces where they agree and disagree. My job is to read the disagreements and decide which value wins. The coordination layer exists because correctness at the component level doesn't guarantee anything at the system level, and I think I learned that on construction sites before I learned it here.

---

Each tool exists because the previous one failed or was not enough. The dump gave the tools material. [SavePoint](/systems/savepoint/){:.vocab-ref} kept the material from evaporating. The voice protocol kept the output honest. [LensArray](/systems/lensarray/) decomposed evaluation into real decisions. The coordination layer caught what the individual tools could not. The methodology behind all of it is documented on the [FormWork](/systems/formwork/) page.
