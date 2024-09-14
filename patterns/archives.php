<?php
/**
 * Title: Archives
 * Slug: wp-block-theme-boilerplate/archives
 * Categories: posts
 * Description: Display a date-based archive of posts, commonly placed in sidebars, footers, or site maps.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:40px">

<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"30px"}}}} -->
<h4 class="wp-block-heading" style="margin-bottom:30px"><?php esc_html_e( 'Archives', 'wp-block-theme-boilerplate' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:archives {"showPostCounts":true} /--></div>
<!-- /wp:group -->
