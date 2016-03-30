<?php
/**
 * Title Enhancer Plugin
 *
 * @package     KnowTheCode
 * @author      hellofromTonya
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Title Enhancer Plugin
 * Plugin URI:  https://knowthecode.io/labs/lets-build-wordpress-starter-plugin
 * Description: Title Enhancer Plugin - for demo purposes only
 * Version:     1.0.0
 * Author:      hellofromTonya
 * Author URI:  https://knowthecode.io
 * Text Domain: title_enhancer
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
namespace TitleEnhancer;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

define( 'TITLE_ENHANCER_PLUGIN_DIR', trailingslashit( __DIR__ ) );

add_action( 'plugins_loaded', __NAMESPACE__ . '\launch' );
/**
 * Launch the plugin.
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	include( 'src/class-title-enhancer.php' );

	add_action( 'loop_start', __NAMESPACE__ . '\get_title_enhancer' );
}

/**
 * Get the Title Enhancer instance.
 *
 * @since 1.0.0
 *
 * @param string $event_key Optional event key that instantiated the object
 *
 * @return Title_Enhancer
 */
function get_title_enhancer( $event_key = '' ) {
	static $instances = array();

	if ( ! is_instance_stored( $event_key, $instances ) ) {
		$config    = get_plugin_config();
		$event_key = current_action();

		$instances[ $event_key ] = new Title_Enhancer( $config );

		/**
		 * Fires the 'created_an_title_enhancer_instance' event to alert callbacks a new
		 * instance (object) has been created.
		 *
		 * @since 1.0.0
		 *
		 * @param \TitleEnhancer\Title_Enhancer $instances[ $event_key ] The new Title_Enhancer object
		 * @param string $event_key The event name used as the key (and the event that created the object)
		 */
		do_action( 'created_a_title_enhancer_instance', array( $instances[ $event_key ] ), spl_object_hash( $instances[ $event_key ] ) );
	}

	return $instances[ $event_key ];
}

function is_instance_stored( $key, array $instances ) {
	if ( $key && ! is_string( $key ) ) {
		$key = '';
	}

	return ( $key && array_key_exists( $key, $instances ) );

}

/**
 * Get the plugin configuration.
 *
 * @since 1.0.0
 *
 * @return mixed
 */
function get_plugin_config() {
	static $config;

	if ( ! $config ) {
		$config = include( 'config/plugin.php' );
	}

	return $config;
}