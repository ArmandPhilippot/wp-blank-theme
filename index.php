<?php
/**
 * The main template.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme. It is used to display a page when nothing
 * more specific matches a query.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP-Blank-Theme
 * @since   1.0.0
 */

wpbt_load_dotenv();

if ( isset( $_ENV['REDIRECTION_URL'] ) ) {
	wpbt_redirect( $_ENV['REDIRECTION_URL'] );
}
