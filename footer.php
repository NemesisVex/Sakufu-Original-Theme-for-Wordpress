<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Sakufu
 * @since Sakufu 1.0
 */
?>

				<footer id="colophon" class="col-md-12" role="contentinfo">

					<?php get_sidebar( 'footer' ); ?>

					<div class="site-info">
						<?php do_action( 'sakufu_credits' ); ?>
						<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sakufu' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sakufu' ), 'WordPress' ); ?></a>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!-- #row -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				var pageTracker = _gat._getTracker("UA-7828220-5");
				pageTracker._trackPageview();
			} catch(err) {}
		</script>
</body>
</html>