<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @since Rundown 1.6.5
 * @update 1.7
 */
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php do_action('rundown_top'); ?>

	<div id="wrapper">

	<div id="header">

		<?php do_action('rundown_before_header'); ?>

		<div id="header-inner">
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php bloginfo('description');  ?></p>
		</div>

		<?php if ( '' != get_header_image() ) : /* Rundown custom header image */ ?>
			<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
		<?php else: endif; ?>


		<?php
		do_action('rundown_main_nav');
		?>

		<div class="clear"></div>

		<?php do_action('rundown_after_header'); ?>

	</div><!--/#header-->
