---
layout: default
title: "Work"
permalink: /work/
description: "Ideas, tools, and applied work. Three entry paths into the same practice."
seo_keywords: ["Peter Salvato work", "accommodation design", "AI governance", "design engineering", "FormWork", "SavePoint Syntax", "LensArray"]
last_modified: 2026-03-13
---

<div class="work-index">

<div class="work-group">
<h2><a href="/practice/">Practice</a></h2>
<p class="work-group-description">Published research, applied methods, and the creative work behind the tools.</p>
<div class="work-cards">
{% for item in site.practice %}
  {% if item.published != false and item.listed != false %}
  {% include artifact-hero.html item=item url=item.url is_link=true %}
  {% endif %}
{% endfor %}
</div>
</div>

<div class="work-group">
<h2><a href="/systems/">Tools</a></h2>
<p class="work-group-description">Three systems for working with AI, built from accommodation design. Each one accommodates a specific processing constraint.</p>
<div class="work-cards">
{% for item in site.systems %}
  {% if item.published != false and item.listed != false %}
  {% include artifact-hero.html item=item url=item.url is_link=true %}
  {% endif %}
{% endfor %}
</div>
</div>

<div class="work-group">
<h2><a href="/evidence/">Proof</a></h2>
<p class="work-group-description">Applied work across enterprise platforms, brand systems, and this site. Each one demonstrates the practice operating on real material.</p>
<div class="work-cards">
{% for item in site.evidence %}
  {% if item.published != false and item.listed != false %}
  {% include artifact-hero.html item=item url=item.url is_link=true %}
  {% endif %}
{% endfor %}
</div>
</div>

</div>
