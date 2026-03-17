---
layout: project
redirect_from:
  - /output/versagrams/
  - /practice/versagrams/
practice_group: meditations
published: true
title: "Versograms"
subtitle: "Song Lyrics as Typographic Architecture"
icon: construction
status: "In Development"
context: "Most song posters illustrate what a song is 'about.' The image references the mood. The lyrics get set in type. Neither element comes from the same source. The feeling lives in the relationship, but the process treats them as separate problems."
faculty: ["design"]
seo_keywords: ["Typography Design", "Song Lyrics", "Constraint-Based Generation", "Poster Series", "Visual-Textual Integration"]
description: "Song lyrics as typographic architecture. Polaroid-vertical format, Swiss grid, AI-generated imagery from lyric content. Fixed constraint across 16 songs."
last_modified: 2026-03-16
---

Sixteen songs through the same fixed container. Polaroid-style vertical, Swiss grid. The lyrics are the actual generative input for the AI imagery. Not a prompt about the song. The words themselves.

<div class="versograms-gallery">
{% for song in site.data.versograms.songs %}
  <a href="{{ '/versograms/' | append: song.slug | append: '/' | relative_url }}" class="versograms-gallery-link">
    {% include versogram-card.html song=song full=false %}
  </a>
{% endfor %}
</div>

The format doesn't change per piece. The content is what makes each one distinct. The [Art Department](/practice/art-department/) renders the final print-ready output. [Photogeography](/practice/photogeography/) applies the same principle to photography.
