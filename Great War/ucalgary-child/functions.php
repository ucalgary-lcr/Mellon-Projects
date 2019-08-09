<?php
	function my_theme_enqueue_styles() {
		wp_enqueue_style( 'child-css', get_stylesheet_directory_uri() . '/style.css', wp_get_theme()->get('1.1'));
	}
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );


		function my_favicon_link() {
			echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
		}
		add_action( 'wp_head', 'my_favicon_link' );

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
	
		function show_contentdm() {
			$collection = 'cmh';
			$pointer = types_render_field( 'contentdm-id', array( 'output' => 'raw') );
			$xmlData = file_get_contents("https://server22007.contentdm.oclc.org/dmwebservices/index.php?q=dmGetCompoundObjectInfo/$collection/$pointer/xml");
			$xml = simplexml_load_string($xmlData);
			$firstPage = $xml->xpath('(//page/pageptr)[position()=1]')[0];
			$imgStr = "https://cdm22007.contentdm.oclc.org/utils/ajaxhelper/?CISOROOT=$collection&CISOPTR=$firstPage&action=2&DMSCALE=10000&DMWIDTH=10000&DMHEIGHT=10000&DMX=0&DMY=0";

			return $imgStr;
		}
		add_shortcode('contentdm_imgurl', 'show_contentdm');
			

		add_shortcode('pdf-file-meta', function($atts){
			$atts = shortcode_atts( array(
				'post_id' => get_the_ID(),
				'meta_name' => 'type',
			), $atts );
			$media  = get_attached_media(null, $atts['post_id']);
			$mediaID = key($media);
			$res = '';
			$file = get_attached_file( $mediaID );
			 
			switch($atts['meta_name']){
				case 'type':
					if ( preg_match( '/^.*?\.(\w+)$/', $file, $matches ) ) {
						$res = esc_html( strtoupper( $matches[1] ) );
					}
					break;
				case 'size':
					$res = size_format(filesize( $file ));
					break;
			}
			return $res;
		});
?>