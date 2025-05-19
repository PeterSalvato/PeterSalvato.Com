<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= isset($page_title) ? $page_title . ' | Peter Salvato' : 'Peter Salvato' ?></title>

  <script src="/assets/js/glossary-autolinker.js" defer></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=signpost" />
  <link rel="stylesheet" href="/assets/styles/styles.css" />

</head>
<body>
  <header>
    <a href="/" class="brand">
      <span class="name">Peter Salvato</span>
    </a>
    <!-- <span class="tagline">
      <a data-pathway="systems" href="/pathways/systems-design-and-engineering.php">- Systems Design & Engineering</a>
      <a data-pathway="ux" href="/pathways/ux-architecture-and-design-systems.php">- UX Architecture & Design Systems</a>
      <a data-pathway="governance" href="/pathways/platform-governance-and-operations.php">- Platform Governance & Operations</a>
    </span> -->
    <nav>
      <a href="/">Home</a>
      <a href="/about/">About</a>
      <a href="/systems/">Systems</a>
      <a href="/essays/">Essays</a>
      <a href="/contact/">Connect</a>
    </nav>
  </header>

  <main class="main-content">
    <?php if (!empty($page_content)) include $page_content; ?>
  </main>

  <footer>
    <!-- Your footer structure -->
    <div class="footer-grid">

      <section class="footer-column">
        <h2 class="footer-heading">Resources</h2>
        <ul>
          <li><a href="/glossary/">Glossary</a></li>
          <li><a href="/sitemap/">Sitemap</a></li>
          <li><a href="/colophon/">Colophon</a></li>
        </ul>
      </section>

      <section class="footer-column">
        <h2 class="footer-heading">Meta Links</h2>
        <ul>
          <li><a href="/license/">License</a></li>
          <li><a href="/search/">Search</a></li>
          <li><a href="/rss/">RSS</a></li>
        </ul>
      </section>

      <section class="footer-column">
        <h2 class="footer-heading">Systems</h2>
        <ul>
          <li><a href="https://aetherwright.com" target="_blank">Ætherwright</a></li>
          <li><a href="https://savepointprotocol.com" target="_blank">Savepoint Protocol</a></li>
        </ul>
      </section>

      <section class="footer-column footer-right">
        <h2 class="footer-heading">Copyright</h2>
        <ul>
        <li>©2025 Peter Salvato</li>
        <li>All rights reserved.</li>
        <li class="footer-codex">//Æ::P3#|●.◁.●.⟩.●.▼.▶|//</li>
        </ul>
      </section>

      </div>
  </footer>
</body>
</html>
