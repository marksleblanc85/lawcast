<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div id="primary" class="content-area clearfix pt30">
		<div class="clearfix">
			<div class="span6">
				<video id="introduction-video" class="video-js vjs-default-skin vjs-playing p20" width="460" height="259"  controls poster="<?php get_site_url(); ?>/videos/introduction-video.jpg" data-setup=''>
					<source src="/videos/introduction-video.mp4" type='video/mp4' />
					<source src="/videos/introduction-video.webm" type='video/webm' />
					<source src="/videos/introduction-video.ogv" type='video/ogg' />
					<img src="<?php get_site_url(); ?>/videos/introduction-video.jpg" alt="">
					<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
				<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" class="more yt pt30" target="_blank">View Ms. Anthony's YouTube Channel</a>
			</div> 
			<?
			query_posts('cat=1&page_id=2&showposts=1');
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>
		
	</div>
	<div class="clearfix">
		<div class="span12">
			<h3 class="pt30 line"><span>More Securities LawCasts</span></h3>
		</div>
	</div>
	
	<div id="video-list" class="content-area">
		<?php query_posts("posts_per_page=6"); ?>
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		<article class="span4">
			<a href="<?php echo the_permalink() ?>">
				<!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/btn-play-sm.png" class="play">-->
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
	<p class="tr span12">
			<a href="<?php bloginfo('url'); ?>/securities-lawcasts" class="more pt30">More Lawcasts</a>
	</p>
<?php get_footer(); ?>