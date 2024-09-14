<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Reusable functions.
 *
 * @package Wp_Block_Theme_Boilerplate
 * @since 1.0.0
 * @author     codersantosh <codersantosh@gmail.com>
 */

if ( ! function_exists( 'wp_block_theme_boilerplate_get_recommended_plugins' ) ) :
	/**
	 * Get the list of recommended plugins.
	 *
	 * @since 1.0.0
	 *
	 * @return array Recommended plugins
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_get_recommended_plugins() {
		$plugins = array(
			// This is an example of how to include a plugin from the WordPress Plugin Repository.
			array(
				'name'   => esc_html__( 'Gutentor', 'wp-block-theme-boilerplate' ), // The plugin name.
				'slug'   => 'gutentor', // The plugin slug (eg: gutentor is the plugin slug https://wordpress.org/plugins/gutentor).
				'plugin' => 'gutentor/gutentor.php', // The plugin folder and main file.
				'url'    => 'https://www.gutentor.com/', // // The plugin full url(optional).
			),
			array(
				'name'   => esc_html__( 'Templateberg', 'wp-block-theme-boilerplate' ), // The plugin name.
				'slug'   => 'templateberg', // The plugin slug (eg: gutentor is the plugin slug https://wordpress.org/plugins/templateberg).
				'plugin' => 'templateberg/templateberg.php', // The plugin folder and main file.
				'source' => 'https://downloads.wordpress.org/plugin/templateberg.1.1.8.zip', // Zip file URL of the plugin. Not allowed for theme in WordPress dot org.
			),
		);

		return apply_filters( 'wp_block_theme_boilerplate_recommended_plugins', $plugins );
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_is_plugin_active' ) ) {
	/**
	 * Checks if a given plugin is active.
	 *
	 * @since 1.0.0
	 *
	 * @param string $plugin Plugin folder with main file e.g., my-plugin/my-plugin.php.
	 * @return bool True if the plugin is active, otherwise false.
	 */
	function wp_block_theme_boilerplate_is_plugin_active( $plugin ) {
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
		return is_plugin_active( $plugin );
	}
}

