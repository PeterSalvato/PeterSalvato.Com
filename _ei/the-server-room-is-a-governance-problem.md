---
layout: post
title: "The Server Room Is a Governance Problem"
date: 2026-03-09
published: true
description: "Homelab as governance laboratory."
seo_keywords: ['ai', 'governance', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 86
depth: making
domain: Personal/domestic
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---
I run a homelab. A self-hosted infrastructure in a closet. Docker containers running media servers, backup systems, cloud storage, a VPN, a cooking AI, a dashboard, and the development environments for every project I work on.

It sounds like a hobby. It is a governance laboratory.

Every service is a governance decision. Where does it run? What resources does it consume? How does it authenticate? What happens when it fails? What depends on it? The answers change as services multiply, and the documentation has to keep pace or the infrastructure becomes opaque to anyone who touches it, including me in three months.

The CONVENTIONS.md file at the root of the homelab is institutional memory. Every infrastructure decision, every drive assignment, every service configuration, every known issue. The document has a freshness protocol: critical systems get verified every seven days, services every fourteen, documentation every thirty. If a section goes stale, the next session stops and verifies before proceeding. The protocol exists because I watched documentation drift kill project clarity in enterprise work and I was not going to let it kill my own infrastructure.

Backup integrity is a fidelity problem. I maintain three copies of everything critical. Different drives, different media, different physical locations within the same space. The 3-2-1 backup strategy follows the same fidelity logic I apply to brand systems: how many copies survive, and is there enough redundancy that a single failure doesn't take the original with it?

Drive mapping is a registration problem. Device letters change between reboots. A drive that was `/dev/sdb` yesterday might be `/dev/sdc` today. The mount points are fixed labels, but the underlying assignments shift. If I'm not checking the map before running a destructive operation, I could wipe the wrong drive. The same principle operates in any system where identifiers can drift: design tokens that get renamed, CSS classes that get reused, brand assets that get filed in the wrong folder.

Container orchestration is a decomposition problem. Each service runs in its own container. Separation of concerns. The media server doesn't know about the backup system. The VPN doesn't know about the dashboard. They communicate through defined interfaces (ports, volumes, environment variables). When something breaks, I can isolate the failure to one container without the whole stack going down.

The homelab has the same failure modes as every other system I work on. Configuration drift: a setting gets changed and the documentation doesn't update. Dependency creep: services become entangled in ways the architecture didn't anticipate. Documentation decay: the map stops matching the territory. Permission confusion: files owned by the wrong user because of a prior sudo session.

These are small problems. On a single machine in a closet, the stakes are low. But the patterns are identical to the patterns that erode brand systems, enterprise platforms, and team operations. The server room is where I practice governance at low cost and high iteration speed.

When someone asks why I self-host instead of using cloud services, the honest answer is sovereignty plus practice. I own the data. I own the decisions. I understand every layer of the stack. And every governance challenge the homelab presents is a rep. The principles are the same ones that hold a twelve-year enterprise platform together, a brand system that survives handoff, a blog that sounds like the same person across two hundred posts.

The server room is a closet with four drives and a power strip. The governance problems it gives me are the same ones I've been solving in every other room for twenty-five years.
