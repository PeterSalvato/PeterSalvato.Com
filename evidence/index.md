---
layout: default
title: "Work"
tier_label: WORK
description: "Enterprise platforms, brand systems, identity design. Applied work for real clients with real constraints."
permalink: /evidence/
seo_keywords: ["Peter Salvato work", "design engineering", "enterprise platforms", "brand systems", "applied design"]
---

# Work

I figure out what the system on the other end actually needs, then build the structure to meet it. Enterprise platforms, brand identities, product systems. The material changes. The first move is the same: read what's there, design for what it can handle.

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
