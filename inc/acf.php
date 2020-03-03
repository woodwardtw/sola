<?php
/**
 * ACF
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

  
 //ACF JSON SAVER
  add_filter('acf/settings/save_json', 'sola_json_save_point');
   
  function sola_json_save_point( $path ) {
      
      // update path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $path;
      
  }

  //ACF JSON LOADER
  add_filter('acf/settings/load_json', 'sola_acf_json_load_point');

  function sola_acf_json_load_point( $paths ) {
      
      // remove original path (optional)
      unset($paths[0]);    
      
      // append path
      $path = get_stylesheet_directory() . '/acf-json';
      
      // return
      return $paths;
      
  }

  function sola_icon_loop(){
  	global $post;
  	if( have_rows('icon_blocks', $post->ID) ):

 	// loop through the rows of data
    while ( have_rows('icon_blocks') ) : the_row();

        // display a sub field value
        echo '<div class="col-md-4 icon-block">';
        echo '<img src="' . get_sub_field('icon')['sizes']['thumbnail'] . '" class="icon-img">';
        echo '<h2>' . get_sub_field('block_title') . '</h2>';
        echo '<p>' . get_sub_field('block_text') . '</p>';
        echo '</div>';

    endwhile;

	else :

	    // no rows found

	endif;


  }

  function sola_hero_loop(){
  	global $post;
  	$hero = get_field('main_message_holder', $post->ID);
  	if($hero){
  		echo '<h1 class="hero-main">' . $hero['hero_message'] . '</h1>';
  		echo '<p>' . $hero['hero_details'] . '</p>';
  		echo '<a class="btn btn-sola" href="' . $hero['hero_button_link'] . '">' . $hero['hero_button_text'] . '</a>';
      echo '<a class="btn btn-sola" href="#primary">Learn More</a>';
  	}
  }