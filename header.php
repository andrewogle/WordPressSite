<!DOCTYPE html>
<html>
<head>
<!--my custom style sheet for front page is in the resources folder-->
	<?php  
	if (is_front_page()){
		// wp_enqueue_style('front-page', get_stylesheet_uri().'resources');
	
		// add_action('get_stylesheet_uri', 'front-page');
		
		?>
		
		<!-- <link rel="stylesheet" type="text/css" href="/wordpress/wp-content/themes/portfolioSite/resources/front-page.css"> -->
   <?php
}
?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
	<!-- site header -->
		<header class="site-header">
			<nav class="site-nav">

					<h1 class='me'>Andrew Ogle</h1>

				<?php 

					$args =  array('theme_location' => 'primary' );
				?>

				<?php wp_nav_menu($args); ?>
			</nav>

		</header>