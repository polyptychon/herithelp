<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package SlResponsive
 */
?>
<div class="row">
	<div class="twelve columns">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( sprintf( '<h3 class="post_teaser_heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			<?php the_excerpt(); ?>
			
							<div class="post_meta">
						<?php if ( 'post' == get_post_type() ) : ?>
							<span class="author"><i class="icon-user"></i><?php the_author(); ?></span><span class="date"><i class="icon-calendar"></i><?php echo get_the_date(); ?></span>
					<?php endif; ?>

		
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'slresponsive' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( '<span class="tags"><i class="icon-tag"></i> %1$s </span>', 'slresponsive' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'slresponsive' ) );
				if ( $categories_list && slresponsive_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="categories"><i class="icon-folder"></i> %1$s </span>', 'slresponsive' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments"><i class="icon-comment"></i><span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'slresponsive' ), __( '1', 'slresponsive' ), __( '<i class="icon-comment"></i> %', 'slresponsive' ) ); ?></span></span>
		<?php endif; ?>

		<span class="edit"><?php edit_post_link( __( 'Edit', 'slresponsive' ), '<span class="edit-link">', '</span>' ); ?></span>
		</div>
	</div>
</div>
</div>