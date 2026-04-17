---
layout: post
title: "The Aetherwright as Designed Object"
date: 2026-03-09
published: true
description: "Not esoteric practice but design work."
seo_keywords: ['brand', 'branding as formalization', 'constraint', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 1
sequence: 35
depth: making
domain: Design practice
function: Positioning
seed_status: DEEP
last_modified: 2026-03-14
---

There's a radial wheel on this site. Eight filled geometric shapes arranged around a center dot. If you've browsed a few pages, you've seen the glyphs in the sidebar, in project metadata, in codex strings that look like compressed notation. You probably didn't know what they meant. That's fine. I want to talk about how they were built.

The Order of the Aetherwright is a symbolic system I designed to classify my own creative practice. Glyphs, tiers, codex strings, rituals, a visual identity. It sounds like worldbuilding for a tabletop game. It functions like a typeface: a closed set of forms with compositional rules, designed to work at multiple scales, consistent across every context where it appears.

I want to treat it as a designed object here. The craft decisions, not the symbolism.

## A closed set

Eight domain glyphs. Triangle up, triangle down, arrows, square, diamond, hexagons. Plus a circle for input (which is not a domain). All filled Unicode characters, all terminal-compatible. The set is closed. I will never add a ninth glyph.

That constraint was the first real design decision. Open taxonomies grow until they collapse. Every project management tool I've used eventually drowns in its own tag system because nothing stops you from adding one more category. Closing the set forced a different kind of precision: instead of inventing a new glyph when something didn't fit, I had to decide which existing domain actually governed the work. The constraint produces clarity the way a fixed grid produces better layouts. You stop negotiating with the container and start working inside it.

The glyphs had to be geometric, filled, and visually balanced at small sizes. They had to render in a terminal, in a markdown file, in print, on a phone screen. No custom icon font required (though I've sketched one). The Unicode constraint meant every glyph needed to survive without a design tool. Copy, paste, done. That portability is a design decision about where the system lives: everywhere, not just in polished contexts.

## The codex as notation

The codex strings are the part that looks most like I've lost the plot:

```
/Æ/#|●▼||▲◆|||▶⬣⟩⟩[projects.versograms.cherubrock]/
```

Read left to right, that's a project's entire creative arc compressed into one line. Input and narrative research in Phase 1. Systems and craft in Phase 2. Illustration and code in Phase 3. Completed, released. When a glyph appears in two different phases, it means the domain re-engaged at a different altitude. Sketching in Phase 1 and vector refinement in Phase 3 are both illustration, but they're doing different work.

The design problem here was notation, not symbolism. I needed something that could encode temporal sequence, domain activation, phase boundaries, and terminal state in a single string. It had to be readable by a human scanning a margin and parseable by a script scanning metadata. The phase markers (`|`, `||`, `|||`) solve the sequence problem. The terminal symbols (`⟩⟩` for released, `~` for ongoing, `×` for aborted) solve the state problem. The dot-delimited path at the end solves the identity problem.

Musical notation does the same thing: encodes pitch, duration, dynamics, and articulation in a compact visual grammar. The codex isn't music. But the design problem is the same. How do you compress a temporal process into a spatial artifact that someone can read later?

## Branding as formalization

I grew up in consumerist America in the eighties and nineties and studied graphic design at SVA. Branding is how my brain makes something real enough to maintain. The logo makes it official. The mark makes it a commitment. I brand everything: side projects, internal tools, a symbolic order for my own creative governance. I know how that reads.

But the impulse is functional. Naming the system, giving it a mark, defining a visual language, writing rules for usage: those are the same moves I'd make for a client's brand system. The difference is the client is me, and the brand is the method underneath thirty years of work. The formalization is what made the method visible. Before it had a name and a mark, it was instinct. After, it was something I could point to, teach, and defend.

The sigil itself went through the same design process as any mark. Started from alchemical and occult references (Peter Salvato grew up Sicilian in Brooklyn; the mystical streak is inherited, not borrowed). Iterated toward something that reads as "industrialized occult," where the shapes carry the weight of old symbology but the lines are machined and modern. The AE ligature at the center is the only letterform. Everything else is geometric.

## The filtering function

This is the strangest thing on the site. A symbolic order with tiers (Initiate, Practitioner, Aetherwright, Steward), a daily ritual, a codex notation system, glyphs classifying every artifact in the portfolio. For some visitors, this is where the credibility collapses. For others, it's where the site gets interesting.

That split is the design intent. The system filters the audience the way a difficult typeface filters readers. People who lean into the strangeness, who want to understand why someone would build a closed symbolic language for their own creative practice, are the people I want to talk to. The ones who need everything to look like a SaaS landing page were never going to hire me anyway.

Building it felt embarrassingly serious. I've said that before, and I mean it every time. But the embarrassment is part of the signal. Taking something this strange this seriously, with this much craft, is the proof that the work underneath is real. The designed object is the evidence.
