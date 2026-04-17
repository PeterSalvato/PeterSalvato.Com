---
layout: post
title: "Decomposition Applied to Project Management"
date: 2026-03-09
published: true
description: "Father's sites to Encore to how Peter breaks down any problem."
seo_keywords: ['enterprise', 'decomposition', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 109
depth: making
domain: Design practice
function: SEO
seed_status: DEEP
last_modified: 2026-03-14
---
My father managed construction sites by managing trades. Not by managing "the building." Nobody manages a building. You manage the sequence of specialized work that produces one.

Steel goes in before electrical because electrical hangs from steel. Electrical goes in before drywall because drywall covers electrical. Drywall goes in before paint. Every trade depends on the one before it, and the superintendent's job is knowing the order and managing the joints where trades meet. When the steel crew is late, the superintendent doesn't just push the schedule. He recalculates every downstream dependency.

I've managed [Encore](/evidence/encore/) for twelve years the same way. Not as one monolithic product but as layers. The SCSS design system is one layer. The JavaScript framework is another. The information architecture is a third. The component library is a fourth. Each has its own constraints, its own velocity, its own set of people touching it.

When a new feature request arrives, the first thing I do is decompose it into which layers it touches. If it's a UI change, it might only touch the SCSS and the component layer. If it's a workflow change, it touches the information architecture, which means the components need to accommodate a new flow, which means the SCSS might need new tokens. The feature request is one ticket. The work is three layers, and the order matters.

This is how I think about any project. Not as a single deliverable but as a stack of separable concerns, each with its own constraints and dependencies.

A brand project decomposes into positioning, visual system, content architecture, and platform implementation. Positioning governs the visual system (you can't design the look until you know what it's supposed to communicate). The visual system governs the content architecture (you can't structure the content until you know what the visual language supports). The content architecture governs the platform implementation (you can't build the site until you know what it holds).

The household decomposes the same way. Morning routines are one system. Meal prep is another. Grocery logistics is a third. Each operates independently, but they share resources (time, attention, fridge space). When I redesigned the breakfast system, I had to account for the grocery system that feeds it and the morning routine that surrounds it. Change one, and the others feel the pressure.

The skill that transfers from construction to software to brand to household is reading the dependency chain. What has to happen before what? Where do the layers meet? What breaks at the joint?

Most project management I've seen treats everything as parallel. The Gantt chart shows eight workstreams running simultaneously, each with a deadline, and the project manager's job is to keep all eight on track. But the chart doesn't usually show the dependency logic. It doesn't show that workstream four can't actually start until workstream two finishes, or that workstream six will produce different output depending on what workstream three decides.

Decomposition without dependency mapping is just a to-do list with categories. The categories feel organized. The work still crashes at the joints.

My father's method was plain. Figure out what the trades are. Figure out what order they go in. Manage the handoffs. Twelve years of enterprise work, brand systems, household infrastructure, and AI tool architecture, and I still haven't found a better approach.
