<?php

register_sidebar( array(
    'name'=>'sidebar-1',
    'before_widget'=>'',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2><div class="widget" id="%1$s">'
) );

register_nav_menu( 'main', 'Main navigation menu' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'carousel', 640, 274, true ); 
add_image_size( 'portrait', 150, 300, true );


/* CUSTOM POST TYPE: TEAM */

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'team_member',
        array(
            'labels' => array(
                'name' => __( 'Team Members' ),
                'singular_name' => __( 'Team Member' )
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'author',
                'thumbnail'
            )
        )
    );
    flush_rewrite_rules( false );
}

function team_posts_per_page( $query ) {  
    if ( $query->query_vars['post_type'] == 'team_member' ) $query->query_vars['posts_per_page'] = 12;  
    return $query;  
}  
if ( !is_admin() ) add_filter( 'pre_get_posts', 'team_posts_per_page' );


/* CUSTOMISE ADMIN */

add_action( 'admin_menu', 'customise_menu' );
function customise_menu() {
    remove_menu_page( 'link-manager.php' );
    remove_menu_page( 'edit-comments.php' );
}