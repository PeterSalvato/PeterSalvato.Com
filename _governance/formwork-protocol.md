---
layout: project
title: "Formwork"
subtitle: "The Accommodation Design Process"
icon: layers
altitude: "01"
status: "Active"
context: "Every tool I've built for working with AI started from the same question: what does this system actually need to do the job? Not what I need from it. What it needs from me. That question produced a set of tools. Formwork is the process that holds them together."
drift: "The AI governance field treats the model as a system to constrain. Add more rules, longer prompts, tighter guardrails. Output degrades and the response is more constraint. The question nobody asks: what if the task design is the problem, not the model?"
scaffold: "Formwork is the accommodation design process. A set of tools that shape how AI systems receive and process work: evaluation lenses that run one dimension at a time, context markers that help the model find its way back in, voice sampling from conversation instead of publication, knowledge traversal that reads chronologically instead of searching. Each tool accommodates a specific processing constraint. Together they form the pour."
fidelity: "Every page on this site was produced by this process. The evaluation system, the context preservation, the voice pipeline, the knowledge traversal. The tools built the thing that describes the tools."
faculty: ["design", "engineering", "uxia"]
seo_keywords: ["creative evaluation framework", "lens extraction", "multi-perspective evaluation", "structural evaluation", "narrative evaluation", "creative governance", "lens array", "restaurant concept development", "creative decision framework", "cross-disciplinary methodology"]
description: "The accommodation design process. Tools that shape how AI systems receive and process work: evaluation lenses, context preservation, voice sampling, knowledge traversal, task decomposition. Each tool accommodates a specific processing constraint. Together they form the pour."
last_modified: 2026-03-09
faq: true
faq_items:
  - question: "What is Formwork?"
    answer: "The accommodation design process. A set of tools that shape how AI systems receive and process work. Evaluation lenses run one dimension at a time. Context markers help the model reconstruct where the thinking was. Voice sampling pulls from conversation, not publication. Knowledge traversal reads chronologically instead of searching. Each tool accommodates a specific processing constraint. Together they form the process that produced this site."
  - question: "How does lens extraction work?"
    answer: "Study a practitioner's output, extract the evaluative framework underneath their decisions, and codify it as testable criteria. The result is a codification of their evaluative instinct, like turning a body of work into a software framework. Extracting Vignelli means testing for restraint and systematic limitation, not imitating his aesthetic."
  - question: "How do the lenses connect to established disciplines?"
    answer: "Lens extraction maps to framework selection in software engineering. The lens array maps to a tech stack. Convergence analysis maps to automated testing. Voice constraints map to linting. The patterns already exist independently across fields. The Formwork Protocol connects them."
  - question: "Does this only work for design?"
    answer: "The architecture is medium-independent. A chef opening a restaurant staffs culinary, interior, service, and business layers with practitioners whose judgment they trust. Hazan's restraint checks Adrià's deconstruction the same way Vignelli's restraint checks Lubalin's expressiveness. Different material, same protocol. It works anywhere craft has practitioners you can extract evaluative frameworks from."
related:
  - /governance/savepoint-syntax
  - /infrastructure/encore
  - /output/aiden-jae
cta:
  text: "See this evaluation running on a real build"
  link: /colophon
glyphs: "▲ ⬣ ■"
codex: "/Æ/#|●▲||⬣■|||▲⟩⟩[governance.formwork-protocol]/"
---

At SVA, studying visual communication with Christoph Niemann and Nicholas Blechman, the critique room worked like this. You hang your work at the front of the room. Your peers and your teachers sit around you. Everyone evaluates in good faith, trying to make the work the best the room can make it. The feedback is specific, grounded, and coming from multiple perspectives at once. Where they agree, you have a strong signal. Where they disagree, you have a decision to make. The accumulated decisions are yours. The work that comes out belongs to you, not to any single voice in the room.

That room doesn't reconstruct itself outside of school.

---

## The process

Formwork is bigger than that room. The evaluation system is one tool inside a larger process. Every tool I've built for working with AI came from the same question: what does this system actually need to do the job?

[Savepoint Syntax](/governance/savepoint-syntax/) came from asking what the model needs to reconstruct where my thinking was. Atomic markers, machine-readable, one line of content, designed for how the model retrieves.

