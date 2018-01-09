<?php
/**
 * Search Results Template
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>

<div class="row">
    <div id="primary" class="col-lg-8 site-main-content">
        <div class="card mb-3">
            <header class="card-header">
                <h1><?php printf( __('Search Results for: "<em>%s</em>"', 'ishouvikwp'),'<span>' . get_search_query() . '</span>'); ?></h1>
            </header>
        </div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar('blog'); ?>
</div>
    
<?php get_footer(); ?>