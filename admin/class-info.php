<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Menu Page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Info
 */

/**
 * Class used to add theme menu page and content on it.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Info
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Wp_Block_Theme_Boilerplate_Info {

	/**
	 * Current added Menu hook_suffix
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $hook_suffix    Store current added Menu hook_suffix.
	 */
	private $hook_suffix;

	/**
	 * Empty Constructor
	 */
	private function __construct() {}

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @return object
	 */
	public static function instance() {
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
		add_action( 'admin_menu', array( $this, 'add_theme_menu' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Add Theme Page Menu page.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function add_theme_menu() {
		$this->hook_suffix[] = add_theme_page( esc_html__( 'Theme Info', 'wp-block-theme-boilerplate' ), esc_html__( 'Theme Info', 'wp-block-theme-boilerplate' ), 'edit_theme_options', WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, array( $this, 'info_screen' ) );
	}

	/**
	 * Register the CSS/JavaScript Resources for the admin menu.
	 *
	 * @access public
	 * Use Condition to Load it Only When it is Necessary
	 *
	 * @param string $hook_suffix   The current admin page.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources( $hook_suffix ) {
		if ( ! is_array( $this->hook_suffix ) || ! in_array( $hook_suffix, $this->hook_suffix, true ) ) {
			return;
		}

		$unique_id = WP_BLOCK_THEME_BOILERPLATE_THEME_NAME . '-info';

		/* Atomic CSS */
		wp_enqueue_style( 'atomic' );
		wp_style_add_data( 'atomic', 'rtl', 'replace' );

		/*Scripts dependency files*/
		$deps_file = WP_BLOCK_THEME_BOILERPLATE_PATH . 'build/admin/info/info.asset.php';

		/*Fallback dependency array*/
		$dependency = array();
		$version    = WP_BLOCK_THEME_BOILERPLATE_VERSION;

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( $unique_id, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/info/info.js', $dependency, $version, true );

		wp_enqueue_style( $unique_id, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/info/info.css', array(), $version );
		wp_style_add_data( $unique_id, 'rtl', 'replace' );

		/* Localize */
		$localize = apply_filters(
			'wp_block_theme_boilerplate_info_localize',
			array(
				'version'  => $version,
				'nonce'    => wp_create_nonce( 'wp_rest' ),
				'rest_url' => get_rest_url(),
			)
		);

		wp_set_script_translations( $unique_id, WP_BLOCK_THEME_BOILERPLATE_THEME_NAME );
		wp_localize_script( $unique_id, 'WpBlockThemeBoilerplateLocalize', $localize );
	}

	/**
	 * Add menu page.
	 *
	 * @see templates/theme-info.php
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function info_screen() {
		require_once 'templates/page-theme-info.php';
	}
}

/**
 * Return instance of Wp_Block_Theme_Boilerplate_Info class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Info
 */
function wp_block_theme_boilerplate_info() { //phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Info::instance();
}
wp_block_theme_boilerplate_info()->run();
