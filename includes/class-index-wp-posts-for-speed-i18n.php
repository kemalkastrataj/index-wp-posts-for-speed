<?php

namespace Index_WP_Posts_For_Speed;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @package    Index_Wp_Posts_For_Speed
 * @subpackage Index_Wp_Posts_For_Speed/includes
 * @author     Oliver Jones <oj@plumislandmedia.net>
 */
class Index_WP_Posts_For_Speed_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'index-wp-posts-for-speed',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
