<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package slresponsive
 */
?>

	<footer class="footer">
		<?php if ( is_active_sidebar( 'footer-top' ) ) : ?>
			<div class="row">
				<?php dynamic_sidebar( 'footer-top' ); ?>
			</div>
	<?php endif; ?>
				
	<?php if ( is_active_sidebar( 'footer-middle' ) ) : ?>
			<div class="row">
				<?php dynamic_sidebar( 'footer-middle' ); ?>
			</div>
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-bottom' ) ) : ?>
			<div class="row">
				<?php dynamic_sidebar( 'footer-bottom' ); ?>
			</div>
	<?php endif; ?>
	
	<div class="row copyright">
		<div class="twelve columns">
			<p>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'slresponsive' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'slresponsive' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'slresponsive' ), 'SlResponsive', '<a href="http://awothemes.ru" rel="designer">AwoThemes</a>' ); ?>
			</p>
		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
  </body>
</html>