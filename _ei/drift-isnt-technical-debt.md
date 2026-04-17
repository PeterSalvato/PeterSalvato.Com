---
layout: post
title: "Drift Isn't Technical Debt"
date: 2026-03-09
published: true
description: "Debt = you know the standard and cut corners."
seo_keywords: ['enterprise', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 127
depth: reading
domain: AI/governance
function: Payload
seed_status: SEEDED
last_modified: 2026-03-14
---

Technical debt has a known creditor. You know the standard. You know you're cutting corners against it. The shortcut ships because the deadline is real. The debt accrues. You pay it down later or you don't, but at every point you can articulate what you owe and to whom.

Drift is different. Drift is when the standard itself went invisible. You can't articulate what you're drifting from because the original intent was never made explicit, or it was explicit once and then stopped being maintained. Reasonable decisions accumulate into something nobody chose. Each one made sense at the time. Together they produced a result that no single person would have designed.

---

I've watched this happen on the [Encore](/infrastructure/encore/) platform across twelve years. The software itself was solid. The man who wrote it in his dorm room was still running it. Thirty years of decisions without drift, made by one person with the whole picture in his head. But the layers I built on top of it (the modular JS framework, the SCSS design system, the information architecture) were susceptible the moment someone other than me touched them.

A contributor renames a CSS class because the old name doesn't make sense to them. The old name was part of a convention that governed how component styles stayed isolated. The rename works. Nothing breaks. Six months later, three more renames have happened, the convention is unrecognizable, and styles are leaking across components in ways nobody can trace. That's drift. Each rename was reasonable. The convention went invisible. The person making the change couldn't see what they were drifting from.

Technical debt would be: I know this class should follow the naming convention, but I'm not going to rename it right now because I'm on a deadline. The standard is visible. The shortcut is conscious.

---

Drift happens to methods, not just outputs. The thinking underneath the work erodes, and then the work erodes, and nobody can point to the moment it started because there wasn't one. I built the [Savepoint Protocol](/governance/savepoint-protocol/) to address drift in thinking: mark where understanding shifted so the reasoning doesn't disappear when the session closes. I built the [Order of the Aetherwright](/governance/order-of-the-aetherwright/) to address drift in method: a daily practice that keeps the principles somatic so they survive pressure. I built the [Formwork Protocol](/governance/formwork-protocol/) to address drift in evaluation: multiple lenses testing the work against codified criteria so the standard stays visible.

Each protocol addresses a different surface where drift operates. The common move is the same: make the invisible standard explicit so it can be defended. Debt is a financial metaphor. You know what you owe. Drift is a structural metaphor. The foundation shifts, and by the time the building lists, nobody remembers where level was.

The distinction matters because the fixes are different. You pay down debt by doing the work you skipped. You prevent drift by building governance: documents, protocols, daily practices that keep the standard visible. The CONVENTIONS.md, the CLAUDE.md, the voice protocol. These aren't nice-to-haves. They're the structures that prevent invisible erosion.
