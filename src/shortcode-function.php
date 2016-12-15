<?php
/**
 * Shortcode Function
 */

function sqweb_button_short_code($atts = [], $content = null, $tag = '') {

	$wporg_atts = shortcode_atts( [
                                     'type' => 'normal',
                                 ], $atts, $tag );

	echo '<div class="sqweb-button' . ( 'normal' !== $wporg_atts['type'] ? ' multipass-' . $wporg_atts['type'] : '' ) . '"></div>';
}

add_shortcode( 'sqweb_button', 'sqweb_button_short_code' );
