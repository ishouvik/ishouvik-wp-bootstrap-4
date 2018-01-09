<?php
/**
 * Template Name: Two Column
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>

<div class="row">
    <div id="primary" class="col-md-8">
        <div class="card border border-0">
            <?php while (have_posts()) : the_post(); ?>
                <header class="card-header bg-white">
                    <h1><?php the_title();?></h1>
                </header>

                <div class="card-body">
                    <?php the_content(); ?>
                </div>

                <footer class="card-footer bg-white">
                    <?php comments_template(); ?>
                </footer>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); // get footer ?>