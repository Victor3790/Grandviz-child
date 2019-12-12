<?php
function g_child_enqueue() {
  //Register styles and scripts.
  $parentThemeUri = get_template_directory_uri();
  $childThemeUri = get_stylesheet_directory_uri();

  wp_register_style('parent-styles', $parentThemeUri . '/style.css');
  wp_register_style('page-styles', $childThemeUri . '/assets/css/page.css');
  wp_register_style('subscribe', $childThemeUri . '/assets/css/subscribe.css');
  wp_register_style('home-styles-1', $childThemeUri . '/assets/css/home.css');
  wp_register_style('home-styles-2', $childThemeUri . '/assets/css/home-styles.css');
  wp_register_script('num-scroll', $childThemeUri . '/assets/js/jquery.numscroll.js');
  wp_register_script('scroll-magic', $childThemeUri . '/assets/js/ScrollMagic.min.js');
  wp_register_script('custom-home-functions', $childThemeUri . '/assets/js/homeScript.js');
  wp_register_style('academia', $childThemeUri . '/assets/css/academia.css');
  wp_register_script( 'subscription', $childThemeUri . '/assets/js/subscription.js');

  //Enqueue styles and scripts conditionally
  wp_enqueue_style('parent-styles');
  wp_enqueue_style('page-styles');
  wp_enqueue_style('subscribe');
  wp_enqueue_script('subscription');


  if(is_page('inicio')){
    wp_enqueue_style('home-styles-1');
    wp_enqueue_style('home-styles-2');
    wp_enqueue_script('num-scroll');
    wp_enqueue_script('scroll-magic');
    wp_enqueue_script('custom-home-functions');
  }

  if(is_page('academia')){
    wp_dequeue_style( 'subscribe');
    wp_dequeue_script( 'subscription');
    wp_enqueue_style('academia');
  }

  //Support for Ajax.
  wp_localize_script( 'subscription', 'gChildAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

}
