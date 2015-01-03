<?php
/**
 * The template for displaying the footer.
 *
 *
 *
 * @package bootblog
 */
?>
        </div><!-- /.row -->
    </div><!-- /.container -->

    <footer class="blog-footer" role="contentinfo">
    	<p>
    		<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bootblog' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bootblog' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'bootblog' ), 'Bootblog', '<a href="http://ismaeltoe.com/" rel="designer">ismaeltoe.com</a>' ); ?>
    	</p>
    	<p>
        	<a href="#"><?php _e( 'Back to top', 'bootblog' ); ?></a>
      	</p>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
	
