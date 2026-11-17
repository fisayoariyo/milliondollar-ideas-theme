<?php
/**
 * MillionDollar Ideas theme functions.
 *
 * @package MillionDollarIdeasTheme
 */

function milliondollar_ideas_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 48,
        'width'       => 160,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'milliondollar-ideas' ),
    ) );
}
add_action( 'after_setup_theme', 'milliondollar_ideas_theme_setup' );

function milliondollar_ideas_scripts() {
    $theme  = wp_get_theme();
    $ver    = $theme->get( 'Version' );

    // Theme stylesheet.
    wp_enqueue_style( 'milliondollar-ideas-style', get_stylesheet_uri(), array(), $ver );

    // Google Fonts (full weight ranges for the display headings + body).
    wp_enqueue_style(
        'milliondollar-ideas-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap',
        array(),
        null
    );

    // Material Symbols (Rounded).
    wp_enqueue_style(
        'milliondollar-ideas-material-symbols',
        'https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200',
        array(),
        null
    );

    // Theme interactions (cursor, nav, carousel, reveal). File lives at theme root.
    wp_enqueue_script(
        'milliondollar-ideas-custom-script',
        get_template_directory_uri() . '/custom.js',
        array(),
        $ver,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'milliondollar_ideas_scripts' );

function milliondollar_ideas_body_classes( $classes ) {
    $classes[] = 'dark-mode';
    return $classes;
}
add_filter( 'body_class', 'milliondollar_ideas_body_classes' );
