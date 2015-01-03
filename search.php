<?php
/**
 * The template for displaying search results pages.
 *
 * @package bootblog
 */

get_header(); ?>

	<div class="row">

        <div class="col-sm-8 blog-main">

		<?php if ( have_posts() ) : ?>

			<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'bootblog' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php bootblog_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- /.blog-main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
