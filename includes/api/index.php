<?php //phpcs:ignore
/**
 * Includes necessary files
 *
 * @package Wp_Block_Theme_Boilerplate
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once trailingslashit( __DIR__ ) . 'class-api.php';
require_once trailingslashit( __DIR__ ) . 'class-api-install-plugin.php';
require_once trailingslashit( __DIR__ ) . 'class-api-settings.php';
