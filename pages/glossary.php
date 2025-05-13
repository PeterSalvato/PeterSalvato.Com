<?php
$page_meta = [
  "title" => "Glossary",
  "summary" => "TODO: Add summary for Glossary.",
  "type" => "page"
];
?>

<?php
$glossary = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/data/glossary.json'), true);
?>

<article>
  <h1>Glossary of Terms</h1>
  <dl>
    <?php foreach($glossary as $term => $data): ?>
        <dt class="Term"><strong><?php echo htmlspecialchars($term); ?></strong></dt>
        <dd class="Definition" style='margin-bottom: 1px;'><?php echo htmlspecialchars($data['definition']); ?></dd>
    <?php endforeach; ?>
  </dl>
</article>