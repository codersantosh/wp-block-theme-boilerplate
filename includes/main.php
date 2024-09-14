<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The file that defines the core theme class
 *
 * A class definition that primarily includes necessary files for core functions, admin, includes, public, and APIs.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/includes
 */

/**
 * The core theme class.
 *
 * A class definition that primarily includes necessary files for core functions, admin, includes, public, and APIs.
 *
 * @since      1.0.0
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/includes
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Wp_Block_Theme_Boilerplate {

	/**
	 * Define the core functionality of the theme.
	 * Init theme functions.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		$this->load_dependencies();
	}

	/**
	 * Load the required dependencies for this theme.
	 *
	 * Include the following files that make up the theme:
	 *
	 * - includes/functions.php Reusable functions.
	 * - includes/class-include.php The common bothend functionality of the theme.
	 * - includes/api/index.php Manage APIs for this theme.
	 * - admin/index.php Manage actions in the admin area.
	 * - public/index.php Manage actions in the public area.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**Theme Core Functions*/
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'includes/functions.php';

		/**The class responsible for defining all actions that occur in both admin and public area.*/
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'includes/class-include.php';

		/**The class responsible for block bindings.*/
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'includes/class-block-bindings.php';

		/* API */
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'includes/api/index.php';

		/**The class responsible for defining all actions that occur in the admin area.*/
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'admin/index.php';

		/** The class responsible for defining all actions that occur in the public-facing side of the site.*/
		require_once WP_BLOCK_THEME_BOILERPLATE_PATH . 'public/index.php';
	}
}
