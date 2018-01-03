<?php
/**
 * Default Page Header
 *
 * @package Wordpress
 * @subpackage iShouvik WP
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/ico/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".bs-docs-sidebar" data-offset="10">

    <div class="site-header">
        <div class="container">
            <?php is_logo(); ?>
            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-light">

        <a class="navbar-brand visible-sm d-sm-none d-xs-none" href="<?php echo esc_url( home_url('/') ); ?>">Navigation</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDropdown">
            <?php ishouvik_nav_menu('primary'); // Display primary navigation ?>
            
            <form class="form-inline mx-0 ml-auto" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input class="form-control mr-sm-1" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
            <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'b4st') ?>" class="btn btn-outline-secondary my-2 my-sm-0">
                <i class="fa fa-search"></i>
            </button>
            </form>
            
        </div>
    </nav>

    <div id="is-site-navbar-primary" class="navbar <?php is_site_primary_nav_class(); ?> is-navbar-primary" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ishouvik-navbar-collapse-primary">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand visible-sm visible-xs" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                    Navigation
                </a>
            </div>

            <?php ishouvik_nav_menu('primary'); // Display primary navigation ?>
        </div>
    </div>

    <?php if (is_front_page() && get_theme_mod('is_site_intro') == 'yes'): ?>
        <div class="site-intro">
            <?php get_template_part( 'content', 'site_intro' ); // Site Intro block only for the front page ?>
        </div>
    <?php endif; ?>

    <div id="is-site-body" class="container site-container clearfix">