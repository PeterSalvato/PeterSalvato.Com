---
layout: post
title: "Attunement in Code: Reading the Dev Team"
date: 2026-03-15
published: true
description: "Tooling is attunement."
seo_keywords: ['attunement', 'dev team', 'CSS architecture', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 2
sequence: 67
depth: reading
domain: Software
function: Positioning
seed_status: CAPTURED
last_modified: 2026-03-15
---

Two buttons on the same page, styled by two different engineers. One had 2px border-radius. The other had 4px. One used the brand blue from the design spec. The other used a hex value that was close, pulled from a screenshot. Side by side, they looked like buttons from two different products.

This was Encore. Twelve years of codebase. I saw the pattern repeating across every surface: components that were almost right but missing the baseline. A card with 16px padding next to a card with 20px. A heading that was semibold in one view and medium in another. None of it was wrong enough to file a bug. All of it was wrong enough to erode the product.

The engineers weren't bad at their jobs. They were making visual judgment calls the system should have absorbed. Every time someone needed to style a component, they opened the design file, squinted at the spacing, picked a value that looked close, and moved on. Multiply that by forty engineers over three years and you get a codebase where nothing quite matches.

I could have corrected each instance. Reviewed every pull request, flagged every misaligned value, written documentation about spacing scales and color tokens. That approach fails at scale. It treats the symptom (incorrect output) instead of the cause (the system asking humans for decisions they aren't equipped to make).

So I built the vocabulary into the code.

`.button` is a button. `.button.outline` is an outline button. `.button.chevron` is a chevron button. The class names connected to the semantic map already in the engineers' heads. They think "outline button," the class handles the visual decisions. Border width, border-radius, color, hover state, focus ring. All governed. The engineer picks the right word. The system produces the right result.

This is the same principle I use everywhere, applied to a specific audience. You don't train engineers to be designers. You build the system so they don't have to be. The governance absorbs the skill they don't have. It works the same way a well-built IEP works: you don't ask the student to become someone different. You build the structure that meets them where they already are.

The key move is reading the team before you build anything. What do they know? CSS selectors, yes. Component composition, yes. The difference between 14px and 16px line-height at a glance? No. The relationship between a 4px and 8px spacing unit? Not reliably. Those are visual skills developed through years of practice the engineers never had reason to do.

Once you see what they can and can't do, the architecture becomes obvious. Semantic class names that map to their existing vocabulary. A spacing scale baked into utility classes so nobody picks arbitrary values. Color tokens referenced by name, not hex. Every abstraction is a judgment call removed from the individual and absorbed by the system.

This is also how you prevent drift. Drift happens when a system asks humans for judgment calls it should handle. Every arbitrary value an engineer types is a small divergence. Over months, those divergences compound into a codebase that looks like it was built by forty different companies. The semantic system doesn't prevent drift by enforcing rules. It prevents drift by eliminating the decisions that cause it.

The right abstraction, the right class name, the right component API. These are acts of reading. You observe the team the way you'd observe a classroom. Then you build the structure that makes their output correct, even when their instincts aren't.
