
<?php if ($view_mode == "teaser") { ?>

   <div class="row banner-image">
   	  <div class="col-sm-1">
   	  </div>
   	  
	  <div class="col-sm-10">
		  <a href="<?php print $node_url; ?>"><?php print render($content['field_banner_image']); ?></a>
      </div>
      
      <div class="col-sm-1">
   	  </div>
  </div>
  
  <div class="container clearfix"<?php print $attributes; ?>>
   
	  <div class="row">
		  <div class="col-sm-4 txt-col">		
		  	  <a href="<?php print $node_url; ?>"><h1><?php print render($content['field_heading']); ?></h1></a>
			  <?php print render($content['body']); ?>
		  </div>
		  
		  <div class="col-sm-8 img-col">
		 	 <?php print render($content['field_project_detail_image']); ?>
		  </div>
	  </div>
  
  </div>

<?php } else { ?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> container clearfix"<?php print $attributes; ?>>
 
   <div class="row">
	  <div class="col-xs-12">
		  <?php print render($title_prefix); ?>
		    <h1><?php print render($content['field_heading']); ?></h1>
		  <?php print render($title_suffix); ?>
		
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

<?php } ?>
