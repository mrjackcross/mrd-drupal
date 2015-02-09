<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> container clearfix"<?php print $attributes; ?>>
 
   <div class="row">
	  <div class="col-sm-4 txt-col">
		  <?php print render($title_prefix); ?>
		    <h1><?php print render($content['field_heading']); ?></h1>
		  <?php print render($title_suffix); ?>
		
      </div>
	  
	  <div class="col-sm-8 img-col">
	  </div>
  </div>
   
  <div class="row">
	  <div class="col-sm-4 txt-col">		
		  <?php print render($content['body']); ?>
	  </div>
	  
	  <div class="col-sm-8 img-col">
	 	 <?php print render($content['field_small_image']); ?>
	  </div>
  </div>
  
</div>