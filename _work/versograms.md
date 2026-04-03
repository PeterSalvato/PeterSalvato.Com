---
layout: project
redirect_from:
  - /practice/versograms/
  - /output/versagrams/
  - /practice/versagrams/
practice_group: meditations
published: true
title: "Versograms"
order: 5
subtitle: "Song Lyrics as Typographic Architecture"
icon: construction
status: "In Development"
context: "Most song posters illustrate what a song is 'about.' The image references the mood. The lyrics get set in type. Neither element comes from the same source. The feeling lives in the relationship, but the process treats them as separate problems."
faculty: ["design"]
seo_keywords: ["Typography Design", "Song Lyrics", "Constraint-Based Generation", "Poster Series", "Visual-Textual Integration", "song lyric poster design", "music poster art", "AI generated music artwork"]
description: "Song lyrics as typographic architecture. Polaroid-vertical format, Swiss grid, AI-generated imagery from lyric content. Fixed constraint across 16 songs."
last_modified: 2026-03-16
thumbnail: /assets/img/versograms_cardImage.png
---

Six songs through the same fixed container. Polaroid-style vertical, Swiss grid. The lyrics are the actual generative input for the AI imagery. Not a prompt about the song. The words themselves. Each poster records its generation metadata: model, seed, guidance scale, sampler. The image is reproducible. The constraint is the format. The variable is the song.

<div class="versograms-gallery">
{% for song in site.data.versograms.songs %}
  {% if song.ai_model != "" %}
  <a href="{{ '/versograms/' | append: song.slug | append: '/' | relative_url }}" class="versograms-gallery-link">
    {% include versogram-card.html song=song full=false %}
  </a>
  {% endif %}
{% endfor %}
</div>

The format doesn't change per piece. The content is what makes each one distinct. The [Art Department](/practice/art-department/) renders the final print-ready output. [Photogeography](/practice/photogeography/) applies the same principle to photography.