The voice pipeline came from asking what the model needs to produce authentic voice. The answer was conversation transcripts. Rough, unstructured, full of false starts. That's how I actually talk. The pipeline samples from that instead of from published writing.

The knowledge traversal system came from asking what the model needs to trace how an idea developed. It reads chronologically and carries understanding forward. Grep can't find the first time an idea appeared because it wasn't called by its final name yet.

The skill architecture came from asking what happens when you give a model twelve objectives at once. It flattens them. So every skill has one objective, one output, no knowledge of other skills. Coordinators handle the orchestration. The model never receives twelve goals at once.

Each of these is formwork. A temporary structure that shapes the pour. The evaluation system below is the most developed of them, but they all follow the same pattern: identify the processing constraint, ask what the system needs, build the accommodation.

---

Without that room, things erode. On [Encore](/infrastructure/encore/), multiple developers reaching for styles and components over twelve years, each making good-enough choices that didn't quite match the original intent. On brand projects, a founder implementing their own decisions that slowly contradict the strategy they paid for. The drift is the same everywhere: accumulated good-enough choices with no evaluative structure to catch them.

The Formwork Protocol reconstructs that room. The evaluative function, not the social experience. Multiple perspectives, each codified and testable, run independently and read together. The maker resolves the disagreements. The accumulated resolutions become the project.

> "My real focus is meaning which I codify through structure to ensure that meaning is communicated and embedded. I was taught that design communicates meaning and to craft that communication is sacred."
> — describing the instinct underneath the protocol, April 2025

---

## The construction metaphor

In concrete construction, you build formwork before you pour. The form gives shape while things are still fluid. Once the concrete sets, the form comes off. The shape holds on its own.

The general contractor manages this. Different projects require different trades. You choose trades by what the project needs and whether you respect the quality of their work. The super's job is knowing enough about each trade to hire well, knowing how trades interact to sequence them, and knowing enough about the industry to know what's possible.

The Formwork Protocol builds the form and staffs the trades. The maker runs the job.

---

## Where the pieces come from

Most of these patterns already exist independently. Software engineering has frameworks, stacks, automated testing, linting, routing tables. Creative practice has practitioners, bodies of work, critique rooms, design history. They're the same patterns. They just don't usually talk to each other.

The Formwork Protocol connects them: lens extraction is framework selection. The lens array is a tech stack. Convergence analysis is automated testing. Voice constraints are linting. None of the pieces are new. The assembly is.

---

## How it works

The architecture came from a simpler question than it looks. A compound evaluation ("is this good?") is twelve questions disguised as one. Give that to a person or a model and the criteria blur together. Separate the concerns, give each one a clear frame, and the evaluation actually works. The same accommodation you'd make for any system that can't process everything at once.

The system has four components: layers, lenses, the maker's own identity, and convergence.

### Layers

You break the evaluation into distinct layers. Each layer registers independently. Each one answers a different question about the work.

A website might have two layers: structural and narrative. A film might have four: cinematography, sound design, performance, story. An album might have three: production, arrangement, lyric. A SaaS product might have: technical architecture, interaction design, brand voice.

How many layers depends on the medium. You identify the distinct concerns for whatever you're making, staff each one with lenses, and run them independently.

The only rule: more than one layer. One layer with multiple lenses gives you feedback within a single concern. Multiple layers give you feedback across concerns. That's where the interesting work lives, when one layer says one thing and another says something different about the same element.

**For this site, two layers:**

**Structural:** Is this well-built? Grid, typography, spacing, hierarchy, economy, material honesty.

**Narrative:** Does this feel like the thing it's supposed to be? The identity, the world-feel, the music playing in the room.

A design can score perfectly on the structural layer and fail the narrative layer (well-built but generic). A design can nail the narrative layer and fail the structural layer (the vibe is right but the grid is broken). Both layers must register for the work to hold.

### Lenses

Each layer is staffed with lenses: evaluative frameworks extracted from real practitioners, selected for the specific dimension the project requires. The extraction protocol:

1. **Study the output.** Read their books, look at their work, listen to their talks. Absorb the pattern, not the surface.
2. **Extract the framework.** What questions does this person consistently ask? What do they always notice? What do they never tolerate? That's the discipline underneath what you can see in their work.
3. **Codify as testable criteria.** Turn the extracted questions into specific, evaluable checks. Each criterion produces a clear verdict when applied to real work.
4. **Validate against their known work.** Run the criteria against work the original practitioner is known to have produced or praised. The lens should confirm what the practitioner would confirm.

