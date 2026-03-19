---
layout: default
title: "HomeWorks"
permalink: /essays/homeworks/
redirect_from: /essays/modernist-homestead/
description: "An intentional life is within reach, even with limited resources, if you bring engineering to the things that matter. Kitchen, garden, workshop, the whole homestead."
seo_keywords: ["neurodivergent family systems", "ADHD household management", "cooking with ARFID kids"]
---

# HomeWorks

An intentional life is within reach, even with limited resources, if you bring engineering to the things that matter. Four people, four profiles, one table. Systems for the kitchen, the garden, and the infrastructure that holds it together.

The same pattern runs through every chapter: attune to what all surfaces need, modularize so failure is local, use technology to carry what working memory drops. The material changes. The pattern doesn't.

<div class="dossier-meta">
  <span class="dossier-status">In progress</span>
  <span class="dossier-status">
    {% assign hw_posts = site.essays | where: "series", "homeworks" %}
    {% assign hw_published = 0 %}
    {% for post in hw_posts %}{% if post.published %}{% assign hw_published = hw_published | plus: 1 %}{% endif %}{% endfor %}
    {{ hw_published }}/20 published
  </span>
</div>

---

{::nomarkdown}
{% assign chapters = site.essays | where: "series", "homeworks" | sort: "chapter" %}
{% for post in chapters %}
  {% if post.published %}
  {% include artifact-hero.html item=post url=post.url is_link=true %}
  {% endif %}
{% endfor %}
{:/nomarkdown}

---

The methodology behind this series is the same one described in [Accommodation Design](/research/accommodation-design/). The tools are described in [FormWork](/systems/formwork/). The difference is the material: instead of enterprise software or AI systems, it's a family of four trying to eat dinner.
