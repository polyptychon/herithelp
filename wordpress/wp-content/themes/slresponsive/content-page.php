<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package slresponsive
 */
?>
<div class="row content-page">
	
	<div class="twelve columns">
		
		<?php the_title( '<h1 class="twelve columns page_heading">', '</h1>' ); ?>
		
		<?php the_content(); ?>
		
		<div class="post_meta">
		
			<?php edit_post_link( __( 'Edit', 'slresponsive' ), '<span class="edit"><i class="icon-pencil"></i><span class="edit-link">', '</span>' ); ?></span>
		
		</div>
		
	</div>
	
</div>
