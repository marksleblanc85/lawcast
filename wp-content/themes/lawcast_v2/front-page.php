<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<div id="primary" class="content-area clearfix">
		<div class="clearfix">
			<div class="span8 featured">
				<h2>Featured Lawcast</h2>
				<video id="introduction-video" class="video-js vjs-default-skin vjs-playing p20" width="634" height="357"  controls poster="http://www.securitieslawcast.com/videos/introduction-video.jpg" data-setup=''>
					<source src="http://www.securitieslawcast.com/videos/introduction-video.mp4" type='video/mp4' />
					<source src="http://www.securitieslawcast.com/videos/introduction-video.webm" type='video/webm' />
					<source src="http://www.securitieslawcast.com/videos/introduction-video.ogv" type='video/ogg' />
					<img src="http://www.securitieslawcast.com/videos/introduction-video.jpg" alt="">
					<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
			</div> 
			<div class="intro">
				<?
					query_posts('cat=1&page_id=2&showposts=1');
					while ( have_posts() ) : the_post();
						the_content();
					endwhile;
				?>
			</div>
		</div>
		
	</div>
	<div class="clearfix">
		<div class="span8">
			<h3 class="pt30 p20 thin left"><span>Latest LawCasts</span> <div class="right" id="pager"></div></h3>
			<br>
			<div id="video-list" class="content-area">
				<div>
					<?php query_posts("posts_per_page=18"); ?>
					<?php $count = 0; ?>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php $count++; ?>
					<article>
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
					<?php
						if ($count%6 == 0 and $count != 18) {
					        echo '</div><div>';
					    }
						
						endwhile; 
					?>
					<?php endif; ?>
				</div>
			</div>
			<a href="<?php bloginfo('url'); ?>/securities-lawcasts" class="more pt30 text-right">More Lawcasts</a>
		</div>
		<div class="span4 right linkedin">
			<h3 class="orangebanner p20 pt30">Connect with us on LinkedIn</h3>
			<a class="embedly-card" href="https://www.linkedin.com/in/goingpublicattorney">Laura Anthony, Esq. | LinkedIn</a>
			<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
		</div>
	</div>
<?php get_footer(); ?>