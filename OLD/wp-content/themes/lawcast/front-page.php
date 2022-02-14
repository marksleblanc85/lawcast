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
		<div class="span7">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/IHWsf6mI4HY" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="span5">
			<?
			query_posts('cat=1&page_id=2&showposts=1');
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>
		<p class="tr span12">
			<a href="https://www.youtube.com/channel/UCl0-35gEv2Zh1t71PnDlttw" class="more">View Ms. Anthony's YouTube Channel</a>
		</p>
	</div>
	<div class="span12">
		<h3 class="pt30 line"><span>More Securities LawCasts</span></h3>
	</div>
	<div id="video-list" class="content-area">
	<?php
		$page_num = $paged;
		if ($pagenum='') $pagenum =1;
		query_posts('cat=1&showposts=8&paged='.$page_num);
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'page' );
		endwhile;
		?>
	</div>
	<p class="tr span12">
			<a href="<?php bloginfo('url'); ?>/securities-lawcasts" class="more">More Lawcasts</a>
	</p>
<?php get_footer(); ?>