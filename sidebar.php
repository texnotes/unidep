<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unidep
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


					
<aside id="secondary" class="widget-area" style="font-size: 0.95rem;">

	<?php dynamic_sidebar( 'sidebar-1' ); ?>




