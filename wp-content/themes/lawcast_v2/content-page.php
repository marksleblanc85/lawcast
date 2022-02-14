<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content <?php if(is_page()):?> span12 <?php endif; ?> clearfix">
		<?php
			echo '<h1>';
			the_title();
			echo '</h1>';
			the_content();
		?>
	</div>
</article>