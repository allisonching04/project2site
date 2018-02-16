<?php
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	function my_theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

	}
// https://buddypress.org/support/topic/how-can-i-disable-secondary-avatars-in-activity-items/
	function my_remove_secondary_avatars( $bp_legacy ) {
    	remove_filter( 'bp_get_activity_action_pre_meta', array( $bp_legacy, 'secondary_avatars' ), 10, 2 );
	}
	add_action( 'bp_theme_compat_actions', 'my_remove_secondary_avatars' );
?>





