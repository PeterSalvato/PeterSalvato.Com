---
layout: default
title: "Work"
permalink: /work/
description: "Research, tools, and applied work. A table of contents for the practice."
seo_keywords: ["Peter Salvato work", "accommodation design", "AI governance", "design engineering", "FormWork", "SavePoint Syntax", "LensArray"]
last_modified: 2026-03-13
---

<div class="work-toc">

<section class="work-section work-section--featured">
<h2 class="work-section-label">Research</h2>
{% assign whitepapers = site.practice | where: "practice_group", "whitepaper" %}
{% for item in whitepapers %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="work-entry work-entry--featured">
    <h3 class="work-entry-title">{{ item.title }}</h3>
    {% if item.subtitle %}<p class="work-entry-subtitle">{{ item.subtitle }}</p>{% endif %}
    {% if item.description %}<p class="work-entry-description">{{ item.description }}</p>{% endif %}
  </a>
  {% endif %}
{% endfor %}
</section>

<section class="work-section">
<h2 class="work-section-label">Tools</h2>
{% for item in site.systems %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="work-entry">
    <span class="work-entry-title">{{ item.title }}</span>
    {% if item.subtitle %}<span class="work-entry-brief">{{ item.subtitle }}</span>{% endif %}
  </a>
  {% endif %}
{% endfor %}
</section>

<section class="work-section">
<h2 class="work-section-label">Applied</h2>
{% for item in site.evidence %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="work-entry">
    <span class="work-entry-title">{{ item.title }}</span>
    {% if item.subtitle %}<span class="work-entry-brief">{{ item.subtitle }}</span>{% endif %}
  </a>
  {% endif %}
{% endfor %}
</section>

{% assign other_practice = site.practice | where_exp: "item", "item.practice_group != 'whitepaper'" %}
{% assign visible_other = "" | split: "" %}
{% for item in other_practice %}
  {% if item.published != false and item.listed != false %}
    {% assign visible_other = visible_other | push: item %}
  {% endif %}
{% endfor %}
{% if visible_other.size > 0 %}
<section class="work-section">
<h2 class="work-section-label">Workshop</h2>
{% for item in visible_other %}
  <a href="{{ item.url | relative_url }}" class="work-entry">
    <span class="work-entry-title">{{ item.title }}</span>
    {% if item.subtitle %}<span class="work-entry-brief">{{ item.subtitle }}</span>{% endif %}
  </a>
{% endfor %}
</section>
{% endif %}

</div>
