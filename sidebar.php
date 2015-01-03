<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package bootblog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="widget-area col-sm-3 col-sm-offset-1 blog-sidebar" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- /.blog-sidebar -->
