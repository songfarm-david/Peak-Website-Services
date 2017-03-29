<?php
/**
	* Enqueue parent stylesheet
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
?>
