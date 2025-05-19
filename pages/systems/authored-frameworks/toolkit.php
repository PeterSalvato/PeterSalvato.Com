<?php
$page_meta = [
  "title" => "Toolkit",
  "summary" => "Modular tools for building durable interface components and platform infrastructure at scale.",
  "type" => "system"
];
?>
<?php if (!isset($_extracting_meta)): ?>

<article>
  <h1>Component Toolkit (Coming Soon)</h1>
  <p>A modular set of tools for scaffolding, validating, and extending authored systems — without the bloat of a CMS.</p>
  
  <p class="tagline">Minimal scripts for fast iteration, clean structure, and long-term maintainability.</p>

  <div class="system-page">

    <section class="what-it-is">
      <h2>What is the Toolkit?</h2>
      <p>
        The Toolkit is a growing set of Bash and PHP utilities that support my authored systems — Savepoint, Validator, and the Order.
        It handles page scaffolding, metadata validation, and content extraction, so you can build cleanly and iterate fast.
      </p>
    </section>

    <section class="why-it-matters">
      <h2>Why It Matters</h2>
      <p>
        Manual content workflows don’t scale.  
        Copy-paste breaks structure, and CMS platforms add more complexity than they solve.
        The Toolkit keeps things light — giving you automation without overhead, and consistency without lock-in.
      </p>
    </section>

    <section class="how-it-works">
      <h2>How It Works</h2>
      <ul>
        <li><strong>Bash Scaffolders:</strong> Generate new page templates with prefilled metadata and routing logic.</li>
        <li><strong>Validator Hooks:</strong> Run CLI checks on metadata structure, completeness, and field types.</li>
        <li><strong>Content Extractors:</strong> Export Savepoints, essays, and glossary terms to Markdown or JSON.</li>
      </ul>
    </section>

    <section class="who-its-for">
      <h2>Who It's For</h2>
      <p>
        Developers, architects, and semantic authors who want clean structure without the cost of overbuilt tooling.  
        Ideal for PHP sites, Obsidian pipelines, or anyone using CLI-based systems to manage content.
      </p>
    </section>

    <section class="key-benefits">
      <h2>Key Benefits</h2>
      <ul>
        <li>Gets new content or system pages live fast.</li>
        <li>Enforces structure and metadata consistency.</li>
        <li>Works well with flat-file archives and static exports.</li>
        <li>Adaptable for local-first workflows and future UI integration.</li>
      </ul>
    </section>

    <section class="cta">
      <a href="/contact" class="button">Explore Toolkit Scripts →</a>
    </section>

  </div>
</article>

  
<?php endif; ?>
