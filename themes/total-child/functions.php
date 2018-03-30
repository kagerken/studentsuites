<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/*
	Define a constant path to our templating folder

define(SINGLE_PATH, TEMPLATEPATH. '/templates');


	Filter the single_template with our function

add_filter('single_template',)
*/
?>