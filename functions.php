<?php

function register_right_sidebar(){
	register_sidebar();
}
add_action('widgets_init', 'register_right_sidebar');

function register_top_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_top_menu' );

function add_bootstrap_dependencies(){
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'add_bootstrap_dependencies');

/*
 * Added after bootstrap so overrides work
 */
function add_main_stylesheet(){
	wp_enqueue_style('anirecs-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_main_stylesheet');
