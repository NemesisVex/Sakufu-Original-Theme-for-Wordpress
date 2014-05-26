<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Sakufu
 * @since Sakufu 1.0
 */

get_header(); ?>
					<section id="main-content" class="main-content">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
						
				// Previous/next post navigation.
				sakufu_post_nav();
			?>
					</section>

<?php
get_sidebar( 'sakufu' );
get_footer();