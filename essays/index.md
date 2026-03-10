---
layout: default
title: "Essays"
permalink: /essays/
redirect_from:
  - /blog/
description: "Writing on design practice, education, AI governance, and how they're the same thing. Twenty-five years of the same operation across different materials."
seo_keywords: ["design engineering", "design methodology", "systems architecture", "operational methodology", "AI governance", "design history", "design education", "persona extraction"]
---

<div class="blog-index">
  <h1>Essays</h1>

  <div class="essays-tabs">
    <button class="essays-tab" data-tab="series">Series</button>
    <button class="essays-tab active" data-tab="standalone">Essays</button>
  </div>

  <div class="essays-panel" id="panel-series">
    {% assign series_info = site.data.series["engineering-intent"] %}
    <div class="series-header">
      <h2 class="series-title">{{ series_info.title }}</h2>
      <p class="series-description">{{ series_info.description }}</p>
    </div>

    {% assign series_posts = site.essays | where: "series", "engineering-intent" | sort: "chapter" %}

    {% if series_posts.size > 0 %}
    <ol class="series-list">
      {% for post in series_posts %}
      {% if post.published %}
      <li class="series-list-item">
        <div class="series-list-entry">
          <span class="series-list-chapter">{{ post.chapter }}</span>
          <a class="series-list-link" href="{{ post.url | relative_url }}">{{ post.title }}</a>
          {% if post.description %}
          <p class="series-list-description">{{ post.description }}</p>
          {% endif %}
        </div>
      </li>
      {% endif %}
      {% endfor %}
    </ol>
    {% else %}
    <p class="blog-empty">Series launching soon.</p>
    {% endif %}
  </div>

  <div class="essays-panel active" id="panel-standalone">
    {% assign standalone_posts = site.essays | where_exp: "post", "post.series == nil" | sort: "order" %}

    {% if standalone_posts.size > 0 %}
    <ul class="blog-list">
      {% for post in standalone_posts %}
      {% if post.published %}
      <li class="blog-list-item">
        <div class="blog-list-entry">
          <a class="blog-list-link" href="{{ post.url | relative_url }}">{{ post.title }}</a>
          {% if post.description %}
          <p class="blog-list-description">{{ post.description }}</p>
          {% endif %}
        </div>
      </li>
      {% endif %}
      {% endfor %}
    </ul>
    {% else %}
    <p class="blog-empty">No standalone essays yet.</p>
    {% endif %}
  </div>
</div>

<script>
document.querySelectorAll('.essays-tab').forEach(function(tab) {
  tab.addEventListener('click', function() {
    document.querySelectorAll('.essays-tab').forEach(function(t) { t.classList.remove('active'); });
    document.querySelectorAll('.essays-panel').forEach(function(p) { p.classList.remove('active'); });
    tab.classList.add('active');
    document.getElementById('panel-' + tab.dataset.tab).classList.add('active');
  });
});
</script>
