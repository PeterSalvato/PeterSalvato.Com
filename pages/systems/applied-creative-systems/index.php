<?php
// systems/authored-systems/index.php

// 1. Define metadata for this category
$page_meta = [
  'title'   => 'Authoring Systems',
  'summary' => 'Tools like Savepoint.Protocol & Validator Framework for versioning ideas and enforcing semantic hygiene.',
];

// 2. Extraction guard
if (!empty($_extracting_meta)) {
  return;
}

// 3. Include global layout
include __DIR__ . '/../../layout.php';
?>

<article>
  <h1><?= htmlspecialchars($page_meta['title']) ?></h1>
  <p><?= htmlspecialchars($page_meta['summary']) ?></p>

  <ul class="system-projects">
    <?php
    // 4. Find all .php files in this folder
    $dir      = __DIR__;
    $phpFiles = glob($dir . '/*.php') ?: [];

    foreach ($phpFiles as $file) {
      if (basename($file) === 'index.php') {
        continue;  // skip this stub
      }

      // 5. Extract metadata from each project file
      $_extracting_meta = true;
      $page_meta = [];
      include $file;
      $projMeta = $page_meta;

      // 6. Build link details
      $slug    = basename($file, '.php');
      $title   = htmlspecialchars($projMeta['title']   ?? ucwords(str_replace('-', ' ', $slug)));
      $summary = htmlspecialchars($projMeta['summary'] ?? '');
      $url     = "/systems/authored-systems/{$slug}.php";

      // 7. Render item
      echo '<li>';
      echo   "<a href=\"{$url}\">";
      echo     "<strong>{$title}</strong>";
      if ($summary) {
        echo " {$summary}";
      }
      echo   '</a>';
      echo '</li>';
    }
    ?>
  </ul>
</article>
