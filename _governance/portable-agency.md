---
layout: project
published: false
title: "Portable Agency"
subtitle: "Persona-Driven Agents for Industry-Specific Work"
icon: code
altitude: "01"
status: "Active"
context: "Opinionated output, the kind that sounds like it came from someone who actually knows the field, has a point of view, and would push back on the wrong answer. That's the thing generic prompting can't produce."
drift: "Technically correct is the default failure mode. Average is the problem. Instructions describe what to do. They don't describe how to think."
scaffold: "Expert framework injection: give the agent a methodology, not a task list. The persona is the decision filter. The expertise is the architecture. The agent asks 'would Millman accept this?' not 'is this technically correct?'"
fidelity: "The output changes in kind, not just quality. This site is the proof."
faculty: ["engineering", "uxia"]
seo_keywords: ["AI Agents", "Prompt Engineering", "Persona-Driven AI", "LLM Frameworks", "Agent Design"]
description: "Persona-driven agent design. Give the LLM a methodology instead of a task list. The persona becomes the decision filter. This site is the proof."
last_modified: 2026-02-21
---

The problem with AI writing tools isn't capability; it's point of view. An LLM asked to write portfolio copy will produce something technically correct, stylistically average, and industry-agnostic. It knows what copy is. It doesn't know what Debbie Millman would do with it.

Portable Agency is the attempt to close that gap systematically: instead of giving agents task descriptions, give them expert frameworks. Instead of "write portfolio copy," give the agent Debbie Millman's methodology, her approach to personal stakes, narrative depth, and showing instead of telling. The output changes. Dramatically.

## THE PRESSURE

Generic output is the default failure mode of LLMs. It's not wrong; it's average. Average is the problem. An agent that produces competent-but-undifferentiated copy isn't useful in a context where voice and judgment are the entire point. Standard prompt engineering addresses this partially: better instructions produce better output. But instructions describe what to do. A persona describes how to think.

The diagnostic question: what if the agent's governing logic came from an expert, not a task list?

## THE BUILD

Persona-driven agent design works through three layers:

**Expert framework injection.** Instead of describing a task, define the expert whose judgment governs it. Debbie Millman for copy: her specific frameworks, her tests, her language for what's true vs. performed. The persona isn't decoration; it's the decision filter. When the agent evaluates output, it's asking "would Millman accept this?" not "is this technically correct copy?"

**Role separation by expertise.** Different agents carry different expert frameworks. A copywriting agent runs Millman x Craftsman voice rules. A planning agent operates differently. The expertise is portable; the same framework file can govern any agent in any context. The persona travels with the instruction.

**Escalation protocols.** Persona-driven agents still don't know specific facts. The framework governs voice and judgment; a knowledge escalation chain governs specifics: check project files, search PKB, interview if still unknown. Never hallucinate to fill the gap. Opinionated output requires accurate material.

The practical implementation on this site: `.claude/COPYWRITING-VOICE-PROTOCOL.md` and `.claude/AGENT-COPYWRITING-VOICE.md` are Portable Agency in production. Claude sessions governed by Millman's framework produce the copy on these pages.

## THE PROOF

The difference is audible. Copy written by an LLM given generic instructions and copy written by an LLM given Millman's framework are not the same document. The voice is different. The structure is different. The relationship to honesty is different.

The bet Portable Agency makes: the quality ceiling for AI-assisted work isn't compute or model size. It's the expertise baked into the governing framework. Better frameworks produce better agents. The expertise is the architecture.
