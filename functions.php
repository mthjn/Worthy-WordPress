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
  ==== requires ====
*
*
**/

// shortcodes
require_once("plugins/shortcodes.php");
require_once("plugins/admin/admin_edits.php");


/**
*
*
  A| Navigations
*
*
*/

function register_footer_menus() {
  register_nav_menus(
    array(
      'footer-left' => __( 'Footer Left Menu' ),
      'footer-center' => __( 'Footer Center Menu' ),
      'footer-right' => __( 'Footer Right Menu')
    )
  );
}
add_action( 'init', 'register_footer_menus' );

function worthy_custom_walker( $args ) {

if( 'Main' == $args['menu'] ) {

	return array_merge( $args, array(
        'walker' => new Top_Walker_Nav_Menu(),
    ) );

 } else {
    return array_merge( $args, array(
        'walker' => new My_Walker_Nav_Menu(),
    ) );
 }
}
add_filter( 'wp_nav_menu_args', 'worthy_custom_walker' );

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sidebar-submenu\">\n";
  }
}

class Top_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"sub-menu\">\n";
  }
}


/**
*
*
 B| Post types
*
*
*/


 function portfolio_init() {
     $args = array(
        'public' => true,
        'label'  => 'Portfolio',
    		'publicly_queryable' => true,
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'query_var'          => true,
        'rewrite'            => array( 'slug' => 'p' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
    		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
     );
     register_post_type( 'portfolio', $args );
 }
 add_action( 'init', 'portfolio_init' );


/**
*
*
  C| Widgets
*
*
*/

function worthy_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer left',
		'id'            => 'footer_left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="text-center title">',
		'after_title'   => '</h4>',
	) );
  register_sidebar( array(
    'name'          => 'Footer middle',
    'id'            => 'footer_middle',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-center title">',
    'after_title'   => '</h4>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer right',
    'id'            => 'footer_right',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-center title">',
    'after_title'   => '</h4>',
  ) );

}
add_action( 'widgets_init', 'worthy_widgets_init' );

/**
*
*
===============  Theme customizer =================
*
*
**/


function worthy_customizer( $wp_customize ) {


    $wp_customize->add_section(
        'worthy_section_one',
        array(
            'title' => 'Worthy Settings',
            'description' => 'This is for the copyright section.',
            'priority' => 35,
        )
    );

          $wp_customize->add_setting(
          'copyright_textbox',
          array('default' => 'Default copyright text',)
          );
          $wp_customize->add_setting(
              'link-color',
              array(
                  'default' => '#000000',
                  'sanitize_callback' => 'sanitize_hex_color',
              )
          );
          $wp_customize->add_setting(
          'brandbg-color',
          array('default' => 'rgba(85, 172, 238, 0.7)',)
          );
          $wp_customize->add_setting( 'worthy-header' );
          $wp_customize->add_setting( 'worthy-logo' );
          $wp_customize->add_setting(
          'header-title',
          array('default' => '<h1>We are <span>worthy</span></h1><p class="lead">And we can</p>',)
          );

          $wp_customize->add_control(
              'copyright_textbox',
              array(
                  'label' => 'Copyright text',
                  'section' => 'worthy_section_one',
                  'type' => 'text',
              )
          );
          $wp_customize->add_control(
              'brandbg-color',
              array(
                  'label' => 'Transparent background color for bg overlay in category listings:',
                  'section' => 'worthy_section_one',
                  'type' => 'text',
              )
          );
          $wp_customize->add_control(
              new WP_Customize_Color_Control(
                  $wp_customize,
                  'link-color',
                  array(
                      'label' => 'Main brand link color',
                      'section' => 'worthy_section_one',
                      'settings' => 'link-color',
                  )
              )
          );


          $wp_customize->add_control(
              new WP_Customize_Image_Control(
                  $wp_customize,
                  'worthy-header',
                  array(
                      'label' => 'Worthy Header Image Upload',
                      'section' => 'worthy_section_one',
                      'settings' => 'worthy-header'
                  )
              )
          );
          $wp_customize->add_control(
              new WP_Customize_Image_Control(
                  $wp_customize,
                  'worthy-logo',
                  array(
                      'label' => 'Worthy Navbar Logo Image Upload',
                      'section' => 'worthy_section_one',
                      'settings' => 'worthy-logo'
                  )
              )
          );
          $wp_customize->add_control(
              'header-title',
              array(
                  'label' => 'Text/HTML for front page header image',
                  'section' => 'worthy_section_one',
                  'type' => 'textarea',
              )
          );





}

add_action( 'customize_register', 'worthy_customizer' );



/**
*
* possible rubbish
*
**/




