---
layout: default
title: "Engineering Intent"
permalink: /essays/engineering-intent/
description: "Twenty-five years of the same operation across different materials. Construction sites, print shops, enterprise platforms, brand systems, AI governance. The methodology existed before the tools did."
---

# Engineering Intent

Twenty-five years of the same operation across different materials. Construction sites, print shops, enterprise platforms, brand systems, AI governance. The methodology existed before the tools did.

This is a spiral curriculum. The early chapters start in physical spaces (construction sites, DJ booths, classrooms) and move toward the systems and tools that came out of them. Ideas introduced early return later with more context. There is no wrong entry point, but the sequence is intentional.

<div class="dossier-meta">
  <span class="dossier-status">In development</span>
  <span class="dossier-status">
    {% assign ei_posts = site.essays | where: "series", "engineering-intent" %}
    {% assign ei_published = 0 %}
    {% for post in ei_posts %}{% if post.published %}{% assign ei_published = ei_published | plus: 1 %}{% endif %}{% endfor %}
    {{ ei_published }}/191 published
  </span>
</div>

---

{% assign chapters = site.essays | where: "series", "engineering-intent" | sort: "order" %}
{% for post in chapters %}
  {% if post.published %}
  {% include artifact-hero.html item=post url=post.url is_link=true %}
  {% endif %}
{% endfor %}

---

This series connects to the research papers on this site. The methodology described here is formalized in [Accommodation Design](/practice/accommodation-design/) and applied through [FormWork](/systems/formwork/).
