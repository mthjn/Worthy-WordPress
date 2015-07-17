<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>


<!-- section start -->
<!-- ================ -->
<div class="section translucent-bg bg-image-1 blue">
	<div class="container object-non-visible" data-animation-effect="fadeIn">
		<h1 id="services"  class="text-center title">Recent Posts</h1>
		<div class="space"></div>
		<div class="row">
			<div class="col-sm-6">


				<?php if (is_home()) : ?>
				<?php if (have_posts()) : ?>
				<?php query_posts("showposts=5"); // show one latest post only ?>
							<?php	while ( have_posts() ) : the_post(); ?>
								<div class="media">
									<div class="media-body text-right">
										<a href="<?php the_permalink(); ?>">
												<h4 class="media-heading">
														<?php the_title(); ?>
												</h4>
												<p>
													<?php the_excerpt(); ?>
												</p>
												<div class="media-right">
													<i class="fa fa-cog"></i>
												</div>
										</a>
										<p class="post-meta"> <?php the_date(); ?> </p>
								</div>
								<hr>
							<?php	endwhile;	?>
						<?php endif; ?>
					<?php endif; ?>
		</div>
			<div class="space visible-xs"></div>
			<div class="col-sm-6">
				<div class="media">
					<div class="media-left">
						<i class="fa fa-leaf"></i>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Service 5</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aperiam consequatur quo quis exercitationem reprehenderit dolor vel ducimus, voluptate eaque suscipit iste placeat.</p>
					</div>
				</div>
			</div>
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
