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

	function add_file_types_to_uploads($file_types){
		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );
		return $file_types;
		}
		add_action('upload_mimes', 'add_file_types_to_uploads');
?>