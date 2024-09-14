<?php
/**
 * Title: Latest Posts
 * Slug: wp-block-theme-boilerplate/latest-posts
 * Categories: posts
 * Description: Display latest posts, commonly placed in sidebars or footers.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px"><!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:30px"><?php esc_html_e( 'Recent Posts', 'wp-block-theme-boilerplate' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":80,"featuredImageSizeHeight":80} /--></div>
<!-- /wp:group -->
