---
layout: default
title: "Brandwalks"
description: "Structural brand analysis through eight evaluation lenses. How brands tell their story through their web presence, where the coherence holds, and where it breaks."
permalink: /brandwalks/
seo_keywords: ["brand reading", "brand analysis", "brand coherence", "brand voice audit", "structural brand analysis", "creative AI", "Peter Salvato"]
---

{% include page-hero.html title="Brandwalks" subtitle="Structural brand analysis through eight evaluation lenses." %}

I built eight evaluation lenses for reading brand coherence, each one extracted from practitioners I've studied. Discipline, economy, typographic communication, design thinking, living knowledge, authenticity, narrative, atmosphere. I run them against a brand's web presence using AI tools, then walk through the results myself. The lenses surface structural patterns. The seeing is mine.

<div id="domain-artifacts">

{% assign sorted_readings = site.brandwalks | sort: "date" | reverse %}
{% for item in sorted_readings %}
  {% if item.published != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link {% if item.thumbnail %}artifact-card--has-thumb{% endif %}">
    {% if item.thumbnail %}
    <div class="artifact-thumb">
      <img src="{{ item.thumbnail | relative_url }}" alt="{{ item.title }}">
    </div>
    {% endif %}
    <div class="artifact-card-body">
      <div class="artifact-hero-header">
        <div class="artifact-hero-title">
          <h3>{{ item.title }}</h3>
          {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
        </div>
      </div>
      <p class="artifact-link">Read &rarr;</p>
    </div>
  </a>
  {% endif %}
{% endfor %}

</div>
