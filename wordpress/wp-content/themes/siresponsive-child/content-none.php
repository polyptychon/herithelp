<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */
?>

<div class="row">
		<h1 class="twelve columns page_heading"><?php //_e( 'Nothing Found', 'slresponsive' ); ?><?php print "Δεν βρέθηκε κανένα αποτέλεσμα";?></h1>
</div>
<div class="row">
		<div class="twelve columns">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'slresponsive' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p style="text-align: center"><?php //_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'slresponsive' ); ?>
				
				<?php print "Δεν βρέθηκε κανένα αποτέλεσμα για τον όρο/φράση της αναζήτησής σας.";?></p>
			<p  style="text-align: center"><?php print "Δοκιμάστε ξανά με διαφορετικό όρο/φράση αναζήτησης.";?></p>
			
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'slresponsive' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div>
</div>
