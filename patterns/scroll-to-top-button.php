<?php
/**
 * Title: Scroll To Top Button
 * Slug: wp-block-theme-boilerplate/scroll-to-top-button
 * Categories: buttons
 * Block Types: core/template-part/footer
 * Description: Display a button to scroll to the top of the page.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"default","className":"is-style-scroll-to-top","style":{"elements":{"link":{"color":{"text":"var:preset|color|default"}}},"border":{"radius":"50px"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}}},"fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-scroll-to-top has-medium-font-size"><a class="wp-block-button__link has-default-color has-text-color has-link-color wp-element-button" style="border-radius:50px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><?php esc_html_e( 'Scroll To Top', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