This is what a good creative director does when building a team: systematize how brilliant people think so the thinking holds without their presence. The lens codifies their evaluative instinct, turning a body of work into the equivalent of a software framework. The framework doesn't write the application. It provides the structure and constraints within which the practitioner makes decisions.

Which lenses you choose is itself a creative decision, and it requires knowing your field. The lenses define what the evaluation rewards and what it resists, and that changes with every project's intent. A designer might staff a structural layer with Vignelli and Rams for a project that needs restraint, or Lubalin and Lupton for one that needs expressiveness. A chef staffs their layers with culinary practitioners whose judgment they trust. An educator staffs theirs with pedagogical thinkers. A writer with authors whose instincts they want checking their work.

Same architecture, completely different results, because the practitioner decides which evaluative instincts belong on which project. That decision requires knowing the field: its history, its practitioners, what each one's judgment actually produces. The protocol provides the architecture. The practitioner's knowledge of their craft is what makes it produce good work.

**What makes a good extraction:** specificity over generality. "Does the typography serve the content?" is Bierut. "Does every element earn its place?" is Rams. "Does the ingredient speak for itself?" is Hazan. "Does the technique serve the idea, or just the tradition?" is Adrià. Those sound similar but test differently. Specific extractions produce actionable disagreements between lenses. And the standard must be the person's actual standard, not your interpretation of their aesthetic. Extracting Draplin doesn't mean "make it thick and bold." It means "is the personality of the maker visible in the craft?" Extracting Adrià doesn't mean "make foam." It means "does the cook understand this dish well enough to take it apart and rebuild it?"

### The multi-lens requirement

Multiple lenses per layer. This is structural, not optional, the same way no production application runs on a single framework. You run a stack: React for the view layer, Express for routing, Postgres for persistence. Each one handles a different concern. The combination produces the architecture.

A single structural lens produces imitation: "make it look like Vignelli." Multiple structural lenses produce synthesis: Vignelli's restraint checks Lubalin's expressiveness. Rams's economy checks Muller-Brockmann's systematization. The tensions between lenses are where the interesting decisions live.

A single narrative lens produces cosplay: "make it feel like Draplin's studio." Multiple narrative lenses produce identity: Draplin's personality-in-craft checks Victore's bravery. Millman's authenticity checks the peer benchmark. No single lens dominates. The synthesis across all of them produces something that belongs to the maker, not to any reference.

The same holds in any field. A single culinary lens produces imitation: "cook like Adrià." Adrià's deconstruction checked by Hazan's restraint and Pépin's technique produces something different. The cook can't just deconstruct. The ingredients have to earn their place and the execution has to be clean. The tensions between those three lenses force decisions no single influence would have produced. The food that comes out belongs to the cook.

When one lens says STRONG and another says WEAK on the same element, that's a decision point. The maker sees where the tensions are and chooses. The choices, accumulated across dozens of decision points, produce a result that could not have come from following any single influence. In research this is called inter-rater reliability. The disagreements between independent evaluators are where the real information is.

### The maker's identity as input

The maker goes through the same extraction protocol. What do they consistently care about? What shows up in their work whether they plan it or not? What do they never compromise on?

This produces a reference document: how they talk, what they're drawn to, what they won't compromise on. That document becomes the target the narrative lenses evaluate against. The world-feel check doesn't ask "does this feel like a world?" in the abstract. It asks "does this feel like this maker's world?"

Without that document, the lenses have no target. With it, every evaluation is grounded in a specific person and what they're trying to say through the work.

> "Each project is going to reflect me as a person. And the way I look at things, my humor, my style, my interests. But each is expressed in a different way and shows a different facet. They should each sound like the same person on different days and different moods."
> — working out how the maker's identity feeds the evaluation, April 2025

### Convergence

Where lenses agree: high-confidence signal. Act on it.

Where lenses disagree: decision point. The maker chooses.

The choices, accumulated across the full evaluation, become the project. The framework tells you what questions to ask, from whose perspective, and where the perspectives disagree. The maker resolves the disagreements. That's where the original work comes from.

---

## What the lens array evaluates

