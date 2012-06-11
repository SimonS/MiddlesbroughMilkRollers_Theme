<?php get_header(); ?>

    <div class="carousel">
        <?php $featured = new WP_Query( 'category_name=homepage' );
        while ( $featured->have_posts() ): $featured->the_post(); ?>
            <div class="feature">
                <?php the_post_thumbnail( 'carousel' ); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
        <?php endwhile; ?>
    </div>
    <script>
        ( function( $ ) {
            $( function() {
                $( '.carousel' ).orbit();
            } );
        } )( jQuery );
    </script>

    <div class="front-content">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>
    </div>

    <div class="featured">
        <?php $featured = new WP_Query( 'category_name=featured&posts_per_page=1' );
        while ( $featured->have_posts() ): $featured->the_post(); $more = 0; ?>
            <div class="feature">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php get_footer(); ?>
