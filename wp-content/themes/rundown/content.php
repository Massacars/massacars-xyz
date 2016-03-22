<?php
/**
 * The default template for displaying content
 *
 * @since Rundown 1.6.5
 * @update 1.7
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-head">

		<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'rundown' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<div class="meta">

		<?php
			printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'rundown' ),
				esc_url( get_permalink() ), 
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'rundown' ), get_the_author() ) ),
				get_the_author()
			);
		?>
		<?php if(comments_open()){ echo "&bull; "; } if (comments_open()) { comments_popup_link( '<span class="leave-reply">' . __( '0 comment', 'rundown' ) . '</span>', __( '1 comment', 'rundown' ), __( '% comments', 'rundown' ) );  } ?>

		</div>

	</div>

	<div class="entry">


		<?php


		$excerpt_mode = get_option( 'rundown_magazine' );
		$excerpt_limit = get_option( 'rundown_excerpt' );

		if($excerpt_mode == 1 ){ ?>


			<div class="excerpt-on">

				<?php echo get_the_post_thumbnail($id, 'thumbnail'); ?>

				<div class="content-excerpt">
					<p><?php echo rundown_excerpt($excerpt_limit); ?></p>
					<div><a href="#" class="more-link"><?php _e('Continue reading', 'rundown'); ?></a></div>
				</div>
			</div>


		<?php } else { ?>


			<?php echo get_the_post_thumbnail($id, 'thumbnail', array('class' => 'alignleft'));  /* Get post thumbnail as in WordPress Codex: http://codex.wordpress.org/Function_Reference/get_the_post_thumbnail */	?>

			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'rundown' ) ); ?>

		<?php } ?>


		<div class="clear"></div>
		<?php wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'rundown'), 'after' => '</div>'));?>

		<div class="meta2">
			<?php printf( __(' Category: %1$s', 'rundown'), get_the_category_list( ', ' )); ?> <?php the_tags('| Tags: ', ', ', ''); ?>
			<?php edit_post_link( __( 'Edit', 'rundown' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	</div><!--/.entry-->

</div><!--/#post-<?php the_ID(); ?>-->
