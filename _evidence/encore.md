---
layout: project
redirect_from: /infrastructure/encore/
title: "Encore"
subtitle: "Thirteen Years Building the Front End of an Enterprise Platform"
icon: cases
status: "Deployed"
context: "A Windows Forms desktop application serving executive search firms on six continents. The software was solid. The delivery layer was about to become the constraint. I made the case for the browser in 2013 and built everything the product runs on today."
faculty: ["design", "engineering", "uxia"]
thumbnail: /assets/img/Encore_devices.png
seo_keywords: ["Enterprise Architecture", "Legacy Modernization", "Design Systems", "Long-term Maintenance", "Platform Durability", "enterprise platform thirteen years", "preventing drift in long projects", "maintaining design systems over time", "AI adoption enterprise", "WCAG accessibility enterprise"]
description: "Thirteen years on one enterprise platform. I walked into a Windows Forms desktop application in 2013, argued against migrating to Silverlight, made the case for the browser, and built the entire front end from scratch. JS namespace and OOP architecture, SCSS framework and design system, mobile, accessibility, a full Material Design reskin, and the UX/UI for two additional products. Now leading AI adoption across the product suite. 1,100+ deployments, six continents. Clients include Fortune 100 companies and federal agencies."
last_modified: 2026-03-24
related:
  - /systems/formwork
  - /practice/art-department
cta:
  text: "See the methodology behind thirteen years of this"
  link: /systems/formwork
---

I arrived in 2013 through a friend from the songwriter community in Park Slope. They heard "web guy" and figured I would be useful. Thirteen years later I am still there. Good ideas get heard regardless of where they come from, and the role lets me work across domains (design, engineering, UX) and connect them the way I naturally would. Thirteen years at one place is not an accident.

What I found was a Windows Forms desktop application. Solid software built by the founder who started it in his dorm room and was still running it. Desktop-only, OS-dependent. The company was considering a migration to Silverlight, Microsoft's browser plugin framework. I argued they were moving to another doomed technology. Silverlight was proprietary, plugin-dependent, and already showing signs of decline. I made the case for platform-agnostic, standards-based browser technology: wider reach, no OS dependency, future-proof. They said yes.

Microsoft killed Silverlight two years later.

---

## What I built

I built the entire front end from scratch. Not a reskin. The foundation.

**JS namespace and OOP architecture.** The modular structure that all front-end functionality is built in. Every feature the engineering team has added since sits on the architecture I put in place.

**SCSS framework and design system.** Variables, tokens, component patterns. The design system encodes the constraints directly in the code: if a color value isn't in the variables file, it doesn't belong. If a component isn't built from the existing patterns, the code makes that visible. Constraints that enforce consistency at the point of development.

**Mobile (second screen).** Brought the platform to mobile devices. Not a responsive retrofit. A dedicated second-screen experience designed for how recruiters actually work on the move.

**Survey and Portal products.** Built the UX/UI for two additional products in the suite, extending the design system across the full product line.

**WCAG accessibility.** Led a year-long accessibility push across the platform. The initiative was driven by enterprise adoption requirements. It opened the door to clients including Fortune 100 technology companies.

**Material Design reskin.** Fully reskinned the Encore product incorporating Google's Material Design system. I chose Material for user familiarity and to simplify the design system for the engineering team. One vocabulary, shared conventions, lower cognitive load for every developer touching the front end.

**AI adoption.** Now leading the integration of Claude Code across the engineering team. I identified the right tool, figured out how to use it effectively, and I'm building the infrastructure (project governance, starter workflows, conventions) that the team will work on top of. The same pattern as 2013: identify the technology, make the case, build the foundation.

---

## The platform

Encore is a purpose-built CRM for retained executive search. 1,100+ deployments across six continents. The client base includes Fortune 100 technology companies, global financial institutions, and federal agencies. Enterprise recruiting is dense: candidate pipelines, relationship networks, business development tracking, scorecard evaluations, activity history. Every feature I built had to handle that density and stay navigable.

![Encore Max across desktop, laptop, and mobile]({{ '/assets/img/Encore_devices.png' | relative_url }}){:.image.diagram}

![Encore Max dashboard, search summary with candidate pipeline and activity tracking]({{ '/assets/img/Encore_dashboard.png' | relative_url }}){:.image.diagram}

![Syncbench, candidate shortlist view with status tracking, scorecard ratings, and pipeline stages]({{ '/assets/img/Encore_shortlist.png' | relative_url }}){:.image.diagram}

![Relativity, relationship mapping showing connections between people, companies, and board positions]({{ '/assets/img/Encore_relativity.png' | relative_url }}){:.image.diagram}

![Search detail, business development tracking with deal stages, related projects, and activity history]({{ '/assets/img/Encore_business.png' | relative_url }}){:.image.diagram}

---

## Drift

Most people who hear "thirteen years on one platform" assume the interesting part is the technology. The interesting part is drift.

Technical debt is when you know the standard and cut corners against it. Drift is different. The standard itself goes invisible over time, and nobody notices because every individual decision along the way was reasonable. Any long-lived platform faces it. Reasonable decisions stack up until the product no longer reflects any single intent. The thing a module was supposed to do stops matching what it actually does, because the intent wasn't encoded anywhere durable.

That's the structure I've spent thirteen years building and maintaining: a way to keep original intent legible through every iteration, so the thing that ships still matches the thing someone needed. Design systems, naming conventions, component patterns. Governance that lives in the codebase, not in a document someone has to remember to read.

---

## Both ends

The platform accommodates two audiences at once.

The end user gets information architecture that handles enterprise recruiting complexity without drowning the person using it. Candidate pipelines, relationship mapping, business development tracking, scorecard systems. The density is real. Making that density navigable is design work.

The development team gets internal systems that make the right thing easier to do than the wrong thing. The variables file became the shared artifact: a design system encoded in code. Naming conventions, color systems, spacing values, component patterns. The team adopted them because they made the work faster. Internal APIs and patterns that peers actually use because they remove friction.

The same operation at both ends. Read what the system receiving the work actually needs, and build structure that meets it. The end user is one system. The development team is the other. Thirteen years of that is where the [accommodation design](/research/accommodation-design/) framework comes from.

---

## The pattern

2013: The company is considering Silverlight. I see the browser as the platform. I make the case, win the argument, and build the foundation everything runs on.

2024: The company needs accessibility at enterprise scale. I lead the year-long implementation. It opens the door to the largest clients on the platform.

2026: The company is adopting AI tools. I identify Claude Code, figure out how it works, and build the infrastructure the engineering team will use.

The same move, three times across thirteen years. Identify the right technology before the rest of the organization. Make the case. Build the foundation. Then maintain it so it holds.

My father had the same problem on construction sites. He held the whole picture while fifty trades worked their piece. The picture had to survive handoffs. Everything I've built since has been an attempt to solve that: make the reasoning behind structural decisions available at the moment someone is building on top of them, not locked in one person's head.

That's the problem [SavePoint](/systems/savepoint/) addresses: preserving the turning points that explain why something is shaped the way it is. And [FormWork](/systems/formwork/) is how I coordinate that across handoffs, making sure the right context is available at the right moment so the structure holds.

Shipping version 1.0 is a year of work. The thirteen years after that, keeping the platform coherent through growth and change, is where I've learned most of what I know about how systems stay alive.
