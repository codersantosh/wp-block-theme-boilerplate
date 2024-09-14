<?php
/**
 * Title: Section Title 1
 * Slug: wp-block-theme-boilerplate/section-title-1
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in centered alignment, commonly used for section titles in feature areas.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"75px","fontStyle":"normal","fontWeight":"800","lineHeight":"0.9"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"base"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="margin-bottom:20px;font-size:75px;font-style:normal;font-weight:800;line-height:0.9"><?php esc_html_e( 'Amazing services to build busines growth', 'wp-block-theme-boilerplate' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"fontSize":"16px","lineHeight":"1.7"}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:40px;font-size:16px;line-height:1.7"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Try for Free', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base","className":"is-style-outline","style":{"border":{"width":"1px"}},"borderColor":"base"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-text-color has-border-color has-base-border-color wp-element-button" style="border-width:1px"><?php esc_html_e( 'See How It works ', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
