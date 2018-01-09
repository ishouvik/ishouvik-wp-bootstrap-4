<?php
/**
 * The Right Sidebar displayed on page templates.
 *
 * @package WordPress
 * @subpackage iShouvik WP
 */
?>
<div class="col-lg-4 site-sidebar clearfix">
    <?php if (function_exists('dynamic_sidebar')) {
    		dynamic_sidebar("sidebar"); // common sidebar;
	        dynamic_sidebar("sidebar-pages"); // page specific sidebar;
	    }
    ?>
</div>