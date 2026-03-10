<?php
/**
 * GroundedDating 2.0 functions and definitions
 *
 * @package GroundedDating
 */

if ( ! defined( 'GROUNDED_DATING_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GROUNDED_DATING_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function grounded_dating_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'grounded-dating' ),
			'footer' => esc_html__( 'Footer', 'grounded-dating' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Custom logo.
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
    
    // Add support for core custom logo.
	add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'grounded_dating_setup' );

/**
 * Enqueue scripts and styles.
 */
function grounded_dating_scripts() {
    // Fonts
    wp_enqueue_style( 'grounded-dating-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap', array(), null );

    // Theme Styles
	wp_enqueue_style( 'grounded-dating-style', get_stylesheet_uri(), array(), GROUNDED_DATING_VERSION );
    wp_enqueue_style( 'grounded-dating-variables', get_template_directory_uri() . '/assets/css/variables.css', array(), GROUNDED_DATING_VERSION );
    wp_enqueue_style( 'grounded-dating-global', get_template_directory_uri() . '/assets/css/global.css', array('grounded-dating-variables'), GROUNDED_DATING_VERSION );

    // Scripts
	wp_enqueue_script( 'grounded-dating-navigation', get_template_directory_uri() . '/assets/js/main.js', array(), GROUNDED_DATING_VERSION, true );
    
    if ( is_front_page() ) {
        wp_enqueue_style( 'grounded-dating-home', get_template_directory_uri() . '/assets/css/components/home.css', array('grounded-dating-global'), GROUNDED_DATING_VERSION );
        // Enqueue Three.js and custom globe script only on front page
        wp_enqueue_script( 'three-js', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), 'r128', true );
        wp_enqueue_script( 'grounded-dating-globe', get_template_directory_uri() . '/assets/js/globe.js', array('three-js'), GROUNDED_DATING_VERSION, true );
    }
}
add_action( 'wp_enqueue_scripts', 'grounded_dating_scripts' );
