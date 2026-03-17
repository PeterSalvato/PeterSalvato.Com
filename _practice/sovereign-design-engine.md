---
layout: project
redirect_from: /infrastructure/sovereign-design-engine/
practice_group: meditations
title: "Sovereign Design Engine"
subtitle: "Headless Design Pipeline for Print-Ready Output"
icon: construction
status: "In Development"
published: false
context: "The content lives in one environment and the design tool lives on another machine. Every time I need to produce something physical, I leave the place where the content was built and manually lay out what I already have structured as data."
faculty: ["design", "engineering"]
seo_keywords: ["Print Production Pipeline", "CSS Paged Media", "Headless Design", "Local-First Design Tools", "Print-Ready PDF", "Design Engineering"]
description: "Headless, code-driven design pipeline. Source images and metadata in, print-ready PDFs out. No Adobe, local-first, offline-capable. Powers Photogeography posters, Versograms prints, and Deep Cuts book spreads."
last_modified: 2026-03-01
related:
  - /practice/pressworks
  - /evidence/encore
cta:
  text: "See PressWorks"
  link: /practice/pressworks
---

![Versograms poster rendered by the Sovereign Design Engine: per-song display font, AI-generated imagery, 4-column lyrics, metadata sidebar]({{ '/assets/img/SDE_versogram_poster.png' | relative_url }}){:.image.artifact}

---

The production problem is always the same: the content lives in one environment and the design tool lives on another machine. Every time I need to produce something physical, I leave the place where the content was built, open a different application, and manually lay out what I already have structured as data. Proprietary files, no version control, no scripting.

I have projects that need to become physical objects: a photography archive as tabloid posters, a song lyric series as prints, a book on DJ methodology as bound spreads. The physical artifact is the point. The Engine is the crate I reach into: a personal repertoire of templates, type scales, and production constraints that I know well enough to assemble quickly for any new piece.

> "My design aesthetic is decidedly print-focused and gritty, off-register. When doing print or graphics I can mimic this perfectly, but I want to come up with a way to do it for the web."
> (the problem that produced both the Engine and [PressWorks](/practice/pressworks/), April 2025)

The production tool for this is InDesign. I don't own it. And even when I did, every layout variant was a manual file. I prefer to keep out of Adobe as much as possible.

---

So I built a headless pipeline. Source images and JSON manifests go in. Print-ready documents come out. Templates define layout as HTML and CSS. Manifests carry the data: a photograph's EXIF data becomes coordinates, lens, timestamp, aspect ratio. A Genius API call becomes lyrics split across four columns. A markdown file becomes chapter content distributed across verso and recto pages. Paged.js polyfills CSS Paged Media into paginated documents with crop marks and bleeds. Vite serves the templates with hot reload for rapid iteration.

The core design constraint: every CSS value resolves to a fixed measurement. Inches for layout, points for type. Print production doesn't tolerate ambiguity. The type scale is phi-derived (base 7pt, ratio 1.618). The spacing scale follows the same ratio from a quarter-inch base.

---

Three template types run through the engine now. [Photogeography](/practice/photogeography/) produces 11x17 tabloid posters with EXIF-driven metadata: GPS coordinates, camera, date, aspect ratio classification. [Versograms](/practice/versograms/) produces 8.5x11 posters with per-song display fonts, AI-generated imagery, and lyrics split into balanced columns. Deep Cuts (a book in progress on DJ methodology) produces 6x9 book spreads with facing pages and margin notes.

Each template reads a JSON manifest. Each manifest can override CSS custom properties for per-piece adjustments. Every design is a text file in Git. Every build is deterministic: same manifest, same template, same output. The pipeline runs entirely offline, on my own hardware, with no subscription and no cloud dependency.

The visual treatment (halftone screening, plate separation, registration offset) comes from [PressWorks](/practice/pressworks/), which models plate-by-plate production as composable shell operations. The Engine handles layout and data. PressWorks handles ink. Between them, a photograph's EXIF data becomes a tabloid poster and a song's lyrics become a collectible print, and the entire chain from source to print-ready PDF runs in the terminal.
