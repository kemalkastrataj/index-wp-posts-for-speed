<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/OllieJones
 * @since             1.0.0
 * @package           Index_Wp_Posts_For_Speed
 *
 * @wordpress-plugin
 * Plugin Name:       Index WP Posts For Speed
 * Plugin URI:        https://github.com/OllieJones/index-wp-posts-for-speed
 * Description:       Uses trigram indexing to accelerate WordPress search.
 * Version:           1.0.0
 * Author:            Oliver Jones
 * Author URI:        https://github.com/OllieJones/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       index-wp-posts-for-speed
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
define( 'INDEX_WP_POSTS_FOR_SPEED_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-index-wp-posts-for-speed-activator.php
 */
function activate_index_wp_posts_for_speed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-index-wp-posts-for-speed-activator.php';
	Index_Wp_Posts_For_Speed_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-index-wp-posts-for-speed-deactivator.php
 */
function deactivate_index_wp_posts_for_speed() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-index-wp-posts-for-speed-deactivator.php';
	Index_Wp_Posts_For_Speed_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_index_wp_posts_for_speed' );
register_deactivation_hook( __FILE__, 'deactivate_index_wp_posts_for_speed' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-index-wp-posts-for-speed.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_index_wp_posts_for_speed() {

	$plugin = new Index_Wp_Posts_For_Speed();
	$plugin->run();

}
run_index_wp_posts_for_speed();
