---
layout: post
title: "Why I Write SCSS Instead of Using a Framework"
date: 2026-03-09
published: true
description: "Frameworks give you speed. SCSS gives you control. After twelve years maintaining one design system, I know which one survives contact with a team."
seo_keywords: ['SCSS vs framework', 'why use SCSS', 'CSS framework alternatives', 'SCSS design system', 'custom CSS vs framework', 'Tailwind vs SCSS', 'SCSS benefits', 'writing custom CSS', 'design system CSS']
series: "engineering-intent"
zone: 3
sequence: 103
depth: making
domain: Design practice
function: Positioning
last_modified: 2026-06-01
---
I write SCSS by hand. No Tailwind. No Bootstrap. No CSS-in-JS. Sixteen partial files, one import order, every token defined in `_variables.scss`, every cascade decision explicit. I've been working this way for thirteen years.

The practical reason is governance. The SCSS cascade is a decision tree. When I write `$color-blue` and that token resolves to `#3A5F85` and that value means "governance tier," the meaning is locked at the variable level. A contributor who reaches for that color inherits the decision. They don't need to know why that blue means governance. The cascade carries the reasoning. The same variable resolves in the sidebar, in the cards, in the domain index headers. The convention holds because the system enforces it.

A framework like Tailwind inverts this. The utility classes are decisions made at the element level. `bg-blue-500` on one element and `bg-blue-600` on another, and the relationship between them is implicit. Nobody chose "all governance elements use this blue." Somebody chose "this element is blue." The system can't enforce a convention it doesn't know about. The convention lives in someone's head, which means it's one contributor away from invisible.

I learned what happens when conventions go invisible. On the Encore platform, thirteen years of a contributor renaming a CSS class because the old name didn't make sense to them. The old name was part of a convention that governed how component styles stayed isolated. The rename worked. Nothing broke. Six months later, three more renames, the convention was unrecognizable, and styles were leaking across components. Each rename was reasonable. The convention went invisible because it lived in naming, not in structure.

SCSS partials solve this by making architecture visible. `_variables.scss` holds the tokens. `_typography.scss` holds the type system. `_sidebar.scss` holds the sidebar. The import order in `main.scss` is the cascade: variables load first, reset second, typography third, components after. A contributor opening `_sidebar.scss` sees where the sidebar's styles live, what tokens it uses, what rules govern it. The architecture is in the file system.

The deeper reason is sovereignty. When I write my own SCSS, I own every decision. The type scale on this site (8px to 3rem across fourteen named steps) is mine. The spacing grid (8px base, six named steps from 8px to 64px) is mine. The shadow system, the opacity tokens, the transition timing. Every value resolves to a specific measurement I chose for a specific reason. Nobody else's defaults are mixed in. No framework opinions about what a "small" gap should be.

The Sovereign Design Engine works the same way. CSS Paged Media for page geometry, every value resolving to fixed measurements in inches or points. Print production doesn't tolerate ambiguity. Neither does a design system that needs to hold across years.

I could build this site faster with Tailwind. The build would be generic. It would look like every other Tailwind site the way a Shopify template looks like every other Shopify template. The whole point of this practice is that the tool serves the intent, not the reverse. Write the system that says what you mean. Maintain the system that holds the meaning. Accept the constraint.
