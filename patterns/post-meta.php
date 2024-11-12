<?php
/**
 * Title: Post Meta
 * Slug: wp-block-theme-boilerplate/post-meta
 * Categories: posts
 * Block Types: core/template-part/post-meta
 * Description: Display post meta information, commonly used within a query block.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0.5rem","bottom":"2rem"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0.5rem;margin-bottom:2rem"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"typography":{"fontSize":"14px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'Posted :', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-date {"format":"M j, Y","isLink":true} /--></div>
<!-- /wp:group -->
<!-- wp:post-terms {"term":"category","prefix":"in : "} /-->
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"typography":{"fontSize":"14px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="font-size:14px"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0px"}}},"textColor":"tertiary"} -->
<p class="has-tertiary-color has-text-color" style="margin-bottom:0px"><?php esc_html_e( 'by :', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:post-author {"showAvatar":false,"isLink":true,"className":"pwp-txt-dec-non"} /--></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"blockGap":"5px"},"typography":{"fontSize":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="font-size:14px">
<!-- wp:post-terms {"term":"post_tag","prefix":"Tags :"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
