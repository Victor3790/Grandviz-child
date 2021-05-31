<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Grandviz
 */

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'page' );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

<div class="subscribe">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2><?php echo get_field('header'); ?></h2>
        <p>
          <?php echo get_field('texto'); ?>
        </p>
      </div>
      <div class="col-xs-12">
				<?php //load_template( get_theme_file_path('template-parts/footer-form.php')); ?>
      </div>
    </div>
  </div>
</div>
