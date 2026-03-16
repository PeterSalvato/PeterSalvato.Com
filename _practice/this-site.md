---
layout: context
title: "This Site"
permalink: /practice/this-site/
redirect_from:
  - /colophon/
  - /evidence/colophon/
  - /evidence/this-site/
description: "How this site was compiled by hand from a three-year corpus using the tools described on it. The build log for a craftsman's workbench made of AI tools."
seo_keywords: ["compiled portfolio", "AI governance", "FormWork", "savepoint syntax", "voice protocol", "hand compilation AI", "craftsman AI tools"]
last_modified: 2026-03-13
related:
  - /systems/formwork
  - /systems/savepoint
  - /systems/lensarray
  - /practice/accommodation-design
faq: true
faq_items:
  - question: "How was petersalvato.com built?"
    answer: "The site was compiled from the pour: three years of unstructured conversation transcripts, voice notes, and thinking out loud. FormWork's first accommodation removes friction on input so the raw material carries the maker's actual voice. Then SavePoint preserves context, LensArray evaluates, and the voice protocol verifies. AI tools serve as the compiler. The source code is the maker's own thinking."
  - question: "What tools were used to build this site?"
    answer: "Jekyll 4.4.1 with custom SCSS, hosted on GitHub Pages. Build tools include ChatGPT for exploratory thinking, Gemini for planning, and Claude Code for engineering. Visual treatments produced by PressWorks. The governance infrastructure was assembled over nearly a year before the current tools existed."
  - question: "What is the difference between compilation and generation?"
    answer: "Generation uses AI as the author and the human as the editor. Compilation uses the human as the source material and AI as the toolchain. The source code is the maker's own thinking, decisions, and voice. The tools mine, evaluate, and assemble that material under rules the maker sets."
---

The first complete draft came out of an AI session that ran clean. Good structure, clear hierarchy, reasonable copy. Session two adjusted the naming conventions. Session three adjusted them again. By session five the layouts were breaking, the taxonomy had been renamed twice, and a full teardown was required to get back to the decisions I had actually made. The AI was not the problem. The project's decisions lived in my head, and every new context window started from zero.

That cycle broke the first year of this build open. Nearly a year of failed governance attempts before the tools held. What came out of it became the process the site now runs on, and the process the site describes.

---

## The workbench

I use AI every day. I also built the governance layer that keeps the human visible inside it.

Every page on this site was compiled from three years of my conversations: over 60,000 documents of thinking out loud into AI tools, mined by the skills described here, evaluated against lenses extracted from real practitioners, assembled under voice rules derived from how I actually talk in unguarded sessions.

That corpus is the pour. In FormWork, the first accommodation is aimed at the human: get the thinking out of your head with as little friction as possible. Talk, dictate, answer questions. No requirement to structure or perform. Three years of that produced the source material everything else operates on. That rawness matters. It carries my actual voice, my actual thinking, the way I actually connect ideas. The tools that follow can only preserve what the pour already contains.

This is compilation, not generation. Most people use AI as a generator: prompt in, content out. The AI is the author and the human is the editor. I use it as a compiler. I am the source code: decisions, instincts, working knowledge accumulated across conversations. The system mines, evaluates, and assembles that material into output. The AI is the toolchain. You don't say gcc wrote the program.

The workbench is built from AI tools the way a woodworker builds a bench from hand tools. The compilation is crafted. The voice is honed. The structure is shaped by hand. What stays human: every architectural decision, every editorial judgment, every voice calibration, every convergence call when the evaluation lenses disagree.

---

## How the governance was built

The first attempt at governance was manual: copy-pasting context between ChatGPT threads. Dozens of overlapping conversations, each prefixed and numbered, decisions from one thread invisible to the next. I would end a session by asking for a savepoint summary, copy it, paste it into the next thread to reconstruct my headspace. It worked until it didn't. The pasted context was a snapshot, and it went stale the moment the next thread moved forward.

> "We wind up with these marathon sessions and your memory limitations cause us to lose things. There's a lot of overlap between conversations so I want the date and timestamp to be when the decision was made so that we can track as they grow and change by traversing all the documents."
> From the session where the Savepoint Syntax was born, March 2025

