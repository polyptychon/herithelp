<?php/*

Template Name: Topics

*/
?>

<?php get_header(); ?>
  <?php bloglow_get_breadcrumb_navigation();?>




<?php while ( have_posts() ) : the_post(); ?>



  <div class="row page" style="margin-bottom: 20px;">
    <div class="twelve columns">
      <?php the_title( '<h1 class="twelve columns page_heading">', '</h1>' ); ?>
      <ul class="sidebar-menu" style="text-align: center;">
        <?php
        $parentID = ICL_LANGUAGE_CODE == get_the_ID();
        $pages    = get_pages( array(
          'post_type' => 'page',
          'parent'    => get_the_ID(),
          'sort_column' => 'menu_order'
        ) );
        ?>
        <?php foreach ( $pages as $page ): ?>
          <li>
            <a <?php echo $post->ID==$page->ID; ?>
              href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

<div class="row page" style="margin-bottom: 20px;">
  <div class="twelve columns">
    <?php the_content(); ?>
  </div>
</div>


<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
