---
layout: project
redirect_from: /infrastructure/pressworks/
practice_group: meditations
title: "PressWorks"
subtitle: "Terminal-Native Print Production"
icon: construction
status: "Active"
context: "I came up in print shops in Brooklyn and Fort Lauderdale. Color separation, plate registration, halftone screening. The process has a logic that digital tools never captured."
faculty: ["design", "engineering"]
seo_keywords: ["Print Production Pipeline", "CMYK Halftone", "Risograph Duotone", "Screen Print Effects", "Image Processing", "ImageMagick", "Terminal Design Tools"]
description: "Terminal-native print production. Models plate-by-plate press logic as composable shell operations: CMYK separation, halftone screening, registration offset, grain, color manipulation. Built by a 20-year Adobe user who stopped thinking in Adobe's UI."
last_modified: 2026-03-07
related:
  - /practice/art-department
  - /evidence/encore
  - /systems/formwork
---

I came up in print shops. USA Tees in Brooklyn, Atlas Embroidery in Fort Lauderdale. Halftone screens at specific angles, registration dialed in by hand, ink density controlled plate by plate. Then I spent 20 years in Adobe, and then my brain stopped matching the interface.

![CMYK Process separation: four print passes on a white canvas, halftone screening visible at plate level]({{ '/assets/img/Printshop_cmyk.png' | relative_url }}){:.image.diagram}

So now I run a press from the terminal. PressWorks is a bash script wrapping ImageMagick. Sixteen operations, three presets, every parameter exposed. I can separate an image into four channels, adjust the screening angle on the cyan plate independently, shift its registration by one pixel, and recombine. Same logic as a press floor, just running in code.

Every texture on this site came through PressWorks. The [Art Department](/practice/art-department/) handles layout. PressWorks handles ink.
