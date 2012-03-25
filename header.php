<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></head>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="main">
        <a href="/" id="logo">Middlesbrough Milk Rollers</a>
        <div class="bnr">
            <?php wp_nav_menu(); ?>
        </div>
        <div class="left-column">
            <?php get_sidebar(); ?>
        </div>
        <div class="main-column">
