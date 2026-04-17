---
layout: post
title: "Scaffolding in Enterprise"
date: 2026-03-30
published: true
description: "The old system running alongside the new one. Encore's migration as a scaffolding problem."
seo_keywords: ['scaffolding', 'enterprise', 'migration', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 40
depth: making
domain: Design practice + Operational methodology
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

When I rebuilt the front end of Encore, the old system didn't disappear. It kept running. Clients were using it. The engineering team was maintaining it. Data was flowing through it. You can't tear down a building while people are living in it. You build the new structure alongside the old one, move people over piece by piece, and then take the old one down.

The old system was the scaffolding for the migration.

That sounds backward. The old system was the product. It was what we shipped, what clients used, what generated revenue. But during the migration, its role changed. It became the thing that held everything steady while we built the replacement. Every component in the old system that still worked became a surface the new system could lean on. The authentication layer, the data models, the API contracts. Those didn't change during the migration. They held still so everything above them could move.

This is what scaffolding looks like in enterprise. It's not temporary structures you build from scratch. It's existing structures that take on a temporary role. The design system I built in 2013 was the product for years. During the Material Design reskin, it became scaffolding. The old variables file, the old component patterns, the old naming conventions. They held the team steady while the new design language went in. The team could see what was changing because the scaffolding made the unchanged parts visible.

The hardest part was knowing when to take it down. Keeping the old system running alongside the new one costs something. Every day both systems run, the team maintains two codebases. Two sets of bugs. Two sets of patterns that don't quite agree with each other. The old system starts as a safety net and slowly becomes a drag. But taking it down too early means the new system has to carry load it isn't ready for.

[VERIFY: specific timeline of when the old Encore front-end was fully retired vs. when the new architecture took over. Peter would know if there was a specific cutover date or if it was gradual.]

The same pattern showed up with the SCSS framework. The old CSS was the scaffolding while the new SCSS variables and mixins went in. File by file, component by component. The old styles held the visual output steady while the underlying structure changed. When a component was fully migrated, the old CSS for that component came out. The scaffolding came down one section at a time.

Over 1,100 deployments across six continents, the product never went dark during a migration. That's what scaffolding is for. You keep the lights on while you rewire the building.
