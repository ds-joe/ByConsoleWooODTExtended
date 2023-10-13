<?php
	//include('../../../../wp-config.php');	
	include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
	/*echo '<pre>';
	print_r($_POST);
	echo '</pre>';*/
	if(!empty($_POST['byc_calendar_filter_val'])){
		$statusArrayVal = $_POST['byc_calendar_filter_val'];
	}else{
		$statusArrayVal = 'any';
	}
	
	
	
	if($_POST['byc_calendar_order_type_search'] !=''){
		$orderTypeArray = array(
		'key' => 'byconsolewooodt_delivery_type',
		'value' => $_POST['byc_calendar_order_type_search'],
		'compare' => '='
		);
	}else{
		$orderTypeArray = '';
	}
	
	$filters = array(
		'post_status' =>$statusArrayVal,
		'post_type' => 'shop_order',
		'paged' => -1,
		'meta_key' => '_customer_user',
		'posts_per_page' => 1500,
		'meta_query' => array(
			$orderTypeArray
		)

	);
	
	$the_query = new WP_Query( $filters );
	
	$sorted_orders=$the_query->posts;
	

	foreach($sorted_orders as  $single_order_key => $single_order_val) {
		
		$orderId = $single_order_val->ID;
		$orderType = get_post_meta( $orderId, 'byconsolewooodt_delivery_type', true );
		$orderDate = get_post_meta( $orderId, 'byconsolewooodt_delivery_date', true );
		$orderTime = get_post_meta( $orderId, 'byconsolewooodt_delivery_time', true );
		
		$formatedNewDate = date("Y-m-d", strtotime($orderDate));
		
		if($orderType == 'take_away'){
			$orderTypeVal = 'Pickup';
		}
		if($orderType == 'levering'){
			$orderTypeVal = 'Delivery';
		}
		
		$order = wc_get_order( $orderId );
		
		$billingFirstName = $order->get_billing_first_name();
		$billingLastName = $order->get_billing_last_name();
		$fullName = $billingFirstName.' '.$billingLastName;
		$currencySymbol = get_woocommerce_currency_symbol();
		$order->get_total();

		$arr[] = array(
					'id' => $orderId,
					'title' => $orderId,
					'description' => 'Name: '.$fullName .' | '.$orderTypeVal.' Time:'.$orderTime,
					'start' => $formatedNewDate .' '.'10:00',
					'end' => $formatedNewDate .' '.'10:00',
					'total' => $order->get_total(),
					'customername' => $fullName,
					'ordertype' => $orderType,
					'ordertypeVal' => $orderTypeVal,
					'ordertime' => $orderTime,
					'currencysymbol' => $currencySymbol				
				);//assign each sub-array to the newly created array
	} 
	
	echo json_encode($arr);
	
	
?>