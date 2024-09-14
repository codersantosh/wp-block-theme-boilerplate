<?php
/**
 * Title: Landing
 * Slug: wp-block-theme-boilerplate/landing
 * Template Types: front-page
 * Post Types: page
 * Description: A layout template for displaying the main landing front page.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:template-part {"slug":"header-absolute","tagName":"header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"align":"full","layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull">
	<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/hero-banner"} /-->
	<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/featured-section-1"} /-->
	<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/featured-section-2"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
