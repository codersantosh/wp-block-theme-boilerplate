<?php
/**
 * Title: Featured Section 2
 * Slug: wp-block-theme-boilerplate/featured-section-2
 * Categories: featured
 * Description: A layout with an image in the left column and a title, content, and Card 2 pattern in the right column.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}}},"backgroundColor":"default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-default-background-color has-background" style="padding-top:80px;padding-bottom:80px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/featured-img-1.png" alt="" class="wp-image-73"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/section-title-3"} /-->
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/card-2"} /-->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"30px"}}}} -->
<div class="wp-block-columns" style="margin-top:30px"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"style":{"border":{"radius":"999px"},"spacing":{"margin":{"bottom":"30px"}}},"backgroundColor":"secondary","className":" companydomain-wbtb-is-h-w-70 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"constrained"}} -->
<div class="wp-block-group  companydomain-wbtb-is-h-w-70 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:999px;margin-bottom:30px"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"1.5rem"}}} -->
<p style="font-size:1.5rem;font-style:normal;font-weight:900">2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"85%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"5px"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color " style="margin-bottom:5px;font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Customize Typography and Colors Style panel', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"accent"} -->
<p class="has-accent-color has-text-color"><?php esc_html_e( 'Elementum ipsum donec usodales porttitor mauris augue fermentum sagittis elementum.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-buttons" style="margin-top:40px">
	
<!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Know More', 'wp-block-theme-boilerplate' ); ?></a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
