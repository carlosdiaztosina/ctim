<?php

require get_template_directory() . '/inc/posts/page.php';


function register_custom_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'extra-menu' => __( 'Extra Menu' )
        )
    );
}
add_action( 'init', 'register_custom_menus' );

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
?>