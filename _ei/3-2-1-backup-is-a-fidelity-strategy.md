---
layout: post
title: "3-2-1 Backup Is a Fidelity Strategy"
date: 2026-03-30
published: true
description: "Three copies, two media types, one offsite. The same principle that governs brand consistency."
seo_keywords: ['backup', 'fidelity', 'governance', 'homelab', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 77
depth: reading
domain: Operational methodology + Design practice
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

3-2-1 backup is a simple rule. Three copies of everything. Two different media types. One copy offsite. If any single point fails, the data survives.

I run a home server. Five drives, multiple services, a family of four depending on it for media, files, cloud storage. The backup strategy is 3-2-1. Primary data on one drive. Mirror on a second drive. Different format on a third. The data exists in three places because any single place can fail.

This is a fidelity strategy in the engineering sense. The system's job is to make sure the thing that exists today still exists tomorrow, unchanged and recoverable. Fidelity to the original across time and across failures.

The structural parallel to brand governance is direct. A brand identity exists in multiple instances. The website, the social media, the packaging, the email templates, the pitch deck. Each instance is a "copy" of the brand. If only one instance exists (the designer's head) and that person leaves, the brand is at risk. If the brand lives in a documented system, with assets, with guidelines, with templates, it survives the departure.

Two media types means the copies aren't all vulnerable to the same failure. An external drive and an internal drive fail for different reasons. If both copies are on the same RAID array and the controller dies, both copies are gone. In brand terms, if every instance of the identity lives in one tool (one Figma file, one Google Drive folder), a single account compromise takes everything.

One offsite means you survive catastrophic local failure. A fire, a flood, a ransomware attack. In brand terms, offsite means the brand documentation exists somewhere the day-to-day team can't accidentally corrupt it. A locked master file that nobody edits directly. The source of truth that's separate from the working copies.

The same structure applies to AI context preservation. SavePoint exists because context evaporates between sessions. Each savepoint is a copy of a crystallized thought. The conversation export is the primary. The savepoint tag in the conversation is a second copy in a searchable format. If I had time to implement it, a third copy would live in a separate index. Three copies, two formats, because the thought that disappears was the thought I needed most.

The underlying principle is the same whether you're protecting family photos, brand identity, or AI session context. Anything that exists in only one place is one failure away from not existing at all. The 3-2-1 rule is governance against that failure. Simple, structural, and it works because it assumes things will break.
