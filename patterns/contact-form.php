<?php
/**
 * Title: Contact Form
 * Slug: wp-block-theme-boilerplate/contact-form
 * Categories: contact, call-to-action
 * Description: A layout with a contact information on the left and a contact form on the right.
 *
 * @package    Patterns_Store_Front
 * @subpackage Patterns_Store_Front/patterns
 * @since      1.0.0
 */

?>

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"100px"},"padding":{"top":"80px","bottom":"120px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:80px;padding-bottom:120px"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"align":"wide","style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"left":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-left:80px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"right":"10px","left":"10px","top":"5px","bottom":"5px"}},"elements":{"link":{"color":{"text":"var:preset|color|default"}}}},"backgroundColor":"primary","textColor":"default"} -->
<p class="has-text-align-left has-default-color has-primary-background-color has-text-color has-background has-link-color" style="margin-bottom:0px;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><?php esc_html_e( 'Let’s talk', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"800"}}} -->
<h2 class="wp-block-heading has-text-align-left" style="font-style:normal;font-weight:800;line-height:1"><?php esc_html_e( 'Feel Free To Contact Us.', 'wp-block-theme-boilerplate' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"bottom":"40px","top":"5px"}},"typography":{"lineHeight":"1.7"}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color" style="margin-top:5px;margin-bottom:40px;line-height:1.7"><?php esc_html_e( 'We’d love to hear from you! Please fill out the form or reach us through the following methods.', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"bottom":"15px"}}},"textColor":"base"} -->
<h5 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:15px"><?php esc_html_e( 'Get Direction', 'wp-block-theme-boilerplate' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color" style="margin-top:0px;margin-bottom:0px"><?php esc_html_e( '785 15h Street, Office 478 Berlin, De 81566 6391 Elgin St. Celina, 10299', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":5,"style":{"spacing":{"margin":{"bottom":"15px"}}},"textColor":"base"} -->
<h5 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:15px"><?php esc_html_e( 'Phone Number', 'wp-block-theme-boilerplate' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:10px"><a href="#"><?php esc_html_e( '(629) 555-0129', 'wp-block-theme-boilerplate' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:10px"><a href="#"><?php esc_html_e( '(629) 555-0129', 'wp-block-theme-boilerplate' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"style":{"spacing":{"margin":{"bottom":"15px"}}},"textColor":"base"} -->
<h6 class="wp-block-heading has-text-align-left has-base-color has-text-color" style="margin-bottom:15px"><?php esc_html_e( 'E-mail', 'wp-block-theme-boilerplate' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:10px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'wp-block-theme-boilerplate' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|accent"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"accent"} -->
<p class="has-text-align-left has-accent-color has-text-color has-link-color" style="margin-top:0px;margin-bottom:10px"><a href="<?php echo esc_url( 'mailto:info@example.com' ); ?>"><?php esc_html_e( 'info@example.com', 'wp-block-theme-boilerplate' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"40px","right":"40px"}},"position":{"type":"sticky","top":"0px"},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"},"patternsStoreCustomCss":".wpcf7-form input:not([type=\u0022submit\u0022]),.wpcf7-form textarea{margin-block-start:15px;}.wpcf7-form textarea{margin-block-end:15px;}.wpcf7-form input:not([type=\u0022submit\u0022]){height:40px;}"} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:shortcode -->
<?php esc_html_e( 'Add Contact form shortcode', 'wp-block-theme-boilerplate' ); ?>
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->