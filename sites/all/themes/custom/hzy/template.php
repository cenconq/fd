<?php
/**
 * Implements template_preprocess_page().
 */
function hzy_preprocess_page(&$variables) {
  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-sm-6"';
  }
  elseif (!empty($variables['page']['sidebar_first']) || !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-sm-9"';
  }
  else {
    $variables['content_column_class'] = ' class="col-sm-12"';
  }

  // Pass Search Form to variable
  $search_box = drupal_render(drupal_get_form('search_form'));
  $variables['search_box'] = $search_box;
}

/**
 * Implements hook_form_alter().
 */
function hzy_form_alter(array &$form, array &$form_state = array(), $form_id = NULL) {
    switch ($form_id) {
      case 'search_form':
        // Add a clearfix class so the results don't overflow onto the form.
        $form['#attributes']['class'][] = 'clearfix';

        // Remove container-inline from the container classes.
        $form['basic']['#attributes']['class'] = array();

        // Hide the default button from display.
        $form['basic']['submit']['#attributes']['class'][] = 'element-invisible';

        unset($form['basic']['keys']['#title']);
        $form['basic']['keys']['#attributes']['placeholder'] = t('搜索');
        $form['basic']['button']['#prefix'] = '<button type="submit" class="search-btn">';
        $form['basic']['button']['#suffix'] = '</button>';
        $form['basic']['button']['#markup'] = '<i class="fa fa-search"></i>';       
        break;
    }
}