<?php
/**
 * The template for displaying page with no sidebar
 *
 * @since Rundown 1.6.2
 * Template Name: Fullwidth Page
 */

 get_header(); ?>

		<div id="main">

			<div class="singlepage">

        <?php do_action('rundown_before_content'); ?>

				<?php while (have_posts()) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="post-head">
						<h2 class="post-title"><?php the_title(); ?></h2>
						<div class="meta">
							<?php the_time(get_option('date_format')); ?> <?php echo "|"; ?> <?php _e('by', 'rundown'); ?> <?php the_author(); ?> <?php echo "|"; ?>
							<?php if (comments_open()) { comments_popup_link( '  &bull;  <span class="leave-reply">' . __( '0 comment', 'rundown' ) . '</span>', __( '1 comment', 'rundown' ), __( '% comments', 'rundown' ) );  } ?>
						</div>
					</div>


					<div class="entry">

						<?php the_content(); ?>

						<div class="clear"></div>
						<?php wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'rundown'), 'after' => '</div>'));?>

						<div class="clear"></div>
						<?php edit_post_link( __( 'Edit', 'rundown' ), '<span class="edit-link">', '</span>' ); ?>

						</div><!--/.entry-->

						<?php comments_template( '', true ); ?>

				</div><!--/post-<?php the_ID(); ?>-->

				<div class="navigation">
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'rundown' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'rundown' ) ); ?></span>
				</div>

				<?php endwhile; ?>

        <?php do_action('rundown_after_content'); ?>

			</div><!--/#content-->

<?php get_footer(); ?>
