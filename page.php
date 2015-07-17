<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- insert into wp head -->
<script>
$(document).ready(function(){
  $(".page-image").backstretch('<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}?>');
});
</script>
<!--this needs a metabox -->
			  <div id="banner" class="banner">
			    <div class="page-image"></div>
			    <div class="banner-caption">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-8 col-md-offset-2">
			            <h1 class="text-center"><?php the_title();?></h1>
			            <div class="lead text-center"><?php the_excerpt();?></div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
<!-- Page Header -->
<header class="intro-header" style="background:#c3c3c3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
							<div class="site-heading">
								<h3><?php the_title();?></h3>
							</div>
            </div>
        </div>
    </div>
</header>
	<div class="container page">
			<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="content">
								<?php the_content(); ?>
					</div>
			</div>
	</div>

	<hr>
<?php endwhile; ?>
<?php get_footer(); ?>
