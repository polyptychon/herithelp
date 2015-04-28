<?php /*

Template Name: Homepage

*/
?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

  <div class="row page" style="margin-bottom: 20px;">
    <div class="twelve columns">
      <?php the_title( '<h1 class="twelve columns page_heading">', '</h1>' ); ?>



      <?php //the_content(); ?>
      <?php //wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <?php

      $defaults = array(
        'theme_location'  => '',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s" style="text-align: center">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
      );

      wp_nav_menu( $defaults );

      ?>

    </div>
  </div>




<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
