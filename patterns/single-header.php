<?php
/**
 * Title: Page Header With Post Title
 * Slug: wp-block-theme-boilerplate/single-header
 * Block Types: core/template-part/single-header
 * Description: Page header that displays the post, page or post type title.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-banner.jpg","id":2180,"hasParallax":true,"dimRatio":80,"isUserOverlayColor":true,"customGradient":"linear-gradient(135deg,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--primary) 59%)","align":"full","style":{"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull has-parallax">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(135deg,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--primary) 59%)"></span>
		<div role="img" class="wp-block-cover__image-background wp-image-2180 has-parallax"
			style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-banner.jpg)">
		</div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"capitalize"}},"textColor":"default","fontSize":"xx-large"} /-->
		</div>
	</div>
<!-- /wp:cover -->
