---
layout: post
title: "Reconciliation Agents: Detecting Drift in Infrastructure"
date: 2026-03-30
published: true
description: "Documentation says one thing. Reality says another. The agent checks."
seo_keywords: ['reconciliation', 'drift', 'infrastructure', 'homelab', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 78
depth: reading
domain: AI implementation + Operational methodology
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

My homelab has a file called CONVENTIONS.md. It documents every infrastructure decision. Which drives are mounted where. What services run on which ports. What the backup strategy is. How the file system is organized. It's the institutional memory of the entire system.

The problem is that CONVENTIONS.md can drift from reality. I mount a drive temporarily and forget to update the document. I change a port number during troubleshooting and don't record it. I add a service and skip the documentation step because the service needs to be running now. Each time, the document and the reality diverge a little more.

This is the same drift problem that happens in every system I've worked in. A design system document says the primary color is one hex value. The codebase has three variations because developers eyeballed it. An IEP says the student gets extra time on assessments. The classroom reality is that the teacher forgot and gave the standard time. The documentation and the implementation drift apart.

A reconciliation agent checks the documentation against reality on a schedule. It reads CONVENTIONS.md. It reads the actual system state. It compares them. Where they disagree, it flags the discrepancy. It doesn't fix anything. It reports.

The "doesn't fix anything" part is important. The agent's job is detection, not correction. Automatic correction is dangerous in infrastructure the same way automatic correction is dangerous in a classroom. If the IEP says one thing and the classroom reality says another, the right response isn't to automatically enforce the IEP. The right response is to flag the discrepancy so a human can figure out which one is wrong. Maybe the IEP is outdated. Maybe the classroom drifted. You need a person to make that call.

This is the same architecture as LensArray. Independent evaluation dimensions that report without coordinating. Each lens checks one thing. The lenses don't see each other's results. Where they agree, you have signal. Where they disagree, you have a decision. The reconciliation agent is one lens pointed at infrastructure instead of at content.

The scheduled check matters. Drift is invisible in real time. Each individual change is small and reasonable. The cumulative effect only becomes visible when you step back and compare the current state to the documented state. The schedule forces that comparison at regular intervals. Without it, the drift compounds until someone hits a failure that exposes how far reality has wandered from the documentation.

Every system I've built has this problem. The documentation and the implementation diverge over time. The reconciliation agent is the structural answer. Check automatically. Flag discrepancies. Let the human decide what to fix. Run it on a schedule so the drift never gets too far ahead.
