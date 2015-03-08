<?php 
	$imgUri = $node->field_banner_image['und'][0]['uri']; 
	$imgUrl = file_create_url($imgUri);	
?>



<div id="testimonial" class="row banner-image">
	<div class="col-sm-1">
	</div>
	
		<div id="testimonial-image" class="drop-shadow col-xs-10 contextual-links-region" 
		style="background-image: url('<?php print $imgUrl; ?>'); 	
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php print $imgUrl; ?>',sizingMethod='scale');
	    -ms-filter: \"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php print $imgUrl; ?>',sizingMethod='scale')\";">
			
			<?php print render($title_suffix); ?>
			
			<div class="col-sm-1">
			</div>
			
			<div class="testimonial-text col-sm-5 col-lg-3">
				
				<div class="testimonial-text-wrapper">
					<p class="testimonial-text"><?php print render($content['field_testimonial_text']); ?></p>
					
					<span class="testimonial-source">- <?php print render($content['field_testimonial_source']); ?></span>
				</div>
				
			</div>
			
			<div class="col-sm-4 col-lg-6">
			</div>  
		
		</div>
	
	<div class="col-sm-1">
	</div>
</div>
