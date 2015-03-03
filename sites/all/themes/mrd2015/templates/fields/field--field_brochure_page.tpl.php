<?php foreach ($items as $delta => $item): ?>
  <div class="paper  brochure-page-wrapper <?php print $delta % 2 ? 'paper-curl-left' : 'paper-curl-right'; ?>"><?php print render($item); ?></div>
<?php endforeach; ?>


