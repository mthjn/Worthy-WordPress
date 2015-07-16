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
									<p class="copyright text-muted"><!-- <?php get_search_form( ); ?> |  --> <?php wp_footer(); ?> </p>
							</div>
					</div>
			</div>
	</footer>

	<!-- jQuery -->
	<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo get_template_directory_uri(); ?>-child/js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="<?php echo get_template_directory_uri(); ?>-child/js/clean-blog.min.js"></script>

</body>

</html>
