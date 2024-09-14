<?php
/**
 * Title: Search Page Full Width
 * Slug: wp-block-theme-boilerplate/list-search-full-width
 * Template Types: search
 * Description: Full-width layout template for displaying a list of posts without sidebars.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->


<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"list-search-header", "align":"full"} /-->
	<!-- wp:spacer {"height":"80px"} -->
	<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/query-list-min"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->