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
		<main id="main" class="site-main span12" role="main">

		<?php
		while ( have_posts() ) : the_post();
			echo '<h2><a href="';
			the_permalink();
			echo '">';
			get_the_title();
			echo '</a></h2>';
			get_template_part( 'content', get_post_format() );
			if(!is_single()):
				echo '<a class="more" href="';
				the_permalink();
				echo '">Read More</a></h2>';
			endif;
		endwhile;
		?>
		<p class="tr" style="display:block">
			<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" target="_blank" class="more">View Ms. Anthony's YouTube Channel</a>
		</p>
		
		</main>
	</div>
<?php get_footer(); ?>
