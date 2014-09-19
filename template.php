<?php
/*
 *  Preprocess image style to add boostrap classes.
 */
function cart_theme_preprocess_image_style(&$vars) {
     if($vars['style_name'] == 'cart_img_circle'){
        $vars['attributes']['class'][] = 'img-responsive img-circle';
        }
     if($vars['style_name'] == 'cart_img_circle_thumb'){
        $vars['attributes']['class'][] = 'img-responsive img-circle pull-left';
        }
     if($vars['style_name'] == 'cart_img_square'){
        $vars['attributes']['class'][] = 'img-responsive';
        }
     if($vars['style_name'] == 'cart_img_square_thumb'){
        $vars['attributes']['class'][] = 'img-responsive pull-left';
        }
     if($vars['style_name'] == 'cart_img_circle_icon'){
        $vars['attributes']['class'][] = 'img-responsive img-circle pull-left';
        }
     if($vars['style_name'] == 'cart_img_square_icon'){
        $vars['attributes']['class'][] = 'img-responsive pull-left';
        }
     if($vars['style_name'] == 'cart_img_cover'){
        $vars['attributes']['class'][] = 'img-responsive img-cover';
        }
    if($vars['style_name'] == 'cart_img_coffeebook'){
        $vars['attributes']['class'][] = 'img-responsive img-coffeebook';
        }
}

/*
 *  Preprocess html to add font-awesome css.
 */
function cart_theme_preprocess_html(&$vars) {
      drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(
        'type' => 'external'
      ));
}
/*
 *  Preprocess page.tpl.php to inject the $search_box variable.
 */
function cart_theme_preprocess_page(&$variables){
  $search_form = drupal_get_form('search_form');
  $search_box = drupal_render($search_form);
  $variables['search_box'] = $search_box;
}

/*
 *  Form alter to add missing bootstrap classes and role to search form.
 */
function cart_theme_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_form') {
    $form['#attributes']['class'][] = 'navbar-form';
    $form['#attributes']['role'][] = 'search';
  }
}

?>
