---
layout: default
title: "Work"
permalink: /work/
description: "Systems, applied work, and the practice behind them."
seo_keywords: ["Peter Salvato work", "accommodation design", "AI governance", "design engineering", "FormWork", "SavePoint Syntax", "LensArray"]
last_modified: 2026-03-13
---

# Work

## Systems

<ul class="work-list">
{% for page in site.systems %}
  <li><a href="{{ page.url | relative_url }}">{{ page.title }}</a> — {{ page.subtitle | default: page.description | truncatewords: 20 }}</li>
{% endfor %}
</ul>

## Applied Work

<ul class="work-list">
{% for page in site.evidence %}
  <li><a href="{{ page.url | relative_url }}">{{ page.title }}</a> — {{ page.subtitle | default: page.description | truncatewords: 20 }}</li>
{% endfor %}
</ul>

## Practice

<ul class="work-list">
{% assign practice_pages = site.practice | sort: "title" %}
{% for page in practice_pages %}
  <li><a href="{{ page.url | relative_url }}">{{ page.title }}</a></li>
{% endfor %}
</ul>
