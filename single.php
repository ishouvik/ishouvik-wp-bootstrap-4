<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
get_header(); ?>

<div class="row">
    <div id="primary" class="site-main-content col-lg-8">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="site-main-content clearfix card">
            <?php while (have_posts()) : the_post(); ?>
                <header class="card-header">
                    <h1><?php the_title();?></h1>
                    <p class="meta">
                        <?php echo ishouvikwp_posted_on();?>
                    </p>
                    <p class="meta text-muted">
                        <small>
                            <?php echo ishouvik_categories_in(); ?> | <?php the_tags('<i class="fa fa-tags"></i> Tags: ', ', '); ?>
                        </small>
                    </p>
                </header>
                <?php if ( has_post_thumbnail() ): ?>
                        <p>
                            <?php echo the_post_thumbnail('large', array('class' => 'card-img-top img-fluid')); ?>
                        </p>
                <?php endif; ?>
                
                <div class="card-body">
                    <?php the_content(); ?>
                </div>
                
            <?php endwhile; ?>

            <footer class="card-footer">
                <?php comments_template(); ?>
                <?php ishouvikwp_content_nav('nav-below'); ?>
            </footer>
        </article>
    </div>

    <?php get_sidebar('blog'); ?>
</div>

<?php get_footer(); ?>