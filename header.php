<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo( 'name' ); ?></title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animations.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/colors.css" rel="stylesheet">
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
		<!-- JS -->
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/jquery.backstretch.min.js"></script>

		<?php	function custom_css() { ?>
			<style type="text/css">
			.blue,.text-colored,.btn-default,h1 span, h2 span, h3 span, h4 span,.main-navigation .navbar-default .navbar-nav > li > a:hover, .main-navigation .navbar-default .navbar-nav > li.active > a:hover	{ color: <?php echo get_theme_mod( 'link-color' ); ?> !important;}
			.default-bg,.overlay,.btn-default:hover { background-color: <?php echo get_theme_mod( 'link-color' ); ?> !important;}
			.translucent-bg.blue:after{background-color: <?php echo get_theme_mod( 'brandbg-color' ); ?> !important;}
			</style>
		<?php }	?>

		<?php add_action('wp_head', 'custom_css'); ?>

		<?php wp_head(); ?>

	</head>
		<body class="no-trans">
			<div class="scrollToTop"><i class="icon-up-open-big"></i></div>
			<header class="header fixed clearfix navbar navbar-fixed-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="header-left clearfix">
								<div class="logo smooth-scroll">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Worthy"></a>
								</div>
								<div class="site-name-and-slogan smooth-scroll">
									<div class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
									<div class="site-slogan"><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a></div>
								</div>
							</div>
					</div>
						<div class="col-md-8">
							<div class="header-right clearfix">
								<div class="main-navigation animated">
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
											</div>

										<?php

												$defaults = array(
													'theme_location'  => '',
													'menu'            => 'Main',
													'container'       => 'div',
													'container_class' => 'collapse navbar-collapse scrollspy smooth-scroll',
													'container_id'    => 'navbar-collapse-1',
													'menu_class'      => 'nav navbar-nav navbar-right',
													'menu_id'         => '',
													'echo'            => true,
													'fallback_cb'     => 'wp_page_menu',
													'before'          => '',
													'after'           => '',
													'link_before'     => '',
													'link_after'      => '',
													'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
													'depth'           => 0,
													'walker'          => new Top_Walker_Nav_Menu()
												);

												wp_nav_menu( $defaults );

											?>


										</div>
									</nav>
								</div>
								<!-- main-navigation end -->
							</div>
							<!-- header-right end -->
						</div>
					</div>
				</div>
			</header>
<!-- header end -->
