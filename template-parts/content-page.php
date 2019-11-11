<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Grandviz
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
	   <h1><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
</article><!-- #post-## -->
