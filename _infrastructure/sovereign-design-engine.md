---
layout: project
title: "Sovereign Design Engine"
subtitle: "Headless Design Pipeline for Print-Ready Output"
icon: engineering
altitude: "02"
status: "Active"
context: "The content lives in one environment and the design tool lives on another machine. Every time I need to produce something physical, I leave the place where the content was built and manually lay out what I already have structured as data."
drift: "The production tool is InDesign on a different machine. Every time I need to produce something, I leave the environment where the content was built, open a different application, and manually lay out what I already have structured as data. No version control, no scripting, every variant a manual file."
scaffold: "A headless pipeline: source images and JSON manifests in, print-ready output out. CSS Paged Media for page geometry. Python for data extraction. Every design is a text file in Git. Every CSS value resolves to a fixed measurement in inches or points."
fidelity: "Three template types running: 11x17 tabloid posters from photograph metadata, 8.5x11 music posters with per-song typography, 6x9 book spreads from markdown. Deterministic, offline, no subscription."
faculty: ["design", "engineering"]
seo_keywords: ["Print Production Pipeline", "CSS Paged Media", "Headless Design", "Local-First Design Tools", "Print-Ready PDF", "Design Engineering"]
description: "Headless, code-driven design pipeline. Source images and metadata in, print-ready PDFs out. No Adobe, local-first, offline-capable. Powers Photogeography posters, Versagrams prints, and Deep Cuts book spreads."
last_modified: 2026-03-01
related:
  - /infrastructure/pressworks
  - /infrastructure/encore
cta:
  text: "See PressWorks"
  link: /infrastructure/pressworks
glyphs: "■ ⬣"
codex: "/Æ/#|●⬣||■⬣|||⬣⟩[infrastructure.sovereign-design-engine]/"
---

The production problem is always the same: the content lives in one environment and the design tool lives on another machine. Every time I need to produce something physical, I leave the place where the content was built, open a different application, and manually lay out what I already have structured as data. Proprietary files, no version control, no scripting.

I have projects that need to become physical objects: a photography archive as tabloid posters, a song lyric series as prints, a book on DJ methodology as bound spreads. The physical artifact is the point. The Engine is the crate I reach into: a personal repertoire of templates, type scales, and production constraints that I know well enough to assemble quickly for any new piece.

> "My design aesthetic is decidedly print-focused and gritty, off-register. When doing print or graphics I can mimic this perfectly, but I want to come up with a way to do it for the web."
> — the problem that produced both the Engine and [PressWorks](/infrastructure/pressworks/), April 2025

The production tool for this is InDesign. I don't own it. And even when I did, every layout variant was a manual file. I prefer to keep out of Adobe as much as possible.

---

So I built a headless pipeline. Source images and JSON manifests go in. Print-ready documents come out. Templates define layout as HTML and CSS. Manifests carry the data: a photograph's EXIF data becomes coordinates, lens, timestamp, aspect ratio. A Genius API call becomes lyrics split across four columns. A markdown file becomes chapter content distributed across verso and recto pages. Paged.js polyfills CSS Paged Media into paginated documents with crop marks and bleeds. Vite serves the templates with hot reload for rapid iteration.

The core design constraint: every CSS value resolves to a fixed measurement. Inches for layout, points for type. Print production doesn't tolerate ambiguity. The type scale is phi-derived (base 7pt, ratio 1.618). The spacing scale follows the same ratio from a quarter-inch base. Templates inherit both, so visual relationships stay consistent across different page sizes.

---

Three template types run through the engine now. Photogeography produces 11x17 tabloid posters with EXIF-driven metadata: GPS coordinates, camera, date, aspect ratio classification. Versagrams produces 8.5x11 posters with per-song display fonts, AI-generated imagery, and lyrics split into balanced columns. The Deep Cuts (a book in progress on DJ methodology) produces 6x9 book spreads with facing pages and margin notes.

![Versagrams poster rendered by the Sovereign Design Engine: per-song display font, AI-generated imagery, 4-column lyrics, metadata sidebar]({{ '/assets/img/SDE_versagram_poster.png' | relative_url }}){:.image.artifact}

Each template reads a JSON manifest. Each manifest can override CSS custom properties for per-piece adjustments. Every design is a text file in Git. Every build is deterministic: same manifest, same template, same output. The pipeline runs entirely offline, on my own hardware, with no subscription and no cloud dependency.

The visual treatment (halftone screening, plate separation, registration offset) comes from [PressWorks](/infrastructure/pressworks/), a terminal-native press that models plate-by-plate production as composable shell operations. The Engine handles layout and data. The press handles ink.
