<?php get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

<h1>Blog</h1>
<div class="list">
    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?>>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date"><?php the_date(); ?></span></h2> 
        
        <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
</div> <!-- /.list -->


<?php get_footer(); ?>
