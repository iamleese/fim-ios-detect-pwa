<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://faithinmarketing.com
 * @since      1.0.0
 *
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/admin
 * @author     Melissa Hiatt, Faith in Marketing <melissa@faithinmarketing.com>
 */
class Fim_Ios_Detect_Pwa_Admin {


	private $plugin_name;

	private $version;

	private $option_name = 'fim_ios_detect_pwa';

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fim-ios-detect-pwa-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fim-ios-detect-pwa-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function fim_ios_detect_settings_menu(){

		add_options_page( 'FIM iOS PWA Prompt', 'iOS PWA Prompt', 'manage_options', $this->plugin_name, array($this,'fim_ios_detect_settings_page') );

	}

	public function fim_ios_detect_settings_page(){
		include_once 'partials/fim-ios-detect-pwa-admin-display.php';

	}

	public function fim_ios_detect_register_settings(){

		register_setting( $this->plugin_name, $this->option_name . '_display');
		register_setting( $this->plugin_name, $this->option_name . '_message');

		//register settings
		add_settings_section(
			$this->option_name . '_settings',
			__( 'iOS Prompt Settings', 'fim-ios-detect-pwa' ),
			array( $this, $this->option_name . '_settings_cb' ),
			$this->plugin_name
		);

		add_settings_field(
			$this->option_name . '_display',
			__( 'Display popup on:', 'fim-ios-detect-pwa' ),
			array( $this, $this->option_name . '_display_cb' ), //callback
			$this->plugin_name,
			$this->option_name . '_settings',
			array( 'label_for' => $this->option_name . '_display' )
		);

		/* TO DO
		add_settings_field(
			$this->option_name . '_expiration',
			__( 'Closed Popup Expires After:', 'fim-ios-detect-pwa' ),
			array( $this, $this->option_name . '_expiration_cb' ), //callback
			$this->plugin_name,
			$this->option_name . '_settings',
			array( 'label_for' => $this->option_name . '_expiration' )
		);
		*/

		add_settings_field(
			$this->option_name . '_message',
			__( 'Custom Message:', 'fim-ios-detect-pwa' ),
			array( $this, $this->option_name . '_message_cb' ), //callback
			$this->plugin_name,
			$this->option_name . '_settings',
			array( 'label_for' => $this->option_name . '_message' )
		);



	}

	public function fim_ios_detect_pwa_settings_cb(){
		echo '<p>' . __( 'Settings for iOS popup.', 'fim-ios-detect-pwa' ) . '</p>';

	}//fim_ios_detect_pwa_settings_cb


	public function fim_ios_detect_pwa_display_cb(){
		$displaypage = get_option( $this->option_name . '_display' );

		if( empty($displaypage) ){
			$displaypage = "home";
		}

		?>
		<fieldset>
			<input type="radio" id="display_home" name="<?php echo $this->option_name.'_display'; ?>" value="home"
					 <?php echo ($displaypage == 'home') ? 'checked' : ''; ?> >
		<label for="display_home">Home Page Only</label><br />
		<input type="radio" id="display_all" name="<?php echo $this->option_name.'_display'; ?>" value="all"
				 <?php echo ($displaypage == 'all') ? 'checked' : ''; ?>>
		<label for="display_all">All Pages</label>
		 </fieldset>
		<?php
	} //fim_ios_detect_pwa_display_cb

	public function fim_ios_detect_pwa_expiration_cb(){
		$expiration = get_option( $this->option_name . '_expiration' );
		?>
		<fieldset>
			<input type="text" name="<?php echo $this->option_name.'_expiration'; ?>" size="5" value="<?php echo $expiration; ?>" /> days
		 </fieldset>
		<?php
	} //fim_ios_detect_pwa_display_cb

	public function fim_ios_detect_pwa_message_cb(){

		$message = get_option( $this->option_name . '_message');
		$default = 'Add this site to your device by clicking <img src="'. plugin_dir_url( __DIR__ ).'public/images/share_icon.png' .'" width="20" > then select "Add to Home Screen"';

		if( empty($message) ){
			$message = $default;
		}

		$editor_settings = array();

		?>

		<fieldset>
			<?php wp_editor(  $message, $this->option_name.'_message', $editor_settings );?>
		</fieldset>
		<?php
	}
}
