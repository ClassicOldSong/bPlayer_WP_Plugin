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

// Add JS for bPlayer
function add_bplayer() {
	if ( is_single() ) {
		wp_register_script('bp_script', 'https://cdn.rawgit.com/ClassicOldSong/bPlayer/master/dist/bplayer.min.js');
		wp_register_script('bp_init', 'https://cdn.rawgit.com/ClassicOldSong/fc39415c82707eb9f0ac655a0f4eebba/raw/98e4bb06fa8559411e54de425f6ba476ab5deeec/bp_init.js');
		wp_enqueue_script('bp_script');
		wp_enqueue_script('bp_init');
	}
}

add_action( 'wp_enqueue_scripts', 'add_bplayer' );
?>