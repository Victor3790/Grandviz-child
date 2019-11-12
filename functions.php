<?php
  //Función para heredar los estilos del tema padre y añadir nuevos.

  function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('page-styles', get_stylesheet_directory_uri() . '/assets/css/page.css');

    if(is_page('inicio')){
      wp_enqueue_style('home-styles-1', get_stylesheet_directory_uri() . '/assets/css/home.css');
      wp_enqueue_style('home-styles-2', get_stylesheet_directory_uri() . '/assets/css/home-styles.css');
      wp_enqueue_script('num-scroll', get_stylesheet_directory_uri() . '/assets/js/jquery.numscroll.js');
      wp_enqueue_script('scroll-magic', get_stylesheet_directory_uri() . '/assets/js/ScrollMagic.min.js');
      //wp_enqueue_script('scroll-magic-debug', get_stylesheet_directory_uri() . '/assets/js/debug.addIndicators.min.js');
      wp_enqueue_script('custom-home-functions', get_stylesheet_directory_uri() . '/assets/js/homeScript.js');
    }

    if(is_page('academia')){
      wp_enqueue_style('academia', get_stylesheet_directory_uri() . '/assets/css/academia.css');
    }

    /*if(is_single()){
      wp_enqueue_style('posts-styles', get_stylesheet_directory_uri() . '/assets/css/posts.css');
    }*/
  }

  function add_child_theme_support(){
     add_post_type_support( 'page', 'excerpt' );
     add_image_size( 'home-hero-large', 1700, 700, true );
     add_image_size( 'home-hero-small', 870, 700, true);
  }


  function add_styles(){
    if(is_front_page()){
      $heroImageId = get_field( 'imagen' );
      $smallHeroImage =  wp_get_attachment_image_src( $heroImageId, 'home-hero-small' );
      $largeHeroImage =  wp_get_attachment_image_src( $heroImageId, 'home-hero-large' );
      ?>
      <style type="text/css">
        .hero{
      		background-image: url(<?php echo $smallHeroImage[0]; ?>);
      	}

      	@media (min-width: 768px){
      		.hero{
      			background-image: url(<?php echo $largeHeroImage[0]; ?>);
      		}
      	}
      </style>
      <?php
    }
  }

  add_action('init', 'add_child_theme_support');

  add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 1);

  add_action('wp_head', 'add_styles');
