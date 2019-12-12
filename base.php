<?php
/**
 * The base template.
 *
 * @package Grandviz
 */
?>
<?php get_header( grandviz_template_base() ); ?>

	<?php grandviz_site_breadcrumbs(); ?>

	<?php do_action( 'grandviz_render_widget_area', 'full-width-header-area' ); ?>

	<div <?php grandviz_content_wrap_class(); ?>>

		<div class="row">

			<div id="primary" <?php if(!is_home()) grandviz_primary_content_class(); ?>>

				<main id="main" class="site-main" role="main">

					<?php include grandviz_template_path(); ?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php if(!is_home()) get_sidebar(); // Loads the sidebar.php. ?>

		</div><!-- .row -->

	</div><!-- .site-content_wrap -->

	<?php load_template( get_theme_file_path('template-parts/popUp-form.php')); ?>

	<?php do_action( 'grandviz_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( grandviz_template_base() ); ?>
