<?php get_header();?>

<?php	$query = new WP_Query( array( 'post_type' => array( 'portfolio' ) ) ); ?>
<div class="section">
	<div class="container">
		<h1 class="text-center title" id="portfolio">Recent works</h1>
		<div class="separator"></div>
		<p class="lead text-center">
			Lorem ipsum dolor sit amet laudantium molestias similique.<br>
			Quisquam incidunt ut laboriosam.
		</p>
		<br>
		<div class="row object-non-visible" data-animation-effect="fadeIn">
			<div class="col-md-12">
				<div class="isotope-container row grid-space-20">

					<?php while ( $query->have_posts() ) : $query->the_post();?>
						<?php $diff = mt_rand( 1000, 9999 ); ?>
						<?php $theid = get_the_ID();?>
						<?php	$id = $theid . $diff; ?>
						<div class="col-sm-6 col-md-3 isotope-item web-design">
							<div class="image-box">
								<div class="overlay-container">
									<img src="
									<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}?>
									" alt="">
									<a class="overlay" data-toggle="modal" data-target="#<?php echo $id;?>">
										<i class="fa fa-search-plus"></i>
										<span><?php the_title();?></span>
									</a>
								</div>
								<a class="btn btn-default btn-block" data-toggle="modal" data-target="#<?php echo $id;?>"><?php the_title();?></a>
							</div>
						</div>
							<!-- Modal -->
							<div class="modal fade" id="<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $id;?>-label" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
											<h4 class="modal-title" id="<?php echo $id;?>-label"><?php the_title();?></h4>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-md-12">
													<img src="<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}?>" alt="">
												</div>
												<div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0">
													<p><?php the_content();?></p>
												</div>

											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>

					<?php endwhile; ?>

				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
