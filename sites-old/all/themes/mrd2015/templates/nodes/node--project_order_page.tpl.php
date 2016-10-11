<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
 
   <div class="row">
	  <div class="col-xs-12 txt-col">
		  <?php print render($title_prefix); ?>
		    <h1><?php print render($content['field_heading']); ?></h1>
		  <?php print render($title_suffix); ?>
		  
		  <?php print render($content['body']); ?>
      
      </div>
	  
	  <div class="col-xs-12 img-col">
	        
	      	<!-- render Project Order View -->
			<?php print views_embed_view('project_order','project_order_block'); ?>
		  
	  </div>
  </div>
  
</div>