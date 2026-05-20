---
layout: post
redirect_from:
  - /blog/i-needed-a-better-tool/
title: "I Needed a Better Tool"
published: true
order: 3
icon: edit_note
description: "Thousands of ChatGPT conversations in two years. Then I found Claude Code, and the thing that made it stick was that it could read my files."
seo_keywords: ["Claude Code", "AI tools", "ChatGPT to Claude", "design engineer", "methodology-driven development", "Peter Salvato", "CLAUDE.md", "switching from ChatGPT to Claude", "AI tool comparison for developers", "best AI coding assistant", "file-aware AI", "AI that reads your codebase"]
related:
  - /systems/formwork
  - /systems/savepoint
  - /systems/lensarray
---

I kept losing my thinking. The notes were fine, the files were fine. The reasoning was the thing that disappeared. The connections between ideas that only existed inside a conversation. The session would end and all of it was gone.

I was using ChatGPT for structural work: worldbuilding for a novel, a side project called ScopeForge, career planning, brand development. Months of interconnected thinking where one decision fed into the next. Every time the session closed, the next one started from zero. I could paste summaries, re-upload documents, try to reconstruct the thread. But the reasoning that connected all the pieces had evaporated. When I came back to something months later, I told the tool: I feel like I did so much ideation that got lost or buried.

That loss is where the savepoint reflex came from. I started typing "give me a savepoint" into conversations as a survival mechanism. The name came from saving video games as a kid. Same instinct: you're about to lose your progress, so you save your state before the session ends. Dump everything into a copyable block before the context closes. It showed up in cooking conversations, fitness conversations, gaming, web dev. It was a reflex before it was a protocol.

## The corpus before I knew it was one

This isn't a story about a bad tool, though. Over three years I had thousands of conversations with ChatGPT. Cooking technique, career planning, teaching approaches for my kids, enterprise UI strategy, brand development. The first few months were simple lookups. Then in September 2024 something cracked open and I went from a few conversations a month to dozens a week. I was trying to figure out what I actually was, professionally, after twenty years of building things across so many domains that no single title fit. ChatGPT became the place I worked that out.

I could think inside it. I just couldn't keep what I'd thought.

ScopeForge made it undeniable. I'd been building a tool for mapping project context and dependencies, and every time I sat down to implement the next piece I had to re-explain the repo structure, the decisions I'd already made, what connected to what. Three messages later it would contradict the architecture we'd just agreed on. I said to it at one point: the issue I'm having is, ChatGPT is failing to help me in engineering tasks. It's just not capable enough.

A friend mentioned Claude.

## What changed

Claude Code is a command-line tool. It runs in your terminal, inside your project directory, with access to your files. I subscribed on August 25 and started using it immediately, though at first I kept it quarantined to GitHub Codespaces because I wasn't ready to let it run locally. Even in that sandbox, the difference was obvious. It could read my repository. The directory structure, the config files, the stylesheets, the data, the content. I didn't need to paste context because the context was the project itself.

Then there's this file called CLAUDE.md. It sits in the project root and contains everything a new session needs to know: what the project is, how it's structured, what decisions have been made, what conventions to follow. The tool reads it at the start of every session.

> Decisions accumulate there instead of evaporating when the conversation ends.

That's the thing I'd been building workarounds for since I first started losing my thinking across sessions. A plain file in a repository. The tool reads it. And the continuity problem that had been breaking my momentum for two years was just solved.

## What I built with it

In February 2026 I started building this site in Claude Code sessions, as a laboratory to develop and test the methodology. The layouts, the design system, the navigation, the SEO infrastructure, all of it happening inside the repo where the tool could see everything and I didn't have to re-explain anything between sessions.

The character of the work was completely different from the ChatGPT era. Those conversations were exploratory, me trying to figure out who I am professionally, working through naming and positioning and existential questions about my career. The Claude Code sessions were building. I needed a real project to develop the governance system against, and the site became that project.

Both tools were the right tool for the phase I was in. ChatGPT was where the raw thinking happened: years of unstructured exploration that became the source material everything else operates on. Claude Code was where the tools shaped it. All that exploration produced the raw material, and the building compiled it into something that could hold.

I switched because the work changed. I needed a tool that could work inside my file system and hold what we'd decided. Once it could, I could finally build on top of previous decisions instead of rebuilding them every session.

## Why it matters to me

The reasoning I kept losing across sessions is the same thing my father held in his head on a construction site. The whole picture: how fifty trades connect, what depends on what, which decision downstream is going to break if this one drifts. He held it in his head, and when he left the site, the picture left with him. I've been trying to solve that my whole career. CLAUDE.md, read at the start of every session, is the closest I've gotten.

The [rest of these posts](/essays/what-i-built-this-year/) get into what I built once the foundation held.
