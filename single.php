<?php get_header(); ?>
<?php 	while ( have_posts() ) : the_post(); ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url(
<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}
   ?>); <?php	if ( !has_post_thumbnail() ) { echo "background:#c3c3c3";} 
	   ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                  <h1> <?php echo get_the_title(); ?> </h1>

                    <hr class="small">
                    <span class="subheading"> <?php the_excerpt(); ?> </span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
 <div class="row">
		<div class="col-lg-12 col-md-12 col-xs-12 post-thumb">

		</div>
				<div class="features_items">
					<h2 class="title text-center"> <?php echo get_the_title(); ?> </h2>
							<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
								<div class="content">
								 <?php the_content(); ?>
								</div>
							</div>
				</div>
			<?php endwhile;	?>
		</div>
</div>

<hr>
<?php get_footer(); ?>
