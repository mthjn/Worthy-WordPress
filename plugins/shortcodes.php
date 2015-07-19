<?php
/*
Theme Name: worthy
Description: Based on free HTML template Worthy of http://www.htmlcoder.me
Author: mthjn
Author URI: http://github.com/mthjn
Version: 0.0.1
Template: twentyfifteen
*/

/**
*
*
 ===== text formatting ====
*
*
**/

function sh_heading( $atts ) {
    $a = shortcode_atts( array(
        'content' => 'Something',
    ), $atts );

    ob_start();
      echo '<div class="separator"></div>';
      echo '<div><h1 class="text-center title">'.$atts["content"].'</h1></div>';
      $output_string=ob_get_contents();;
    ob_end_clean();

    return $output_string;
}
add_shortcode( 'heading', 'sh_heading' );


function sh_subheading( $atts ) {
    $a = shortcode_atts( array(
        'content' => 'Something',
    ), $atts );

    ob_start();
      echo '<div><p class="lead text-center">'.$atts["content"].'</p></div>';
      echo '<div class="separator"></div>';
      $output_string=ob_get_contents();;
    ob_end_clean();

    return $output_string;
}
add_shortcode( 'subheading', 'sh_subheading' );


/**
*
*
======== elements ========
*
*
**/

function sh_portfolio( $atts ) {
    $a = shortcode_atts( array(
        'heading' => '',
        'subheading' => '',
    ), $atts );

    ob_start();
      echo '<div class="separator"></div>';

  	$query = new WP_Query( array( 'post_type' => array( 'portfolio' ) ) ); ?>
    <div class="section">
      	<div class="container">
          <h1 class="text-center title"><?php echo $atts['heading']; ?></h1>
          <div class="separator"></div>
          <p class="lead text-center">
            <?php echo $atts['subheading']; ?>
          </p>
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
      									<img style="padding:0!important" src="<?php	if ( has_post_thumbnail() ) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url;}?>" alt="">
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

      <?php echo '<div class="separator"></div>';
      $output_string=ob_get_contents();;
      ob_end_clean();

    return $output_string;
}
add_shortcode( 'portfolio', 'sh_portfolio' );



function sh_posts( $atts ) {
    $a = shortcode_atts( array(
        'count' => '1',
    ), $atts );
    $counts = $atts['count'];

    ob_start(); ?>

    <div class="row">
     <?php $args = array( 'post_type' => 'post', 'post_count' => $counts ); ?>
       <?php $the_query = new WP_Query( $args ); ?>
        <?php	if ( $the_query->have_posts() ) :  ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                <a href="<?php the_permalink(); ?>" class="post-meta">
                  <i class="fa fa-paperclip"></i><i class="fa fa-paperclip"></i><i class="fa fa-paperclip"></i>
                </a>
            </div>
          </div>
        </div>
          <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php	endif;	?>
    </div>

    <script>
  		window.addEventListener("load", function() {
  		  topResize( 'flush-top' );
  		  	topResize( 'flush-middle' );
  		  		topResize( 'flush-bottom' );
  		});
  		window.addEventListener("resize", function() {
  		  topResize( 'flush-top' );
  		  	topResize( 'flush-middle' );
  		  		topResize( 'flush-bottom' );
  		  topResizeOnresize( 'flush-top' );
  		  	topResizeOnresize( 'flush-middle' );
  		  		topResizeOnresize( 'flush-bottom' );
  		});
  	</script>

    <?php
    $output_string=ob_get_contents();;
    ob_end_clean();

    return $output_string;
    //and flush js
}
add_shortcode( 'posts', 'sh_posts' );
