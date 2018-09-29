<?php 

    if (is_front_page()){
		wp_enqueue_style('front-page', get_stylesheet_uri().'resources');
	
	add_action('get_stylesheet_uri', 'front-page');
    }
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