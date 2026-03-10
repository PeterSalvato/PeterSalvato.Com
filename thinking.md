---
layout: context
title: "How I Think"
permalink: /thinking/
description: "Design engineering across every layer: visual, structural, strategic. Reading the room, finding the gap between intent and how it lands, and the twenty-five-year practice built to close it."
seo_keywords: ["design engineering", "design methodology", "cross-domain architecture", "compiled portfolio", "SVA", "visual communication", "provenance"]
last_modified: 2026-03-02
faq: true
faq_items:
  - question: "How does Peter Salvato approach a project?"
    answer: "The first question is always: what is this supposed to be? Not what it looks like or what technology it uses, but what is the thing actually supposed to say? Once that's clear, every decision about design, engineering, brand, and platform gets tested against it."
  - question: "What makes Peter Salvato's approach different?"
    answer: "Most projects are split across departments (a designer, an engineer, a brand strategist) who each do good work that doesn't add up. Peter works professionally across all three domains, so he can see when the photography contradicts the platform architecture, or the brand voice says one thing and the code structure says another."
  - question: "How does Peter Salvato integrate design and engineering?"
    answer: "They aren't separate disciplines layered on top of each other. In Aiden-Jae, photography direction and Shopify architecture were built as one system. In Encore, the SCSS design system and JS framework evolved together over twelve years. The integration isn't coordination between departments. It's one person working through each domain."
---

The founder knew exactly what separated her jewelry from mass-market product. The quality was real.

Then you'd land on her Shopify store. Same grid as every other template. Same hierarchy. Same assumptions. A ring from a premier manufacturer sat in that grid the same size as a $15 drop-shipped piece. The detail work disappeared. The quality was invisible.

She didn't see the gap. She knew what the product was, so the screen looked fine to her. But a stranger landing on that page would feel something was off before they could name it. The platform was quietly flattening what made the product different. I saw it because I could read the code and the photograph at the same time. The platform was contradicting what the product actually was.

I built [Aiden Jae](/output/aiden-jae/) as one integrated system: brand identity, photography direction, Shopify architecture, packaging. The code respects the photograph instead of overriding it. When a customer sees the actual texture of recycled gold under honest light, they're seeing the cost structure, the sourcing story, and the production standard without reading a word. She runs the business. The quality comes through the screen because the platform was built to show it.

---

In 2013, I walked into a company and found a Windows Forms application. Desktop-only. OS-dependent. The software was genuinely good: thirty years of decisions without drift, made by the person who wrote it in his dorm room and had been running it ever since. It served some of the largest recruiting organizations in the world.

The software was healthy. The surface it ran on was the problem. Desktop-only meant the platform couldn't follow its users into a world that was going browser-based. The delivery layer was about to close it off from everywhere the market was heading. The people running it were too close to the software to see the constraint. They saw what worked. I saw where it was headed.

I made the case for the browser. Then I built the front-end from scratch: modular namespaced JS framework, full SCSS design system, information architecture across one of the most complex recruiting platforms in the world. Rolling dev, staging, and production servers meant the platform never stopped running while I built the layer it now runs on.

That was twelve years ago. The rest of the industry went browser-based. The platform still runs inside organizations I can't name, but you'd recognize them. I still work alongside the person who wrote the original software. [Encore](/infrastructure/encore/) is what it looks like when the call holds.

---

This site has the same problem in miniature.

The first complete draft read as marketing copy. Abstract concepts announced before any real situation was established. Every sentence made sense. None of them sounded like a person. The voice protocol that governs the site now exists because that first draft failed: it looked professional and said nothing.

I used AI tools extensively to build this site. Not to generate ideas: to think out loud into something with unlimited working memory. The ideas are mine. The bandwidth to organize them all at once isn't something any human brain can do alone. I mark the moments something clicks as they happen. That's what [Savepoint Syntax](/governance/savepoint-syntax/) is for. Later, I mine the full archive — thousands of sessions, years of thinking — for specific moments and real language. The tools assemble what they find, under rules I set for how the work speaks and what passes. They're specifically prevented from inventing anything. If it can't trace back to something I actually said or decided, it doesn't ship. The site you're reading is what that process produced.

The [Savepoint Syntax](/governance/savepoint-syntax/) went through three versions. The first version reproduced the exact loss it was built to prevent. Three attempts before a markup language for tracking cognitive turning points actually held a turning point through a session handoff.

The pattern across all of these is the same gap. The [Formwork Protocol](/governance/formwork-protocol/) exists because I watched contributors contradict decisions that lived in my head instead of in the project. The photography direction for Aiden Jae exists because a generic template grid was quietly destroying premium positioning. The browser migration for Encore exists because a healthy platform was running on a surface about to become obsolete.

In each case, the work was good. The people involved were capable. And something was going wrong that nobody in the room could see.

The way I read a project has layers to it. First the group: what is this thing supposed to feel like for everyone who touches it? Then each persona within that group: what does the end user need versus what does the developer working on it need? Then individual accommodation: where is this specific person going to get lost, confused, or shut out? You work from the general to the specific, and the structure has to hold at every level.

> "If the structure peeks out, it didn't do its job."

When the structure works, nobody notices it. They just feel like the thing makes sense. The jewelry customer sees quality without reading a word about sourcing. The recruiter finds the right screen without thinking about information architecture. That's the goal. The experience lands before the person can name why.

A designer looks at the visual layer. An engineer looks at the technical layer. A strategist looks at the business layer. Each one does their job well. But the thing that ships still doesn't say what it was supposed to say, because the gap isn't inside anyone's job. It's between them. The jewelry was real, but the template made it look cheap. The software was sound, but the delivery layer was about to strand it. The copy was clean, but no person had actually said any of it. Nobody saw it because nobody was standing where all three disciplines connect.

I call that gap [drift](/vocabulary/#drift). It's not the same as technical debt or design debt. Debt means you know the standard and you're cutting corners. Drift is when the standard itself went invisible and nobody can point to when it happened. I've spent twenty-five years standing in that gap (design, engineering, information architecture) building the structure that keeps a project's original intent visible to everyone working on it.

> "I have to be honest, I'm not synthesizing all of this completely until now. It has been instinctual."
> — describing the practice, March 2026
