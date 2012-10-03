<?php
/*
Plugin Name: TODO
Plugin URI: TODO
Description: TODO
Version: 1.0
Author: TODO
Author URI: TODO
Author Email: TODO
License:
*/

class PluginName {
    function __construct() {
        load_plugin_textdomain( 'plugin-name-locale', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

        add_action( 'admin_print_styles', array( &$this, 'register_admin_styles' ) );
        add_action( 'admin_enqueue_scripts', array( &$this, 'register_admin_scripts' ) );

        add_action( 'wp_enqueue_scripts', array( &$this, 'register_plugin_styles' ) );
        add_action( 'wp_enqueue_scripts', array( &$this, 'register_plugin_scripts' ) );

        register_activation_hook( __FILE__, array( &$this, 'activate' ) );
        register_deactivation_hook( __FILE__, array( &$this, 'deactivate' ) );

        add_action( 'TODO', array( $this, 'action_method_name' ) );
        add_filter( 'TODO', array( $this, 'filter_method_name' ) );
    }

    public function activate( $network_wide ) {
    }

    public function deactivate( $network_wide ) {
    }

    public function register_admin_styles() {
        wp_register_style( 'plugin-name-admin-styles', plugins_url( 'plugin-name/css/admin.css' ) );
        wp_enqueue_style( 'plugin-name-admin-styles' );
    }

    public function register_admin_scripts() {
        wp_register_script( 'plugin-name-admin-script', plugins_url( 'plugin-name/js/admin.js' ) );
        wp_enqueue_script( 'plugin-name-admin-script' );
    }

    public function register_plugin_styles() {
        wp_register_style( 'plugin-name-plugin-styles', plugins_url( 'plugin-name/css/display.css' ) );
        wp_enqueue_style( 'plugin-name-plugin-styles' );
    }

    public function register_plugin_scripts() {
        wp_register_script( 'plugin-name-plugin-script', plugins_url( 'plugin-name/js/display.js' ) );
        wp_enqueue_script( 'plugin-name-plugin-script' );
    }

    function action_method_name() {
    }

    function filter_method_name() {
    }
}

new PluginName();