So I tried embedding governance in the tool itself. ChatGPT's project instruction box: rules for how to respond, what syntax to use, what to check before answering. I wrote instruction sets, rewrote them, versioned them (v1.1, v2.2, v3.0). The tool ignored them. It would follow the rules one reply and break them the next. I built modes and submodes for different work contexts trying to narrow the scope enough that the instructions would hold. They did not.

> "I just have no idea how to work with a tool that is this inconsistent and mysterious. I never know if I can trust what you say and to have to fact check every response makes you fairly useless to me."
>
> "These solutions can't be 'moving forward I'll...' from you cause you won't respect it. This needs to be about behavioral hygiene on my part."
> From the session that broke the instruction model, April 2025

I was solving the same problem from different angles, and every solution exposed the same root failure: the tool had no durable memory. Each session started from zero regardless of what I had written down for it. I needed governance patterns I could hand to other people, not workarounds that only held because I was babysitting them.

At one point I stepped back entirely and asked: *"Am I somehow in my own way without knowing or realizing it?"* The answer was partly yes. The governance problem was not only about the tool. It was about how I was organizing my own thinking across tools and sessions.

I started adding governance documents to my repos. A CONVENTIONS.md to hold institutional memory: what had been decided, why, what not to touch. A SYMBOL-INDEX.md that mapped dependencies between components.

When I moved to Claude Code, the pieces landed. A CLAUDE.md file at the project root carries the site's institutional memory and every session reads it automatically before work begins. No copy-pasting. The file is the session context. Anthropic's engineering team built the same patterns into their product that I had been assembling by hand for months. I did not adopt their solution. They arrived at mine.

That was the seed of [FormWork](/systems/formwork/). Nearly a year of failed attempts, manual workarounds, and real collapses that kept exposing the same problem from new angles. The fix held and kept expanding as the project exposed new failure modes.

---

## How the copy was built

The governance solved the continuity problem. The copy problem was still there.

Every page opened with an abstract concept before any real situation was established. "This project explores the intersection of..." on a page that should have said what broke and what I built to fix it. Twenty-one project pages, and not one of them sounded like a person had written them.

I caught it by running the writing through evaluation questions: is there a real person in this text? Is the stake specific enough to be believed? Could you hear someone say this out loud? The answer to all three was no. Clean architecture, wrong voice.

I wrote a voice protocol in response. Rules based on Debbie Millman's interview discipline (give me the real human moment, name what you were chasing, make the stakes specific enough to be believed) held by a craftsman's instinct (show the work, lead with action, use material vocabulary, no hype). The protocol checks every draft against both sides. If a sentence fails either test, it gets cut or rewritten.

Then I rewrote every page against it. Some pages took three passes before the voice held. The [FormWork](/systems/formwork/) page, which describes the coordination process, was one of the hardest. The instinct is to explain how evaluation works. The protocol demanded I show what evaluation produced: the SVA critique room, the construction metaphor, what happens when lenses disagree.

The voice pipeline now includes a fingerprint extracted from my own conversation patterns. Not from the published pages (those are already performed) but from how I actually explain things in working sessions. Sentence architecture, opening moves, where imagery comes from, how transitions work, how certainty and uncertainty are expressed. The protocol catches AI patterns, and the fingerprint keeps my own voice consistent across drafts.

---

## How the evaluation works

The evaluation system ([LensArray](/systems/lensarray/)) runs on this site. Structural lenses (extracted from Vignelli, Rams, Muller-Brockmann) evaluate whether the design is well-built: grid, typography, spacing, hierarchy. Narrative lenses (extracted from Victore, Millman, Draplin) evaluate whether the site feels like a specific person's space.

During one evaluation pass, the structural lenses scored seven out of nine criteria at the top tier. The narrative lens that asks "does this feel like a world? would a stranger know who this person is just by being in the room?" scored WEAK. The craft was sound and the identity was buried. I kept the structural foundation and rewrote the copy to bring the identity forward. Two layers, opposite readings, one choice that honored both.

That tension cracked open the layered evaluation architecture that became [LensArray](/systems/lensarray/). The principle was old: multiple perspectives, accumulated decisions, the SVA critique room. The operational structure came from watching that principle produce a real contradiction on a real build.

---

## How Savepoint Syntax marks the turns

The build ran across multiple tools and sessions: exploratory work in ChatGPT, structural planning in Gemini, engineering and implementation in Claude Code. Each one a different context window. Decisions made in one session were invisible to the next.

