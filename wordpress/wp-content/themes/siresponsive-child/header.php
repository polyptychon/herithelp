<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package slresponsive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="navbar" id="nav">
			<div class="row">
				<!--<h2 class="twelve columns logo"><a href="<?php //echo esc_url( home_url() ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h2>-->
        <div class="twelve columns">
          <h2 class="seven columns logo"><a href="<?php echo esc_url( home_url() ); ?>" rel="home">Herit App Support Center</a></h2>
          <?php if ( !function_exists('dynamic_sidebar') ||
            !dynamic_sidebar('Header Widgets Area') ) :
          endif; ?>
        </div>
        <?php if(!is_front_page()){ ?>
				<a class="toggle" gumby-trigger="#nav > .row > ul" href="#"><i class="icon-menu"></i></a>
				<?php  wp_nav_menu( array( 'theme_location' => 'primary',
                                    'container' => '',
                                    'fallback_cb' => '',
                                    'items_wrap' => '<ul id="%1$s" class="twelve columns">%3$s</ul>',
                                    'walker' => new slresponsive_Nav_Menu) ); ?>
        <?php }
        else echo "";
         ?>
			</div>
		</div>
	</header>