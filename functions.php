<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/acf.php',                             // Load ACF functions.	
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

function sola_is_home(){
	if (is_home()){
		echo 'home';
	}
}

//FOOTER WIDGETS
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Left Footer',
    'id' => 'left-footer-widget',
    'before_widget' => '<div class = "widgetizedArea footer left">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Mid Footer',
    'id' => 'mid-footer-widget',    
    'before_widget' => '<div class = "widgetizedArea footer mid">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Right Footer',
    'id' => 'right-footer-widget',    
    'before_widget' => '<div class = "widgetizedArea footer right">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);
