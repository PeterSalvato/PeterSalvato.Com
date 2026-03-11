---
layout: context
title: "How I Think"
permalink: /thinking/
description: "The practice starts with one question: what does the system receiving this actually need? From a self-contained classroom in Brooklyn to enterprise platforms to AI governance. The material changes. The person on the other end doesn't."
seo_keywords: ["design engineering", "design methodology", "cross-domain architecture", "compiled portfolio", "SVA", "visual communication", "provenance"]
last_modified: 2026-03-02
faq: true
faq_items:
  - question: "How does Peter Salvato approach a project?"
    answer: "The first question is always: what does the system receiving this work actually need? Not what the client needs from the system, but what the system needs to do the job. That question applies to a student in a classroom, a user on a platform, and an AI processing a prompt. Once you know the answer, every decision about design, engineering, brand, and platform gets tested against it."
  - question: "What makes Peter Salvato's approach different?"
    answer: "Most projects are split across departments (a designer, an engineer, a brand strategist) who each do good work that doesn't add up. Peter works professionally across all three domains, so he can see when the photography contradicts the platform architecture, or the brand voice says one thing and the code structure says another."
  - question: "How does Peter Salvato integrate design and engineering?"
    answer: "They aren't separate disciplines layered on top of each other. In Aiden-Jae, photography direction and Shopify architecture were built as one system. In Encore, the SCSS design system and JS framework evolved together over twelve years. The integration isn't coordination between departments. It's one person working through each domain."
---

A kid in my classroom hears "solve for the missing number, show your work, and explain your reasoning" and starts working on the first part. The rest is gone. Three tasks disguised as one, given to a system that can't process them whole.

You learn to decompose. One objective at a time. One visible result before the next step. Temporary scaffolding that comes off when the competence is solid. Twelve students means twelve different processing profiles, twelve different definitions of progress. The structure has to hold at every level.

That's the practice. The material changes. The person on the other end doesn't.

---

My wife knew exactly what separated her jewelry from mass-market product. The quality was real.

Then you'd land on her Shopify store. Same grid as every other template. Same hierarchy. Same assumptions. A ring from a premier manufacturer sat in that grid the same size as a $15 drop-shipped piece. The detail work disappeared. The quality was invisible.

She didn't see it. She knew what the product was, so the screen looked fine to her. But a stranger landing on that page would feel something was off before they could name it. The template put every product in the same box. I saw it because I could read the code and the photograph at the same time. What showed up on screen contradicted what the product actually was.

I built [Aiden Jae](/evidence/aiden-jae/) as one integrated system: brand identity, photography direction, Shopify architecture, packaging. The code respects the photograph instead of overriding it. When a customer sees the actual texture of recycled gold under honest light, they're seeing the cost structure, the sourcing story, and the production standard without reading a word. She runs the business. The quality comes through the screen because the platform was built to show it.

---

In 2013, I walked into a company and found a Windows Forms application. Desktop-only. OS-dependent. The software was genuinely good: thirty years of decisions without drift, made by the person who wrote it in his dorm room and had been running it ever since. It served some of the largest recruiting organizations in the world.

The software was healthy. The surface it ran on was the problem. Desktop-only meant the platform couldn't follow its users into a world that was going browser-based. The delivery layer was about to close it off from everywhere the market was heading. The people running it were too close to the software to see the constraint. They saw what worked. I saw where it was headed.

I made the case for the browser. Then I built the front-end from scratch: modular namespaced JS framework, full SCSS design system, information architecture across one of the most complex recruiting platforms in the world. Rolling dev, staging, and production servers meant the platform never stopped running while I built the layer it now runs on.

That was twelve years ago. The rest of the industry went browser-based. The platform still runs inside organizations I can't name, but you'd recognize them. I still work alongside the person who wrote the original software. [Encore](/evidence/encore/) is twelve years of proof the call was right.

---

This site has the same problem in miniature.

The first complete draft read as marketing copy. Abstract concepts announced before any real situation was established. Every sentence made sense. None of them sounded like a person. The voice protocol that governs the site now exists because that first draft failed: it looked professional and said nothing.

I used AI tools extensively to build this site. I think out loud into something with unlimited working memory. The ideas are mine. The bandwidth to organize them all at once isn't something any human brain can do alone. I mark the moments something clicks as they happen. That's what [Savepoint Syntax](/systems/savepoint/) is for. Later, I mine the full archive (thousands of sessions, years of thinking) for specific moments and real language. The tools assemble what they find, under rules I set for how the work speaks and what passes. They're specifically prevented from inventing anything. If it can't trace back to something I actually said or decided, it doesn't ship. The site you're reading is what that process produced.

The [Savepoint Syntax](/systems/savepoint/) went through three versions. The first version reproduced the exact loss it was built to prevent. Three attempts before a markup language for tracking cognitive turning points actually held a turning point through a session handoff.

The pattern across all of these is the same question. What does the system receiving this work actually need? The founder needed a platform that showed quality instead of flattening it. The enterprise software needed a delivery layer that could follow its users. The AI needed tasks decomposed to match its processing constraints. In each case, the people closest to the work couldn't see the problem because they were designing for what they needed the system to do. The question that changed every one of those situations was the same: what does the system receiving this actually need?

The way I read a project has layers to it. First the group: what is this thing supposed to feel like for everyone who touches it? Then each persona within that group: what does the end user need versus what does the developer working on it need? Then individual accommodation: where is this specific person going to get lost, confused, or shut out? You work from the general to the specific, and the structure has to hold at every level.

> "If the structure peeks out, it didn't do its job."

When the structure works, nobody notices it. They just feel like the thing makes sense. The jewelry customer sees quality without reading a word about sourcing. The recruiter finds the right screen without thinking about information architecture. That's the goal. The experience lands before the person can name why.

A designer looks at the visual layer. An engineer looks at the technical layer. A strategist looks at the business layer. Each one does their job well. But the thing that ships still doesn't say what it was supposed to say, because nobody asked what the system receiving the work actually needed. The jewelry was real, but the template couldn't show it. The software was sound, but the delivery layer was about to strand it. The copy was clean, but no person had actually said any of it.

That erosion is what I call [drift](/vocabulary/#drift). It's not the same as technical debt or design debt. Debt means you know the standard and you're cutting corners. Drift is when the standard itself went invisible and nobody can point to when it happened. I've spent twenty-five years building the structure that keeps a project's original intent visible to everyone working on it. The [Formwork](/systems/formwork/) process exists because that structure has to survive handoff, distance, and time.

> "I have to be honest, I'm not synthesizing all of this completely until now. It has been instinctual."
> — describing the practice, March 2026
