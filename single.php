<?php
/**
 * The template for displaying all single posts.
 *
 * @package bootblog
 */

get_header(); ?>

	<div class="row">

        <div class="col-sm-8 blog-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php bootblog_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- /.blog-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
