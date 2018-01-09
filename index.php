<?php
/**
 * Description: Default Index template to display loop of blog posts
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>

<div class="row">
    <div id="primary" class="site-main-content col-md-8">
        <header class="page-title sr-only">
            <h1>Articles</h1>
        </header>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; endif; ?>
        <?php ishouvik_pagination(); // pagination with bootstrap 4 classes ?>
    </div>

    <?php get_sidebar('blog'); ?>
</div>

<?php get_footer(); ?>