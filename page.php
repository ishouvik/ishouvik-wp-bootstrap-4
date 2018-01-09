<?php
/**
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

<div class="card border border-0">
    <header class="card-header bg-white">
        <h1><?php the_title();?></h1>
    </header>

    <div class="card-body">
        <?php the_content(); ?>
    </div>

    <footer class="card-footer bg-white">
        <?php comments_template(); ?>
    </footer>
</div>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); // get footer ?>