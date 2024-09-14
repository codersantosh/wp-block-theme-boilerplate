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

require_once trailingslashit( __DIR__ ) . 'class-info.php';
require_once trailingslashit( __DIR__ ) . 'class-notice.php';
require_once trailingslashit( __DIR__ ) . 'class-editor.php';
