<?php

namespace Index_WP_Posts_For_Speed;
/**
 * @wordpress-plugin
 * Plugin Name:       Index WP Posts For Speed
 * Plugin URI:        https://github.com/OllieJones/index-wp-posts-for-speed
 * Description:       Uses trigram indexing to accelerate WordPress search.
 * Version:           0.0.1
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

define( 'INDEX_WP_POSTS_FOR_SPEED_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-index-wp-posts-for-speed-activator.php
 */
function activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-index-wp-posts-for-speed-activator.php';
	Index_WP_Posts_For_Speed_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-index-wp-posts-for-speed-deactivator.php
 */
function deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-index-wp-posts-for-speed-deactivator.php';
	Index_WP_Posts_For_Speed_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'Index_WP_Posts_For_Speed\activate' );
register_deactivation_hook( __FILE__, 'Index_WP_Posts_For_Speed\deactivate' );

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
 */
function run() {

	$plugin = new Index_WP_Posts_For_Speed();
	$plugin->run();

}
run();
