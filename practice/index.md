---
layout: default
title: "Practice"
tier_label: PRACTICE
description: "The creative work that runs alongside the professional work. Different material, same instinct."
permalink: /practice/
seo_keywords: ["PressWorks", "Versograms", "Photogeography", "MathOnTape", "Echo and Bone", "Order of the Aetherwright", "creative practice"]
---

# Practice

Side projects, personal work, things I make because the instinct doesn't shut off when the client work is done. Print processes, typography experiments, photography, music, fiction. Some of these are active. Some are slow burns. All of them use the same methodology I use on everything else.

---

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
    <p class="artifact-link">{% if item.status == "In Development" %}<span class="status-badge">In progress</span> {% endif %}Read &rarr;</p>
  </a>
  {% endif %}
{% endfor %}

</div>
