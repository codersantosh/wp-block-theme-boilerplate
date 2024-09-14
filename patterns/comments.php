<?php
/**
 * Title: Comments
 * Slug: wp-block-theme-boilerplate/comments
 * Categories: posts
 * Description: Display post comments.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1320px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:comments -->
<div class="wp-block-comments">
	
<!-- wp:heading {"level":3,"style":{"spacing":{"padding":{"bottom":"20px"},"margin":{"bottom":"0px"}}}} -->
<h3 class="wp-block-heading" style="margin-bottom:0px;padding-bottom:20px"><?php esc_html_e( 'Comments', 'wp-block-theme-boilerplate' ); ?>
</h3>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":5,"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}},"border":{"top":{"color":"#f5f5f5","style":"solid","width":"1px"},"right":{},"bottom":{"color":"#f5f5f5","style":"solid","width":"1px"},"left":{}}}} /-->

<!-- wp:comment-template {"style":{"spacing":{"margin":{"bottom":"30px"},"padding":{"top":"40px","bottom":"40px"}}}} -->
<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"border":{"color":"#f5f5f5","style":"solid","width":"1px"},"spacing":{"padding":{"top":"15px","bottom":"15px","left":"15px","right":"15px"}}}} -->
<div class="wp-block-column has-border-color" style="border-color:#f5f5f5;border-style:solid;border-width:1px;padding-top:15px;padding-right:15px;padding-bottom:15px;padding-left:15px"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"15px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:15px"><!-- wp:comment-date {"format":"M j, Y g:i A"} /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"paginationArrow":"arrow","className":"at-bdr at-p at-comment-pagination","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->
