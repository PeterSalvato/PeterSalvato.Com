---
layout: post
title: "Designing a Closed Symbolic Language"
date: 2026-03-09
published: true
description: "Eight geometric glyphs, each mapped to a creative domain. The set is closed. No ninth symbol. How a fixed vocabulary forces precision in classification."
seo_keywords: ['brand', 'constraint', 'governance', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 1
sequence: 34
depth: making
domain: Design practice
function: Positioning
seed_status: DEEP
last_modified: 2026-03-14
---

I needed a way to classify everything I work across. Design, code, narrative, photography, systems thinking, physical fabrication. Eight domains, maybe nine depending on how you count. The question was how to represent them so I could see what was active in a project at a glance.

So I designed a set of glyphs. Eight symbols, each mapped to a domain. A filled triangle for systems and strategy. A square for design and typography. A hexagon for code. And so on. Simple geometric shapes, monoline, all Unicode-safe so they render in a terminal, a markdown file, or a printed page.

Then I closed the set.

That was the design decision. Eight glyphs. No ninth. No tenth when a new interest shows up. No "miscellaneous" catch-all. The vocabulary is fixed. If something new enters my practice, it has to map onto the existing symbols or be expressed as a combination of them. There is no escape hatch.

## Why close it

Open symbol systems grow until they stop meaning anything. Every organization that has built an internal icon library knows this. You start with twelve clean icons. Someone needs a thirteenth. Then a fourteenth. By icon forty-seven, half of them overlap and nobody remembers what distinguishes the cloud-with-arrow from the cloud-with-line. The set loses its grammar. It becomes decoration.

A closed set forces precision. When I can't mint a new glyph, I have to decide what a project actually is in terms of the domains I already defined. That decision is the point. A project that uses code and narrative gets ⬣▼. A project that uses craft and design gets ◆■. The combination IS the classification. Two symbols next to each other carry more information than one custom symbol ever would, because I already know what each piece means.

This is the same constraint that makes musical keys work. Twelve notes. You don't get a thirteenth when the melody doesn't resolve. You find the resolution inside the set.

## How they combine

The glyphs appear in two places. In project frontmatter, they tag which domains are active: `glyphs: "▲ ■ ⬣"` tells me this is a systems/design/engineering project. In Codex strings (a notation system I built on top of the glyphs), they trace which domains activated in which order across project phases. The same glyph can appear twice in a Codex string, in different phases, meaning the domain re-engaged after other work happened between.

The compositional logic matters. ▲■ (systems then design) is a different project than ■▲ (design then systems). Sequence encodes process. The combination records what happened, not just what was involved.

## The impulse behind it

I've been building classification systems since I was a kid. In the 90s it was folder structures and mix tape labeling. In design school it was grid systems and typographic hierarchies. The impulse is always the same: take something sprawling and give it structure that reveals what you're looking at.

The glyph system came out of a period where I was studying alchemical symbols and occult iconography. I wanted shapes that felt weighted, not decorative. The aesthetic direction was something like industrialized occult: shapes rooted in sigil traditions, but with uniform line weights like they were machined. Dieselpunk, not fantasy.

I drew from demonic sigils, alchemical notation, and geometric classification systems. Then I stripped the ornamentation until what remained were pure geometric primitives. Triangles, squares, hexagons. Clean enough to work at 12 pixels. Dense enough to carry meaning at poster scale.

## The filtering

This is the part of my work that makes certain people lean forward and other people leave. That is by design.

Someone who sees a set of geometric glyphs classifying creative domains and thinks "who does this?" is having exactly the right reaction. Either they think it's interesting enough to keep reading, or they think it's strange and move on. Both outcomes are correct. The glyphs are a sorting mechanism for attention. They signal that the person behind this work thinks in systems, takes symbolic structure seriously, and builds tools for their own practice rather than adopting someone else's.

I know how it reads from the outside. Building a closed symbolic language for your own creative process sounds self-important. I built it anyway, because the alternative was continuing to work across eight domains with no shared vocabulary between them. The glyphs gave me a language for seeing my own work. That they also filter the audience is a side effect I decided to keep.

## The craft of it

Every glyph had to pass the same test: does it read at 12 pixels in a sidebar, and does it hold weight as a standalone mark at display size? That is a typography problem. Letterforms face the same constraint. A lowercase 'a' has to work at 6pt in body copy and at 200pt on a poster. The glyphs are letterforms for a language with eight words.

The set has been stable for over a year now. I have not needed a ninth glyph. The constraint has not limited what I can classify. It has sharpened how I think about what I'm doing. Every project, every piece of writing, every system I build passes through the same eight-symbol filter. The vocabulary is small, but the combinations give me more resolution than a larger set of standalone symbols ever would.
