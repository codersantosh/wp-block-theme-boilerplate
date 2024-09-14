<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * File for Block Editor.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Editor
 */

/**
 * Class used to add CSS/JavaScript on block editor.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Editor
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Wp_Block_Theme_Boilerplate_Editor {

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
		add_action( 'admin_init', array( $this, 'add_editor_style' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Register the CSS for the block editor.
	 * using add_editor_style because using enqueue_block_editor_assets doesnot work for iframe editors.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function add_editor_style() {
		add_editor_style( array( 'atomic', WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/editor/editor.css' ) );
	}

	/**
	 * Register the CSS/JavaScript Resources for the block editor.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {

		$unique_id = WP_BLOCK_THEME_BOILERPLATE_THEME_NAME . '-editor';

		/*Scripts dependency files*/
		$deps_file = WP_BLOCK_THEME_BOILERPLATE_PATH . 'build/admin/editor/editor.asset.php';

		/*Fallback dependency array*/
		$dependency = array();
		$version    = WP_BLOCK_THEME_BOILERPLATE_VERSION;

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( $unique_id, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/editor/editor.js', $dependency, $version, true );

		/* Localize */
		$localize = apply_filters(
			'wp_block_theme_boilerplate_editor_localize',
			array(
				'version'  => $version,
				'nonce'    => wp_create_nonce( 'wp_rest' ),
				'rest_url' => get_rest_url(),
			)
		);

		wp_set_script_translations( $unique_id, WP_BLOCK_THEME_BOILERPLATE_THEME_NAME );
		wp_localize_script( $unique_id, 'WpBlockThemeBoilerplateLocalize', $localize );
	}
}

/**
 * Return instance of  Wp_Block_Theme_Boilerplate_Editor class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Editor
 */
function wp_block_theme_boilerplate_editor() { //phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Editor::instance();
}
wp_block_theme_boilerplate_editor()->run();
