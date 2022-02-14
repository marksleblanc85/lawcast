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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="video-list" class="content-area clearfix">
				<div class="clearfix">
					<div class="span6">
						<h1>Securities LawCasts</h1>
					</div>
				</div>
				<?php query_posts("posts_per_page=50"); ?>
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				<article class="span4">
					<a href="<?php echo the_permalink() ?>">
						<?php 
							if ( has_post_thumbnail( $thumbnail->ID ) ) {
								echo get_the_post_thumbnail( $thumbnail->ID, 'full' ); 
							}
						?>
						<div class="title">
						<?php 
						the_title(); 
						echo '<div class="meta">'.get_the_time('F jS, Y').'</div>';
						?>
						</div>
					</a>
				</article>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="nav-previous tl"><?php next_posts_link( '<< Older posts' ); ?></div>
			<div class="nav-next tr"><?php previous_posts_link( 'Newer posts >>' ); ?></div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
