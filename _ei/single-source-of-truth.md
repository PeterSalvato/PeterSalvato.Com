---
layout: post
title: "Single Source of Truth"
date: 2026-03-19
published: true
description: "48 planning documents. Many contradicting each other. I couldn't tell what was current. The consolidation took a full session and most of my confidence."
seo_keywords: ["single source of truth", "documentation governance", "planning document sprawl", "design system variables", "SCSS governance", "Peter Salvato", "design engineering", "how to organize project documentation", "keeping docs current"]
series: "engineering-intent"
seed_status: DEEP
last_modified: 2026-03-19
---

I had 48 planning documents. They'd accumulated over eight weeks. Each one was correct when it was written. A homepage design vision from January. A site overhaul plan from March. A promotion calendar. A pitch strategy. A seven-day workplan. A weekend schedule. An engagement network map. A full-year topic bank. Forty-eight files in one directory, each one a snapshot of what I was thinking on the day I wrote it.

The problem surfaced when I tried to figure out what to do next. The promotion calendar said to post LinkedIn carousels five times a week. A later document said social media was scrapped. The MH sequence doc said Chapter 1 was blocking everything. Chapter 1 was already published. The pitch strategy said send the KC Davis pitch Friday. A later conversation concluded the pitch should wait until the body of work was deeper. Three different documents referenced three different chapter counts for the same series.

I sat there trying to reconcile them and I couldn't tell what was current. The January homepage vision and last night's thesis reframe were sitting in the same directory with equal weight. I lost confidence in the plan because there was no plan. There were 48 plans, and the effort of figuring out which parts of which documents were still governing was larger than the effort of starting over.

So I consolidated. One document. Everything that was still alive went in. Everything that was completed, superseded, or dead got flagged for archive. The rule going forward: update this doc. Do not create new planning docs. The moment a second planning document exists, the consolidation is broken.

That took a full session. It took reading every document, comparing contradictions, making decisions about what was actually current, and letting go of plans I'd invested in but that no longer applied. The cost of 48 documents wasn't the disk space. It was the cognitive overhead of not knowing which version of my own thinking to trust.

---

The principle underneath that mess is old. When you have two sources of truth, you have zero sources of truth. The information exists in both places. The question of which one is current exists in neither.

I'd known this for years in code. At Encore, the SCSS variables file is the single source of truth for every visual constant. Colors, type scale, spacing, border radius. If a value isn't in that file, it doesn't belong in the product. An engineer who needs a new shade of blue can't hardcode it. They have to add it to the variables file, name it inside the existing convention, and justify its existence within the system. The single source creates friction at the point of deviation, which is exactly where you want friction.

The variables file held through twelve years and three ownership changes. New engineers came in, saw the system, and followed it because the system was legible. The governance was in the code, at the point of development, where the decisions get made. When someone deviated, the deviation was visible. The structure made it hard to break the rules without knowing you were breaking them.

I knew all of this and still let 48 planning documents pile up on my own project. Knowing the principle and enforcing it are different activities, and the gap between them is where systems break.

---

For this site, `_data/connections.yml` is the single source of truth for every relationship between pages. Seventy-seven pages and 352 connections, all defined in one file. The pathfinding system reads from it. The connection cards read from it. If a connection exists, it's in that file. If it's not in that file, it doesn't exist.

CLAUDE.md is the single source of truth for every session that works on this project. Conventions, current state, architectural decisions, enforcement rules. Every new session reads it before doing anything. The alternative would be re-explaining the project in every conversation, and conversations are where conventions drift. You explain it slightly differently each time. The model interprets slightly differently. Within a few sessions the conventions have shifted without anyone noticing.

These work because they're maintained. The connections file gets updated when a new page is added. CLAUDE.md gets updated when a decision changes. The consolidated plan gets updated when a threshold is met. The maintenance is the governance. The moment any of these goes stale, people (or models) start working from their own understanding instead of the source, and the understandings diverge silently.

---

The hardest part of single source enforcement is the maintenance. The natural tendency is to jot something down wherever is convenient and update the authoritative location later. Later means never. Or it means after enough drift has accumulated that reconciling becomes its own project, which is exactly what happened with the 48 planning documents.

The fix is always the same. One file. One location. Everything else references it. Change it there, the change propagates. Change it anywhere else, it doesn't count. The friction of going to the source instead of jotting it down locally is the price of not having to reconcile later.

I think about the SCSS variables file at Encore. Twelve years. Hundreds of engineers. The file held because the governance was structural: you couldn't build the wrong thing without the code telling you something was off. And I think about the planning directory on my own project. Eight weeks. One person. Forty-eight files. The governance was absent because I was the only one working on it and I trusted myself to remember which document was current. I couldn't. Nobody can. The principle applies to teams and it applies to individuals and it applies especially to individuals whose working memory is a constraint they've been accommodating their entire career.
