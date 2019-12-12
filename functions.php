<?php
  include (get_theme_file_path('/includes/g_child_enqueue.php'));
  include (get_theme_file_path('/includes/g_child_add_support.php'));
  include (get_theme_file_path('/includes/g_child_home_styles.php'));
  include (get_theme_file_path('/includes/g_child_popUp.php'));
  include (get_theme_file_path('/includes/g_child_subscription.php'));


  add_action('wp_enqueue_scripts', 'g_child_enqueue' );
  add_action('init', 'g_child_support');
  add_action('wp_head', 'g_child_home_styles');
  add_action('wp_footer', 'g_child_popUp');
  add_action('wp_ajax_g_child_subscription', 'g_child_subscription' );
  add_action('wp_ajax_nopriv_g_child_subscription', 'g_child_subscription' );
