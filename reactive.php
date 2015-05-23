<?php
/*
Plugin Name: Reactive
Plugin URI: http://wpbakery.com/vc
Description: Make Wordpress navigation more reactive
Version: 0.1
Author: Gianmarco Leone

License: GPLv2 or later

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*Plugin code*/
function reactive_script()
{
    wp_enqueue_script( 'reactive', plugins_url( 'reactive.js', __FILE__ ), array('jquery'), '', true );    
}

add_action( 'get_footer', 'reactive_script' );

/*Admin code*/
include_once( 'reactive_options.php');



function reactive_menu()
{
    add_options_page( __( 'Reactive Settings' , 'reactive' ), __( 'Reactive', 'reactive' ), 'manage_options', 'reactive_options', 'reactive_options_page' );
}

if ( is_admin() ) {
    add_action( 'admin_menu', 'reactive_menu' );
    add_action( 'admin_init', 'reactive_settings' );
}

?>