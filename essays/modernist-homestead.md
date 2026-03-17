---
layout: default
title: "Modernist Homestead"
permalink: /essays/modernist-homestead/
description: "A household where executive function, sensory regulation, and food tolerance are all constrained resources. Four people, four profiles, one table."
---

# Modernist Homestead

A household where executive function, sensory regulation, and food tolerance are all constrained resources. Four people, four profiles, one table. Systems for the kitchen, the garden, and the infrastructure that holds it together.

This series applies the same methodology I use on enterprise platforms and AI tools to the place that needed it most. The kitchen is a design problem. Breakfast is an information architecture problem. The cook who runs the system is also the person who needs accommodation from it.

<div class="dossier-meta">
  <span class="dossier-status">In progress</span>
  <span class="dossier-status">
    {% assign mh_posts = site.essays | where: "series", "modernist-homestead" %}
    {% assign mh_published = 0 %}
    {% for post in mh_posts %}{% if post.published %}{% assign mh_published = mh_published | plus: 1 %}{% endif %}{% endfor %}
    {{ mh_published }}/20 published
  </span>
</div>

---

{::nomarkdown}
{% assign chapters = site.essays | where: "series", "modernist-homestead" | sort: "chapter" %}
{% for post in chapters %}
  {% if post.published %}
  {% include artifact-hero.html item=post url=post.url is_link=true %}
  {% endif %}
{% endfor %}
{:/nomarkdown}

---

The methodology behind this series is the same one described in [Accommodation Design](/practice/accommodation-design/). The tools are described in [FormWork](/systems/formwork/). The difference is the material: instead of enterprise software or AI systems, it's a family of four trying to eat dinner.
