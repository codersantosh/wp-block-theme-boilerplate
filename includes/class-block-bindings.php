<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class used to manage block bindings for the theme.
 *
 * @link       https://acmeit.com/
 * @since      1.0.0
 * Requires at least: 6.5.0
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Block_Bindings
 */

/**
 * Block bindings for the theme.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Block_Bindings
 * @author     codersantosh <codersantosh@gmail.com>
 */

if ( ! class_exists( 'Wp_Block_Theme_Boilerplate_Block_Bindings' ) ) {

	/**
	 * Wp_Block_Theme_Boilerplate_Block_Bindings
	 *
	 * @package Wp_Block_Theme_Boilerplate
	 * @since 1.0.0
	 */
	class Wp_Block_Theme_Boilerplate_Block_Bindings {

		/**
		 * Initialize the class and set up actions.
		 * Register block bindings
		 *
		 * @access public
		 * @return void
		 */
		public function run() {
			/*Register block bindings*/
			add_action( 'init', array( $this, 'register_block_bindings' ) );
		}

		/**
		 * Registers copyright source in the block bindings registry.
		 *
		 * @since    1.0.0
		 */
		public function register_block_bindings() {
			if ( ! function_exists( 'register_block_bindings_source' ) ) {
				return;
			}

			/* Register the copyright block binding source. */
			register_block_bindings_source(
				'wp-block-theme-boilerplate/copyright',
				array(
					'label'              => _x( '&copy; YEAR', 'Label for the copyright placeholder in the editor', 'wp-block-theme-boilerplate' ),
					'get_value_callback' => array( $this, 'get_binding_data' ),
				)
			);

			/* Register the archive-title block binding source. */
			register_block_bindings_source(
				'wp-block-theme-boilerplate/archive-title',
				array(
					'label'              => _x( 'Archive title', 'Label for the archive title placeholder in the editor', 'wp-block-theme-boilerplate' ),
					'get_value_callback' => array( $this, 'get_binding_data' ),
				)
			);
		}

		/**
		 * Gets value of binding data.
		 *
		 * @since 1.0.0
		 *
		 * @param array    $source_args    Array containing source arguments used to look up the override value.
		 *                                 Example: array( "key" => "copyright" ).
		 * @param WP_Block $block_instance The block instance.
		 * @return mixed The value computed for the source.
		 */
		public function get_binding_data( array $source_args, $block_instance ) {
			if ( empty( $source_args['key'] ) ) {
				return null;
			}

			$binding_data = null;

			if ( 'copyright' === $source_args['key'] ) {
				/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
				$date_format  = _x( 'Y', 'copyright date format', 'wp-block-theme-boilerplate' );
				$binding_data = sprintf(
					/* translators: 1: Copyright symbol or word, 2: Date, 3: Site title */
					__( '%1$s %2$s %3$s', 'wp-block-theme-boilerplate' ),
					'&copy;',
					wp_date( $date_format ),
					get_bloginfo( 'name' )
				);
			} elseif ( 'archive-title' === $source_args['key'] ) {
				if ( is_archive() ) {
					$binding_data = get_the_archive_title();
				} elseif ( is_search() ) {
					$binding_data = sprintf(
						/* translators: %s is the search term. */
						__( 'Search results for: "%s"', 'wp-block-theme-boilerplate' ),
						get_search_query()
					);
				} elseif ( is_home() ) {
					$binding_data = __( 'Blog', 'wp-block-theme-boilerplate' );
				}
			}

			return apply_filters( 'wp_block_theme_boilerplate_binding_get_binding_data', $binding_data, $source_args, $block_instance );
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
 * Return instance of  Wp_Block_Theme_Boilerplate_Block_Bindings class
 *
 * @since 1.0.0
 *
 * @return Wp_Block_Theme_Boilerplate_Block_Bindings
 */
function wp_block_theme_boilerplate_block_bindings() { //phpcs:ignore
	return Wp_Block_Theme_Boilerplate_Block_Bindings::get_instance();
}
wp_block_theme_boilerplate_block_bindings()->run();