/*

require_once("assets/metaboxes.php");

// pages with tag homepage
function startseite_loop() {
				$args = array(
				'tag' => 'homepage', //tag slug
				'orderby' => 'name',
				'order' => 'DESC',
				'posts_per_page'=> '6',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();

echo '
	 <div class="col-sm-4 catbox">
	  <div class="product-image-wrapper">
	   <div class="single-products">
		<div class="productinfo text-center"><img  src="';
			the_field("product-pic");
			 echo '"><h2>$42</h2>
			   <p>'.get_the_title().'</p>
				<a href="'.get_permalink().'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Kaufen</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>$42</h2>
								<p>'.get_the_title().'</p>
								<a href="'.get_permalink().'" class="btn btn-default add-to-cart">
							<i class="fa fa-shopping-cart"></i>Kaufen</a>
							</div>
							</div>
	   </div>
	   <div class="choose">
			<ul class="nav nav-pills nav-justified">
				<li><a href="'.get_permalink().'"><i class="fa fa-plus-square"></i>INFO</a></li>
				<li><a href="'.get_permalink().'"><i class="fa fa-plus-square"></i>KAUFEN</a></li>
			</ul>
		</div>
	   </div>
	  </div>';



				endwhile;
				}//if
			wp_reset_postdata();
	}

function hp_bottom() {
	$args = array(
				'tag' => 'neu', //tag slug
				'orderby' => 'name',
				'order' => 'DESC',
				'posts_per_page'=> '4',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();


	echo '<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
				<div class="productinfo text-center">
					<img src="';
					the_field("product-pic");
					echo'" alt="'.get_the_title().'" />
					<h2>$42</h2>
					<p>'.get_the_title().'</p>
					<a href="'.get_permalink().'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>KAUFEN</a>
				</div>
				</div>
			</div>
		  </div>';
		  endwhile;
				}//if
		wp_reset_postdata();
}

function menus_loop($catslug) {
				$args = array(
				'category_name' => $catslug, //cat slug
				'orderby' => 'name',
				'order' => 'ASC',
				'posts_per_page'=> '50',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();
					echo '
					<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="'.get_permalink().'">'.get_the_title().'</a></h4>
								</div>
							</div>';
				endwhile;
				}//if
			wp_reset_postdata();
			}

function menus_side($catslug) {
						echo '
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="/'.$catslug.'">
											<span class="badge pull-right" style="text-transform: uppercase;"><i class="fa fa-plus"></i></span>
											'.$catslug.'
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse active">
									<div class="panel-body">
										<ul>';
				$args = array(
				'category_name' => $catslug, //cat slug
				'orderby' => 'name',
				'order' => 'ASC',
				'posts_per_page'=> '50',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {

				while( $loop->have_posts() ): $loop->the_post();
				echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
				endwhile;
				}//if
			wp_reset_postdata();
			echo '</ul>
									</div>
								</div>
							</div>';
			}


function catpage_loop($slug) {
				$args = array(
				'category_name' => $slug, //c slug
				'orderby' => 'name',
				'order' => 'DESC',
				'posts_per_page'=> '50',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();

echo '
	 <div class="col-sm-4">
	  <div class="product-image-wrapper">
	   <div class="single-products">
		<div class="productinfo text-center"><img width="184" height="162" src="';
			the_field("product-pic");
			 echo '"><h2>$42</h2>
			   <p>'.get_the_title().'</p>
				<a href="'.get_permalink().'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>KAUFEN</a>
					</div>
					<div class="product-overlay">
						<div class="overlay-content">
							<h2>$42</h2>
								<p>'.get_the_title().'</p>
								<a href="'.get_permalink().'" class="btn btn-default add-to-cart">
							<i class="fa fa-shopping-cart"></i>Kaufen</a>
							</div>
							</div>
	   </div>
	   <div class="choose">
			<p class="catex">'.get_the_excerpt().'</p>
		</div>
	   </div>
	  </div>';



				endwhile;
				}//if
			wp_reset_postdata();
	}

function footer_loop() {
				$args = array(
				'category_name' => "news", //c slug
				'orderby' => 'name',
				'order' => 'DESC',
				'posts_per_page'=> '4',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();
//133x61
echo '
	<div class="col-sm-3">
		<div class="video-gallery text-center">
			<a href="'.get_permalink().'">
				<div class="iframe-img">';
				the_post_thumbnail(array(133,61));
				echo '</div>
				<div class="overlay-icon">
				<i class="fa fa-caret-right"></i>
				</div>
			</a>
			<p>'.get_the_title().'</p>
			<h2>---</h2>
		</div>
	</div>';



				endwhile;
				}//if
			wp_reset_postdata();
	}
function upsell() {
	$args = array(
				'tag' => 'upsell', //tag slug
				'orderby' => 'name',
				'order' => 'DESC',
				'posts_per_page'=> '4',
				);
			  $loop = new WP_Query( $args );
			   if( $loop->have_posts() ) {
				while( $loop->have_posts() ): $loop->the_post();


	echo '<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
				<div class="productinfo text-center">
					<img src="';
					the_field("product-pic");
					echo'" alt="'.get_the_title().'" />
					<p>'.get_the_title().'</p>
					<a href="'.get_permalink().'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>KAUFEN</a>
				</div>
				</div>
			</div>
		  </div>';
		  endwhile;
				}//if
		wp_reset_postdata();
}

*/
