<?php
$page_meta = [
  "title" => "Pathways",
  "summary" => "TODO: Add summary for Pathways.",
  "type" => "page"
];
?>

<article>
  <h1>Pathways</h1>

  <section>
    <p>
      These are the core domains I work in.  
      Every system I build, every pattern I use, ties back to one (or more) of these pathways.
    </p>
    <p>
      They’re not job titles — they’re problem spaces.  
      The persistent challenges that show up across platforms, teams, and complex systems.
    </p>

    <ul>
      <?php
      $files = glob(__DIR__ . '/pathways/*.php');

      function extract_meta($file) {
        $_extracting_meta = true;
        $page_meta = [];
        include $file;
        return $page_meta;
      }
      foreach ($files as $file) {
        $meta = extract_meta($file);
        $slug = basename($file, '.php');
        echo "<li><a href='/pathways/$slug.php'><strong>{$meta['title']}</strong>{$meta['summary']}</a></li>";
      }
      ?>
    </ul>
  </section>
</article>
