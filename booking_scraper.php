<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://thresholdtestingsite.com/
 * @since             1.0.0
 * @package           Booking_scraper
 *
 * @wordpress-plugin
 * Plugin Name:       Booking_Scraper
 * Plugin URI:        http://thresholdtestingsite.com/wpscraper/
 * Description:       Place Shortcodes and Get Scraper Forms.
 * Version:           1.0.0
 * Author:            Atul
 * Author URI:        http://thresholdtestingsite.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       booking_scraper
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
define( 'BOOKING_SCRAPER_VERSION', '1.0.0' ); 

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-booking_scraper-activator.php
 */
function activate_booking_scraper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-booking_scraper-activator.php';
	Booking_scraper_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-booking_scraper-deactivator.php
 */
function deactivate_booking_scraper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-booking_scraper-deactivator.php';
	Booking_scraper_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_booking_scraper' );
register_deactivation_hook( __FILE__, 'deactivate_booking_scraper' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-booking_scraper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_booking_scraper() {

	$plugin = new Booking_scraper();
	$plugin->run();

}
run_booking_scraper();