Each lens runs as a standalone diagnostic. You point it at a piece of work, it evaluates against its extracted criteria, and it returns a verdict with evidence. The diagnostics organize into three dimensions:

**Structural diagnostics** evaluate craft. Is the type system producing clarity through limitation, or just following convention? Is the grid doing compositional work, or just technically present? Is every element earning its place? Is the spacing creating intentional rhythm? Is the construction honest (visible structure, not decoration pretending to be structure)?

**Narrative diagnostics** evaluate identity. Does this read as a real person with real stakes, or a professional template with names swapped? Is the maker visible in the craft choices, not just the body copy? Would a senior practitioner take this seriously? Is the maker being themselves, or performing a safe version?

**Voice diagnostics** evaluate communication. How does the maker actually talk in conversations and working notes, not in published performances? A voice-sampling process captures those patterns and turns them into constraints on every piece of written output. A verification checklist catches specific failure modes (AI writing patterns, ungrounded claims, performed voice) before anything publishes. Every specific claim traces to a knowledge base of indexed source material. If a claim can't be sourced, it doesn't ship.

Each diagnostic runs independently and returns specific findings. "Restraint scores WEAK: four typefaces in use with no visible hierarchy governing the variation" is actionable. "The typography could be tighter" is not.

A coordinator dispatches the full lens array in parallel, collects the results, and maps convergence: where do they agree, where do they disagree. The agreements are signals to act on. The disagreements are decisions. The restraint diagnostic scores high but the personality diagnostic scores low: the design is disciplined but the maker isn't visible in it. The maker resolves those tensions. The accumulated resolutions become the project.

---

## The generative loop

Evaluation alone produces a verdict. It doesn't produce the work. The loop closes when you add generation: diagnose, generate, capture, re-evaluate.

You run the lens array and read the gaps. The print-craft lens returns ADEQUATE instead of PRESSED. The hierarchy lens scores insufficient contrast between primary and secondary elements. The composition lens scores passive whitespace instead of active. Those verdicts become directions.

Generative skills take the directions and produce real output. A texture system generates paper grain tiles, film noise overlays, distressed SVG border masks, and halftone treatments. A type-scale skill measures the ratio between display and body type in a reference and generates new SCSS tokens. A composition skill studies spatial tension in a reference image and generates asymmetric spacing rules. A layout skill restructures templates. Each generative skill produces actual files and code, not recommendations.

The same lenses that evaluated now constrain the generation. The criteria aren't applied after the output. They're in the generation, shaping it as it's produced. The form is in the pour. You're generating within a defined region rather than generating freely and filtering after.

Every generative output stops before writing to disk. The maker sees what was produced, side-by-side with the current state and the reference standard, and decides. The system does the analysis and generation. The maker does the creative direction and approval.

After approval, Playwright captures the result. A headless browser renders every published page at four breakpoints (mobile, tablet, laptop, ultrawide) and saves full-page screenshots. Those screenshots become the ground truth for re-evaluation. You run the lens array again on the new captures. Did it improve? Did anything regress? If the print-craft lens still returns ADEQUATE after the texture pass, you try again with different parameters or assess the best attempt and decide whether it's good enough.

Evaluation without generation produces documentation. Generation without evaluation produces drift. The two together, with the maker at every decision point, produce iterative improvement that converges on what the maker actually wants.

---

## The system at a glance

```
FORMWORK PROTOCOL

    MAKER'S IDENTITY (extracted)
    Voice, lineage, non-negotiables
              |
              v
    ┌─────────────────────────────────────────────┐
    │  LAYER 1: STRUCTURAL                        │
    │  Lens A ──┐                                 │
    │  Lens B ──┼── tensions ── decisions         │
    │  Lens C ──┘                                 │
    └─────────────────────────────────────────────┘
              |
    ┌─────────────────────────────────────────────┐
    │  LAYER 2: NARRATIVE                         │
    │  Lens D ──┐                                 │
    │  Lens E ──┼── tensions ── decisions         │
    │  Lens F ──┘                                 │
    └─────────────────────────────────────────────┘
              |
              v
    CONVERGENCE
    Agree = act.  Disagree = maker chooses.
              |
              v
    ┌─────────────────────────────────────────────┐
    │  GENERATIVE SKILLS                          │
    │  Directions from lenses become code/assets  │
    │  Lenses constrain during generation         │
    │  ── maker approves before anything ships ── │
    └─────────────────────────────────────────────┘
              |
              v
    CAPTURE (Playwright, 4 breakpoints)
              |
              v
    RE-EVALUATE (lens array runs on new state)
              |
              └──── loop until convergence ────┘
```

