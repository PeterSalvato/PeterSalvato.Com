---
layout: post
redirect_from:
  - /blog/persona-extraction/
title: "Lens Extraction"
published: true
order: 2
icon: edit_note
description: "\"Act as Vignelli\" gives you a caricature. Extracting evaluative frameworks from bodies of work gives you testable diagnostic lenses. The difference matters."
seo_keywords: ["lens extraction", "AI evaluation", "creative evaluation framework", "FormWork", "LensArray", "design critique", "evaluative lenses", "Peter Salvato", "act as expert prompt problems", "AI persona prompting doesn't work", "better AI evaluation", "multi-perspective AI review", "design critique framework"]
related:
  - /practice/lens-extraction
  - /systems/lensarray
  - /practice/accommodation-design
---

At SVA, the critique room worked like this. You hang your work. Your peers and teachers sit around you. Everyone evaluates in good faith, from their own perspective, trying to make the work the best the room can make it. Where they agree, you have a strong signal. Where they disagree, you have a decision to make. The accumulated decisions are yours. The work that comes out belongs to you, not to any single voice in the room.

That room is hard to reconstruct outside of school. In practice, most evaluation collapses to one perspective: the maker's own instinct, one mentor's preference, one client's taste. And one perspective produces imitation. You follow a single influence and the result looks derivative.

I needed a way to build that room and fill it with people whose judgment I trust, but codified so I could run it any time. Their evaluative instinct, extracted and testable.

## The "act as" problem

Everyone using AI for creative evaluation has tried some version of this. "Act as Massimo Vignelli and evaluate my grid." "Pretend you're Dieter Rams and critique this interface." "What would Paula Scher think of this layout?"

The results are shallow. Vignelli becomes "use Helvetica and grids." Rams becomes "less is more." Scher becomes "make the type bigger." These are caricatures built from what's most commonly written about these people online, the surface-level consensus instead of the diagnostic habits underneath the visible decisions.

The problem is how "act as" works. When you tell an AI to "act as" someone, it retrieves associations from training data. For well-known practitioners, those associations cluster around the most-repeated facts and the most-cited quotes. Vignelli's actual discipline around typographic hierarchy, his specific rules about when a grid should flex and when it should hold, his intolerance for arbitrary decoration that doesn't serve communication: none of that survives the compression. You get the Wikipedia version of a practitioner, not the practitioner.

## Extraction instead of imitation

When I was building the Vignelli lens, I kept finding the same question underneath his visible decisions. In interviews, in his writing about the New York subway map, across decades of his projects: does the change make the hierarchy legible at distance, or only close up? He wasn't stating a style preference. He was running a diagnostic. Once I saw it that way, as a diagnostic habit rather than an aesthetic, I could figure out how to extract it.

Four steps. The order matters.

**Study the output.** The work itself, and enough of it to see the pattern underneath the surface variation. Read their books, look at their projects across decades, listen to how they talk about other people's work. That reveals more than how they talk about their own.

**Extract the framework.** What questions does this person consistently ask? What do they always notice first? What do they never tolerate? Vignelli didn't just "use grids." He asked specific questions about typographic restraint, color economy, and whether structural limitation was producing clarity or just constraint. Those questions are extractable if you study enough of the work.

**Codify as testable criteria.** Turn the extracted questions into specific checks that produce clear verdicts when applied to real work. "Does the type system use deliberate limitation to produce clarity?" is evaluable. "Is this Vignelli-like?" is not. Each criterion needs to return a verdict when you run it against a real project.

**Validate against their known work.** Run the criteria against work the original practitioner produced or praised. If your Vignelli lens doesn't confirm what Vignelli actually built, the extraction is wrong. You built a costume, not a diagnostic tool.

## What the lenses actually look like

Each lens exists because the project needed a specific evaluative capability and I identified the practitioner whose body of work is the best available source for extracting it. Selection by diagnostic need, the same way a creative director staffs a team by matching specific expertise to specific project requirements.

Two examples from my working system.

### The Millman Lens: "Is this person real?"

I needed an authenticity diagnostic. Does this portfolio read as a real person with real stakes, or a professional template? Debbie Millman's body of work is the best source I found for extracting that specific framework. Her interviews consistently surface the same questions about vulnerability, personal narrative, and the gap between stated identity and demonstrated identity. Five criteria:

**M1. What can only this person do?** Is positioning genuinely distinct, or could you swap in twenty other names? Look for specifics that anchor identity to actual history. Red flag: positioning that describes a category, not a person.

