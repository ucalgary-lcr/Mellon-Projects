<?php
	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'child-css', get_stylesheet_directory_uri() . '/style.css', wp_get_theme()->get('1.1'));
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );

	function trim_shortcode($atts, $content = '') {
		$content = wpv_do_shortcode($content);
		$length = (int)$atts['length'];
	
		if (strlen($content) > $length) {
			$content = substr($content, 0, $length) . '…';
		}
	
		// Strip HTML Tags
		$content = strip_tags($content);
	
		return $content;
	}
	add_shortcode('limit_content', 'trim_shortcode');
?>