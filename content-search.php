<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootblog
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	<?php if ( 'post' == get_post_type() ) : ?>
	<p class="blog-post-meta"><?php bootblog_posted_on(); ?></p>
	<?php endif; ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<div class="entry-footer">
		<?php bootblog_entry_footer(); ?>
	</div><!-- /.entry-footer -->
</div><!-- /.blog-post -->
