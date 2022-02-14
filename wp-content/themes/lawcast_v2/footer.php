<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>		
			</div>
		</section>
		<section id="logos" class="tc">
			<div class="wrapper">
				<h5 class="caps pt30 p10 lsn1 thin" style="color:#bcbdbe;font-size:12px">As Seen On</h5>
				<div class="center clearfix tc p30">
					<?php dynamic_sidebar( 'logo-orgy' ); ?>
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
						<a href="https://www.linkedin.com/in/goingpublicattorney" target="_blank">
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
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/video.js"></script>
		<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.cycle.all.js"></script>
		<?php if(is_home()){ ?>
		<script type="text/javascript">
			$(function(){
				$('.home #video-list').cycle({
					pager: '#pager',
					timeout:0,
					fx: 'scrollHorz',
					speed: 300,
					pagerAnchorBuilder: function(index, el) {
				        return '<a href="#"> </a>';
				    },
				    activePagerClass: 'active'
				});
			});
		</script>
		<?php } ?>
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