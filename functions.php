<?php

add_action('wp_enqueue_scripts', 'my_portfolio_styles');
function my_portfolio_styles()
{
  if (is_front_page()) {
    wp_enqueue_style('front-page', get_stylesheet_directory_uri() . '/resources/front-page.css', array(), false, 'screen');
  }
}



	// Navigation Menus

register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'footer' => __('Footer Menu'),
));
?>