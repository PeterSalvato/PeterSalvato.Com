---
layout: project
redirect_from: /output/photogeography/
practice_group: meditations
published: true
title: "Photogeography"
subtitle: "Format-Locked Visual Archive"
icon: construction
status: "In Development"
context: "Photography started with a borrowed SLR and a class in Brooklyn. It became the visual component of everything: travel, relocation, documentation. Decades of narrative image that needed a formal system."
faculty: ["design", "uxia"]
seo_keywords: ["Photography Systems", "Constraint-Based Design", "Visual Archive", "Format as Forcing Function", "Metadata Structure"]
description: "Constraint-locked photography. Fixed aspect ratios encode the relational mode of each encounter. Metadata pins every image to its exact geography. No cropping."
last_modified: 2026-02-25
---

My father was into photography. A neighbor gave me an SLR (the Minolta) when I was a kid, and I ended up in a photo class at Kingsborough. From there it became the visual component of everything: travel, relocation, documentation.

Three locked aspect ratios, no cropping, no post-processing. The shape the image arrived in is the shape it holds. Metadata pins every image to its exact geography: coordinates, timestamp, camera, film.

<div class="photogeography-gallery">
{% for photo in site.data.photogeography.photos %}
  {% if photo.batch == 1 %}
  <a href="{{ '/photogeography/' | append: photo.slug | append: '/' | relative_url }}" class="photogeography-gallery-link">
    {% include photogeography-card.html photo=photo full=false %}
  </a>
  {% endif %}
{% endfor %}
</div>

The [Art Department](/practice/art-department/) renders the final output: 11x17 tabloid posters with EXIF-driven metadata. Same principle as [Versograms](/practice/versograms/): lock the format, let the content differentiate each piece.
