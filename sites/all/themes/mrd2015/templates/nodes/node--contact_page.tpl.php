<div id="Contact" class="<?php print $classes; ?> scrollblock container clearfix"<?php print $attributes; ?>>
  
  <div class="row">
	  <div class="col-sm-5 txt-col">		
	  	  <?php print render($title_prefix); ?>
		    <h1><?php print render($content['field_heading']); ?></h1>
		  <?php print render($title_suffix); ?>
		  
		  <?php print render($content['body']); ?>
		  
		  <div id="contact-links">
			  <?php 
			  
			  //Grab each entity uri (which is basically a field collection item), and load it through entity_load(). The entity type is field_collection_item.
			  foreach ($content['field_link']['#items'] as $entity_uri) {
			  	$a_field_collection_item = entity_load('field_collection_item', $entity_uri);
			  	//Now you have a variable with the entity object loaded in it, and you can do stuff. 
			    foreach ($a_field_collection_item as $a_field_collection_item_object ) {
			    	$link_title = $a_field_collection_item_object->field_link_title['und'][0]['value'];
			    	$link_url = $a_field_collection_item_object->field_link_url['und'][0]['value'];
			    	$external = $a_field_collection_item_object->field_external['und'][0]['value'];
			    
			    	print '<p><a href="' . $link_url . '" ';
			    	$external == '1' ? print 'target="_blank">' : print 'target="_self">'; 
			    	print $link_title . '</a></p>';
			    }
			
			  } ?>
		  </div>
	  </div>
	  
	  <div class="col-sm-7 img-col">
	  <?php print $node->field_google_map_html['und'][0]['value']; ?>
	  </div>
  </div>
  
</div>