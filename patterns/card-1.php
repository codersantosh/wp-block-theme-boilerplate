<?php
/**
 * Title: Card 1
 * Slug: wp-block-theme-boilerplate/card-1
 * Categories: featured
 * Description: A layout featuring an icon, title, and content, commonly used in repeated columns or as a standalone section.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-ui-check-grid.png" style="width:50px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Visual Page Builder', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-accent-color has-text-color has-link-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


