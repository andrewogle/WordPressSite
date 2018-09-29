<?php 

    if (is_front_page()){
		wp_enqueue_style('front-page', get_template_directory_uri().'resources');
	
	add_action('admin_enqueue_scripts', 'front-page');
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