<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Sakufu
 * @since Sakufu 1.0
 */

sakufu_remap_mt();
get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h2 class="page-title"><?php _e( 'Not Found', 'sakufu' ); ?></h2>
			</header>

			<div class="page-content">
				<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'sakufu' ); ?></p>

				<?php get_search_form(); ?>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
