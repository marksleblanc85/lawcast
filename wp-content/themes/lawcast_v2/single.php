<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$slug = $post->post_name;
?>
<!doctype html>
<html>
	<head>
		<title>Securities LawCast</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="google-site-verification" content="2m7ZzluA_QaZ6MYe6zlKxT1Qp6Z3cBTu8aDIcTtyv1U" />
		<meta name="google-site-verification" content="qZL5_Xh3rQrgTPjoB792TgBwL68pZc9Q_QcBUds8LgM" />
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/video-js.css">
		<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
		<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico">
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
		<?php wp_head(); ?>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/video.js"></script>
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<div class="wrapper clearfix">
				<div class="span8">
					<a href="<?php bloginfo('url'); ?>" class="logo left"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lawcast-logo.png" alt="Securities LawCast with Laura Anthony"></a>
					<div class="subhead left">SEE What You Need<br> to Know - NOW</div>
				</div>
				<div class="span4">
					<?php get_search_form(); ?>
				</div>
			</div>
		</header>
		<nav id="nav">
			<div class="wrapper clearfix">
				<?php wp_nav_menu( array(
					'menu' => 'Project Nav',
					'menu_class'=>'menu span8',
					'walker' => new My_Walker_Nav_Menu()
				)); ?>
				<?php wp_nav_menu( array(
					'menu' => 'Project Nav',
					'menu_id' => 'menu-mobile',
					'menu_class'=>'mobilenav'
				)); ?>
				<div class="socials right span4">
					<a href="<?php bloginfo('rss_url'); ?>">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rss.png" alt="">
					</a>
					<a href="https://www.pinterest.com/SECLawFirms/" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pinterest.png" alt="">
					</a>
					<a href="https://www.linkedin.com/in/goingpublicattorney" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/linkedin.png" alt="">
					</a>
					<a href="https://twitter.com/SECLawfirm" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt="">
					</a>
					<a href="http://www.facebook.com/LegalComplianceLlc" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt="">
					</a>
					<a href="https://plus.google.com/u/0/100355612832916150780/" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-plus.png" alt="">
					</a>
					<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" target="_blank">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube.png" alt="">
					</a>
				</div>
			</div>
		</nav>
		<section id="main" class="clearfix wrapper">
			<div id="primary" class="content-area span8">
				<?php
					while ( have_posts() ) : the_post();
					echo '<h1>';
					echo get_the_title();
					echo '</h1>';
				?>
				<video class="video-js vjs-default-skin"  controls="true" width="640" height="360" poster="http://www.securitieslawcast.com/videos/<?php echo $slug ?>.jpg" data-setup="{}">
					<source src="http://www.securitieslawcast.com/videos/<?php echo $slug ?>.mp4" type='video/mp4' />
					<source src="http://www.securitieslawcast.com/videos/<?php echo $slug ?>.webm" type='video/webm' />
					<source src="http://www.securitieslawcast.com/videos/<?php echo $slug ?>.ogv" type='video/ogg' />
					<img src="http://www.securitieslawcast.com/videos/<?php echo $slug ?>.jpg" alt="">
					<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
				<br>
				<?php
					echo '<div class="meta">';
					echo the_time('F jS, Y');
					echo ' by <a href="/attorney-laura-anthony/">Laura Anthony, Esq.</a></div><br>';
					get_template_part( 'content', get_post_format() );
					if(!is_single()):
						echo '<a class="more" href="';
						the_permalink();
						echo '">Read More</a></h2>';
					endif;
				endwhile;
				?>
			</div>
			<div class="span4" id="sidebar">
				<h3 class="orangebanner p30 pt30">Social Subscribe</h3>
				<ul class="follows clearfix">
					<li class="fb">
						<a href="http://www.facebook.com/LegalComplianceLlc" class="square" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/follow-fb.png" alt="Facebook">
						</a>
						<strong class="tc"><?php echo get_scp_facebook(); ?></strong><br>
						Likes
					</li>
					<li class="tw">
						<a href="https://twitter.com/SECLawfirm" class="square" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/follow-tw.png" alt="Twitter">
						</a>
						<strong class="tc"><?php echo get_scp_twitter(); ?></strong><br>
						Followers
					</li>
					<li class="gp">
						<a href="https://plus.google.com/u/0/100355612832916150780/" class="square" target="_blank">	
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/follow-gp.png" alt="Google+">
						</a>
						<strong class="tc"><?php echo get_scp_googleplus(); ?></strong><br>
						Followers
					</li>
					<li class="yt">
						<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" class="square" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/follow-yt.png" alt="YouTube">
						</a>
						<strong class="tc"><?php echo get_scp_youtube(); ?></strong><br>
						Subscribers
					</li>
				</ul>
				<br>
				<h3 class="orangebanner p30 pt30">Latest Posts</h3>
				<div id="sidebar-recent" class="content-area">
					<?php query_posts("posts_per_page=3"); ?>
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
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
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>	
		<footer id="footer">
			<div class="wrapper clearfix">
				<div class="span3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/lawcast-logo-footer.png" alt="">
					<br><br>
					<div class="socials">
						<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube-g.png" alt="">
						</a>
						<a href="https://plus.google.com/u/0/100355612832916150780/" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-plus-g.png" alt="">
						</a>
						<a href="http://www.facebook.com/LegalComplianceLlc" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook-g.png" alt="">
						</a>
						<a href="https://twitter.com/SECLawfirm" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter-g.png" alt="">
						</a>
						<a href="o	https://www.linkedin.com/in/goingpublicattorney" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/linkedin-g.png" alt="">
						</a>
						<a href="https://www.pinterest.com/SECLawFirms/" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pinterest-g.png" alt="">
						</a>
						<a href="<?php bloginfo('rss_url'); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rss-g.png" alt="">
						</a>
					</div>
					<br>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-tv.png" class="left">
				</div>
				<div class="span3">
					<?php dynamic_sidebar('footer-sidebar-1'); ?>
				</div>
				<div class="span3">
					<?php dynamic_sidebar('footer-sidebar-2'); ?>
				</div>
				<div class="span3">
					<?php dynamic_sidebar('footer-sidebar-3'); ?>
				</div>
			</div>
		</footer>
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
		<script>
			$(function(){
			    $('#header #search').focus(function(){
			    	$(this).animate({
						width: 210
					}, 300);
			    }).stop();
			    $('#header #search').blur(function(){
			    	$(this).animate({
						width: 120
					}, 300);
			    }).stop();
			});
		</script>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/video.js"></script>
		
		<script>// <![CDATA[
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-16862847-11', 'auto');
		  ga('send', 'pageview');
		// ]]></script>
		<?php wp_footer(); ?>
	</body>
</html>