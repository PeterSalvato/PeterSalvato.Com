---
layout: post
title: "Why I Self-Host Everything"
date: 2026-03-09
published: true
description: "Homelab as sovereignty. The same impulse that built the Sovereign Design Engine, applied to the household."
seo_keywords: ['ai', 'governance', 'constraint', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 125
depth: room
domain: Personal/domestic
function: Positioning
last_modified: 2026-03-14
---
Jellyfin for media. Nextcloud for cloud storage. qBittorrent through a VPN container. A dashboard with Docker socket access. A cooking mentor agent backed by FAISS and PostgreSQL. All on my own hardware. No subscriptions beyond the internet connection and the electricity.

I described this infrastructure in a post about [sovereignty](/blog/self-hosting-as-sovereignty/), but the version I want to tell here is simpler. It's the same impulse as the knife roll.

My father was a general superintendent on construction sites in New York. The trades carried their own tools. Not because the site didn't have tools. Because the trade's tools were calibrated to the trade's hand. You carry what's yours. You maintain it. You know where every piece is because you packed the roll yourself.

The homelab is a tool roll. Jellyfin means the family's media library doesn't depend on which streaming service decides to remove something this month. Nextcloud means our files don't live on someone else's server under someone else's terms. The cooking agent means the AI that holds my kitchen knowledge runs on my hardware, under governance I wrote, without sending my family's dietary constraints to a third-party API.

The maintenance is real. When a Docker container fails at 11 PM, there's no support ticket. When a drive starts throwing errors, I'm the one migrating data to the backup. Three mirrors across three drives, because a backup strategy is a fidelity strategy. The maintenance cost is what sovereignty actually costs. Managed services abstract that cost away and replace it with a different cost: dependency on decisions you didn't make, about data you can't inspect, under terms you didn't write.

The Sovereign Design Engine follows the same logic. I needed to produce print-ready documents without InDesign. So I built a headless pipeline: CSS Paged Media for page geometry, Python for data extraction, Paged.js for pagination. Same manifest, same template, same output every time. Deterministic, offline, no subscription, no cloud dependency. The type scale is phi-derived. The spacing scale follows the same ratio. Every CSS value resolves to a fixed measurement in inches or points. Print production doesn't tolerate ambiguity.

I think about this the same way I think about the kitchen. I could buy store-bought gluten-free bread. It would be easier. The bread would be adequate. And I'd be dependent on a product I can't control: when they change the recipe, when they discontinue it, when the price doubles. Instead, I learned the flour science and I bake my own. The constraint (gluten-free, from scratch, without a baking background) forced the engineering. The engineering produced sovereignty over a meal that used to depend on someone else's supply chain.

The homelab, the design engine, the kitchen. Same operation. Accept the constraint. Build the capability. Own the output.
