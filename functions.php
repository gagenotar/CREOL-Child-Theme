<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 */
/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function child_enqueue_parent_theme_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme   = wp_get_theme( 'Colleges-Theme' ); // !!! CHANGE TO YOUR PARENT THEME NAME !!!
    $version = $theme->get( 'Version' );
    // Load the stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/static/css/style.min.css', array(), $version );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css');

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_parent_theme_style' );

function reenable_unused_templates() {
    remove_action( 'template_redirect', 'kill_unused_templates' );
}
add_action( 'after_setup_theme', 'reenable_unused_templates' );

function creol_kill_unused_templates() {
    global $wp_query, $post;
    $enable_feeds = filter_var( get_theme_mod_or_default( 'enable_feeds' ), FILTER_VALIDATE_BOOLEAN );
    if ( is_author() || is_day() || ( is_feed() && $enable_feeds === false ) ) {
        wp_redirect( home_url() );
        exit();
    }
}
add_action( 'template_redirect', 'creol_kill_unused_templates' );
