<!-- Footer -->
	<footer>
			<div class="container">
					<div class="row">
							<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
									<ul class="list-inline text-center">
											<li>
													<a href="#">
															<span class="fa-stack fa-lg">
																	<i class="fa fa-circle fa-stack-2x"></i>
																	<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
																	<?php wp_nav_menu( array( 'theme_location' => 'footer-left' ) ); ?>
															</span>
													</a>
											</li>
											<li>
													<a href="#">
															<span class="fa-stack fa-lg">
																	<i class="fa fa-circle fa-stack-2x"></i>
																	<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
																	<?php wp_nav_menu( array( 'theme_location' => 'footer-center' ) ); ?>
															</span>
													</a>
											</li>
											<li>
													<a href="#">
															<span class="fa-stack fa-lg">
																	<i class="fa fa-circle fa-stack-2x"></i>
																	<i class="fa fa-github fa-stack-1x fa-inverse"></i>
																	<?php wp_nav_menu( array( 'theme_location' => 'footer-right' ) ); ?>
															</span>
													</a>
											</li>
									</ul>
									<p class="copyright text-muted"><?php wp_footer(); ?></p>
									<p class="copyright text-muted">
										<?php echo get_theme_mod( 'copyright_textbox', 'No copyright information has been saved yet.' ); ?>
									</p>
							</div>
					</div>
			</div>
	</footer>


	<!-- Jquery and Bootstap core js files -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>

	<!-- Modernizr javascript -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/modernizr.js"></script>

	<!-- Isotope javascript -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/isotope/isotope.pkgd.min.js"></script>


	<!-- Appear javascript -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/plugins/jquery.appear.js"></script>

	<!-- Initialization of Plugins -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/template.js"></script>

	<!-- Custom Scripts -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>


</body>

</html>
