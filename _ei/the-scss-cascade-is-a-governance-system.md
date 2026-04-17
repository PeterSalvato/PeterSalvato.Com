---
layout: post
title: "The SCSS Cascade Is a Governance System"
date: 2026-03-30
published: true
description: "Specificity is hierarchy. The cascade is governance. CSS was always a system design problem."
seo_keywords: ['SCSS', 'CSS', 'governance', 'design systems', 'Peter Salvato', 'design engineering']
series: "engineering-intent"
zone: 3
sequence: 87
depth: reading
domain: Design practice + Operational methodology
function: Payload
seed_status: DEEP
last_modified: 2026-03-30
---

The CSS cascade is a specificity hierarchy. A class overrides an element. An ID overrides a class. An inline style overrides an ID. The browser resolves conflicts by checking which rule is more specific. The more specific rule wins.

This is governance.

Every CSS file is a set of rules about how things should look. When two rules disagree, the cascade decides which one wins. The resolution isn't arbitrary. It follows a defined hierarchy. The system has an opinion about which rules take precedence. That opinion is encoded in the specificity algorithm.

The SCSS framework I built for Encore takes this further. Variables at the top. Mixins below them. Base styles below those. Component styles below those. The cascade mirrors the governance hierarchy. Global decisions at the top. Local decisions at the bottom. A local decision can override a global one, but only by being more specific. The system makes the global default easy and the local override intentional.

This is the same architecture as an IEP. District policy is the base style. Building-level decisions override where the building has specific needs. Classroom-level decisions override where the teacher has specific accommodations. Student-level IEP goals override where the individual student needs something different. Each level is more specific than the one above. The most specific level wins.

The failure mode in CSS is specificity wars. A developer adds an ID selector to override a class selector. Another developer adds !important to override the ID. A third developer adds an inline style to override the !important. Each override makes sense locally. The cumulative result is a stylesheet that no one can reason about. The governance has collapsed because everyone is fighting the hierarchy instead of working within it.

The same failure happens in organizations. A policy exists. Someone creates an exception. Someone creates an exception to the exception. Someone bypasses the entire chain with a direct request to leadership. Each step makes sense in context. The governance structure becomes unreadable.

OOCSS (Object-Oriented CSS) is my approach to preventing this. Objects and modifiers instead of deeply nested selectors. `.object.modifier` not `.container .wrapper .inner .element`. The specificity stays flat. Overrides are explicit and visible. You can read any selector and know exactly what it governs without tracing a chain of nested dependencies.

The design system's job is to make the cascade work for you instead of against you. Define the hierarchy. Make the defaults strong. Make overrides intentional and visible. The structure governs the output the same way a well-written IEP governs the classroom: by making the right thing the default and the exception the explicit, documented choice.
