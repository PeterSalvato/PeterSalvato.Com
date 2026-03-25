---
layout: default
title: "Consulting"
permalink: /consulting/
description: "Design, engineering, and AI governance as one practice. The problems that matter most live in the gaps between them."
seo_keywords: ["design engineering consultant", "AI governance consultant", "design systems consulting", "front-end architecture", "AI implementation", "voice governance", "content governance", "Peter Salvato"]
---

A music licensing firm hired a freelancer to automate their email pipeline with AI. It didn't work. The API calls failed, the credentials were exposed, the date filter was hardcoded to one day, and there was no error handling. I [diagnosed the four failures and rebuilt it](/evidence/lionfish/) as a production system in less time than the original build took.

That pattern keeps showing up. The components exist but nobody designed how they work together. The design system looks right but engineering can't maintain it. The AI output is fluent but it lost the voice. The problem is always in the gap between what was communicated and what the system on the other end actually needed.

---

## Design

Information architecture, design systems, brand systems, typography, visual hierarchy, content strategy, narrative architecture, voice. Design is the structure of communication, visual and verbal. How something looks and how it reads are the same discipline.

I built and maintain the design system for an [enterprise platform](/evidence/encore/). I've designed brand identities where the generic solution looked right but solved the [wrong problem](/evidence/altrueism/). I've built [voice governance](/essays/voice-governance/) systems that keep content coherent across scale. The work is always structural: what does this system need to communicate, and is the design actually proving it?

## Engineering

Front-end architecture, design systems in code, component frameworks, SCSS infrastructure, workflow automation. The layer where design decisions become enforceable.

I built the JS namespace, OOP architecture, and SCSS framework that an entire engineering team builds on. I [migrated an enterprise platform from desktop to browser](/evidence/encore/) in 2013. Design tokens, naming conventions, and component patterns that make the right thing easier to build than the wrong thing.

## AI Governance

AI systems that don't work the way they were supposed to. Content that lost the voice. Workflows that break silently. Output that drifts from intent. I diagnose structural failures in AI implementations and build governed systems that hold.

The methodology is called [Accommodation Design](/research/accommodation-design/). It started in a self-contained classroom in Brooklyn where I taught twelve students with twelve different processing profiles. The same question I asked there is the one I ask about every AI system: what does this system actually need from you to succeed?

I [diagnosed and rebuilt](/evidence/lionfish/) a failed AI implementation for a music licensing firm. The previous contractor delivered a broken system. I identified four critical failures, rebuilt it as a production-ready pipeline, and delivered it with documentation. That gap between assembled components and a governed system is where most AI implementations fail right now.

---

## How I work

1. You describe the problem.
2. I figure out whether it's a design problem, an engineering problem, an AI problem, or (usually) all three.
3. I scope a fixed deliverable at a fixed price.
4. I deliver the system with documentation. You own everything I build.

---

## Get in touch

{::nomarkdown}
<form action="https://formspree.io/f/mlgoedkq" method="POST" class="consulting-form">

  <label for="name">Name</label>
  <input type="text" id="name" name="name" required>

  <label for="email">Email</label>
  <input type="email" id="email" name="email" required>

  <label for="company">Company (optional)</label>
  <input type="text" id="company" name="company">

  <fieldset>
    <legend>What areas are involved?</legend>
    <label class="checkbox-label"><input type="checkbox" name="areas[]" value="Design"> Design</label>
    <label class="checkbox-label"><input type="checkbox" name="areas[]" value="Engineering"> Engineering</label>
    <label class="checkbox-label"><input type="checkbox" name="areas[]" value="AI Governance"> AI Governance</label>
    <label class="checkbox-label"><input type="checkbox" name="areas[]" value="Not sure"> Not sure</label>
  </fieldset>

  <label for="problem">What's the problem?</label>
  <textarea id="problem" name="problem" rows="5" required></textarea>

  <label for="timeline">Timeline (optional)</label>
  <input type="text" id="timeline" name="timeline" placeholder="e.g. next month, no rush, urgent">

  <button type="submit">Send</button>

</form>
{:/nomarkdown}
