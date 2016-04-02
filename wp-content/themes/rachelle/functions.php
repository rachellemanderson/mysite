<?php
/**
 *
 * @package Rachelle
 */

define( 'ASSETS_VERSION', '1.0.1' );

/**
 * Enqueue scripts and styles.
 */
function rachelle_scripts() {
	// wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri() . '/assets/vendor/slick.js/slick/slick.css', array(), ASSETS_VERSION );
	// wp_enqueue_style( 'slick-style-theme', get_stylesheet_directory_uri() . '/assets/vendor/slick.js/slick/slick-theme.css', array( 'slick-style' ), ASSETS_VERSION );
	// wp_enqueue_style( 'fancybox-css', get_stylesheet_directory_uri() . '/assets/vendor/fancybox/source/jquery.fancybox.css', array(), ASSETS_VERSION );
	// wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/vendor/modernizr/modernizr.js', array(), '2.8.3', false );
	// wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendor/slick.js/slick/slick.min.js', array( 'jquery' ), ASSETS_VERSION );
	// wp_enqueue_script( 'js-cookie', get_template_directory_uri() . '/assets/vendor/js-cookie/src/js.cookie.js', array( 'jquery' ), ASSETS_VERSION );
	// wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/assets/vendor/fancybox/source/jquery.fancybox.pack.js', array( 'jquery' ), ASSETS_VERSION );
	// wp_enqueue_script( 'fancybox-media-js', get_template_directory_uri() . '/assets/vendor/fancybox/source/helpers/jquery.fancybox-media.js', array( 'jquery' ), ASSETS_VERSION );
	// wp_enqueue_script( 'jquery-ui-core', get_template_directory_uri() . '/assets/vendor/jquery-ui/ui/minified/core.min.js', array( 'jquery' ), ASSETS_VERSION );	// Dependency for selectboxit
	// wp_enqueue_script( 'jquery-ui-widget', get_template_directory_uri() . '/assets/vendor/jquery-ui/ui/minified/widget.min.js', array( 'jquery', 'jquery-ui-core' ), ASSETS_VERSION );	// Dependency for selectboxit
	// wp_enqueue_script( 'readmore', get_template_directory_uri() . '/assets/vendor/readmore/readmore.min.js', array( 'jquery' ), ASSETS_VERSION );
	if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
		wp_enqueue_style( 'rachelle-style-dev', get_stylesheet_directory_uri() . '/assets/build/styles.css', array(), ASSETS_VERSION );
		wp_enqueue_script( 'rachelle-scripts-dev', get_template_directory_uri() . '/assets/build/scripts.js', array( 'modernizr', 'jquery' ), ASSETS_VERSION, true );
	} else {
		wp_enqueue_style( 'rachelle-style', get_template_directory_uri() . '/assets/dist/styles.min.css', array(), ASSETS_VERSION );
		wp_enqueue_script( 'rachelle-scripts', get_template_directory_uri() . '/assets/dist/scripts.min.js', array( 'modernizr', 'jquery' ), ASSETS_VERSION, true );
	}
	// Comments
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'rachelle_scripts' );
