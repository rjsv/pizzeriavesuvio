<?php
/**
 * Input field template
 *
 * @author  Yithemes
 * @package YITH WooCommerce Product Add-Ons Premium
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$class_container = 'ywapo_input_container_'.$type;
$input_classes = array( 'ywapo_input ywapo_input_'.$type , 'ywapo_price_'.esc_attr( $price_type ) );

$index = $key;

/* price html remove + */
$price_hmtl   = ! empty( $price ) ? sprintf( '<span class="ywapo_label_price"> %s</span>', wc_price( $price_calculated ) ) : '';

/* price position fix */

if( $type == 'radio' || $type == 'checkbox') {
    $after_label .= $price_hmtl . $yith_wapo_frontend->getTooltip( $description );
} else {
    $before_label .= $price_hmtl . $yith_wapo_frontend->getTooltip( $description );
}

/* value fix */
if( $type == 'radio' ) {

    $value = $key;
    $key='';

}  else if( $type == 'date' ){

    $input_classes[] = 'ywapo_datepicker';
    $type = 'text';
}

$defatult_style_list = function_exists( 'pizzaro_redux_wapo_default_radio_ids_list' ) ? pizzaro_redux_wapo_default_radio_ids_list() : array();
$class_default_style = in_array( $type_id, $defatult_style_list ) ? 'pz-radio-default' : '';

echo '<div class="ywapo_input_container '.$class_container.' '.$class_default_style.'">';

echo sprintf( '%s<input id="%s" data-typeid="%s" data-price="%s" data-pricetype="%s" data-index="%s" type="%s" name="%s[%s]" value="%s" %s %s class="%s" %s %s %s/>%s',$before_label, $control_id, esc_attr( $type_id ) , esc_attr( $price_calculated ), esc_attr( $price_type ), $index, esc_attr( $type )  , esc_attr( $name ) , $key  , esc_attr( $value ) , ($required ? 'required' : '') , ($checked ? 'checked' : '') , implode( ' ' , $input_classes ) , $min_html , $max_html , $disabled, $after_label  );

echo '</div>';