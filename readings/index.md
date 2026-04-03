---
layout: default
title: "Readings"
description: "Structural brand analysis through eight evaluation lenses. How brands tell their story through their web presence, where the coherence holds, and where it breaks."
permalink: /readings/
seo_keywords: ["brand reading", "brand analysis", "brand coherence", "brand voice audit", "structural brand analysis", "creative AI", "Peter Salvato"]
---

{% include page-hero.html title="Readings" subtitle="Structural brand analysis through eight evaluation lenses." %}

I built eight evaluation lenses for reading brand coherence, each one extracted from practitioners I've studied. Discipline, economy, typographic communication, design thinking, living knowledge, authenticity, narrative, atmosphere. I run them against a brand's web presence using AI tools, then walk through the results myself. The lenses surface structural patterns. The seeing is mine.

<div id="domain-artifacts">

{% assign sorted_readings = site.readings | sort: "date" | reverse %}
{% for item in sorted_readings %}
  {% if item.published != false %}
  {% include artifact-hero.html item=item url=item.url is_link=true %}
  {% endif %}
{% endfor %}

</div>
