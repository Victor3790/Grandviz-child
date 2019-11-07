<div class="row">
<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

      <div class="col-xs-12 col-md-6 col-xl-4">
        <div class="lesson">
          <?php echo get_the_post_thumbnail($_post->ID, array(500, 300)); ?>
          <div class="lesson__info">
            <?php the_excerpt(); ?>
            <div class="button__wrapper">
              <a href="<?php the_permalink(); ?>">
                <div class="button button--golden">
                  <p>Seguir leyendo</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    <?php endwhile; ?>

<?php endif; wp_reset_postdata(); ?>
</div>
