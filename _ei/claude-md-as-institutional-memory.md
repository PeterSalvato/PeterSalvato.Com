---
layout: post
title: "The CLAUDE.md as Institutional Memory"
date: 2026-03-09
published: true
description: "How the document holds context across sessions."
seo_keywords: ['ai', 'governance', 'drift', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 128
depth: making
domain: AI/governance
function: SEO+Payload
seed_status: DEEP
last_modified: 2026-03-14
---

Every AI session starts from zero. The model has no memory of what you decided yesterday. The architecture you agreed on, the naming conventions you settled, the constraints you discovered the hard way: gone. You paste summaries, re-upload documents, try to reconstruct the thread. The reasoning that connected all the pieces has evaporated.

I spent two years building workarounds for this. Copy-pasting savepoint summaries between ChatGPT threads. Writing instruction sets in project configuration boxes that the tool ignored half the time. Versioning governance documents (v1.1, v2.2, v3.0) that the model would follow for one reply and break the next. I said to the tool at one point: the issue I'm having is, ChatGPT is failing to help me in engineering tasks. It's just not capable enough.

Then I found a plain file in a repository.

---

CLAUDE.md sits in the project root. The tool reads it at the start of every session. That's it. Decisions accumulate there instead of evaporating when the conversation ends.

The file carries institutional memory: what the project is, how it's structured, what decisions have been made, what conventions to follow, what not to touch. Every session reads it automatically. No copy-pasting. No instruction box that gets ignored. The continuity problem that had been breaking my momentum for two years was solved by a markdown file.

I started building this site in Claude Code sessions in February 2026. The character of the work was completely different from the ChatGPT era. Those conversations were exploratory, me working through naming and positioning. The Claude Code sessions were building. I needed the tool to know what we'd already decided, and the CLAUDE.md file meant it did.

---

The file isn't static. It grows as the project grows. When I settle a naming convention, it goes in. When I discover a constraint, it goes in. When a voice rule crystallizes, it goes in. The document is a living record of every decision that matters for the next session. It's governance embedded in the project itself, not in a tool's ephemeral instruction box.

This is what institutional memory actually looks like at the project level. On the [Encore](/infrastructure/encore/) platform, institutional memory lived in my head for thirteen years. I held the whole picture: how the modular JS framework connected to the SCSS design system, what depended on what, which decisions downstream would break if something drifted. When I walked away from a session, the picture walked with me. On a construction site, my father held the same kind of picture. Fifty trades, all connecting, and the reasoning that held them in relation existed only in his head.

The CLAUDE.md file is the closest I've gotten to externalizing that. The reasoning lives in the project. Any session can read it. The picture doesn't walk away when the conversation closes.

---

What I found validating: Anthropic's engineering team built the same patterns into their product that I'd been assembling by hand for months. Persistent project memory, convention files, context that survives between sessions. I didn't adopt their solution. They arrived at mine.

The CLAUDE.md for this site runs about a hundred lines. It defines the voice rules, the privacy constraints, the technical stack, the published pages, the positioning intent, what collections exist, and what decisions are settled. A new session reads it and starts with the full picture. The drift that used to happen (contributors contradicting decisions that lived only in my head) stopped happening. The decisions are in the file, the file is in the repo, and the repo is the project.

That's documentation as governance. The document governs the project, not just describes it. Every session that reads it operates within the constraints it defines. Change the document and you change what's possible.
