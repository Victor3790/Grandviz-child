<?php
function g_child_support(){
   add_post_type_support( 'page', 'excerpt' );
   add_image_size( 'home-hero-large', 1700, 700, true );
   add_image_size( 'home-hero-small', 870, 700, true);
   add_image_size( 'percentage-small', 680, 1100, true);
   add_image_size( 'seccion-tres-chico', 540, 360, true);
   add_image_size( 'seccion-tres-mediano', 330, 220, true);
   add_image_size( 'seccion-tres-grande', 450, 270, true);
   add_image_size( 'seccion-tres-extra', 300, 270, true);
}
