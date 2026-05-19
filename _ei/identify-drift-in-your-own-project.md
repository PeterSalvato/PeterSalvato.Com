---
layout: post
title: "Identify Drift in Your Own Project"
date: 2026-03-09
published: true
description: "The broken windows audit."
seo_keywords: ['enterprise', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 113
depth: survival
domain: Practicum
function: SEO
seed_status: DEEP
last_modified: 2026-03-14
---

Drift doesn't announce itself. It accumulates through reasonable decisions until the project no longer matches its original intent and nobody can point to when it changed. The audit is how you find it before it compounds.

Start with the surfaces that get touched most. Open your project's stylesheet and look at the naming conventions. Are they consistent? If you established a pattern six months ago (component names, variable prefixes, selector structure), does the most recent code follow that pattern? Every deviation that isn't a deliberate, documented decision is drift. The convention went invisible and someone made a reasonable choice that contradicted it.

---

Check the documentation. When was it last updated? Does it describe the project as it exists right now, or as it existed when someone last had time to write things down? A CONVENTIONS.md that's three months stale isn't documentation. It's an artifact of past decisions that may no longer apply. If a new contributor read it today and followed it exactly, would the result be correct? If not, the document has drifted from the project, or the project has drifted from the document. Either way, the standard is no longer visible.

Check the naming. Pull up the ten most recently created files and compare them to the ten oldest. Same conventions? Same structure? Same taxonomy? Naming drift is the easiest to spot and the most telling. When someone names a file differently than the established pattern, it usually means they didn't know the pattern existed. The pattern was ambient, not explicit.

---

Check the voice. If your project has written copy (a site, documentation, a README), read the five most recent pieces against the five oldest. Does it sound like the same person? The same organization? Voice drift happens when multiple contributors write without a shared protocol, or when AI-assisted writing gradually replaces the original register with its default. The copy gets cleaner and more generic over time. Each piece is fine on its own. Together they've drifted toward a voice that belongs to nobody.

Check the architecture. Draw the dependency map from memory. Which components depend on which? What calls what? Then check it against the actual codebase. Every dependency you didn't know existed is a joint you can't inspect. On [Encore](/infrastructure/encore/), thirteen years of decisions meant the dependency map lived in my head. That worked because I was always there. It wouldn't survive my absence.

---

The broken windows principle applies: small visible drift signals larger invisible drift. A single misnamed file is a window. Three misnamed files are a pattern. The pattern means the convention has gone invisible and nobody is maintaining it. The visible drift (naming) signals the invisible drift (architectural decisions, voice, dependency structure) that's harder to find and more expensive to fix.

Run the audit quarterly. Check naming, documentation, voice, and architecture. Each one takes fifteen minutes. The drift you catch early is a correction. The drift you catch late is a rebuild.
