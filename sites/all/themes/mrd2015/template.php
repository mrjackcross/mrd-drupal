<?php
function mrd2015_preprocess_page(&$vars, $hook) {
  //Make page themable according to content type
  if (isset($vars['node'])) {
    $vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
  }
  
  //make navbar fluid
  //$vars['navbar_classes_array'][1] = "container-fluid";
  
}

function mrd2015_preprocess_image(&$vars) {
  // Make ALL images fluid
  foreach (array('width', 'height') as $key) {
    unset($vars[$key]);
  }
  $vars['attributes']['class'][] = 'img-responsive';
}

?>