<?php
/* Define $root as a global variable */
global $root;
$theme_root = base_path() . path_to_theme();
$root = base_path() . drupal_get_path('theme', 'montreal');

include_once(drupal_get_path('theme', 'montreal').'/includes/init.php');

/* Template naming suggestions */
function montreal_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    $suggest = "page__node__{$vars['node']->type}";
    $vars['theme_hook_suggestions'][] = $suggest;
  }
  
  $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
    
}

/* Assign top level menu list items an ascending class of menu_$number  */
function montreal_menu_link(array $variables) {
  //unset all the classes
  unset($variables['element']['#attributes']['class']);
  $element = $variables['element'];
  $sub_menu = '';
  
  if($variables['element']['#attributes']) {
    $sub_menu = '';
  }

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  
  // if link class is active, make li class as active too
  if(strpos($output,"active")>0){
    $element['#attributes']['class'][] = "active";
  }
  
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

/* Allow sub-menu items to be displayed */
function montreal_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
  	$pid = variable_get('menu_main_links_source', 'main-menu');
	$tree = menu_tree($pid);
	return drupal_render($tree);
  }
  return theme_links($variables);
}

/* Add a comma delimiter between field tags*/
function montreal_field($variables) {
 
  $output = '';
 
   // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';  
  }
 
  if ($variables['element']['#field_name'] == 'field_tags') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(' / ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_image') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_second_image') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }

  
  elseif ($variables['element']['#field_name'] == 'field_basic_portfolio_categories') {
    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
  
  elseif ($variables['element']['#field_name'] == 'field_portfolio_image') {

    // For tags, concatenate into a single, comma-delimitated string.
    foreach ($variables['items'] as $delta => $item) {
      $rendered_tags[] = drupal_render($item);
    }
    $output .= implode(', ', $rendered_tags);
  }
   
  else {
    $output .= '<div class="field-items"' . $variables['content_attributes'] . '>';
    // Default rendering taken from theme_field().
    foreach ($variables['items'] as $delta => $item) {
      $classes = 'field-item ' . ($delta % 2 ? 'odd' : 'even');
      $output .= '<div class="' . $classes . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</div>';
    }
    $output .= '</div>';
    // Render the top-level DIV.
    $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';
  }
  
  // Render the top-level DIV.
   
  return $output;
}

/* Put Breadcrumbs in a ul li structure and add descending z-index style to each <a href> tag */
function montreal_breadcrumb($variables) {
  $count = '100';
  $breadcrumb = $variables['breadcrumb'];
  $crumbs = '';

  if (!empty($breadcrumb)) {
   
    foreach($breadcrumb as $value) {
      $count = $count - 1;
      $style = ' style="z-index:'.$count.';"';
      $pos = strpos( $value, ">"); 
      $temp1=substr($value,0,$pos);
      $temp2=substr($value,$pos,$pos);
      $crumbs = $value.'/ ';
    }
  
  }
  return $crumbs;
}

/* Add various META tags to HTML head. */
function montreal_preprocess_html(&$vars){
  global $root;
  $meta_title = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 1,
    '#attributes' => array(
      'name' => 'title',
      'content' => theme_get_setting('seo_title')
    )
  );
  
  $meta_description = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 2,
    '#attributes' => array(
      'name' => 'description',
      'content' => theme_get_setting('seo_description')
    )
  );
  
  $meta_keywords = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 3,
    '#attributes' => array(
      'name' => 'keywords',
      'content' => theme_get_setting('seo_keywords')
    )
  );
  
  $font = array(
    '#tag' => 'link', 
    '#weight' => 4,
    '#attributes' => array( 
      'href' => 'http://fonts.googleapis.com/css?family=Open+Sans', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
    ),
  );
  
  $condensed= array(
    '#tag' => 'link', 
    '#weight' => 5,
    '#attributes' => array( 
      'href' => 'http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
    ),
  );

  $color = array(
    '#tag' => 'link', 
    '#weight' => 6,
    '#attributes' => array( 
      'href' => ''.$root.'/css/colors/'.theme_get_setting('color_scheme').'.css', 
      'rel' => 'stylesheet',
      'type' => 'text/css',
      'media' => 'screen',
    ),
  );
  
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#weight' => 7,
    '#attributes' => array(
      'name' => 'viewport',
      'content' =>  'width=device-width, initial-scale=1',
    )
  );
  
  $font_family = array(
    '#type' => 'markup',
    '#markup' => "<style type='text/css'>body {font-family:".theme_get_setting('font_family')." !important;}</style> ",
    '#weight' => 8,
  );
   
  if (theme_get_setting('seo_title') != "") {
    drupal_add_html_head( $meta_title, 'meta_title' );
  }
   if (theme_get_setting('seo_description') != "") {
    drupal_add_html_head( $meta_description, 'meta_description' );
  }
  if (theme_get_setting('seo_keywords') != "") {
    drupal_add_html_head( $meta_keywords, 'meta_keywords' );
  }
  
  if (theme_get_setting('enable_boxed_layout') == "1") {
    drupal_add_html_head( $box_layout, 'box_layout' );
  }

  drupal_add_html_head( $font, 'google_font_open_sans' );
  drupal_add_html_head( $condensed, 'google_font_condensed' );
  drupal_add_html_head( $viewport, 'meta_viewport' );
  drupal_add_html_head( $font_family, 'font_family');
  
}

/* Separate from montreal_preprocess_html so function can be called directly before </head> tag. */
function montreal_user_css() {
  echo "<!-- User defined CSS -->";
  echo "<style type='text/css'>";
  echo theme_get_setting('user_css');
  echo "</style>";
  echo "<!-- End user defined CSS -->";	
}

?>