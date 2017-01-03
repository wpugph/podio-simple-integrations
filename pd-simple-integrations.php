<?php
/*
 * Plugin Name: PD Simple Integrations
 * Version: 1.0
 * Plugin URI: https://carl.alber2.com/
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Carl Alberto
 * Author URI: https://carl.alber2.com/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: pd-simple-integrations
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Carl Alberto
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-pd-simple-integrations.php' );
require_once( 'includes/class-pd-simple-integrations-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-pd-simple-integrations-admin-api.php' );
require_once( 'includes/lib/class-pd-simple-integrations-post-type.php' );
require_once( 'includes/lib/class-pd-simple-integrations-taxonomy.php' );

/**
 * Returns the main instance of PD_Simple_Integrations to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object PD_Simple_Integrations
 */
function PD_Simple_Integrations () {
	$instance = PD_Simple_Integrations::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = PD_Simple_Integrations_Settings::instance( $instance );
	}

	return $instance;

}

PD_Simple_Integrations();