---

## Why it can't produce copies

This is a structural claim, not a theoretical one.

A single influence produces imitation. Multiple lenses produce tension. Vignelli's restraint pulls against Lubalin's expressiveness. Draplin's personality pulls against Victore's confrontation. Hazan's restraint pulls against Adrià's deconstruction. Pépin's precision pulls against Chang's cultural hybridity. Each tension is a fork where the maker has to choose. After enough forks, the accumulated choices produce something that could not have come from following any single influence. The path through the tensions is unique to the maker, whether the maker is a designer, a chef, or a writer.

The maker's identity as input guarantees this further. The narrative lenses aren't evaluating against an abstract standard. They're evaluating against a specific person's voice, history, and non-negotiables. The work that comes out belongs to that person because that person's identity is built into the evaluation.

---

## The restaurant

A chef opening a restaurant isn't just cooking. The food is one layer. The room is another. The service is a third. The business model is a fourth. Each one shapes what a person experiences from the moment they walk in the door to the moment they leave. Staff each layer with practitioners whose judgment you trust.

**Culinary:** Hazan for restraint (four ingredients, let them speak). Adrià for deconstruction (take the dish apart and rebuild it so the diner experiences it differently). Pépin for technique (clean execution, no wasted motion). Hazan says the ingredient is enough. Adrià says transform it. Pépin says whatever you do, execute it cleanly. Those tensions produce decisions the cook makes about every dish on the menu.

**Interior:** Someone who trusts Tadao Ando's material honesty builds a different room than someone who trusts Kelly Wearstler's maximalism. The room tells the diner what kind of meal this is going to be before they see a menu.

**Service:** Danny Meyer's hospitality philosophy produces a different front-of-house culture than the precision of Eleven Madison Park under Will Guidara. How the staff makes a person feel is a decision, whether the word "design" is ever used or not.

**Business:** Food cost constraints shape creative decisions. A $12 ingredient on a $28 plate changes what's possible on the rest of the menu. The business layer doesn't override the culinary layer. It creates real constraints the culinary decisions work within. Some of the most interesting decisions come out of that tension.

The diner doesn't see any of this. They walk in, sit down, eat, and leave. If the layers register, the experience coheres. The food matches the room matches the service matches the price point. If they contradict, something feels off even if the diner can't name why. A Michelin plate in a room that feels like a diner. Technically excellent food served by staff who don't know what's on the plate.

The lens staffing changes everything. Adrià and Pépin on the culinary layer produces experimental food executed to classical precision. Adrià and Thomas Keller produces experimental food refined to an obsessive standard, the last bite as good as the first. Same deconstruction impulse, different constraints checking it, different food on the plate. The chef who knows the difference between Pépin and Keller well enough to choose is the chef who gets good results from the protocol. The protocol doesn't replace that knowledge. The chef uses it to give that knowledge structure.

Five layers, each with multiple lenses, each producing tensions the chef resolves. The accumulated resolutions become the restaurant. Same architecture as a website, a brand, or a curriculum. Different material, different practitioners, same protocol.

---

## Any medium

[Aiden Jae's](/output/aiden-jae/) brand system ran through this evaluation: does the photography prove the quality (structural), does the platform feel like this founder's brand (narrative). [Encore's](/infrastructure/encore/) browser migration ran through the same logic: does the architecture hold at scale (structural), does the interface feel like the product its users already trust (narrative). Different layers, different lenses, same protocol.

A record: structural layer with production engineers, narrative layer with artists whose albums feel like entering a world. A curriculum: structural layer with pedagogical practitioners, narrative layer with educators whose courses have a voice. A book produced by this system is in production now.

The structural layer asks "is the craft sound?" The narrative layer asks "does it feel like the thing it's supposed to be?" Those questions apply to anything someone makes. Swap the layers. Swap the lenses. The architecture holds because it's medium-independent.

---

The [Colophon](/colophon/) shows what this protocol looks like running on the site you're reading now. The restaurant example shows what it looks like applied to a completely different field. The protocol reconstructs the critique room because the work shows what happens without it.
