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
		<footer id="footer">
			<div class="wrapper clearfix">
				<div class="span3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-footer.png" alt="">
					<br><br>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cnbc-logo.png" alt="">
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
				var frames = document.getElementsByTagName("iframe");
			    for (var i = 0; i < frames.length; i++) {
			        frames[i].src += "?wmode=transparent";
			    }
			});
		</script>
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