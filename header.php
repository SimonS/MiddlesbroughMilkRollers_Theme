<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/js/orbit-1.2.3/orbit-1.2.3.css" />
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></head>
    <![endif]-->
    <?php wp_enqueue_script( 'jquery' ); ?>
    <?php wp_enqueue_script( 
        'orbit', 
        get_template_directory_uri() . '/js/orbit-1.2.3/jquery.orbit-1.2.3.min.js', 
        array( 'jquery' ) 
    ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="main">
        <a href="/" id="logo">Middlesbrough Milk Rollers</a>
        <div class="bnr">
            <?php wp_nav_menu(); ?>
            <script>
( function( $ ){

    $( function() {
        var slide_timeout;

        var timeout = 500;

        $( 'div.menu-main-menu-container li' ).hover( function(){
            var $this = $(this),
                same_el = false,
                $slide_el;

            // clear other submenus
            $( 'div.menu-main-menu-container li' ).each(function(){
                if($(this) != $this && $(this).data( 'child-clone' ) ) {
                    $(this).data( 'child-clone' ).slideUp();
                    if(slide_timeout) {
                        clearTimeout(slide_timeout);
                    }
                }
            });

            if( !$this.data( 'child-clone' ) ) {
                $this.data( 'child-clone', $( 'ul', this).clone().offset($this.offset()).appendTo($('body')));
            }
            $slide_el = $this.data( 'child-clone' );

            if(slide_timeout) {
                clearTimeout(slide_timeout);
            } 

            if($slide_el.not(':visible')){
                $slide_el.slideDown();
            }

            $slide_el.hover(function(){
                clearTimeout(slide_timeout);
            }, function(){
                var $this = $(this); 

                slide_timeout = setTimeout(function() {
                    $this.slideUp();
                    slide_timeout = false;
                }, timeout);
            
            });

        }, function(){
            var $slide_el,
                $this = $(this);

            slide_timeout = setTimeout(function() {
                $slide_el = $this.data( 'child-clone' );
                $slide_el.slideUp();
                slide_timeout = false;
            }, timeout);
        });

    } );

} )( jQuery );
            </script>
        </div>
        <div class="left-column">
            <?php get_sidebar(); ?>
        </div>
        <div class="main-column">
