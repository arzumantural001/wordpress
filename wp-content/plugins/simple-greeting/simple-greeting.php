<?php
/**
 * Plugin Name: Simple Greeting
 * Description: Adds a simple greeting shortcode for WordPress.
 * Version: 1.0.0
 * Author: OpenAI
 * License: GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Render greeting message.
 *
 * @param array $atts Shortcode attributes.
 * @return string
 */
function simple_greeting_render( $atts ) {
	$atts = shortcode_atts(
		array(
			'name' => 'World',
		),
		$atts,
		'simple_greeting'
	);

	$name = sanitize_text_field( $atts['name'] );

	return sprintf( 'Hello, %s!', esc_html( $name ) );
}
add_shortcode( 'simple_greeting', 'simple_greeting_render' );
