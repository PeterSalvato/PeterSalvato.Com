<article>

  <section>
    <h1><?= htmlspecialchars($page_title) ?></h1>
    <p>Tools and frameworks I’ve built to tackle semantic drift, authorship lineage, and high-context systems work.</p>
  </section>

  <section>
    <ul>
      <?php
      // 1. Grab every .php file in pages/systems (shallow)
      $files = glob(__DIR__ . '/systems/*.php');

      // 2. Helper to extract metadata only
      function extract_meta($file) {
        $_extracting_meta = true;
        $page_meta = [];
        include $file;
        return $page_meta;
      }

      // 3. Loop and render each item
      foreach ($files as $file) {
        $meta = extract_meta($file);
        $slug = basename($file, '.php');

        // Fallback title/summary if someone forgot to set them
        $title   = htmlspecialchars($meta['title']   ?? ucfirst(str_replace('-', ' ', $slug)));
        $summary = htmlspecialchars($meta['summary'] ?? '');

        echo "<li>";
        echo   "<a href='/systems/{$slug}.php'>";
        echo     "<strong>{$title}</strong>";
        if ($summary) {
          echo " {$summary}";
        }
        echo   "</a>";
        echo "</li>";
      }
      ?>
    </ul>
  </section>

</article>
