<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The public-facing functionality of the theme.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/public
 */

/**
 * The public-facing functionality of the theme.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/public
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Wp_Block_Theme_Boilerplate_Public {

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @return object
	 * @since 1.0.0
	 */
	public static function get_instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only run these methods if they haven't been ran previously.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Initialize the class.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Register the JavaScript and stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {
		/* Atomic CSS */
		wp_enqueue_style( 'atomic' );
		wp_style_add_data( 'atomic', 'rtl', 'replace' );

		$version = WP_BLOCK_THEME_BOILERPLATE_VERSION;

		wp_enqueue_style( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/public/public.css', array(), $version );
		wp_style_add_data( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, 'rtl', 'replace' );

		/*Scripts dependency files*/
		$deps_file = WP_BLOCK_THEME_BOILERPLATE_PATH . 'build/public/public.asset.php';

		/*Fallback dependency array*/
		$dependency = array();

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/public/public.js', $dependency, $version, true );
		wp_set_script_translations( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, WP_BLOCK_THEME_BOILERPLATE_THEME_NAME );

		$localize = apply_filters(
			'wp_block_theme_boilerplate_public_localize',
			array(
				'WP_BLOCK_THEME_BOILERPLATE_URL' => WP_BLOCK_THEME_BOILERPLATE_URL,
				'home_url'                       => esc_url( home_url() ),
				'rest_url'                       => get_rest_url(),
				'nonce'                          => wp_create_nonce( 'wp_rest' ),
			)
		);

		wp_add_inline_script(
			WP_BLOCK_THEME_BOILERPLATE_THEME_NAME,
			sprintf(
				"var WpBlockThemeBoilerplateLocalize = JSON.parse( decodeURIComponent( '%s' ) );",
				rawurlencode(
					wp_json_encode(
						$localize
					)
				),
			),
			'before'
		);
	}
}

/**
 * Return instance of  Wp_Block_Theme_Boilerplate_Public class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Public
 */
function wp_block_theme_boilerplate_public() {//phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Public::get_instance();
}
wp_block_theme_boilerplate_public()->run();
