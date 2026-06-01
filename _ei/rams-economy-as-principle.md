---
layout: post
title: "Rams: Economy as Principle"
date: 2026-03-09
published: true
description: "Dieter Rams's tenth principle as an evaluation lens. Remove an element: if nothing changes, it was decoration. If the system breaks, it was load-bearing."
seo_keywords: ['design-history', 'constraint', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 56
depth: reading
domain: Design history
function: Payload
seed_status: DEEP
last_modified: 2026-03-14
---

Dieter Rams's tenth principle: as little design as possible. Everything that remains must earn its place. If you remove an element and nothing changes, it shouldn't have been there. If you remove it and the system breaks, it was load-bearing. The test is subtraction, not addition.

That principle becomes an evaluation lens in the [Formwork Protocol](/governance/formwork-protocol/). When I evaluate a page on this site, the Rams lens asks: does every element earn its place? Is the spacing doing work or just filling space? Is the color serving function or mood? Is the typography creating hierarchy or just following convention?

---

Economy as principle means every design decision is a structural claim. A margin is a statement about how much breathing room this content needs to be processed. A typeface is a statement about the register of this communication. A color is functional: this site uses a three-color domain system where each color signals which content categories (governance, infrastructure, output) is foregrounded on each page.

When everything earns its place, removal is the diagnostic. I test pages by asking what would break if I took each element away. If the section divider disappears and the content still reads in the right order, the divider was decoration. If the heading disappears and the reader loses their position in the hierarchy, the heading was load-bearing.

---

Rams's economy pulls against expressiveness. A page that follows Rams strictly can feel austere. It can satisfy every economy check (nothing superfluous, everything functional) and still fail the identity test (does this feel like a specific person made it?). That's why the Formwork Protocol runs multiple lenses. Rams checks economy. Lubalin checks whether the typography is an idea. Victore checks whether the maker is visible in the craft. The tensions between them are where the decisions live.

On this site, the economy principle shows up in the SCSS architecture. Every CSS value resolves to a specific measurement. The type scale is phi-derived. The spacing scale follows the same ratio. No arbitrary values. Every visual relationship traces to a governing principle. That's Rams applied to code: if a value doesn't derive from the system, it doesn't belong in the system.

---

The economy principle extends beyond visual design. A CLAUDE.md file that contains irrelevant information wastes context window capacity the same way a decorative element wastes visual space. A skill architecture where a component does two things violates economy the same way a UI element that serves two functions does. Every element, in every system, earns its place or gets removed.

Constraint is the creative fuel. When you can't add, you have to choose. When everything must earn its place, every decision becomes specific. Rams didn't produce minimal work because he liked minimal aesthetics. He produced minimal work because economy forced every remaining element to carry full structural weight. That's the standard worth extracting.
