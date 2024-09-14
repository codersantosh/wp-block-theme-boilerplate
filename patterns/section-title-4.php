<?php
/**
 * Title: Section Title 4
 * Slug: wp-block-theme-boilerplate/section-title-4
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in dark feature areas.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"className":"pw-s-title-6","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group pw-s-title-6"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"default"} -->
<h2 class="wp-block-heading has-text-align-center has-default-color has-text-color" style="margin-bottom:10px;font-size:44px;font-style:normal;font-weight:700"><?php esc_html_e( 'Try it now !', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"fontSize":"16px","lineHeight":"1.7"}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:40px;font-size:16px;line-height:1.7"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Try for Free', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
