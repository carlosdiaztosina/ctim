<?php 
function mi_css_personalizado(){
    //Add Style
    wp_enqueue_style('ulpgcds', get_template_directory_uri() . '/assets/css/ulpgcds.css');
}
add_action('wp_enqueue_scripts', 'mi_css_personalizado');


function init() {
    load_theme_textdomain( 'ctim', get_template_directory() . '/languages' );

    //Add Scripts
    add_action('wp_enqueue_scripts', 'mi_css_personalizado');
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'after_setup_theme', 'init' );


function admin_bar(){

    add_filter( 'show_admin_bar', '__return_true' , 1000 );
}
add_action('init', 'admin_bar' );
?>