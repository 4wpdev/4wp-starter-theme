<?php
/**
 * 4WP Starter Theme Functions
 * 
 * @package FourWP_Starter_Theme
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup function
 */
function fourwp_starter_theme_setup() {
    // Add theme support for various WordPress features
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Load text domain for translations
    load_theme_textdomain('fourwp-starter', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'fourwp_starter_theme_setup');

/**
 * Enqueue theme assets
 */
function fourwp_starter_enqueue_assets() {
    // Main theme stylesheet
    wp_enqueue_style(
        'fourwp-starter-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'fourwp_starter_enqueue_assets');
