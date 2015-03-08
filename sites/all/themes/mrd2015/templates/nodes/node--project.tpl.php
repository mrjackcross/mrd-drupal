<?php 
if ($view_mode == "teaser") { 
	
	  /* ////////////////////////
	 //////////Teaser///////////
	//////////////////////// */ ?>

   <div class="container banner-image">
   	  
		  <div class="drop-shadow" id="featured-project-banner">
		  	
			<?php print render($content['field_banner_image']); ?>
		  	
	      </div>
	      
  </div>
  
   <div class="container">
   	  
		  <div class="row" id="featured-project-strap">
		  	
			<h1 class="banner-heading"><?php print render($content['field_featured_project_strapline']); ?></h1>
		  	
	      </div>
	      
  </div>
  <div class="container" id="featured-project-details-wrapper">
	  <div id="featured-project-details" class="well clearfix"<?php print $attributes; ?>>
	   	
		  <div class="row">
			  <div class="col-sm-5 txt-col">		
			  	  <h2><?php print 'featured project:'; ?></h2>
			  	  <a href="<?php print $node_url; ?>"><h1><?php print render($content['field_heading']); ?></h1></a>
				  <?php print render($content['body']); ?>
			  </div>
			  
			  <div class="col-sm-7 img-col">
			 	 <?php print render($content['field_project_detail_image']); ?>
			  </div>
		  </div>
	  
	  </div>
  </div>

<?php } else { ?>

	  <?php
	  /* ////////////////////////
	 ////////Full View//////////
	//////////////////////// */ ?>
	
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

 <div id="carousel-controls-wrapper" class="row">
 		<div class="col-xs-12" id="project-image-carousel-container">
 			<?php print render($content['field_project_image']); ?>
	 	</div>
 </div> 
 <div class="container">
 
    <div class="row">
	  <div id="project-heading" class="col-xs-12">
		  <?php print render($title_prefix); ?>
		    <h1 class="banner-heading">
		    <?php print render($content['field_heading']); ?>
		    <?php 
		    if (!empty($content['field_project_date'])) { ?>
		    	<span class="project-heading-date"><?php print render($content['field_project_date']);?></span>
		    <?php
		    } ?>
		    
		    </h1>
		  <?php print render($title_suffix); ?>
		
      </div>
  </div>
  
  <div class="row">
	  <div class="col-sm-5 txt-col">		
		  <?php print render($content['body']); ?>
		  
		  <?php
		  if (!empty($content['field_project_date'])) { ?>
			  <p class="project-attribute"><span class="project-attribute-label">Budget - </span><?php print $node->field_project_date['und'][0]['value'];?></p>
		  <?php
		  } ?>
		  
		  <?php
		  if (!empty($content['field_project_budget'])) { ?>
			  <p class="project-attribute"><span class="project-attribute-label">Budget - </span><?php print $node->field_project_budget['und'][0]['value'];?></p>
		  <?php
		  } ?>
		  
		  <?php
		  if (!empty($content['field_project_weeks'])) { ?>
			 <p class="project-attribute"><span class="project-attribute-label">Weeks - </span><?php print $node->field_project_weeks['und'][0]['value'];?></p>
	      <?php 
	      } ?>
		  
	  </div>
	  
	  <div class="col-sm-7 img-col">
	  
	  
	  </div>
	  
  </div>
  
	  <div id="project-controls" class="row">
	      <?php	
		  $options = array('absolute' => TRUE);
		  ?>
		  
		  
		  <?php
	      $nid = $previous_project_node_id;
		  $url = url('node/' . $nid, $options);
		  ?>
		  <a href="<?php print $url; ?>" class="btn btn-default pull-left">
		  <span>Previous Project</span>
		  </a>
		  
		  <?php
	      $nid = $next_project_node_id;
		  $url = url('node/' . $nid, $options);
		  ?>
		  <a href="<?php print $url; ?>" class="btn btn-default pull-left">
		  <span>Next Project</span>
		  </a>
		  	   
		  <a href="<?php global $base_url; print $base_url;?>#Projects" class="btn btn-default pull-right">
		  <span>All projects</span>
		  </a>	
	 </div> 
	  
</div>

<?php } ?>
