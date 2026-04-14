<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function child_enqueue_scripts() {// Charger le script.js du thème enfant
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_stylesheet_directory() . '/js/script.js'), true
    );
}
add_action('wp_enqueue_scripts', 'child_enqueue_scripts');

function child_enqueue_child_style() {// Charger le css du thème enfant
    wp_enqueue_style('child-css', get_stylesheet_directory_uri() . '/css/style.css', filemtime(get_stylesheet_directory() . '/css/style.css')
    );
}
add_action('wp_enqueue_scripts', 'child_enqueue_child_style');

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

//Swiper js