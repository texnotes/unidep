<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<label class="screen-reader-text" for="s">Поиск: </label>

<ul class="menu">
					<li><input value="<?php echo get_search_query() ?>" name="s" id="s" type="search" placeholder="Знайти..."></li>
					<li><button type="submit" class="button">Пошук</button></li>
				</ul>

</form>
