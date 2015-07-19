<?php get_header(); ?>
<script>
$(document).ready(function(){
	$(".banner-image").backstretch('<?php echo get_theme_mod( 'worthy-header' );?>');
});
</script>
<!--this needs a metabox -->
			  <div id="banner" class="banner">
			    <div class="banner-image"></div>
			    <div class="banner-caption">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
									<div class="text-center">
										<?php echo get_theme_mod( 'header-title' );?>
									</div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
<div id="content" class="site-content">
<!-- Main Content -->
<div class="section">
    <div class="container">
        <div class="row">


				<?php if (is_home()) : ?>
				  <?php if (have_posts()) : ?>
				    <?php query_posts("showposts=5"); // show one latest post only ?>
							<?php	while ( have_posts() ) : the_post(); ?>
								<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="post-preview">

									<div class="flush-top">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
													<?php the_title(); ?>
                        </h2>
										</a>
										<div class="post-meta"><?php the_date(); ?></div>
									</div>

									<div class="flush-middle">
                    <p class="lead"><?php the_excerpt(); ?></p>
									</div>

									<div class="text-center flush-bottom">
											<a href="<?php the_permalink(); ?>" class="btn btn-sm btn-default" data-dismiss="modal">
												<i class="fa fa-paperclip"></i><i class="fa fa-paperclip"></i><i class="fa fa-paperclip"></i>
											</a>
									</div>
									
                </div>
							</div>
							<?php	endwhile;	?>
						<?php endif; ?>
					<?php endif; ?>
                <ul class="pager">
                    <li class="next">
                       <?php
													the_posts_pagination( array(
														'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
														'next_text'          => __( 'Next page', 'twentyfifteen' ),
														'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
													) );
												?>
                    </li>
                </ul>
            </div>
        </div>
</div>

    <hr>

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
