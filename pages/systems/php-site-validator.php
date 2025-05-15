<?php
$page_meta = [
  "title" => "Php site validator",
  "summary" => "A governance layer for design systems. Maintains pattern consistency and semantic integrity as platforms scale.",
  "type" => "system"
];
?>
<?php if (!isset($_extracting_meta)): ?>
<article>
  <h1>PHP Site + GPT Validator</h1>
  <p>A lightweight validation layer for keeping site content structured, consistent, and semantically correct — without relying on CMS overhead.</p>

  <div class="system-page">

    <section class="system-header">
      <p class="tagline">Metadata-aware content validation and publishing framework.</p>
    </section>

    <section class="what-it-is">
      <h2>What is the PHP Site Validator?</h2>
      <p>
        The Validator is a PHP-based framework that checks your content files before they go live.
        It inspects page metadata for completeness, consistency, and formatting — making sure your content stays structured and reliable.
      </p>
    </section>

    <section class="why-it-matters">
      <h2>Why It Matters</h2>
      <p>
        Titles, summaries, tags, SEO fields — they’re easy to overlook and hard to keep consistent across a growing site.
        The Validator removes human error from the equation by enforcing structure up front.
        Your site stays clean, your data stays trustworthy, and you don’t have to remember every field by hand.
      </p>
    </section>

    <section class="how-it-works">
      <h2>How It Works</h2>
      <ul>
        <li><strong>$page_meta Blocks:</strong> Standard metadata arrays at the top of each page keep content structured.</li>
        <li><strong>Extraction Mode:</strong> Validator runs in a non-rendering mode to inspect and validate content.</li>
        <li><strong>Validation Rules:</strong> Customizable checks ensure required fields are present, typed correctly, and follow site-wide patterns.</li>
        <li><strong>CLI + Bash Tooling:</strong> Includes simple scripts for scaffolding and checking content files efficiently.</li>
      </ul>
    </section>

    <section class="who-its-for">
      <h2>Who It's For</h2>
      <p>
        Developers, designers, and systems-builders managing content-heavy sites  
        — especially those avoiding full CMS stacks but still needing structured, reliable metadata.
      </p>
    </section>

    <section class="key-benefits">
      <h2>Key Benefits</h2>
      <ul>
        <li>Ensures content metadata is complete and consistent.</li>
        <li>Catches publishing errors before they ship.</li>
        <li>Supports clean automation and data export.</li>
        <li>Works with flat-file and hybrid site architectures.</li>
      </ul>
    </section>

    <section class="cta">
      <a href="/contact" class="button">View Validator Docs →</a>
    </section>

  </div>
</article>

<?php endif; ?>
