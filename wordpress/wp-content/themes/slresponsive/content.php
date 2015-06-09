<?php
/**
 * @package slresponsive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<div class="twelve columns">
		
		<?php if ( has_post_thumbnail() ) { 
		
		echo '<div class="post-thumbnail"><span class="overlay"><span>';
			
			if ( has_post_format( 'video' )) { echo '<i class="icon-video"></i></span></span>'; }
			
			elseif ( has_post_format( 'audio' )) { echo '<i class="icon-note-beamed"></i></span></span>'; }
			
			elseif ( has_post_format( 'link' )) { echo '<i class="icon-link"></i></span></span>'; }
			
			elseif ( has_post_format( 'quote' )) { echo '<i class="icon-quote"></i></span></span>'; }
			
			elseif ( has_post_format( 'image' )) { echo '<i class="icon-picture"></i></span></span>'; }
			
			elseif ( has_post_format( 'aside' )) { echo '<i class="icon-pencil"></i></span></span>'; }
			
			elseif ( has_post_format( 'chat' )) { echo '<i class="icon-chat"></i></span></span>'; }
			
			elseif ( has_post_format( 'gallery' )) { echo '<i class="icon-layout"></i></span></span>'; }
			
			else { echo '<i class="icon-docs"></i></span></span>'; }
			
			the_post_thumbnail(); 
		
		echo '</div>';

		} ?>
			
		<?php the_title( sprintf( '<h3 class="post_teaser_heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'slresponsive' ) ); ?>
				
		<div class="post_meta">
			
			<?php if ( 'post' == get_post_type() ) : ?>
				
				<span class="author"><i class="icon-user"></i><?php the_author(); ?></span><span class="date"><i class="icon-calendar"></i><?php echo get_the_date(); ?></span>
			
			<?php endif; ?>

		
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
		
		<?php $tags_list = get_the_tag_list( '', __( ', ', 'slresponsive' ) ); if ( $tags_list ) : ?>
			
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
		
		<span class="comments"><i class="icon-comment"></i><span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'slresponsive' ), __( '1', 'slresponsive' ), __( '%', 'slresponsive' ) ); ?></span></span>
		
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'slresponsive' ), '<span class="edit-link">', '</span>' ); ?>
		
		</div>
		
	</div>
	
</article>