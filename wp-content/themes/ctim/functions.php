<?php 
function custom_enqueue(){
    //Add Style
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

    //Add Script
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), true);
    
    wp_enqueue_script( 'navbar', get_template_directory_uri() . '/assets/js/navbar.js', array('jquery'), true );
}
add_action('wp_enqueue_scripts', 'custom_enqueue');


function init() {
    load_theme_textdomain( 'ctim', get_template_directory() . '/languages' );

    //Add Scripts
    add_action('wp_enqueue_scripts', 'custom_enqueue');
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'init' );

require get_template_directory() . '/inc/init.php';

function enable_admin_bar(){
    return true;
}
add_filter('show_admin_bar', 'enable_admin_bar');

add_filter( 'network-media-library/site_id', function( $site_id ) {
    return 1;
} );

?>