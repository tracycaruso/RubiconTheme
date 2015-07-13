<?php

/* Enqueue Stylesheets */
function wpr_theme_styles(){
	wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'skeleton_css', get_template_directory_uri() . '/css/skeleton.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script('jquery', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', '', '', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', '', '', false);
}

add_action( 'wp_enqueue_scripts', 'wpr_theme_styles' );

  
?>