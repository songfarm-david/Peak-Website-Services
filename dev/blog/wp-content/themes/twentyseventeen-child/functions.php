<?php
/**
 * Functions.php for Peak Child Theme (twentyseventeen)
 */

/**
 * Load Child CSS Styles
 */
function enqueue_parent_styles() {
  $parent_style = 'twentyseventeen-style';

	// enqueue parent styles
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

	// enqueue child styles after parent
  wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

/**
 * Load Additional scripts
 */
function load_custom_scripts() {
  /**
   * Load Font Awesome from source
   */
  wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/ff486a1dc9.js' );
}
add_action( 'wp_enqueue_scripts', 'load_custom_scripts' );

/**
 * Load Google Analytics in the Footer
 */
function load_googleAnalytics() {
  include( $_SERVER['DOCUMENT_ROOT'] . '/_includes/include-scripts/google-analytics.php' );
}
add_action( 'wp_footer', 'load_googleAnalytics' );
?>
