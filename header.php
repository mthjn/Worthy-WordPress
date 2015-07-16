<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Worthy | Free Powerful Theme by HtmlCoder</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet">

		<!-- Custom css -->
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/custom.css" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

		<body class="no-trans">
			<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

			<!-- header start -->
			<!-- ================ -->
			<header class="header fixed clearfix navbar navbar-fixed-top">
				<div class="container">
					<div class="row">
						<div class="col-md-4">

							<!-- header-left start -->
							<!-- ================ -->
							<div class="header-left clearfix">

								<!-- logo -->
								<div class="logo smooth-scroll">
									<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
								</div>

								<!-- name-and-slogan -->
								<div class="site-name-and-slogan smooth-scroll">
									<div class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
									<div class="site-slogan"><a target="_blank" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a></div>
								</div>

							</div>
							<!-- header-left end -->

						</div>
						<div class="col-md-8">

							<!-- header-right start -->
							<!-- ================ -->
							<div class="header-right clearfix">

								<!-- main-navigation start -->
								<!-- ================ -->
								<div class="main-navigation animated">

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
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
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->

							</div>
							<!-- header-right end -->

						</div>
					</div>
				</div>
			</header>
			<!-- header end -->
