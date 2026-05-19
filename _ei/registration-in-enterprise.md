---
layout: post
title: "Registration in Enterprise"
date: 2026-03-09
published: true
description: "Encore: front-end + back-end + IA as independent layers."
seo_keywords: ['enterprise', 'registration', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 74
depth: making
domain: Design practice
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---

[Encore](/infrastructure/encore/) is a recruitment platform serving some of the largest organizations in the world. When I walked in, it was a Windows Forms application. Desktop-only, OS-dependent. The software underneath was solid, built by the person who started it in his dorm room and was still running it. The delivery layer was the constraint.

I made the case for the browser. Then I built the front-end from scratch. The platform never stopped running while I built the layer it now runs on.

---

The registration architecture on Encore has three layers: the back-end logic, the front-end presentation, and the information architecture. Each one built independently. Each one maintained on its own timeline. The product only works when the three layers register.

The back-end handles data, business rules, search algorithms, the decades of recruiting logic that makes the platform valuable. I didn't write it. The person who did is still there. That layer has its own integrity, its own evolution, its own logic.

The front-end handles what the user sees and touches. A modular namespaced JS framework. A full SCSS design system. Rolling dev, staging, and production servers so changes deploy without downtime. I built this layer from scratch. It has its own architecture, its own naming conventions, its own dependency structure.

The information architecture handles how a recruiter navigates a platform this complex. Where do you put a candidate pipeline? How does a search assignment flow into a shortlist? How does a relationship map display connections between people, companies, and board positions? This layer governs the user's experience. It has its own logic independent of how the data is stored or how the interface is coded.

---

Registration in enterprise means these three layers produce one coherent experience for the recruiter. The back-end returns the right data. The front-end displays it in a way that respects the recruiter's workflow. The IA ensures the path through the product matches how recruiters actually think about their work. If any layer misregisters, the recruiter feels it. The data is correct but the display contradicts the workflow. The workflow is smooth but the data structure fights the display. The interface is beautiful but the recruiter can't find what they need.

Twelve years on one platform is where you learn what registration costs. The front-end and back-end evolve at different speeds. The IA has to bridge both. Every time the back-end adds a capability, the front-end has to present it without disrupting the recruiter's existing patterns. Every time I update the design system, the information architecture has to hold across the change. The layers are independent in construction and interdependent in experience.

---

That interdependence is what makes the twelve-year tenure significant. A new developer could build any single layer well. The hard part is knowing how the layers interact over time: which front-end decisions affect the IA, which IA patterns depend on back-end data structures, which changes cascade and which are contained. That knowledge is institutional memory. It lives in the joints between the layers.

The rest of the industry went browser-based. The call held. The platform still runs inside organizations I can't name. That's fidelity across three independently maintained layers, holding registration for thirteen years.
