<?php

function cart_theme_preprocess_image_style(&$vars) {
     if($vars['style_name'] == 'cart_img_circle'){
        $vars['attributes']['class'][] = 'img-responsive img-circle';
        }
     if($vars['style_name'] == 'cart_img_circle_thumb'){
        $vars['attributes']['class'][] = 'img-responsive img-circle pull-left';
        }
     if($vars['style_name'] == 'cart_img_square'){
        $vars['attributes']['class'][] = 'img-responsive img-rounded';
        }
     if($vars['style_name'] == 'cart_img_square_thumb'){
        $vars['attributes']['class'][] = 'img-responsive img-rounded pull-left';
        }
     if($vars['style_name'] == 'cart_img_circle_icon'){
        $vars['attributes']['class'][] = 'img-responsive img-circle pull-left';
        }
     if($vars['style_name'] == 'cart_img_square_icon'){
        $vars['attributes']['class'][] = 'img-responsive img-rounded pull-left';
        }
     if($vars['style_name'] == 'cart_img_cover'){
        $vars['attributes']['class'][] = 'img-responsive img-cover';
        }
    if($vars['style_name'] == 'cart_img_coffeebook'){
        $vars['attributes']['class'][] = 'img-responsive img-coffeebook';
        }
}

function cart_theme_preprocess_html(&$vars) {
      drupal_add_css('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(
        'type' => 'external'
      ));
}
?>