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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=greek-ext,greek' rel='stylesheet' type='text/css'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<style>
  h2 strong,h2, h3 strong, h3 {
    font-family: "Open Sans",Arial,sans-serif!important;
    font-weight: 300;
    color: #444444;
    text-rendering: optimizeLegibility;
    padding-top: 0.273em;
    line-height: 1.15538em;
    padding-bottom: 0.273em;
    font-size:30px;
  }
  h3 strong, h3 {
    font-size:22px;
  }

</style>
<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="navbar" id="nav">
			<div class="row">
				<!--<h2 class="twelve columns logo"><a href="<?php //echo esc_url( home_url() ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h2>-->
        <div class="twelve columns">
          <h2 class="seven columns logo"><a href="<?php echo esc_url( home_url() ); ?>" rel="home" class="nav-brand">Herit App Support Center</a></h2>
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