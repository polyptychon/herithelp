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

<body <?php body_class(); ?>>
	<header>
		<div class="navbar" id="nav">
			<div class="row">
				<h5 class="three columns logo"><a href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h5>
				<a class="toggle" gumby-trigger="#nav > .row > ul" href="#"><i class="icon-menu"></i></a>
				<?php  wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'fallback_cb' => '', 'items_wrap' => '<ul id="%1$s" class="nine columns">%3$s</ul>', 'walker' => new slresponsive_Nav_Menu) ); ?>
			</div>
		</div>
	</header>