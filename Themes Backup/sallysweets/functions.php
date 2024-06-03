<?php
/**
 * SallySweets functions.
 *
 * @package SallySweets
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function sallytheme_add_stylesheet() {
    wp_enqueue_style( 'sallystyle', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'sallytheme_add_stylesheet' );

function sally_add_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary' ),
        'secondary' => __( 'Bob' ),
    ) );
}

add_action( 'after_setup_theme',
            'sally_add_menus' );

add_theme_support( 'post-thumbnails' );

?>