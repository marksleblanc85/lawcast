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
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css">
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/video-js.css">
		<link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<div class="wrapper clearfix">
				<div class="span6">
					<div class="span5">
						<a href="<?php bloginfo('url'); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-top.png" alt="Securities LawCast with Laura Anthony"></a>
					</div>
				</div>
				<div class="span6">
					<div class="clearfix">
						<div class="socials right">
							<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" target="_blank">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube.png" alt="">
							</a>
							<a href="https://plus.google.com/u/0/100355612832916150780/" target="_blank">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-plus.png" alt="">
							</a>
							<a href="http://www.facebook.com/LegalComplianceLlc" target="_blank">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt="">
							</a>
							<a href="https://twitter.com/SECLawfirm" target="_blank">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt="">
							</a>
							<a href="<?php bloginfo('rss_url'); ?>">
								<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rss.png" alt="">
							</a>
						</div>
					</div>
					<?php get_search_form(); ?>
				</div>
			</div>
		</header>
		<nav id="nav">
			<div class="wrapper clearfix">
				<?php wp_nav_menu( array(
					'menu' => 'Project Nav',
					'menu_class'=>'menu span9',
					'walker' => new My_Walker_Nav_Menu()
				)); ?>
				<?php wp_nav_menu( array(
					'menu' => 'Project Nav',
					'menu_id' => 'menu-mobile',
					'menu_class'=>'mobilenav'
				)); ?>
			</div>
		</nav>
		<div class="wrapper theater clearfix">
			<div class="clearfix">
				<div class="span9">
					<?php
						while ( have_posts() ) : the_post();
						echo '<h1>';
						echo get_the_title();
						echo '</h1>';
						echo '<div class="meta">';
						echo the_time('F jS, Y');
						echo ' by <a href="/attorney-laura-anthony/">Laura Anthony, Esq.</a></div>';
					?>
				</div>
				<div class="tr span2 right">
					<?php
						$mykey_values = get_post_custom_values( 'youtube' );
						if($mykey_values){
							foreach ( $mykey_values as $key => $value ) {
								echo '<a href="';
								echo $value;
								echo '" target="_blank" class="more yt">View on YouTube</a>'; 
							}
						}
					?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="clearfix">
				<video class="video-js vjs-default-skin"  controls="true" width="640" height="360" poster="/videos/<?php echo $slug ?>.jpg" data-setup="{}">
					<source src="/videos/<?php echo $slug ?>.mp4" type='video/mp4' />
					<source src="/videos/<?php echo $slug ?>.webm" type='video/webm' />
					<source src="/videos/<?php echo $slug ?>.ogv" type='video/ogg' />
					<img src="<?php get_site_url(); ?>/videos/<?php echo $slug ?>.jpg" alt="">
					<p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
				</video>
			</div>
		</div>
		<section id="main" class="clearfix wrapper">
			<div id="primary" class="content-area span12">
				<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content', get_post_format() );
						if(!is_single()):
							echo '<a class="more" href="';
							the_permalink();
							echo '">Read More</a></h2>';
						endif;
					endwhile;
					?>
				</main>
			</div>
		</section>	
		<footer id="footer">
			<div class="wrapper clearfix">
				<div class="span3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-footer.png" alt="">
					<br><br>
					<div class="socials">
						<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/youtube.png" alt="">
						</a>
						<a href="https://plus.google.com/u/0/100355612832916150780/" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-plus.png" alt="">
						</a>
						<a href="http://www.facebook.com/LegalComplianceLlc" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" alt="">
						</a>
						<a href="https://twitter.com/SECLawfirm" target="_blank">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" alt="">
						</a>
						<a href="<?php bloginfo('rss_url'); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/rss.png" alt="">
						</a>
					</div>
				</div>
				<div class="span3">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
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