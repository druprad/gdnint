<?php

function gdnweb_preprocess_node(&$variables) {
  $node = $variables['node'];
  // Display post information only on certain node types.
  if (variable_get('node_submitted_' . $node->type, TRUE)) {
    if ($node->type == "article") {
      if (!empty($node->field_blog_categories)) {
        $categories = gdnweb_format_comma_field('field_blog_categories', $node);
        $variables['blog_categories'] = $categories;
      }
    }
  }
}


function gdnweb_format_comma_field($field_category, $node, $limit = NULL) {
  $category_arr = array();
  $field = field_get_items('node', $node, $field_category);
  if (!empty($field)) {
    foreach ($field as $item) {
      $term = taxonomy_term_load($item['tid']);
      if ($term) {
        if (module_exists('i18n_taxonomy')) {
          $term_name = i18n_taxonomy_term_name($term, $node->language);
        } else {
          $term_name = $term->name;
        }
        $category_arr[] = l($term_name, 'taxonomy/term/' . $item['tid']);
      }
      if ($limit) {
        if (count($category_arr) == $limit) {
          $category = implode(', ', $category_arr);
          return $category;
        }
      }
    }
  }
  $category = implode(', ', $category_arr);
  return $category;
}

/**
 * Implement hook_form_comment_form_alter().
 */
function gdnweb_form_comment_form_alter(&$form, &$form_state, $form_id) {
  $form['actions']['submit']['#value'] = t('POST COMMENT');
}

function gdnweb_breadcrumb($variables) {
  // Convenience variable:
  $breadcrumb = $variables['breadcrumb'];
  $breadcrumb[] = drupal_get_title();
  // If we have any breadcrumbs:
  if (!empty($breadcrumb) && (count($breadcrumb) > 1)) {
    // Convert 'em to a string:
    $breadcrumbs = implode(' <span class="divider">/</span> ', $breadcrumb);
    // Build a heading--here at least, we're following the D7 convention of
    // accompanying menus with invisible headings to aid in text-only navigation:
    $heading = t('You are here');
    // Pattern for output:
    $output_pattern = '<h2 class="element-invisible">%s</h2><ul class="breadcrumb">%s</ul>';
    // Return the markup:
    return sprintf($output_pattern, $heading, $breadcrumbs);
  }
}

/**
 * Implement hook_form_search_block_form_alter().
 */
function gdnweb_form_search_block_form_alter(&$form) {
  $form['search_block_form']['#attributes']['placeholder'] = t('Start Typing...');
  $form['actions']['#attributes']['class'][] = 'element-invisible';
}


function gdnweb_css_alter(&$css) {

    /*unset($css[drupal_get_path('module','system').'/system.theme.css']);
    unset($css[drupal_get_path('module','system').'/system.base.css']);
    unset($css[drupal_get_path('module','system').'/system.menus.css']);

    unset($css[drupal_get_path('module','field_group').'/field_group.field_ui.css']);
    unset($css[drupal_get_path('module','views').'/css/views.css']);
    unset($css[drupal_get_path('module','user').'/user.css']);
    unset($css[drupal_get_path('module','search').'/search.css']);
    unset($css[drupal_get_path('module','node').'/node.css']);
    unset($css[drupal_get_path('module','field').'/theme/field.css']);
    unset($css[drupal_get_path('module','comment').'/comment.css']);*/

    // echo '<pre>'; print_r($css); echo '</pre>'; die;

}

function gdnweb_preprocess_views_view(&$vars) {
  if($vars['name'] == "home_page_blocks") {
    if($vars['display_id'] == "block_3" || $vars['display_id'] == "block" || $vars['display_id'] == 'block_1') {
          $vars['classes_array'] = array();
          $vars['classes_array'][] = 'row';
    }
  }
}


function gdnweb_menu_link($variables) {
  $menuItemPrefix = '<i class="fa fa-angle-right"></i>';
  if(is_array($variables['element']['#theme']) && in_array('menu_link__menu_footer_custom', $variables['element']['#theme'])) {
    // Referred from https://knackforge.com/blog/pathirakaliappan/drupal-add-icon-menu-links
    unset($variables['element']['#attributes']['class']);
    $element = $variables ['element'];
    $output = l($element ['#title'], $element ['#href'], $element ['#localized_options']);
    return '<li' . drupal_attributes($element ['#attributes']) . '>' . $menuItemPrefix . $output . "</li>";
  }

  return theme_menu_link($variables);
}

/**
 * Generate markup for our list.
 */
function gdnweb_taxonomy_menu_block($variables) {
  $tree = $variables['items'];
  $config = $variables['config'];

  $num_items = count($tree);
  $i = 0;

  $output = '<ul>';
  foreach ($tree as $tid => $term) {
    $i++;
    // Add classes.
    $attributes = array();
    if ($i == 1) {
      $attributes['class'][] = 'first';
    }
    if ($i == $num_items) {
      $attributes['class'][] = 'last';
    }
    if ($term['active_trail'] == '1') {
      $attributes['class'][] = 'active-trail';
    }
    if ($term['active_trail'] == '2') {
      $attributes['class'][] = 'active';
    }

    // Alter link text if we have to display the nodes attached.
    if (isset($term['nodes'])) {
      $term['name'] = $term['name'] . ' (' . $term['nodes'] . ')';
    }

    // Set alias option to true so we don't have to query for the alias every
    // time, as this is cached anyway.
    $output .= '<li' . drupal_attributes($attributes) . '><i class="fa fa-angle-right"></i>' . l($term['name'], $term['path'], $options = array('alias' => TRUE));
    if (!empty($term['children'])) {
      $output .= theme('taxonomy_menu_block__' . $config['delta'], (array('items' => $term['children'], 'config' => $config)));
    }
    $output .= '</li>';
  }
  $output .= '</ul>';

  return $output;
}
