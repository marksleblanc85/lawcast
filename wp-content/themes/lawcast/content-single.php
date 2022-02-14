<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$slug = $post->post_name;
get_header(); ?>

	<div id="primary" class="content-area span12">
		<main id="main" class="site-main" role="main">
		
		<?php
		while ( have_posts() ) : the_post();
			?>
			<video class="video-js vjs-default-skin" controls preload="auto" width="640" height="360" poster="/videos/<?php echo $slug ?>.jpg" data-setup="">
				<source src="/videos/<?php echo $slug ?>.mp4" type='video/mp4' />
				<source src="/videos/<?php echo $slug ?>.webm" type='video/webm' />
				<source src="/videos/<?php echo $slug ?>.ogv" type='video/ogg' />
				<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
			</video>
			<?php
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
