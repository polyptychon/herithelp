<?php
/**
 * welcome Screen Class
 * Sets up the welcome screen page, hides the menu item
 * and contains the screen content.
 */
class slresponsive_welcome {

	/**
	 * Constructor
	 * Sets up the welcome screen
	 */
	public function __construct() {

		add_action( 'admin_menu', array( $this, 'slresponsive_welcome_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'slresponsive_activation_admin_notice' ) );

		add_action( 'slresponsive_welcome', array( $this, 'slresponsive_welcome_intro' ), 				10 );
		add_action( 'slresponsive_welcome', array( $this, 'slresponsive_welcome_who' ), 				20 );

	} // end constructor

	/**
	 * Adds an admin notice upon successful activation.
	 * @since 1.3.4
	 */
	public function slresponsive_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'slresponsive_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_admin_notice() {
		?>
			<div class="updated fade">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing slresponsive!' )); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=slresponsive-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with slresponsive', 'slresponsive' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_register_menu() {
		add_theme_page( 'SlResponsive', 'SlResponsive', 'read', 'slresponsive-welcome', array( $this, 'slresponsive_welcome_screen' ) );
	}

	/**
	 * The welcome screen
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_screen() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="wrap about-wrap">

			<?php
			/**
			 * @hooked slresponsive_welcome_intro - 10
			 * @hooked slresponsive_welcome_who - 20
			 */
			do_action( 'slresponsive_welcome' ); ?>

		</div>
		<?php
	}

	/**
	 * welcome screen intro
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_intro() {
		$slresponsive = wp_get_theme( 'slresponsive' );

		?>
		<div class="feature-section col two-col" style="margin-bottom: 1.618em; overflow: hidden;">
			<div class="col-1">
				<h1 style="margin-right: 0;"><?php echo '<strong>SlResponsive</strong> <sup style="font-weight: bold; font-size: 50%; padding: 5px 10px; color: #666; background: #fff;">' . esc_attr( $slresponsive['Version'] ) . '</sup>'; ?></h1>

				<p style="font-size: 1.2em;"><?php _e( 'Thank you for choosing SlResponsive for your project.', 'slresponsive' ); ?></p>
				<p><?php _e( 'If our product be useful to you, buy us a cup of coffee. It will inspire our work to improve our SlResponsive theme.', 'slresponsive' ); ?>
				<p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="X4GLRMVSKPF9A">
<input type="image" src="https://www.paypalobjects.com/en_US/RU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/ru_RU/i/scr/pixel.gif" width="1" height="1">
</form>
</p>
			</div>

			<div class="col-2 last-feature">
				<img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="slresponsive" class="image-50" width="440" />
			</div>
		</div>

		<hr />
		<?php
	}

	/**
	 * welcome screen who section
	 * @since 1.3.4
	 */
	public function slresponsive_welcome_who() {
		?>

		<div class="feature-section col three-col" style="margin-bottom: 1.618em; padding-top: 1.618em; overflow: hidden;">
			<div class="col-1">
				<h4><?php _e( 'Can\'t find a feature or found a bug?', 'slresponsive' ); ?></h4>
				<p><?php echo sprintf( esc_html__( 'Please suggest ideas or report an error at the %sSlResponsive Support Forum%s.', 'slresponsive' ), '<a href="https://wordpress.org/support/theme/slresponsive">', '</a>' ); ?></p>
			</div>
			<div class="col-2">
				<h4><?php _e( 'Are you enjoying SlResponsive?', 'slresponsive' ); ?></h4>
				<p><?php echo sprintf( esc_html__( 'Why not leave a review on %sWordPress.org%s? We\'d really appreciate it! :-)', 'slresponsive' ), '<a href="https://wordpress.org/themes/slresponsive">', '</a>' ); ?></p>
			</div>
			<div class="col-3 last-feature">
				<h4><?php _e( 'Can I Contribute?', 'slresponsive' ); ?></h4>
				<p><?php _e( 'Want to contribute a patch or create a new feature? GitHub is the place to go!', 'slresponsive' ); ?></p>
				<p><a href="https://github.com/awothemes/slresponsive" class="button"><?php _e( 'SlResponsive at GitHub', 'slresponsive' ); ?></a></p>
			</div>
		</div>
		<?php
	}
}

$GLOBALS['slresponsive_welcome'] = new slresponsive_welcome();
