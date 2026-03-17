---
layout: default
title: "How I Work"
tier_label: HOW I WORK
description: "The process behind the work. How raw thinking becomes structured output without losing the voice or the intent."
permalink: /systems/
seo_keywords: ["FormWork", "SavePoint", "LensArray", "accommodation design", "AI governance process", "design methodology", "voice governance"]
---

# How I Work

I dump my thinking first. Voice notes, brainstorming, arguing with myself in the car. No structure, no outline, no performance. Just get it out. That messy material is what everything else works from.

Then the tools take over. One [marks where the thinking turned](/systems/savepoint/) so I can find it weeks later. One [evaluates the work from multiple angles independently](/systems/lensarray/), the way a critique room works: five people looking at the same piece, disagreeing on purpose. One [keeps my voice from getting flattened](/practice/voice-governance/) into the generic tone AI defaults to. And one [coordinates all of them](/systems/formwork/) so I'm not running twelve things at once.

The whole process is [named after concrete construction](/systems/formwork/): you build the form before you pour. The form holds the work while it sets. Then the form comes off and the structure stands on its own.

I built these because I kept losing my thinking between sessions. The ideas were fine. The reasoning that connected them disappeared. So I built tools that hold what my brain drops, and a harness that keeps them working together.

---

## The tools

<div id="domain-artifacts">

{% for item in site.systems %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link">
    <div class="artifact-hero-header">
      <div class="artifact-hero-title">
        <h3>{{ item.title }}</h3>
        {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
      </div>
    </div>
    {% if item.description %}<p class="artifact-context">{{ item.description }}</p>{% endif %}
    <p class="artifact-link">Read &rarr;</p>
  </a>
  {% endif %}
{% endfor %}

</div>

---

## The research

The tools came from a methodology I formalized as [accommodation design](/practice/accommodation-design/). It started in a special education classroom in Brooklyn and transferred directly to AI. These papers document the thinking behind the tools. They're the technical depth for anyone who wants to understand why this works, not just how.

<div id="domain-artifacts">

{% assign whitepapers = site.practice | where: "practice_group", "whitepaper" %}
{% for item in whitepapers %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link">
    <div class="artifact-hero-header">
      <div class="artifact-hero-title">
        <h3>{{ item.title }}</h3>
        {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
      </div>
    </div>
    {% if item.description %}<p class="artifact-context">{{ item.description }}</p>{% endif %}
    <p class="artifact-link">Read &rarr;</p>
  </a>
  {% endif %}
{% endfor %}

</div>

---

[This Site](/practice/this-site/) documents how the process built the thing you're reading right now. It's the only page that never closes.
