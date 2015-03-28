<!DOCTYPE html>
<html lang="pl_PL">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Centrum Skorosze</title>
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<?php wp_enqueue_script("jquery"); ?>
		<?php wp_head(); ?>
		<!-- Bootstrap -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif] -->
	</head>
	<body class="<?php echo implode( ' ' , get_body_class() ); ?>">
		<div class="container">
			<div id="header" class="row" style="margin-bottom: 10px; margin-top: 10px;">
				<div  class="col-xxs-12 col-xs-6 col-sm-4 col-md-6 col-lg-6 xxs-text-center">
					<a href="http://iic.pds.sos.pl/"><img class="" src="http://iic.pds.sos.pl/wp-content/uploads/2015/02/logo-skorosze-gora.png"></a>
				</div>
				<div class="col-xxs-12 col-xs-2 col-sm-4 col-md-4 col-lg-4">
					<div class="hours text-right xxs-text-center" style="font-size: 18px; padding-top: 18px;">
						<a href="https://www.facebook.com/pages/Centrum-Skorosze/149304201785758">
							<button class="btn btn-facebook" style="max-width: 100%;"><!--<i class="fa fa-facebook-f"></i> |--> facebook</button>
						</a>
					</div>
				</div>
				<div class="col-xxs-12 col-xs-4 col-sm-4 col-md-2 col-lg-2">
					<div class="hours text-right xxs-text-center" style="font-size: 18px; padding-top: 16px;">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
							<path fill="#444" d="M8,15.007c3.854,0,7-3.146,7-7.013c0-3.854-3.148-7.001-7-7.001c-3.854,0-7,3.147-7,7.001C1,11.86,4.146,15.007,8,15.007z M8.008,2.008c3.321,0,6.001,2.7,6.001,5.991c0,3.309-2.68,6.009-6.001,6.009c-3.317,0-6-2.7-6-6.009C2.008,4.708,4.691,2.008,8.008,2.008z M8,8.996L7.007,8.982l0.018-4.938L8,5.016V8.996z M10.047,9.023l-3.04-0.042L7.091,8H11L10.047,9.023z">
							</path>
						</svg>
						10:00 - 21:00
						<span style="font-size: 12px; display: block; margin-top: -0px;">(Ndz. 10:00 - 20:00)</span>
					</div>
				</div>
			</div>
			<div id="menu" class="row margin-bottom-20">
				<nav class="navbar navbar-default" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="#">SITE TITLE</a> -->
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<div class="col-sm-8 col-md-9 col-lg-10">
							<?php
							wp_nav_menu( array(
							'theme_location' => 'header-menu',
							'depth' => 2,
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'wp_page_menu',
							//Process nav menu using our custom nav walker
							'walker' => new wp_bootstrap_navwalker())
							);
							?>
						</div>
						<!-- <div id="lang" class="navbar-left"> <?php include ('sidebar-menu.php');?></div> -->
						<!-- <select class="form-control bfh-languages navbar navbar-right col-lg-1" data-language="pl_PL" data-available="en_EN, pl_PL"> </select>-->
						<div id="szukaj" class="col-lg-2 col-md-3 col-sm-4 navbar-form navbar-right" role="search"><?php get_search_form(); ?></div>
						
						</div><!-- /.navbar-collapse -->
					</nav>
					<!-- <div class="col-lg-9"> -->
				</div>