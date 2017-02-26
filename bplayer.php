<?php
/*
Plugin Name: bPlayer
Plugin URI: http://bplayer.js.org
Description: A better audio player for WordPress
Version: 1.0.0
Author: ClassicOldSong
Author URI: http://ccoooss.com
License: https://cos.mit-license.org
*/

include_once ('bp-shortcode.php');

define('BP_URL', plugin_dir_url(__FILE__));

// Add JS for bPlayer
function add_bplayer() {
	if ( is_single() ) {
		wp_register_script('bp_script', BP_URL . 'js/bplayer.min.js');
		wp_register_script('bp_init', BP_URL . 'js/bp-init.js');
		wp_enqueue_script('bp_script');
		wp_enqueue_script('bp_init');
	}
}

add_action( 'wp_enqueue_scripts', 'add_bplayer' );
?>