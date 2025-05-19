<?php
// systems/index.php

// Page metadata for your layout template
$page_meta = [
  'title'   => 'Systems',
  'summary' => 'An overview of my authored and professional systems work: Savepoint.Protocol, Validator Framework, Ætherwright overlay, and more.',
  'type'    => 'page'
];
?>

<article>
  <h1><?= htmlspecialchars($page_meta['title']) ?></h1>
  <p><?= htmlspecialchars($page_meta['summary']) ?></p>

  <section>
    <ul>
      <?php
      // 1. Grab all .php files in this folder
      $files = glob(__DIR__ . '/*.php');

      foreach ($files as $file) {
        // 2. Skip this index file to avoid self‐listing
        if (basename($file) === basename(__FILE__)) {
          continue;
        }

        // 3. Extract that page’s $page_meta by including it in isolation
        //    The $_extracting_meta flag ensures the page knows it’s only exposing meta.
        $_extracting_meta = true;
        $item_meta = [];
        include $file;

        // 4. Build URL slug and sanitize output
        $slug    = basename($file, '.php');
        $title   = htmlspecialchars($item_meta['title']   ?? ucfirst($slug));
        $summary = htmlspecialchars($item_meta['summary'] ?? '');

        // 5. Render list item
        echo "<li>
                <a href=\"/systems/{$slug}.php\">
                  <strong>{$title}</strong> {$summary}
                </a>
              </li>";
      }
      ?>
    </ul>
  </section>
</article>
