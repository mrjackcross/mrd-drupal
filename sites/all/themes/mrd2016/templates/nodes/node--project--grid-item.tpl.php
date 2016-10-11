<div class="project-grid-item-wrapper">
  <?php
  print render($content['field_project_grid_image']); ?>
  <a class="project-grid-item-name" href="<?php print $node_url; ?>"><h4><?php print render($content['field_heading']); ?></h4></a>
  <p><?php print render($content['field_sub_heading']); ?></p>
</div>
