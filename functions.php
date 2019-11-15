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
     add_image_size( 'percentage-small', 680, 1100, true);
     add_image_size( 'seccion-tres-chico', 540, 360, true);
     add_image_size( 'seccion-tres-mediano', 330, 220, true);
     add_image_size( 'seccion-tres-grande', 450, 270, true);
     add_image_size( 'seccion-tres-extra', 300, 270, true);
  }


  function add_home_styles(){
    if(is_front_page()){
      $heroImageId = get_field( 'fondo_seccion_principal' );
      $percentageImageId = get_field( 'fondo_seccion_porcentages' );
      $assetImageId1 = get_field( 'imagen_asset_8');
      $assetImageId2 = get_field( 'imagen_asset_9');
      $assetImageId3 = get_field( 'imagen_asset_10');
      $assetImageId4 = get_field( 'imagen_asset_11');

      $smallHeroImage =  wp_get_attachment_image_src( $heroImageId, 'home-hero-small' );
      $largeHeroImage =  wp_get_attachment_image_src( $heroImageId, 'home-hero-large' );

      $smallPercentageImage = wp_get_attachment_image_src( $percentageImageId, 'percentage-small' );
      $largePercentageImage = wp_get_attachment_image_src( $percentageImageId, 'home-hero-large');

      $smallAssetImage1 = wp_get_attachment_image_src( $assetImageId1, 'seccion-tres-chico');
      $mediumAssetImage1 = wp_get_attachment_image_src( $assetImageId1, 'seccion-tres-mediano');
      $largeAssetImage1 = wp_get_attachment_image_src( $assetImageId1, 'seccion-tres-grande');
      $xlAssetImage1 = wp_get_attachment_image_src( $assetImageId1, 'seccion-tres-extra');

      $smallAssetImage2 = wp_get_attachment_image_src( $assetImageId2, 'seccion-tres-chico');
      $mediumAssetImage2 = wp_get_attachment_image_src( $assetImageId2, 'seccion-tres-mediano');
      $largeAssetImage2 = wp_get_attachment_image_src( $assetImageId2, 'seccion-tres-grande');
      $xlAssetImage2 = wp_get_attachment_image_src( $assetImageId2, 'seccion-tres-extra');

      $smallAssetImage3 = wp_get_attachment_image_src( $assetImageId3, 'seccion-tres-chico');
      $mediumAssetImage3 = wp_get_attachment_image_src( $assetImageId3, 'seccion-tres-mediano');
      $largeAssetImage3 = wp_get_attachment_image_src( $assetImageId3, 'seccion-tres-grande');
      $xlAssetImage3 = wp_get_attachment_image_src( $assetImageId3, 'seccion-tres-extra');

      $smallAssetImage4 = wp_get_attachment_image_src( $assetImageId4, 'seccion-tres-chico');
      $mediumAssetImage4 = wp_get_attachment_image_src( $assetImageId4, 'seccion-tres-mediano');
      $largeAssetImage4 = wp_get_attachment_image_src( $assetImageId4, 'seccion-tres-grande');
      $xlAssetImage4 = wp_get_attachment_image_src( $assetImageId4, 'seccion-tres-extra');
      ?>
      <style type="text/css">
        .hero{
      		background-image: url(<?php echo $smallHeroImage[0]; ?>);
      	}

        .numbers{
          background-image: url(<?php echo $smallPercentageImage[0]; ?>);
          position: relative;
        }

        .numbers::before{
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background-color: #000;
          opacity: 0.5;
          z-index: 0;
        }

        #customer-strategy__item-1{
          background-image: url(<?php echo $smallAssetImage1[0]; ?>);
        }

        #customer-strategy__item-2{
          background-image: url(<?php echo $smallAssetImage2[0]; ?>);
        }

        #customer-strategy__item-3{
          background-image: url(<?php echo $smallAssetImage3[0]; ?>);
        }

        #customer-strategy__item-4{
          background-image: url(<?php echo $smallAssetImage4[0]; ?>);
        }

      	@media (min-width: 768px){
      		.hero{
      			background-image: url(<?php echo $largeHeroImage[0]; ?>);
      		}
          .numbers{
            background-image: url(<?php echo $largePercentageImage[0]; ?>);
          }

          #customer-strategy__item-1{
            background-image: url(<?php echo $mediumAssetImage1[0]; ?>);
          }

          #customer-strategy__item-2{
            background-image: url(<?php echo $mediumAssetImage2[0]; ?>);
          }

          #customer-strategy__item-3{
            background-image: url(<?php echo $mediumAssetImage3[0]; ?>);
          }

          #customer-strategy__item-4{
            background-image: url(<?php echo $mediumAssetImage4[0]; ?>);
          }
      	}

        @media (min-width: 992px){
          #customer-strategy__item-1{
            background-image: url(<?php echo $largeAssetImage1[0]; ?>);
          }

          #customer-strategy__item-2{
            background-image: url(<?php echo $largeAssetImage2[0]; ?>);
          }

          #customer-strategy__item-3{
            background-image: url(<?php echo $largeAssetImage3[0]; ?>);
          }

          #customer-strategy__item-4{
            background-image: url(<?php echo $largeAssetImage4[0]; ?>);
          }
        }

        @media (min-width: 992px){
          #customer-strategy__item-1{
            background-image: url(<?php echo $xlAssetImage1[0]; ?>);
          }

          #customer-strategy__item-2{
            background-image: url(<?php echo $xlAssetImage2[0]; ?>);
          }

          #customer-strategy__item-3{
            background-image: url(<?php echo $xlAssetImage3[0]; ?>);
          }

          #customer-strategy__item-4{
            background-image: url(<?php echo $xlAssetImage4[0]; ?>);
          }
        }
      </style>
      <?php
    }
  }

  add_action('init', 'add_child_theme_support');

  add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 1);

  add_action('wp_head', 'add_home_styles');
