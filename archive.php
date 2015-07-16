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
<div class="container">
		<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

		<?php if (is_home()) : ?>
		<?php if (have_posts()) : ?>
		<?php query_posts("showposts=5"); // show one latest post only ?>
					<?php	while ( have_posts() ) : the_post(); ?>
						<div class="post-preview">
								<a href="<?php the_permalink(); ?>">
										<h2 class="post-title">
												<?php the_title(); ?>
										</h2>
										<h3 class="post-subtitle">
											<?php the_excerpt(); ?>
										</h3>
								</a>
								<p class="post-meta"> <?php the_date(); ?> </p>
						</div>
						<hr>
					<?php	endwhile;	?>
				<?php endif; ?>
			<?php endif; ?>




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
