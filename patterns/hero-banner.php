<?php
/**
 * Title: Hero Banner
 * Slug: wp-block-theme-boilerplate/hero-banner
 * Categories: banner
 * Description: A layout for displaying hero banner content with a background and SVGs.
 *
 * @package    Wp_Block_Theme_Boilerplate
 * @subpackage Wp_Block_Theme_Boilerplate/patterns
 * @since      1.0.0
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-img.png","dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"metadata":{"name":"Hero Banner"},"align":"full","className":"companydomain-wbtb-hero-banner at-pos at-z-idx","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light companydomain-wbtb-hero-banner at-pos at-z-idx" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/banner-img.png" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container">

<!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none" class="at-svg at-pos at-z-idx companydomain-wbtb-shape-t"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/></svg>
<!-- /wp:html -->

<!-- wp:pattern {"slug":"wp-block-theme-boilerplate/hero-banner-content"} /-->

<!-- wp:html -->
<svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 1200 120" preserveAspectRatio="none" style="transform: rotate(180deg); transform-origin:50% 50%;" class="at-svg at-pos at-z-idx companydomain-wbtb-shape-b"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#E8F3EB" fill-opacity="1"/></svg>
<!-- /wp:html --></div></div>
<!-- /wp:cover -->
