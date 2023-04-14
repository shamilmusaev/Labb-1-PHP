<?php

add_action('after_setup_theme', 'add_features' );
add_action('after_setup_theme', 'add_menu' );
add_action("wp_enqueue_scripts", "get_my_scripts");
add_action("widgets_init", "register_my_widgets");
add_theme_support( 'post-thumbnails' );
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function register_my_widgets(){

	register_sidebar( array(
		'name'          => 'Bottom Sidebar',
		'id'            => "bottom_sidebar",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		
		
	) );

	register_sidebar( array(
		'name'          => 'Bottom Sidebar2',
		'id'            => "bottom_sidebar2",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		
		
	) );


}


function add_features(){
  add_theme_support( 'custom-logo', [
	'height'      => 50,
	'width'       => 100,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, 
] );
}

function add_menu(){
	register_nav_menu( 'top', 'Main menu' );
	register_nav_menu( 'right', 'Right menu undersidor' );
	register_nav_menu( 'left', 'Left menu undersidor' );
	register_nav_menu( 'bottom', 'Bottom menu' );

}

function get_my_scripts(){
    wp_enqueue_style("style", get_stylesheet_directory_uri() ."/style.css");
    wp_enqueue_style("font-awesome", get_stylesheet_directory_uri() . "/assets/css/font-awesome.css");
    wp_enqueue_script("script", get_template_directory_uri() . "/assets/js/script.js", array("jquery"),
	false,
	true );
}


function wpt_register_css() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );




 ?>
