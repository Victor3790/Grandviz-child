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
		<div class="subscribe">
	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12 col-md-8">
	          <h2>¿Quieres formar parte de la comunidad <i>el viaje del cliente</i>?</h2>
	          <p>
	            Esta web tiene el objetivo de compartir conocimiento con todos
	            aquellos interesados en estrategias de orientación al cliente,
	            customer experience y servicio al cliente
	          </p>
	        </div>
	        <div class="col-xs-12 col-md-4">
	          <div class="button__wrapper">
							<a href="https://elviajedelcliente.com/elements/suscripcion/">
								<div class="button button--white">
									<p>SUSCRÍBETE YA</p>
								</div>
							</a>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
		<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links__title">' . esc_html__( 'Pages:', 'grandviz' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="page-links__item">',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'grandviz' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'grandviz' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
