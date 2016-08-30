<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row '); ?>>
	<header class="entry-header row">
		<?php the_title( '<h1 class="entry-title row">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content row">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'slresponsive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer row">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'slresponsive' ),
					the_title( '<span class="screen-reader-text row">"', '"</span>', false )
				),
				'<span class="edit-link row">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
