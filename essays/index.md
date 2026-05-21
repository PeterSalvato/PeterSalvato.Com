---
layout: default
title: "Writing"
permalink: /essays/
redirect_from:
  - /blog/
description: "Writing on design practice, education, AI governance, and how they're the same thing. Twenty-five years of the same operation across different materials."
seo_keywords: ["design methodology", "systems architecture", "creative AI practice", "AI governance", "design history", "design education", "essays on AI and design", "creative practitioner writing", "voice governance", "structural design thinking"]
---

<div class="blog-index">

  {% include page-hero.html title="Writing" subtitle="Design practice, education, AI governance, and how they turn out to be the same thing." %}

  <a href="{{ '/essays/engineering-intent/' | relative_url }}" class="artifact-card artifact-card--link artifact-card--series">
    <div class="artifact-card-body">
      <div class="artifact-hero-header">
        <div class="artifact-hero-title">
          <span class="series-indicator">Series</span>
          <h3>Engineering Intent</h3>
          <p class="artifact-subtitle">Spiral curriculum. 23 chapters.</p>
        </div>
      </div>
      <p class="artifact-context">Twenty-five years of the same operation across different materials. Construction sites, print shops, enterprise platforms, brand systems, AI governance. The methodology existed before the tools did.</p>
      <p class="artifact-link">Read &rarr;</p>
    </div>
  </a>

  {% assign standalone_posts = site.essays | sort: "order" %}
  {% for post in standalone_posts %}
    {% if post.published %}
      {% include artifact-hero.html item=post url=post.url is_link=true %}
    {% endif %}
  {% endfor %}

</div>
