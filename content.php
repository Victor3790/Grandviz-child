<?php
/**
 * Template part for displaying posts.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Grandviz
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item--custom' ); ?>>
	<div class="posts-list__item__main--custom">
		<div class="posts-list__item-content--custom">

			<header class="entry-header--custom">
				<?php
					get_template_part( 'template-parts/post/post-components/post-title' );
				?>
			</header><!-- .entry-header -->

			<div class="entry-content--custom">
				<?php
					get_template_part( 'template-parts/post/post-components/post-content' );
				?>
			</div><!-- .entry-content -->

			<div class="read-more--custom">
				<?php
					get_template_part( 'template-parts/post/post-components/post-button' );
				?>
			</div><!-- .read-more-custom-->

		</div><!-- .posts-list__item-content-custom -->
	</div>

	<footer class="entry-footer--custom">
		<?php get_template_part( 'template-parts/post/post-meta/content-meta-date' ); ?>
	</footer><!-- .entry-footer-custom -->
</article><!-- #post-## -->
