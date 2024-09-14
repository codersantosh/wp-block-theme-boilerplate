<?php
/**
 * Title: Section Title 2
 * Slug: wp-block-theme-boilerplate/section-title-2
 * Categories: text, featured
 * Description: A layout featuring a title, content, and button group in left alignment, commonly used for section titles in feature areas.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull ">

<!-- wp:heading {"style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"800","lineHeight":"1"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color" style="margin-bottom:20px;font-size:36px;font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'An award winning agency specialized in web design', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->


<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"fontSize":"16px","lineHeight":"1.5"}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-bottom:40px;font-size:16px;line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->


<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Try for Free', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
