<?php
add_action( 'woocommerce_cart_calculate_fees', 'byconsolewoodt_woo_add_cart_fee' );

function byconsolewoodt_woo_add_cart_fee( $cart ){

/*
* from v1.2.0
*/
global $woocommerce;
global $get_byc_wooodt_data;
$ByConsoleWooODTExtended=new BycWooODT_class();
$wooodtextendeds=$ByConsoleWooODTExtended->checkResponse();
$get_byc_wooodt_data=$wooodtextendeds;

if ( ! $_POST || ( is_admin() && ! is_ajax() ) ) {
        return;
    }

    if ( isset( $_POST['post_data'] ) ) {
        parse_str( $_POST['post_data'], $post_data );
    } else {
        $post_data = $_POST; // fallback for final checkout (non-ajax)
    }

if (isset($post_data['byconsolewooodt_pickup_location']) && $post_data['byconsolewooodt_pickup_location']!='') {	
	/*****/
	$byconsolewooodt_pickup_location_ajax_val = $post_data['byconsolewooodt_pickup_location'];
	/*****/
	$byconsolewooodt_pickup_location_array = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];
	foreach($byconsolewooodt_pickup_location_array as $byconsolewooodt_pickup_location_array_single_key => $byconsolewooodt_pickup_location_array_single_val)
		{
			if($byconsolewooodt_pickup_location_array_single_key == $byconsolewooodt_pickup_location_ajax_val)
			{
			$byconsolewooodt_pickup_location_array_shipping_cost = $byconsolewooodt_pickup_location_array_single_val['shipping_cost'];
			$byconsolewooodt_pickup_location_array_location = $byconsolewooodt_pickup_location_array_single_val['location'];
			}
		}
		if($byconsolewooodt_pickup_location_array_shipping_cost != '')
		{		
        	WC()->cart->add_fee( 'Pickup Charge ( Pickup from '. $byconsolewooodt_pickup_location_array_location.')' , $byconsolewooodt_pickup_location_array_shipping_cost );
		}
 }

$byconsolewooodt_checkout_page_tax_include_with_shipping_cost = $$get_byc_wooodt_data['byconsolewooodt_checkout_page_tax_include_with_shipping_cost'];
 if (isset($post_data['byconsolewooodt_delivery_location']) && $post_data['byconsolewooodt_delivery_location']!='') {	
	/*****/
	$byconsolewooodt_delivery_location_ajax_val = $post_data['byconsolewooodt_delivery_location'];
	/*****/
		$byconsolewooodt_delivery_location_array = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];
		foreach($byconsolewooodt_delivery_location_array as $byconsolewooodt_delivery_location_array_single_key => $byconsolewooodt_delivery_location_array_single_val)
		{
			if($byconsolewooodt_delivery_location_array_single_key == $byconsolewooodt_delivery_location_ajax_val)
			{
			$byconsolewooodt_delivery_location_array_shipping_cost = $byconsolewooodt_delivery_location_array_single_val['shipping_cost'];
			$byconsolewooodt_delivery_location_array_location = $byconsolewooodt_delivery_location_array_single_val['location'];
			}
		}

		if($byconsolewooodt_delivery_location_array_shipping_cost != '')
		{		
			if($byconsolewooodt_checkout_page_tax_include_with_shipping_cost == 'yes'){
			WC()->cart->add_fee( 'Delivery Charge ( delivery to '. $byconsolewooodt_delivery_location_array_location.')' , $byconsolewooodt_delivery_location_array_shipping_cost, true, '' );
			}else{
        	WC()->cart->add_fee( 'Delivery Charge ( delivery to '. $byconsolewooodt_delivery_location_array_location.')' , $byconsolewooodt_delivery_location_array_shipping_cost );
			}
		}
 }
}
?>