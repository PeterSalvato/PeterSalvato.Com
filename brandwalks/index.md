---
layout: default
title: "Brandwalks"
description: "Six brands read through eight evaluation lenses. The pieces always work. The joints always fail. These readings show where the attunement breaks down and why nobody is holding the whole picture."
permalink: /brandwalks/
seo_keywords: ["brand reading", "brand analysis", "brand coherence", "brand voice audit", "structural brand analysis", "creative AI", "Peter Salvato"]
---

{% include page-hero.html title="Brandwalks" subtitle="The pieces always work. The joints always fail." %}

The finding is always the same. The individual pieces work. Someone was paying attention to each one. The product pages are tight. The blog is good. The content team knows what it's doing. And then something breaks. The about page sounds like a different company. The brand story is missing entirely. The strongest voice on the site is buried three clicks deep where nobody sees it.

The pieces hold because someone was attuned to each piece. The joints fail because nobody was attuned to the whole system. Nobody was reading what the visitor actually receives before designing what the brand sends. That's the gap. And it's the same gap in all six readings.

I built eight evaluation lenses for reading brand coherence, each one extracted from practitioners I've studied: discipline, economy, typographic communication, design thinking, living knowledge, authenticity, narrative, atmosphere. I run them against a brand's web presence using AI tools, then walk through the results myself. The lenses surface structural patterns. The seeing is mine. I'm looking for the same thing I was trained to look for at SVA and the same thing I look for in every system I design: where does the accommodation break down? Who is reading the system on the other end?

---

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
