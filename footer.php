<?php
/**
 * Default Footer
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
?>
        </main> <!-- / #is-site-body .container .clearfix -->
        <footer class="site-footer py-3 bg-light border border-white">
            <div class="clearfix">
                <div class="container">
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("footer-col-1");
                    } ?>
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("footer-col-2");
                    } ?>
                    <?php
                    if (function_exists('dynamic_sidebar')) {
                        dynamic_sidebar("footer-col-3");
                    } ?>
                </div>

                <center>
                    <?php get_template_part( 'content', 'contact_options' ); ?>
                    <p>&copy; <?php the_time('Y') ?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved </p>
                </center>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>