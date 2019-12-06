<?php
function g_child_home_styles(){
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
