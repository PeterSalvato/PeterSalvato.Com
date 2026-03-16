---
layout: project
redirect_from:
  - /output/versagrams/
  - /practice/versagrams/
practice_group: meditations
published: false
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

I kept looking at song posters where the image references the mood and the lyrics get set in whatever type looks good. Neither element is derived from the same source, so they coexist without cohering. The feeling of the song lives in the relationship between words and image, but most design processes treat them as separate problems.

I wanted to see what happens when the lyrics are the actual generative input. Not reference material for an illustration. The text itself, fed into AI image generation within the typographic parameters the grid establishes. What comes back is specific to that song, because the input is the actual words, not an interpretation of them.

## THE PRESSURE

Lyrics carry structural rhythm, density, emotional weight that most visual treatments strip away. A poster for "Cherub Rock" and a poster for "Limit to Your Love" should not look like the same decision. But if the format changes per piece, you're just decorating. The constraint has to be fixed. The content has to be what makes each piece distinct.

The furniture-from-different-stores problem: type and image designed separately fit together technically but never quite right. One element gets treated as primary, the other as support. Designing the parts separately means the relationship between them is an accident.

## THE BUILD

**Fixed format across every piece.** Polaroid-style vertical. Song title at the top. AI-generated image. Song lyrics. Song metadata, including QR code. This structure does not change per piece. The format is the same whether the song is Soul Coughing or Tool.

**Typographic structure as shared constraint.** Swiss grid, rhythm, and proportion establish the framework. Not adjusted piece by piece. The system is fixed, and the content populates it.

**Image generation from lyric content.** The AI reads the lyrics and generates imagery within the parameters the grid establishes. This is not: write a prompt about the song, generate an image, drop it in. The lyric text is the generative source. The grid is the constraint the image inhabits.

**Physical artifact.** Collectible prints, small-batch. A Spotify playlist accompanies the digital presentation.

## THE WORK

<div class="versograms-gallery">
{% for song in site.data.versograms.songs %}
  {% if song.batch == 1 %}
  <a href="{{ '/versograms/' | append: song.slug | append: '/' | relative_url }}" class="versograms-gallery-link">
    {% include versogram-card.html song=song full=false %}
  </a>
  {% endif %}
{% endfor %}
</div>

## THE PROOF

A fixed container with a shared constraint makes the relationship between type and image legible, and makes it repeatable across 16 songs without any two pieces feeling like the same decision made twice. [Meditations](/practice/meditations/) works from the same premise: lock the visual system, populate it with content the constraint wasn't designed for, and see what emerges.
