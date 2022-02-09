<?php
/**
 * WP-Blank-Theme functions and definitions.
 *
 * This file is read by WordPress to setup the theme and his additional
 * features.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package   WP-Blank-Theme
 * @author    Armand Philippot <contact@armandphilippot.com>
 * @copyright 2022 Armand Philippot
 * @license   GPL-2.0-or-later
 * @since     1.0.0
 */

/**
 * Currently theme version.
 */
define( 'WPBT_VERSION', '1.0.0' );

if ( ! function_exists( 'wpbt_setup' ) ) {
	/**
	 * Setup WP-Blank-Theme theme and registers support for various WordPress
	 * features.
	 *
	 * @since 1.0.0
	 */
	function wpbt_setup() {
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'width'       => 150,
				'height'      => 150,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );
	}
}
add_action( 'after_setup_theme', 'wpbt_setup' );
