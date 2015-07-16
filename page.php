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


<!-- banner start -->
  <!-- ================ -->
  <div id="banner" class="banner">
    <div class="banner-image"></div>
    <div class="banner-caption">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
            <h1 class="text-center">We are <span>Worthy</span></h1>
            <p class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos debitis provident nulla illum minus enim praesentium repellendus ullam cupiditate reiciendis optio voluptatem, recusandae nobis quis aperiam, sapiente libero ut at.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->




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
