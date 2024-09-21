<?php
/**
 * Title: Archive Page Header
 * Slug: wp-block-theme-boilerplate/list-archive-header
 * Categories: header
 * Block Types: core/template-part/list-archive-header
 * Description: Layout template for displaying the header of an archive page.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-banner.jpg","id":2180,"hasParallax":true,"dimRatio":50,"overlayColor":"quaternary","isDark":false,"align":"full","style":{"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull is-light has-parallax">
		<span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim"></span>
		<div role="img" class="wp-block-cover__image-background wp-image-2180 has-parallax"
			style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-banner.jpg)">
		</div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:heading {"metadata":{"bindings":{"content":{"source":"wp-block-theme-boilerplate/archive-title","args":{"key":"archive-title"}}}}, "textAlign":"center","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-center has-default-color has-text-color has-xx-large-font-size" style="text-transform:capitalize"></h1>
			<!-- /wp:heading -->
		</div>
	</div>
<!-- /wp:cover -->
