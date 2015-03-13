<div class="container banner-image">
	
	<div class="drop-shadow contextual-links-region" id="featured-section-banner">
		<?php print render($title_suffix); ?>
		<?php
		if (!empty($content['field_external_link'])) { ?>
		<a href="<?php print $node->field_external_link['und'][0]['value']; ?>" <?php render($node->field_external['und'][0]['value']) == '1' ? print 'target="_blank">' : print 'target="_self">';?>
		<?php
		  } ?>	
			
			<?php print render($content['field_banner_image']); ?>
		
		<?php
		if (!empty($content['field_external_link'])) { ?>
		</a>
		<?php
		  } ?>
		  
	</div>
	
	      
</div>
  
   <div class="container">
   	  
		  <div class="row" id="featured-section-strap">
		  	
			<h1 class="banner-heading"><?php print render($content['field_featured_project_strapline']); ?></h1>
		  	
	      </div>
	      
  </div>
  <div class="container" id="featured-section-details-wrapper">
	  <div id="featured-project-details" class="well clearfix"<?php print $attributes; ?>>
	   	
		  <div class="row">
			  <div class="col-sm-5 txt-col">		
			  	  <?php print render($content['body']); ?>
			  </div>
			  
			  <div class="col-sm-7 img-col">
				<?php
				if (!empty($content['field_external_link'])) { ?>
				<a href="<?php print $node->field_external_link['und'][0]['value']; ?>" <?php render($node->field_external['und'][0]['value']) == '1' ? print 'target="_blank">' : print 'target="_self">';?>
				<?php
				  } ?>	
		  
					  <?php print render($content['field_project_detail_image']); ?>
				<?php
				if (!empty($content['field_external_link'])) { ?>
				</a>
				<?php
				  } ?>	  
					  
			  </div>
		  </div>
	  
	  </div>
  </div>