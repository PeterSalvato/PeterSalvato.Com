---
layout: default
title: "Whitepapers"
permalink: /whitepapers/
description: "Research papers on accommodation design, AI governance, and the methodology behind the tools. The technical depth behind how I work."
seo_keywords: ["accommodation design", "AI governance", "voice governance", "input inversion", "prosthetic cognition", "lens extraction", "semantic hierarchy", "AI research papers", "accommodation design research", "voice AI research"]
---

# Whitepapers

The tools I use came from a methodology I formalized over three years of building with AI. These papers document the thinking behind the tools. They cover how raw input becomes structured output, how voice survives the process, and how evaluation works when the system doing the work is also the system being evaluated.

If you're here from a search engine or a citation, this is the right place. If you're here from the site, you probably came through [How I Work](/systems/), which introduces the same ideas without the academic register.

---

<div id="domain-artifacts">

{% assign whitepapers = site.research %}
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
