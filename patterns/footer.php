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
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background">
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/section-title-4"} /-->



  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"120px"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"},"bottom":{"color":"var:preset|color|quaternary","style":"solid","width":"1px"}}}} -->
    <div class="wp-block-columns alignwide"
        style="border-top-color:var(--wp--preset--color--quaternary);border-top-style:solid;border-top-width:1px;border-bottom-color:var(--wp--preset--color--quaternary);border-bottom-style:solid;border-bottom-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"textColor":"default","fontSize":"x-large"} -->
<p class="has-default-color has-text-color has-x-large-font-size" style="margin-top:0px;margin-bottom:0px;font-style:normal;font-weight:600;line-height:1"><?php esc_html_e( 'We are available to take the next project with full energy', 'wp-block-theme-boilerplate' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->



<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:heading {"level":6,"style":{"typography":{"fontSize":"16px"}},"textColor":"default"} -->
<h6 class="wp-block-heading has-default-color has-text-color" style="font-size:16px"><?php esc_html_e( 'Quick Links', 'wp-block-theme-boilerplate' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontSize":"13px"},"spacing":{"blockGap":"15px"}}} -->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blog', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'About', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->

	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Authors', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->


<!-- wp:column {"width":"20%","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
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

 <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--40)">
    <!-- wp:navigation {"textColor":"tertiary","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontSize":"13px"}}} -->
     	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Policy', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->
	<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms & Conditions', 'wp-block-theme-boilerplate' ); ?>","url":"#"} /-->
<!-- /wp:navigation -->
	
<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/copyright"} /-->

</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/scroll-to-top-button"} /-->

</div>
<!-- /wp:group -->

