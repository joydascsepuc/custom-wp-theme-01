<?php

function customTheme_script_enqueue(){

	wp_enqueue_style('Customstyle-css',get_template_directory_uri().'/css/customTheme.css',array(),'1.0.0','all');
	wp_enqueue_script( 'customJs', get_template_directory_uri().'/js/customTheme.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'customTheme_script_enqueue');

function customTheme_theme_setup(){
	
	add_theme_support( 'menus');
	register_nav_menu( 'primary', 'This is the primary Menu');
	register_nav_menu( 'secondary', 'Footer Navigation');
}

// add_action( 'after_setup_theme', 'customTheme_theme_setup');
add_action( 'init', 'customTheme_theme_setup');