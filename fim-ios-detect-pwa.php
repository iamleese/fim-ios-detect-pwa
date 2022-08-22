<?php

/**
 *
 * @link              https://faithinmarketing.com
 * @since             1.0.0
 * @package           Fim_Ios_Detect_Pwa
 *
 * @wordpress-plugin
 * Plugin Name:       iOS Detection for PWA
 * Plugin URI:        https://faithinmarketing.com/websites
 * Description:       Detects iOS devices to activate a popup to "add to homescreen"
 * Version:           1.0.0
 * Author:            Melissa Hiatt, Faith in Marketing
 * Author URI:        https://faithinmarketing.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fim-ios-detect-pwa
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'FIM_IOS_DETECT_PWA_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fim-ios-detect-pwa-activator.php
 */
function activate_fim_ios_detect_pwa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fim-ios-detect-pwa-activator.php';
	Fim_Ios_Detect_Pwa_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fim-ios-detect-pwa-deactivator.php
 */
function deactivate_fim_ios_detect_pwa() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fim-ios-detect-pwa-deactivator.php';
	Fim_Ios_Detect_Pwa_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fim_ios_detect_pwa' );
register_deactivation_hook( __FILE__, 'deactivate_fim_ios_detect_pwa' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fim-ios-detect-pwa.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fim_ios_detect_pwa() {

	$plugin = new Fim_Ios_Detect_Pwa();
	$plugin->run();

}
run_fim_ios_detect_pwa();
