<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class used to install a plugin via the REST API.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Install_Plugin
 */

/**
 * Class used to install a plugin via the REST API.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Install_Plugin
 * @author     codersantosh <codersantosh@gmail.com>
 *
 * @see Wp_Block_Theme_Boilerplate_Api
 */
if ( ! class_exists( 'Wp_Block_Theme_Boilerplate_Install_Plugin ' ) ) {

	/**
	 * Wp_Block_Theme_Boilerplate_Install_Plugin
	 *
	 * @package Wp_Block_Theme_Boilerplate
	 * @since 1.0.0
	 */
	class Wp_Block_Theme_Boilerplate_Install_Plugin extends Wp_Block_Theme_Boilerplate_Api {

		/**
		 * Initialize the class and set up actions.
		 *
		 * @access public
		 * @return void
		 */
		public function run() {
			$this->type      = 'wp_block_theme_boilerplate_api_install_plugin';
			$this->rest_base = 'install-plugin';

			/*Custom Rest Routes*/
			add_action( 'rest_api_init', array( $this, 'register_routes' ) );
		}

		/**
		 * Register REST API route.
		 *
		 * @since    1.0.0
		 */
		public function register_routes() {
			$namespace = $this->namespace . $this->version;

			register_rest_route(
				$namespace,
				'/' . $this->rest_base,
				array(
					array(
						'methods'             => WP_REST_Server::EDITABLE,
						'callback'            => array( $this, 'install_plugin' ),
						'args'                => array(
							'slug'   => array(
								'required' => true,
								'type'     => 'string',
							),
							'plugin' => array(
								'required' => true,
								'type'     => 'string',
							),
						),
						'permission_callback' => array( $this, 'install_plugin_permissions_check' ),
					),
				)
			);
		}

		/**
		 * Checks if a given request has access to install plugins.
		 *
		 * @since 1.0.0
		 *
		 * @param WP_REST_Request $request Full details about the request.
		 * @return bool True if the request has install permissions, otherwise false.
		 */
		public function install_plugin_permissions_check( $request ) {
			return current_user_can( 'install_plugins' );
		}

		/**
		 * Installs and activates a plugin.
		 *
		 * @since 1.0.0
		 *
		 * @param WP_REST_Request $request Full details about the request.
		 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure.
		 */
		public function install_plugin( $request ) {
			return rest_ensure_response( wp_block_theme_boilerplate_install_plugin( $request->get_params() ) );
		}

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
	}
}

/**
 * Return instance of  Wp_Block_Theme_Boilerplate_Install_Plugin  class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Install_Plugin
 */
function wp_block_theme_boilerplate_api_install_plugin() { //phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Install_Plugin::get_instance();
}
wp_block_theme_boilerplate_api_install_plugin()->run();