if ( ! function_exists( 'wp_block_theme_boilerplate_install_plugin' ) ) {
	/**
	 * Install and activate a WordPress plugin.
	 *
	 * @param array $plugin_info Plugin information array containing 'name', 'slug', 'plugin', and 'source'(optional).
	 * @return array Associative array with 'success' boolean and 'message' string.
	 */
	function wp_block_theme_boilerplate_install_plugin( $plugin_info ) {
		if ( ! isset( $plugin_info ['name'] ) || ! isset( $plugin_info ['slug'] ) || ! isset( $plugin_info ['plugin'] ) ) {
			// Not enough plugin info.
			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %s the plugin info */
					esc_html__( 'Not enough information about plugin. Plugin info %s', 'wp-block-theme-boilerplate' ),
					esc_html( wp_json_encode( $plugin_info ) )
				),
			);
		}

		$name   = sanitize_text_field( $plugin_info['name'] );
		$slug   = sanitize_key( $plugin_info['slug'] );
		$plugin = sanitize_text_field( $plugin_info['plugin'] );
		$source = isset( $plugin_info['source'] ) ? esc_url_raw( $plugin_info['source'] ) : '';

		include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		include_once ABSPATH . 'wp-admin/includes/plugin-install.php';
		include_once ABSPATH . 'wp-admin/includes/plugin.php';

		if ( wp_block_theme_boilerplate_is_plugin_active( $plugin ) ) {
			// Plugin is already active.
			return array(
				'success' => true,
				'message' => sprintf(
					/* translators: %s is the plugin name */
					esc_html__( 'Plugin "%s" is already active.', 'wp-block-theme-boilerplate' ),
					esc_html( $name )
				),
			);
		}

		// The plugin is installed, but not active.
		if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin ) ) {
			$plugin_data = get_plugin_data( WP_PLUGIN_DIR . '/' . $plugin );

			if ( wp_block_theme_boilerplate_is_plugin_active( $plugin ) ) {
				// Plugin is already active.
				return array(
					'success' => true,
					'message' => sprintf(
						/* translators: %s is the plugin name */
						esc_html__( 'Plugin "%s" is already active.', 'wp-block-theme-boilerplate' ),
						esc_html( $name )
					),
				);
			}
			if ( current_user_can( 'activate_plugin', $plugin ) ) {
				$result = activate_plugin( $plugin );

				if ( is_wp_error( $result ) ) {
					// Plugin is already active.
					return array(
						'success' => false,
						'message' => sprintf(
							/* translators: %1$s is the plugin name, %2$s is error message */
							esc_html__( 'Error activating plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
							esc_html( $name ),
							esc_html( $result->get_error_message() )
						),
					);
				}

				return array(
					'success' => true,
					'message' => sprintf(
						/* translators: %s is the plugin name.*/
						esc_html__( 'Plugin "%s" activated successfully.', 'wp-block-theme-boilerplate' ),
						esc_html( $name ),
					),
				);
			} else {
				return array(
					'success' => false,
					'message' => sprintf(
						/* translators: %s is the plugin name.*/
						esc_html__( 'You don\'t have permission to activate the plugin "%s".', 'wp-block-theme-boilerplate' ),
						esc_html( $name ),
					),
				);
			}
		}

		if ( $source ) {
			// Install plugin from external source.
			$download_link = $source;
		} else {
			// Install plugin from WordPress repository.
			$api = plugins_api(
				'plugin_information',
				array(
					'slug'   => $slug,
					'fields' => array( 'sections' => false ),
				)
			);

			if ( is_wp_error( $api ) ) {
				return array(
					'success' => false,
					'message' => sprintf(
						/* translators: %1$s is the plugin name, %2$s is error message */
						esc_html__( 'Error retrieving information for plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
						esc_html( $name ),
						esc_html( $result->get_error_message() )
					),
				);
			}

			$download_link = $api->download_link;
		}

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $download_link );

		if ( is_wp_error( $result ) ) {
			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %1$s is the plugin name, %2$s is error message */
					esc_html__( 'Error installing plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
					esc_html( $result->get_error_message() )
				),
			);
		} elseif ( is_wp_error( $skin->result ) ) {
			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %1$s is the plugin name, %2$s is error message */
					esc_html__( 'Error installing plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
					esc_html( $skin->result->get_error_message() )
				),
			);
		} elseif ( $skin->get_errors()->get_error_code() ) {
			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %1$s is the plugin name, %2$s is error message */
					esc_html__( 'Error installing plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
					esc_html( $skin->get_error_messages() )
				),
			);
		} elseif ( is_null( $result ) ) {
			require_once ABSPATH . 'wp-admin/includes/file.php';
			WP_Filesystem();
			global $wp_filesystem;

			$error_message = __( 'Unable to connect to the filesystem. Please confirm your credentials.', 'wp-block-theme-boilerplate' );

			if ( $wp_filesystem instanceof WP_Filesystem_Base && is_wp_error( $wp_filesystem->errors ) && $wp_filesystem->errors->get_error_code() ) {
				$error_message = $wp_filesystem->errors->get_error_message();
			}

			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %1$s is the plugin name, %2$s is error message */
					esc_html__( 'Error installing plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
					esc_html( $error_message )
				),
			);
		}

		if ( wp_block_theme_boilerplate_is_plugin_active( $plugin ) ) {
			// Plugin is already active.
			return array(
				'success' => true,
				'message' => sprintf(
					/* translators: %s is the plugin name.*/
					esc_html__( 'Plugin "%s" activated successfully.', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
				),
			);
		}

		if ( current_user_can( 'activate_plugin', $plugin ) ) {
			$result = activate_plugin( $plugin );

			if ( is_wp_error( $result ) ) {
				return array(
					'success' => false,
					'message' => sprintf(
					/* translators: %1$s is the plugin name, %2$s is error message */
						esc_html__( 'Error activating plugin "%1$s": %2$s', 'wp-block-theme-boilerplate' ),
						esc_html( $name ),
						esc_html( $result->get_error_message() )
					),
				);
			}
		} else {
			return array(
				'success' => false,
				'message' => sprintf(
					/* translators: %s is the plugin name.*/
					esc_html__( 'You don\'t have permission to activate the plugin "%s".', 'wp-block-theme-boilerplate' ),
					esc_html( $name ),
				),
			);
		}

		return array(
			'success' => true,
			'message' => sprintf(
				/* translators: %s is the plugin name.*/
				esc_html__( 'Plugin "%s" installed and activated successfully.', 'wp-block-theme-boilerplate' ),
				esc_html( $name ),
			),
		);
	}
}

