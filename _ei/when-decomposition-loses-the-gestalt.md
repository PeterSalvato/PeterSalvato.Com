---
layout: post
title: "When Decomposition Loses the Gestalt"
date: 2026-03-09
published: true
description: "Breaking things apart so far you lose the whole. The failure mode of the method."
seo_keywords: ['decomposition', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 4
sequence: 133
depth: survival
domain: Design practice
function: Payload
last_modified: 2026-03-14
---
Decomposition is the move I reach for most. Break the whole into layers. Spec each layer independently. Build them back up and check the registration. Every project I've worked on follows that pattern: brand systems decomposed into plates, enterprise platforms decomposed into modules, a novel decomposed into beat specs across three dimensions.

The failure mode is losing the whole.

I've done it. Decomposed a project so thoroughly that each layer was beautifully specced and the thing that made them cohere was gone. The individual components were sound. The relationship between them had evaporated because I'd optimized each piece in isolation.

On the Encore platform, I built a modular JS framework with clean namespacing, a full SCSS design system with locked tokens, and an information architecture that handled one of the most complex recruiting workflows in the industry. Each module was independent. Each one followed the conventions. But the user experience of moving between modules sometimes felt like moving between different products. The gestalt (the feeling of one coherent platform) had gotten thin in the places where the modules met. The joints were technically correct and experientially wrong.

The same thing happened with my voice protocol. I built a governance system to catch AI writing patterns: zero em dashes, zero negation-affirmation, zero epigrammatic closers, locked vocabulary, specific cadence rules. Each rule was correct. Together they produced copy that was disciplined and lifeless. The protocol had decomposed voice into checkable components and lost the thing that made a voice feel like a person. I was catching the tells without preserving the feel.

In the classroom, the equivalent is decomposing an instruction so far that the student can execute each step but can't see the task. Break "write a paragraph about your weekend" into seven scaffolded steps and you might get seven completed steps that don't add up to a paragraph. The student followed the scaffold. The gestalt of "write about your experience" was lost in the decomposition.

The fix is not less decomposition. The fix is a layer that holds the whole while the parts get built. In screenprinting, the proof print serves this function. You build plates independently, but you pull a proof to see whether they register as a composition. The proof is the gestalt check. It lives outside the plates. It evaluates the relationship between them.

In the voice protocol, the fix was the Shaw check: does this feel like a world someone walks into? That question evaluates the gestalt, not the components. The em dash rule and the vocabulary constraints are plate-level governance. The Shaw check is the proof print. Without it, you can pass every rule and still produce something nobody recognizes as a person.

I still decompose first. It's the right opening move for anything complex. But I've learned to build the gestalt check into the process early, not as a final pass. The proof print runs alongside the plate work. Lose the whole, and the parts are just inventory.
