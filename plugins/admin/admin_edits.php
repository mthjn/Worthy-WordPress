<?php
/*
This file handles the admin area and functions.
You can use this file to make changes to the
dashboard. Updates to this page are coming soon.
It's turned off by default, but you can call it
via the functions file.
Developed by: Eddie Machado
URL: http://themble.com/bones/
Special Thanks for code & inspiration to:
@jackmcconnell - http://www.voltronik.co.uk/
Digging into WP - http://digwp.com/2010/10/customize-wordpress-dashboard/
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
/************* DASHBOARD WIDGETS *****************/
// disable default dashboard widgets
function disable_default_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);    // Right Now Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);        // Activity Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); // Comments Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);  // Incoming Links Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);         // Plugins Widget
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);    // Quick Press Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);     // Recent Drafts Widget
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);           //
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);         //
	// remove plugin dashboard boxes
	unset($wp_meta_boxes['dashboard']['normal']['core']['yoast_db_widget']);           // Yoast's SEO Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['rg_forms_dashboard']);        // Gravity Forms Plugin Widget
	unset($wp_meta_boxes['dashboard']['normal']['core']['bbp-dashboard-right-now']);   // bbPress Plugin Widget
}

/************* CUSTOM LOGIN PAGE *****************/
// calling your own login css so you can style it
//Updated to proper 'enqueue' method
//http://codex.wordpress.org/Plugin_API/Action_Reference/login_enqueue_scripts
function bones_login_css() {
	wp_enqueue_style( 'custom_login_css', get_stylesheet_directory_uri() . '/plugins/admin/login.css', false );
}
// changing the logo link from wordpress.org to your site
function bones_login_url() {  return home_url(); }
// changing the alt text on the logo to show your site name
function bones_login_title() { return get_option( 'blogname' ); }
// calling it only on the login page
add_action( 'login_enqueue_scripts', 'bones_login_css', 10 );
add_filter( 'login_headerurl', 'bones_login_url' );
add_filter( 'login_headertitle', 'bones_login_title' );
/************* CUSTOMIZE ADMIN *******************/
/*
I don't really recommend editing the admin too much
as things may get funky if WordPress updates. Here
are a few funtions which you can choose to use if
you like.
*/
