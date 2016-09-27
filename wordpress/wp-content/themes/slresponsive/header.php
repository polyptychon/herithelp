<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slresponsive
 */

?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header<?php// if(is_home() || is_front_page()){echo ' custom-header';}?>" role="banner">
		<nav class="navbar" id="nav1">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
					<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );						
					if (!$image[0]):?>
						<p class="logo three columns"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php else :?>
						<p class="logo three columns"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $image[0]; ?>"></a></p>
					<?php endif;?>	
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => '', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="ten columns">%3$s</ul>', 'walker'=> new slresponsive_Nav_Menu()) ); ?>
			</div>
		</nav>
		<!--<?php if (get_theme_mod('slresponsive_header_bg_option')):?>
			<?php if(is_home() || is_front_page()):?>
				<section class="header-heading">
					<h1><?php bloginfo( 'description');?></h1>
				</section>
			<?php endif;?>
		<?php endif;?>-->
	</header><!-- #masthead -->
	
	</div>
	
	<div id="content" class="site-content row">
