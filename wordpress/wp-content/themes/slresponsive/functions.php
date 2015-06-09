<?php
/**
 * slresponsive functions and definitions
 *
 * @package slresponsive
 */


if ( ! function_exists( 'slresponsive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slresponsive_setup() {
		global $content_width;

		if ( ! isset( $content_width ) ) {
			$content_width = 940;
		}
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on slresponsive, use a find and replace
	 * to change 'slresponsive' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'slresponsive', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );
	
	add_editor_style();
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'slresponsive' ),
	) );
	
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'chat', 'audio'
	) );

	add_theme_support( 'post-thumbnails' ); 
	
	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'slresponsive_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // slresponsive_setup
add_action( 'after_setup_theme', 'slresponsive_setup' );

class slresponsive_Nav_Menu extends Walker {
	/**
	 * What the class handles.
	 *
	 * @see Walker::$tree_type
	 * @since 3.0.0
	 * @var string
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @see Walker::$db_fields
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var array
	 */
	public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

	/**
	 * Starts the list before the elements are added.
	 *
	 * @see Walker::start_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<div class=\"dropdown\"><ul class=\"sub-menu\">\n";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @see Walker::end_lvl()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul></div>\n";
	}

	/**
	 * Start the element output.
	 *
	 * @see Walker::start_el()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 * @param int    $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		/**
		 * Filter the CSS class(es) applied to a menu item's <li>.
		 *
		 * @since 3.0.0
		 *
		 * @see wp_nav_menu()
		 *
		 * @param array  $classes The CSS classes that are applied to the menu item's <li>.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of wp_nav_menu() arguments.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filter the ID applied to a menu item's <li>.
		 *
		 * @since 3.0.1
		 *
		 * @see wp_nav_menu()
		 *
		 * @param string $menu_id The ID that is applied to the menu item's <li>.
		 * @param object $item    The current menu item.
		 * @param array  $args    An array of wp_nav_menu() arguments.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

		/**
		 * Filter the HTML attributes applied to a menu item's <a>.
		 *
		 * @since 3.6.0
		 *
		 * @see wp_nav_menu()
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's <a>, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param object $item The current menu item.
		 * @param array  $args An array of wp_nav_menu() arguments.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		/** This filter is documented in wp-includes/post-template.php */
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filter a menu item's starting output.
		 *
		 * The menu item's starting output only includes $args->before, the opening <a>,
		 * the menu item's title, the closing </a>, and $args->after. Currently, there is
		 * no filter for modifying the opening and closing <li> for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @see wp_nav_menu()
		 *
		 * @param string $item_output The menu item's starting HTML output.
		 * @param object $item        Menu item data object.
		 * @param int    $depth       Depth of menu item. Used for padding.
		 * @param array  $args        An array of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @see Walker::end_el()
	 *
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Page data object. Not used.
	 * @param int    $depth  Depth of page. Not Used.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	public function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "</li>\n";
	}

}

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function slresponsive_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Top', 'slresponsive' ),
		'id'            => 'footer-top',
		'description'   => '',
		'before_widget' => '<div class="four columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Middle', 'slresponsive' ),
		'id'            => 'footer-middle',
		'description'   => '',
		'before_widget' => '<div class="four columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Bottom', 'slresponsive' ),
		'id'            => 'footer-bottom',
		'description'   => '',
		'before_widget' => '<div class="twelve columns">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'slresponsive_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function slresponsive_scripts() {
	wp_enqueue_style( 'slresponsive-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.6.2.js', array(), '20120206', true );
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.6.2.min.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby', get_template_directory_uri() . '/js/libs/gumby.js', array(), '20120206', true );
		
	wp_enqueue_script( 'gumby', get_template_directory_uri() . '/js/libs/gumby.min.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-retina', get_template_directory_uri() . '/js/libs/ui/gumby.retina.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-fixed', get_template_directory_uri() . '/js/libs/ui/gumby.fixed.js', array(), '20120206', true );
		
	wp_enqueue_script( 'gumby-toggleswitch', get_template_directory_uri() . '/js/libs/ui/gumby.toggleswitch.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-checkbox', get_template_directory_uri() . '/js/libs/ui/gumby.checkbox.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-radiobtn', get_template_directory_uri() . '/js/libs/ui/gumby.radiobtn.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-tabs', get_template_directory_uri() . '/js/libs/ui/gumby.tabs.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-navbar', get_template_directory_uri() . '/js/libs/ui/gumby.navbar.js', array(), '20120206', true );
	
	wp_enqueue_script( 'jquery-validation', get_template_directory_uri() . '/js/libs/ui/jquery.validation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'gumby-init', get_template_directory_uri() . '/js/libs/gumby.init.js', array(), '20120206', true );
	
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20120206', true );
	
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '20120206', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slresponsive_scripts' );

if ( is_admin() ) {
	require get_template_directory() . '/inc/welcome-screen.php';
}
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
