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

My father was into photography. A neighbor gave me an SLR (the Minolta) when I was a kid, and I ended up in a photo class at Kingsborough. From there it became the visual component of everything: travel, relocation, documentation. Narrative image.

Photogeography is a formal system for that archive, one that preserves the record rather than curating it into something else. Three locked aspect ratios, no cropping, no post-processing. The geolocation data isn't supplementary. It's the content: coordinates, timestamp, the camera and film that determined how I saw it.

<div class="photogeography-gallery">
{% for photo in site.data.photogeography.photos %}
  {% if photo.batch == 1 %}
  <a href="{{ '/photogeography/' | append: photo.slug | append: '/' | relative_url }}" class="photogeography-gallery-link">
    {% include photogeography-card.html photo=photo full=false %}
  </a>
  {% endif %}
{% endfor %}
</div>

What makes the photographs worth looking at is the specificity. Three locked aspect ratios, no cropping, no post-processing. The photographs look like what they are: specific places, specific moments, preserved without editorializing.

---

When you can crop, you compose loosely and fix it later. When you can adjust the aspect ratio, you fit reality to your preferred frame. Both habits produce images that lie about how they were seen. A cropped, color-graded photo tells you how you wish you'd seen the place.

The design problem: the project is built around travel photography from multiple sources (35mm film and phone), each arriving at a different native shape. Enforcing a single format across all of them would impose a false uniformity, lying about the conditions of capture. The constraint had to be more precise.

---

**Format = subject-lens.** The governing rule: each image is preserved in the shape it arrived, because the shape is part of what happened. The format encodes the relational mode, how the encounter took place.

Three locked formats, each with semantic meaning:

| Format | Source | Semantic encoding |
|--------|--------|------------------|
| 3:2 landscape | 35mm Minolta | Field recording: deliberate, committed |
| 4:3 landscape or vertical | Phone | Observational frame: ambient, incidental |
| 1:1 square | Phone apps, intentional capture | Internal notation: stillness, compression |

No image is cropped to fit a format. No image's format is changed in post. The constraint is at capture, not in editing. The shape the image arrived in is the shape it holds.

**Modular container system.** Each format has a pre-designed layout container: fixed padding rules, standardized caption placement, consistent border treatment. Visual unity across the archive comes from the container system, not from enforced uniformity on the images themselves.

**Metadata as structural element.** Every photograph carries: GPS coordinates, timestamp, aspect ratio designation, camera and film information, location label. Latitude/longitude pins the image to its exact place. Camera information documents the specific lens through which the encounter happened. The archive is verifiable.

---

If you can't crop, you reposition. If you can't change the ratio, you learn to see in the shape the format demands. Fewer options means you actually have to see what's in front of you. The project started as an experiment and grew into its own system once the archive got serious enough to need one.

The [Art Department](/practice/art-department/) renders the final output: 11x17 tabloid posters with EXIF-driven metadata, GPS coordinates, camera, date, aspect ratio classification. Same principle as [Versograms](/practice/versograms/): lock the format, let the content differentiate each piece.
