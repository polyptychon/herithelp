<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
	<div class="row">
		<h1 class="twelve columns page_heading"><?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s', 'slresponsive' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s', 'slresponsive' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s', 'slresponsive' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'slresponsive' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s', 'slresponsive' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'slresponsive' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios', 'slresponsive' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats', 'slresponsive' );

						else :
							_e( 'Archives', 'slresponsive' );

						endif;
					?></h1> 
	</div>
					
		<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="row"><div class="twelve columns">%s</div></div>', $term_description );
					endif;
				?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php if ( function_exists( 'the_posts_navigation' ) ) : ?>
				
				<div class="row paging">
					
					<div class="twelve columns">			
						
						<?php the_posts_navigation(); ?>
					
					</div>
					
				</div>
				
			<?php endif; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
<?php get_footer(); ?>
