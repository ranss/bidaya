<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maghreb
 */

if ( ! is_active_sidebar( 'maghreb-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'maghreb-1' ); ?>
</aside><!-- #secondary -->
