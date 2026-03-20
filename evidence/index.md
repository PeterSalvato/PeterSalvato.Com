---
layout: default
title: "Work"
tier_label: WORK
description: "Professional and personal. Enterprise platforms, brand systems, print, music, fiction. The material changes. The methodology doesn't."
permalink: /evidence/
seo_keywords: ["Peter Salvato work", "design engineering", "enterprise platforms", "brand systems", "applied design", "creative practice", "PressWorks", "Versograms", "Photogeography"]
---

# Work

I figure out what the system on the other end actually needs, then build the structure to meet it. Enterprise platforms, brand identities, print processes, photography, music, a novel. The material changes. The first move is the same: read what's there, design for what it can handle.

---

## Professional

<div id="domain-artifacts">

{% for item in site.evidence %}
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

## Personal

Side projects, personal work, things I make because the instinct doesn't shut off when the client work is done. Print processes, typography experiments, photography, music, fiction. Same methodology on all of it.

<div id="domain-artifacts">

{% for item in site.practice %}
  {% if item.published != false and item.listed != false %}
  <a href="{{ item.url | relative_url }}" class="artifact-card artifact-card--link">
    <div class="artifact-hero-header">
      <div class="artifact-hero-title">
        <h3>{{ item.title }}</h3>
        {% if item.subtitle %}<p class="artifact-subtitle">{{ item.subtitle }}</p>{% endif %}
      </div>
    </div>
    {% if item.description %}<p class="artifact-context">{{ item.description }}</p>{% endif %}
    <p class="artifact-link">{% if item.status == "In Development" %}<span class="status-badge">Ongoing</span> {% endif %}Read &rarr;</p>
  </a>
  {% endif %}
{% endfor %}

</div>
