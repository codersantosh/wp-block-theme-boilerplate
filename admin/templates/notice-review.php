<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme reivew notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/Wp_Block_Theme_Boilerplate_Intro
 */

global $current_user;
?>
<div id='companydomain-wbtb-review-notice' class="notice updated companydomain-wbtb-review-notice at-p at-pos">
	<button class="companydomain-wbtb-rn-permanent-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'wp-block-theme-boilerplate' ); ?>
	</button>
	<p>
		<?php
		printf(
		/* Translators: %1$s current user display name. */
			esc_html__(
				'Howdy, %1$s! It seems that you have been using this theme for more than 15 days. We hope you are happy with everything that the theme has to offer. If you can spare a minute, please help us by leaving a review on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future!',
				'wp-block-theme-boilerplate'
			),
			'<strong>' . esc_html( $current_user->display_name ) . '</strong>'
		);
		?>
	</p>

	<div class="links">
		<a href="https://github.com/codersantosh/wp-block-theme-boilerplate" class="companydomain-wbtb-rn-temporary-close companydomain-wbtb-btn-primary button-primary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-thumbs-up"></span>
			<span><?php esc_html_e( 'Sure', 'wp-block-theme-boilerplate' ); ?></span>
		</a>

		<button class="companydomain-wbtb-rn-temporary-close companydomain-wbtb-btn-secondary button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-calendar"></span>
			<span><?php esc_html_e( 'Maybe later', 'wp-block-theme-boilerplate' ); ?></span>
		</button>

		<button class="companydomain-wbtb-rn-permanent-close companydomain-wbtb-btn-default button-primary at-inl-flx at-al-itm-ctr at-gap">
			<span class="dashicons dashicons-smiley"></span>
			<span><?php esc_html_e( 'I already did', 'wp-block-theme-boilerplate' ); ?></span>
		</button>

		<a href="<?php echo esc_url( 'https://github.com/codersantosh/wp-block-theme-boilerplate' ); ?>" class="companydomain-wbtb-rn-temporary-close button-secondary at-inl-flx at-al-itm-ctr at-gap" target="_blank" rel="noopener noreferrer nofollow">
			<span class="dashicons dashicons-edit"></span>
			<span><?php esc_html_e( 'Got theme support question?', 'wp-block-theme-boilerplate' ); ?></span>
		</a>
	</div>
</div>
