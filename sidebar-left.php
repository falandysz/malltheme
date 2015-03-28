<div id="sidebar-left" class="col-lg-2 hidden-md hidden-sm hidden-xs">
	<div><?php dynamic_sidebar( 'sidebar-left' ); ?></div>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading" style="background: #A5CD38;">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Branże
				</a>
				</h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse">
				<div class="panel-body">
					<?php wp_nav_menu( array( 'theme_location' => 'branze-menu' ) ); ?>
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading" style="background: #A5CD38;">
				<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Sklepy
				</a>
				</h4>
			</div>
			<div id="collapseTwo" class="panel-collapse collapse in">
				<div class="panel-body">
					<?php wp_nav_menu( array( 'theme_location' => 'sklepy-menu' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>