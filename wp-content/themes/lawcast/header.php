<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage LawCast
 */
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
<meta name="google-site-verification" content="qZL5_Xh3rQrgTPjoB792TgBwL68pZc9Q_QcBUds8LgM" />
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
				<!--<ul class="span8">
					<li><a href="<?php bloginfo('url'); ?>/securities-lawcasts">Securities LawCasts</a></li>
					<li><a href="http://www.legalandcompliance.com/going-public-law-firm/securities-attorneys/laura-anthony-esq-3/" target="blank">Attorney Laura Anthony</a></li>
					<li><a href="http://www.securities-law-blog.com" target="_blank">Securities Law Blogs</a></li>
					<li><a href="http://www.legalandcompliance.com/contact" target="_blank">Contact</a></li>
				</ul>-->
			</div>
		</nav>
		<section id="main">
			<div class="wrapper clearfix">