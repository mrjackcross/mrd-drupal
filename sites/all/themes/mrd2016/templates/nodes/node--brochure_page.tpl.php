
<div class="container">
  <div class="row">
	  <div class="col-sm-5 txt-col">		
	  	  	  <?php
		  	  $url = file_create_url($node->field_brochure_pdf['und'][0]['uri']);
		  ?>
		  
	  	  <h1><?php print render($content['field_heading']); ?> <?php print '<a id="brochure-download-link" target="_blank" href="' . $url . '">Download PDF</a>'; ?> </h1>

	  </div>
	  
	  <div class="col-sm-7 img-col">
	  
	  </div>
 </div>
  
</div>

<div id="carousel-controls-wrapper" class="row">
	<div id="brochure-wrapper">
	<?php
	print render($content['field_brochure_page']); ?>
	</div>
</div>
