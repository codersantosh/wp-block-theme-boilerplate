<?php
/**
 * Title: Single Post
 * Slug: wp-block-theme-boilerplate/hidden-single-post-content
 * Inserter: no
 * Categories: posts
 * Description: A layout that displays single post content with post navigation and comments.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:template-part {"slug":"post-meta","align":"wide"} /-->
		</div>
	<!-- /wp:group -->
	

	<!-- wp:post-content {"className":"pwp-child-reset","align":"full","layout":{"type":"constrained","contentSize":"1320px"}} /-->
	<!-- wp:template-part {"slug":"post-navigation","area":"uncategorized","align":"full"} /-->
	
	<!-- wp:template-part {"slug":"comments","tagName":"section","align":"full"} /-->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
