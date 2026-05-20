---
layout: post
title: "Print to Digital"
date: 2026-03-30
published: true
description: "The pica ruler disappeared. The operation it measured didn't."
seo_keywords: ['print', 'digital', 'transfer', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 59
depth: making
domain: Design practice + Design history
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

In a print shop, you think in physical units. Picas, points, inches. A pica ruler is a real object you hold in your hand. You measure the space between a headline and the body copy. You measure the margins. You measure the column width. The ruler tells you if the spacing is correct and you can feel when it's wrong before you measure it because you've been looking at type long enough.

I came up in print shops. USA Tees in Brooklyn, Atlas Embroidery in Fort Lauderdale. Screenprinting, not offset, but the spatial thinking is the same. You're working with physical materials on a physical surface. The ink is real. The mesh has a thread count. The squeegee has a durometer. When you pull a stroke, you feel the resistance. The variables are tangible.

CSS has no resistance. There's no squeegee. There's no mesh count. The units are pixels and rems and percentages. The surface is a browser window that changes size depending on who's looking at it. Nothing is fixed. Everything responds.

But the operation is the same. You're still making decisions about hierarchy. Which thing is most important. How much space separates one element from the next. What rhythm the page has when you scan it. Whether the typography creates a clear reading order or makes the eye wander.

I kind of viewed HTML, CSS, and JavaScript as a similar abstraction. HTML is the bones. JavaScript is the muscles. CSS is the outfit. It's not one to one but the metaphor held well enough to transfer my print instincts into digital materials.

The design system I built for Encore was print thinking applied to a browser. A variables file that governed every color, every spacing value, every type size. That's the digital equivalent of a spec sheet. In print, the spec sheet says: body copy is 10/14 Garamond, headlines are 24pt Futura Bold, margins are 3 picas. In the SCSS framework, the variables file says the same thing in a different language. Change the variable and every instance changes. The constraint is centralized. The execution is distributed.

Color separation in screenprinting means breaking an image into individual color layers. Each layer gets its own screen. Each screen prints one color. The registration holds them together. Component architecture in front-end code works the same way. Each component is a separate layer. Each one does one thing. The design system holds them in alignment. When a new developer builds a component that doesn't reference the design system, it's the same as pulling a screen that's out of register. The output has a ghost.

The pica ruler is gone, but the type scale it measured carried over. The squeegee is gone, but the question of how much pressure to apply to a given surface carried over too. The physical tools left. The operations they performed transferred into new materials and kept working.

That's what transfer looks like in practice. The understanding a tool gives you outlasts the tool itself, and it works in materials the tool never touched.
