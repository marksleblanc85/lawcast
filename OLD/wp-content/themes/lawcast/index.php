<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area span12">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text p30"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				echo '<h2 class="blue"><a href="';
				the_permalink();
				echo '">';
				the_title();
				echo '</a></h2>';
				get_template_part( 'content', get_post_format() );
			// End the loop.
			endwhile;

			// Previous/next page navigation.
		

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
			<div class="nav-previous tl"><?php next_posts_link( '<< Older posts' ); ?></div>
			<div class="nav-next tr"><?php previous_posts_link( 'Newer posts >>' ); ?></div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
