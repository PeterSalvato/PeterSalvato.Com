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
<h2><a href="/practice/whitepapers/">Ideas</a></h2>
<p class="work-group-description">Published research on accommodation design, AI governance, and the principles behind the tools.</p>
<ul class="work-list">
{% assign whitepapers = site.practice | where: "practice_group", "whitepaper" | sort: "title" %}
{% for item in whitepapers %}
  {% if item.published != false %}
  <li><a href="{{ item.url | relative_url }}">{{ item.title }}</a></li>
  {% endif %}
{% endfor %}
</ul>
</div>

<div class="work-group">
<h2><a href="/systems/">Tools</a></h2>
<p class="work-group-description">Three systems for working with AI, built from accommodation design. Each one accommodates a specific processing constraint.</p>
<ul class="work-list">
{% for item in site.systems %}
  {% if item.published != false and item.listed != false %}
  <li><a href="{{ item.url | relative_url }}">{{ item.title }}</a></li>
  {% endif %}
{% endfor %}
</ul>
</div>

<div class="work-group">
<h2><a href="/evidence/">Proof</a></h2>
<p class="work-group-description">Applied work across enterprise platforms, brand systems, and this site. Each one demonstrates the practice operating on real material.</p>
<ul class="work-list">
{% for item in site.evidence %}
  {% if item.published != false and item.listed != false %}
  <li><a href="{{ item.url | relative_url }}">{{ item.title }}</a></li>
  {% endif %}
{% endfor %}
</ul>
</div>

</div>
