<?php
/**
 * Title: Card 2
 * Slug: wp-block-theme-boilerplate/card-2
 * Categories: featured
 * Description: A layout featuring an circular design text, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:group {"style":{"border":{"radius":"999px"}},"backgroundColor":"secondary","className":" companydomain-wbtb-is-h-w-70 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr","layout":{"type":"constrained"}} -->
<div class="wp-block-group  companydomain-wbtb-is-h-w-70 at-h at-w at-flx at-al-itm-ctr at-jfy-cont-ctr has-secondary-background-color has-background" style="border-radius:999px;"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"900","fontSize":"1.5rem"}}} -->
<p style="font-size:1.5rem;font-style:normal;font-weight:900"><?php esc_html_e( '1', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"85%","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column" style="flex-basis:85%"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"5px"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:5px;font-size:22px;font-style:normal;font-weight:600"><?php esc_html_e( 'Customize Typography and Colors Style panel', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-link-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Elementum ipsum donec usodales porttitor mauris augue fermentum sagittis elementum.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
