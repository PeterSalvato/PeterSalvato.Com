<article>

  <section>
    <h1><?= $page_title ?></h1>
    <p>Reflections and frameworks on semantic tooling, cognitive systems, authorship infrastructure, and remote UX practice.</p>
    <p>This section is where I explore the deeper principles behind my systems work. Each essay is designed to clarify complex topics, map emerging ideas, and preserve nuanced reasoning that often gets lost in fast-paced design and product environments.</p>
    <p>While my case studies show systems in practice, these essays focus on the thinking that informs them — the why behind the frameworks.</p>
  </section>
  <section>
    <ul>
      <?php
      $files = glob(__DIR__ . '/essays/*.php');
  
      function extract_meta($file) {
        +  $_extracting_meta = true;       // ← add this line
          $page_meta = [];
          include $file;
          return $page_meta;
        }
      foreach ($files as $file) {
        $meta = extract_meta($file);
        $slug = basename($file, '.php');
        echo "<li><a href='/essays/$slug.php'><strong>{$meta['title']}</strong>{$meta['summary']}</a></li>";
      }
      ?>
    </ul>
  </section>  
  <section>
    <h2>Coming Soon</h2>
    <p>Additional essays on governance patterns, creative ops systems, and applied cognitive frameworks will be published here.</p>
  </section>

</article>



