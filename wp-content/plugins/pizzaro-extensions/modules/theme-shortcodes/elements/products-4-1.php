<?php

if ( ! function_exists( 'pizzaro_products_4_1_element' ) ) :

	function pizzaro_products_4_1_element( $atts, $content = null ){

		extract(shortcode_atts(array(
			'title'				=> '',
			'shortcode_tag'		=> 'recent_products',
			'orderby' 			=> 'date',
			'order' 			=> 'desc',
			'product_id'		=> '',
			'category'			=> '',
			'el_class'			=> '',
		), $atts));

		$shortcode_atts = function_exists( 'pizzaro_get_atts_for_shortcode' ) ? pizzaro_get_atts_for_shortcode( array( 'shortcode' => $shortcode_tag, 'product_category_slug' => $category, 'products_choice' => 'ids', 'products_ids_skus' => $product_id ) ) : array();

		$args = array(
			'section_title'		=> $title,
			'shortcode_tag'		=> $shortcode_tag,
			'shortcode_atts'	=> wp_parse_args( $shortcode_atts, array( 'order' => $order, 'orderby' => $orderby ) ),
			'section_class'		=> $el_class
		);

		$html = '';
		if( function_exists( 'pizzaro_products_4_1_block' ) ) {
			ob_start();
			pizzaro_products_4_1_block( $args );
			$html = ob_get_clean();
		}

		return $html;
	}

	add_shortcode( 'pizzaro_products_4_1' , 'pizzaro_products_4_1_element' );

endif;