<?php
function mrd2015_preprocess_page(&$vars, $hook) {
  //Make page themable according to content type
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  } 
  
  //full width fixed nav bar
  unset($vars['navbar_classes_array'][1]);
  //unset($vars['navbar_classes_array'][2]);
  //$vars['navbar_classes_array'][] = 'navbar-fixed-top';
}

/**
* Implements hook_preprocess_node().
*/
function mrd2015_preprocess_node(&$vars) {
  if($vars['view_mode'] == 'carousel_item') {
    $vars['theme_hook_suggestions'][] = 'node__' . $vars['type'] . '__carousel_item';
  }
  
  if($vars['node']->type == 'project') {
  	
  	if($vars['view_mode'] == 'full') {
  	
  		$projectList = views_get_view_result('project_list','project_list_block');
  		
  		foreach($projectList as $index => $project) {
  		    if($project->nid == $vars['node']->nid) {
	        	$thisIndex = $index;
	        	
	        	$previousIndex = $index - 1;
	        	if($previousIndex < 0 ) $previousIndex = count( $projectList ) - 1;
	        	
	        	$nextIndex = $index + 1;
	        	if($nextIndex == count( $projectList ) ) $nextIndex = 0;
        	} 
        	
        	
		}
		 
		$nextNodeId = $projectList[$previousIndex]->nid;   
  		$previousNodeId = $projectList[$nextIndex]->nid;
  		
  		$vars['previous_project_node_id'] = $previousNodeId;  		
  		$vars['next_project_node_id'] = $nextNodeId; 
  		
  	}
	  
  }
  
} 


function mrd2015_preprocess_image(&$vars) {
  // Make ALL images fluid
  foreach (array('width', 'height') as $key) {
    unset($vars[$key]);
  }
  $vars['attributes']['class'][] = 'img-responsive';
}
?>