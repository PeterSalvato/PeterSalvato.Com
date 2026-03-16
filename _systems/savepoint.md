---
layout: project
title: "SavePoint Syntax"
redirect_from: /governance/savepoint-syntax/
subtitle: "Semantic Markup for Turning Points in Thinking"
icon: handyman
status: "V3.2 Open Source"
faculty: ["design", "uxia"]
external_url: "https://github.com/PeterSalvato/Savepoint.Protocol"
seo_keywords: ["cognitive waypoints", "context switching", "decision logging", "cognitive state management", "semantic markup", "knowledge management", "thinking tools", "project filtering", "losing train of thought AI", "AI session continuity", "how to resume AI conversations", "knowledge preservation AI", "context loss between sessions", "picking up where I left off AI"]
description: "Semantic markup for cognitive waypoints. Marks where understanding shifts before the context closes. Each savepoint carries enough semantic payload to orient you or the model when the session is gone. v3.2 adds a context field for self-contained reconstruction, discovered through real traversal across months of conversation logs. Open source."
last_modified: 2026-03-13
related:
  - /systems/formwork
  - /evidence/encore
  - /evidence/new-city
cta:
  text: "See this protocol running on a real build"
  link: /practice/this-site
---

For five months, at the end of marathon sessions, I typed the same request: "give me a savepoint." The word showed up in twenty-plus conversations before it became a system. The reflex showed up before the syntax did.

I kept losing the turning points. The notes survived, the decisions survived, but the exact moment understanding shifted was gone. A session would run for hours, something would click, and then the thread would close. The model processes everything said in a session, but none of it survives. I'd come back and the thinking was gone. The question that produced the syntax was not "how do I document my thinking?" It was: what does the model actually need to reconstruct where I was?

> "I basically just don't want to lose any of the brainstorming ideation that we do. We wind up with these marathon sessions and your memory limitations cause us to lose things."
> (from the session where the syntax was born, March 2025)

What came out was a markup format. A way to mark, inline, the exact point where understanding shifted, without stopping the flow. The tag went through months of revision. One thing I didn't anticipate: I could go back through months of ideation and find the exact moment a decision locked in. A trail system through the archive.

---

Three versions. v1.0 was YAML frontmatter: loose, reflective, and it stripped out the concrete content it was supposed to preserve. The protocol reproduced the exact loss it was built for.

```yaml
# v1.0 — YAML frontmatter (March 2025)
---
category: design
timestamp: 2025-03-01T10:00:00Z
---
[freeform narrative content that drifted
 into journaling and lost the actual decision]
```

v2.0 used triple-pipe attributes, still too verbose.

```
# v2.0 — Triple-pipe blocks (late March 2025)
||| protocol_version:2.0
||| category:system_logic
||| function:declaration
||| timestamp:2025-03-28T15:43:00Z
<Savepoint>
The content block was open-ended.
You could write paragraphs.
That was the problem.
</Savepoint>
```

v3.0 came from a front-end instinct: CSS selectors and HTML attributes, applied to thought. A self-closing tag. Atomic. Parseable by machines. Writable by hand.

```
# v3.0 — Self-closing tag (April 2025)
<Savepoint
  protocol_version:3.0
  category:system_logic
  function:declaration
  timestamp:2025-04-08T15:43:00Z
  # Recursive structures should replace version snapshots wherever drift is likely.
/>
```

Each savepoint holds a single line of content marking a single moment.

The tag carries its own context. `category` marks the domain. `function` marks why the Savepoint exists: a declaration, a revision, a drift detected, a milestone. Optional fields for `importance`, `confidence`, and `influence` when the moment warrants it.

v3.1 added two more optional fields: `project` and `keywords`. I was dropping savepoints across half a dozen parallel projects (homelab infrastructure, the portfolio site, the skill system, the protocol itself) and the archive grew past 60,000 documents. Finding "the savepoint about plate boundaries" meant scanning everything. `project` scopes a savepoint to a specific body of work. `keywords` tags it with free-form search terms. Both are blank by default. The core syntax didn't change. The tag just got two more handles for when you need to find something later.

```
<Savepoint
  protocol_version:3.1
  category:content_rules
  function:drift_detected
  importance:medium
  confidence:moderate
  timestamp:2025-04-15T11:22:00Z
  project:savepoint
  keywords:content rules, enforcement, clarity
  # Early users are writing multi-line content after the # marker. The protocol allows exactly one content line. Enforcing strictly preserves the constraint that forces clarity.
/>
```

