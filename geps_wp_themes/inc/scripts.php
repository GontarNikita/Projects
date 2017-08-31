<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	wp_deregister_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', get_template_directory_uri() . '/js/comment-reply.js', '', '', $in_footer );
	}


	// Loads JavaScript for this theme.
	wp_enqueue_script( 'directory-sripts', get_template_directory_uri() . '/js/common.js', array( 'jquery' ), '', $in_footer );

	// Loads waiponts libs
	wp_enqueue_script( 'waipoint-script', get_template_directory_uri() . '/libs/waypoints/waypoints.min.js', array( 'jquery' ), '', $in_footer );
	// Loads modernize.js
	wp_enqueue_script( 'modernizer-script', get_template_directory_uri() . '/libs/modernizr/modernizr.js', array( 'jquery' ), '', $in_footer );
	// Loads owl carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array( 'jquery' ), '', $in_footer );
	// Loads scroll smooth
	wp_enqueue_script( 'scroll-plugin', get_template_directory_uri() . '/libs/plugins-scroll/plugins-scroll.js', array( 'jquery' ), '', $in_footer );


	// Implementation stylesheet.
	wp_enqueue_style( 'base-theme', get_template_directory_uri() . '/style.css', array() );
	// owl carousel styles
	wp_enqueue_style( 'owl-style', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.css', array() );


}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );