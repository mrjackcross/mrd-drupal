<div id="About" class="<?php print $classes; ?> container clearfix"<?php print $attributes; ?>>
 
   <div class="row">
	  <div class="col-sm-5 txt-col">
		  <?php print render($title_prefix); ?>
		    <h1><?php print render($content['field_heading']); ?></h1>
		  <?php print render($title_suffix); ?>
		
      </div>
	  
	  <div class="col-sm-7 img-col">
	  </div>
  </div>
   
  <div class="row">
	  <div class="col-sm-5 txt-col">		
		  <?php print render($content['body']); ?>
	  </div>
	  
	  <div class="col-sm-7 img-col">
	 	 <?php print render($content['field_small_image']); ?>
	  </div>
  </div>
  
</div>