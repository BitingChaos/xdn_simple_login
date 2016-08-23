<?php
/*
Plugin Name: XdN Simple Login
Plugin URI: http://xenomorph.net/
Description: This adds a login/logout shortcode link (with optional redirect) and enables the use of shortcode in text widgets. No formatting. Add "[login_logout]" anywhere you want the link.
Author: Nicholas Caito
Author URI: http://xenomorph.net/
Version: 0.5.5
*/

// ----------

/*

Example usage:

[login_logout]

[login_logout redirect="/"]

[login_logout redirect="/files"]

[login_logout redirect="/?p=100"]

*/

// ----------

// enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

// ----------

// log in / log out link
function shortcode_login_logout($atts) {

	// read attributes
	extract(shortcode_atts(array(
		'redirect' => false,
	), $atts));

	// if redirect isn't set, go back to current page
	if (empty($redirect)) {
		$redirect = $_SERVER['REQUEST_URI'];
	}

	// get the login/logout link (without formatting)
	$link = wp_loginout($redirect, false);

	// display link
	return($link);

}

// add shortcode
add_shortcode('login_logout', 'shortcode_login_logout');

