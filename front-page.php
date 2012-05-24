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

    <div class="left-col">
        <h2>What We’re About..</h2>
    </div>

    <div class="right-col">
        <h2>Like Us...</h2>
    </div>

<?php get_footer(); ?>
