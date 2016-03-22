<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @since Rundown 1.5.2
 */
?>
<div id="sidebar">

	<?php do_action('rundown_before_sidebar'); ?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php do_action('rundown_after_sidebar'); ?>

</div><!--/#sidebar-->

<div class="clear"></div>
