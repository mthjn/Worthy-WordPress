<?php get_header(); ?>
<div class="section translucent-bg bg-image-1 blue">
	<div class="default-bg space blue">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h1 class="text-center">Most recent:</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container object-non-visible" data-animation-effect="fadeIn">
		<h1 id="services"  class="text-center title"></h1>
		<div class="space"></div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<?php if (have_posts()) : ?>
				 <?php query_posts("showposts=5"); // show one latest post only ?>
				  <?php	while ( have_posts() ) : the_post(); ?>
					 <div class="media" style="position: relative;z-index: 9999;">
						<div class="media-body text-left">
					  	<a href="<?php the_permalink(); ?>">
						  	<h4 class="media-heading"><?php the_title(); ?></h4>
							</a>
						  <p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>"><div class="media-right"><i class="fa fa-paperclip"></i></a></div>
					  </div>
					<hr>
				<?php	endwhile;	?>
			<?php endif; ?>
		</div>
		<div class="col-sm-2"></div>
			<div class="space visible-xs"></div>
		</div>
	</div>
</div>
<!-- section end -->
<div class="container">
		<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<!-- Pager -->
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



<?php get_footer(); ?>
