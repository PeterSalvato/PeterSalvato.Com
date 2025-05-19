<?php
$page_meta = [
  "title" => "Savepoint protocol",
  "summary" => "A system for tracking authorship lineage and preserving decision context over time. Keeps reasoning visible in high-context work.",
  "type" => "system"
];
?>
<?php if (!isset($_extracting_meta)): ?>
<article>
  <h1>Savepoint Protocol</h1>
  <p>A lightweight system for keeping authorship decisions traceable.  
  Savepoint captures why things were done, so that context isn’t lost as work evolves.</p>

  <div class="system-page">

    <section class="what-it-is">
      <h2>What is Savepoint Protocol?</h2>
      <p>
        Savepoint is a simple structure for capturing key decisions and moments of clarity.
        It creates cognitive checkpoints — so teams (or even your future self) can easily see why choices were made,
        without digging through clutter.
      </p>
    </section>

    <section class="why-it-matters">
      <h2>Why It Matters</h2>
      <p>
        In complex projects, clarity fades fast.  
        Decisions get buried, context slips away, and teams lose track of intent.
        Savepoint helps prevent that — making sure valuable insights stay visible and retrievable, even months later.
      </p>
    </section>

    <section class="how-it-works">
      <h2>How It Works</h2>
      <ul>
        <li><strong>Structured Indexing:</strong> Uses simple, consistent metadata to record decision points.</li>
        <li><strong>Recursive Architecture:</strong> Builds context by referencing earlier Savepoints as work evolves.</li>
        <li><strong>CLI Tools:</strong> Command-line utilities to capture, manage, and retrieve Savepoints quickly.</li>
      </ul>
    </section>

    <section class="who-its-for">
      <h2>Who It's For</h2>
      <p>
        Teams and individuals doing long-form, high-context work:  
        system architects, developers, researchers, creative leads —  
        anyone who needs to keep their reasoning intact over time.
      </p>
    </section>

    <section class="key-benefits">
      <h2>Key Benefits</h2>
      <ul>
        <li>Keeps decision-making visible and traceable.</li>
        <li>Reduces context switching and relearning overhead.</li>
        <li>Improves knowledge durability across time and teams.</li>
        <li>Scales with project complexity without adding process bloat.</li>
      </ul>
    </section>

    <section class="cta">
      <a href="/contact" class="button">Discuss Implementation →</a>
    </section>

  </div>
</article>

<?php endif; ?>
