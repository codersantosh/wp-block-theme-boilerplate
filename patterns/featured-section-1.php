<?php
/**
 * Title: Featured Section 1
 * Slug: wp-block-theme-boilerplate/featured-section-1
 * Categories: featured
 * Description: A layout with a title, content and button in the left column, and a Card 1 pattern in the right column.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:80px;padding-right:var(--wp--preset--spacing--40);padding-bottom:80px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"35%"} -->
<div class="wp-block-column" style="flex-basis:35%"><!-- wp:pattern {"slug":"wp-block-theme-boilerplate/section-title-2"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"65%","style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-column" style="flex-basis:65%"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:pattern {"slug":"wp-block-theme-boilerplate/card-1"} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-arrow-repeat.png" style="width:50px"/></figure>
<!-- /wp:image -->


<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"15px","top":"0"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="margin-top:0;margin-bottom:15px;font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Free Lifetime Update', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.5"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu ', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-columns-gap.png" style="width:50px"/></figure>
<!-- /wp:image -->


<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"15px","top":"0"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="margin-top:0;margin-bottom:15px;font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Modern Minimal Design', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.5"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"50px","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<figure class="wp-block-image size-full is-resized" style="margin-bottom:var(--wp--preset--spacing--50)"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/bs-icon-columns.png" style="width:50px"/></figure>
<!-- /wp:image -->


<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"spacing":{"margin":{"bottom":"15px","top":"0"}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="margin-top:0;margin-bottom:15px;font-size:22px;font-style:normal;font-weight:700;line-height:1"><?php esc_html_e( 'Easy Customization', 'wp-block-theme-boilerplate' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"16px","lineHeight":"1.5"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-accent-color has-text-color" style="margin-top:0px;margin-bottom:0px;font-size:16px;line-height:1.5"> <?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literatu', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
