<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content clearfix">
		<?php
			if(is_single()): 
				echo '<h1>';
				the_title();
				echo '</h1>'; 
			endif;
			the_content();
		 ?>
	</div>
</article>
