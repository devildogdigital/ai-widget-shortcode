<?php
/**
 * Plugin Name: AI Widget Shortcode
 * Description: Embeds a microphone-enabled AI voice assistant anywhere in WordPress using the [ai_widget] shortcode.
 * Version: 1.1.0
 * Author: Travis Holzem
 * Author URI: https://devildogdigital.ai
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Outputs the AI voice assistant widget.
 *
 * Usage:
 * [ai_widget url="https://example.com/your-ai-widget"]
 */
function dd_ai_widget_shortcode( $atts ) {

	$atts = shortcode_atts(
		array(
			'url'    => '',
			'height' => '200px',
		),
		$atts,
		'ai_widget'
	);

	$widget_url = esc_url( $atts['url'] );
	$height     = sanitize_text_field( $atts['height'] );

	if ( empty( $widget_url ) ) {
		return '<p>AI Widget URL has not been configured.</p>';
	}

	$frame_id = 'ai-assistant-frame-' . wp_rand( 1000, 999999 );

	ob_start();
	?>

	<div class="ai-widget-shortcode" style="display:flex; justify-content:center; align-items:center;">
		<iframe
			src="<?php echo esc_url( $widget_url ); ?>"
			allow="microphone"
			style="width:100%; height:<?php echo esc_attr( $height ); ?>; border:none;"
			id="<?php echo esc_attr( $frame_id ); ?>"
			title="AI Voice Assistant"
		></iframe>
	</div>

	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const frame = document.getElementById(
			<?php echo wp_json_encode( $frame_id ); ?>
		);

		if (!frame) {
			return;
		}

		frame.addEventListener('load', function () {
			if (!navigator.permissions || !navigator.permissions.query) {
				return;
			}

			navigator.permissions.query({ name: 'microphone' })
				.then(function (result) {
					if (result.state === 'granted') {
						console.log('Microphone access already granted');
					} else if (result.state === 'prompt') {
						console.log('User may be prompted for microphone access');
					}
				})
				.catch(function () {
					// Browser may not support microphone permission queries.
				});
		});
	});
	</script>

	<?php

	return ob_get_clean();
}

add_shortcode( 'ai_widget', 'dd_ai_widget_shortcode' );
