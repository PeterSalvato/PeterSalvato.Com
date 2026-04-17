---
layout: post
title: "Documentation as Design Deliverable"
date: 2026-03-09
published: true
description: "CONVENTIONS."
seo_keywords: ['ai', 'governance', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 98
depth: making
domain: Design practice
function: SEO
seed_status: DEEP
last_modified: 2026-03-14
---

Most projects ship a product and leave the documentation as an afterthought. A README that nobody updates. A wiki that falls stale within weeks. Comments in the code that describe what the code did three versions ago. The documentation exists but it doesn't govern anything. It's a record of past intentions, not a living constraint on future work.

I treat documentation as a design deliverable. The CONVENTIONS.md, the CLAUDE.md, the SYMBOL-INDEX: these aren't artifacts you produce after the work is done. They're artifacts that govern the work while it's happening. The document is the single source of truth, and if it falls out of sync with reality, reality is wrong.

---

This came from watching what happens when documentation is optional. On the [Encore](/infrastructure/encore/) platform, twelve years of architectural decisions accumulated. Most of them lived in my head. When a contributor needed to understand why the SCSS was structured a certain way, or why a particular naming convention existed, or what would break if they changed a dependency, they had to ask me. I was the institutional memory. The documentation either didn't exist or it was stale.

That works when one person holds the whole picture. It fails the moment that person is unavailable, overloaded, or building something new while the existing system needs maintenance. The decisions don't scale because the storage medium (a human brain) doesn't scale.

CONVENTIONS.md solved this for my homelab infrastructure. One file. Current state of all infrastructure. What's been decided, what the drive map looks like, what mount points exist, what services run on which ports. Any session that touches the infrastructure reads it first. The file is the authority. If something in the system doesn't match what the file says, the file gets updated or the system gets corrected. There's no third option where the documentation just falls out of date.

---

The CLAUDE.md for this site carries the same function at the project level. Voice rules, privacy constraints, technical stack, published pages, positioning intent. Every AI session reads it before work begins. The document governs what the session can do. It doesn't describe the project in retrospect. It constrains the project going forward.

The [Savepoint Protocol](/governance/savepoint-protocol/) is documentation as governance at the cognitive level. Each savepoint marks a turning point in thinking. The document doesn't summarize what happened. It marks where understanding shifted, so you can find your way back when you return weeks later. The documentation is the trail system, not the map.

---

The invisible output of any well-run project is the documentation that kept it on track. The visible outputs (the site, the platform, the brand system) get the credit. The documents that prevented drift, maintained naming conventions, and preserved architectural decisions don't show up in a portfolio. But without them, the visible work wouldn't hold.

Documentation is a design deliverable because it does design work. It shapes decisions, prevents contradictions, and maintains fidelity over time. A CONVENTIONS.md that nobody reads is decoration. A CONVENTIONS.md that every session reads before making a change is governance. The difference is whether you treat the document as an artifact or as a load-bearing structural element.
