<?php get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

<?php while ( have_posts() ) : the_post(); ?>

<div <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
    <p class="date"><?php the_date(); ?></p>
    <?php the_content(); ?>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>
