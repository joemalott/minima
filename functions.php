<?php

function minima_starter_theme_scripts() {
    
    wp_enqueue_style( 'main', get_template_directory_uri() . 'main.css' );

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'minima_starter_theme_scripts' );
