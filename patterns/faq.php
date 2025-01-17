<?php
/**
 * Title: Frequently Asked Questions (FAQ)
 * Slug: wp-block-theme-boilerplate/faq
 * Categories: contact, call-to-action
 * Description: A layout with a title and subtitle on the header and FAQ as a content .
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|60"},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-secondary-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1"}},"textColor":"base","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'Frequently Asked Questions', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}},"textColor":"accent","fontSize":"small"} -->
<p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->


<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:details {"showContent":true,"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600" open><summary><?php esc_html_e( 'What are included in the purchased package?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What are the minimal requirements to use admin themes?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What are the available payment options?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'wp-block-theme-boilerplate' ); ?>.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What kind of support is available?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:var(--wp--preset--spacing--30);padding-bottom:15px;padding-left:var(--wp--preset--spacing--30);font-style:normal;font-weight:600"><summary><?php esc_html_e( 'How long is support valid for?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
