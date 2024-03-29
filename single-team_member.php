<?php get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

<div class="list">
    <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1> 
    <div <?php post_class(); ?>>
        <div class="profile-pic">
            <?php the_post_thumbnail( 'portrait' ); ?>
        </div>
        <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
</div> <!-- /.list -->


<?php get_footer(); ?>
