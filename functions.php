<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WP Bock Theme Boilerplate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP Bock Theme Boilerplate
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'WP_BLOCK_THEME_BOILERPLATE_PATH', trailingslashit( get_template_directory() ) );
define( 'WP_BLOCK_THEME_BOILERPLATE_URL', trailingslashit( get_template_directory_uri() ) );
define( 'WP_BLOCK_THEME_BOILERPLATE_VERSION', '1.0.0' );
define( 'WP_BLOCK_THEME_BOILERPLATE_THEME_NAME', 'wp-block-theme-boilerplate' );
define( 'WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME', 'wp-block-theme-boilerplate' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require WP_BLOCK_THEME_BOILERPLATE_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function wp_block_theme_boilerplate_run() {
	new Wp_Block_Theme_Boilerplate();
}
wp_block_theme_boilerplate_run();
