<?php

if ( ! function_exists( 'pizzaro_product_element' ) ) :

	function pizzaro_product_element( $atts, $content = null ){

		extract(shortcode_atts(array(
			'title'				=> '',
			'bg_image'			=> '',
			'product_id'		=> '',
			'el_class'			=> '',
		), $atts));

		$args = array(
			'section_title'		=> $title,
			'bg_image'			=> isset( $bg_image ) && intval( $bg_image ) ? wp_get_attachment_image_src( $bg_image, 'full' ) : array( '//placehold.it/1920x470', '1920', '470' ),
			'product_id'		=> $product_id,
			'section_class'		=> $el_class
		);

		$html = '';
		if( function_exists( 'pizzaro_product' ) ) {
			ob_start();
			pizzaro_product( $args );
			$html = ob_get_clean();
		}

		return $html;
	}

	add_shortcode( 'pizzaro_product' , 'pizzaro_product_element' );

endif;