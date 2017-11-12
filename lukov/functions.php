<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
function load_scripts() {
    if( is_single() ) {
wp_enqueue_script('likely', get_stylesheet_directory_uri() . '/js/likely.js', array('jquery'), '1.6', true);
    	}
}

add_action('wp_enqueue_scripts', 'load_scripts');
?>
