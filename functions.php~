<?php 

function cvTheme_resources() {

	wp_enqueue_style('style', get_stylesheet_uri() );

}

add_action('wp_enqueue_scripts', 'cvTheme_resources');

// Navigation menus

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
	));

// One page style 

function onepage_scripts(){
	if (is_front_page()) {
		wp_enqueue_style('one_page_style', get_stylesheet_directory_uri().'/one_page_style.css');
	}
}

add_action('wp_enqueue_scripts','onepage_scripts');