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
				<div class="span4 socials right">
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
		<section id="main">
			<div class="wrapper clearfix">