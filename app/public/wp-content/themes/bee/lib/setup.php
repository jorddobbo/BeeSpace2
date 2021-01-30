<?php

namespace ThemeTitle\Setup;

use ThemeTitle\Assets;

/**
 * Theme setup
 */
function setup() {

	// Gutenberg settings
    add_theme_support( 'align-wide' );
    add_theme_support( 'align-full' );

	// Make theme available for translation
	// Community translations can be found at https://github.com/roots/sage-translations
	load_theme_textdomain('wearejh', get_template_directory() . '/lang');

	// Enable plugins to manage the document title
	// http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
	add_theme_support('title-tag');

	// Register wp_nav_menu() menus
	// http://codex.wordpress.org/Function_Reference/register_nav_menus
	register_nav_menus([
		'primary_navigation' => __('Primary Navigation', 'aves'),
		'secondary_navigation' => __('Secondary Navigation', 'aves'),
		'mobile_navigation' => __('Mobile Navigation', 'aves')
	]);

	// Enable post thumbnails
	// http://codex.wordpress.org/Post_Thumbnails
	// http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
	// http://codex.wordpress.org/Function_Reference/add_image_size
	add_theme_support('post-thumbnails');

	// Enable post formats
	// http://codex.wordpress.org/Post_Formats
//	add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

	// Enable HTML5 markup support
	// http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
	add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}

}

add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
	register_sidebar([
		'name'          => __('Primary'),
		'id'            => 'sidebar-primary',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);

	register_sidebar([
		'name'          => __('Woocommerce'),
		'id'            => 'Woocommerce',
		'before_widget' => '<section class="widget %1$s %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Theme assets
 */
	 
function assets() {
	wp_enqueue_style('aves/css', Assets\asset_path('dist/main.css'), array(), '1.1' );
	wp_enqueue_style('slick', Assets\asset_path('js/modules/slick.css'), false, null);
	wp_enqueue_script('aves/barba', Assets\asset_path('js/modules/barba.min.js'), false, null);
	wp_enqueue_script('insta', '//platform.instagram.com/en_US/embeds.js', array(), '3', true);
	wp_enqueue_script('aves/js', Assets\asset_path('dist/bundle.js'), false, null);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);