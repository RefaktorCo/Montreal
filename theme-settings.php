<?php

global $slide_number;
$slide_number = theme_get_setting('slides_number');

drupal_add_js(drupal_get_path('theme', 'montreal') .'/js/theme_settings.js'); 
 
function montreal_form_system_theme_settings_alter(&$form, &$form_state) {
  global $slide_number;

 // Default path for image
  $bg_path = theme_get_setting('bg_path');
  if (file_uri_scheme($bg_path) == 'public') {
    $bg_path = file_uri_target($bg_path);
  }
  
  // Default path for back-ground image
  $background_path = theme_get_setting('background_path');
  if (file_uri_scheme($background_path) == 'public') {
    $background_path = file_uri_target($background_path);
  }  
  
  $count = 1;
  while ($count <= $slide_number){
    ${'slide_path_' . $count} = theme_get_setting('slide_path_'.$count.'');
    if (file_uri_scheme(${'slide_path_' . $count}) == 'public') {
      ${'slide_path_' . $count} = file_uri_target(${'slide_path_' . $count});
    }  
  $count++;
  }

  // Container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'montreal') . '/css/theme-options.css'),
    ),
  );
 
  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => 'General',
  );
          
    // SEO
    $form['options']['general']['seo'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">SEO</h3>',
    );
    
      // SEO Title
      $form['options']['general']['seo']['seo_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Title',
        '#default_value' => theme_get_setting('seo_title'),
      );
      
       // SEO Description
      $form['options']['general']['seo']['seo_description'] = array(
        '#type' => 'textarea',
        '#title' => 'Description',
        '#default_value' => theme_get_setting('seo_description'),
      );
      
       // SEO Keywords
      $form['options']['general']['seo']['seo_keywords'] = array(
        '#type' => 'textarea',
        '#title' => 'Keywords',
        '#default_value' => theme_get_setting('seo_keywords'),
      );
        
  // Header Options
  $form['options']['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header'),
  );
  
    // Logo
    $form['options']['header']['branding'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Branding</h3>',
    );
    
      // Logo Toggle
      $form['options']['header']['branding']['branding_type'] = array(
        '#type' => 'select',
        '#title' => 'Branding Type',
        '#default_value' => theme_get_setting('branding_type'),
        '#options' => array(
          'logo' => 'Logo',
          'text' => 'Text',
        ),
      );

      $form['options']['header']['branding']['bg_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to logo',
        '#default_value' => $bg_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );

      $form['options']['header']['branding']['bg_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload logo',
        '#description' => 'Upload a new logo image.',
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'logo')),
        ), 
      );
	  
	  //for back-ground image
	  $form['options']['header']['branding']['background_path'] = array(
        '#type' => 'textfield',
        '#title' => 'Path to Background image',
        '#default_value' => $background_path,
        '#disabled' => TRUE,
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
	  
	  
	 $form['options']['header']['branding']['background_upload'] = array(
        '#type' => 'file',
        '#title' => 'Upload Back-ground image',
        '#description' => 'Upload a Back-ground image.',
	
        '#states' => array(
          'visible' => array('#edit-branding-type' => array('value' => 'background')),
        ), 
      );
     
  // Front Page
  $form['options']['front_page'] = array(
    '#type' => 'fieldset',
    '#title' => 'Front Page',
  );
  
    // Slider
    $form['options']['front_page']['slider'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Image Slider</h3>',
      
    );
    
      // Enable Slider
      $form['options']['front_page']['slider']['enable_slider'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Image Slider',
        '#default_value' => theme_get_setting('enable_slider'),
      );
      
      // Slider Caption
      $form['options']['front_page']['slider']['slider_caption'] = array(
        '#type' => 'textarea',
        '#title' => 'Slider Caption',
        '#default_value' => theme_get_setting('slider_caption'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
      );
            
      // Enable Slider
      $form['options']['front_page']['slider']['slides_number'] = array(
        '#type' => 'select',
        '#title' => 'Select the number of slides you wish to use:',
        '#default_value' => theme_get_setting('slides_number'),
        '#options' => array(
          '1' => '1',
          '2' => '2',
          '3' => '3',
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
        ),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
      );

      $i = 1;
      while ($i <= $slide_number) {
      
        $form['options']['front_page']['slider']['slide_'.$i.''] = array(
          '#type' => 'fieldset',
          '#title' => '<h3 class="options_heading">Slide '.$i.'</h3>',
          '#states' => array (
          'invisible' => array(
            'input[name="enable_slider"]' => array('checked' => FALSE)
          )
        )
        );

          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_path_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'Path to Slide '.$i.'',
            '#default_value' => ${'slide_path_' . $i},
            '#disabled' => TRUE,
          );
	      
	        $form['options']['front_page']['slider']['slide_'.$i.'']['slide_upload_'.$i.''] = array(
            '#type' => 'file',
            '#title' => 'Upload image for Slide '.$i.'',
            '#description' => 'Upload a slide image.',
          );
          
          $form['options']['front_page']['slider']['slide_'.$i.'']['slide_url_'.$i.''] = array(
            '#type' => 'textfield',
            '#title' => 'URL for Slide '.$i.'',
            '#default_value' => theme_get_setting('slide_url_'.$i.''),
          );
          
	    $i++;    
      }
      
    // Recent Projects
    $form['options']['front_page']['recent_projects'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Recent Projects</h3>',
      
    );
    
      // Recent Projects Title
      $form['options']['front_page']['recent_projects']['recent_projects_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Recent Projects Title',
        '#default_value' => theme_get_setting('recent_projects_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_projects"]' => array('checked' => FALSE)
          )
        )
      );  
      
     // Recent Projects Link
     $form['options']['front_page']['recent_projects']['recent_projects_link'] =array(
        '#type' => 'textfield',
        '#title' => 'Link to Recent Projects (Portfolio)',
        '#default_value' => theme_get_setting('recent_projects_link'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_projects"]' => array('checked' => FALSE)
          )
        )
      );      
      
    // Highlight
    $form['options']['front_page']['highlight'] = array(
      '#type' => 'fieldset', 
      '#title' => '<div class="plus"></div><h3 class="options_heading">Highlight</h3>',
      
    );
    
      // Enable highlight 
      $form['options']['front_page']['highlight']['enable_highlight'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Highlight',
        '#default_value' => theme_get_setting('enable_highlight'),
      );
      
      // highlight Text
      $form['options']['front_page']['highlight']['highlight_text'] = array(
      	'#type' => 'textarea',
      	'#title' => 'Highlight Text',
      	'#default_value' => theme_get_setting('highlight_text'),
      	'#states' => array (
          'invisible' => array(
            'input[name="enable_highlight"]' => array('checked' => FALSE)
          )
        )
      );
        
                
    // Recent Posts
    $form['options']['front_page']['recent_posts'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Recent Posts</h3>',
      
    );
          
      //Recent Posts Title
      $form['options']['front_page']['recent_posts']['recent_posts_title'] =array(
        '#type' => 'textfield',
        '#title' => 'Recent Posts Title',
        '#default_value' => theme_get_setting('recent_posts_title'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_posts"]' => array('checked' => FALSE)
          )
        )
      );  
      
      //Recent Posts Link
      $form['options']['front_page']['recent_posts']['recent_posts_link'] =array(
        '#type' => 'textfield',
        '#title' => 'Link to Posts Page',
        '#default_value' => theme_get_setting('recent_posts_link'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_recent_posts"]' => array('checked' => FALSE)
          )
        )
      );  
      
      
    // Twitter
    $form['options']['front_page']['twitter_feed'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Twitter Feed</h3>',
      
    );
    
      // Enable Twitter
      $form['options']['front_page']['twitter_feed']['enable_twitter_feed'] = array(
        '#type' => 'checkbox',
        '#title' => 'Enable Twitter Feed',
        '#default_value' => theme_get_setting('enable_twitter_feed'),
      );
      
      // Twitter App Consumer Key
      $form['options']['front_page']['twitter_feed']['twitter_app_consumer_key'] =array(
        '#type' => 'textfield',
        '#title' => 'Twitter App Consumer Key',
        '#default_value' => theme_get_setting('twitter_app_consumer_key'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Twitter App Consumer Secret
      $form['options']['front_page']['twitter_feed']['twitter_app_consumer_secret'] =array(
        '#type' => 'textfield',
        '#title' => 'Twitter App Consumer Secret',
        '#default_value' => theme_get_setting('twitter_app_consumer_secret'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Twitter App Access Token
      $form['options']['front_page']['twitter_feed']['twitter_app_access_token'] =array(
        '#type' => 'textfield',
        '#title' => 'Twitter App Access Token',
        '#default_value' => theme_get_setting('twitter_app_access_token'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Twitter App Access Token Secret
      $form['options']['front_page']['twitter_feed']['twitter_app_access_secret'] =array(
        '#type' => 'textfield',
        '#title' => 'Twitter App Access Token Secret',
        '#default_value' => theme_get_setting('twitter_app_access_secret'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
          )
        )
      );
      
      // Twitter Handle
      $form['options']['front_page']['twitter_feed']['twitter_handle'] =array(
        '#type' => 'textfield',
        '#title' => 'Twitter Handle',
        '#default_value' => theme_get_setting('twitter_handle'),
        '#states' => array (
          'invisible' => array(
            'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
          )
        )
      );  
 
  // Design
  $form['options']['design'] = array(
    '#type' => 'fieldset',
    '#title' => 'Design',
  );
  
    // CSS
    $form['options']['design']['css'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">CSS</h3>',
    );
      
      // User CSS
      $form['options']['design']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => 'Add your own CSS',
        '#default_value' => theme_get_setting('user_css'),
      ); 
  
  // Typography
  $form['options']['typography'] = array(
    '#type' => 'fieldset',
    '#title' => 'Typography',
  );
  
    // Font
    $form['options']['typography']['font'] = array(
      '#type' => 'fieldset',
      '#title' => '<div class="plus"></div><h3 class="options_heading">Font</h3>',
    );
    
      // Font Family
      $form['options']['typography']['font']['font_family'] = array(
        '#type' => 'select',
        '#title' => 'Select a font family',
        '#default_value' => theme_get_setting('font_family'),
        '#options' => array(
          '"Oswald", sans-serif' => '"Oswald", sans-serif',
          'Open Sans Condensed, serif' => '"Open Sans Condensed", serif',
          'Arial, Helvetica, sans-serif' => 'Arial, Helvetica, sans-serif',
          'Georgia, serif' => 'Georgia, serif',
          '"Helvetica Neue", Helvetica, Arial, sans-serif' => '"Helvetica Neue", Helvetica, Arial, sans-serif',
          '"Times New Roman", Times, serif' => '"Times New Roman", Times, serif',
          'Verdana, Arial, Helvetica, sans-serif' => 'Verdana, Arial, Helvetica, sans-serif',
        ),
      );
    
  // Submit Button
  $form['#submit'][] = 'montreal_settings_submit';
  $form['#submit'][] = 'montreal_background_settings_submit';
  $form['#submit'][] = 'montreal_slide_settings_submit';
  
}

function montreal_settings_submit($form, &$form_state) {
  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['bg_path']['#default_value'] ;
  
  $file = file_save_upload('bg_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['bg_path'] = $form_state['values']['bg_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['bg_path'] = $form_state['values']['bg_path'] = $previous;
  }
  
}

// for background image//ntf
function montreal_background_settings_submit($form, &$form_state) {

  // Get the previous value
  $previous = 'public://' . $form['options']['header']['branding']['background_path']['#default_value'] ;
  
  $file = file_save_upload('background_upload');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['background_path'] = $form_state['values']['background_path'] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['background_path'] = $form_state['values']['background_path'] = $previous;
  }
  
}

// for slider images
function montreal_slide_settings_submit($form, &$form_state) {
  global $slide_number;
  $counter = '1';
  
  while ($counter <= $slide_number) {
  // Get the previous value
  $previous = 'public://' . $form['options']['front_page']['slider']['slide_'.$counter.'']['slide_path_'.$counter.'']['#default_value'] ;
  
  $file = file_save_upload('slide_upload_'.$counter.'');
  if ($file) {
    $parts = pathinfo($file->filename);
    $destination = 'public://' . $parts['basename'];
    $file->status = FILE_STATUS_PERMANENT;
    
    if(file_copy($file, $destination, FILE_EXISTS_REPLACE)) {
      $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $destination;
      if ($destination != $previous) {
        return;
      }
    }
  } else {
    // Avoid error when the form is submitted without specifying a new image
    $_POST['slide_path_'.$counter.''] = $form_state['values']['slide_path_'.$counter.''] = $previous;
  }
  
  $counter++;
  }
}


?>