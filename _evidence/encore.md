---
layout: project
redirect_from: /infrastructure/encore/
title: "Encore"
subtitle: "12-Year Enterprise Platform Evolution"
icon: cases
status: "Deployed"
context: "A solid Windows Forms application serving some of the largest organizations in the world. The software was good. The delivery layer was about to become the constraint."
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["Enterprise Architecture", "Legacy Modernization", "Design Systems", "Long-term Maintenance", "Platform Durability"]
description: "Twelve-year enterprise platform evolution (2013-2025). Migrated a desktop Windows Forms recruiting platform to a browser-based modular JS framework while it served some of the largest organizations in the world."
last_modified: 2026-02-21
related:
  - /systems/formwork
  - /practice/sovereign-design-engine
cta:
  text: "See the methodology behind twelve years of this"
  link: /systems/formwork
---

I arrived in 2013 through a friend from the songwriter community in Park Slope. They heard "web guy" and figured I would be useful. Twelve years later I am still there. Good ideas get heard regardless of where they come from, and the role lets me work across domains (design, engineering, UX) and connect them the way I naturally would. Twelve years at one place is not an accident.

What I found was a Windows Forms application. Desktop-only, OS-dependent. The software underneath was solid, built by the founder who started it in his dorm room a decade earlier and was still running it. The delivery layer was the constraint. I made the case for the browser: OS-agnostic, wider reach, better positioned. They said yes.

I built the front-end from scratch. A modular namespaced JS framework, a full SCSS design system, information architecture across one of the most complex recruiting platforms in the world. Rolling dev, staging, and production servers meant the platform never stopped running while I built the layer it now runs on.

The rest of the industry went browser-based. Twelve years in, the call held.

![Encore Max across desktop, laptop, and mobile]({{ '/assets/img/Encore_devices.png' | relative_url }}){:.image.diagram}

![Encore Max dashboard, search summary with candidate pipeline and activity tracking]({{ '/assets/img/Encore_dashboard.png' | relative_url }}){:.image.diagram}

![Syncbench, candidate shortlist view with status tracking, scorecard ratings, and pipeline stages]({{ '/assets/img/Encore_shortlist.png' | relative_url }}){:.image.diagram}

![Relativity, relationship mapping showing connections between people, companies, and board positions]({{ '/assets/img/Encore_relativity.png' | relative_url }}){:.image.diagram}

![Search detail, business development tracking with deal stages, related projects, and activity history]({{ '/assets/img/Encore_business.png' | relative_url }}){:.image.diagram}

---

## What twelve years actually looks like

The browser migration took about a year. After that, the real work started: keeping it clean.

A feature would start with a clear purpose. It would pass through discussions, reviews, other developers' hands, and arrive in production stripped of the thing that made it worth building. Copy-pasted code blocks. Naming conventions ignored. Modules that drifted from what they were supposed to do. The SCSS design system I built was specifically a set of constraints encoded in the code itself: if a color value wasn't in the variables file, it didn't belong. If a component wasn't built from the existing patterns, the code made that visible. Not documentation sitting in a shared drive that developers ignore. Actual constraints that enforce consistency.

Building it was a project. Keeping it clean for twelve years was the practice.

---

## Drift

Most people who hear "twelve years on one platform" assume the interesting part is the technology. The interesting part is drift.

Technical debt is when you know the standard and cut corners against it. Drift is when the standard itself goes invisible. Nobody makes a bad decision. A series of reasonable decisions accumulate into something nobody chose. The thing a module was supposed to do stops matching what it actually does, and nobody catches it because nobody remembers what it was supposed to do.

The structure I spent twelve years maintaining was specifically this: a way to keep the original intent legible through every handoff, so the thing that shipped still resembled the thing someone needed. That's governance work. Load-bearing documentation. A design system that made the right thing easier to do than the wrong thing.

---

## Both ends

I focus more on making things efficient for the dev team than on making the software more efficient. That distinction matters.

The platform accommodates the end user: information architecture that handles the complexity of enterprise recruiting without drowning the person using it. Candidate pipelines, relationship mapping, business development tracking, scorecard systems. The density is real. Making that density navigable is design work.

But the internal systems accommodate the dev team. The variables file became the artifact: a design system encoded in code. Naming conventions, color systems, spacing values, component patterns. The team adopted them because they made the work faster, not because anyone mandated them. Internal APIs, patterns that peers actually use because they remove friction.

The same operation at both ends. Read what the system receiving the work actually needs, and build structure that meets it. The end user is one system. The development team is the other. Twelve years of that is where the [accommodation design](/practice/accommodation-design/) framework comes from.

---

## The institutional memory problem

The picture of how the whole thing fit together lived in my head. When I wasn't in the room, the picture wasn't in the room. Features would ship that contradicted architecture I'd spent years maintaining, because the people shipping them didn't have the context for why the architecture was shaped that way.

My father had the same problem on construction sites. He held the whole picture while fifty trades worked their piece. When he left the site, the picture left with him. Everything I've built since has been an attempt to solve that: externalize the picture so it survives without the person who made it.

That's the problem [SavePoint](/systems/savepoint/) solves: the turning points disappear when the context closes. And that's the coordination problem [FormWork](/systems/formwork/) solves: making sure the right context is available at the right moment, so the structure holds without depending on one person's memory.

Anyone can ship version 1.0. Living with a system for twelve years, managing its evolution, its entropy, its politics, proves something a portfolio of short engagements never can.
