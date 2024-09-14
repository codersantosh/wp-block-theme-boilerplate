<?php
/*
 * Title: No Search Result
 * Slug: wp-block-theme-boilerplate/hidden-no-search-results
 * Inserter: no
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp-block-theme-boilerplate' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'wp-block-theme-boilerplate' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'wp-block-theme-boilerplate' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'wp-block-theme-boilerplate' ); ?>","buttonUseIcon":true} /-->
