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

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"80px","right":"80px"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-secondary-background-color has-background" style="border-radius:10px;padding-top:80px;padding-right:80px;padding-bottom:80px;padding-left:80px"><!-- wp:group {"metadata":{"categories":["featured"],"patternName":"wp-block-theme-boilerplate/section-title-6","name":"Section Title 6"},"layout":{"type":"constrained","contentSize":"60%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"800","lineHeight":"1"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color" style="margin-bottom:20px;font-size:36px;font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'Frequently Asked Questions', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"40px"}},"typography":{"fontSize":"16px","lineHeight":"1.5"}},"textColor":"accent"} -->
<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:40px;font-size:16px;line-height:1.5"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:details {"showContent":true,"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-style:normal;font-weight:600" open><summary><?php esc_html_e( 'What are included in the purchased package?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What are the minimal requirements to use admin themes?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
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
<div class="wp-block-group"><!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What are the available payment options?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old', 'wp-block-theme-boilerplate' ); ?>.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-style:normal;font-weight:600"><summary><?php esc_html_e( 'What kind of support is available?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
<hr class="wp-block-separator has-text-color has-quinary-color has-alpha-channel-opacity has-quinary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","className":"is-style-wide","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400"},"elements":{"link":{"color":{"text":"var:preset|color|accent"}}}},"textColor":"accent"} -->
<p class="is-style-wide has-accent-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:400"><?php esc_html_e( 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"className":"at-accordion at-bdr-rad","style":{"spacing":{"padding":{"top":"15px","bottom":"15px","left":"30px","right":"30px"},"margin":{"bottom":"15px","top":"15px"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"style":"solid","width":"1px"}},"textColor":"base","fontSize":"small","borderColor":"quinary"} -->
<details class="wp-block-details at-accordion at-bdr-rad has-border-color has-quinary-border-color has-base-color has-text-color has-small-font-size" style="border-style:solid;border-width:1px;margin-top:15px;margin-bottom:15px;padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px;font-style:normal;font-weight:600"><summary><?php esc_html_e( 'How long is support valid for?', 'wp-block-theme-boilerplate' ); ?></summary><!-- wp:separator {"backgroundColor":"quinary"} -->
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
