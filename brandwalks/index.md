---
layout: default
title: "Brandwalks"
description: "Structural brand readings by a practitioner with a relationship to every brand on this page. The pieces always work. The joints always fail. These readings show where the attunement breaks down and why nobody is holding the whole picture."
permalink: /brandwalks/
seo_keywords: ["brand reading", "brand analysis", "brand coherence", "brand voice audit", "structural brand analysis", "creative AI", "Peter Salvato"]
---

{% include page-hero.html title="Brandwalks" subtitle="The pieces always work. The joints always fail." %}

Every brand on this page is one I use, wear, cook with, produce in, or grew up around. The relationship is the reason the reading has standing.

The finding is usually the same. The individual pieces work. Someone was paying attention to each one. The product pages are tight. The blog is good. The content team knows what it's doing. And then something breaks. The about page sounds like a different company. The brand story is missing entirely. The strongest voice on the site is buried three clicks deep where nobody sees it.

The pieces hold because someone was attuned to each piece. The joints fail because nobody was attuned to the whole system.

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
