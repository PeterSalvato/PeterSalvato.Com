---
layout: default
title: "Work"
description: "Enterprise platforms, brand systems, typography, photography, music, fiction. Different materials, same eye."
permalink: /work/
redirect_from:
  - /evidence/
  - /projects/
seo_keywords: ["Peter Salvato work", "design engineering", "enterprise platforms", "brand systems", "creative practice", "applied design"]
---

{% include page-hero.html title="Work" subtitle="Different materials, same eye." image="/assets/img/visual-language/venn@2x.png" %}

<div id="domain-artifacts">

{% assign all_work = site.work | sort: "order" %}
{% assign featured = all_work | where: "featured", true %}
{% assign standard = all_work | where_exp: "item", "item.featured != true" %}

{% for item in featured %}
  {% if item.published != false and item.listed != false %}
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
      {% if item.description %}<p class="artifact-context">{{ item.description }}</p>{% endif %}
      <p class="artifact-link">Read &rarr;</p>
    </div>
  </a>
  {% endif %}
{% endfor %}

</div>

<div id="domain-artifacts" class="work-standard">

{% for item in standard %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link artifact-card--compact {% if item.thumbnail %}artifact-card--has-thumb{% endif %}">
    {% if item.thumbnail %}
    <div class="artifact-thumb{% if item.thumbnail_invert %} artifact-thumb--dark{% endif %}">
      <img src="{{ item.thumbnail | relative_url }}" alt="{{ item.title }}">
    </div>
    {% else %}
    <div class="artifact-thumb--placeholder"></div>
    {% endif %}
    <div class="artifact-card-body">
      <h3>{{ item.title }}</h3>
      {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
    </div>
  </a>
  {% endif %}
{% endfor %}

</div>
