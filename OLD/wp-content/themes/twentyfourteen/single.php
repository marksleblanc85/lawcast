<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );

				endwhile;
			?>
		</div>
	</div>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
