---
layout: project
title: "Lionfish Music Group"
subtitle: "Diagnosing a Failed AI Implementation"
icon: cases
status: "Delivered"
context: "A music licensing firm hired a freelancer to build an AI-powered email processing pipeline. It didn't work. I diagnosed why, rebuilt it as a production-ready system, and delivered it with documentation."
faculty: ["engineering", "governance"]
seo_keywords: ["AI consulting", "n8n workflow", "AI governance", "music licensing automation", "failed AI implementation", "AI systems diagnosis", "workflow automation", "Peter Salvato"]
description: "A music licensing firm's AI email pipeline was broken. Four critical failures. I rebuilt it as a production-ready system in two hours."
last_modified: 2026-03-24
published: true
related:
  - /evidence/encore
  - /systems/formwork
  - /research/accommodation-design
---

A Brooklyn music supervision and licensing clearance firm had a problem. They clear rights for film, TV, advertising, and games. Fifteen years of licensing request emails sitting in a Gmail account, all processed manually. They hired a freelancer to build an AI-powered pipeline that would extract structured licensing data from those emails and populate a contact database. The system was built in n8n with a Claude API integration. It didn't work.

They brought it to me to diagnose the current state and chart a path to completion.

---

## The diagnosis

Four critical failures, each one enough to break the system on its own.

**Wrong API parameter.** The HTTP request used `max_tokens_to_sample` instead of `max_tokens`. Every API call failed. This is the kind of error that happens when someone copies from outdated documentation without testing.

**Hardcoded credentials.** The API key was in plaintext in the workflow JSON. Anyone with access to the file could extract it. Should have been in n8n's credential manager.

**Static date filter.** The Gmail query was hardcoded to pull emails from one specific day in October 2025. No new emails would ever be processed. The filter needed to be dynamic.

**No error handling.** When Claude returned malformed JSON (which happens), the workflow had no fallback. No validation, no retry, no notification. It would silently fail and move on.

Beyond these, the workflow had no output destination. It extracted data and then did nothing with it. No database write, no spreadsheet, no notification. The freelancer built a pipeline that went nowhere.

---

## The rebuild

I replaced the single broken workflow with three coordinated systems, each handling a different time horizon.

**Ongoing monitor.** Runs every 15 minutes. Pulls new unread licensing emails, extracts structured data via Claude API, validates the response, deduplicates against existing records, and writes to a Google Sheet. Marks processed emails so nothing gets handled twice.

**Historical scrape.** Batch processor for the 15-year backlog. Handles 500 emails per run with built-in rate limiting to respect API limits. Deduplication prevents reprocessing. Designed to run overnight in batches.

**Safety sweep.** Runs every 90 days. Scans the last quarter for any emails the monitor missed. Only processes records not already in the database. The catch-all for edge cases.

The Claude API integration uses a constrained prompt that returns structured JSON only. Six license types (Mechanical, Sync, Print, Sample, Master, Performance). Thirteen data fields per record: gmail_id, client name, email, license type, song title, artist, project type, platform, request date, notes, extraction timestamp, email subject, and source workflow. The constraint is what makes the output reliable. The prompt tells Claude exactly what to return and in what format. No room to drift.

Error logging tracks every parsing failure. The system tells you when something goes wrong instead of silently dropping data.

---

## The deliverable

Delivered November 6, 2025. Three n8n workflow files, a setup guide, a troubleshooting guide, and a quick-start README. The documentation walks a non-technical user through import, credential setup, testing, and deployment. Estimated setup time: two hours. Two-week support window included.

Operating costs: roughly $5-10/month for ongoing monitoring, $50 for the full historical scrape of 15 years. The system targets 95%+ extraction accuracy on new emails.

---

## What this proves

This is what happens when someone builds an AI system without governance. The individual components existed (Gmail integration, Claude API, n8n orchestration) but nobody designed the coordination layer. Nobody handled errors. Nobody validated output. Nobody made the date filter dynamic. The freelancer assembled parts without understanding how they needed to work together.

The diagnosis took less time than the original build. The rebuild took a few hours. The difference was knowing what to look for: the same structural patterns I use in every system I build. [Decompose the task](/essays/the-iep-for-ai-systems/). Validate at every boundary. Handle failure explicitly. Make the constraints tight enough that the AI can't drift.

The client had already spent money on a system that didn't work. The replacement cost less and actually ran. That gap between what was promised and what was delivered is the gap I keep seeing everywhere AI tools get adopted without structural thinking behind them.
