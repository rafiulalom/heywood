<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" name="s" value="<?php echo get_search_query(); ?>" class="form-control" id="s" placeholder="Search...">
	<button type="submit" name="submit" class="btn btn-secondary">Search</button>
</form>
