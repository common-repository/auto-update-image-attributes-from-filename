<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/thechetanvaghela
 * @since             1.0.0
 * @package           Auto_Update_Image_Attributes_From_Filename
 *
 * @wordpress-plugin
 * Plugin Name:       Auto Update Image Attributes From Filename
 * Plugin URI:        https://github.com/thechetanvaghela/auto-update-image-attributes-from-filename
 * Description:       Automatically add/update Image attributes(Image Title, Alt Text, Image Caption) from Image Filename.
 * Version:           1.0.1
 * Requires at least: 6.2.2
 * Requires PHP:      7.2
 * Author:            Chetan Vaghela
 * Author URI:        https://github.com/thechetanvaghela
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       auto-update-image-attributes-from-filename
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
define( 'AUTO_UPDATE_IMAGE_ATTRIBUTES_FROM_FILENAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-auto-update-image-attributes-from-filename-activator.php
 */
function auiaff_activate_auto_update_image_attributes_from_filename() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-update-image-attributes-from-filename-activator.php';
	Auto_Update_Image_Attributes_From_Filename_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-auto-update-image-attributes-from-filename-deactivator.php
 */
function auiaff_deactivate_auto_update_image_attributes_from_filename() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-auto-update-image-attributes-from-filename-deactivator.php';
	Auto_Update_Image_Attributes_From_Filename_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'auiaff_activate_auto_update_image_attributes_from_filename' );
register_deactivation_hook( __FILE__, 'auiaff_deactivate_auto_update_image_attributes_from_filename' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-auto-update-image-attributes-from-filename.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function auiaff_run_auto_update_image_attributes_from_filename() {

	$plugin = new Auto_Update_Image_Attributes_From_Filename();
	$plugin->run();

}
auiaff_run_auto_update_image_attributes_from_filename();
