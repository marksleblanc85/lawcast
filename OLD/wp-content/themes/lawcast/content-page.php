<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content span3 <?php if(is_page()):?> span12 <?php endif; ?> clearfix">
		<?php
			the_content();
			echo '<div class="title"><a href="';
			echo get_post_permalink();
			echo '">';
			the_title();
			echo '</a></div>';
		?>
	</div>
</article>