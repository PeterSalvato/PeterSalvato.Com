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

That corpus is the pour. In FormWork, the first accommodation is aimed at the human: get the thinking out of your head with as little friction as possible. Talk, dictate, answer questions. No requirement to structure or perform. Three years of that produced the source material everything else operates on. The rawness is the point. It carries my actual voice, my actual thinking, the way I actually connect ideas. The tools that follow can only preserve what the pour already contains.

This is compilation, not generation. Most people use AI as a generator: prompt in, content out. The AI is the author and the human is the editor. I use it as a compiler. I am the source code: decisions, instincts, and working knowledge accumulated across conversations. The system mines, evaluates, and assembles that source material into output. The AI is the toolchain. You do not say gcc wrote the program.

The workbench is built from AI tools the way a woodworker builds a bench from hand tools. The compilation is crafted. The voice is honed. The structure is shaped by hand. What remains human: every architectural decision, every editorial judgment, every voice calibration, every convergence call when the evaluation lenses disagree.

---

## How the governance was built

The first attempt at governance was manual: copy-pasting context between ChatGPT threads. Dozens of overlapping conversations, each prefixed and numbered, decisions from one thread invisible to the next. I would end a session by asking for a savepoint summary, copy it, paste it into the next thread to reconstruct my headspace. It worked until it didn't. The pasted context was a snapshot, and it went stale the moment the next thread moved forward.

> "We wind up with these marathon sessions and your memory limitations cause us to lose things. There's a lot of overlap between conversations so I want the date and timestamp to be when the decision was made so that we can track as they grow and change by traversing all the documents."
> — from the session where the Savepoint Syntax was born, March 2025

So I tried embedding governance in the tool itself. ChatGPT's project instruction box: rules for how to respond, what syntax to use, what to check before answering. I wrote instruction sets, rewrote them, versioned them (v1.1, v2.2, v3.0). The tool ignored them. It would follow the rules one reply and break them the next. I built modes and submodes for different work contexts trying to narrow the scope enough that the instructions would hold. They did not.

> "I just have no idea how to work with a tool that is this inconsistent and mysterious. I never know if I can trust what you say and to have to fact check every response makes you fairly useless to me."
>
> "These solutions can't be 'moving forward I'll...' from you cause you won't respect it. This needs to be about behavioral hygiene on my part."
> — from the session that broke the instruction model, April 2025

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
> — realizing what the savepoint system was actually for, March 2025

---

## How the knowledge skill replaced invention

The copy required real moments, real decisions, real language. The voice protocol demanded specificity. The specifics were scattered across months of conversation exports in four different formats.

I built a skill that traverses all of it. Claude Code session transcripts, ChatGPT JSON exports, Claude.ai markdown, Gemini exports. You give it a query and it searches the full ideation history for real moments: what actually happened, what I actually said, what decisions were actually made.

The copy on this site traces back to things I said or decided in working sessions. The knowledge skill finds those moments so the writing does not have to invent them.

---

## Tech stack

**Generator:** Jekyll 4.4.1, native SCSS compilation
**Styling:** Custom SCSS, no utility framework. Visual treatment (grain, halftone textures) produced by [PressWorks](/practice/pressworks/)
**Typography:** Rubik (body), Chainprinter (structural headings, self-hosted), Space Mono (monospace)
**Layout:** Fixed sidebar + main content, responsive to mobile
**Data:** JSON (navigation, index, vocabulary, contact)
**Structured data:** JSON-LD (Person, CreativeWork, BreadcrumbList, FAQPage)
**Hosting:** GitHub Pages, deployed on push
**Build tools:** ChatGPT (exploratory), Gemini (planning), Claude Code (engineering)
