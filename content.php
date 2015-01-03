<?php
/**
 * @package bootblog
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
    <?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    <p class="blog-post-meta"><?php bootblog_posted_on(); ?></p>
    <?php endif; ?>

    <?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bootblog' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
	?>

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