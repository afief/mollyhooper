<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package MollyHooper
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="btOpenSidebar" class="btOpenSidebar genericon genericon-menu">&nbsp;</div>

<div id="secondary" class="widget-area hidden" role="complementary">
	<div class="wrapper">
		<div class="sidebartitle">
			<div class="btClose genericon genericon-close-alt" id="btCloseSidebar">&nbsp;</div>
			<h1> <?php bloginfo( 'name' ); ?> </h1>
		</div>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
</div><!-- #secondary -->
