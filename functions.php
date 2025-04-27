<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function databook_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'databook' ),
        'footer'  => __( 'Footer Menu', 'databook' ),
    ) );
}
add_action( 'after_setup_theme', 'databook_theme_setup' );

function databook_theme_enqueue_styles() {
    wp_enqueue_style( 'databook-style', get_stylesheet_uri() );
    wp_enqueue_script( 'tailwindcss', 'https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'databook_theme_enqueue_styles' );


