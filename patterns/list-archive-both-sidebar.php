<?php
/**
 * Title: Archive with Both Sidebars
 * Slug: wp-block-theme-boilerplate/list-archive-both-sidebar
 * Template Types: archive, home, search, category, tag, author, date
 * Description: Layout template for displaying archives with both left and right sidebars.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"list-archive-header", "align":"full"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"},"blockGap":{"left":"80px"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:80px;padding-bottom:80px">

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:template-part {"slug":"secondary-sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/query-list"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:template-part {"slug":"primary-sidebar"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
