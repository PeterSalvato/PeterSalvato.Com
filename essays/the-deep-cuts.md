---
layout: default
title: "The Deep Cuts"
permalink: /essays/the-deep-cuts/
description: "Music production as somatic design practice. What DJing, mixing, and sound design teach about processing profiles, attention accommodation, and building systems that respond to the room."
---

# The Deep Cuts

Music production as somatic design practice. What DJing, mixing, and sound design teach about processing profiles, attention accommodation, and building systems that respond to the room.

<div class="dossier-meta">
  <span class="dossier-status">In development</span>
</div>

---

{::nomarkdown}
{% assign chapters = site.essays | where: "series", "the-deep-cuts" | sort: "order" %}
{% assign has_published = false %}
{% for post in chapters %}
  {% if post.published %}
  {% assign has_published = true %}
  {% include artifact-hero.html item=post url=post.url is_link=true %}
  {% endif %}
{% endfor %}
{:/nomarkdown}

{% unless has_published %}
Chapters are being written. The practice page for [The Deep Cuts](/practice/the-deep-cuts/) describes the project.
{% endunless %}
