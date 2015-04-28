<?php
/**
 * The template for displaying search results pages.
 *
 * @package SLResponsive
 */

get_header(); ?>



<?php if ( have_posts() ) : ?>
<div class="row">
		<h1 class="twelve columns page_heading"><?php printf( __( 'Αποτελέσματα αναζήτησης για: %s', 'slresponsive' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );
				?>

			<?php endwhile; ?>

			<?php slresponsive_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

<?php get_footer(); ?>
