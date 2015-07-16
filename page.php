<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<?php 	while ( have_posts() ) : the_post(); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background:#c3c3c3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
							<div class="site-heading">
								<h1> <?php the_title();?> </h1>
							</div>
            </div>
        </div>
    </div>
</header>
	<div class="container page">
			<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

								<?php echo '<div class="features_items"><h2 class="title text-center">'.get_the_title().'</h2>';
								if ( has_post_thumbnail() ) {
								  $arg = array ('class' => "alignleft");
								  the_post_thumbnail("medium", $arg);
								}
									echo '<div class="content">';
								 	the_content();
								 	echo '</div>';
								echo '</div>';
								endwhile;
						?>
					</div>
			</div>
	</div>

	<hr>

<?php get_footer(); ?>
