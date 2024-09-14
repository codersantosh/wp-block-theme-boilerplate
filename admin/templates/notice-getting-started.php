<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Intro
 */
?>
<div id="companydomain-wbtb-gsn" class="updated notice-info companydomain-wbtb-gsn at-pos">
	<button class="companydomain-wbtb-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'wp-block-theme-boilerplate' ); ?>
	</button>
	<div class="companydomain-wbtb-gsn-container at-flx at-gap at-p">
		<img class="companydomain-wbtb-gsn-screenshot at-w" src="<?php echo esc_url( WP_BLOCK_THEME_BOILERPLATE_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'WP Bock Theme Boilerplate', 'wp-block-theme-boilerplate' ); ?>" />
		<div class="companydomain-wbtb-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'wp-block-theme-boilerplate' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( WP_BLOCK_THEME_BOILERPLATE_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = wp_block_theme_boilerplate_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plular . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'wp-block-theme-boilerplate' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'wp-block-theme-boilerplate' ) : esc_html__( 'plugin', 'wp-block-theme-boilerplate' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="companydomain-wbtb-btn-primary button button-primary button-hero companydomain-wbtb-install-plugins">
				<?php esc_html_e( 'Get started with WP Bock Theme Boilerplate', 'wp-block-theme-boilerplate' ); ?>
			</button>
		</div>
	</div>
</div>
