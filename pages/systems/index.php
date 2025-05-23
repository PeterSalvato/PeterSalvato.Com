<?php
// systems/index.php

// 1. Metadata for layout
$page_meta = [
  'title'   => 'Systems',
  'summary' => 'A categorized overview of my authored and professional systems work.',
  'type'    => 'page'
];

// 2. Extraction guard (for meta-only includes)
if (!empty($_extracting_meta)) {
  return;
}

// 3. Hand off to global layout (renders <head>, nav, etc.)
include __DIR__ . '/../layout.php';
?>

<article>
  <h1><?= htmlspecialchars($page_meta['title']) ?></h1>
  <p><?= htmlspecialchars($page_meta['summary']) ?></p>

  <section class="systems-categories">
    <?php
    // 4. Identify all category directories under /systems/
    $baseDir    = __DIR__;
    $categories = glob($baseDir . '/*', GLOB_ONLYDIR) ?: [];

    foreach ($categories as $catDir) {
      $slug = basename($catDir);

      // 5. Extract category metadata from its own index.php stub
      $_extracting_meta = true;
      $page_meta = [];
      include $catDir . '/index.php';
      $catMeta = $page_meta;

      // 6. Fallbacks for title & summary
      $title   = htmlspecialchars($catMeta['title']   ?? ucwords(str_replace(['-','_'], ' ', $slug)));
      $summary = htmlspecialchars($catMeta['summary'] ?? '');

      // 7. Build URL to category page (trailing slash is fine if you prefer)
      $url = "/systems/{$slug}/";

      // 8. Output the card
      ?>
      <div class="card">
        <h2><?= $title ?></h2>
        <?php if ($summary): ?>
          <p><?= $summary ?></p>
        <?php endif ?>
        <a class="button" href="<?= $url ?>">Explore →</a>
      </div>
      <?php
    }
    ?>
  </section>
</article>
