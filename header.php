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
    <?php if (get_theme_mod('is_page_header') == 'yes'): ?>
        <?php get_template_part( 'content', 'page_header' ); ?>
    <?php endif; ?>

    <nav id="is-site-navbar-primary" class="navbar navbar-expand-md <?php is_site_primary_nav_class(); ?>">
        <?php is_navbar_brand(); ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarDropdown">
            <?php ishouvik_nav_menu('primary'); ?>

            <?php get_template_part( 'searchform', 'navbar' ); ?>
        </div>
    </nav>

    <?php if (is_front_page() && get_theme_mod('is_site_intro') == 'yes'): ?>
        <div class="site-intro">
            <?php get_template_part( 'content', 'site_intro' ); // Site Intro block only for the front page ?>
        </div>
    <?php endif; ?>

    <main class="container-fluid clearfix my-5">
