<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://faithinmarketing.com
 * @since      1.0.0
 *
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/public
 */

/**
 *
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/public
 * @author     Melissa Hiatt, Faith in Marketing <melissa@faithinmarketing.com>
 */

class Fim_Ios_Detect_Pwa_Public {


	private $plugin_name;

	private $version;

	private $option_name = 'fim_ios_detect_pwa';



	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/fim-ios-detect-pwa-public.css', array(), $this->version, 'all' );

	}


	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/fim-ios-detect-pwa-public.js', array(), $this->version, true );

	}


	public function fim_ios_display_popup(){
		global $post;
		include plugin_dir_path( dirname( __FILE__ ) ) .'public/partials/fim-ios-detect-pwa-public-display.php';
	  $option_name = 'fim_ios_detect_pwa';
		$homepage = get_option('page_on_front');
		//check where to display the popup
		$display = get_option($option_name.'_display');

		if($display == 'home' && $post->ID == $homepage){
				fim_ios_popup();
		}

		if($display == 'all'){
			fim_ios_popup();
		}

	}
}
