<?php

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

//Swiper js et autres scripts
function theme_enqueue_assets() {
    //le css du theme parent
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    //le css du theme enfant
    wp_enqueue_style('child-css', get_stylesheet_directory_uri() . '/css/style.css',
    filemtime(get_stylesheet_directory() . '/css/style.css'));
    
    //le css de swiper
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() .'/css/swiper-bundle.min.css',
    array(), null);

    //le script de swiper
    wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() .'/js/swiper-bundle.min.js',
    array(), null, true);

    //le script perso
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery', 'swiper-js'),
    filemtime(get_stylesheet_directory() . '/js/script.js'), true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_assets');