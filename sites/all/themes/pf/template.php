<?php
  
  /*
   * Override or insert variables into the html template.
   *
   * @param $variables
   *   An array of variables to pass to the theme template.
   * @param $hook
   *   The name of the template being rendered. This is usually "html", but can
   *   also be "maintenance_page" since zen_preprocess_maintenance_page() calls
   *   this function to have consistent variables.
   */

  function pf_preprocess_html(&$variables, $hook) {
    
    // Add variables and paths needed for HTML5 and responsive support.
    $variables['assets_path'] = base_path() . drupal_get_path('theme', 'pf') . "/assets/";
    $variables['js_path'] = $variables['assets_path'] . "javascripts/";
    $variables['img_path'] = $variables['assets_path'] . "images/";
    
    $variables['html_attributes_array'] = array(
      'lang' => $variables['language']->language,
      'dir' => $variables['language']->dir
    );

    // Send X-UA-Compatible HTTP header
    if (is_null(drupal_get_http_header('X-UA-Compatible'))) {
      drupal_add_http_header('X-UA-Compatible', 'IE=edge,chrome=1');
    }

  }
  
  function pf_process_html(&$variables, $hook) {
    // Flatten out html_attributes
    $variables['html_attributes'] = drupal_attributes($variables['html_attributes_array']);
  }
  
  function pf_preprocess_page(&$variables, $hook) {
    $variables['pf_socialLinks'] = array(
      'facebook' => 'http://facebook.com',
      'you_tube' => 'http://youtube.com',
      'twitter' => 'http://twitter.com'
    );
  }

?>