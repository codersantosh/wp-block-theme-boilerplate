<?php
/**
 * Title: Site Identity
 * Slug: wp-block-theme-boilerplate/site-identity
 * Categories: posts
 * Description: Display site logo, title and tagline.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":40,"shouldSyncIcon":true} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"},"layout":{"selfStretch":"fixed","flexSize":"180px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
	<div class="wp-block-group"><!-- wp:site-title /-->

		<!-- wp:site-tagline /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
