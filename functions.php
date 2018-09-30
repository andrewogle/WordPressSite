<?php 
var_dump(get_stylesheet_uri());
var_dump( get_stylesheet_directory());
    // if (is_front_page()){
	// 	wp_enqueue_style('front-page',  get_stylesheet_directory().'/resources/front-page.css');
	
	// //add_action('get_stylesheet_directory', 'front-page');
    // }
	function resources(){

		wp_enqueue_style('style', get_stylesheet_uri() );
	}

	add_action('wp_enqueue_scripts', 'resources' );

	// Navigation Menus

	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
    ));
?>