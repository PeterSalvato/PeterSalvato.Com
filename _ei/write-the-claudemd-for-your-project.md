---
layout: post
title: "Write the CLAUDE.md for Your Project"
date: 2026-03-30
published: true
description: "The document your AI tool reads before every conversation. Here's how to write one that works."
seo_keywords: ['CLAUDE.md', 'AI governance', 'practicum', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 98
depth: making
domain: AI implementation + Operational methodology
function: Practicum
seed_status: DEEP
last_modified: 2026-03-30
---

A CLAUDE.md is the document your AI tool reads before every interaction. It's the IEP for your project. Here's how to write one that actually governs.

**Start with what the tool needs to know, not what you want to say.** Most CLAUDE.md files open with a project description written for a human. The AI doesn't need a pitch. It needs constraints, conventions, and context. What tech stack. What naming conventions. What files matter. What to never do.

**Section 1: What this project is.** Two sentences. "Jekyll site deployed to GitHub Pages. Portfolio for a design engineer." The AI needs to know the material, not the vision.

**Section 2: Technical constraints.** The non-negotiable rules. File structure. Naming conventions. Build commands. Things that will break if the AI guesses wrong. Be specific. "OOCSS: `.object.modifier` not BEM" is useful. "Follow best practices" is not.

**Section 3: What to never do.** This section prevents the failures you've already seen. "Never fabricate biographical details." "Never use em dashes." "Never add dependencies without asking." Each rule is a scar from a specific failure. If you haven't had failures yet, this section will be short. It grows.

**Section 4: Current state.** What's being worked on right now. What's broken. What's in progress. This section changes the most. Update it when the project changes direction.

**What to leave out:** Aspirational statements. Long-term vision. Philosophical framing. The AI doesn't need to believe in your project. It needs to know the constraints.

**The test:** Delete any sentence that doesn't change the AI's behavior. If a sentence in your CLAUDE.md would produce the same output whether it was there or not, it's not governance. It's decoration.

**Keep it alive.** A CLAUDE.md that was written three months ago and never updated is worse than no CLAUDE.md. The tool follows outdated conventions. You get frustrated. You blame the tool. The real problem is the document. Update it when the project changes. Review it every few weeks. Kill sections that are no longer relevant.

The whole document should be readable in under two minutes. If it takes longer, you've written an essay. The AI reads it every time. Respect its context window the way you'd respect a student's working memory. Short, specific, current.
