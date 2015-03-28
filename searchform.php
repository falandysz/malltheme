<form action="/" method="get" style="margin-top: 4px;">
	<fieldset>
		<!-- <a href="http://iic.pds.sos.pl/pl/">PL</a> <a href="http://iic.pds.sos.pl/en/">EN</a> -->
		<div style="float: left; margin: 3px 2px 0 0;"><?php include ('sidebar-menu.php'); ?>  </div>
		<input type="text" name="s" id="search" size="11" value="<?php if(the_search_query()) {the_search_query();} ?>" />
		<input type="image" alt="Szukaj" src="<?php bloginfo( 'template_url' ); ?>/img/search.svg" />
	</fieldset>
</form>