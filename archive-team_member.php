<?php get_header(); ?>

<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>

<h1>Team Members</h1>
<div class="list">
    <?php while ( have_posts() ) : the_post(); ?>

    <div <?php post_class(); ?>>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'portrait' ); ?></a>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
        
        <?php the_content(); ?>
    </div><div <?php post_class(); ?>>
        <?php the_post_thumbnail( 'portrait' ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
        
        <?php the_content(); ?>
    </div><div <?php post_class(); ?>>
        <?php the_post_thumbnail( 'portrait' ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
        
        <?php the_content(); ?>
    </div>

    <?php endwhile; ?>
</div> <!-- /.list -->


<?php get_footer(); ?>
