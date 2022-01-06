<?php
if ( ! function_exists( 'halim_register_nav_menu' ) ) {


    load_theme_textdomain('halim', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    function halim_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Top Menu', 'halim' ),

        ) );
    }
    add_action( 'after_setup_theme', 'halim_register_nav_menu', 0 );
}
