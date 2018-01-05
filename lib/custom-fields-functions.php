<?php
/**

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

// 1. customize ACF path
add_filter('acf/settings/path', 'sage_settings_path');

function sage_settings_path( $path ) {

	// update path
	$path = get_stylesheet_directory() . '/lib/acf/';

	// return
	return $path;

}


// 2. customize ACF dir
add_filter('acf/settings/dir', 'sage_settings_dir');

function sage_settings_dir( $dir ) {

	// update path
	$dir = get_stylesheet_directory_uri() . '/lib/acf/';

	// return
	return $dir;

}


// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

}