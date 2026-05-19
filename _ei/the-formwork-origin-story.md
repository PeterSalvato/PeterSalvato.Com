---
layout: post
title: "The Formwork Origin Story"
date: 2026-03-09
published: true
description: "SVA critique room to thirteen years of scar tissue to the protocol."
seo_keywords: ['enterprise', 'governance', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 67
depth: room
domain: Design practice
function: Positioning
seed_status: SEEDED
last_modified: 2026-03-14
---

At SVA, the critique room was the center of the education. You hang your work at the front of the room. James Victore, Kevin O'Callaghan, the other faculty and your peers sit around you. Everyone evaluates in good faith, trying to make the work the best the room can make it. Multiple perspectives at once. Where they agree, strong signal. Where they disagree, a decision to make. The accumulated decisions are yours.

That room is hard to reconstruct outside of school. In practice, most evaluation collapses to one perspective: your own instinct, one mentor's preference, one client's taste. One perspective produces imitation. Multiple perspectives without structure produces noise. The SVA critique room had structure: each person bringing their own evaluative framework, the convergence surfacing where they aligned and where they diverged.

---

Then thirteen years on the [Encore](/infrastructure/encore/) platform. Building and maintaining a front-end across three technology shifts, serving some of the largest recruiting organizations in the world. Twelve years of scar tissue. I learned what institutional memory actually costs. I watched decisions made in my head get contradicted by contributors who couldn't see the reasoning. I watched conventions drift when the conventions were ambient instead of explicit. I watched copy that I knew was wrong pass every individual quality check because no single check was looking at the whole picture.

The failures had the same shape every time. Good people, good work, and something going wrong in the joints between the layers. The photography contradicts the platform. The voice says one thing and the code structure says another. The structural layer scores well and the identity layer is missing. Nobody sees it because nobody is standing where all the disciplines connect.

---

I started building the protocol without knowing I was building a protocol. CONVENTIONS.md files to hold institutional memory. CLAUDE.md to carry project context into AI sessions. Governance documents embedded in the repo instead of in a tool's instruction box. Each fix addressed a specific failure I'd experienced.

The first version of the site built with this approach came out clean. Second session adjusted naming conventions. Third session adjusted them again. By session five the layouts were breaking and a full teardown was required. The AI wasn't the problem. The project's decisions lived in my head, and every new context window started from zero.

Nearly a year of failed attempts, manual workarounds, and real collapses. The pattern kept exposing the same problem from new angles until the fix held. The fix was the SVA critique room, formalized as a protocol. Distinct layers of concern, each staffed with evaluative personas extracted from real practitioners, run independently, read together. Convergence mapping where they agree and disagree. The maker at every decision point.

---

The [Formwork Protocol](/governance/formwork-protocol/) isn't a theory I worked out and then applied. It's thirteen years of scar tissue from enterprise platform work, twenty years of design practice, and a year of failed governance attempts, crystallized into a system that finally held. The SVA critique room was the seed. The scar tissue was the soil. The protocol is what grew.
