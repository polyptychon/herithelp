<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

?>

<section class="no-results not-found row">
	<header class="page-header row">
		<h1 class="page-title row"><?php esc_html_e( 'Nothing Found', 'slresponsive' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content row">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="row"><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'slresponsive' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class="row"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'slresponsive' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p class="row"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'slresponsive' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->