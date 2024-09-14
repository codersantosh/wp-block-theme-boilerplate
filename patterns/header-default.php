<?php
/**
 * Title: Header Default
 * Slug: wp-block-theme-boilerplate/header-default
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A pattern for displaying the site header.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:10px;padding-bottom:10px"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="margin-top:0px;margin-bottom:0px"><strong><?php esc_html_e( 'WP Block Theme Boilerplate : ', 'wp-block-theme-boilerplate' ); ?></strong><?php esc_html_e( 'Complete your website with millions of Patterns, Templates &amp; Many more.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"default","className":"is-style-outline","style":{"spacing":{"padding":{"top":"6px","bottom":"6px"}},"typography":{"fontSize":"13px"}},"borderColor":"default"} -->
<div class="wp-block-button has-custom-font-size is-style-outline" style="font-size:13px"><a class="wp-block-button__link has-default-color has-text-color has-border-color has-default-border-color wp-element-button" style="padding-top:6px;padding-bottom:6px"><?php esc_html_e( 'Get Unlimited Downloads', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"35px","bottom":"35px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:35px;padding-bottom:35px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fixed","flexSize":"180px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"> 
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/navigation-menu"} /-->
<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"spacing":{"padding":{"left":"30px","right":"30px","top":"10px","bottom":"10px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" style="padding-top:10px;padding-right:30px;padding-bottom:10px;padding-left:30px"><?php esc_html_e( 'Get Started', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
