<?php

/**
 * Fired during plugin activation
 * @since      1.0.0
 * @package    Fim_Ios_Detect_Pwa
 * @subpackage Fim_Ios_Detect_Pwa/includes
 * @author     Melissa Hiatt, Faith in Marketing <melissa@faithinmarketing.com>
 */
class Fim_Ios_Detect_Pwa_Activator {


	/**
	 * Checks for current settings and adds default settings
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		//Add default Settings
	$option_name = 'fim_ios_detect_pwa';

		$options = array(
			'display' => 'home',
			'message' => 'Add this site to your device by clicking <img src="'. plugin_dir_url( __DIR__ ).'public/images/share_icon.png' .'" width="19" height="37" > then select "Add to Home Screen"'
		);

		foreach ($options as $k => $v) {
			$fetch_option = get_option($option_name.'_'.$k);

			if(!$fetch_option ){
				add_option( $option_name.'_'.$k, $v );
			}

		} //endforeach

	}

}
