<form action="<?php bloginfo('url'); ?>" method="get" class="right tr">
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="search" placeholder="Search...">
	<input type="submit" id="searchsubmit" value="Submit">
</form>