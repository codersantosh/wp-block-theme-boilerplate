<?php
/**
 * Title: Page Full Width
 * Slug: wp-block-theme-boilerplate/single-page-full-width
 * Template Types: singular, page
 * Description: A full-width layout template for displaying a page without sidebars.
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
	<!-- wp:post-content {"className":"pwp-child-reset","align":"full","layout":{"type":"constrained"}} /--> 
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
