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
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
    <div class="wp-block-group"
        style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"default","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-default-color has-text-color has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--10);font-style:normal;font-weight:700"><?php esc_html_e( 'Try it now !', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->


<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontSize":"small","lineHeight":"1.7"}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.7"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->


<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Try for Free', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
