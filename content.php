<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix card bg-light mb-4'); ?>>
    <header class="card-header">
        <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
            <h3><?php the_title();?></h3>
        </a>

        <p class="meta text-muted">
            <?php echo ishouvikwp_posted_on();?> | <?php echo ishouvik_categories_in(); ?>
        </p>
    </header>

    <?php if ( has_post_thumbnail() ): ?>
        <p>
            <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                <?php echo the_post_thumbnail('original', array('class' => 'card-img-top img-fluid')); ?>
            </a>
        </p>
    <?php endif; ?>

    <div class="card-body">
        <?php the_excerpt(); ?>
    </div>
</article>
