<article>
  <h1><?= $page_title ?></h1>  
  <p>Tools and frameworks I’ve built to tackle semantic drift, authorship clarity, and platform-scale complexity. These aren’t products — they’re working solutions to problems I’ve faced in real systems.</p>

  <ul>
    <?php
    $files = glob(__DIR__ . '/systems/*.php');

    function extract_meta($file) {
      $_extracting_meta = true;
      $page_meta = [];
      ob_start();
      include $file;
      $output = ob_get_clean();
    
      if (trim($output) !== '') {
        echo "<!-- WARNING: $file still renders visible output -->";
      }
    
      return $page_meta;
    }
    foreach ($files as $file) {
      $meta = extract_meta($file);
      $slug = basename($file, '.php');
      echo "<li class='$slug'><a href='/systems/$slug.php'><strong>{$meta['title']}</strong>{$meta['summary']}</a></li>";
    }
    ?>
  </ul>

</article>
