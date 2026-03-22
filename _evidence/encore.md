---
layout: project
redirect_from: /infrastructure/encore/
title: "Encore"
subtitle: "12-Year Enterprise Platform Evolution"
icon: cases
status: "Deployed"
context: "A solid Windows Forms application serving enterprise clients under NDA. The software was good. The delivery layer was about to become the constraint."
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["Enterprise Architecture", "Legacy Modernization", "Design Systems", "Long-term Maintenance", "Platform Durability", "enterprise platform twelve years", "preventing drift in long projects", "maintaining design systems over time"]
description: "Twelve years on one platform. I walked into a Windows Forms desktop application in 2013, made the case for the browser, then built the front end from scratch: modular JS framework, full SCSS design system, information architecture across one of the most complex recruiting platforms in the industry. Three complete technology shifts. The design system encoded the standard in the code itself so it held without someone enforcing it. Enterprise clients under NDA."
last_modified: 2026-02-21
related:
  - /systems/formwork
  - /practice/art-department
cta:
  text: "See the methodology behind twelve years of this"
  link: /systems/formwork
---

I arrived in 2013 through a friend from the songwriter community in Park Slope. They heard "web guy" and figured I would be useful. Twelve years later I am still there. Good ideas get heard regardless of where they come from, and the role lets me work across domains (design, engineering, UX) and connect them the way I naturally would. Twelve years at one place is not an accident.

What I found was a Windows Forms application. Desktop-only, OS-dependent. The software underneath was solid, built by the founder who started it in his dorm room a decade earlier and was still running it. The delivery layer was the constraint. I made the case for the browser: OS-agnostic, wider reach, better positioned. They said yes.

I built the front-end from scratch. A modular namespaced JS framework, a full SCSS design system, information architecture across an enterprise recruiting platform whose clients I can't name (the company doesn't disclose them). Rolling dev, staging, and production servers meant the platform never stopped running while I built the layer it now runs on.

The rest of the industry went browser-based over the next few years. The call was right.

![Encore Max across desktop, laptop, and mobile]({{ '/assets/img/Encore_devices.png' | relative_url }}){:.image.diagram}

![Encore Max dashboard, search summary with candidate pipeline and activity tracking]({{ '/assets/img/Encore_dashboard.png' | relative_url }}){:.image.diagram}

![Syncbench, candidate shortlist view with status tracking, scorecard ratings, and pipeline stages]({{ '/assets/img/Encore_shortlist.png' | relative_url }}){:.image.diagram}

![Relativity, relationship mapping showing connections between people, companies, and board positions]({{ '/assets/img/Encore_relativity.png' | relative_url }}){:.image.diagram}

![Search detail, business development tracking with deal stages, related projects, and activity history]({{ '/assets/img/Encore_business.png' | relative_url }}){:.image.diagram}

---

## What twelve years actually looks like

The browser migration took about a year. After that, the real work started: making the platform scale without losing coherence.

Enterprise recruiting is dense. A single search touches candidate pipelines, relationship networks, business development tracking, scorecard evaluations, activity history. Every feature I built had to handle that density and stay navigable. The SCSS design system encodes the constraints directly in the code: if a color value isn't in the variables file, it doesn't belong. If a component isn't built from the existing patterns, the code makes that visible. Constraints that enforce consistency at the point of development, so the platform stays coherent as it grows.

Building it took about a year. Keeping it coherent for twelve years is where most of the actual work has been.

---

## Drift

Most people who hear "twelve years on one platform" assume the interesting part is the technology. The interesting part is drift.

Technical debt is when you know the standard and cut corners against it. Drift is different. The standard itself goes invisible over time, and nobody notices because every individual decision along the way was reasonable. Any long-lived platform faces it. Reasonable decisions stack up until the product no longer reflects any single intent. The thing a module was supposed to do stops matching what it actually does, because the intent wasn't encoded anywhere durable.

That's the structure I've spent twelve years building and maintaining: a way to keep original intent legible through every iteration, so the thing that ships still matches the thing someone needed. Design systems, naming conventions, component patterns. Governance that lives in the codebase, not in a document someone has to remember to read.

---

## Both ends

The platform accommodates two audiences at once.

The end user gets information architecture that handles enterprise recruiting complexity without drowning the person using it. Candidate pipelines, relationship mapping, business development tracking, scorecard systems. The density is real. Making that density navigable is design work.

The development team gets internal systems that make the right thing easier to do than the wrong thing. The variables file became the shared artifact: a design system encoded in code. Naming conventions, color systems, spacing values, component patterns. The team adopted them because they made the work faster. Internal APIs and patterns that peers actually use because they remove friction.

The same operation at both ends. Read what the system receiving the work actually needs, and build structure that meets it. The end user is one system. The development team is the other. Twelve years of that is where the [accommodation design](/research/accommodation-design/) framework comes from.

---

## The whole picture

Any complex platform has the same problem: the picture of how the whole thing fits together is larger than any one person's view of it. Features touch architecture that was shaped by decisions made years earlier, and the reasoning behind those decisions needs to be available at the moment someone is building on top of them.

My father had the same problem on construction sites. He held the whole picture while fifty trades worked their piece. The picture had to survive handoffs. Everything I've built since has been an attempt to solve that: make the reasoning behind structural decisions available at the moment someone is building on top of them, not locked in one person's head.

That's the problem [SavePoint](/systems/savepoint/) addresses: preserving the turning points that explain why something is shaped the way it is. And [FormWork](/systems/formwork/) is how I coordinate that across handoffs, making sure the right context is available at the right moment so the structure holds.

Shipping version 1.0 is a year of work. The twelve years after that, keeping the platform coherent through growth and change, is where I've learned most of what I know about how systems stay alive.
