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
<!-- wp:group {"align":"full","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"right":"0px","left":"0px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:0px;padding-left:0px">

<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'An award winning agency specialized in web design', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-link-color has-small-font-size"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Try for Free', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
