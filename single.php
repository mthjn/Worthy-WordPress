<?php get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <!-- insert into wp head . with post dont use backstretch-->
  <script>
  $(document).ready(function(){
    $(".post-image").backstretch('<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}?>');
  });
  </script>
  <!--this needs a metabox -->
  			  <div id="banner" class="banner">
  			    <div class="post-image"></div>
  			    <div class="banner-caption">
  			      <div class="container">
  			        <div class="row">
  			          <div class="col-md-8 col-md-offset-2">
  			            <h2 class="text-center"><?php the_title();?></h2>
                    <h3 class="lead text-center"><a href="<?php the_permalink(); ?>"><i class="fa fa-paperclip"></i> link</a></h3>
                  </div>
  			        </div>
  			      </div>
  			    </div>
  			  </div>
  <!-- Page Header -->

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
