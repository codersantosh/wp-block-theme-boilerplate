<?php
/**
 * Title: Page Left Sidebar
 * Slug: wp-block-theme-boilerplate/single-page-left-sidebar
 * Template Types: singular, page
 * Description: A layout template for displaying a page with a left sidebar.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-default","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:template-part {"slug":"single-header", "align":"full"} /-->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"},"blockGap":{"left":"80px"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:80px;padding-bottom:80px">

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:template-part {"slug":"primary-sidebar"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->