<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme notice
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Intro
 */

/**
 * Class used to add theme notices and recommended plugin installation.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Intro
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Wp_Block_Theme_Boilerplate_Notice {

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
	 * Add notice, add theme installation time and remove theme options data from databse if theme is switched to another.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {

		add_action( 'admin_notices', array( $this, 'add_notices' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_resources' ) );

		add_action( 'after_switch_theme', array( $this, 'add_theme_data' ) );
		add_action( 'switch_theme', array( $this, 'remove_theme_data' ) );
	}

	/**
	 * Check to load getting started notice.
	 *
	 * @access private
	 * @return boolean true to load or false
	 */
	private function is_load_getting_started() {
		return ! wp_block_theme_boilerplate_include()->get_settings( 'hide_get_started_notice' );
	}

	/**
	 * This function checks whether to load the review notice or not.
	 * It should return false if the notice is permanently removed.
	 * It should also return false if the installation time is less than 15 days.
	 * If the temporary removal period is greater than 15 days, it should return true.
	 * If the temporary removal period is less than 15 days, it should return false.
	 * Finally, it should return true.
	 *
	 * @access private
	 * @return boolean true to load or false
	 */
	private function is_load_review() {

		global $current_user;
		$user_id = $current_user->ID;

		$remove_review_notice_permanently         = wp_block_theme_boilerplate_include()->get_user_meta( $user_id, 'remove_review_notice_permanently' );
		$remove_review_notice_temporary_date_time = wp_block_theme_boilerplate_include()->get_user_meta( $user_id, 'remove_review_notice_temporary_date_time' );

		$theme_installed_date_time = wp_block_theme_boilerplate_include()->get_settings( 'theme_installed_date_time' );
		$current_date_time         = time();
		$days_since_installation   = ( $current_date_time - $theme_installed_date_time ) / ( 60 * 60 * 24 );

		if ( $remove_review_notice_permanently ) {
			return false;
		}

		if ( $days_since_installation < 15 ) {
			return false;
		}

		if ( ! $remove_review_notice_temporary_date_time ) {
			return true;
		}

		$days_since_temporary = ( $current_date_time - $remove_review_notice_temporary_date_time ) / ( 60 * 60 * 24 );

		if ( $days_since_temporary < 15 ) {
			return false;
		}

		return true;
	}

	/**
	 * Check if load CSS/JavaScript Resources
	 *
	 * @access private
	 * @return boolean true to load or false
	 */
	public function is_load_resources() {
		if ( $this->is_load_getting_started() ) {
			return true;
		}
		if ( $this->is_load_review() ) {
			return true;
		}
		return false;
	}

	/**
	 * Register the CSS/JavaScript Resources for the admin area.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {
		if ( ! $this->is_load_resources() ) {
			return;
		}

		$unique_id = WP_BLOCK_THEME_BOILERPLATE_THEME_NAME . '-notice';

		/* Atomic CSS */
		wp_enqueue_style( 'atomic' );
		wp_style_add_data( 'atomic', 'rtl', 'replace' );

		/*Scripts dependency files*/
		$deps_file = WP_BLOCK_THEME_BOILERPLATE_PATH . 'build/admin/notice/notice.asset.php';

		/*Fallback dependency array*/
		$dependency = array();
		$version    = WP_BLOCK_THEME_BOILERPLATE_VERSION;

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( $unique_id, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/notice/notice.js', $dependency, $version, true );
		wp_enqueue_style( $unique_id, WP_BLOCK_THEME_BOILERPLATE_URL . 'build/admin/notice/notice.css', array(), $version );
		wp_style_add_data( $unique_id, 'rtl', 'replace' );

		/* Localize */
		$localize = apply_filters(
			'wp_block_theme_boilerplate_notice_localize',
			array(
				'version'             => $version,
				'nonce'               => wp_create_nonce( 'wp_rest' ),
				'rest_url'            => get_rest_url(),
				'recommended_plugins' => wp_block_theme_boilerplate_get_recommended_plugins(),
				'theme_info_url'      => esc_url( menu_page_url( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, false ) ),
			)
		);

		wp_set_script_translations( $unique_id, WP_BLOCK_THEME_BOILERPLATE_THEME_NAME );
		wp_localize_script( $unique_id, 'WpBlockThemeBoilerplateLocalize', $localize );
	}

	/**
	 * Get Started Notice
	 * Active callback of admin_notices
	 * return void
	 */
	public function add_notices() {
		if ( $this->is_load_getting_started() ) {
			require_once 'templates/notice-getting-started.php';
		}
		if ( $this->is_load_review() ) {
			require_once 'templates/notice-review.php';
		}
	}

	/**
	 * Add default data to the theme.
	 *
	 * Active callback of after_switch_theme
	 * return void
	 */
	public function add_theme_data() {
		$theme_installed_date_time = wp_block_theme_boilerplate_include()->get_settings( 'theme_installed_date_time' );
		if ( ! $theme_installed_date_time ) {
			wp_block_theme_boilerplate_update_options( 'theme_installed_date_time', time() );
		}
	}

	/**
	 * Remove the data set after the theme has been switched to other theme.
	 *
	 * Active callback of switch_theme
	 * return void
	 */
	public function remove_theme_data() {

		// Delete the option for the theme.
		delete_option( WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME );

		// Delete the user meta for all users.
		delete_metadata(
			'user',
			0,
			WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME,
			'',
			true
		);
	}
}

/**
 * Return instance of  Wp_Block_Theme_Boilerplate_Notice class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Notice
 */
function wp_block_theme_boilerplate_notice() { //phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Notice::instance();
}
wp_block_theme_boilerplate_notice()->run();
