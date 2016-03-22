<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @since Rundown 1.6.3
 * @update 1.7
 */
?>

		</div><!--/#main-->

		<div class="clear"></div>

		<?php do_action('rundown_before_footer'); ?>

		<div id="footer">

			<?php do_action('rundown_footer'); ?>

			<?php wp_nav_menu( array( 'container_id' => 'primarynav-footer', 'theme_location' => 'primary' ) ); ?>

			<div class="footer-inner">
				<span class="footcreditleft">&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></span>
				<span class="footcreditright"><a href="http://risbl.co/wp/rundown-theme/"><?php _e('Rundown', 'rundown'); ?></a> <?php _e(' - Proudly powered by', 'rundown'); ?> <a href="http://www.wordpress.org"><?php _e('WordPress', 'rundown'); ?></a></span>
				<div class="clear"></div>
			</div>

		</div><!--/#footer-->


	</div><!-- /#wrapper -->

	<?php do_action('rundown_bottom'); ?>

	<a href="#" class="scrollup"><?php _e('Scroll to top', 'rundown'); ?></a>

	<?php wp_footer(); ?>

</body>


</html>
