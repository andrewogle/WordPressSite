<?php
add_action('wp_enqueue_style', 'my_portfolio_styles' );
  if (is_front_page()){
	wp_enqueue_style('front-page',  get_stylesheet_directory().'resources/front-page.css');

	function my_portfolio_styles(){

		wp_enqueue_style('resources', get_stylesheet_directory_url('front-page.css'),array('front-page.css'));
	}
}



	// Navigation Menus

	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
    ));
?>