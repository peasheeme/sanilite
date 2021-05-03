<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Event Star
 */

if ( ! is_active_sidebar( 'event-star-sidebar' ) ) {
	return;
}
$sidebar_layout = event_star_sidebar_selection();
if( $sidebar_layout == "right-sidebar" || empty( $sidebar_layout ) ) : ?>
	<div id="secondary-right" class="at-fixed-width widget-area sidebar secondary-sidebar" role="complementary">
		<div id="sidebar-section-top" class="widget-area sidebar init-animate clearfix">
			<?php dynamic_sidebar( 'event-star-sidebar' ); ?>
		</div>
	</div>
<?php endif;