```
<Savepoint
  protocol_version:3.1
  category:protocol_evolution
  function:revision
  importance:high
  confidence:strong
  timestamp:2025-04-10T09:15:00Z
  # The self-closing tag format is final. v1 (YAML frontmatter) was too heavy, v2 (triple-pipe) was too clever. v3 sits at the right weight.
/>
```

```
<Savepoint
  protocol_version:3.1
  category:design_philosophy
  function:declaration
  confidence:strong
  timestamp:2025-04-12T16:00:00Z
  project:savepoint
  keywords:notes vs savepoints, inflection
  # A Savepoint is not a note. Notes capture information. Savepoints mark inflection. The moment thinking changed shape. If you can write it without stopping, it probably wasn't a Savepoint.
/>
```

Along the way, the syntax became the topic of conversation. All flow gone. That was the signal it was not done yet: when I was thinking about tagging instead of thinking about the work. If you are conscious of Savepoint while working, it has failed.

> "It genuinely felt like Savepoint was going to save people from AI recursiveness and black box thinking. Looking back that feels crazy."
> (months later, questioning whether the whole project was delusional)

The continuity I lost before the syntax existed stopped happening. The markers were in place. Drop one in the middle of dense thinking. Come back weeks later. You find your way in.

---

v3.2 came from evaluating the protocol's performance during actual retrieval.

By March 2026, I'd been dropping savepoints routinely for a year. Hundreds of them across dozens of projects and thousands of conversations. The protocol had become invisible, which was the goal. I was thinking about the work, not about tagging.

Then I needed to retrieve something specific. A pitch strategy I'd developed the night before, buried in a 3,000-line conversation log. Claude ran the traversal. The savepoints performed exactly as designed: the `keywords:` field surfaced the right entries, the `#` line confirmed the right location. "Two-touch strategy for Kate Osbourne: pitch now with an essay on kitchen/food accommodation." Found in seconds.

But the strategy itself (essay is the door, podcast is the visit, book is the return) was not in the savepoint. It was in the messages surrounding it. Claude had to read 200 lines of context to reconstruct what I'd actually decided. The savepoint got to the right neighborhood. It couldn't reconstruct what happened there.

I asked Claude directly: are the savepoints making traversal easier? What do they give you, and what do they need that they don't have? The answer was specific. The `keywords:` field was doing real work for search. The `category:` field was doing real work for filtering. The `timestamp:` field was the only reliable time coordinate in the session logs (Claude Code JSONL files have no per-message timestamps). Everything structural was pulling its weight. The gap was semantic: a savepoint that says "two-touch strategy" without capturing the actual strategy is an index entry, not a preservation format.

That's a testable failure, and it surfaced because the system I built to accommodate the model was being used by the model, and the model could report on how well it worked. The protocol's job is to preserve the moment understanding shifts. If the marker leads back to the right location but the understanding can't be reconstructed, the marker is incomplete. The `#` line names the moment. Nothing in the syntax captured what the moment holds.

v3.2 adds one optional field: `context`. One sentence of actual substance. What was decided, what shifted, what the realization contains.

```
<Savepoint
  protocol_version:3.2
  category:decision
  function:declaration
  timestamp:2026-03-13T05:09:37Z
  project:petersalvato.com
  keywords:kate osbourne, modernist homestead, kitchen accommodation, essay pitch, book
  context:Essay is the door, podcast is the visit, book is the return. Three layers, one relationship. Essay first, pitch follows when the proof exists.
  # Two-touch strategy for Kate Osbourne: pitch now with an essay on kitchen/food accommodation for neurodivergent households.
/>
```

The v3.1 version of this savepoint had the same `#` line. Without `context:`, a future session has to dig through the conversation to reconstruct the three-layer strategy. With it, the savepoint is self-contained. Without it, you have an index entry. With it, you have a preservation format.

The self-closing tag hasn't changed since v3.0. Each revision since has added optional fields in response to a specific retrieval failure: couldn't filter by project (v3.1 added `project:`), couldn't find it by search terms (v3.1 added `keywords:`), couldn't reconstruct what it meant (v3.2 added `context:`). The protocol is shaped by retrieval, not capture. Every field earned its place by failing without it.

The syntax runs across everything now: [Encore's](/evidence/encore/) platform decisions, [Aiden Jae's](/evidence/aiden-jae/) brand architecture, the portfolio site itself, the novel that started it. v3.2, open source.

The syntax runs inside [FormWork](/systems/formwork/), alongside the other accommodation tools. But it started as a reflex, five months before I had language for any of this. I just didn't want to lose the thinking. [This Site](/practice/this-site/) shows the full process running on the site you're reading.
