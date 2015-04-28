<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

get_header(); ?>
	<div class="row">
		<h1 class="twelve columns page_heading"><?php bloginfo( 'description' ); ?></h1> 
	</div>
	
	<?php if ( have_posts() ) : ?>

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

<?php
	function slresponsive_pagenavi() {
	global $wp_query;

	$big = 999999999;

		$args = array(
		'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) )
		,'format' => ''
		,'current' => max( 1, get_query_var('paged') )
		,'total' => $wp_query->max_num_pages
		,'type' => 'plain'
		,'prev_text'    => __( 'PREV', 'slresponsive' )
		,'next_text'    => __( 'NEXT', 'slresponsive' )
	);

	$result = paginate_links( $args );

	$result = str_replace( '/page/1', '', $result );

	echo $result;
}
?>
	<div class="row">
		<div class="twelve columns paging">
			<?php slresponsive_pagenavi(); ?>
		</div>
	</div>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		
<?php get_footer(); ?>
