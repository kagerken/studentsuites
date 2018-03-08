<?php
/**
 * InVogue Child functions and definitions
 */
define( 'INVOGUE_THEME_VERSION' , '1.0.2' );

/**
 * Enqueue parent theme style
 */
function invogue_child_enqueue_styles() {
    wp_enqueue_style( 'vogue-style', get_template_directory_uri() . '/style.css', array(), INVOGUE_THEME_VERSION );
    
    if ( get_theme_mod( 'vogue-header-layout' ) == 'vogue-header-layout-four' ) :
        wp_enqueue_style( 'vogue-header-style', get_template_directory_uri().'/templates/css/header-four.css', array(), INVOGUE_THEME_VERSION );
    elseif ( get_theme_mod( 'vogue-header-layout' ) == 'vogue-header-layout-one' ) :
        wp_enqueue_style( 'vogue-header-style', get_template_directory_uri().'/templates/css/header-one.css', array(), INVOGUE_THEME_VERSION );
    elseif ( get_theme_mod( 'vogue-header-layout' ) == 'vogue-header-layout-two' ) :
        wp_enqueue_style( 'vogue-header-style', get_template_directory_uri().'/templates/css/header-two.css', array(), INVOGUE_THEME_VERSION );
    else :
        wp_enqueue_style( 'vogue-header-style', get_template_directory_uri().'/templates/css/header-three.css', array(), INVOGUE_THEME_VERSION );
    endif;
    
    wp_enqueue_style( 'invogue-vogue-child-style', get_stylesheet_uri(), array( 'vogue-style' ), INVOGUE_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'invogue_child_enqueue_styles' );

/**
 * Enqueue InVogue custom customizer styling.
 */
function invogue_load_customizer_script() {
    wp_enqueue_script( 'invogue-customizer-custom-js', get_stylesheet_directory_uri() . "/customizer-js/custom-customizer.js", array('jquery', 'vogue-customizer-js'), INVOGUE_THEME_VERSION, true );
}
add_action( 'customize_controls_enqueue_scripts', 'invogue_load_customizer_script' );
