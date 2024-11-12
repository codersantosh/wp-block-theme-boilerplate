<?php
/**
 * Title: Footer
 * Slug: wp-block-theme-boilerplate/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A pattern for displaying the site footer.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"40px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:80px;padding-bottom:40px">

<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/section-title-4"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-wide" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"16px"} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"120px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"44px","fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"default"} -->
<p class="has-default-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:44px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( 'We are available to take the next project with full energy', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px"><?php esc_html_e( 'Quick Links', 'wp-block-theme-boilerplate' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"ref":21,"textColor":"tertiary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontSize":"14px"},"spacing":{"blockGap":"15px"}}} /--></div>
<!-- /wp:column -->


<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px"><?php esc_html_e( 'Contact', 'wp-block-theme-boilerplate' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
		
	<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"tertiary"} -->
	<p class="pwp-txt-dec-non has-tertiary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'callto:000 - 9874 563 210' ); ?>"><?php esc_html_e( '000 - 9874 563 210', 'wp-block-theme-boilerplate' ); ?></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"className":"pwp-txt-dec-non","style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"tertiary"} -->
	<p class="pwp-txt-dec-non has-tertiary-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:0px"><a href="<?php echo esc_url( 'mailto:codersantosh@gmail.com' ); ?>"><?php esc_html_e( 'codersantosh@gmail.com', 'wp-block-theme-boilerplate' ); ?></a></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"quaternary","className":"is-style-wide"} -->
<hr class="wp-block-separator alignwide has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-wide" style="margin-top:0px;margin-bottom:0px"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"16px"} -->
<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"ref":26,"textColor":"tertiary","overlayMenu":"never","style":{"spacing":{"blockGap":"40px"},"typography":{"fontSize":"14px"}}} /-->
	
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/copyright"} /-->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->
