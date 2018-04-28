<?php

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
/*function wp_enqueue_scripts() {
    wp_enqueue_script( 'All Projects scripts', get_template_directory_uri() . '/js/allprojectsscripts.js', array(), true );
}*/
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
?>