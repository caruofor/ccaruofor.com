<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset ="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="wide=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

	<div class="container">	

<!-- site-header -->
	<header class= "site-header">
	<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5><?php bloginfo('description'); ?> <?php if (is_page('resume')) { ?>
			 - HTML/CSS/PHP/WordPress/Javascript
		<?php }?></h5>

		
		<nav class ="site-nav">

		<?php 

			$args = array(
				'theme_location' => 'primary'
				);



		?>

			<?php wp_nav_menu( $args); ?>
		</nav>

		</header>
<!-- /site-header -->