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
		<div class="twelve columns row">
			<p>
				<span>Herit App <?php echo "&copy;" . " " . date("Y"); ?></span>
				<span class="sep"> | </span>
				<a href="http://www.polyptychon.gr" target="_blank">Polyptychon Cultural Services</a>
			</p>
		</div>
	</div>
</footer>
	<?php wp_footer(); ?>
  </body>
</html>
