---
layout: post
title: "Why I Self-Host Everything"
date: 2026-03-09
published: true
description: "I run my own media server, cloud storage, VPN, and AI tools on hardware I own. Not because it's easier. Because I don't want to rent my infrastructure."
seo_keywords: ['why self-host', 'self-hosting benefits', 'self-hosted services', 'self-hosting vs cloud', 'homelab', 'self-hosted alternatives', 'local-first', 'sovereign infrastructure', 'self-host media server']
series: "engineering-intent"
zone: 3
sequence: 107
depth: room
domain: Personal/domestic
function: Positioning
seed_status: DEEP
last_modified: 2026-06-01
---

I run Jellyfin for media, Nextcloud for cloud storage, qBittorrent through a VPN container, a dashboard with Docker socket access, and a cooking mentor agent backed by FAISS and PostgreSQL. All of it on my own hardware. No subscriptions beyond the internet connection and the electricity.

The impulse is the same one that built the [Sovereign Design Engine](/infrastructure/sovereign-design-engine/): I'd rather own the constraint than rent the convenience.

---

The Sovereign Design Engine exists because I needed to produce print-ready documents without InDesign. CSS Paged Media for page geometry, Python for data extraction, Paged.js for pagination, everything running offline on my own hardware. Same manifest, same template, same output every time. Deterministic, local, no subscription, no cloud dependency.

Self-hosting the household infrastructure follows the same logic. Jellyfin means the family's media library doesn't depend on which streaming service decides to remove something this month. Nextcloud means our files don't live on someone else's server under someone else's terms. The cooking agent means the AI that holds my kitchen knowledge runs on my hardware, under my governance, without sending my family's dietary constraints to a third-party API.

Each service I self-host is a constraint I've chosen. I maintain the hardware. I handle the updates. I run the backups (three mirrors across three drives, because a backup strategy is a fidelity strategy). The trade is maintenance for sovereignty. The convenience of a managed service comes with a dependency I can't inspect and a terms of service I didn't write.

---

This isn't philosophical. The homelab runs on a concrete principle: the same input produces the same output every time. Deterministic, inspectable, under my control. The Sovereign Design Engine runs the same way. The [Formwork Protocol](/governance/formwork-protocol/) runs the same way. Same inputs, same evaluative lenses, same governance, same results. The infrastructure I'm willing to depend on is the infrastructure I can read, maintain, and fix when it breaks.

The constraint is real. When a Docker container fails at 11 PM, there's no support ticket. When a drive starts throwing errors, I'm the one migrating data to the backup. The maintenance cost is what sovereignty actually costs. Managed services abstract that cost away and replace it with a different cost: dependency on someone else's decisions about your data, your access, and your continuity.

---

I think about this the same way I think about the kitchen. I could buy store-bought gluten-free bread. It would be easier. The bread would be adequate. And I'd be dependent on a product I can't control: when they change the recipe, when they discontinue it, when the price doubles. Instead, I learned the flour science and I bake my own. The constraint (gluten-free, from scratch, without a baking background) forced the engineering. The engineering produced sovereignty over a meal that used to depend on someone else's supply chain.

Self-hosting is the infrastructure version of the same move. Accept the constraint. Build the capability. Own the output.
