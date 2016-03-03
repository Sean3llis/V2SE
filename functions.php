<?php
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'sidebars' );

show_admin_bar( false );

require get_template_directory() . '/inc/javascripts.php';
require get_template_directory() . '/inc/stylesheets.php';

$locations = array(
	'primary_menu' => 'Displayed as default main nav'
);

register_nav_menus( $locations );


$args = array(
	'name' => 'Main',
	'id' => 'sidebar-main'
);

register_sidebar( $args );


add_action('after_setup_theme', 'load_acf');
function load_acf() {
	// 1. customize ACF path
	add_filter('acf/settings/path', 'my_acf_settings_path');

	function my_acf_settings_path( $path ) {

	    // update path
	    $path = get_stylesheet_directory() . '/acf/';

	    // return
	    return $path;

	}


	// 2. customize ACF dir
	add_filter('acf/settings/dir', 'my_acf_settings_dir');

	function my_acf_settings_dir( $dir ) {

	    // update path
	    $dir = get_stylesheet_directory_uri() . '/acf/';

	    // return
	    return $dir;

	}


	// 3. Hide ACF field group menu item
	// add_filter('acf/settings/show_admin', '__return_false');


	// 4. Include ACF
	include_once( get_stylesheet_directory() . '/acf/acf.php' );
}
