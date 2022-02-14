<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area span12">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
			get_the_title();
			get_template_part( 'content', get_post_format() );
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'lawcast' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'lawcast' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'lawcast' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'lawcast' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		endwhile;
		?>

		</main>
	</div>
<?php get_footer(); ?>