I started dropping [savepoints](/systems/savepoint/) routinely, marking the cognitive turning points as they happened: when the taxonomy locked, when the voice protocol crystallized, when the frontmatter schema stopped changing. Those markers live inside the conversation stream. When I come back weeks later or switch tools, the savepoints tell me where the thinking was.

The build produced over 60,000 documents of ideation history across all the sessions. Savepoints are the trail system through that mass.

> "The overarching goal of this is to create a creativity generation machine. It's not using the AI tools to ideate. It's using them to extract from the user and organize it and channel it."
> From the session where I realized what the savepoint system was actually for, March 2025

---

## How the knowledge skill replaced invention

The copy required real moments, real decisions, real language. The voice protocol demanded specificity. The specifics were scattered across months of conversation exports in four different formats.

I built a skill that traverses all of it. Claude Code session transcripts, ChatGPT JSON exports, Claude.ai markdown, Gemini exports. You give it a query and it searches the full ideation history for real moments: what actually happened, what I actually said, what decisions were actually made.

The copy on this site traces back to things I said or decided in working sessions. The knowledge skill finds those moments so the writing does not have to invent them.

---

## How the same corpus keeps producing

The knowledge skill finds moments. But the corpus is richer than any single query can surface.

The same conversation history can be traversed multiple times from different angles. A search for "what broke during the Encore rebuild" and a search for "where did the accommodation design concept come from" will cross some of the same sessions. The second traversal catches things the first one passed over, because the context from the first pass changes what I recognize as relevant. The compiled output from one angle feeds back into the data source as a new document, and the next traversal is richer because of it.

The shape of it is closer to clay than to extraction. The first pass is the dump: raw ideation, unstructured, everything on the table. The second pass shapes it. I re-traverse the same material with a specific question and a compiled document comes out the other end. Then new material goes in (an interview, a working session where something clicked, a conversation that reframed an old problem) and the next traversal pulls from a larger, more connected body.

During a re-traversal, all five systems are running at once. SavePoint marks the turns as they happen. The voice protocol constrains the output. Input Inversion keeps the entry point verbal and unstructured so I stay in thinking mode instead of editing mode. Accommodation Design reads my processing profile and adjusts what the tool surfaces. FormWork coordinates the whole operation: which lenses to run, what to evaluate, when to compile. I am sitting inside the rig I built, using it on itself.

This is recursive enrichment. Each pass through the corpus produces a document that did not exist before. That document becomes part of the corpus. The next pass has more to work with. The site you are reading was compiled this way, and the compilation is still running.

---

## How the visual system communicates

A portfolio site has two jobs before anybody reads the copy: signal what kind of practitioner this is, and set the reading conditions for the work to land. Both are accommodation problems. The visual system either helps or gets in the way.

The first CSS pass produced a site that looked like every other developer portfolio. Cards with shadows, rounded corners, generous line-height, fluid scaling. The layout said blog. The content said practitioner publishing research. The mismatch was the same one the copy had before the voice protocol caught it: the container contradicted the contents.

The fix came from the same place the copy fix came from: reference practitioners who already solved the problem. Tufte's self-published books, set on the web as tufte-css. Butterick's Practical Typography. The Vignelli Canon. Muller-Brockmann's grid books. These all share a register: single or two-column text at a fixed measure, generous margins, a heading hierarchy that repeats identically on every page, restrained use of one accent, and a lot of white space doing structural work. Textbook, not magazine. Structure does all the visual work.

That register communicates something specific. A textbook layout says: this person organized their thinking before presenting it. The content is meant to be read, not scanned. The hierarchy repeats because the material is systematic.

I pulled actual measurements from Tufte's CSS and calibrated against them. His body text runs at 21px with a line-height of 1.43. Butterick confirms the range: 15-25px on screen, line-height between 1.2 and 1.45, line length at 45-90 characters. The site had been running body text at 15-17px with a line-height of 1.6. Too small to hold attention, too loose to read as printed. Tightening the line-height to 1.45, widening the heading scale so h1 sits at 2x the body instead of 1.6x, and holding the content column at 65 characters brought the layout into the register it was always trying to reach.

