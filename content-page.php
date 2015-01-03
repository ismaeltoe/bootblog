<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package bootblog
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php the_title( '<h2 class="blog-post-title">', '</h2>' ); ?>
    
    <?php the_content(); ?>

	<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'bootblog' ),
			'after'  => '</div>',
		) );
	?>

	<div class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'bootblog' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- /.entry-footer -->
</div><!-- /.blog-post -->
