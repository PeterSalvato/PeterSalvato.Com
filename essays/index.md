---
layout: default
title: "Writing"
permalink: /essays/
redirect_from:
  - /blog/
description: "Writing on design practice, education, AI governance, and how they're the same thing. Twenty-five years of the same operation across different materials."
seo_keywords: ["design engineering", "design methodology", "systems architecture", "operational methodology", "AI governance", "design history", "design education", "persona extraction"]
---

<div class="blog-index">
  <h1>Writing</h1>

  <p>Design practice, education, AI governance, and how they turn out to be the same thing. The essays are standalone. Each one covers a single idea. The series go deeper: Engineering Intent is the methodology from the ground up, Modernist Homestead is the same thinking applied at home.</p>

  <div class="essays-tabs">
    <button class="essays-tab active" data-tab="standalone">Essays</button>
    <button class="essays-tab" data-tab="series">Series</button>
  </div>

  <div class="essays-panel active" id="panel-standalone">
    {% assign standalone_posts = site.essays | where_exp: "post", "post.series == nil" | sort: "order" %}
    {% for post in standalone_posts %}
      {% if post.published %}
        {% include artifact-hero.html item=post url=post.url is_link=true %}
      {% endif %}
    {% endfor %}
  </div>

  <div class="essays-panel" id="panel-series">
    {% for series_entry in site.data.series %}
      {% assign series_key = series_entry[0] %}
      {% assign series_info = series_entry[1] %}
      {% assign series_posts = site.essays | where: "series", series_key | sort: "order" %}
      {% assign published_count = 0 %}
      {% for post in series_posts %}{% if post.published %}{% assign published_count = published_count | plus: 1 %}{% endif %}{% endfor %}
      {% if published_count > 0 %}
      <a href="{{ '/essays/' | append: series_key | append: '/' | relative_url }}" class="artifact-card artifact-card--link">
        <div class="artifact-hero-header">
          <div class="artifact-hero-title">
            <h3>{{ series_info.title }}</h3>
          </div>
        </div>
        <p class="artifact-context">{{ series_info.description }}</p>
        <div class="dossier-meta">
          {% if series_info.status %}<span class="dossier-status">{{ series_info.status }}</span>{% endif %}
          <span class="dossier-status">{{ published_count }}/{{ series_info.chapters | default: "?" }} published</span>
        </div>
        <p class="artifact-link">Read &rarr;</p>
      </a>
      {% endif %}
    {% endfor %}
  </div>
</div>

<script>
(function() {
  var tabs = document.querySelectorAll('.essays-tab');
  var panels = document.querySelectorAll('.essays-panel');

  function activate(tabName) {
    tabs.forEach(function(t) { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
    panels.forEach(function(p) { p.classList.remove('active'); });
    var tab = document.querySelector('.essays-tab[data-tab="' + tabName + '"]');
    var panel = document.getElementById('panel-' + tabName);
    if (tab && panel) {
      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');
      panel.classList.add('active');
    }
  }

  // Restore tab from hash on load
  var hash = window.location.hash.replace('#', '');
  if (hash && document.getElementById('panel-' + hash)) {
    activate(hash);
  }

  tabs.forEach(function(tab, i) {
    tab.setAttribute('role', 'tab');
    tab.setAttribute('aria-selected', tab.classList.contains('active'));
    tab.addEventListener('click', function() {
      var name = tab.dataset.tab;
      activate(name);
      history.replaceState(null, '', '#' + name);
    });
    tab.addEventListener('keydown', function(e) {
      var target;
      if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
        target = tabs[(i + 1) % tabs.length];
      } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
        target = tabs[(i - 1 + tabs.length) % tabs.length];
      }
      if (target) {
        e.preventDefault();
        target.focus();
        target.click();
      }
    });
  });

  // Handle hash changes from sidebar/external links
  window.addEventListener('hashchange', function() {
    var h = window.location.hash.replace('#', '');
    if (h && document.getElementById('panel-' + h)) {
      activate(h);
    }
  });
})();
</script>