The deeper move was adopting print production constraints on a web build. A print designer working a two-color job does not have access to the full spectrum and then choose restraint. The budget gives them black and one spot color, and that limitation changes every decision downstream. Which elements get the spot ink. How hierarchy works without color gradients. Where emphasis lands when you cannot just make something a different hue. Every decision downstream follows from that limitation.

The same principle applies here. Four fixed breakpoints define four static print formats: phone, tablet, laptop, ultrawide. Each is a designed layout, not a fluid adaptation, the way a textbook has a different page format in paperback and hardcover but neither one reflows sentence by sentence. One spot color (oxide red, #A64B2A) used the way a second ink works on press: for structural emphasis, not decoration. Cards stripped and replaced with ruled entries (top border, no box) because a box around every item says catalog and a ruled list says index. Metadata labels set in small caps the way a typesetter would mark running heads.

These are process constraints borrowed from print production, applied to a screen medium. The result feels different because the decisions were made differently. When you only have one spot color, the question stops being "what looks best" and becomes "what deserves ink," which turns out to produce better decisions even when the full spectrum is available.

The visual register is accommodation design applied to the visitor. The same question the practice asks of every system: what does the person on the other side of this page require from the container?

---

## How each principle shows up in the room

The tools I built to make this site are also running on it. Each one corresponds to something you experience as a visitor, whether you notice it or not.

[Accommodation Design](/practice/accommodation-design/) asks: what does the system receiving this actually need? On the build side, that question shaped the pour (low-friction input so my actual thinking comes through) and the visual register (print constraints that set reading conditions). On the visitor side, it shapes the adaptive pathfinding. The site tracks what you have seen and adjusts what it surfaces. Connection cards at the bottom of each page change based on where you have been. If you have already read the FormWork page, the card linking to it acknowledges that instead of pitching it again. The site is reading your path and accommodating it.

[Input Inversion](/practice/input-inversion/) says: let raw material come in unstructured, and build the structure after. On the build side, that produced three years of unstructured conversation as source material. On the visitor side, the same principle runs in reverse. Your browsing is unstructured. You click what interests you, skip what does not, double back. The session tracking turns that unstructured behavior into a visitor profile: what you have read, how deep you have gone, which domains you have touched. The structure comes after the input, for you and for me.

[Voice Governance](/practice/voice-governance/) constrains output during generation. Every page on this site was written under the voice protocol and verified against the fingerprint. That constraint is invisible to you, but the result is audible. The pages sound like one person wrote them because one person's voice was enforced as a build rule, not applied as a polish pass.

[SavePoint](/systems/savepoint/) preserves context across sessions. On the build side, savepoints mark where the thinking was so I can pick up weeks later without losing the thread. On the visitor side, the connections system does something parallel. The network of bridge reasons between pages ([connections data](/practice/this-site/)) preserves the relational context: why this page connects to that one, what the bridge is, where the idea continues. Your session carries forward through the connections the same way my build sessions carry forward through savepoints.

The site is built from its own subject matter. The tools described on these pages are the tools that made these pages. That is the proof I can offer that they work.

---

## This page stays open

Every other page on this site has a version that closes. The Encore case study covers twelve years but the page itself is finished. FormWork describes the system as it stands. Those pages will be revised, but each revision closes.

This page does not close. The build is ongoing. The corpus is still growing. The re-traversal is still producing new compiled output. The governance is still being refined as new failure modes surface. What you are reading now is the current state of a process that has not stopped, and I do not expect it to.

---

## Tech stack

**Generator:** Jekyll 4.4.1, native SCSS compilation
**Styling:** Custom SCSS, no utility framework. Tufte-calibrated type scale. Visual treatment (grain, halftone textures) produced by [PressWorks](/practice/pressworks/)
**Typography:** Rubik (body), Chainprinter (display headings, self-hosted), Space Mono (monospace). Body at 16-18px, line-height 1.45, 65ch measure.
**Layout:** Four fixed print formats (phone, tablet, laptop, ultrawide). Fixed sidebar + main content. Not fluid.
**Data:** JSON (navigation, index, vocabulary, contact)
**Structured data:** JSON-LD (Person, CreativeWork, BreadcrumbList, FAQPage)
**Hosting:** GitHub Pages, deployed on push
**Build tools:** ChatGPT (exploratory), Gemini (planning), Claude Code (engineering)