if ( ! function_exists( 'wp_block_theme_boilerplate_get_plugin_names' ) ) :
	/**
	 * Get the list of recommended plugins names.
	 *
	 * @since 1.0.0
	 *
	 * @return string user friendly plugins names
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_get_plugin_names() {
		$plugins = wp_block_theme_boilerplate_get_recommended_plugins();
		$names   = array();

		foreach ( $plugins as $plugin ) {
			if ( ! wp_block_theme_boilerplate_is_plugin_active( $plugin['plugin'] ) ) {
				$names[] = $plugin['name'];
			}
		}

		$count = count( $names );

		$names_string = '';
		if ( $count ) {
			if ( $count > 1 ) {
				$last_name     = array_pop( $names );
				$names_string  = implode( ', ', $names );
				$names_string .= ' ' . esc_html__( 'and', 'wp-block-theme-boilerplate' ) . ' ' . $last_name;
			} else {
				$names_string = $names[0];
			}
		}

		return $names_string;
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_default_options' ) ) :
	/**
	 * Get the Theme Default Options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default Options
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_default_options() {
		$default_theme_options = array(
			'hide_get_started_notice'   => false,
			'theme_installed_date_time' => time(),
		);

		return apply_filters( 'wp_block_theme_boilerplate_default_options', $default_theme_options );
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_get_options' ) ) :

	/**
	 * Get the Theme Saved Options.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key optional option key.
	 *
	 * @return mixed All Options Array Or Options Value
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_get_options( $key = '' ) {
		$options = get_option( WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME );

		$default_options = wp_block_theme_boilerplate_default_options();

		if ( ! empty( $key ) ) {
			if ( isset( $options[ $key ] ) ) {
				return $options[ $key ];
			}
			return isset( $default_options[ $key ] ) ? $default_options[ $key ] : false;
		} else {
			if ( ! is_array( $options ) ) {
				$options = array();
			}

			return array_merge( $default_options, $options );
		}
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_update_options' ) ) :
	/**
	 * Update the Theme Options.
	 *
	 * @since 1.0.0
	 *
	 * @param string|array $key_or_data array of options or single option key.
	 * @param string       $val value of option key.
	 *
	 * @return mixed All Options Array Or Options Value
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_update_options( $key_or_data, $val = '' ) {
		if ( is_string( $key_or_data ) ) {
			$options                 = wp_block_theme_boilerplate_get_options();
			$options[ $key_or_data ] = $val;
		} else {
			$options = $key_or_data;
		}
		update_option( WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME, $options );
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_default_user_meta' ) ) :
	/**
	 * Get the User Default Meta.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default User Meta
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_default_user_meta() {
		$default_user_meta = array(
			'remove_review_notice_permanently'         => false,
			'remove_review_notice_temporary_date_time' => time(),
		);

		return apply_filters( 'wp_block_theme_boilerplate_default_user_meta', $default_user_meta );
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_get_user_meta' ) ) :
	/**
	 * Get the User Meta.
	 *
	 * @since 1.0.0
	 *
	 * @param int    $user_id User ID.
	 * @param string $key optional meta key.
	 *
	 * @return mixed All Meta Value related to the theme only.
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_get_user_meta( $user_id, $key = '' ) {
		$options = get_user_meta( $user_id, WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME, true );

		$default_options = wp_block_theme_boilerplate_default_user_meta();

		if ( ! empty( $key ) ) {
			if ( isset( $options[ $key ] ) ) {
				return $options[ $key ];
			}
			return isset( $default_options[ $key ] ) ? $default_options[ $key ] : false;
		} else {
			if ( ! is_array( $options ) ) {
				$options = array();
			}

			return array_merge( $default_options, $options );
		}
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_update_user_meta' ) ) :
	/**
	 * Update the User Meta.
	 *
	 * @since 1.0.0
	 *
	 * @param int          $user_id User ID.
	 * @param string|array $key_or_data Meta key or array of meta key-value pairs.
	 * @param string|mixed $val Value of meta key if $key_or_data is string.
	 *
	 * @return bool True on successful update, false on failure.
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_update_user_meta( $user_id, $key_or_data, $val = '' ) {
		$options = wp_block_theme_boilerplate_get_user_meta( $user_id );

		if ( is_string( $key_or_data ) ) {
			$options[ $key_or_data ] = $val;
		} elseif ( is_array( $key_or_data ) ) {
			$options = array_merge( $options, $key_or_data );
		}

		return update_user_meta( $user_id, WP_BLOCK_THEME_BOILERPLATE_OPTION_NAME, $options );
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_file_system' ) ) {
	/**
	 *
	 * WordPress file system wrapper
	 *
	 * @since 1.0.0
	 *
	 * @return string|WP_Error directory path or WP_Error object if no permission
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_file_system() {
		global $wp_filesystem;
		if ( ! $wp_filesystem ) {
			require_once ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'file.php';
		}

		WP_Filesystem();
		return $wp_filesystem;
	}
}

if ( ! function_exists( 'wp_block_theme_boilerplate_parse_changelog' ) ) {
	/**
	 * Parse changelog
	 *
	 * @since 1.0.0
	 * @return string
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_parse_changelog() {

		$wp_filesystem = wp_block_theme_boilerplate_file_system();

		$changelog_file = apply_filters( 'wp_block_theme_boilerplate_changelog_file', WP_BLOCK_THEME_BOILERPLATE_PATH . 'readme.txt' );

		/*Check if the changelog file exists and is readable.*/
		if ( ! $changelog_file || ! is_readable( $changelog_file ) ) {
			return '';
		}

		$content = $wp_filesystem->get_contents( $changelog_file );

		if ( ! $content ) {
			return '';
		}

		$matches   = null;
		$regexp    = '~==\s*Changelog\s*==(.*)($)~Uis';
		$changelog = '';

		if ( preg_match( $regexp, $content, $matches ) ) {
			$changes = explode( '\r\n', trim( $matches[1] ) );

			foreach ( $changes as $index => $line ) {
				$changelog .= wp_kses_post( preg_replace( '~(=\s*Version\s*(\d+(?:\.\d+)+)\s*=|$)~Uis', '', $line ) );
			}
		}

		return wp_kses_post( $changelog );
	}
}

