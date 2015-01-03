<?php
/**
 * @package bootblog
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php the_title( '<h2 class="blog-post-title">', '</h2>' ); ?>

	<p class="blog-post-meta"><?php bootblog_posted_on(); ?></p>

	<?php the_content(); ?>
	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'bootblog' ),
			'after'  => '</div>',
		) );
	?>

	<div class="entry-footer">
		<?php bootblog_entry_footer(); ?>
	</div><!-- /.entry-footer -->
</div><!-- /.blog-post -->
