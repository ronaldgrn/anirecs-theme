<?php

function register_right_sidebar(){
	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'sidebar'
	) );
}
add_action('widgets_init', 'register_right_sidebar');

function register_slide_area(){
	register_sidebar( array(
		'name'          => 'Top Slide',
		'id'            => 'home_slide'
	) );
}
add_action('widgets_init', 'register_slide_area');

function register_top_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_top_menu' );

function top_menu_javascript(){
	?>
	<script type="text/javascript">
		function myFunction() {
			console.log("bleh");
			var x = document.getElementById("menu-main");
			if (x.className === "menu") {
				x.className += " responsive";
			} else {
				x.className = "menu";
			}
		}
	</script>
	<?php
}
add_action('wp_footer', 'top_menu_javascript');

/*
 * Adds mandatory icon to top menu to make responsive
 */
function add_responsive_icon($html, $args){
	// no condition, do for all menus
	$icon = '<a href="javascript:void(0);" class="nav-responsive-icon menu-item" onclick="myFunction()">&#9776; Main Menu</a>';
	$html = $icon . $html;

	return $html;
}
add_filter('wp_nav_menu_items', 'add_responsive_icon', 10, 2);

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
