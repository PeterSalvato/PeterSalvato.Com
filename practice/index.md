---
layout: default
title: "Practice"
tier_label: PRACTICE
description: "Print processes, typography experiments, photography, music, fiction. The methodology doesn't shut off when the client work is done."
permalink: /practice/
seo_keywords: ["Peter Salvato practice", "creative practice", "PressWorks", "Versograms", "Photogeography", "typography", "design experiments"]
---

# Practice

Things I make because the instinct doesn't shut off. Print processes, typography experiments, photography, music, fiction. Same methodology on all of it.

<div id="domain-artifacts">

{% assign sorted_practice = site.practice | sort: "order" %}
{% for item in sorted_practice %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link artifact-card--has-thumb">
    <div class="artifact-thumb{% unless item.thumbnail %} artifact-thumb--empty{% endunless %}">
      {% if item.thumbnail %}
      <img src="{{ item.thumbnail | relative_url }}" alt="{{ item.title }}">
      {% endif %}
    </div>
    <div class="artifact-card-body">
      <div class="artifact-hero-header">
        <div class="artifact-hero-title">
          <h3>{{ item.title }}</h3>
          {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
        </div>
      </div>
      {% if item.description %}<p class="artifact-context">{{ item.description }}</p>{% endif %}
      <p class="artifact-link">{% if item.status == "In Development" %}<span class="status-badge">Ongoing</span> {% endif %}Read &rarr;</p>
    </div>
  </a>
  {% endif %}
{% endfor %}

</div>