**M2. Does vulnerability match authority?** Are failures and what broke shown alongside what worked? Is difficulty demonstrated through iterations and breakage, or just claimed? Red flag: only polished success stories. When I first ran this criterion against my own infrastructure pages, M2 flagged immediately: the FormWork page described the process as though it arrived fully formed. There was no iteration, no breakage. The difficulty was claimed but the wreckage wasn't shown.

**M3. Best-day self or a character?** Does the voice sound like a real person with real stakes, or like a brand strategy document? Is there a gap between the stated philosophy and how the thing actually reads?

**M4. Does the constellation tell a life-arc story?** Can you see one person's specific obsessions producing all of this? Is there a visible throughline from earliest work to most recent?

**M5. Where is the courage?** Evidence of risk-taking: projects started before knowing they'd succeed, work made public while still developing, unconventional approaches that don't have a safety net.

Each criterion produces a verdict: STRONG, HOLDS, WEAK, or BROKEN. When I run this against a portfolio page, I get specific findings per criterion, not a general "this feels authentic." That specificity is the whole point. "M2 WEAK: difficulty claimed but not shown. The copy says 'complex problem' twice without describing what actually broke" is actionable. "This doesn't feel authentic enough" is not.

Authenticity is one axis. But a page can read as completely real and still be a mess. The second lens I needed evaluates something the first one ignores entirely: is the design system doing structural work, or just looking orderly?

### The Vignelli Lens: "Is the restraint producing clarity?"

I needed a restraint diagnostic. Is the design system producing clarity through limitation, or just following convention? Vignelli's body of work is the clearest source for extracting that framework. His specific intolerance for arbitrary decoration and his insistence that structural limitation should produce order, not just constraint. Five criteria:

**V1. Does the type system use deliberate limitation?** Minimal font choices with reasons traceable to function. Red flag: typefaces chosen for variety.

**V2. Is the grid earning its keep?** The structure should create order the viewer can feel without naming. Red flag: a grid present but not doing compositional work.

**V3. Is color serving communication?** Every color choice traceable to content, hierarchy, or identity. Red flag: decorative color that could be swapped without losing meaning.

**V4. Is decoration justified by function?** Remove anything that doesn't carry information or structure. Red flag: ornament added for visual interest.

**V5. Does structural limitation produce coherence?** Across the whole project, do the constraints read as intentional? The test: disciplined, or ran out of ideas?

The reader has already seen how criteria work from the Millman block, so I'll let one verdict carry the Vignelli demonstration. "V2 HOLDS: the grid creates consistent rhythm across pages, but the sidebar column isn't doing compositional work on short-content pages. It holds space without organizing anything." That finding tells me exactly where the joint is loose. "Nice grid" doesn't.

## Where it gets interesting: convergence

One lens, one perspective. Multiple lenses, and you get what the critique room gave me at SVA. People who disagree, specifically, for reasons they can articulate.

When the Millman lens says STRONG on a page and the Vignelli lens says WEAK, that's information. It means the page reads as authentic and vulnerable (Millman's criteria) but the design isn't earning its restraint (Vignelli's criteria). Those two things can both be true simultaneously, and the tension between them is where the actual decision lives. I can lean into the raw personal directness at the expense of visual discipline, or tighten the design system knowing it might polish away some of the roughness that makes the page feel real. That tension doesn't resolve on its own. I have to decide which value wins.

That's a genuine creative decision, surfaced by structure. Two specific, codified perspectives that disagree on a specific element for articulable reasons.

A convergence skill maps these patterns across all lenses. Where five or more lenses agree: high-confidence signal, act on it. Where lenses disagree: decision point, and the system articulates what's at stake in each direction. The choices I make at those decision points, accumulated across dozens of them, produce work that couldn't have come from following any single influence.

## Why this matters beyond this site

I developed this against my own site as a working laboratory, but the architecture is medium-independent. A restaurant could have a structural layer staffed with service design practitioners and a narrative layer staffed with practitioners whose dining rooms have a feeling you remember. The layers change depending on the medium. The process holds: study the output, extract the framework, codify as testable criteria, validate against known work. Anyone can build their own room and staff it with the people whose judgment they trust.

I looked for someone else doing this specific thing: extracting evaluative frameworks from real practitioners' bodies of work into testable, codified diagnostic lenses that run independently and surface their disagreements as decision points. If it exists and I missed it, I'd genuinely like to know. This is how I approached it.