if ( ! function_exists( 'wp_block_theme_boilerplate_get_theme_faq' ) ) :
	/**
	 * Get FAQ for this theme.
	 * It is used on the theme page.
	 *
	 * @since 1.0.0
	 * @return array All FAQ.
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_get_theme_faq() {
		$faq = array(
			array(
				'q' => esc_html__( 'How can I customize the theme header?', 'wp-block-theme-boilerplate' ),
				'a' => esc_html__( 'You can customize the theme header by editing the Header template part in the Site Editor. Go to Appearance > Editor > Patterns > Header, then select and edit the Header template part.', 'wp-block-theme-boilerplate' ),
			),
			array(
				'q' => esc_html__( 'How do I change the footer credits?', 'wp-block-theme-boilerplate' ),
				'a' => esc_html__( 'To change the footer credits, go to  Appearance > Editor > Patterns > Footer, then select and edit the Footer template part. You can add your own text or remove the existing credits.', 'wp-block-theme-boilerplate' ),
			),
			array(
				'q' => esc_html__( 'Does this theme support block patterns?', 'wp-block-theme-boilerplate' ),
				'a' => esc_html__( 'Yes, this theme includes several pre-designed block patterns that you can use to quickly create layouts. You can find these patterns in the block inserter.', 'wp-block-theme-boilerplate' ),
			),
			array(
				'q' => esc_html__( 'How can I create custom templates?', 'wp-block-theme-boilerplate' ),
				'a' => esc_html__( 'You can create custom templates by going to Appearance > Editor > Templates, then click Add New Template. You can then design your custom template using blocks.', 'wp-block-theme-boilerplate' ),
			),
			array(
				'q' => esc_html__( 'How do I use global styles?', 'wp-block-theme-boilerplate' ),
				'a' => esc_html__( 'To use global styles, go to Appearance > Editor > Styles, then click on the Edit icon in the top right side of Styles. From there, you can customize the colors, typography, and layout for your entire site.', 'wp-block-theme-boilerplate' ),
			),
		);
		return apply_filters(
			'wp_block_theme_boilerplate_faq',
			$faq
		);
	}
endif;

if ( ! function_exists( 'wp_block_theme_boilerplate_is_pro_active' ) ) {
	/**
	 *
	 * Check if premium version of the theme is active.
	 *
	 * @since 1.0.0
	 *
	 * @return boolean true if the theme is active otherwise false.
	 *
	 * @author     codersantosh <codersantosh@gmail.com>
	 */
	function wp_block_theme_boilerplate_is_pro_active() {
		return function_exists( 'wp_block_theme_boilerplate_pro_run' );
	}
}
