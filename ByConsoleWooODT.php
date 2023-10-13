<?php

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly /** 
/*
* Plugin Name: WooODT extended
* Plugin URI: https://plugins.byconsole.com/product/byconsole-wooodt-extended/ 
* Description: Let your buyers to choose if order to deliver or pickup along with their chosen date and time (Need to have Woocommerce installed first) Read product blog to know about various HOW TOs @ https://blog.byconsole.com/ . 
* Version: 1.2.0
* Author: Mrinmoy Dalabar 
* Author URI: https://byconsole.com 
* Text Domain: ByConsoleWooODTExtended
* Domain Path: /languages
* License: Check the Licensing folder 
*/

error_reporting(0);
global $wp;
include('inc/class/byc_odt_class_file.php');
global $get_byc_wooodt_data;
$get_byc_wooodt_data = array();
$ByConsoleWooODTExtended = new BycWooODT_class();
$currentPageURL = add_query_arg($wp->query_vars);
$post_id = get_option('woocommerce_checkout_page_id');
$post = get_post($post_id);
$slug = $post->post_name;
if (stripos($currentPageURL, $slug) !== false) {
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;
} else {
	$wooodtextendeds = $ByConsoleWooODTExtended->get_blank();
	$get_byc_wooodt_data = $wooodtextendeds;
}
function Byconsolewooodt_plugin_activation()
{
	global $wpdb;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;
	$wooodtextendeds_update_option = [];
	if (!$get_byc_wooodt_data['byconsolewooodt_order_type']) {
		$byconsolewooodt_order_type_update = 'both';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_opening_break_hours_from']) {
		$byconsolewooodt_opening_break_hours_from_update = '14:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_opening_break_hours_to']) {
		$byconsolewooodt_opening_break_hours_to_update = '14:15';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_hours_break_from']) {
		$byconsolewooodt_delivery_hours_break_from_update = '14:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_hours_break_to']) {
		$byconsolewooodt_delivery_hours_break_to_update = '14:15';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_pickup_wait_times']) {
		$byconsolewooodt_pickup_wait_times_update = 30;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_times']) {
		$byconsolewooodt_delivery_times_update = 20;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_preorder_days']) {
		$byconsolewooodt_preorder_days_update = 10;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_restricted_preorder_days']) {
		$byconsolewooodt_restricted_preorder_days_update = 1;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_opening_hours_from']) {
		$byconsolewooodt_opening_hours_from_update = '10:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_opening_hours_to']) {
		$byconsolewooodt_opening_hours_to_update = '10:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_hours_from']) {
		$byconsolewooodt_delivery_hours_from_update = '10:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_hours_to']) {
		$byconsolewooodt_delivery_hours_to_update = '10:00';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_pickup_days']) {
		$byconsolewooodt_pickup_days_update = '1 2 3 4 5 6 7';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_days']) {
		$byconsolewooodt_delivery_days_update = '1 2 3 4 5 6 7';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_widget_field_position']) {
		$byconsolewooodt_widget_field_position_update = 'top';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_hours_format']) {
		$byconsolewooodt_hours_format_update = 'h:i A';
	}
	if (!$get_byc_wooodt_data['display_time_formate_as']) {
		$display_time_formate_as_update = 'fixed_time';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting']) {
		$byconsolewooodt_wooodt_date_formate_setting_update = 'm-d-Y';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location']) {
		$byconsolewooodt_multiple_pickup_location_update = 1;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location']) {
		$byconsolewooodt_multiple_delivery_location_update = 1;
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_orders_delivered']) {
		$language_translator_byconsolewooodt_orders_delivered_update = 'The order will be delivered on [deliver_date] at [deliver_time]';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_orders_pick_up']) {
		$language_translator_byconsolewooodt_orders_pick_up_update = 'The order can be Picked Up on [pickup_date] at [pickup_time]';
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_pickup_location']) {
		$location_id = 1;
		$location_disable = "";
		$location = "My pickup address";
		$location_delivery = "My delivery address";
		$address_latitude = "";
		$address_longitude = "";
		$start_time = "14:00";
		$end_time = "22:00";
		$min_cart_value = "";
		$shipping_cost = "";
		$email_id_on_each_delivery_location = "";
		$service = "1";
		$break_start_time = "15:00";
		$break_end_time = "15:00";
		$threshold_hours = "";
		$threshold_minutes = "";
		$max_order_by_threshold_hours = "";
	}
	if (!$get_byc_wooodt_data['byconsolewooodt_delivery_location']) {
	}
	$curl = curl_init();
	curl_setopt_array(
		$curl,
		array(
			CURLOPT_URL => 'https://byconsole.net/api/WooODTExtendedV3/api/V3/update_option',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => ' {
		  "url":{"url":"' . $_SERVER['SERVER_NAME'] . '"},
		  "ip_address":"' . $_SERVER['REMOTE_ADDR'] . '",
		  "wooodtextendeds": { 
			"order_type" :"' . $byconsolewooodt_order_type_update . '",
			"opening_break_hours_from":"' . $byconsolewooodt_opening_break_hours_from_update . '",
			"opening_break_hours_to":"' . $byconsolewooodt_opening_break_hours_to_update . '",
			"delivery_hours_break_from":"' . $byconsolewooodt_delivery_hours_break_from_update . '",
			"delivery_hours_break_to":"' . $byconsolewooodt_delivery_hours_break_to_update . '",
			"pickup_wait_times":"' . $byconsolewooodt_pickup_wait_times_update . '",	
			"delivery_wait_times":"' . $byconsolewooodt_delivery_times_update . '",
			"preorder_days":"' . $byconsolewooodt_preorder_days_update . '",
			"restricted_preorder_days":"' . $byconsolewooodt_restricted_preorder_days_update . '",
			"opening_hours_from":"' . $byconsolewooodt_opening_hours_from_update . '",
			"opening_hours_to":"' . $byconsolewooodt_opening_hours_to_update . '",
			"delivery_hours_from":"' . $byconsolewooodt_delivery_hours_from_update . '",
			"delivery_hours_to":"' . $byconsolewooodt_delivery_hours_to_update . '",
			"pickup_days":"' . $byconsolewooodt_pickup_days_update . '",
			"delivery_days":"' . $byconsolewooodt_delivery_days_update . '",
			"widget_field_position":"' . $byconsolewooodt_widget_field_position_update . '",
			"hours_format":"' . $byconsolewooodt_hours_format_update . '",
			"display_time_format_as":"' . $display_time_formate_as_update . '",
			"wooodt_date_format_setting":"' . $byconsolewooodt_wooodt_date_formate_setting_update . '",
			"multiple_pickup_location":"' . $byconsolewooodt_multiple_pickup_location_update . '",
			"multiple_delivery_location":"' . $byconsolewooodt_multiple_delivery_location_update . '"
		 },
		 "location":{
				"location_id":"' . $location_id . '",
				"location_disable":"' . $location_disable . '",
				"location":"' . $location . '",
				"address_latitude":"' . $address_latitude . '",
				"address_longitude":"' . $address_longitude . '",
				"start_time":"' . $start_time . '",
				"end_time":"' . $end_time . '",
				"min_cart_value":"' . $min_cart_value . '",
				"shipping_cost":"' . $shipping_cost . '",
				"email_id_on_each_location":"' . $email_id_on_each_delivery_location . '",
					"sun_service":1,
					"sun_start_time":"' . $start_time . '",
					"sun_end_time":"' . $end_time . '",
					"sun_break_start_time":"' . $break_start_time . '",
					"sun_break_end_time":"' . $break_end_time . '",
					"mon_service":1,
					"mon_start_time":"' . $start_time . '",
					"mon_end_time":"' . $end_time . '",
					"mon_break_start_time":"' . $break_start_time . '",
					"mon_break_end_time":"' . $break_end_time . '",
					"tue_service":1,
					"tue_start_time":"' . $start_time . '",
					"tue_end_time":"' . $end_time . '",
					"tue_break_start_time":"' . $break_start_time . '",
					"tue_break_end_time":"' . $break_end_time . '",
					"wed_service":1,
					"wed_start_time":"' . $start_time . '",
					"wed_end_time":"' . $end_time . '",
					"wed_break_start_time":"' . $break_start_time . '",
					"wed_break_end_time":"' . $break_end_time . '",
					"thu_service":1,
					"thu_start_time":"' . $start_time . '",
					"thu_end_time":"' . $end_time . '",
					"thu_break_start_time":"' . $break_start_time . '",
					"thu_break_end_time":"' . $break_end_time . '",
					"fri_service":1,
					"fri_start_time":"' . $start_time . '",
					"fri_end_time":"' . $end_time . '",
					"fri_break_start_time":"' . $break_start_time . '",
					"fri_break_end_time":"' . $break_end_time . '",
					"sat_service":1,
					"sat_start_time":"' . $start_time . '",
					"sat_end_time":"' . $end_time . '",
					"sat_break_start_time":"' . $break_start_time . '",
					"sat_break_end_time":"' . $break_end_time . '"
		    },
			"delivery":{
				"location_id":"' . $location_id . '",
				"location_disable":"' . $location_disable . '",
				"location":"' . $location_delivery . '",
				"address_latitude":"' . $address_latitude . '", 
				"address_longitude":"' . $address_longitude . '",
				"start_time":"' . $start_time . '",
				"end_time":"' . $end_time . '",
				"min_cart_value":"' . $min_cart_value . '",
				"shipping_cost":"' . $shipping_cost . '",
				"email_id_on_each_location":"' . $email_id_on_each_delivery_location . '",
					"sun_service":1,
					"sun_start_time":"' . $start_time . '",
					"sun_end_time":"' . $end_time . '",
					"sun_break_start_time":"' . $break_start_time . '",
					"sun_break_end_time":"' . $break_end_time . '",
					"mon_service":1,
					"mon_start_time":"' . $start_time . '",
					"mon_end_time":"' . $end_time . '",
					"mon_break_start_time":"' . $break_start_time . '",
					"mon_break_end_time":"' . $break_end_time . '",
					"tue_service":1,
					"tue_start_time":"' . $start_time . '",
					"tue_end_time":"' . $end_time . '",
					"tue_break_start_time":"' . $break_start_time . '",
					"tue_break_end_time":"' . $break_end_time . '",
					"wed_service":1,
					"wed_start_time":"' . $start_time . '",
					"wed_end_time":"' . $end_time . '",
					"wed_break_start_time":"' . $break_start_time . '",
					"wed_break_end_time":"' . $break_end_time . '",
					"thu_service":1,
					"thu_start_time":"' . $start_time . '",
					"thu_end_time":"' . $end_time . '",
					"thu_break_start_time":"' . $break_start_time . '",
					"thu_break_end_time":"' . $break_end_time . '",
					"fri_service":1,
					"fri_start_time":"' . $start_time . '",
					"fri_end_time":"' . $end_time . '",
					"fri_break_start_time":"' . $break_start_time . '",
					"fri_break_end_time":"' . $break_end_time . '",
					"sat_service":1,
					"sat_start_time":"' . $start_time . '",
					"sat_end_time":"' . $end_time . '",
					"sat_break_start_time":"' . $break_start_time . '",
					"sat_break_end_time":"' . $break_end_time . '"
		    },
			"language_translator":{
				"orders_delivered":"' . $language_translator_byconsolewooodt_orders_delivered_update . '",
				"orders_pick_up":"' . $language_translator_byconsolewooodt_orders_pick_up_update . '"
			},
			"features_settings":{
				"wooodt_date_formate_setting":"' . $byconsolewooodt_wooodt_date_formate_setting_update . '"
			}	
		}
	',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json'
			),
		)
	);
	$response = curl_exec($curl);
	curl_close($curl);
	// echo $response;
	// die();
}
register_activation_hook(__FILE__, 'Byconsolewooodt_plugin_activation');
include('inc/admin.php');
include('inc/wooodt_features_settings.php');
include('inc/language-translator.php');
include('inc/wooodt-color-picker.php');
global $woocommerce;
// load plugin's text domaim
add_action('plugins_loaded', 'byconsolewooodt_load_text_domain');
function byconsolewooodt_load_text_domain()
{
	load_plugin_textdomain('ByConsoleWooODTExtended', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
// we need cookie so lets have a safe and confirm way
add_action('init', 'byconsolewooodtSetCookie', 1);
function byconsolewooodtSetCookie()
{
	global $get_byc_wooodt_data;
	// set default values if empty to avoid undefined index issue using cookies
	if (empty($_COOKIE['byconsolewooodt_delivery_widget_cookie'])) {
		// set default value based on order type selection on settings page
		if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'levering') {
			$byconsolewooodt_delivery_widget = array(
				'byconsolewooodt_widget_date_field' => '',
				'byconsolewooodt_widget_time_field' => '',
				'byconsolewooodt_widget_time_type_field' => '',
				'byconsolewooodt_widget_type_field' => 'levering',
				'byconsolewooodt_widget_pickup_location' => '',
				'byconsolewooodt_widget_delivery_location' => ''
			);
		} else if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'take_away') {
			$byconsolewooodt_delivery_widget = array(
				'byconsolewooodt_widget_date_field' => '',
				'byconsolewooodt_widget_time_field' => '',
				'byconsolewooodt_widget_time_type_field' => '',
				'byconsolewooodt_widget_type_field' => 'take_away',
				'byconsolewooodt_widget_pickup_location' => '',
				'byconsolewooodt_widget_delivery_location' => ''
			);
		} else if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'both') {
			$byconsolewooodt_delivery_widget = array(
				'byconsolewooodt_widget_date_field' => '',
				'byconsolewooodt_widget_time_field' => '',
				'byconsolewooodt_widget_time_type_field' => '',
				'byconsolewooodt_widget_type_field' => 'levering',
				'byconsolewooodt_widget_pickup_location' => '',
				'byconsolewooodt_widget_delivery_location' => ''
			);
		} else { // if accedently no value set for order type in settings page(if it happen there may be a ghost in your system) 
			$byconsolewooodt_delivery_widget = array(
				'byconsolewooodt_widget_date_field' => '',
				'byconsolewooodt_widget_time_field' => '',
				'byconsolewooodt_widget_time_type_field' => '',
				'byconsolewooodt_widget_type_field' => 'levering',
				'byconsolewooodt_widget_pickup_location' => '',
				'byconsolewooodt_widget_delivery_location' => ''
			);
		}
		$json_byconsolewooodt_delivery_widget = json_encode($byconsolewooodt_delivery_widget);
		setcookie('byconsolewooodt_delivery_widget_cookie', $json_byconsolewooodt_delivery_widget, time() + 60 * 60 * 24 * 1, '/');
		$_COOKIE['byconsolewooodt_delivery_widget_cookie'] = $json_byconsolewooodt_delivery_widget; // Avoide php notice while cookies are just created but not fetched yet in next http request
	} else {
		// if cookies are set already then overwrite cookie value based on admin settings for order type selection
		// get cookie as array to overwrite them
		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);
		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);
		$byconsolewooodt_widget_date_field = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field'] : false;
		$byconsolewooodt_widget_time_field = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] : false;
		$byconsolewooodt_widget_time_type_field = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field'] : false;
		// override the cookie value if order type setting is set as only for delivery or pickup
		global $get_byc_wooodt_data;
		if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'levering') {
			$byconsolewooodt_widget_type_field = 'levering';
		} else if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'take_away') {
			$byconsolewooodt_widget_type_field = 'take_away';
		} else {
			$byconsolewooodt_widget_type_field = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] : false;
		}
		$byconsolewooodt_widget_time_type_field = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field'] : false;
		$byconsolewooodt_widget_pickup_location = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_pickup_location']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_pickup_location'] : false;
		$byconsolewooodt_widget_delivery_location = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_delivery_location']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_delivery_location'] : false;
		$byconsolewooodt_delivery_widget = array(
			'byconsolewooodt_widget_date_field' => $byconsolewooodt_widget_date_field,
			'byconsolewooodt_widget_time_field' => $byconsolewooodt_widget_time_field,
			'byconsolewooodt_widget_time_type_field' => $byconsolewooodt_widget_time_type_field,
			'byconsolewooodt_widget_type_field' => $byconsolewooodt_widget_type_field,
			'byconsolewooodt_widget_pickup_location' => $byconsolewooodt_widget_pickup_location,
			'byconsolewooodt_widget_delivery_location' => $byconsolewooodt_widget_delivery_location
		);
		// set the cookie with new values
		$json_byconsolewooodt_delivery_widget = json_encode($byconsolewooodt_delivery_widget);
		setcookie('byconsolewooodt_delivery_widget_cookie', $json_byconsolewooodt_delivery_widget, time() + 60 * 60 * 24 * 1, '/');
		$_COOKIE['byconsolewooodt_delivery_widget_cookie'] = $json_byconsolewooodt_delivery_widget; // Avoide php notice while cookies are just created but not fetched yet in next http request
	} // end of  if(empty($_COOKIE['byconsolewooodt_delivery_widget_cookie']))
}
// front-end widget 
//class byconsolewooodt_widget extends WP_Widget {
class byconsolewooodt_widget extends WP_Widget
{
	function __construct()
	{
		parent::__construct(
			// Base ID of our widget
			'byconsolewooodt_widget',
			// Widget name will appear in UI
			__('Order delivery time widget', 'ByConsoleWooODTExtended'),
			// Widget description
			array('description' => __('Widget for users to choose time and date of delivery', 'ByConsoleWooODTExtended'), )
		);
	}
	// Creating widget front-end
// This is where the action happens
	public function widget($args, $instance)
	{
		$currentlang = get_bloginfo("language");
		//$currentlang=get_locale();
		global $woocommerce;
		global $get_byc_wooodt_data;
		global $post;
		echo $args['before_widget'];
		if (!empty($instance['byconsolewooodt_widget_title'])) {
			echo $args['before_title'] . apply_filters('widget_title', $instance['byconsolewooodt_widget_title']) . $args['after_title'];
		}
		//echo __( esc_attr( 'Enter your delivery date and time' ), 'ByConsoleWooODTExtended' );
		echo $args['after_widget'];
		// get cookie as array
		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);
		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);
		$byconsolewooodt_delivery_date = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field'] : false;
		$byconsolewooodt_delivery_time = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] : false;
		$byconsolewooodt_delivery_time_type = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_type_field'] : false;
		// override the cookie value if order type setting is set as only for delivery or pickup
		global $get_byc_wooodt_data;
		if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'levering') {
			$byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'levering';
		}
		global $get_byc_wooodt_data;
		if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'take_away') {
			$byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'take_away';
		}
		$byconsolewooodt_delivery_type = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] : false;
		$byconsolewooodt_pickup_location = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_pickup_location']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_pickup_location'] : false;
		$byconsolewooodt_delivery_location = !empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_delivery_location']) ? $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_delivery_location'] : false;
		$isholiday = 'NO';
		$todaydate = date("m/d/Y");
		$todaydate_dm = date("m/d");
		$shownotice = 'none';
		$get_all_dates = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];
		$dateexplode = explode(",", $get_all_dates);
		//Chaking if today is casual holiday
		if (in_array($todaydate, $dateexplode)) {
			$isholiday = 'YES';
		}
		// get todays date 
		$gattodayname = date("l");
		$gattodaynumericval = date("w");
		$sunday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_sunday'];
		$monday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_monday'];
		$tuesday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_tuesday'];
		$wednessday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_wednessday'];
		$thursday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_thursday'];
		$friday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_friday'];
		$saturday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_saturday'];
		/*echo '<script>alert("'.$sunday.'");</script>';*/
		$sunday = ($sunday == '') ? 99 : 0;
		$monday = !empty($monday) ? $monday : 99;
		$tuesday = !empty($tuesday) ? $tuesday : 99;
		$wednessday = !empty($wednessday) ? $wednessday : 99;
		$thursday = !empty($thursday) ? $thursday : 99;
		$friday = !empty($friday) ? $friday : 99;
		$saturday = !empty($saturday) ? $saturday : 99;
		//$allweekdays=array($sunday,$monday,$tuesday,$wednessday,$thursday,$friday,$saturday);
		//print_r($allweekdays);
		// check if shop is closed today
		global $get_byc_wooodt_data;
		if ($sunday == $gattodaynumericval || $monday == $gattodaynumericval || $tuesday == $gattodaynumericval || $wednessday == $gattodaynumericval || $thursday == $gattodaynumericval || $friday == $gattodaynumericval || $saturday == $gattodaynumericval) {
			$isholiday = 'YES';
		}
		$get_all_national_holidays_dates = $get_byc_wooodt_data['byconsolewooodt_admin_national_holiday_date'];
		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];
		$national_holidays_array = explode(",", $get_all_national_holidays_dates);
		// chaking if it is national holiday
		if (in_array($todaydate_dm, $national_holidays_array)) {
			$isholiday = 'YES';
		}
		if ($isholiday === 'NO' || $byconsolewooodt_allow_orders_on_closing_days === 'YES') {
			$pluginPathUrl = plugin_dir_url(__FILE__) . 'images';
			?>
						<div class="loading_image_contanier_for_widget" style="display:none;"><img src="<?php echo $pluginPathUrl; ?>/widget_loading_image.gif" alt="" /></div>
						<form action="" method="post" id="byconsolewooodt_widget_form_validation">
						<?php
						$weekday_today = date('l');
						/*echo '<script>alert("'.$weekday_today.'");</script>';*/
						// populate order type based on order type selection on settings page
						global $get_byc_wooodt_data;
						if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'take_away' || $get_byc_wooodt_data['byconsolewooodt_order_type'] == 'both') {
							$get_option_byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];
							if (!empty($get_option_byconsolewooodt_pickup_lable)) {
								$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];
							} else {
								$byconsolewooodt_pickup_lable = 'Pickup';
							}
							$pickup_label_text = $byconsolewooodt_pickup_lable;
							if ($pickup_label_text == '') {
								$pickup_label_text = 'Pickup';
							}
							?>
								<input type="radio" name="byconsolewooodt_widget_type_field" value="take_away"<?php if ($byconsolewooodt_delivery_type == 'take_away') {
									echo ' checked="checked"';
								} ?> /> 
								<?php
								echo $pickup_label_text;
						}
						global $get_byc_wooodt_data;
						if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'levering' || $get_byc_wooodt_data['byconsolewooodt_order_type'] == 'both') {
							$get_option_byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];
							if (!empty($get_option_byconsolewooodt_delivery_lable)) {
								$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];
							} else {
								$byconsolewooodt_delivery_lable = 'Delivery';
							}
							$deliery_label_text = $byconsolewooodt_delivery_lable;
							if ($deliery_label_text == '') {
								$deliery_label_text = 'Delivery';
							}
							?>
									<input type="radio" name="byconsolewooodt_widget_type_field" value="levering"<?php if ($byconsolewooodt_delivery_type == 'levering') {
										echo ' checked="checked"';
									} ?> /><?php echo $deliery_label_text;
						}
						// populate the delivery location only when levering is selected and delivery location list is not blank
						global $get_byc_wooodt_data;
						$byconsolewooodt_multiple_delivery_location = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];
						$byconsolewooodt_delivery_locations = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];
						//print_r($byconsolewooodt_delivery_locations);
						if ($byconsolewooodt_delivery_type == 'levering' && !empty($byconsolewooodt_delivery_locations) && $byconsolewooodt_multiple_delivery_location == "YES") {
							//$TotalCartAmountValue = $woocommerce->cart->total; // This is without currency symbo 
							$TotalCartAmountValue = $woocommerce->cart->subtotal; // This is without currency symbo 
							$TotalCartContentCount = $woocommerce->cart->cart_contents_count; // This is total no item
							?>
								<br />
								<select name="byconsolewooodt_widget_delivery_location" id="byconsolewooodt_widget_delivery_location" onchange="ByconsolewooodtDeliveryWidgetTimePopulate('.byconsolewooodt_widget_date_field','.byconsolewooodt_widget_time_field',this);">
									<option value=""><?php echo __('Select delivery location', 'ByConsoleWooODTExtended'); ?></option>
									<?php
									if (!empty($byconsolewooodt_delivery_locations)) {
										foreach ($byconsolewooodt_delivery_locations as $delivery_loaction_key => $delivery_loaction_value) {
											$DeliveryLocationArray[] = $delivery_loaction_value['min_cart_value'] . '/' . $delivery_loaction_key;
											if ($delivery_loaction_value['location_disable'] != 1) {
												if (empty($delivery_loaction_value['min_cart_value']) || $delivery_loaction_value['min_cart_value'] == '' || $delivery_loaction_value['min_cart_value'] == 0) {
													$minimum_order_value = __('No bar', 'ByConsoleWooODTExtended');
													$delivery_loaction_option_text_value = $delivery_loaction_value['location'];
												} else {
													//$minimum_order_translate=__('Minimum Order','ByConsoleWooODTExtended');	
													$minimum_order_translate = $get_byc_wooodt_data['byconsolewooodt_minimum_order_text_lable'];
													$minimum_order_value = get_woocommerce_currency_symbol() . $delivery_loaction_value['min_cart_value'];
													$delivery_loaction_option_text_value = $delivery_loaction_value['location'] . '&nbsp;&nbsp;-- &nbsp;&nbsp; ' . $minimum_order_translate . ':&nbsp;(' . $minimum_order_value . ')';
												}
												//$delivery_loaction_option_text_value=$delivery_loaction_value['location'].'&nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;('.$minimum_order_value.')';
												?>
																		<option value="<?php echo $delivery_loaction_key; ?>" <?php if ($delivery_loaction_key == $byconsolewooodt_delivery_location) {
																			   echo ' selected="selected"';
																		   } ?> ><?php echo $delivery_loaction_option_text_value; ?></option>
																	<?php
											}
										} // foreach
									} // !empty
									?>
								</select>
								<?php
								//preparing js varriables for available date and time for this delivery location
								?>
								<script>
									delivery_location_service_sun=[];
									delivery_location_service_mon=[];
									delivery_location_service_tue=[];
									delivery_location_service_wed=[];
									delivery_location_service_thu=[];
									delivery_location_service_fri=[];
									delivery_location_service_sat=[];
									delivery_location_service_usual_start=[];
									delivery_location_service_usual_end=[];
									delivery_location_service_sun_start=[];
									delivery_location_service_mon_start=[];
									delivery_location_service_tue_start=[];
									delivery_location_service_wed_start=[];
									delivery_location_service_thu_start=[];
									delivery_location_service_fri_start=[];
									delivery_location_service_sat_start=[];
									delivery_location_service_sun_end=[];
									delivery_location_service_mon_end=[];
									delivery_location_service_tue_end=[];
									delivery_location_service_wed_end=[];
									delivery_location_service_thu_end=[];
									delivery_location_service_fri_end=[];
									delivery_location_service_sat_end=[];
									delivery_location_service_sun_break_start=[];
									delivery_location_service_mon_break_start=[];
									delivery_location_service_tue_break_start=[];
									delivery_location_service_wed_break_start=[];
									delivery_location_service_thu_break_start=[];
									delivery_location_service_fri_break_start=[];
									delivery_location_service_sat_break_start=[];
									delivery_location_service_sun_break_end=[];
									delivery_location_service_mon_break_end=[];
									delivery_location_service_tue_break_end=[];
									delivery_location_service_wed_break_end=[];
									delivery_location_service_thu_break_end=[];
									delivery_location_service_fri_break_end=[];
									delivery_location_service_sat_break_end=[];
									delivery_location_lat=[];
									delivery_location_long=[];
									delivery_location_custom_time_slot=[];
									delivery_location_number_of_delivery=[];
									//alert('all location stat vars initialized');
								</script>
								<?php
								if (!empty($byconsolewooodt_delivery_locations)) {
									foreach ($byconsolewooodt_delivery_locations as $delivery_loaction_key => $delivery_loaction_value) {
										?>
														<script>
													<?php if (array_key_exists('service', $delivery_loaction_value['sun'])) { ?>
																delivery_location_service_sun[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sun']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_sun[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['mon'])) { ?>
																delivery_location_service_mon[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['mon']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_mon[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['tue'])) { ?>
																delivery_location_service_tue[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['tue']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_tue[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['wed'])) { ?>
																delivery_location_service_wed[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['wed']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_wed[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['thu'])) { ?>
																delivery_location_service_thu[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['thu']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_thu[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['fri'])) { ?>
																delivery_location_service_fri[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['fri']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_fri[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
													<?php if (array_key_exists('service', $delivery_loaction_value['sat'])) { ?>
																delivery_location_service_sat[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sat']['service']; ?>';
													<?php } else { ?>
																delivery_location_service_sat[<?php echo $delivery_loaction_key; ?>]='';
													<?php } ?>
														delivery_location_service_usual_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['start_time']; ?>';
														delivery_location_service_usual_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['end_time']; ?>';
														delivery_location_service_sun_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sun']['start_time']; ?>';
														delivery_location_service_mon_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['mon']['start_time']; ?>';
														delivery_location_service_tue_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['tue']['start_time']; ?>';
														delivery_location_service_wed_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['wed']['start_time']; ?>';
														delivery_location_service_thu_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['thu']['start_time']; ?>';
														delivery_location_service_fri_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['fri']['start_time']; ?>';
														delivery_location_service_sat_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sat']['start_time']; ?>';
														delivery_location_service_sun_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sun']['end_time']; ?>';
														delivery_location_service_mon_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['mon']['end_time']; ?>';
														delivery_location_service_tue_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['tue']['end_time']; ?>';
														delivery_location_service_wed_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['wed']['end_time']; ?>';
														delivery_location_service_thu_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['thu']['end_time']; ?>';
														delivery_location_service_fri_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['fri']['end_time']; ?>';
														delivery_location_service_sat_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sat']['end_time']; ?>';
														delivery_location_service_sun_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sun']['break_start_time']; ?>';
														delivery_location_service_mon_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['mon']['break_start_time']; ?>';
														delivery_location_service_tue_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['tue']['break_start_time']; ?>';
														delivery_location_service_wed_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['wed']['break_start_time']; ?>';
														delivery_location_service_thu_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['thu']['break_start_time']; ?>';
														delivery_location_service_fri_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['fri']['break_start_time']; ?>';
														delivery_location_service_sat_break_start[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sat']['break_start_time']; ?>';
														delivery_location_service_sun_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sun']['break_end_time']; ?>';
														delivery_location_service_mon_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['mon']['break_end_time']; ?>';
														delivery_location_service_tue_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['tue']['break_end_time']; ?>';
														delivery_location_service_wed_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['wed']['break_end_time']; ?>';
														delivery_location_service_thu_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['thu']['break_end_time']; ?>';
														delivery_location_service_fri_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['fri']['break_end_time']; ?>';
														delivery_location_service_sat_break_end[<?php echo $delivery_loaction_key; ?>]='<?php echo $delivery_loaction_value['sat']['break_end_time']; ?>';
														<?php
														include_once(ABSPATH . 'wp-admin/includes/plugin.php');
														// check for plugin using plugin name
														if (is_plugin_active('ByConsoleWooODTExtendedMapAddon/ByConsoleWooODTExtendedMapAddon.php')) {
															if (!empty($delivery_loaction_value['address_latitude'])) {
																?>
																			delivery_location_lat[<?php echo $delivery_loaction_key; ?>]=<?php echo $delivery_loaction_value['address_latitude']; ?>;
																	<?php }
															if (!empty($delivery_loaction_value['address_longitude'])) {
																?>	
																			delivery_location_long[<?php echo $delivery_loaction_key; ?>]=<?php echo $delivery_loaction_value['address_longitude']; ?>;
																		<?php
															}
														}
														?>
														</script>
														<?php
									} //foreach
								} //!empty
								if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {
									$delivery_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];
								}
								if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {
									$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];
								}
								$delivery_per_custom_slot_fetched_array = $delivery_per_custom_slot_array[$delivery_loaction_key];
								//print_r($delivery_per_custom_slot_fetched_array);
								if (!empty($delivery_per_custom_slot_array)) {
									foreach ($delivery_per_custom_slot_array as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value) {
										foreach ($delivery_per_custom_slot_val_single_value as $delivery_per_single_key => $delivery_per_single_val) {
											//echo '<pre>'.$delivery_per_custom_slot_val_single_key.' => '.$delivery_per_single_val['time_slot'].'<br /></pre>';
											?>	
																<script>
																	<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>
																						pickup_location_custom_time_slot[<?php echo $delivery_per_custom_slot_val_single_key; ?>] = '<?php echo $delivery_per_single_val['time_slot']; ?>';
																	<?php }
																	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') { ?>
																						delivery_location_custom_time_slot[<?php echo $delivery_per_custom_slot_val_single_key; ?>] = '<?php echo $delivery_per_single_val['time_slot']; ?>';
																	<?php } ?>
																</script>
													<?php }
									}
									?>
									<?php
								}
						}



						if (!empty($DeliveryLocationArray)) {



							foreach ($DeliveryLocationArray as $DeliveryLocationSingleArrayVal) {



								$ExplodeDeliveryLocationAndKeyValue = explode("/", $DeliveryLocationSingleArrayVal);



								if ($TotalCartAmountValue < $ExplodeDeliveryLocationAndKeyValue[0] && ($ExplodeDeliveryLocationAndKeyValue[0] != 0 || !empty($ExplodeDeliveryLocationAndKeyValue[0]))) {



									//echo $xyz[1];
			


									//disable selection of below min. order options
			


									?> 



												<script>



												jQuery(document).ready(function(){



												//alert('<?php echo $TotalCartAmountValue . '<' . $ExplodePickupLocationAndKeyValue[0]; ?>');



												jQuery('#byconsolewooodt_widget_delivery_location option[value="<?php echo $ExplodeDeliveryLocationAndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



												//alert();



												});



												</script>



												<?php



								} else {



								}



							}



						}



						// populate the pickup location only when take_away is selected and pickup location list is not blank
			


						global $get_byc_wooodt_data;



						$byconsolewooodt_multiple_pickup_location = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



						$byconsolewooodt_pickup_locations = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



						// echo "aaaaaa";
			


						// print_r($byconsolewooodt_pickup_locations);
			


						if ($byconsolewooodt_delivery_type == 'take_away' && !empty($byconsolewooodt_pickup_locations) && $byconsolewooodt_multiple_pickup_location == "YES") {



							?>



								<br />



								<?php



								$TotalCartAmountValue = $woocommerce->cart->total; // This is without currency symbo 
				


								$TotalCartAmountValue = $woocommerce->cart->subtotal;



								?>

								<select name="byconsolewooodt_widget_pickup_location" id="byconsolewooodt_widget_pickup_location" onchange="ByconsolewooodtDeliveryWidgetTimePopulate('.byconsolewooodt_widget_date_field','.byconsolewooodt_widget_time_field',this);">

								<option value="">Select pickup location</option>

								<?php foreach ($byconsolewooodt_pickup_locations as $pickup_loaction_key => $pickup_loaction_value) {

									$PickupLocationArray[] = $pickup_loaction_value['min_cart_value'] . '/' . $pickup_loaction_key;

									if ($pickup_loaction_value['location_disable'] != 1) {

										if (empty($pickup_loaction_value['min_cart_value']) || $pickup_loaction_value['min_cart_value'] == '' || $pickup_loaction_value['min_cart_value'] == 0) {

											$minimum_order_value = __('No bar', 'ByConsoleWooODTExtended');

										} else {

											$minimum_order_value = get_woocommerce_currency_symbol() . $pickup_loaction_value['min_cart_value'];

										}

										//$minimum_order_translate=__('Minimum Order','ByConsoleWooODTExtended');	
				
										$minimum_order_translate = $get_byc_wooodt_data['byconsolewooodt_minimum_order_text_lable'];

										$pickup_loaction_option_text_value = $pickup_loaction_value['location'] . '&nbsp;&nbsp;-- &nbsp;&nbsp;Time &nbsp;( ' . $pickup_loaction_value['start_time'] . '-' . $pickup_loaction_value['end_time'] . ' )&nbsp;&nbsp;-- &nbsp;&nbsp; ' . $minimum_order_translate . ':&nbsp;(' . $minimum_order_value . ')';

										?>

														<option value="<?php echo $pickup_loaction_key; ?>" <?php if ($pickup_loaction_key == $byconsolewooodt_pickup_location) {
															   echo ' selected="selected"';
														   } ?>><?php echo $pickup_loaction_option_text_value; ?></option>

													<?php

									}

								}

								?>

								</select>



								<?php

								echo "location_disable'";



								echo $pickup_loaction_value['location_disable']

									//preparing js varriables for available date and time for this delivery location
				


									?>



								<script>



								pickup_location_service_sun=[];



								pickup_location_service_mon=[];



								pickup_location_service_tue=[];



								pickup_location_service_wed=[];



								pickup_location_service_thu=[];



								pickup_location_service_fri=[];



								pickup_location_service_sat=[];



								pickup_location_service_usual_start=[];



								pickup_location_service_usual_end=[];



								pickup_location_service_sun_start=[];



								pickup_location_service_mon_start=[];



								pickup_location_service_tue_start=[];



								pickup_location_service_wed_start=[];



								pickup_location_service_thu_start=[];



								pickup_location_service_fri_start=[];



								pickup_location_service_sat_start=[];



								pickup_location_service_sun_end=[];



								pickup_location_service_mon_end=[];



								pickup_location_service_tue_end=[];



								pickup_location_service_wed_end=[];



								pickup_location_service_thu_end=[];



								pickup_location_service_fri_end=[];



								pickup_location_service_sat_end=[];



								pickup_location_service_sun_break_start=[];



								pickup_location_service_mon_break_start=[];



								pickup_location_service_tue_break_start=[];



								pickup_location_service_wed_break_start=[];



								pickup_location_service_thu_break_start=[];



								pickup_location_service_fri_break_start=[];



								pickup_location_service_sat_break_start=[];



								pickup_location_service_sun_break_end=[];



								pickup_location_service_mon_break_end=[];



								pickup_location_service_tue_break_end=[];



								pickup_location_service_wed_break_end=[];



								pickup_location_service_thu_break_end=[];



								pickup_location_service_fri_break_end=[];



								pickup_location_service_sat_break_end=[];



								pickup_location_id=[];



								pickup_location_lat=[];



								pickup_location_long=[];



								pickup_location_custom_time_slot=[];



								pickup_location_number_of_delivery=[];



								</script>



								<?php



								if (!empty($byconsolewooodt_pickup_locations)) {



									foreach ($byconsolewooodt_pickup_locations as $pickup_loaction_key => $pickup_loaction_value) {



										?>



													<script>



												<?php if (array_key_exists('service', $pickup_loaction_value['sun'])) { ?>



															pickup_location_service_sun[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sun']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['mon'])) {



													?>



															pickup_location_service_mon[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['mon']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['tue'])) {



													?>



															pickup_location_service_tue[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['tue']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['wed'])) {



													?>



															pickup_location_service_wed[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['wed']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['thu'])) {



													?>



															pickup_location_service_thu[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['thu']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['fri'])) {



													?>



															pickup_location_service_fri[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['fri']['service']; ?>';



														<?php



												}



												if (array_key_exists('service', $pickup_loaction_value['sat'])) {



													?>



															pickup_location_service_sat[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sat']['service']; ?>';



														<?php



												}



												?>



													pickup_location_service_usual_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['start_time']; ?>';



													pickup_location_service_usual_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['end_time']; ?>';



													pickup_location_service_sun_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sun']['start_time']; ?>';



													pickup_location_service_mon_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['mon']['start_time']; ?>';



													pickup_location_service_tue_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['tue']['start_time']; ?>';



													pickup_location_service_wed_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['wed']['start_time']; ?>';



													pickup_location_service_thu_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['thu']['start_time']; ?>';



													pickup_location_service_fri_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['fri']['start_time']; ?>';



													pickup_location_service_sat_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sat']['start_time']; ?>';



													pickup_location_service_sun_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sun']['end_time']; ?>';



													pickup_location_service_mon_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['mon']['end_time']; ?>';



													pickup_location_service_tue_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['tue']['end_time']; ?>';



													pickup_location_service_wed_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['wed']['end_time']; ?>';



													pickup_location_service_thu_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['thu']['end_time']; ?>';



													pickup_location_service_fri_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['fri']['end_time']; ?>';



													pickup_location_service_sat_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sat']['end_time']; ?>';



													pickup_location_service_sun_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sun']['break_start_time']; ?>';



													pickup_location_service_mon_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['mon']['break_start_time']; ?>';



													pickup_location_service_tue_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['tue']['break_start_time']; ?>';



													pickup_location_service_wed_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['wed']['break_start_time']; ?>';



													pickup_location_service_thu_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['thu']['break_start_time']; ?>';



													pickup_location_service_fri_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['fri']['break_start_time']; ?>';



													pickup_location_service_sat_break_start[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sat']['break_start_time']; ?>';



													pickup_location_service_sun_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sun']['break_end_time']; ?>';



													pickup_location_service_mon_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['mon']['break_end_time']; ?>';



													pickup_location_service_tue_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['tue']['break_end_time']; ?>';



													pickup_location_service_wed_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['wed']['break_end_time']; ?>';



													pickup_location_service_thu_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['thu']['break_end_time']; ?>';



													pickup_location_service_fri_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['fri']['break_end_time']; ?>';



													pickup_location_service_sat_break_end[<?php echo $pickup_loaction_key; ?>]='<?php echo $pickup_loaction_value['sat']['break_end_time']; ?>';



													<?php



													include_once(ABSPATH . 'wp-admin/includes/plugin.php');



													// check for plugin using plugin name
							


													if (is_plugin_active('ByConsoleWooODTExtendedMapAddon/ByConsoleWooODTExtendedMapAddon.php')) {



														if (!empty($pickup_loaction_key)) {



															?>



																	pickup_location_id[<?php echo $pickup_loaction_key; ?>]=<?php echo $pickup_loaction_key; ?>;



																	<?php



														}



														if (!empty($pickup_loaction_value['address_latitude'])) {



															?>



																	pickup_location_lat[<?php echo $pickup_loaction_key; ?>]=<?php echo $pickup_loaction_value['address_latitude']; ?>;	



															<?php }



														if (!empty($pickup_loaction_value['address_longitude'])) {



															?>



																	pickup_location_long[<?php echo $pickup_loaction_key; ?>]=<?php echo $pickup_loaction_value['address_longitude']; ?>;



																<?php



														}



													}



													?>



													</script>



													<?php



									} //foreach
				


								} // !empty
			


						}



						if (!empty($PickupLocationArray)) {



							foreach ($PickupLocationArray as $PickupLocationSingleArrayVal) {



								$ExplodePickupLocationAndKeyValue = explode("/", $PickupLocationSingleArrayVal);



								// || $ExplodePickupLocationAndKeyValue[0]=='' || $ExplodePickupLocationAndKeyValue[0]=='0'
			


								if ($TotalCartAmountValue < $ExplodePickupLocationAndKeyValue[0] && ($ExplodePickupLocationAndKeyValue[0] != 0 || !empty($ExplodePickupLocationAndKeyValue[0]))) {



									//echo $xyz[1];
			


									//disable selection of below min. order options
			


									?> 



												<script>



												jQuery(document).ready(function(){



												//alert('<?php //echo $TotalCartAmountValue . '<' . $ExplodePickupLocationAndKeyValue[0] ;?>');



												jQuery('#byconsolewooodt_widget_pickup_location option[value="<?php echo $ExplodePickupLocationAndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



												//alert();



												});



												</script>



												<?php



								} else {



								}



							}



						}



						?>



						<br />



						<?php



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							$get_option_byconsolewooodt_chekout_page_delivery_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_date_placeholder'];



							if (!empty($get_option_byconsolewooodt_chekout_page_delivery_date_placeholder)) {



								$byconsolewooodt_chekout_page_delivery_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_date_placeholder'];



							} else {



								$byconsolewooodt_chekout_page_delivery_date_placeholder = 'Select your delivery date';



							}



							$byconsolewooodt_location_date_placeholder = $byconsolewooodt_chekout_page_delivery_date_placeholder;



							$get_option_byconsolewooodt_chekout_page_delivery_time_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_time_placeholder'];



							if (!empty($get_option_byconsolewooodt_chekout_page_delivery_time_placeholder)) {



								$byconsolewooodt_chekout_page_delivery_time_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_time_placeholder'];



							} else {



								$byconsolewooodt_chekout_page_delivery_time_placeholder = 'Select your delivery time';



							}



							$byconsolewooodt_location_time_placeholder = $byconsolewooodt_chekout_page_delivery_time_placeholder;



						}



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



							$get_option_byconsolewooodt_chekout_page_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_placeholder'];



							if (!empty($get_option_byconsolewooodt_chekout_page_date_placeholder)) {



								$byconsolewooodt_chekout_page_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_placeholder'];



							} else {



								$byconsolewooodt_chekout_page_date_placeholder = 'Select your pickup date';



							}



							$byconsolewooodt_location_date_placeholder = $byconsolewooodt_chekout_page_date_placeholder;



							$byconsolewooodt_location_time_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_time_placeholder'];



						}



						?>



						<input type="text" name="byconsolewooodt_widget_date_field" class="byconsolewooodt_widget_date_field" readonly="readonly" placeholder="<?php echo __($byconsolewooodt_location_date_placeholder, 'ByConsoleWooODTExtended'); ?>" value="<?php echo $byconsolewooodt_delivery_date; ?>" />



						<input type="hidden" name="byconsolewooodt_delivery_date_alternate" id="byconsolewooodt_delivery_date_alternate" value="<?php echo $byconsolewooodt_delivery_date; ?>" />



						<?php



						echo '<br /><br />';



						if ($get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode'] == 'yes') {



							?>



								<input type="radio" class="input-radio " value="exact_time" name="byconsolewooodt_delivery_type_of_widget_delivery_time" id="byconsolewooodt_delivery_type_of_widget_delivery_time_exact_time" <?php if ($byconsolewooodt_delivery_time_type == 'exact_time') { ?>  checked="checked" <?php } ?> style="float: left;margin-top: 10px;" >



								<label for="byconsolewooodt_delivery_type_of_widget_delivery_time_exact_time" class="radio byconsolewooodt_delivery_type_of_widget_delivery_time_radio_box" style="float: left;margin-right: 8px;font-size: 12px; margin-top: 5px;font-weight: bold !important;"><?php echo $get_byc_wooodt_data['byconsolewooodt_exact_time_lable_text']; ?></label>



								<input type="radio" class="input-radio " value="as_early_as_possible" name="byconsolewooodt_delivery_type_of_widget_delivery_time" id="byconsolewooodt_delivery_type_of_widget_delivery_time_as_early_as_possible" <?php if ($byconsolewooodt_delivery_time_type == 'as_early_as_possible') { ?>  checked="checked" <?php } ?> style="float: left;margin-top: 10px;" >



								<label for="byconsolewooodt_delivery_type_of_widget_delivery_time_as_early_as_possible" class="radio byconsolewooodt_delivery_type_of_widget_delivery_time_radio_box"  style="float: left;margin-right: 8px;font-size: 12px;margin-top: 5px;font-weight: bold !important;"><?php echo $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text']; ?></label><br />



								<?php





								global $get_byc_wooodt_data;

								$byconsolewooodt_time_field_show = $get_byc_wooodt_data['byconsolewooodt_time_field_show'];







								if ($byconsolewooodt_time_field_show == 'yes') {







									if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>



												<select id="byconsolewooodt_widget_time_field" name="byconsolewooodt_widget_time_field">



													<option value="0">Select time</option>



												</select>



										<?php } else { ?>



												<input type="text" name="byconsolewooodt_widget_time_field" class="byconsolewooodt_widget_time_field" id="byconsolewooodt_widget_time_field"  placeholder="<?php echo $byconsolewooodt_location_time_placeholder; ?>" value="<?php echo $byconsolewooodt_delivery_time; ?>" <?php if ($byconsolewooodt_delivery_time_type == 'as_early_as_possible') { ?> style="display: none;" <?php } ?>/>



										<?php }







								}



						}



						if ($get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode'] == '') { ?>



								<input type="radio" class="input-radio " value="exact_time" name="byconsolewooodt_delivery_type_of_widget_delivery_time" id="byconsolewooodt_delivery_type_of_widget_delivery_time_exact_time" checked="checked" style="display:none;" >



								<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') {



									if (!empty($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'])) {



										echo '<select id="byconsolewooodt_widget_time_field" name="byconsolewooodt_widget_time_field">



				<option value="' . $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] . '">' . $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] . '</option>



			  </select>';



									} else {



										echo '<select id="byconsolewooodt_widget_time_field" name="byconsolewooodt_widget_time_field">



				<option value="0">Select time</option>



			  </select>';



									}



									?>



								<?php } else { ?>



										<input type="text" name="byconsolewooodt_widget_time_field" class="byconsolewooodt_widget_time_field" id="byconsolewooodt_widget_time_field"  placeholder="<?php echo $byconsolewooodt_location_time_placeholder; ?>" value="<?php echo $byconsolewooodt_delivery_time; ?>"/>



								<?php }



						} ?>



						<p class="byconsolewooodt_widget_time_field_service_closed_notice"></p>



						<div id="byc_widget_time_field_service_closed_notice" style="display:none;"><?php echo __('No time is available for to day', 'ByConsoleWooODTExtended'); ?></div>



						<br />



						<?php

						global $get_byc_wooodt_data;

						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') { ?>



								<p class="min-shipping-time" style="display:none;"><img src="<?php echo plugins_url('images/min-shipping-time.png', __FILE__) ?>" alt="Minimum shipping time" /> &nbsp; <?php echo $get_byc_wooodt_data['byconsolewooodt_delivery_times']; ?> Minutes</p>



						<?php } ?>



						<input type="submit" name="byconsolewooodt_widget_submit" value="Save" />



						</form>



				<?php }

		global $get_byc_wooodt_data;

		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];



		if ($isholiday === 'YES') {



			$get_option_byconsolewooodt_store_close_notice = $get_byc_wooodt_data['byconsolewooodt_store_close_notice'];



			if (!empty($get_option_byconsolewooodt_store_close_notice)) {



				$byconsolewooodt_store_close_notice = $get_byc_wooodt_data['byconsolewooodt_store_close_notice'];



			} else {



				$byconsolewooodt_store_close_notice = 'We are closed today';



			}



			if ($byconsolewooodt_allow_orders_on_closing_days == '') {



				$store_close_notice_text = $byconsolewooodt_store_close_notice;



			}



			if ($store_close_notice_text == '') {



				$store_close_notice_text = '<b>We are closed now!</b>';



			}



			echo '<div class="byconsole_closig_day"><p>' . $store_close_notice_text . '</p></div>';



		}



		if ($isholiday != 'YES' && $isholiday != 'NO') {



			echo '<div class="byconsole_closig_day"><p>' . _e('ERROR : Please contact Vendor') . '</p></div>';



		}



		echo $args['after_widget'];



		$current_active_year = date("Y");



		// casual holidays



		$deactive_casual_holiday_from_calender = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];



		$deactive_casual_holiday_from_calender_array = explode(',', $deactive_casual_holiday_from_calender);



		//national holidays



		$deactive_casual_holiday_from_calender_for_national = $get_byc_wooodt_data['byconsolewooodt_admin_national_holiday_date'];



		$deactive_casual_holiday_from_calender_for_national_array = explode(',', $deactive_casual_holiday_from_calender_for_national);



		$national_holiday_string = '';



		if (!empty($deactive_casual_holiday_from_calender_for_national_array)) {



			foreach ($deactive_casual_holiday_from_calender_for_national_array as $deactive_casual_holiday_from_calender_for_national_array_single) {



				//national holidays add year after date and month



				$national_holiday_single_val = '' . trim($deactive_casual_holiday_from_calender_for_national_array_single . '/' . $current_active_year) . ',';



				$national_holiday_string = $national_holiday_string . $national_holiday_single_val;



			} // foreach



		} // !empty



		$national_holiday_string = substr($national_holiday_string, 0, -1);



		//national holidays explode



		$national_holiday_string_explode_single_arry_val = explode(",", $national_holiday_string);



		//casual and national holidays marge



		$national_and_casual_holiday_marge = array_merge($national_holiday_string_explode_single_arry_val, $deactive_casual_holiday_from_calender_array);



		/*******************AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*************************************/



		include(plugin_dir_path(__FILE__) . 'language_based_calendar/allowable_pickup_days.php');



		/*******************AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*************************************/



		/*******************AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*************************************/



		include(plugin_dir_path(__FILE__) . 'language_based_calendar/allowable_delivery_days.php');



		/*******************AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA*************************************/



		//pre-order settings



		////************************ datepicker script was here, now moved to footer *****************************************************/



	} // end of function widget



	public function form($instance)
	{



		if (isset($instance['byconsolewooodt_widget_title'])) {



			$title = $instance['byconsolewooodt_widget_title'];



		} else {



			$title = __('New title', 'ByConsoleWooODTExtended');



		}



		// Widget admin form



		?>



				<p>



				<label for="<?php echo $this->get_field_id('byconsolewooodt_widget_title'); ?>"><?php __('Title:', 'ByConsoleWooODTExtended'); ?></label> 



				<input class="widefat" id="<?php echo $this->get_field_id('byconsolewooodt_widget_title'); ?>" name="<?php echo $this->get_field_name('byconsolewooodt_widget_title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />



				</p>



				<?php



				echo '<-------------------------------------->';



	}



	// Updating widget replacing old instances with new



	public function update($new_instance, $old_instance)
	{



		$instance = array();



		$instance['byconsolewooodt_widget_title'] = (!empty($new_instance['byconsolewooodt_widget_title'])) ? strip_tags($new_instance['byconsolewooodt_widget_title']) : '';



		return $instance;



		echo '<-------------------------------------->';



	}



	/*****************************************************/



} // Class byconsolewooodt_widget ends here



// Register and load the widget



function byconsolewooodt_load_widget()
{



	register_widget('byconsolewooodt_widget');



}



add_action('widgets_init', 'byconsolewooodt_load_widget'); //save frontend widget data in cookie, so we need to do it before any output, hence hook it on init



function byconsolewooodt_savefrontend_widget_data()
{



	global $get_byc_wooodt_data;



	// save thwe widget data in in cookie	



	$byconsolewooodt_multiple_pickup_location = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



	$byconsolewooodt_multiple_delivery_location = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



	global $get_byc_wooodt_data;



	if (isset($_POST['byconsolewooodt_widget_submit'])) {



		$byconsolewooodt_widget_date_field_post_data = $_POST['byconsolewooodt_widget_date_field'];



		$byconsolewooodt_widget_time_field_post_data = $_POST['byconsolewooodt_widget_time_field'];



		$byconsolewooodt_widget_time_type_field_post_data = $_POST['byconsolewooodt_delivery_type_of_widget_delivery_time'];



		$byconsolewooodt_widget_type_field_post_data = $_POST['byconsolewooodt_widget_type_field'];



		if ($byconsolewooodt_multiple_pickup_location == "YES" && $_POST['byconsolewooodt_widget_type_field'] == 'take_away') {



			if (isset($_POST['byconsolewooodt_widget_pickup_location'])) {



				$byconsolewooodt_widget_pickup_location_post_data = $_POST['byconsolewooodt_widget_pickup_location'];



			} else {



				$byconsolewooodt_widget_pickup_location_post_data = '';



			}



		} else {



			$byconsolewooodt_widget_pickup_location_post_data = '';



		}



		if ($byconsolewooodt_multiple_delivery_location == "YES" && $_POST['byconsolewooodt_widget_type_field'] == 'levering') {



			if (isset($_POST['byconsolewooodt_widget_delivery_location'])) {



				$byconsolewooodt_widget_delivery_location_post_data = $_POST['byconsolewooodt_widget_delivery_location'];



			} else {



				$byconsolewooodt_widget_delivery_location_post_data = '';



			}



		} else {



			$byconsolewooodt_widget_delivery_location_post_data = '';



		}



		$byconsolewooodt_delivery_widget_post_array = array(



			'byconsolewooodt_widget_date_field' => $byconsolewooodt_widget_date_field_post_data,



			'byconsolewooodt_widget_time_field' => $byconsolewooodt_widget_time_field_post_data,



			'byconsolewooodt_widget_time_type_field' => $byconsolewooodt_widget_time_type_field_post_data,



			'byconsolewooodt_widget_type_field' => $byconsolewooodt_widget_type_field_post_data,



			'byconsolewooodt_widget_pickup_location' => $byconsolewooodt_widget_pickup_location_post_data,



			'byconsolewooodt_widget_delivery_location' => $byconsolewooodt_widget_delivery_location_post_data



		);



		//print_r($byconsolewooodt_delivery_widget_post_array);



		//set cookie



		$json_byconsolewooodt_delivery_widget_post_array = json_encode($byconsolewooodt_delivery_widget_post_array);



		setcookie('byconsolewooodt_delivery_widget_cookie', $json_byconsolewooodt_delivery_widget_post_array, time() + 60 * 60 * 24 * 1, '/');



		$_COOKIE['byconsolewooodt_delivery_widget_cookie'] = $json_byconsolewooodt_delivery_widget_post_array; // for immediate access in widget



	}



} // end of byconsolewooodt_savefrontend_widget_data



add_action('init', 'byconsolewooodt_savefrontend_widget_data'); // Add the field to the checkout



/*function byconsolewooodt_get_cart_full_price_value() {



global $woocommerce;



echo $amount = $woocommerce->cart->cart_contents_total+$woocommerce->cart->tax_total;



}



add_action('init','byconsolewooodt_get_cart_full_price_value');// get cart full price value*/



//add_action( 'woocommerce_after_order_notes', 'byconsolewooodt_checkout_field' );



//add_action( 'woocommerce_before_checkout_billing_form', 'byconsolewooodt_checkout_field' );



add_action('woocommerce_checkout_before_customer_details', 'byconsolewooodt_checkout_field');



function byconsolewooodt_checkout_field($checkout)
{



	$pluginPathUrl = plugin_dir_url(__FILE__) . 'images';



	echo '<div class="loading_image_contanier" style="display:none;"><img src="' . $pluginPathUrl . '/loading_image.gif" alt="" /></div>';



	global $woocommerce; // get cookie as array



	global $get_byc_wooodt_data;



	$byconsolewooodt_odt_show_hide_on_live_site = $get_byc_wooodt_data['byconsolewooodt_odt_show_hide_on_live_site'];



	if ($byconsolewooodt_odt_show_hide_on_live_site == 'yes') {



		$byconsolewooodt_odt_show_hide_on_live_site_val = 'hide';



	} else {



		$byconsolewooodt_odt_show_hide_on_live_site_val = 'show';



	}



	/********************************/

	global $get_byc_wooodt_data;

	$byconsolewooodt_time_field_validation = $get_byc_wooodt_data['byconsolewooodt_time_field_validation'];



	$byconsolewooodt_time_field_show = $get_byc_wooodt_data['byconsolewooodt_time_field_show'];



	$bycwooodt_has_virtual_products = false;







	// Default virtual products number



	$bycwooodt_virtual_products = 0;







	// Get all products in cart



	$bycwooodt_products = $woocommerce->cart->get_cart();







	// Loop through cart products



	foreach ($bycwooodt_products as $bycwooodt_product) {







		// Get product ID and '_virtual' post meta



		$bycwooodt_product_id = $bycwooodt_product['product_id'];



		$bycwooodt_is_virtual = get_post_meta($bycwooodt_product_id, '_virtual', true);







		// Update $has_virtual_product if product is virtual



		if ($bycwooodt_is_virtual == 'yes')



			$bycwooodt_virtual_products += 1;



	}







	if (count($bycwooodt_products) == $bycwooodt_virtual_products) {



		$bycwooodt_both_product_count_val = 'same';



	} else {



		$bycwooodt_both_product_count_val = 'not_same';



	}



	if ($bycwooodt_both_product_count_val == 'not_same') {



		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



		//get pickup and delivery location



		global $get_byc_wooodt_data;



		$pickup_loactions_array = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



		$delivery_loactions_array = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];



		// Shop Closed By Date And Day



		$isholiday = 'NO';



		$todaydate = date("m/d/Y");



		$todaydate_dm = date("m/d");



		$shownotice = 'none';



		$get_all_dates = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];



		$dateexplode = explode(",", $get_all_dates);



		//Chaking if today is casual holiday



		if (in_array($todaydate, $dateexplode)) {



			$isholiday = 'YES';



		}



		// get todays date 



		$gattodayname = date("l");



		$gattodaynumericval = date("w");



		$sunday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_sunday'];



		$monday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_monday'];



		$tuesday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_tuesday'];



		$wednessday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_wednessday'];



		$thursday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_thursday'];



		$friday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_friday'];



		$saturday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_saturday'];



		$sunday = ($sunday == '') ? 99 : 0;



		$monday = !empty($monday) ? $monday : 99;



		$tuesday = !empty($tuesday) ? $tuesday : 99;



		$wednessday = !empty($wednessday) ? $wednessday : 99;



		$thursday = !empty($thursday) ? $thursday : 99;



		$friday = !empty($friday) ? $friday : 99;



		$saturday = !empty($saturday) ? $saturday : 99;



		// check if shop is closed today


		global $get_byc_wooodt_data;

		if ($sunday == $gattodaynumericval || $monday == $gattodaynumericval || $tuesday == $gattodaynumericval || $wednessday == $gattodaynumericval || $thursday == $gattodaynumericval || $friday == $gattodaynumericval || $saturday == $gattodaynumericval) {
			$isholiday = 'YES';
		}



		$get_all_national_holidays_dates = $get_byc_wooodt_data['byconsolewooodt_admin_national_holiday_date'];


		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];



		$national_holidays_array = explode(",", $get_all_national_holidays_dates);



		// chaking if it is national holiday



		if (in_array($todaydate_dm, $national_holidays_array)) {



			$isholiday = 'YES';



		}



		if ($isholiday === 'NO' || $byconsolewooodt_allow_orders_on_closing_days === 'YES') {



			$get_option_byconsolewooodt_chekout_page_section_heading = $get_byc_wooodt_data['byconsolewooodt_chekout_page_section_heading'];



			if (!empty($get_option_byconsolewooodt_chekout_page_section_heading)) {



				$byconsolewooodt_chekout_page_section_heading = $get_byc_wooodt_data['byconsolewooodt_chekout_page_section_heading'];



			} else {



				$byconsolewooodt_chekout_page_section_heading = 'Select your date time and location';



			}



			echo '<div id="byconsolewooodt_checkout_field"><h3>' . $byconsolewooodt_chekout_page_section_heading . '</h3>';



			$byconsolewooodt_checkout_page_loading_image_manage = get_option('byconsolewooodt_checkout_page_loading_image_manage');



			if ($byconsolewooodt_checkout_page_loading_image_manage == 'yes') {



				echo '<div class="byconsolewooodt_page_loader"></div>';



			}



			// show order type as per settings page



			//if both



			global $get_byc_wooodt_data;



			if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'both') {



				$get_option_byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				if (!empty($get_option_byconsolewooodt_chekout_page_order_type_lebel)) {



					$byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				} else {



					$byconsolewooodt_chekout_page_order_type_lebel = 'Select order type';



				}



				$get_option_byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



				if (!empty($get_option_byconsolewooodt_pickup_lable)) {



					$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



				} else {



					$byconsolewooodt_pickup_lable = 'Pickup';



				}



				$get_option_byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



				if (!empty($get_option_byconsolewooodt_delivery_lable)) {



					$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



				} else {



					$byconsolewooodt_delivery_lable = 'Delivery';



				}



				$byconsolewooodt_order_type_checkout_array = array(



					'type' => 'radio',



					'class' => array('byconsolewooodt_delivery_type'),



					'label' => $byconsolewooodt_chekout_page_order_type_lebel,



					'label_class' => 'byconsolewooodt_ordertype_label',



					'placeholder' => __('Select delivery type', 'ByConsoleWooODTExtended'),



					'default' => $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'],



					'checked' => 'checked',



					'required' => true,



					'options' => array(



						'take_away' => $byconsolewooodt_pickup_lable,



						'levering' => $byconsolewooodt_delivery_lable,



					),



				);



			}



			//if only pickup

			global $get_byc_wooodt_data;

			if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'take_away') {



				$get_option_byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				if (!empty($get_option_byconsolewooodt_chekout_page_order_type_lebel)) {



					$byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				} else {



					$byconsolewooodt_chekout_page_order_type_lebel = 'Select order type';



				}



				$get_option_byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



				if (!empty($get_option_byconsolewooodt_pickup_lable)) {



					$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



				} else {



					$byconsolewooodt_pickup_lable = 'Pickup';



				}



				$byconsolewooodt_order_type_checkout_array = array(



					'type' => 'radio',



					'class' => array('byconsolewooodt_delivery_type'),



					'label' => $byconsolewooodt_chekout_page_order_type_lebel,



					'label_class' => 'byconsolewooodt_ordertype_label',



					'placeholder' => __('Select delivery type', 'ByConsoleWooODTExtended'),



					'default' => 'take_away',



					'checked' => 'checked',



					'required' => true,



					'options' => array(



						'take_away' => $byconsolewooodt_pickup_lable,



					),



				);



			}



			//if only delivery

			global $get_byc_wooodt_data;

			if ($get_byc_wooodt_data['byconsolewooodt_order_type'] == 'levering') {



				$get_option_byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				if (!empty($get_option_byconsolewooodt_chekout_page_order_type_lebel)) {



					$byconsolewooodt_chekout_page_order_type_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_order_type_lebel'];



				} else {



					$byconsolewooodt_chekout_page_order_type_lebel = 'Select order type';



				}



				$get_option_byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



				if (!empty($get_option_byconsolewooodt_delivery_lable)) {



					$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



				} else {



					$byconsolewooodt_delivery_lable = 'Delivery';



				}



				$byconsolewooodt_order_type_checkout_array = array(



					'type' => 'radio',



					'class' => array('byconsolewooodt_delivery_type'),



					'label' => $byconsolewooodt_chekout_page_order_type_lebel,



					'label_class' => 'byconsolewooodt_ordertype_label',



					'placeholder' => __('Select delivery type', 'ByConsoleWooODTExtended'),



					'default' => 'levering',



					'checked' => 'checked',



					'required' => true,



					'options' => array(



						'levering' => $byconsolewooodt_delivery_lable,



					),



				);



			}



			woocommerce_form_field('byconsolewooodt_delivery_type', $byconsolewooodt_order_type_checkout_array);



			// populate the pickup location drop-down only if delivery type is take_away and pickup location list is not empty



			global $get_byc_wooodt_data;



			$byconsolewooodt_multiple_pickup_location = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away' && !empty($pickup_loactions_array) && $byconsolewooodt_multiple_pickup_location == "YES") {



				//create array for our woocommerce select type form field function



				//$pickup_loactions_array=$get_byc_wooodt_data['byconsolewooodt_pickup_location'];



				//lets use value instead of array index in option value



				$get_option_byconsolewooodt_pickup_location_lebel = $get_byc_wooodt_data['byconsolewooodt_pickup_location_lebel'];



				if (!empty($get_option_byconsolewooodt_pickup_location_lebel)) {



					$byconsolewooodt_pickup_location_lebel = $get_byc_wooodt_data['byconsolewooodt_pickup_location_lebel'];



				} else {



					$byconsolewooodt_pickup_location_lebel = 'select pickup location';



				}



				//echo '<div class="byconsole_location_name">'.__($byconsolewooodt_pickup_location_lebel,'ByConsoleWooODTExtended').'</div>';



				//echo '<div class="byconsole_location_name">'.__('Select pickup location','ByConsoleWooODTExtended').'</div>';



				//$TotalCartAmountValue = $woocommerce->cart->get_cart_total(); // This is with currency symbol



				$TotalCartAmountValue = $woocommerce->cart->total; // This is without currency symbol



				//print_r($pickup_loactions_array);



				$pickup_loaction_array_value = array();



				/*echo '<pre>';



							print_r($pickup_loactions_array);



							echo '</pre>';*/



				foreach ($pickup_loactions_array as $pickup_loaction_key => $pickup_loaction_value) {



					$PickupLocationArray[] = $pickup_loaction_value['min_cart_value'] . '/' . $pickup_loaction_key;



					if (empty($pickup_loaction_value['min_cart_value']) || $pickup_loaction_value['min_cart_value'] == '' || $pickup_loaction_value['min_cart_value'] == 0) {



						$minimum_order_value = __('No bar', 'ByConsoleWooODTExtended');



						$pickup_loaction_option_text_value = $pickup_loaction_value['location'];



					} else {



						//$minimum_order_translate=__('Minimum Order','ByConsoleWooODTExtended');	



						$minimum_order_translate = $get_byc_wooodt_data['byconsolewooodt_minimum_order_text_lable'];



						$minimum_order_value = get_woocommerce_currency_symbol() . $pickup_loaction_value['min_cart_value'];



						$pickup_loaction_option_text_value = $pickup_loaction_value['location'] . '&nbsp;&nbsp;--&nbsp;&nbsp; ' . $minimum_order_translate . ':&nbsp;(' . $minimum_order_value . ')';



					}



					//$pickup_loaction_option_text_value=$pickup_loaction_value['location'].'&nbsp;&nbsp;--&nbsp;&nbsp; Min. Order:&nbsp;('.$minimum_order_value.')';



					//$pickup_loaction_option_text_value=$pickup_loaction_value['location'].'&nbsp;&nbsp;-- &nbsp;&nbsp;Time &nbsp;( '. $pickup_loaction_value['start_time'] .'-'.$pickup_loaction_value['end_time'].' )&nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;('.$minimum_order_value.')&nbsp;&nbsp;-- &nbsp;&nbsp;'.$pickup_loaction_array_value["sun"].'|'.$pickup_loaction_array_value["mon"].'|'.$pickup_loaction_array_value["tue"].'|'.$pickup_loaction_array_value["wed"].'|'.$pickup_loaction_array_value["thu"].'|'.$pickup_loaction_array_value["fri"].'|'.$pickup_loaction_array_value["sat"];



					if (array_key_exists('location_disable', $pickup_loaction_value)) {



						if ($pickup_loaction_value['location_disable'] != 1) {



							$pickup_loaction_array_value[$pickup_loaction_key] = $pickup_loaction_option_text_value;



						}



					} else {



						$pickup_loaction_array_value[$pickup_loaction_key] = $pickup_loaction_option_text_value;



					}



				}



				//$pickup_loaction_combined_array=array_combine($pickup_loactions_array,$pickup_loactions_array);



				if (!empty($get_byc_wooodt_data['byconsolewooodt_pickup_location_lebel'])) {



					$choose_pickup_location = $get_byc_wooodt_data['byconsolewooodt_pickup_location_lebel'];



				} else {



					$choose_pickup_location = __('Select pickup location', 'ByConsoleWooODTExtended');



				}



				$byconsolewooodt_locations_alphabetical_order = $get_byc_wooodt_data['byconsolewooodt_locations_alphabetical_order'];



				if ($byconsolewooodt_locations_alphabetical_order == 'yes') {



					asort($pickup_loaction_array_value);



					foreach ($pickup_loaction_array_value as $pickup_loaction_array_key => $pickup_loaction_array_val) {



						$pickup_loaction_array_value[$pickup_loaction_array_key] = $pickup_loaction_array_val;



					}



				}



				woocommerce_form_field(
					'byconsolewooodt_pickup_location',
					array(



						'type' => 'select',



						'class' => array('byconsolewooodt_pickup_location'),



						'label' => $choose_pickup_location,



						'placeholder' => __('Choose pickup location', 'ByConsoleWooODTExtended'),



						'default' => $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_pickup_location'],



						'options' => $pickup_loaction_array_value,



						'required' => true,



					)
				);



			} // end of if take_away



			// populate the delivery location drop-down only if delivery type is levering and delivery location list is not empty



			global $get_byc_wooodt_data;



			$byconsolewooodt_multiple_delivery_location = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering' && !empty($delivery_loactions_array) && $byconsolewooodt_multiple_delivery_location == "YES") {



				//create array for our woocommerce select type form field function



				//$pickup_loactions_array=$get_byc_wooodt_data['byconsolewooodt_pickup_location'];



				//lets use value onstead od array index in option value



				$get_option_byconsolewooodt_delivery_location_lebel = $get_byc_wooodt_data['byconsolewooodt_delivery_location_lebel'];



				if (!empty($get_option_byconsolewooodt_delivery_location_lebel)) {



					$byconsolewooodt_delivery_location_lebel = $get_byc_wooodt_data['byconsolewooodt_delivery_location_lebel'];



				} else {



					$byconsolewooodt_delivery_location_lebel = __('Select delivery location', 'ByConsoleWooODTExtended');



				}



				//echo '<div class="byconsole_location_name">'.$byconsolewooodt_delivery_location_lebel.'</div>';



				$TotalCartAmountValue = $woocommerce->cart->total; // This is without currency symbol



				$delivery_loaction_array_value = array();



				foreach ($delivery_loactions_array as $delivery_loaction_key => $delivery_loaction_value) {



					$DeliveryLocationArray[] = $delivery_loaction_value['min_cart_value'] . '/' . $delivery_loaction_key;



					if (empty($delivery_loaction_value['min_cart_value']) || $delivery_loaction_value['min_cart_value'] == '' || $delivery_loaction_value['min_cart_value'] == 0) {



						$minimum_order_value = __('No bar', 'ByConsoleWooODTExtended');



						$delivery_loaction_option_text_value = $delivery_loaction_value['location'];



					} else {



						//$minimum_order_translate=__('Minimum Order','ByConsoleWooODTExtended');	



						$minimum_order_translate = $get_byc_wooodt_data['byconsolewooodt_minimum_order_text_lable'];



						$minimum_order_value = get_woocommerce_currency_symbol() . $delivery_loaction_value['min_cart_value'];



						$delivery_loaction_option_text_value = $delivery_loaction_value['location'] . '&nbsp;&nbsp;-- &nbsp;&nbsp;' . '' . $minimum_order_translate . ':&nbsp;(' . $minimum_order_value . ')';



					}



					$Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_Array[] = $delivery_loaction_value['min_cart_value'] . '<@@>' . $delivery_loaction_key . '<@@>' . $delivery_loaction_value['start_time'] . '<@@>' . $delivery_loaction_value['end_time'];



					//$delivery_loaction_option_text_value=$delivery_loaction_value['location'].'&nbsp;&nbsp;-- &nbsp;&nbsp;'.'Min. Order:&nbsp;('.$minimum_order_value.')';



					//$delivery_loaction_option_text_value=$delivery_loaction_value['location'].'&nbsp;&nbsp;-- &nbsp;&nbsp;Time &nbsp;( '. $delivery_loaction_value['start_time'] .'-'.$delivery_loaction_value['end_time'].' )&nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;('.$minimum_order_value.')';



					if (array_key_exists('location_disable', $delivery_loaction_value)) {



						if ($delivery_loaction_value['location_disable'] != 1) {



							$delivery_loaction_array_value[$delivery_loaction_key] = $delivery_loaction_option_text_value;



						}



					} else {



						$delivery_loaction_array_value[$delivery_loaction_key] = $delivery_loaction_option_text_value;



					}



				}



				//$delivery_loaction_combined_array=array_combine($delivery_loactions_array,$delivery_loactions_array);



				if (!empty($get_byc_wooodt_data['byconsolewooodt_delivery_location_lebel'])) {



					$choose_delivery_location = $get_byc_wooodt_data['byconsolewooodt_delivery_location_lebel'];



				} else {



					$choose_delivery_location = __('Select delivery location', 'ByConsoleWooODTExtended');



				}



				$byconsolewooodt_locations_alphabetical_order = $get_byc_wooodt_data['byconsolewooodt_locations_alphabetical_order'];



				if ($byconsolewooodt_locations_alphabetical_order == 'yes') {



					asort($delivery_loaction_array_value);



					foreach ($delivery_loaction_array_value as $delivery_loaction_array_key => $delivery_loaction_array_val) {



						$delivery_loaction_array_value[$delivery_loaction_array_key] = $delivery_loaction_array_val;



					}



				}



				woocommerce_form_field(
					'byconsolewooodt_delivery_location',
					array(



						'type' => 'select',



						'class' => array('byconsolewooodt_delivery_location'),



						'label' => $choose_delivery_location,



						'placeholder' => __('Choose delivery location', 'ByConsoleWooODTExtended'),



						'default' => $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_delivery_location'],



						'options' => $delivery_loaction_array_value,



						'required' => true,



					)
				);



			} // end of if delivery



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



				$byconsolewooodt_location_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_date_placeholder'];



				$byconsolewooodt_location_time_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_time_placeholder'];



				if (!empty($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'])) {



					$byconsolewooodt_pickup_or_delivery_time = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



				} else {



					$byconsolewooodt_pickup_or_delivery_time = __('Select Time', 'ByConsoleWooODTExtended');



				}



			}



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



				if (!empty($get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'])) {



					$byconsolewooodt_pickup_or_delivery_time = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



				} else {



					$byconsolewooodt_pickup_or_delivery_time = __('Select Time', 'ByConsoleWooODTExtended');



				}



				$get_option_byconsolewooodt_chekout_page_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_placeholder'];



				if (!empty($get_option_byconsolewooodt_chekout_page_date_placeholder)) {



					$byconsolewooodt_chekout_page_date_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_placeholder'];



				} else {



					$byconsolewooodt_chekout_page_date_placeholder = 'Select your pickup date';



				}



				$byconsolewooodt_location_date_placeholder = $byconsolewooodt_chekout_page_date_placeholder;



				$byconsolewooodt_location_time_placeholder = $get_byc_wooodt_data['byconsolewooodt_chekout_page_time_placeholder'];



			}



			$get_option_byconsolewooodt_chekout_page_date_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_lebel'];



			if (!empty($get_option_byconsolewooodt_chekout_page_date_lebel)) {



				$byconsolewooodt_chekout_page_date_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_date_lebel'];



			} else {



				$byconsolewooodt_chekout_page_date_lebel = 'Select date';



			}



			woocommerce_form_field(
				'byconsolewooodt_delivery_date',
				array(



					'type' => 'text',



					'class' => array('byconsolewooodt_delivery_date'),



					'label' => $byconsolewooodt_chekout_page_date_lebel,



					'placeholder' => __($byconsolewooodt_location_date_placeholder, 'ByConsoleWooODTExtended'),



					'default' => $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field'],



					'required' => true,



				)
			);

			global $get_byc_wooodt_data;

			$start_time = $get_byc_wooodt_data['byconsolewooodt_opening_hours_from'];



			$closing_time = $get_byc_wooodt_data['byconsolewooodt_opening_hours_to'];



			//$current_time=date('H:i', time());



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field'] != '') {



				$byconsolewooodt_widget_date_val = $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field'];



				$origDate = $byconsolewooodt_widget_date_val;







				$newAlternateDate = date("m/d/Y", strtotime($origDate));



			} else {



				$newAlternateDate = '';



			}



			woocommerce_form_field(
				'byconsolewooodt_delivery_date_alternate',
				array(



					'type' => 'text',



					'class' => array('byconsolewooodt_delivery_date_alternate'),



					'label' => '',



					'placeholder' => '',



					'default' => $newAlternateDate,



				)
			);



			if ($get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode'] == 'yes') {



				woocommerce_form_field(
					"byconsolewooodt_delivery_type_of_delivery_time",
					array(



						'type' => 'radio',



						'class' => array('byconsolewooodt_delivery_type_of_delivery_time'),



						'label' => '',



						'label_class' => 'byconsolewooodt_delivery_type_of_delivery_time_radio_box',



						'options' => array('exact_time' => $get_byc_wooodt_data['byconsolewooodt_exact_time_lable_text'], 'as_early_as_possible' => $get_byc_wooodt_data["byconsolewooodt_as_early_as_possible_lable_text"]),



					)
				);



			}



			if ($get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode'] == '') {



				woocommerce_form_field(
					"byconsolewooodt_delivery_type_of_delivery_time_hidden",
					array(



						'type' => 'radio',



						'class' => array('byconsolewooodt_delivery_type_of_delivery_time_hidden'),



						'label' => '',



						'label_class' => 'byconsolewooodt_delivery_type_of_delivery_time_radio_box_hidden',



						'options' => array('exact_time' => $get_byc_wooodt_data['byconsolewooodt_exact_time_lable_text']),



					)
				);



			}



			$current_time = current_time('H:m');



			//if($current_time<$closing_time && $current_time>$start_time){



			$get_option_byconsolewooodt_chekout_page_time_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_time_lebel'];



			if (!empty($get_option_byconsolewooodt_chekout_page_time_lebel)) {



				$byconsolewooodt_chekout_page_time_lebel = $get_byc_wooodt_data['byconsolewooodt_chekout_page_time_lebel'];



			} else {



				$byconsolewooodt_chekout_page_time_lebel = 'Preferred time';



			}







			if ($byconsolewooodt_time_field_validation == 'yes') {



				$required = true;



			} else {



				$required = false;



			}



			if ($byconsolewooodt_time_field_show == 'yes') {



				if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') {



					if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



						$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];



					}



					if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



						$delivery_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];



					}



					foreach ($delivery_per_custom_slot_array as $delivery_per_custom_slot_key => $delivery_per_custom_slot_val) {



						foreach ($delivery_per_custom_slot_val as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value) {



							$delivery_time_array_value[] = $delivery_per_custom_slot_val_single_value["start_time_slot"] . ' - ' . $delivery_per_custom_slot_val_single_value["end_time_slot"];



						}



					}

					//$byconsolewooodt_widget_time_val = array('Select Time' => __('Select Time'));



					if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] != '' && $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] != 0) {



						$byconsolewooodt_widget_time_val = array($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'] => __($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field']));



					} else {



						//$byconsolewooodt_widget_time_val = array('0' => __('Select time','ByConsoleWooODTExtended'));

						$byconsolewooodt_widget_time_val = array('0' => $byconsolewooodt_pickup_or_delivery_time);

					}



					woocommerce_form_field(
						'byconsolewooodt_delivery_time',
						array(

							'type' => 'select',

							'class' => array('byconsolewooodt_delivery_time'),

							'label' => $byconsolewooodt_pickup_or_delivery_time,

							'placeholder' => __('Choose delivery location', 'ByConsoleWooODTExtended'),

							'default' => '',

							'options' => $byconsolewooodt_widget_time_val,

							'required' => $required,

						)
					);



				} else {



					woocommerce_form_field(
						'byconsolewooodt_delivery_time',
						array(



							'type' => 'text',



							'class' => array('byconsolewooodt_delivery_time'),



							'label' => $byconsolewooodt_pickup_or_delivery_time,



							'placeholder' => $byconsolewooodt_location_time_placeholder,



							'default' => $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field'],



							'required' => $required,



						)
					);



				}



			}



			woocommerce_form_field(
				'byconsolewooodt_odt_show_hide_on_live_site',
				array(



					'type' => 'text',



					'class' => array('byconsolewooodt_odt_show_hide_on_live_site'),



					'label' => '',



					'placeholder' => '',



					'default' => $byconsolewooodt_odt_show_hide_on_live_site_val,



				)
			);



			woocommerce_form_field(
				'byconsolewooodt_selected_day_charges',
				array(



					'type' => 'text',



					'class' => array('byconsolewooodt_selected_day_charges'),



					'label' => '',



					'placeholder' => '',



					'default' => '',



				)
			);



			woocommerce_form_field(
				'byconsolewooodt_special_dates_charges',
				array(



					'type' => 'text',



					'class' => array('byconsolewooodt_special_dates_charges'),



					'label' => '',



					'placeholder' => '',



					'default' => '',



				)
			);



			echo '<div id="byc_time_field_service_closed_notice" style="display:none;">' . __('No time is available for to day', 'ByConsoleWooODTExtended') . '</div>';



			$orderType = $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'];



			if ($orderType == 'levering') {







				$byconsolewooodt_chekout_page_tips_label = $get_byc_wooodt_data['byconsolewooodt_chekout_page_tips_label'];







				if ($byconsolewooodt_chekout_page_tips_label != '') {



					$byconsolewooodt_chekout_page_tips_label_text = $byconsolewooodt_chekout_page_tips_label;



				} else {



					$byconsolewooodt_chekout_page_tips_label_text = 'Tips to delivery person';



				}



				$hide_delivery_tips = $get_byc_wooodt_data['hide_delivery_tips'];



				if ($hide_delivery_tips == 0) {



					$byconsolewooodt_select_delivery_tips_text_val = $get_byc_wooodt_data['select_delivery_tips_text'];



					$tips_amount_array_value = array();

					$byconsolewooodt_delivery_tips_amount = $get_byc_wooodt_data['byconsolewooodt_delivery_tips_amount'];

					$tips_amount_array = explode(',', $byconsolewooodt_delivery_tips_amount);



					$tips_amount_array_value[0] = $byconsolewooodt_select_delivery_tips_text_val;



					if (!empty($byconsolewooodt_delivery_tips_amount)) {

						foreach ($tips_amount_array as $tips_amount_single_key => $tips_amount_single_val) {

							$tipsAmountTrim = trim($tips_amount_single_val);

							$tips_amount_array_value[$tipsAmountTrim] = get_woocommerce_currency_symbol() . $tipsAmountTrim;

						}

					} else {

						$tips_amount_array_value[$tipsAmountTrim] = get_woocommerce_currency_symbol() . '1';

					}



					//$tips_amount_array_value[9999] = $byconsolewooodt_custom_delivery_tips_text_val;



					woocommerce_form_field(
						'byconsolewooodt_add_tips',
						array(



							'type' => 'select',



							'class' => array('byconsolewooodt_add_tips'),



							'label' => $byconsolewooodt_chekout_page_tips_label_text,



							'options' => $tips_amount_array_value,



							'default' => '0'
						)
					);



				}



			}



			woocommerce_form_field(
				'byconsolewooodt_time_slot_delivery_charges',
				array(

					'type' => 'text',

					'class' => array('byconsolewooodt_time_slot_delivery_charges'),

					'label' => '',

					'placeholder' => '',

					'default' => '',

				)
			);

			/*}else{



					 echo '<b>';



					 printf( __('We are closed now (%s), openning at %s','ByConsoleWooODTExtended'),$current_time,$start_time);



					 echo '</b>';



					 }



					 */



			/*echo '<div id="map" style="width: 100%; height: 200px;"></div> <br />';*/



			echo '</div>';



		}



		global $get_byc_wooodt_data;



		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];



		if ($isholiday === 'YES') {



			if ($byconsolewooodt_allow_orders_on_closing_days === '') {



				echo '<div class="byconsole_closig_day"><p>' . $get_byc_wooodt_data['byconsolewooodt_store_close_notice'] . '</p></div>';



			} else {



			}



		}



		if ($isholiday != 'YES' && $isholiday != 'NO') {



			echo '<div class="byconsole_closig_day"><p>' . _e('ERROR : Please contact Vendor') . '</p></div>';



		}



		/**** FOR DISABLED OPTION SCRIPT****/



		if (!empty($PickupLocationArray)) {



			foreach ($PickupLocationArray as $PickupLocationSingleArrayVal) {



				$ExplodePickupLocationAndKeyValue = explode("/", $PickupLocationSingleArrayVal);



				// || $ExplodePickupLocationAndKeyValue[0]=='' || $ExplodePickupLocationAndKeyValue[0]=='0'



				if ($TotalCartAmountValue < $ExplodePickupLocationAndKeyValue[0] && ($ExplodePickupLocationAndKeyValue[0] != 0 || !empty($ExplodePickupLocationAndKeyValue[0]))) {



					//echo $xyz[1];



					//disable selection of below min. order options



					?> 



										<script>



										jQuery(document).ready(function(){



										jQuery('#byconsolewooodt_pickup_location option[value="<?php echo $ExplodePickupLocationAndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



										//alert();



										});



										</script>



										<?php



				} else {



				}



				/************************Desiable pickup location per hours*******************************/



				/*******************************************************/



			}



		}



		//print_r($DeliveryLocationArray);



		if (!empty($DeliveryLocationArray)) {



			foreach ($DeliveryLocationArray as $DeliveryLocationSingleArrayVal) {



				$ExplodeDeliveryLocationAndKeyValue = explode("/", $DeliveryLocationSingleArrayVal);



				// || $ExplodeDeliveryLocationAndKeyValue[0]=='' || $ExplodeDeliveryLocationAndKeyValue[0]=='0'



				if ($TotalCartAmountValue < $ExplodeDeliveryLocationAndKeyValue[0] && ($ExplodeDeliveryLocationAndKeyValue[0] != 0 || !empty($ExplodeDeliveryLocationAndKeyValue[0]))) {



					//echo $xyz[1];



					//disable selection of below min. order options



					?> 



										<script>



										jQuery(document).ready(function(){



										jQuery('#byconsolewooodt_delivery_location option[value="<?php echo $ExplodeDeliveryLocationAndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



										//alert();



										});



										</script>



										<?php



				} else {



				}



			}



		}



		/**************************************/



		//print_r($Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_Array);



		$todaysCurrentDate = date("m/d/Y");



		if (!empty($Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_Array)) {



			foreach ($Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_Array as $Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_SingleArrayVal) {



				$ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue = explode("<@@>", $Delivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_SingleArrayVal);



				//print_r($ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue);



				//echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['2'];



				// || $ExplodeDeliveryLocationAndKeyValue[0]=='' || $ExplodeDeliveryLocationAndKeyValue[0]=='0'



				if ($TotalCartAmountValue < $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[0] && ($ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[0] != 0 || !empty($ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[0]))) {



					//disable selection of below min. order options



					?> 



										<script>



										jQuery(document).ready(function(){



										jQuery("#byconsolewooodt_delivery_time").change(function(){



										//alert(<?php //echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[1];?>);



										var byconsolewooodt_delivery_date_val = jQuery("#byconsolewooodt_delivery_date").val();



										var byconsolewooodt_delivery_time_val = jQuery("#byconsolewooodt_delivery_time").val();



										//alert(byconsolewooodt_delivery_date_val);



										//alert(byconsolewooodt_delivery_time_val);



										if(byconsolewooodt_delivery_date_val >= '<?php echo $todaysCurrentDate; ?>' && 



										byconsolewooodt_delivery_time_val > '<?php echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['2']; ?>'&& 				byconsolewooodt_delivery_time_val < '<?php echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['3']; ?>')



										{



										//alert('<?php //echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['2'];?>');



										//alert('<?php //echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['3'];?>');



										jQuery('#byconsolewooodt_delivery_location option[value="<?php echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



										}



										else



										{



										//alert('<?php //echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['2'];?>');



										//alert('<?php //echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue['3'];?>');



										}



										jQuery('#byconsolewooodt_delivery_location option[value="<?php echo $ExplodeDelivery_Location_With_Mincartvalue_Location_key_Start_time_End_time_AndKeyValue[1]; ?>"]').prop('disabled', 'disabled');



										//alert();



										});



										});



										</script>



										<?php



				} else {



				}



			}



		}



	}



}



// Validate the custom field.



add_action('woocommerce_checkout_process', 'byconsolewooodt_checkout_field_process');



function byconsolewooodt_checkout_field_process()
{



	global $wpdb;



	global $woocommerce;



	global $get_byc_wooodt_data;



	$byconsolewooodt_time_field_validation = $get_byc_wooodt_data['byconsolewooodt_time_field_validation'];



	$byconsolewooodt_time_field_show = $get_byc_wooodt_data['byconsolewooodt_time_field_show'];



	$pickupDateErrorMsgVal = $get_byc_wooodt_data['byconsolewooodt_checkout_page_pickup_date_blank_error_msg'];



	$pickupTimeErrorMsgVal = $get_byc_wooodt_data['byconsolewooodt_checkout_page_pickup_time_blank_error_msg'];



	$deliveryDateErrorMsgVal = $get_byc_wooodt_data['byconsolewooodt_checkout_page_delivery_date_blank_error_msg'];



	$deliveryTimeErrorMsgVal = $get_byc_wooodt_data['byconsolewooodt_checkout_page_delivery_time_blank_error_msg'];



	if ($pickupDateErrorMsgVal != '') {

		$pickupDateErrorMsg = $pickupDateErrorMsgVal;

	} else {

		$pickupDateErrorMsg = 'Please choose pickup date';

	}



	if ($pickupTimeErrorMsgVal != '') {

		$pickupTimeErrorMsg = $pickupTimeErrorMsgVal;

	} else {

		$pickupTimeErrorMsg = 'Please choose pickup time';

	}



	if ($deliveryDateErrorMsgVal != '') {

		$deliveryDateErrorMsg = $deliveryDateErrorMsgVal;

	} else {

		$deliveryDateErrorMsg = 'Please choose delivery date';

	}



	if ($deliveryTimeErrorMsgVal != '') {

		$deliveryTimeErrorMsg = $deliveryTimeErrorMsgVal;

	} else {

		$deliveryTimeErrorMsg = 'Please choose delivery time';

	}

	/********************************/



	if ($_POST['byconsolewooodt_odt_show_hide_on_live_site'] == 'show') {



		$bycwooodt_has_virtual_products = false;







		// Default virtual products number



		$bycwooodt_virtual_products = 0;







		// Get all products in cart



		$bycwooodt_products = $woocommerce->cart->get_cart();







		// Loop through cart products



		foreach ($bycwooodt_products as $bycwooodt_product) {







			// Get product ID and '_virtual' post meta



			$bycwooodt_product_id = $bycwooodt_product['product_id'];



			$bycwooodt_is_virtual = get_post_meta($bycwooodt_product_id, '_virtual', true);







			// Update $has_virtual_product if product is virtual



			if ($bycwooodt_is_virtual == 'yes')



				$bycwooodt_virtual_products += 1;



		}







		if (count($bycwooodt_products) == $bycwooodt_virtual_products) {



			$bycwooodt_both_product_count_val = 'same';



		} else {



			$bycwooodt_both_product_count_val = 'not_same';



		}



		if ($bycwooodt_both_product_count_val == 'not_same') {



			// Check if set, if its not set add an error.



			$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



			$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



			include_once(ABSPATH . 'wp-admin/includes/plugin.php');



			// check for plugin using plugin name



			// For Takeway....



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



				if (is_plugin_active('ByConsoleDynamicShippingCharge/ByConsoleDynamicShippingCharge.php')) {



					$selected_zones_names = get_option('byconsolewooodt_pickup_disable_date_and_time_by_available_zones_locations');



				} else {



					$selected_zones_names = '';



				}



				if ($_POST['ship_to_different_address'] == '1') {



					$byconsolewooodt_selected_state_name = $_POST['shipping_state'];



					$byconsolewooodt_selected_postcode = $_POST['shipping_postcode'];



				} else {



					$byconsolewooodt_selected_state_name = $_POST['billing_state'];



					$byconsolewooodt_selected_postcode = $_POST['billing_postcode'];



				}









				if (!$_POST['byconsolewooodt_delivery_date_alternate'])



					wc_add_notice($pickupDateErrorMsg, 'error');



				if ($byconsolewooodt_time_field_show == 'yes') {



					if ($byconsolewooodt_time_field_validation == 'yes') {







						if (!$_POST['byconsolewooodt_delivery_time'])



							wc_add_notice($pickupTimeErrorMsg, 'error');







					}



				}







			}



			// For Leavering...



			if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



				if (is_plugin_active('ByConsoleDynamicShippingCharge/ByConsoleDynamicShippingCharge.php')) {



					$selected_zones_names = get_option('byconsolewooodt_delivery_disable_date_and_time_by_available_zones_locations');



				} else {



					$selected_zones_names = '';



				}



				if ($_POST['ship_to_different_address'] == '1') {



					$byconsolewooodt_selected_state_name = $_POST['shipping_state'];



					$byconsolewooodt_selected_postcode = $_POST['shipping_postcode'];



				} else {



					$byconsolewooodt_selected_state_name = $_POST['billing_state'];



					$byconsolewooodt_selected_postcode = $_POST['billing_postcode'];



				}















				if (!$_POST['byconsolewooodt_delivery_date_alternate'])



					wc_add_notice($deliveryDateErrorMsg, 'error');



				if ($_POST['byconsolewooodt_delivery_type_of_delivery_time'] == 'exact_time' || $_POST['byconsolewooodt_delivery_type_of_delivery_time_hidden'] == 'exact_time') {



					if ($byconsolewooodt_time_field_show == 'yes') {



						if ($byconsolewooodt_time_field_validation == 'yes') {



							if (!$_POST['byconsolewooodt_delivery_time'])



								wc_add_notice($deliveryTimeErrorMsg, 'error');



						}



					}



				}







			}



		}



	}



}



//add_filter('woocommerce_default_address_fields', 'byconsolewooodt_override_postcode_validation');



function byconsolewooodt_override_postcode_validation($address_fields)
{



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	// For Takeway....



	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



		$address_fields['postcode']['required'] = false;



	}



	// For Levering....



	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



		$address_fields['postcode']['required'] = true;



	}



	return $address_fields;



}



//Save the order meta with field value



add_action('woocommerce_checkout_update_order_meta', 'byconsolewooodt_checkout_field_update_order_meta');



function byconsolewooodt_checkout_field_update_order_meta($order_id)
{

	global $woocommerce; // get cookie as array
/*
* from v1.2.0
*/
	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;

	$byconsolewooodt_time_field_show = $get_byc_wooodt_data['byconsolewooodt_time_field_show'];



	/********************************/



	$bycwooodt_has_virtual_products = false;







	// Default virtual products number



	$bycwooodt_virtual_products = 0;







	// Get all products in cart



	$bycwooodt_products = $woocommerce->cart->get_cart();







	// Loop through cart products



	foreach ($bycwooodt_products as $bycwooodt_product) {







		// Get product ID and '_virtual' post meta



		$bycwooodt_product_id = $bycwooodt_product['product_id'];



		$bycwooodt_is_virtual = get_post_meta($bycwooodt_product_id, '_virtual', true);







		// Update $has_virtual_product if product is virtual



		if ($bycwooodt_is_virtual == 'yes')



			$bycwooodt_virtual_products += 1;



	}







	if (count($bycwooodt_products) == $bycwooodt_virtual_products) {



		$bycwooodt_both_product_count_val = 'same';



	} else {



		$bycwooodt_both_product_count_val = 'not_same';



	}



	if ($bycwooodt_both_product_count_val == 'not_same') {



		// get cookie as array



		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



		if (!empty($_POST['byconsolewooodt_delivery_type'])) {



			update_post_meta($order_id, 'byconsolewooodt_delivery_type', $_POST['byconsolewooodt_delivery_type']);



		}



		if (!empty($_POST['byconsolewooodt_delivery_date_alternate'])) {



			include_once(ABSPATH . 'wp-admin/includes/plugin.php');



			// check for plugin using plugin name



			if (is_plugin_active('ByConsoleDynamicShippingCharge/ByConsoleDynamicShippingCharge.php')) {



				$selected_zones_names = get_option('byconsolewooodt_disable_date_and_time_by_available_zones_locations');



			} else {



				$selected_zones_names = '';



			}



			$byconsolewooodt_selected_state_name = $_POST['billing_state'];







			update_post_meta($order_id, 'byconsolewooodt_delivery_date', sanitize_text_field($_POST['byconsolewooodt_delivery_date_alternate']));







		}



		if ($_POST['byconsolewooodt_delivery_type_of_delivery_time'] == 'exact_time' || $_POST['byconsolewooodt_delivery_type_of_delivery_time_hidden'] == 'exact_time') {



			global $get_byc_wooodt_data;



			if (!empty($_POST['byconsolewooodt_delivery_time'])) {



				$get_option_display_time_formate_as = $get_byc_wooodt_data['display_time_formate_as'];



				if ($get_option_display_time_formate_as == 'fixed_time') {



					if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') {



						$_POST_byconsolewooodt_delivery_time = $_POST['byconsolewooodt_delivery_time'];



					} else {



						$_POST_byconsolewooodt_delivery_time = date('h:i A', strtotime(sanitize_text_field($_POST['byconsolewooodt_delivery_time'])));



					}



				} else {



					$_POST_byconsolewooodt_delivery_time = $_POST['byconsolewooodt_delivery_time'];



				}



				if ($byconsolewooodt_time_field_show == 'yes') {



					update_post_meta($order_id, 'byconsolewooodt_delivery_time', sanitize_text_field($_POST_byconsolewooodt_delivery_time));



				}



			}



		}



		if ($_POST['byconsolewooodt_delivery_type_of_delivery_time'] == 'as_early_as_possible') {



			if ($byconsolewooodt_time_field_show == 'yes') {



				update_post_meta($order_id, 'byconsolewooodt_delivery_time', 'as_early_as_possible');



			}



		}



		if (!empty($_POST['byconsolewooodt_delivery_location']) && $_POST['byconsolewooodt_delivery_type'] == 'levering') {



			update_post_meta($order_id, 'byconsolewooodt_delivery_location', $_POST['byconsolewooodt_delivery_location']);



		}



		if (!empty($_POST['byconsolewooodt_pickup_location']) && $_POST['byconsolewooodt_delivery_type'] == 'take_away') {



			update_post_meta($order_id, 'byconsolewooodt_pickup_location', $_POST['byconsolewooodt_pickup_location']);



		}



	}



}



//Display field value on the order edit page



add_action('woocommerce_admin_order_data_after_shipping_address', 'byconsolewooodt_checkout_field_display_admin_order_meta', 10, 1);



function byconsolewooodt_checkout_field_display_admin_order_meta($order)
{



	global $get_byc_wooodt_data;

	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'take_away') {



		$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



		if ($byconsolewooodt_pickup_lable != '') {



			$byconsolewooodt_pickup_lable_val = $byconsolewooodt_pickup_lable;



		} else {



			$byconsolewooodt_pickup_lable_val = 'Pickup';



		}



		//$order_delivery_type='Pickup';



		$order_delivery_type = $byconsolewooodt_pickup_lable_val;



		$pickup_location = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);

		global $get_byc_wooodt_data;

		$pickup_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



		if (!empty($pickup_location)) {



			$pickup_location_index = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);



			$pickup_location_name = $pickup_location_get_option_array_value[$pickup_location_index]['location'];



			$get_option_byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_pickup_location_lable)) {



				$byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			} else {



				$byconsolewooodt_order_page_pickup_location_lable = 'Pickup location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_pickup_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $pickup_location_name . '</p>';



		} else {



			//$location_string=__('<p>No pickup location was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$date_timestamp = strtotime($user_date);



			//$productdeliverydate = date("m/d/Y",$date_timestamp);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}

		global $get_byc_wooodt_data;

		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_date_lable)) {



			$byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_date_lable = 'Pickup date';



		}



		if (!empty($productdeliverydate)) {



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			/*$formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . $productdeliverydate . '</p>';



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_time_lable)) {



			$byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_time_lable = 'Pickup time';



		}

		global $get_byc_wooodt_data;

		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_pickup_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'levering') {



		$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



		if ($byconsolewooodt_delivery_lable != '') {



			$byconsolewooodt_delivery_lable_val = $byconsolewooodt_delivery_lable;



		} else {



			$byconsolewooodt_delivery_lable_val = 'Delivery';



		}



		//$order_delivery_type='Delivery';



		$order_delivery_type = $byconsolewooodt_delivery_lable_val;



		$delivery_location = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



		$delivery_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];



		if (!empty($delivery_location)) {



			$delivery_location_index = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



			$delivery_location_name = $delivery_location_get_option_array_value[$delivery_location_index]['location'];



			$get_option_byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_delivery_location_lable)) {



				$byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			} else {



				$byconsolewooodt_order_page_delivery_location_lable = 'Delivery location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_delivery_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_location_name . '</p>';



		} else {



			//$location_string=__('<p>No delivery loaction was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}

		global $get_byc_wooodt_data;

		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_date_lable)) {



			$byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_date_lable = 'Delivery date';



		}



		if (!empty($productdeliverydate)) {



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			/*$formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . $productdeliverydate . '</p>';



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



			//echo strtotime($productdeliverydate);



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_time_lable)) {



			$byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_time_lable = 'Delivery time';



		}

		global $get_byc_wooodt_data;

		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			if ($delivery_time_val == 'as_early_as_possible') {



				$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



			} else {



				$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



			}



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_delivery_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	$get_option_byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	if (!empty($get_option_byconsolewooodt_order_page_order_type_lable)) {



		$byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	} else {



		$byconsolewooodt_order_page_order_type_lable = 'Order Type';



	}



	echo '<p><strong>' . __($byconsolewooodt_order_page_order_type_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $order_delivery_type . '</p>';



	echo $location_string;



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_date', true) != '') {



		echo $delivery_pickup_date;



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_time', true) != '') {



		echo $delivery_pickup_time;



	}



}



// Display order meta in order details section



global $get_byc_wooodt_data;



if ($get_byc_wooodt_data['byconsolewooodt_widget_field_position'] == 'top') { //hook here if it is set to show on top in admin settings page



	//add_action( 'woocommerce_view_order', 'byconsolewooodt_checkout_field_display_user_order_meta', 10, 1 );



	add_action('woocommerce_order_items_table', 'byconsolewooodt_checkout_field_display_user_order_meta', 10, 1);



}

global $get_byc_wooodt_data;

if ($get_byc_wooodt_data['byconsolewooodt_widget_field_position'] == 'bottom') { //hook here if it is set to show on bottom in admin settings page



	add_action('woocommerce_order_details_after_order_table', 'byconsolewooodt_checkout_field_display_user_order_meta', 10, 1);



}



function byconsolewooodt_checkout_field_display_user_order_meta($order)
{

	global $get_byc_wooodt_data;



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'take_away') {



		$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];



		if ($byconsolewooodt_pickup_lable != '') {



			$byconsolewooodt_pickup_lable_val = $byconsolewooodt_pickup_lable;



		} else {



			$byconsolewooodt_pickup_lable_val = 'Pickup';



		}



		//$order_delivery_type='Pickup';



		$order_delivery_type = $byconsolewooodt_pickup_lable_val;



		$pickup_location = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);

		global $get_byc_wooodt_data;

		$pickup_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



		// print_r($pickup_location_get_option_array_value);



		if (!empty($pickup_location)) {



			$pickup_location_index = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);



			$pickup_location_name = $pickup_location_get_option_array_value[$pickup_location_index]['location'];



			$pickup_location_lat = $pickup_location_get_option_array_value[$pickup_location_index]['address_latitude'];



			$pickup_location_long = $pickup_location_get_option_array_value[$pickup_location_index]['address_longitude'];



			if (!empty($pickup_location_lat)) {



				$location_lat = $pickup_location_lat;



			} else {



				$location_lat = 0;



			}



			if (!empty($pickup_location_long)) {



				$location_long = $pickup_location_long;



			} else {



				$location_long = 0;



			}



			$get_option_byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_pickup_location_lable)) {



				$byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			} else {



				$byconsolewooodt_order_page_pickup_location_lable = 'Pickup location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_pickup_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $pickup_location_name . '</p>';



		} else {



			//$location_string=__('<p>No pickup loaction was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}

		global $get_byc_wooodt_data;

		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_date_lable)) {



			$byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_date_lable = 'Pickup date';



		}



		if (!empty($productdeliverydate)) {



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			/*$formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_time_lable)) {



			$byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_time_lable = 'Pickup time';



		}

		global $get_byc_wooodt_data;

		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_pickup_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'levering') {



		$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



		if ($byconsolewooodt_delivery_lable != '') {



			$byconsolewooodt_delivery_lable_val = $byconsolewooodt_delivery_lable;



		} else {



			$byconsolewooodt_delivery_lable_val = 'Delivery';



		}



		//$order_delivery_type='Delivery';



		$order_delivery_type = $byconsolewooodt_delivery_lable_val;



		$delivery_location = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



		$delivery_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];



		if (!empty($delivery_location)) {



			$delivery_location_index = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



			$delivery_location_lat = $delivery_location_get_option_array_value[$delivery_location_index]['address_latitude'];



			$delivery_location_long = $delivery_location_get_option_array_value[$delivery_location_index]['address_longitude'];



			if (!empty($delivery_location_lat)) {



				$location_lat = $delivery_location_lat;



			} else {



				$location_lat = 0;



			}



			if (!empty($delivery_location_long)) {



				$location_long = $delivery_location_long;



			} else {



				$location_long = 0;



			}



			$delivery_location_name = $delivery_location_get_option_array_value[$delivery_location_index]['location'];



			$get_option_byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_delivery_location_lable)) {



				$byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			} else {



				$byconsolewooodt_order_page_delivery_location_lable = 'Delivery location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_delivery_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_location_name . '</p>';



		} else {



			//$location_string=__('<p>No delivery loaction was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			//$user_date = get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true );



			//$date_timestamp = strtotime($user_date);



			//echo $productdeliverydate = date("m/d/Y",$date_timestamp);



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}



		global $get_byc_wooodt_data;



		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_date_lable)) {



			$byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_date_lable = 'Delivery date';



		}



		if (!empty($productdeliverydate)) {



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			/*$formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_time_lable)) {



			$byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_time_lable = 'Delivery time';



		}



		global $get_byc_wooodt_data;



		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			if ($delivery_time_val == 'as_early_as_possible') {



				$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



			} else {



				$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



			}



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_delivery_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	$get_option_byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	if (!empty($get_option_byconsolewooodt_order_page_order_type_lable)) {



		$byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	} else {



		$byconsolewooodt_order_page_order_type_lable = 'Order Type';



	}



	echo '<p><strong>' . __($byconsolewooodt_order_page_order_type_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $order_delivery_type . '</p>';



	echo $location_string;



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_date', true) != '') {



		echo $delivery_pickup_date;



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_time', true) != '') {



		echo $delivery_pickup_time;



	}



	include_once(ABSPATH . 'wp-admin/includes/plugin.php');



	// check for plugin using plugin name



	if (is_plugin_active('ByConsoleWooODTExtendedMapAddon/ByConsoleWooODTExtendedMapAddon.php')) {



		if ($location_lat != '0' && $location_long != '0') {



			echo '



<iframe src="http://maps.google.com/maps?q=' . $location_lat . ', ' . $location_long . '&z=15&output=embed"  width="50%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>';



		}



	}



	//echo '<p><strong>'.__('Delivery date','ByConsoleWooODTExtended').':</strong> ' .date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



	//echo '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'],'ByConsoleWooODTExtended').':</strong> ' .date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



	//echo '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'],'ByConsoleWooODTExtended').':</strong> ' . $delivery_time_val_content . '</p>';



	//prepare shipping texts



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'levering') {



		//$prepare_shipping_text= str_replace('[deliver_date]','<b>'.date_format($productdeliverydate, $formattedproductdeliverydate).'</b>',

		global $get_byc_wooodt_data;

		$prepare_shipping_text = str_replace('[deliver_date]', '<b>' . date($productdeliverydate, strtotime($formattedproductdeliverydate)) . '</b>', $get_byc_wooodt_data['byconsolewooodt_orders_delivered']);



		if ($get_byc_wooodt_data['byconsolewooodt_time_field_validation'] == 'yes') {



			echo '<p>' . str_replace('[deliver_time]', '<b>' . esc_html($delivery_time_val_content) . '</b>', $prepare_shipping_text) . '</p>';



		} else {



			echo '<p>' . str_replace('[deliver_time]', '<b>ASAP</b>', $prepare_shipping_text) . '</p>';



		}



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'take_away') {



		$prepare_shipping_text = str_replace('[pickup_date]', '<b>' . get_post_meta($order->id, 'byconsolewooodt_delivery_date', true) . '</b>', $get_byc_wooodt_data['byconsolewooodt_orders_pick_up']);



		//echo '<p>'.str_replace('[pickup_timepickup_time]','<b>'.$delivery_time_val_content.'</b>',$prepare_shipping_text).'</p>';	

		global $get_byc_wooodt_data;

		if ($get_byc_wooodt_data['byconsolewooodt_time_field_validation'] == 'yes') {



			echo '<p>' . str_replace('[pickup_time]', '<b>' . esc_html(get_post_meta($order_id, 'byconsolewooodt_delivery_time', true)) . '</b>', $prepare_shipping_text) . '</p>';



		} else {



			echo '<p>' . str_replace('[pickup_time]', '<b>ASAP</b>', $prepare_shipping_text) . '</p>';



		}



	}



}



//include the custom order meta to woocommerce mail

add_action("woocommerce_email_before_order_table", "byconsolewooodt_woocommerce_email_after_order_table", 10, 1);

//add_action( "woocommerce_email_after_order_table", "byconsolewooodt_woocommerce_email_after_order_table", 10, 1);



function byconsolewooodt_woocommerce_email_after_order_table($order)
{
	/*
	 * from v1.2.0
	 */
	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;

	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'take_away') {

		$byconsolewooodt_pickup_lable = $get_byc_wooodt_data['byconsolewooodt_pickup_lable'];

		if ($byconsolewooodt_pickup_lable != '') {
			$byconsolewooodt_pickup_lable_val = $byconsolewooodt_pickup_lable;
		} else {
			$byconsolewooodt_pickup_lable_val = 'Pickup';
		}

		//$order_delivery_type='Pickup';
		$order_delivery_type = $byconsolewooodt_pickup_lable_val;

		$pickup_location = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);

		global $get_byc_wooodt_data;

		$pickup_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



		if (!empty($pickup_location)) {



			$pickup_location_index = get_post_meta($order->id, 'byconsolewooodt_pickup_location', true);



			$pickup_location_name = $pickup_location_get_option_array_value[$pickup_location_index]['location'];



			$get_option_byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_pickup_location_lable)) {



				$byconsolewooodt_order_page_pickup_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_location_lable'];



			} else {



				$byconsolewooodt_order_page_pickup_location_lable = 'Pickup location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_pickup_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $pickup_location_name . '</p>';



		} else {



			//$location_string=__('<p>No pickup loaction was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}

		global $get_byc_wooodt_data;

		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_date_lable)) {



			$byconsolewooodt_order_page_pickup_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_date_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_date_lable = 'Pickup date';



		}



		if (!empty($productdeliverydate)) {



			/*$formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_pickup_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_pickup_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_pickup_time_lable)) {



			$byconsolewooodt_order_page_pickup_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_pickup_time_lable'];



		} else {



			$byconsolewooodt_order_page_pickup_time_lable = 'Pickup time';



		}



		global $get_byc_wooodt_data;



		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_pickup_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_type', true) == 'levering') {



		$byconsolewooodt_delivery_lable = $get_byc_wooodt_data['byconsolewooodt_delivery_lable'];



		if ($byconsolewooodt_delivery_lable != '') {



			$byconsolewooodt_delivery_lable_val = $byconsolewooodt_delivery_lable;



		} else {



			$byconsolewooodt_delivery_lable_val = 'Delivery';



		}



		//$order_delivery_type='Delivery';



		$order_delivery_type = $byconsolewooodt_delivery_lable_val;



		$delivery_location = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



		$delivery_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];



		if (!empty($delivery_location)) {



			$delivery_location_index = get_post_meta($order->id, 'byconsolewooodt_delivery_location', true);



			$delivery_location_name = $delivery_location_get_option_array_value[$delivery_location_index]['location'];



			$get_option_byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			if (!empty($get_option_byconsolewooodt_order_page_delivery_location_lable)) {



				$byconsolewooodt_order_page_delivery_location_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_location_lable'];



			} else {



				$byconsolewooodt_order_page_delivery_location_lable = 'Delivery location';



			}



			$location_string = '<p><strong>' . __($byconsolewooodt_order_page_delivery_location_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_location_name . '</p>';



		} else {



			//$location_string=__('<p>No delivery loaction was selected</p>','ByConsoleWooODTExtended');



			$location_string = '';



		}



		$seleted_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		if (!empty($seleted_date)) {



			//$productdeliverydate = new DateTime( get_post_meta( $order->id, 'byconsolewooodt_delivery_date', true ));



			$user_date = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



			$productdeliverydate = $user_date;



		} else {



			$productdeliverydate = get_post_meta($order->id, 'byconsolewooodt_delivery_date', true);



		}



		global $get_byc_wooodt_data;



		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];



		$delivery_time_val = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		if ($delivery_time_val == 'as_early_as_possible') {



			$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



		} else {



			$delivery_time_val_content = get_post_meta($order->id, 'byconsolewooodt_delivery_time', true);



		}



		$get_option_byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_date_lable)) {



			$byconsolewooodt_order_page_delivery_date_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_date_lable = 'Delivery date';



		}



		if (!empty($productdeliverydate)) {



			/*



					 $formated_date = str_replace('-', '/', $productdeliverydate);



					 $delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date($formattedproductdeliverydate, strtotime($formated_date)) . '</p>';*/



			//$delivery_pickup_date = '<p><strong>'.__($byconsolewooodt_order_page_delivery_date_lable,'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . date($formattedproductdeliverydate, strtotime($productdeliverydate)) . '</p>';



		} else {



			$delivery_pickup_date = '<p><strong>' . __($byconsolewooodt_order_page_delivery_date_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $productdeliverydate . '</p>';



		}



		$get_option_byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		if (!empty($get_option_byconsolewooodt_order_page_delivery_time_lable)) {



			$byconsolewooodt_order_page_delivery_time_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'];



		} else {



			$byconsolewooodt_order_page_delivery_time_lable = 'Delivery time';



		}

		global $get_byc_wooodt_data;

		$byc_date_formate = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



		$full_date_string_strpos = strpos($delivery_time_val_content, " - ");



		if ($full_date_string_strpos != '') {



			$full_date_string_explode_val = explode(" - ", $delivery_time_val_content);



			$first_time = date($byc_date_formate, strtotime($full_date_string_explode_val[0]));



			$second_time = date($byc_date_formate, strtotime($full_date_string_explode_val[1]));



			$delivery_time_val_content = $first_time . ' - ' . $second_time;



		} else {



			if ($delivery_time_val == 'as_early_as_possible') {



				$delivery_time_val_content = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];



			} else {



				$delivery_time_val_content = date($byc_date_formate, strtotime($delivery_time_val_content));



			}



		}



		$delivery_pickup_time = '<p><strong>' . __($byconsolewooodt_order_page_delivery_time_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $delivery_time_val_content . '</p>';



	}



	$get_option_byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	if (!empty($get_option_byconsolewooodt_order_page_order_type_lable)) {



		$byconsolewooodt_order_page_order_type_lable = $get_byc_wooodt_data['byconsolewooodt_order_page_order_type_lable'];



	} else {



		$byconsolewooodt_order_page_order_type_lable = 'Order Type';



	}



	echo '<p><strong>' . __($byconsolewooodt_order_page_order_type_lable, 'ByConsoleWooODTExtended') . ':</strong> ' . $order_delivery_type . '</p>';



	echo $location_string;



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_date', true) != '') {



		echo $delivery_pickup_date;



	}



	if (get_post_meta($order->id, 'byconsolewooodt_delivery_time', true) != '') {



		echo $delivery_pickup_time;



	}



	//echo '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_date_lable'],'ByConsoleWooODTExtended').':</strong> ' . date_format($productdeliverydate, $formattedproductdeliverydate) . '</p>';



	//echo '<p><strong>'.__($get_byc_wooodt_data['byconsolewooodt_order_page_delivery_time_lable'],'ByConsoleWooODTExtended').':</strong> ' . $delivery_time_val_content . '</p>';



}



//remove conflicting js



function remove_conflicting_js()
{



	wp_dequeue_script('jquery-ui-timepicker'); // woocommerce jetpack



	wp_dequeue_script('fp_reservation_timepicker'); //foodpress



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	?>



		<style>



			/*a.cart-contents{display:none !important;}*/



		<?php



		global $get_byc_wooodt_data;



		$byconsolewooodt_order_type = $get_byc_wooodt_data['byconsolewooodt_order_type'];



		if ($byconsolewooodt_order_type != 'both') {



			?>	



					#byconsolewooodt_delivery_type_field{display:none !important;}



		<?php } ?>	



		.loading_image_contanier{background-color: #ececec47;width: 100%;height: 500px;position: absolute;}



		.loading_image_contanier img{margin: 0 auto;display: block;margin-top: 15%;}



		#byconsolewooodt_delivery_date_alternate_field{display:none;}



		.loading_image_contanier_for_widget{background-color: #ececec47;position: absolute;width: 22%;height: 295px;padding: 20px;}



		.loading_image_contanier_for_widget img{margin: 0 auto;display: block;margin-top: 50%;width: 20%;}



		.byconsole_cart_content1{display:none;}



		.byconsole_cart_content2{display:none;}



		<?php

		global $get_byc_wooodt_data;



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$multipleLocationEnable = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



			$byconsolewooodt_pickup_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_pickup_location_auto_select_and_hide'];



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$multipleLocationEnable = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



			$byconsolewooodt_delivery_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_delivery_location_auto_select_and_hide'];



		}



		if ($multipleLocationEnable != '') {



			if ($byconsolewooodt_pickup_location_auto_select_and_hide == 'yes') {



				echo '#byconsolewooodt_pickup_location_field{visibility: hidden;position: absolute;opacity: -0.8;height: 0px;}';



			}



			if ($byconsolewooodt_delivery_location_auto_select_and_hide == 'yes') {



				echo '#byconsolewooodt_delivery_location_field{visibility: hidden;position: absolute;opacity: -0.8;height: 0px;}';



			}



		}



		$byconsolewooodt_odt_show_hide_on_live_site = $get_byc_wooodt_data['byconsolewooodt_odt_show_hide_on_live_site'];



		if ($byconsolewooodt_odt_show_hide_on_live_site == 'yes') {



			echo '



	.loading_image_contanier{display:none;}



	#byconsolewooodt_checkout_field{display:none;}



	';



		}



		global $get_byc_wooodt_data;

		if ($get_byc_wooodt_data['byconsolewooodt_calender_color'] != '') {

			$byconsolewooodt_calender_color = $get_byc_wooodt_data['byconsolewooodt_calender_color'];

		} else {

			$byconsolewooodt_calender_color = '000000';

		}



		if ($get_byc_wooodt_data['byconsolewooodt_calender_text_color'] != '') {

			$byconsolewooodt_calender_text_color = $get_byc_wooodt_data['byconsolewooodt_calender_text_color'];

		} else {

			$byconsolewooodt_calender_text_color = 'ffffff';

		}



		if ($get_byc_wooodt_data['byconsolewooodt_calender_arrow_color'] != '') {

			$byconsolewooodt_calender_arrow_color = $get_byc_wooodt_data['byconsolewooodt_calender_arrow_color'];

		} else {

			$byconsolewooodt_calender_arrow_color = 'ffffff';

		}



		if ($get_byc_wooodt_data['byconsolewooodt_calender_current_date_color'] != '') {

			$byconsolewooodt_calender_current_date_color = $get_byc_wooodt_data['byconsolewooodt_calender_current_date_color'];

		} else {

			$byconsolewooodt_calender_current_date_color = 'ff0';

		}

		?>



		.ui-timepicker-wrapper{min-width:150px !important; text-align:center !important;}



		#byconsolewooodt_delivery_type_field .woocommerce-input-wrapper{clear: both;display: block;}



		#byconsolewooodt_odt_show_hide_on_live_site_field{display:none;}



		/****** Calender template design changed ******/



		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{border:none !important; background:none  !important; text-align:center;}



		.ui-datepicker .ui-datepicker-header {background: none;border: none;border-radius: 0px;font-size: 12px;margin: 10px 0px;}



		.ui-datepicker table{border: none;background-color: <?php echo $byconsolewooodt_calender_color; ?>;color: <?php echo $byconsolewooodt_calender_text_color; ?>; font-size: 12px !important;}



		.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{color:<?php echo $byconsolewooodt_calender_text_color; ?> !important; font-size: 12px;padding: 11px;}



		.ui-datepicker{background: <?php echo $byconsolewooodt_calender_color; ?> !important;}



		.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight{background-color: <?php echo $byconsolewooodt_calender_current_date_color; ?> !important;}



		/* .ui-datepicker .ui-datepicker-prev{top:0px !important; right:0px !important;height: 35px !important;width: 35px !important;}

		.ui-datepicker .ui-datepicker-next{top:0px !important; right:0px !important;height: 35px !important;width: 35px !important;}



		.ui-datepicker-prev span, .ui-datepicker-next span {

			background-image: none !important;

				margin-left: -5px !important;

		}



		.ui-datepicker-prev span.ui-icon {

			width: 12px;

			height: 16px;

			display: block;

			text-indent: 0;

			overflow: hidden;

			background-repeat: no-repeat;

		}



		.ui-datepicker-prev span:before {

			content: "\f104";

			font-family: FontAwesome;

			position: relative;

			color:<?php echo $byconsolewooodt_calender_arrow_color; ?>;

			font-size:16px;

		}



		.ui-datepicker-prev:hover {

			color: #000;

			background-image: none !important;

			cursor:pointer;

		}

		.ui-datepicker-next span.ui-icon {

			width: 12px;

			height: 16px;

			display: block;

			text-indent: 0;

			overflow: hidden;

			background-repeat: no-repeat;

			text-align: center;

		}



		.ui-datepicker-next span:before {

			content: "\f105";

			font-family: FontAwesome;

			position: relative;

			color:<?php echo $byconsolewooodt_calender_arrow_color; ?>;

			font-size:16px;

		}



		.ui-datepicker-next:hover {

			color: #000;

			background-image: none !important;

			cursor:pointer;

		} */



		.ui-state-hover{background: none !important;}



		.ui-datepicker .ui-datepicker-title{line-height: 30px;color:<?php echo $byconsolewooodt_calender_text_color; ?>;}



		#byconsolewooodt_time_slot_delivery_charges_field{display:none;}

		</style>



		<?php

}



add_action('wp_head', 'remove_conflicting_js', 1);



// add our styles and js



function byconsolewooodt_add_scripts()
{



	wp_enqueue_script('jquery-ui-datepicker');



	wp_register_script('byconsolewooodt_script_2', plugins_url('js/jquery.timepicker.min.js', __FILE__), array('jquery'), '1.12', true);



	wp_register_script('byconsolewooodt_script_3', plugins_url('js/byconsolewooodt.js', __FILE__), array('jquery'), '1.12', true);



	//wp_enqueue_script( 'my-ajax-handle', plugin_dir_url( __FILE__ ) . 'myajax.js', array( 'jquery' ) );



	//wp_localize_script( 'my-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );



	wp_enqueue_script('byconsolewooodt_script_2');



	wp_enqueue_script('byconsolewooodt_script_3');



}



add_action('wp_enqueue_scripts', 'byconsolewooodt_add_scripts');



//add styles



function byconsolewooodt_add_styles()
{



	wp_enqueue_style('byconsolewooodt_stylesheet', plugins_url('css/style.css', __FILE__));



	wp_enqueue_style('byconsolewooodt_stylesheet_2', plugins_url('css/jquery-ui.min.css', __FILE__));



	wp_enqueue_style('byconsolewooodt_stylesheet_3', plugins_url('css/jquery-ui.theme.min.css', __FILE__));



	wp_enqueue_style('byconsolewooodt_stylesheet_4', plugins_url('css/jquery-ui.structure.min.css', __FILE__));



	wp_enqueue_style('byconsolewooodt_stylesheet_5', plugins_url('css/jquery.timepicker.css', __FILE__));



}



add_action('wp_enqueue_scripts', 'byconsolewooodt_add_styles');



// add admin scripts



function byconsolewooodt_admin_script($hook)
{

	global $get_byc_wooodt_data;

	global $byconsolewooodt_admin_settings;



	global $byconsolewooodt_admin_settings_holidays;



	global $byconsolewooodt_admin_feature_settings;



	global $byconsolewooodt_admin_location_settings;



	global $byconsolewooodt_admin_language_translator_settings;



	global $byconsolewooodt_admin_color_picker_settings;



	global $byconsolewooodt_admin_delivery_pickup_van_management;



	global $byconsolewooodt_order_limit_sub_menu;



	global $byconsolewooodt_admin_specific_day_charges;



	global $byconsolewooodt_admin_day_wise_charges;



	if ($hook == $byconsolewooodt_admin_settings || $hook == $byconsolewooodt_admin_settings_holidays || $hook == $byconsolewooodt_admin_feature_settings || $hook == $byconsolewooodt_admin_location_settings || $hook == $byconsolewooodt_admin_language_translator_settings || $hook == $byconsolewooodt_admin_color_picker_settings || $hook == $byconsolewooodt_admin_delivery_pickup_van_management || $hook == $byconsolewooodt_order_limit_sub_menu || $byconsolewooodt_admin_specific_day_charges || $byconsolewooodt_admin_day_wise_charges) { //return;



		/*wp_register_script( 'byconsolewooodt-admin-script', plugins_url( 'js/byconsolewooodt-admin-script.js' , __FILE__ ),array('jquery'),'1.12', true );



			  //wp_register_script( 'byconsolewooodt-admin-script-2', plugins_url( 'js/jquery-1.12.4.js' , __FILE__ ),array('jquery'),'1.12', true );



			  wp_register_script( 'byconsolewooodt-admin-script-3', plugins_url( 'js/jquery-ui.js' , __FILE__ ),array('jquery'),'1.12', true );



			  wp_register_script( 'byconsolewooodt-admin-script-4', plugins_url( 'js/jquery-ui.multidatespicker.js' , __FILE__ ),array('jquery'),'1.12', true );



			  wp_register_script( 'byconsolewooodt-admin-script-5', plugins_url( 'js/jscolor.js' , __FILE__ ),array('jquery'),'1.12', true );



			  wp_register_script( 'byconsolewooodt-admin-script-6', plugins_url( 'js/jscolor.min.js' , __FILE__ ),array('jquery'),'1.12', true );



			  wp_enqueue_script( 'byconsolewooodt-admin-script');



			  //wp_enqueue_script( 'byconsolewooodt-admin-script-2');



			  wp_enqueue_script( 'byconsolewooodt-admin-script-3');



			  wp_enqueue_script( 'byconsolewooodt-admin-script-4');



			  wp_enqueue_script( 'byconsolewooodt-admin-script-5');



			  wp_enqueue_script( 'byconsolewooodt-admin-script-6');*/



		$plugins_url_path = plugins_url();



		wp_enqueue_script('media-upload');



		wp_enqueue_script('thickbox');



		//wp_register_script('my-upload', $plugins_url_path.'/ByconsoleDatabaseManageFromAdmin/js/admin_image_upload_custom.js', array('jquery','media-upload','thickbox'));



		wp_enqueue_script('my-upload');



		wp_register_script('byconsolewooodt-admin-script', plugins_url('js/byconsolewooodt-admin-script.js', __FILE__), array('jquery'), '1.12', true);



		//wp_register_script( 'byconsolewooodt-admin-script-2', 'http://maps.google.com/maps/api/js?sensor=false');



		wp_register_script('byconsolewooodt-admin-script-3', plugins_url('js/jquery-ui.js', __FILE__), array('jquery'), '1.12', true);



		wp_register_script('byconsolewooodt-admin-script-4', plugins_url('js/jquery-ui.multidatespicker.js', __FILE__), array('jquery'), '1.12', true);



		wp_register_script('byconsolewooodt-admin-script-5', plugins_url('js/jscolor.js', __FILE__), array('jquery'), '1.12', true);



		wp_register_script('byconsolewooodt-admin-script-6', plugins_url('js/jscolor.min.js', __FILE__), array('jquery'), '1.12', true);

		wp_register_script('byconsolewooodt-admin-script-7', plugins_url('js/bycwooodt_admin_monent_min.js', __FILE__), array('jquery'), '1.12', true);



		wp_register_script('byconsolewooodt-admin-script-8', plugins_url('js/bycwooodt_admin_fullcalendar_min.js', __FILE__), array('jquery'), '1.12', true);



		wp_enqueue_script('byconsolewooodt-admin-script');



		//wp_enqueue_script( 'byconsolewooodt-admin-script-2');



		wp_enqueue_script('byconsolewooodt-admin-script-3');



		wp_enqueue_script('byconsolewooodt-admin-script-4');



		wp_enqueue_script('byconsolewooodt-admin-script-5');



		wp_enqueue_script('byconsolewooodt-admin-script-6');



		wp_enqueue_script('byconsolewooodt-admin-script-7');



		wp_enqueue_script('byconsolewooodt-admin-script-8');



		wp_enqueue_style('thickbox');



		wp_enqueue_style('byconsolewooodt_admin_stylesheet', plugins_url('css/admin.css', __FILE__));



		wp_enqueue_style('byconsolewooodt_admin_stylesheet_3', plugins_url('css/adminjquery-ui.css', __FILE__));

		wp_enqueue_style('byconsolewooodt_admin_stylesheet_4', plugins_url('css/bycwooodt_admin_ordered_calender.css', __FILE__));



	} else {



		return;



	}



}



add_action('admin_enqueue_scripts', 'byconsolewooodt_admin_script');



// refreshing the cart on page load



/** Break html5 cart caching */



add_action('wp_enqueue_scripts', 'cartcache_enqueue_scripts', 100);



function cartcache_enqueue_scripts()
{



	wp_deregister_script('wc-cart-fragments');



	wp_enqueue_script('wc-cart-fragments', plugins_url('js/cart-fragments.js', __FILE__), array('jquery', 'jquery-cookie'), '1.12', true);



}



// show only store pickup when take_away is selected	



add_filter('woocommerce_package_rates', 'byconsolewooodt_shipping_according_widget_input', 10, 2);



function byconsolewooodt_shipping_according_widget_input($rates, $package)
{



	$do_shipping_methods_manipulation = 'YES';



	include_once(ABSPATH . 'wp-admin/includes/plugin.php');



	// get cookie as array



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	//echo 'PUPUN';



	//print_r($byconsolewooodt_delivery_widget_cookie_array);



	if (is_plugin_active('ByConsoleDynamicShippingCharge/ByConsoleDynamicShippingCharge.php')) {



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$selected_zones_names = get_option('byconsolewooodt_pickup_disable_date_and_time_by_available_zones_locations');



			//print_r($selected_zones_names);



			if (!empty($selected_zones_names)) {



				$do_shipping_methods_manipulation = 'NO';



			} else {



				$do_shipping_methods_manipulation = 'YES';



			}



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$selected_zones_names = get_option('byconsolewooodt_delivery_disable_date_and_time_by_available_zones_locations');



			if (!empty($selected_zones_names)) {



				$do_shipping_methods_manipulation = 'NO';



			} else {



				$do_shipping_methods_manipulation = 'YES';



			}



		}



	}



	//echo $do_shipping_methods_manipulation;



	global $woocommerce;

	global $get_byc_wooodt_data;

	$version = "2.6";



	if (version_compare($woocommerce->version, $version, ">=")) {



		$new_rates = array();



		/*echo '<hr />';



			  print_r($rates);*/



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			foreach ($rates as $key => $rate) {



				if ('local_pickup' === $rate->method_id || 'legacy_local_pickup' === $rate->method_id) {



					$new_rates[$key] = $rates[$key];



				}



			}



			/*print_r($new_rates);



					 print_r($rates);*/



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			foreach ($rates as $key => $rate) {



				$shipping_methods = $rate->method_id;



				if ('local_pickup' != $shipping_methods) {



					$new_rates[$key] = $rates[$key];



					//unset($rates['local_pickup']);



				}



			}



		}



		//return empty($new_rates) ? $rates : $new_rates;



		$site_full_url = $_SERVER['SERVER_NAME'];



		//echo $do_shipping_methods_manipulation;



		//print_r($rates);



		//echo '<hr />';



		//print_r($new_rates);



		if ($do_shipping_methods_manipulation == 'YES') {



			return $new_rates;



		} else {



			//return empty($new_rates) ? $rates : $new_rates;



			return $rates;



		}



	} else {



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$predefined_shipping = $rates['local_pickup'];



			$rates = array();



			$rates['local_pickup'] = $predefined_shipping;



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$predefined_shipping = $rates['flat_rate'];



			$rates = array();



			$rates['flat_rate'] = $predefined_shipping;



		}



	}



	return $rates;



}



add_action('woocommerce_before_checkout_form', 'byconsolewoodt_order_not_possible');



function byconsolewoodt_order_not_possible()
{



	echo '<div class="woocommerce-error" id="error_msg" style="display:none;"></div>';



}



/*



add_action( 'wp_ajax_get_delivery_limit_by_selected_date', 'get_delivery_limit_by_selected_date' );



add_action( 'wp_ajax_nopriv_get_delivery_limit_by_selected_date', 'get_delivery_limit_by_selected_date' );



function get_delivery_limit_by_selected_date()



{



global $wpdb;



//echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaa';



$selected_date_explode_val = explode("/", $_POST['selected_date']);



$selected_date_string = $selected_date_explode_val[2].'-'.$selected_date_explode_val[0].'-'.$selected_date_explode_val[1];



$byconsolewooodt_order_per_day_name = get_option('byconsolewooodt_order_per_day_name');



$allowed_order_no = $byconsolewooodt_order_per_day_name[$_POST['selected_date_dayName_value']];



$filters = array(



'post_status' =>array('wc-completed', 'wc-pending', 'wc-processing', 'wc-on-hold'),



'post_type' => 'shop_order',



'posts_per_page' => -1,



'paged' => 1,



'meta_key' => '_customer_user',



'order' => 'DESC',	



'meta_query' => array(



array(



'key' => 'byconsolewooodt_delivery_date',



'value' => date('m/d/Y',  strtotime($selected_date_string)),



'compare' => '>='



),



array(



'key' => 'byconsolewooodt_delivery_date',



'value' => date('m/d/Y',  strtotime($selected_date_string)),



'compare' => '<='



)



)



);



$ordered_product_id_array= array();



$loop = new WP_Query( $filters );



while ( $loop->have_posts() ) {



$loop->the_post();



$order = new WC_Order($loop->post->ID);



$product_id_count=1;



foreach ($order->get_items() as $key => $lineItem) 



{						



array_push($ordered_product_id_array,$lineItem->get_product_id());



}



}



$ordered_product_id_val = count($ordered_product_id_array);



//echo $ordered_product_id_val . '<' . $allowed_order_no;



if($ordered_product_id_val < $allowed_order_no)



{



$cart_added_product_id_array = array();



if ( sizeof( WC()->cart->get_cart() ) > 0 )



{



foreach(WC()->cart->get_cart() as $cart_item_key => $values ) 



{



$_product = $values['data'];



$productid = version_compare( WC_VERSION, '3.0.0', '<' ) ? $_product->id : $_product->get_id();



if(!empty($productid))



{



array_push($cart_added_product_id_array,$productid);



}



else



{



$cart_added_product_id_array = 0;	



}



$cart_added_product_id_count = count($cart_added_product_id_array);



}



$total_order = $ordered_product_id_val+$cart_added_product_id_count;



// echo '$total_order > '.$total_order .'>'. '$allowed_order_no > '.$allowed_order_no;



if($total_order > $allowed_order_no)



{



echo $reduct_product = $total_order-$allowed_order_no;



//echo $total_order.'<@_|_@>'.$reduct_product.'<@_|_@>'.$_POST['selected_date_dayName_value'];



}



else



{



// echo 'Order possible';



}



}



}



else



{



echo $reduct_product = '0';



}



wp_die(); // this is required to terminate immediately and return a proper response



}*/



add_action('wp_ajax_get_delivery_time_by_selected_date', 'get_delivery_time_by_selected_date');



add_action('wp_ajax_nopriv_get_delivery_time_by_selected_date', 'get_delivery_time_by_selected_date');



function get_delivery_time_by_selected_date()
{

	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;
	global $wpdb; // this is how you get access to the database

	$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	$location_time_disable_by_date_array = array();



	$selected_location_value = $_POST['selected_location_value'];



	//$selected_data_val = $_POST['selected_date_value'];   



	$selected_data_val = $_POST['selected_alternate_pickdate_value'];



	$selected_order_type_val = $_POST['selected_order_type'];



	//echo $_POST['selected_alternate_pickdate_value'];   



	//echo '-----';



	$selected_date_day_name = strtolower(date('D', strtotime($_POST['selected_alternate_pickdate_value'])));



	$date_from = date('m/d/Y', strtotime($selected_data_val . ' -4 day'));



	$date_to = $selected_data_val;



	if ($selected_order_type_val == 'take_away') {



		$byconsolewooodt_pickup_or_delivery_time = $get_byc_wooodt_data['byconsolewooodt_chekout_page_time_placeholder'];



		$filters = array(



			/*'post_status' => 'any',*/



			'post_status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'),



			'post_type' => 'shop_order',



			'posts_per_page' => 90000,



			'paged' => -1,



			'meta_key' => '_customer_user',



			'meta_query' => array(



				array(



					'key' => 'byconsolewooodt_delivery_date',



					'value' => $date_to,



					'compare' => '='



				),



				array(



					'key' => 'byconsolewooodt_pickup_location',



					'value' => $selected_location_value,



					'compare' => '='



				)



			)
		);



	}



	if ($selected_order_type_val == 'levering') {



		$byconsolewooodt_pickup_or_delivery_time = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_time_placeholder'];



		$filters = array(



			/*'post_status' => 'any',*/



			'post_status' => array('wc-pending', 'wc-processing', 'wc-on-hold', 'wc-completed'),



			'post_type' => 'shop_order',



			'posts_per_page' => 90000,



			'paged' => -1,



			'meta_key' => '_customer_user',



			'meta_query' => array(



				array(



					'key' => 'byconsolewooodt_delivery_date',



					'value' => $date_to,



					'compare' => '='



				),



				array(



					'key' => 'byconsolewooodt_delivery_location',



					'value' => $selected_location_value,



					'compare' => '='



				)



			)
		);



	}



	// The Query



	$the_query = new WP_Query($filters);



	//echo '<pre>';



	//var_dump($the_query);



	//echo '</pre>';



	// The Loop



	$sorted_orders = $the_query->posts;



	/*echo 'AYAN.';



	   print_r($sorted_orders);



	   echo 'PAUL.';*/



	$delivery_on_selected_time_array = array();



	if (!empty($sorted_orders)) {



		array_push($selected_loaction_maxmimum_delivery_array, get_post_meta($selected_location_value, 'delivery_per_custom_slot[number_of_delivery]', true));



		foreach ($sorted_orders as $single_order) {



			//echo $single_order_id=$single_order->ID;



			array_push($delivery_on_selected_time_array, get_post_meta($single_order->ID, 'byconsolewooodt_delivery_time', true));



		}



		// get max order limit and custom slot from option table



		if ($selected_order_type_val == 'take_away') {



			$location_max_order_array = $get_byc_wooodt_data['pickup_per_custom_slot'];



		}



		if ($selected_order_type_val == 'levering') {



			$location_max_order_array = $get_byc_wooodt_data['delivery_per_custom_slot'];



		}



		$selected_location_max_order_array = $location_max_order_array[$selected_location_value];



		//print_r($selected_location_max_order_array);



		$count = count($delivery_on_selected_time_array);



		$arrayDayVal = array();



		foreach ($selected_location_max_order_array as $key => $max_order_per_custom_slot) {



			if (!empty($max_order_per_custom_slot['sun'])) {



				$timeSlotSunDay = 'sun';



				array_push($arrayDayVal, $timeSlotSunDay);



			}



			if (!empty($max_order_per_custom_slot['mon'])) {



				$timeSlotMonDay = 'mon';



				array_push($arrayDayVal, $timeSlotMonDay);



			}



			if (!empty($max_order_per_custom_slot['tue'])) {



				$timeSlotTueDay = 'tue';



				array_push($arrayDayVal, $timeSlotTueDay);



			}



			if (!empty($max_order_per_custom_slot['wed'])) {



				$timeSlotWedDay = 'wed';



				array_push($arrayDayVal, $timeSlotWedDay);



			}



			if (!empty($max_order_per_custom_slot['thu'])) {



				$timeSlotThuDay = 'thu';



				array_push($arrayDayVal, $timeSlotThuDay);



			}



			if (!empty($max_order_per_custom_slot['fri'])) {



				$timeSlotFriDay = 'fri';



				array_push($arrayDayVal, $timeSlotFriDay);



			}



			if (!empty($max_order_per_custom_slot['sat'])) {



				$timeSlotSatDay = 'sat';



				array_push($arrayDayVal, $timeSlotSatDay);



			}



			$order_booked_count = 0;



			$delivery_on_selected_time_array_temp = $delivery_on_selected_time_array;



			//echo '----------------------------';



			//print_r($delivery_on_selected_time_array_temp);



			$i = 1;



			while ($i <= $count) {



				$admin_time_slot = date($byconsolewooodt_hours_format, strtotime($max_order_per_custom_slot["start_time_slot"])) . ' - ' . date($byconsolewooodt_hours_format, strtotime($max_order_per_custom_slot["end_time_slot"]));



				//echo '<br />';



				if (in_array($admin_time_slot, $delivery_on_selected_time_array_temp)) {



					$key_to_remove = array_search($admin_time_slot, $delivery_on_selected_time_array_temp);



					//echo '$key_to_remove - '.$key_to_remove;				



					unset($delivery_on_selected_time_array_temp[$key_to_remove]);



					//echo 'printing $delivery_on_selected_time_array_temp';



					//print_r($delivery_on_selected_time_array_temp);



					//echo '-----------------------------';



					$order_booked_count++;



					$location_order_status[$selected_location_value][$key]["max_allowed"] = $max_order_per_custom_slot["number_of_delivery"];



					$location_order_status[$selected_location_value][$key]["posted_order"] = $order_booked_count;



					$location_order_status[$selected_location_value][$key]["used_time_slot"] = $max_order_per_custom_slot["start_time_slot"] . ' - ' . $max_order_per_custom_slot["end_time_slot"];



					$location_order_status[$selected_location_value][$key]["dayNameArray"] = $arrayDayVal;



				}



				$i++;



			}



			//array_push($location_time_disable_by_date_array,$max_order_per_custom_slot["time_slot"]);



			$arrayDayVal = (array) null;



		}



	} // not empty



	foreach ($location_order_status as $location_order_status_values) {







		foreach ($location_order_status_values as $single_key => $single_value) {







			if (in_array($selected_date_day_name, $single_value["dayNameArray"])) {



				if ($single_value['max_allowed'] <= $single_value['posted_order']) {



					array_push($location_time_disable_by_date_array, $single_value['used_time_slot']);



				}







			}







		}



	}



	//echo '-------------------';



	//print_r($location_order_status);



	//echo '-------------------';



	//var_dump($sorted_orders);



	//print_r($delivery_on_selected_time_array);



	//print_r($selected_loaction_maxmimum_delivery_array);



	//echo '---------------------------';



	//print_r($location_time_disable_by_date_array);



	//echo '---------------------------';



	$delivery_location_id = $_POST['selected_location_value'];



	/*if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='take_away'){



		   $delivery_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];



	   }



	   if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='levering'){



		   $delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];



	   }*/



	if ($selected_order_type_val == 'take_away') {



		$delivery_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];



		global $get_byc_wooodt_data;



		if ($get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'] == "YES") {



			$delivery_location_id = $_POST['selected_location_value'];



		} else {



			$delivery_location_id = 1;



		}



	}



	global $get_byc_wooodt_data;



	if ($selected_order_type_val == 'levering') {



		$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];



		if ($get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'] == "YES") {



			$delivery_location_id = $_POST['selected_location_value'];



		} else {



			$delivery_location_id = 1;



		}



	}



	$delivery_per_custom_slot_array_by_location_id = $delivery_per_custom_slot_array[$delivery_location_id];



	//print_r($delivery_per_custom_slot_array_by_location_id);

	global $get_byc_wooodt_data;

	$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



	if ($byconsolewooodt_pickup_or_delivery_time != '') {



		$byconsolewooodt_pickup_or_delivery_time_val = $byconsolewooodt_pickup_or_delivery_time;



	} else {



		$byconsolewooodt_pickup_or_delivery_time_val = __('Select time', 'ByConsoleWooODTExtended');



	}



	echo '<option value="0">' . $byconsolewooodt_pickup_or_delivery_time_val . '</option>';



	foreach ($delivery_per_custom_slot_array_by_location_id as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value) {



		//echo '********************************************';



		//$selected_date_day_name 



		if (array_key_exists($selected_date_day_name, $delivery_per_custom_slot_val_single_value)) {



			//echo 'yes exist';



			$total_time_value = $delivery_per_custom_slot_val_single_value["start_time_slot"] . ' - ' . $delivery_per_custom_slot_val_single_value["end_time_slot"];



			//echo '----';



			//echo $total_time_value;



			//echo '----';



			//echo '********************************************';



			//echo 'AYAN PAUL...';



			/*$current_system_time = $_POST['current_system_time'];



					 $start_time_slot = $delivery_per_custom_slot_val_single_value["start_time_slot"];



					 $end_time_slot = $delivery_per_custom_slot_val_single_value["end_time_slot"];*/



			$current_system_time = $_POST['current_system_time'];

			global $get_byc_wooodt_data;

			if ($selected_order_type_val == 'take_away') {



				$byconsolewooodt_delivery_times_val = $get_byc_wooodt_data['byconsolewooodt_pickup_wait_times'];



			}



			if ($selected_order_type_val == 'levering') {



				$byconsolewooodt_delivery_times_val = $get_byc_wooodt_data['byconsolewooodt_delivery_times'];



			}



			if (!empty($byconsolewooodt_delivery_times_val)) {



				$byconsolewooodt_delivery_times = $byconsolewooodt_delivery_times_val;



				$current_system_time = strtotime("+" . $byconsolewooodt_delivery_times . " minutes", strtotime($current_system_time));



			} else {



				$current_system_time = strtotime($current_system_time);



			}



			$start_time_slot = $delivery_per_custom_slot_val_single_value["start_time_slot"];



			$end_time_slot = $delivery_per_custom_slot_val_single_value["end_time_slot"];



			$start_time_slot_with_str = strtotime($start_time_slot);

			$chargesVal = $delivery_per_custom_slot_val_single_value["charges"];



			$ExtraChargesLang = get_option('byconsolewooodt_time_slot_charges_text');



			if ($chargesVal != '') {

				$chargesText = '(' . $ExtraChargesLang . ': ' . get_woocommerce_currency_symbol() . '' . $chargesVal . ')';

			} else {

				$chargesText = '';

			}



			//check maximum allowed order



			/*if(in_array($total_time_value,$location_time_disable_by_date_array))



					 {



						 echo '<option disabled="disabled" value="'.date($byconsolewooodt_hours_format, strtotime($start_time_slot)).' - '.date($byconsolewooodt_hours_format, strtotime($end_time_slot)).'">'.date($byconsolewooodt_hours_format, strtotime($start_time_slot)).' - '.date($byconsolewooodt_hours_format, strtotime($end_time_slot)).'</option>';



					 }



					 else



					 {



						 echo '<option value="'.date($byconsolewooodt_hours_format, strtotime($start_time_slot)).' - '.date($byconsolewooodt_hours_format, strtotime($end_time_slot)).'">'.date($byconsolewooodt_hours_format, strtotime($start_time_slot)).' - '.date($byconsolewooodt_hours_format, strtotime($end_time_slot)).'</option>';



					 }*/



			$orderLimtOverText = __('Order limit is over', 'ByConsoleWooODTExtended');



			//echo $_POST['selected_alternate_pickdate_value'] .'=='. current_time('m-d-Y');



			if ($_POST['selected_alternate_pickdate_value'] == current_time('m/d/Y')) {



				//if(strtotime($current_system_time) <= strtotime($start_time_slot))



				if ($current_system_time <= $start_time_slot_with_str) {



					if (in_array($total_time_value, $location_time_disable_by_date_array)) {



						echo '<option disabled="disabled" value="' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '">' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '&nbsp;' . $chargesText . '&nbsp;' . $orderLimtOverText . '</option>';



					} else {



						echo '<option value="' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '">' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '&nbsp;' . $chargesText . '</option>';



					}



				} else {



					//echo '<option disabled="disabled">This time is not avalible for today</option>';



				}



			} else {



				if (in_array($total_time_value, $location_time_disable_by_date_array)) {



					echo '<option disabled="disabled" value="' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '">' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '&nbsp;' . $chargesText . '&nbsp;' . $orderLimtOverText . '</option>';



				} else {



					echo '<option value="' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '">' . date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot)) . '&nbsp;' . $chargesText . '</option>';



				}



			}



		} else {



			//echo 'does not exist';



		}



	}



	wp_die(); // this is required to terminate immediately and return a proper response



}



add_action('wp_ajax_delivery_location_id_action', 'delivery_location_id_action');



add_action('wp_ajax_nopriv_delivery_location_id_action', 'delivery_location_id_action');



function delivery_location_id_action()
{


	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;

	global $wpdb; // this is how you get access to the database



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	$delivery_location_id = $_POST['delivery_location_id_val'];



	//$whatever += 10;



	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



		$delivery_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];



	}



	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



		$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];



	}



	$delivery_per_custom_slot_array_by_location_id = $delivery_per_custom_slot_array[$delivery_location_id];



	// print_r($delivery_per_custom_slot_array_by_location_id);



	echo '<option value="0">' . __('Select delivery time', 'ByConsoleWooODTExtended') . '</option>';



	foreach ($delivery_per_custom_slot_array_by_location_id as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value) {



		echo '<option value="' . $delivery_per_custom_slot_val_single_value["time_slot"] . '">' . $delivery_per_custom_slot_val_single_value["time_slot"] . '</option>';



	}



	//echo $delivery_location_id;



	wp_die(); // this is required to terminate immediately and return a proper response



}



function byconsolewooodt_header_script()
{



	$byconsolewooodt_plugin_url = plugins_url();



	$pluginPathUrl = plugin_dir_url(__FILE__) . 'images';

	$byconsolewooodt_checkout_page_loading_image_manage = get_option('byconsolewooodt_checkout_page_loading_image_manage');

	if ($byconsolewooodt_checkout_page_loading_image_manage == 'yes') {



		$byconsolewooodt_upload_loading_image = get_option('byconsolewooodt_upload_loading_image');



		if ($byconsolewooodt_upload_loading_image != '') {



			$byconsolewooodt_upload_loading_image_url = $byconsolewooodt_upload_loading_image;



		} else {



			$byconsolewooodt_upload_loading_image_url = $pluginPathUrl . '/Preloader_8.gif';



		}



		?>



				<style>



				.byconsolewooodt_page_loader {



					position: fixed;



					left: 0px;



					top: 0px;



					width: 100%;



					height: 100%;



					z-index: 9999;



					background: url('<?php echo $byconsolewooodt_upload_loading_image_url; ?>') 50% 50% no-repeat rgb(249,249,249);



					opacity: .8;



				}



				</style>



				<script type="text/javascript">



				jQuery(window).load(function() {



					jQuery(".byconsolewooodt_page_loader").fadeOut("slow");



				});



				jQuery(document).ready(function(){



					//jQuery("#byconsolewooodt_delivery_date_alternate").css("display","none");	



				});



				</script>



				<?php



	}



}



add_action('wp_head', 'byconsolewooodt_header_script', 9999);



function byconsolewooodt_footer_script()
{

	global $get_byc_wooodt_data;

	global $woocommerce;



	// calculating order placing threshold timing



	include(plugin_dir_path(__FILE__) . 'inc/pickup_location_disable_by_order_number_count.php');



	include(plugin_dir_path(__FILE__) . 'inc/delivery_location_disable_by_order_number_count.php');



	$currentlang = get_bloginfo("language");



	//$currentlang=get_locale();



	// get cookie as array



	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	?>



		<script>



		function ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute){



		//alert('cur_hour,cur_minute (1) : '+cur_hour+','+cur_minute);



		//var cur_minute=07;



		//alert('in function ByConsoleWooODTStartTimeByInterval cur_hour,cur_minute is as: '+cur_hour+','+cur_minute);



		if(parseInt(cur_minute) >= 0 && parseInt(cur_minute) < 15){



		var start_minute=15;



		}else if(parseInt(cur_minute) >= 15 && parseInt(cur_minute) < 30){



		var start_minute=30;



		}else if(parseInt(cur_minute) >= 30 && parseInt(cur_minute) < 45){



		var start_minute=45;



		}else if(parseInt(cur_minute) >= 45 && parseInt(cur_minute) <= 59){



		var start_minute=59;



		}else{



		alert('There is an issue please report to shop admin');



		}



		if(start_minute==59){



		var next_hour=parseInt(cur_hour)+1;



		if(next_hour<10){



		next_hour='0'+next_hour;



		}



		var start_time_updated=next_hour+":"+"00";



		}else{



		if(cur_hour<10){



		cur_hour='0'+cur_hour;



		}



		var start_time_updated=cur_hour+":"+start_minute;



		}



		//alert('start_time_updated: '+start_time_updated);



		return start_time_updated;



		} // end of ByConsoleWooODTtimeInterval



		function ByconsolewooodtDeliveryWidgetTimePopulate(date_field_identifier,time_field_identifier,location_eligibility){



		//alert('Inside function ByconsolewooodtDeliveryWidgetTimePopulate');



		//alert(location_eligibility);



		var service_status='open';



		//remove time picker to bound new timepicker according to allowable time for selected location



		jQuery(time_field_identifier).timepicker("remove"); 



		jQuery(time_field_identifier).val(''); 



		/*



		* Day wise charges start



		*/



		<?php



		$byconsolewooodt_day_wise_charges_val = $get_byc_wooodt_data['byconsolewooodt_day_wise_charges'];



		if (!empty($byconsolewooodt_day_wise_charges_val)) {



			?>



				var selected_calendar_date_val = jQuery(date_field_identifier).datepicker('getDate');



				// if date blank then alert the same



				var selected_datepicker_date_val=jQuery(date_field_identifier).datepicker('option', 'dateFormat', 'mm-dd-yy' ).val();



				//var byc_select_date = new Date(selected_datepicker_date_val);



				var byc_select_date = new Date(selected_calendar_date_val);



				var datePosition = byc_select_date.getDay();



				var bycDayAmount = [



			  		<?php foreach ($byconsolewooodt_day_wise_charges_val as $bycwooodt_single_key => $bycwooodt_single_val) {



						  $amount = $bycwooodt_single_val['amount']; ?>	



									{ 'dayNumber': <?php echo $bycwooodt_single_key; ?>, 'dayCharges': '<?php echo $amount; ?>'},		



			   		<?php } ?>



					  ];



	



				var bycwoodtFullObj = bycDayAmount.find(bycwoodtFullObj => bycwoodtFullObj.dayNumber == datePosition);



				var dayChargeVal = bycwoodtFullObj.dayCharges;



				jQuery("#byconsolewooodt_selected_day_charges").val(dayChargeVal);

		<?php } ?>

		/**



		*Special dates charges



		**/



		var datepickerDateValue=jQuery(date_field_identifier).datepicker('option', 'dateFormat', 'dd/mm/yy' ).val();



		//console.log('datepickerDateValue -' + datepickerDateValue);



		var bycSpecialDates = [



		  	<?php



			  $byconsolewooodt_special_dates_charges = $get_byc_wooodt_data['byconsolewooodt_special_dates_charges'];



			  foreach ($byconsolewooodt_special_dates_charges as $bycwooodt_dates_key => $bycwooodt_dates_charges) { ?>	



							{ 'dates': '<?php echo $bycwooodt_dates_key; ?>', 'charges': '<?php echo $bycwooodt_dates_charges; ?>'},		



		   	<?php } ?>



			  ];



	



		//console.log(bycSpecialDates);



		// An array of objects



		// Find if the array contains an object by comparing the property value



		if(bycSpecialDates.some(bycSpecialDate => bycSpecialDate.dates === datepickerDateValue)){



			var bycwoodtDateFullObj = bycSpecialDates.find(bycwoodtDateFullObj => bycwoodtDateFullObj.dates == datepickerDateValue);



		var specialDateChargesVal = bycwoodtDateFullObj.charges;



		} else{



			   var specialDateChargesVal = '';



		}



	



		jQuery('#byconsolewooodt_special_dates_charges').val(specialDateChargesVal);



		//alert(specialDateChargesVal);



		jQuery('body').trigger('update_checkout');



		/*



		* Day wise charges end



		*/



		//var selected_date_day=jQuery.datepicker.formatDate('D', selected_calendar_date_val);



		//alert(selected_datepicker_date_val);



		// allow location based time if location feature is checked in setting page



		<?php

		global $get_byc_wooodt_data;

		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



			$location_field_to_pass = 'byconsolewooodt_widget_delivery_location';



		}

		global $get_byc_wooodt_data;

		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



			$location_field_to_pass = 'byconsolewooodt_widget_pickup_location';



		}



		if ($is_location_enabled == 'YES') { ?>



				//if no location is selected then exit from this loop



				if(location_eligibility.options[location_eligibility.selectedIndex].value!=''){



				//alert('location_eligibility->'+ location_eligibility.options[location_eligibility.selectedIndex].value)



				//selected_location_eligibility_to_pass_for_datepicker=location_eligibility; // access this variable when clicking on datepicker



				//alert(location_eligibility.options[location_eligibility.selectedIndex].text);



				//var location_condition_string=location_eligibility.options[location_eligibility.selectedIndex].text;



				//var location_condition_array=location_condition_string.split('--');



				//alert(location_condition_array[1]);



				//var location_timing = location_condition_array[1].split("-");



				//var delivery_opening_time = location_timing[0].replace(/[A-Za-z$-]/g, "");



				var location_index=location_eligibility.options[location_eligibility.selectedIndex].value;



				//alert('location_index: '+location_index);



				order_type=jQuery('input[name=byconsolewooodt_widget_type_field]:checked').val();



				//alert('order_type: '+order_type);



				if(order_type=='take_away'){



				//pickup_opening_time = location_timing[0].replace(/[A-Za-z$-(]/g, "");



				//pickup_ending_time = location_timing[1].replace(/[A-Za-z$-)]/g, "");	



				pickup_opening_time = pickup_location_service_usual_start[location_index];



				pickup_ending_time = pickup_location_service_usual_end[location_index];



				pickup_break_time_start = "";



				pickup_break_time_end = "";



				//alert('Pickup Start - Ending || '+pickup_opening_time+'-'+pickup_ending_time);



				/**** get timeing based on selected location and date ****/



				var selected_calendar_date = jQuery(date_field_identifier).datepicker('getDate');



				// if date blank then alert the same



				var selected_date_day=jQuery.datepicker.formatDate('D', selected_calendar_date);



				//alert('selected_date = '+selected_date);



				<?php include(plugin_dir_path(__FILE__) . 'language_based_calendar/language_and_day_based_pickup_time_population.php'); ?>



				}



				if(order_type=='levering'){



				//delivery_opening_time = location_timing[0].replace(/[A-Za-z$-(]/g, "");



				//delivery_ending_time = location_timing[1].replace(/[A-Za-z$-)]/g, "");	



				delivery_opening_time = delivery_location_service_usual_start[location_index];



				delivery_ending_time = delivery_location_service_usual_end[location_index];



				delivery_break_time_start = "";



				delivery_break_time_end = "";



				//alert('Delivery Start - Ending || '+delivery_opening_time+'-'+delivery_ending_time);



				/**** get timeing based on selected location and date ****/



				var selected_calendar_date = jQuery(date_field_identifier).datepicker('getDate');



				// if date blank then alert the same



				var selected_date_day=jQuery.datepicker.formatDate('D', selected_calendar_date);



				//alert('selected_date = '+selected_date_day);



				console.log('selected_date = '+selected_date_day);



				<?php if (!empty($byconsolewooodt_multiple_delivery_location_checkbox)) { ?>



						console.log('<?php echo $byconsolewooodt_multiple_delivery_location_checkbox; ?>');



				<?php }



				include(plugin_dir_path(__FILE__) . 'language_based_calendar/language_and_day_based_delivery_time_population.php'); ?>



				}



				}else{ //if no location is selected then return 'no location selected' and ask to select location first	



				//alert('Please select location first...');



				<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>



						jQuery("#byconsolewooodt_delivery_time").empty();



				<?php } ?>



				var service_status='No_location_selected';



				}



		<?php } else { ?>



				var delivery_opening_time="<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_from']; ?>";



				var delivery_ending_time="<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_to']; ?>";



				var	delivery_break_time_start = "<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_break_from']; ?>";	



				var	delivery_break_time_end = "<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_break_to']; ?>";



				var pickup_opening_time="<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_opening_hours_from']; ?>";



				var pickup_ending_time="<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_opening_hours_to']; ?>";



				var	pickup_break_time_start = "<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_opening_break_hours_from']; ?>";



				var	pickup_break_time_end = "<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_opening_break_hours_to']; ?>";



		<?php } ?>



		//alert('Pickup Start - Ending || '+pickup_opening_time+'-'+pickup_ending_time);



		//if timing is not provided for the loaction then use default timeing.



		if(delivery_opening_time!=null || delivery_opening_time!=''){



		var delivery_opening_time=delivery_opening_time;



		}else{



		var delivery_opening_time="<?php global $get_byc_wooodt_data;
		echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_from']; ?>";



		}



		if(delivery_ending_time!=null || delivery_ending_time!=''){



		var delivery_ending_time=delivery_ending_time;



		}else{



		var delivery_ending_time="<?php global $get_byc_wooodt_data;
		echo $get_byc_wooodt_data['byconsolewooodt_delivery_hours_to']; ?>";



		}



		if(pickup_opening_time!=null || pickup_opening_time!=''){



		var pickup_opening_time=pickup_opening_time;



		}else{



		var pickup_opening_time="<?php global $get_byc_wooodt_data;
		echo $get_byc_wooodt_data['byconsolewooodt_opening_hours_from']; ?>";



		}



		if(pickup_ending_time!=null || pickup_ending_time!=''){



		var pickup_ending_time=pickup_ending_time;



		}else{



		var pickup_ending_time="<?php global $get_byc_wooodt_data;
		echo $get_byc_wooodt_data['byconsolewooodt_opening_hours_to']; ?>";



		}



		// lock the time selection based on admin settings for delivery time



		//echo 'var curtime_to_compare=new Date().toLocaleTimeString();';



		// deactived from 16/12/2020



		//var curtime= new Date().toLocaleTimeString("en-US", { hour12: false, hour: "numeric", minute: "numeric"});



		<?php

		global $get_byc_wooodt_data;

		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$minimum_wait_time = $get_byc_wooodt_data['byconsolewooodt_pickup_wait_times'];



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$minimum_wait_time = $get_byc_wooodt_data['byconsolewooodt_delivery_times'];



		}



		if ($minimum_wait_time != '') {



			$minimum_wait_time = $minimum_wait_time;



		} else {



			$minimum_wait_time = 0;



		}



		?>



		var minutesWaitToAdd=<?php echo $minimum_wait_time; ?>;



		var currentDate = new Date();



		var futureTime = new Date(currentDate.getTime() + minutesWaitToAdd*60000);



		//alert(futureDate.getHours());



		//alert(futureDate.getMinutes());



		//alert(futureDate);



		var curtime = futureTime.getHours()+':'+futureTime.getMinutes();



		//alert(curtime);



		var current_date= new Date();



		//echo 'alert(curtime_to_compare+"|"+curtime);



		// get local minute



		var cur_minute= new Date().toLocaleTimeString("en-US", { hour12: false, minute: "numeric"});



		console.log(cur_minute);



		var cur_minute= curtime.split(' ');



		console.log('Printing cur_time_array');



		console.log(cur_minute);



		cur_minute=cur_minute[0].split(':');



		console.log('printing cur minute:');



		//cur_minute=cur_minute[1];



		cur_minute=current_date.getMinutes();



		console.log(cur_minute);



		//alert('cur_minute(33): '+cur_minute);



		// get local hour



		var cur_hour= new Date().toLocaleTimeString("en-US", { hour12: false, hour: "numeric"});			



		console.log(cur_hour);



		var cur_hour= curtime.split(' ');



		console.log('Printing cur_time_array');



		console.log(cur_hour);



		cur_hour=cur_hour[0].split(':');



		console.log('printing cur hour:');



		//cur_hour=cur_hour[0];



		cur_hour=current_date.getHours();



		console.log(cur_hour);



		//alert('calling function ByConsoleWooODTStartTimeByInterval at position 1');



		//ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute); // check this function in wp-footer



		//populate time field based on date selection (call this function onSelect event of datepicker)



		/*var selected_date=jQuery(".byconsolewooodt_widget_date_field").datepicker( "getDate" );*/



		//selected_date=jQuery(date_field_identifier).datepicker().val();



		//selected_date=jQuery(date_field_identifier).datepicker('getDate');



		//alert('date_field_identifier:'+date_field_identifier);



		//selected_date=jQuery(date_field_identifier).datepicker({ dateFormat: 'dd-mm-yy' }).val();



		// this is to fix IE issue as IE does not support dd/mm/yyyy format for date.parse



		<?php



		global $get_byc_wooodt_data;



		if ($get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'] == 'Y-m-d') {



			$cal_date_formate = 'yy-mm-dd';



		}

		global $get_byc_wooodt_data;

		if ($get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'] == 'd-m-Y') {



			$cal_date_formate = 'dd-mm-yy';



		}



		global $get_byc_wooodt_data;



		if ($get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'] == 'm-d-Y') {



			$cal_date_formate = 'mm-dd-yy';



		}



		global $get_byc_wooodt_data;



		if ($get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'] == 'dS-F-Y') {



			$cal_date_formate = 'd M yy';



		}



		?>



		selected_date=jQuery(date_field_identifier).datepicker('option', 'dateFormat', '<?php echo $cal_date_formate; ?>' ).val();



		//selected_date=jQuery(date_field_identifier).datepicker('option', 'dateFormat', 'dd M yy' ).val();



		//alert ('selected_date(1) : '+selected_date + '-' + '<?php //echo $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];?>');



		var selected_date_formated=selected_date.replace(/-/g, ' ');



		var byc_delivery_date_alternate = jQuery("#byconsolewooodt_delivery_date_alternate").val().split("/");



		if(byc_delivery_date_alternate[0]==1){



		byc_delivery_date_alternate_month='Jan';



		}else if(byc_delivery_date_alternate[0]==2){



		byc_delivery_date_alternate_month='Feb';



		}else if(byc_delivery_date_alternate[0]==3){



		byc_delivery_date_alternate_month='Mar';



		}else if(byc_delivery_date_alternate[0]==4){



		byc_delivery_date_alternate_month='Apr';



		}else if(byc_delivery_date_alternate[0]==5){



		byc_delivery_date_alternate_month='May';



		}else if(byc_delivery_date_alternate[0]==6){



		byc_delivery_date_alternate_month='Jun';



		}else if(byc_delivery_date_alternate[0]==7){



		byc_delivery_date_alternate_month='Jul';



		}else if(byc_delivery_date_alternate[0]==8){



		byc_delivery_date_alternate_month='Aug';



		}else if(byc_delivery_date_alternate[0]==9){



		byc_delivery_date_alternate_month='Sep';



		}else if(byc_delivery_date_alternate[0]==10){



		byc_delivery_date_alternate_month='Oct';



		}else if(byc_delivery_date_alternate[0]==11){



		byc_delivery_date_alternate_month='Nov';



		}else if(byc_delivery_date_alternate[0]==12){



		byc_delivery_date_alternate_month='Dec';



		}else{



		byc_delivery_date_alternate_month='';



		}



		selected_date = byc_delivery_date_alternate[1] + " " + byc_delivery_date_alternate_month + " " + byc_delivery_date_alternate[2];



		//******************  08-11-2017 start *********************//



		<?php



		include_once(ABSPATH . 'wp-admin/includes/plugin.php');



		// check for plugin using plugin name
	


		if (is_plugin_active('ByConsoleWooODTExtendedOrderLimitAddon/ByConsoleWooODTOrderLimitAddon.php')) {



			$plugin_url = WP_PLUGIN_DIR . '/ByConsoleWooODTExtendedOrderLimitAddon/inc/ajax_for_js.php';



			include($plugin_url);



		}



		?>



		//******************  08-11-2017 end *********************//



		//alert('selected_date 1: '+selected_date);



		//alert ('selected_date_formated : '+selected_date_formated);



		//alert('------------ we had problem here -- selectde_date='+selected_date+'---- coz of date_field_identifier='+date_field_identifier);



		//selected_date=formatDate('d/m/y',selected_date);



		//alert(selected_date);



		/*if(selected_date=='' || selected_date==null){



		alert('Please select your location first');



		}*/



		<?php



		include_once(ABSPATH . 'wp-admin/includes/plugin.php');



		// check for plugin using plugin name
	


		if (is_plugin_active('ByConsoleWooODTExtendedOrderLimitAddon/ByConsoleWooODTOrderLimitAddon.php')) {



			$plugin_url = WP_PLUGIN_DIR . '/ByConsoleWooODTExtendedOrderLimitAddon/inc/ajax_for_js.php';



			include($plugin_url);



		}



		?>



		todays_date=new Date();



		//alert('local date: '+todays_date);



		todays_date_month=(todays_date.getMonth()+1);



		//alert('local current month: '+todays_date_month);



		todays_date_date=todays_date.getDate();



		todays_date_year=todays_date.getFullYear();



		/*



		if( todays_date_month < 10){



		todays_date_month='0' + todays_date_month;



		}



		*/



		if(todays_date_date < 10){



		todays_date_date='0' + todays_date_date;



		}



		if(todays_date_month==1){



		todays_date_month='Jan';



		}else if(todays_date_month==2){



		todays_date_month='Feb';



		}else if(todays_date_month==3){



		todays_date_month='Mar';



		}else if(todays_date_month==4){



		todays_date_month='Apr';



		}else if(todays_date_month==5){



		todays_date_month='May';



		}else if(todays_date_month==6){



		todays_date_month='Jun';



		}else if(todays_date_month==7){



		todays_date_month='Jul';



		}else if(todays_date_month==8){



		todays_date_month='Aug';



		}else if(todays_date_month==9){



		todays_date_month='Sep';



		}else if(todays_date_month==10){



		todays_date_month='Oct';



		}else if(todays_date_month==11){



		todays_date_month='Nov';



		}else if(todays_date_month==12){



		todays_date_month='Dec';



		}else{



		todays_date_month='';



		}



		//this is for IE issue as IE does not accept dd/mm/yy for date.parse



		//todays_formated_date= todays_date_month + "/" + todays_date_date + "/" + todays_date_year;



		todays_formated_date= todays_date_date + " " + todays_date_month + " " + todays_date_year;



		//alert('selected_date:'+selected_date+' || todays_formated_date:'+todays_formated_date);	



		//alert(selected_date +'||'+ todays_formated_date);



		//alert('selected_date(parsed): '+Date.parse(selected_date) +'|| todays_formated_date(parsed): '+ Date.parse(todays_formated_date));



		//alert('selected_date(parsed): '+Date.parse(selected_date) +'|| todays_formated_date(parsed): '+ Date.parse('25 Dec 1995'));



		if( Date.parse(selected_date) > Date.parse(todays_formated_date) ){



		//alert(selected_date +'>'+ todays_formated_date);



		<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



				start_time_updated_as_per_selected_date = pickup_opening_time;



		<?php }



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') { ?>



				start_time_updated_as_per_selected_date = delivery_opening_time;



				//alert('delivery opening time:'+start_time_updated_as_per_selected_date+'is it okay?');



		<?php } ?>



		//alert('Different date, so starting time is store openning time '+delivery_opening_time + pickup_opening_time);



		/*if(selected_date < todays_formated_date){



		alert('Past date selected');



		}



		*/



		}else if( Date.parse(selected_date) < Date.parse(todays_formated_date) ){ // this may happen when date value in cookie is older than today's date



		//alert(selected_date +'<'+ todays_formated_date);



		<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



				start_time_updated_as_per_selected_date = pickup_opening_time;



		<?php }



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') { ?>



				start_time_updated_as_per_selected_date = delivery_opening_time;



		<?php } ?>



		//alert('Different date, so starting time is store openning time '+delivery_opening_time + pickup_opening_time);



		/*if(selected_date < todays_formated_date){



		alert('Past date selected');



		}



		*/



		var service_status='passed away';



		//alert(service_status);



		}else if( Date.parse(selected_date) == Date.parse(todays_formated_date) ){



		//alert ('date is equal');



		//alert('all removed from here');



		/******************************************************************************************************************************************/



		/******************************************************************************************************************************************/



		//alert(selected_date +'=='+ todays_formated_date);



		//if current time is grater than openning time then show current time



		<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>

				if(Date.parse('20 Aug 2017 '+curtime) <= Date.parse('20 Aug 2017 '+pickup_opening_time)){



				//alert('less than or equat to');



				start_time_updated_as_per_selected_date = pickup_opening_time;



				}

				if(Date.parse('20 Aug 2017 '+curtime) > Date.parse('20 Aug 2017 '+pickup_opening_time)){

				//console.log('curtime - ' + curtime +' - delivery_opening_time -  '+ pickup_opening_time);

				//alert('grater than');



				//alert(start_time_updated_as_per_selected_date);



				//alert('cur_minute:'+cur_minute);



				<?php



				global $get_byc_wooodt_data;



				$minimum_wait_time = $get_byc_wooodt_data['byconsolewooodt_pickup_wait_times'];



				if ($minimum_wait_time != '') {



					$minimum_wait_time = $minimum_wait_time;



				} else {



					$minimum_wait_time = 0;



				}



				?>



				//alert('cur_minute: '+cur_minute);



				//alert('parseInt('+cur_minute+'):'+ parseInt(cur_minute) +' || parseInt(<?php //echo $minimum_wait_time;?>):'+ parseInt(<?php //echo $minimum_wait_time;?>));



				cur_minute_plus_preparation_time=parseInt(cur_minute) + parseInt(<?php echo $minimum_wait_time; ?>);



				//alert('cur_minute+<?php //echo $get_byc_wooodt_data['byconsolewooodt_delivery_times'];?>:'+cur_minute_plus_preparation_time);



				cur_minute_plus_preparation_time_hour=parseInt(cur_minute_plus_preparation_time/60);



				cur_minute_plus_preparation_time_minute=cur_minute_plus_preparation_time%60;



				//alert(cur_minute_plus_preparation_time_hour+'|'+cur_minute_plus_preparation_time_minute);



				delayed_cur_hour=parseInt(cur_hour)+parseInt(cur_minute_plus_preparation_time_hour);



				delayed_cur_minute=parseInt(cur_minute_plus_preparation_time_minute); //remove the current minte coz its gonna to be start from 0 as hour increased



				//alert('updated time:'+ delayed_cur_hour+':'+delayed_cur_minute);



				//start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute); // check this function in wp_footer



				//alert('calling function ByConsoleWooODTStartTimeByInterval at position 2');



				start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(delayed_cur_hour,delayed_cur_minute); // check this function in wp_footer



				//alert('start_time_updated_as_per_selected_date:'+start_time_updated_as_per_selected_date);



				//start_time_updated_as_per_selected_date=start_time_updated_as_per_selected_date + 10*60000;



				//alert(start_time_updated_as_per_selected_date);



				//alert('start_time_updated_as_per_selected_date>=pickup_ending_time :' +start_time_updated_as_per_selected_date+'>='+pickup_ending_time);



				if(Date.parse('28 Aug 2017 '+start_time_updated_as_per_selected_date)>=Date.parse('28 Aug 2017 '+pickup_ending_time)){ // if the updated time is grater that closing time then say it to customer



				//alert('grater than');



				var service_status='close';



				}



				}



				if(Date.parse('28 Aug 2017 '+curtime) >= Date.parse('28 Aug 2017 '+pickup_ending_time)){



				var service_status='close';



				//alert('service_status: '+service_status);



				}



		<?php }



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') { ?>



				if(Date.parse('06 Sep 2017 '+curtime) <= Date.parse('06 Sep 2017 '+delivery_opening_time)){



				start_time_updated_as_per_selected_date = delivery_opening_time;

				}



				if(Date.parse('20 Aug 2017 '+curtime) > Date.parse('20 Aug 2017 '+delivery_opening_time)){

				//console.log('curtime - ' + curtime +' - delivery_opening_time -  '+ delivery_opening_time);

				//alert('grater than');



				//alert(start_time_updated_as_per_selected_date);



				//alert('cur_minute:'+cur_minute);



				<?php



				global $get_byc_wooodt_data;



				$minimum_wait_time = $get_byc_wooodt_data['byconsolewooodt_delivery_times'];



				if ($minimum_wait_time != '') {

					$minimum_wait_time = $minimum_wait_time;

				} else {

					$minimum_wait_time = 0;

				}



				?>



				//alert('cur_minute: '+cur_minute);



				//alert('parseInt('+cur_minute+'):'+ parseInt(cur_minute) +' || parseInt(<?php //echo $minimum_wait_time;?>):'+ parseInt(<?php //echo $minimum_wait_time;?>));



				cur_minute_plus_preparation_time=parseInt(cur_minute) + parseInt(<?php echo $minimum_wait_time; ?>);



				//alert('cur_minute+<?php //echo $get_byc_wooodt_data['byconsolewooodt_delivery_times'];?>:'+cur_minute_plus_preparation_time);



				cur_minute_plus_preparation_time_hour=parseInt(cur_minute_plus_preparation_time/60);



				cur_minute_plus_preparation_time_minute=cur_minute_plus_preparation_time%60;



				//alert(cur_minute_plus_preparation_time_hour+'|'+cur_minute_plus_preparation_time_minute);



				delayed_cur_hour=parseInt(cur_hour)+parseInt(cur_minute_plus_preparation_time_hour);



				delayed_cur_minute=parseInt(cur_minute_plus_preparation_time_minute); //remove the current minte coz its gonna to be start from 0 as hour increased



				//alert('updated time:'+ delayed_cur_hour+':'+delayed_cur_minute);



				//start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute); // check this function in wp_footer



				//alert('calling function ByConsoleWooODTStartTimeByInterval at position 2');



				start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(delayed_cur_hour,delayed_cur_minute); // check this function in wp_footer



				//alert('start_time_updated_as_per_selected_date:'+start_time_updated_as_per_selected_date);



				//start_time_updated_as_per_selected_date=start_time_updated_as_per_selected_date + 10*60000;



				//alert(start_time_updated_as_per_selected_date);



				//alert('start_time_updated_as_per_selected_date>=pickup_ending_time :' +start_time_updated_as_per_selected_date+'>='+pickup_ending_time);



				if(Date.parse('28 Aug 2017 '+start_time_updated_as_per_selected_date)>=Date.parse('28 Aug 2017 '+pickup_ending_time)){ // if the updated time is grater that closing time then say it to customer



				//alert('grater than');



				var service_status='close';



				}



				}

				// do not accept orders for today if the current time is closing time already



				//alert('service_status at position d3: '+service_status);



				if(Date.parse('06 Sep 2017 '+curtime) >= Date.parse('06 Sep 2017 '+delivery_ending_time)){



				var service_status='close';



				//alert('service_status at position d4: '+service_status);



				}



		<?php } ?>



		//alert('equal date, so starting time is current time '+start_time_updated_as_per_selected_date)



		/********************************************************************************************************************************************/



		/********************************************************************************************************************************************/



		<?php //include(plugin_dir_path( __FILE__ ).'inc/time_calculation_for_todays_date');?>



		}else{



		if( selected_date == '' || selected_date == null ){



		//alert('selected_date:BLANK');



		}else{



		//alert('selected_date: '+selected_date);	



		//alert('curtime:'+curtime +' | delivery_ending_time:'+ delivery_ending_time);



		//alert('You have bug in this version of plugin, please update the plugin');



		console.log('no date selected till now');



		}



		}



		<?php



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			include(plugin_dir_path(__FILE__) . 'language_based_calendar/display_time_format_for_delivery.php');



		}



		// lock the time selection based on admin settings for pickup time
	


		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			include(plugin_dir_path(__FILE__) . 'language_based_calendar/display_time_format_for_pickup.php');



		}



		// if no delivery type is not selected then show all times
	


		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == '') {



			?>



				jQuery(time_field_identifier).timepicker({



				"disableTextInput": "true",



				"disableTouchKeyboard": "true",



				"scrollDefault": "now",



				"step": "15",



				"selectOnBlur": "true",



				"timeFormat": "<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_hours_format']; ?>"



				});



				<?php



		}

		global $get_byc_wooodt_data;

		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];



		if ($byconsolewooodt_allow_orders_on_closing_days == '') {



			$store_close_notice = $get_byc_wooodt_data['byconsolewooodt_store_close_notice'];



		}



		if ($store_close_notice == '') {



			$store_close_notice = 'We are closed for today! Select another day please';



		}



		?>



		//alert('end line');



		//alert('minTime :'+start_time_updated_as_per_selected_date+'||maxTime: '+pickup_ending_time);



		//alert(time_field_identifier);



		//alert('service_status='+service_status);



		// remove timepicker and say"we are closed" when delivery/pickup time is over for today



		//alert('service_status : '+service_status);



		if(service_status=='close'){



		jQuery(time_field_identifier).timepicker("remove"); 



		jQuery(time_field_identifier).val(''); 



		jQuery(time_field_identifier).css({'display':'none'});	



		jQuery(time_field_identifier+'_service_closed_notice').html('<?php printf(__($store_close_notice, 'ByConsoleWooODTExtended')); ?>');



		}



		if(service_status=='passed away'){



		jQuery(time_field_identifier).timepicker("remove"); 



		jQuery(time_field_identifier).val(''); 



		jQuery(time_field_identifier).css({'display':'none'});	



		jQuery(time_field_identifier+'_service_closed_notice').html('<?php printf(__('Please select a date equal to or greater than current date', 'ByConsoleWooODTExtended')); ?>');



		}



		if(service_status=='No_location_selected'){



		jQuery(time_field_identifier).timepicker("remove"); 



		jQuery(time_field_identifier).val(''); 



		jQuery(time_field_identifier).css({'display':'none'});	



		jQuery(time_field_identifier+'_service_closed_notice').html('<?php printf(__('Please select a location first', 'ByConsoleWooODTExtended')); ?>');



		}	



		if(service_status=='open'){



		jQuery(time_field_identifier).css({'display':'block'});		



		jQuery(time_field_identifier+'_service_closed_notice').html('');	



		}



		} // End of function ByconsolewooodtDeliveryWidgetTimePopulate



		</script>



		<?php



		// prepare shop close day by days
	


		// get todays date 
	
		global $get_byc_wooodt_data;

		$gattodayname = date("l");



		$gattodaynumericval = date("w");



		$sunday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_sunday'];



		$monday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_monday'];



		$tuesday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_tuesday'];



		$wednessday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_wednessday'];



		$thursday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_thursday'];



		$friday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_friday'];



		$saturday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_saturday'];



		$sunday = ($sunday == '') ? 99 : 0;



		$monday = !empty($monday) ? $monday : 99;



		$tuesday = !empty($tuesday) ? $tuesday : 99;



		$wednessday = !empty($wednessday) ? $wednessday : 99;



		$thursday = !empty($thursday) ? $thursday : 99;



		$friday = !empty($friday) ? $friday : 99;



		$saturday = !empty($saturday) ? $saturday : 99;



		//date and time fields population by plugin settings page
	


		$current_active_year = date("Y");



		$current_active_next_year = date('Y', strtotime('+1 year'));



		// casual holidays
	


		$deactive_casual_holiday_from_calender = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];



		$deactive_casual_holiday_from_calender_array = explode(',', $deactive_casual_holiday_from_calender);



		//national holidays
	


		$deactive_casual_holiday_from_calender_for_national = $get_byc_wooodt_data['byconsolewooodt_admin_national_holiday_date'];

		$deactive_casual_holiday_from_calender_for_national_array = explode(',', $deactive_casual_holiday_from_calender_for_national);



		$national_holiday_string = '';



		foreach ($deactive_casual_holiday_from_calender_for_national_array as $deactive_casual_holiday_from_calender_for_national_array_single) {



			//national holidays add year after date and month
	


			$national_holiday_single_val = '' . trim($deactive_casual_holiday_from_calender_for_national_array_single . '/' . $current_active_year) . ',';



			$national_holiday_single_val_next_year = '' . trim($deactive_casual_holiday_from_calender_for_national_array_single . '/' . $current_active_next_year) . ',';



			$national_holiday_string = $national_holiday_string . $national_holiday_single_val . $national_holiday_single_val_next_year;



		}



		$national_holiday_string = substr($national_holiday_string, 0, -1);



		//national holidays explode
	


		$national_holiday_string_explode_single_arry_val = explode(",", $national_holiday_string);



		//casual and national holidays marge
	


		$national_and_casual_holiday_marge = array_merge($national_holiday_string_explode_single_arry_val, $deactive_casual_holiday_from_calender_array);



		/*****************fffffffffffffffffffffffffffffffffffffffffffffffff*************************************/



		include(plugin_dir_path(__FILE__) . 'language_based_calendar/allowable_pickup_days.php');



		/**********************fffffffffffffffffffffffffffffffffffffffffffffffff****************************/



		/**********************fffffffffffffffffffffffffffffffffffffffffffffffff****************************/



		include(plugin_dir_path(__FILE__) . 'language_based_calendar/allowable_delivery_days.php');



		/**********************fffffffffffffffffffffffffffffffffffffffffffffffff****************************/



		?>



		<script>



		// Selectd  Holiday Diasable Start



		function checkHolidaysDates( date , location_field_identifier ){



		/*alert(date);



		alert(location_field_identifier);*/



		var $return=true;



		var $returnclass ="available";



		//alert(date);



		//echo 'var $shopCloseDates = new Array('.$holiday_string.');';



			var $shopCloseDates = new Array(



				//creating array for javascript holidays



				<?php



				//echo 'AYAN PAUl...';
			
				//print_r($national_and_casual_holiday_marge);
			
				$stat_i = 1;



				$date_i = count($national_and_casual_holiday_marge);



				foreach ($national_and_casual_holiday_marge as $deactive_holiday_from_calender_array_single) {



					echo '"' . trim($deactive_holiday_from_calender_array_single) . '"';

					//handle the last comma(,)
			


					if ($stat_i < $date_i) {



						echo ',';



					}



					$stat_i++;



				}



				?>

			);

		//console.log('$shopCloseDates - ' + $shopCloseDates);

		$checkdate = jQuery.datepicker.formatDate("mm/dd/yy", date);



		$checkday	= jQuery.datepicker.formatDate("D", date);



		//alert($checkday);



		for(var i = 0; i < $shopCloseDates.length; i++)



		{   



		if($shopCloseDates[i] == $checkdate)



		{



		$return = false;



		$returnclass= "unavailable shopholiday";



		}



		// next step is to check shop closed days by day



		var day = date.getDay();

		if(day == <?php echo $sunday; ?> || day == <?php echo $monday; ?> || day == <?php echo $tuesday; ?> || day == <?php echo $wednessday; ?> || day == <?php echo $thursday; ?> || day == <?php echo $friday; ?> || day == <?php echo $saturday; ?>)



		{



		$return = false;



		$returnclass= "unavailable shopclosingday";



		} 



		}



		<?php



		// do selection disable on closing days as per allowable pickup days settings
	


		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away' && !empty($allowable_pickup_days_js_array)) {



			$byconsolewooodt_same_day_service_order_placing_cutout_time = $get_byc_wooodt_data['byconsolewooodt_same_day_pickup_order_placing_cutout_time'];



			$byconsolewooodt_next_day_service_order_placing_cutout_time = $get_byc_wooodt_data['byconsolewooodt_next_day_pickup_order_placing_cutout_time'];



			?>



				if(jQuery.inArray($checkday,<?php echo $allowable_pickup_days_js_array; ?>)==-1){



				$return = false;



				$returnclass= "unavailable abc";



				//alert($checkday+'||<?php //echo $allowable_pickup_days_js_array;?>');



				//alert('in condition 1');



				}



				/***************************to_include************************/



				<?php include(plugin_dir_path(__FILE__) . 'language_based_calendar/location_and_day_based_pickup_timing.php'); ?>



				/***************************to_include************************/



				<?php



		}



		// do selection disable on closing days as per allowable delivery days settings
	


		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering' && !empty($allowable_delivery_days_js_array)) {



			$byconsolewooodt_same_day_service_order_placing_cutout_time = $get_byc_wooodt_data['byconsolewooodt_same_day_delivery_order_placing_cutout_time'];



			$byconsolewooodt_next_day_service_order_placing_cutout_time = $get_byc_wooodt_data['byconsolewooodt_next_day_delivery_order_placing_cutout_time'];



			?>



				//alert($checkday + 'inArray' + '<?php echo $allowable_delivery_days_js_array; ?>');



				if(jQuery.inArray($checkday,<?php echo $allowable_delivery_days_js_array; ?>)==-1){



				$return = false;



				$returnclass= "unavailable def";



				//alert('in condition 2');



				}



				/***************************to_include************************/



				<?php include(plugin_dir_path(__FILE__) . 'language_based_calendar/location_and_day_based_delivery_timing.php'); ?>



				/***************************to_include************************/



			<?php



		}



		include_once(ABSPATH . 'wp-admin/includes/plugin.php');



		if (is_plugin_active('ByConsoleWooODTExtendedOrderLimitAddon/ByConsoleWooODTOrderLimitAddon.php')) {



			$addon_plugin_url = WP_PLUGIN_DIR . '/ByConsoleWooODTExtendedOrderLimitAddon/inc/get_ordered_product_count.php';



			include($addon_plugin_url);



		}



		//now check order placing cutout time for next day delivery
	


		$current_time = current_time('H:i');



		if ($byconsolewooodt_same_day_service_order_placing_cutout_time != '') {



			if ($current_time >= $byconsolewooodt_same_day_service_order_placing_cutout_time) {



				$current_date_to_check = date('m/d/Y');



				//$next_date_to_check = date('m/d/Y', strtotime(' +1 day'));
	


				?>



							//var loop_date=date;



							var loop_date_month=(date.getMonth()+1);



							//alert(loop_date_month);



							var loop_date_date=date.getDate();



							//alert(loop_date_date);



							var loop_date_year=date.getFullYear();



							//alert(loop_date_year);



							if( loop_date_month < 10){



							var loop_date_month='0' + loop_date_month;



							}



							if(loop_date_date < 10){



							var loop_date_date='0' + loop_date_date;



							}



							var loop_date_as_formated_date= loop_date_month + "/" + loop_date_date + "/" + loop_date_year;



							/*************/



							if( Date.parse(loop_date_as_formated_date) == Date.parse('<?php echo $current_date_to_check; ?>')){



								//alert(Date.parse(loop_date_as_formated_date) +'=='+ Date.parse('<?php //echo $current_date_to_check;?>'));



								console.log('BBBBBBBBBB');



							var samedaydeliverycutouttime="YES";



							$return = false;



							$returnclass= "unavailable samedaydeliverycutouttime";



							}else{



								var samedaydeliverycutouttime="NO";



								}



					<?php }



		}



		if ($byconsolewooodt_next_day_service_order_placing_cutout_time != '') {



			if ($current_time >= $byconsolewooodt_next_day_service_order_placing_cutout_time) {



				$current_date_to_check = date('m/d/Y');



				$next_date_to_check = date('m/d/Y', strtotime(' +1 day'));



				?>



						//var loop_date=date;



						var loop_date_month=(date.getMonth()+1);



						//alert(loop_date_month);



						var loop_date_date=date.getDate();



						//alert(loop_date_date);



						var loop_date_year=date.getFullYear();



						//alert(loop_date_year);



						if( loop_date_month < 10){



						var loop_date_month='0' + loop_date_month;



						}



						if(loop_date_date < 10){



						var loop_date_date='0' + loop_date_date;



						}



						var loop_date_as_formated_date= loop_date_month + "/" + loop_date_date + "/" + loop_date_year;



						/*************/



						if( Date.parse(loop_date_as_formated_date) == Date.parse('<?php echo $current_date_to_check; ?>') || Date.parse(loop_date_as_formated_date) == Date.parse('<?php echo $next_date_to_check; ?>') ){



						//alert("aaaaaaaaaaaaaaaaaaaaaaaaaaa");



						//console.log('AAAAA');



						var samedaydeliverycutouttime="YES";



						$return = false;



						$returnclass= "unavailable nextdaydeliverycutouttime";



						if(samedaydeliverycutouttime == 'YES')



						{



							$returnclass= "unavailable samedaydeliverycutouttime nextdaydeliverycutouttime";



						}



						}



				<?php }



		}



		$byconsolewooodt_special_date = $get_byc_wooodt_data['byconsolewooodt_admin_special_open_date'];



		?>



		var $shopOpenDates = new Array(



		//creating array for javascript holidays



		<?php



		$stat_i = 1;



		$open_date_explodes = explode(',', $byconsolewooodt_special_date);



		$date_i = count($open_date_explodes);



		foreach ($open_date_explodes as $open_calender_array_single) {



			echo '"' . trim($open_calender_array_single) . '"';



			//handle the last comma(,)
	


			if ($stat_i < $date_i) {



				echo ',';



			}



			$stat_i++;



		}



		?>



		);



		for(var i = 0; i < $shopOpenDates.length; i++){  

			if($shopOpenDates[i] == $checkdate){

				$return = true;

				$returnclass= "special_date_open";

			}

		}



		//function return value



		return [$return,$returnclass];



		}// Selectd  Holiday Diasable End



		jQuery(document).ready(function(){



		<?php



		global $get_byc_wooodt_data;



		if ($get_byc_wooodt_data['byconsolewooodt_preorder_days'] == '') { // if no pre-order date is not set in settings page
	


			include('inc/exclude/exclude_shipping_holidays.php');



			?>



				jQuery(".byconsolewooodt_widget_date_field").datepicker({

				nextText: '',



				prevText: '',

				minDate: <?php echo $mindate; ?>, 



				showAnim: "slideDown", 



				//dateFormat: "mm/dd/yy",



				dateFormat: "<?php echo $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting']; ?>",



				<?php



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



					$location_field_identifier = '#byconsolewooodt_widget_delivery_location';



				}



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



					$location_field_identifier = '#byconsolewooodt_widget_pickup_location';



				}



				?>



				beforeShowDay: function(date){ return checkHolidaysDates( date , "<?php echo $location_field_identifier; ?>" ); },



				altField: "#byconsolewooodt_delivery_date_alternate",



				altFormat: "mm/dd/yy",



				onSelect: function(){



				jQuery(".byconsolewooodt_widget_time_field").timepicker("remove"); 



				jQuery(".byconsolewooodt_widget_time_field").val(''); 



				<?php



				global $get_byc_wooodt_data;



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



					$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



					$location_field_to_pass = 'byconsolewooodt_widget_delivery_location';



				}

				global $get_byc_wooodt_data;

				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



					$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



					$location_field_to_pass = 'byconsolewooodt_widget_pickup_location';



				}



				if ($is_location_enabled == 'YES') { ?>



						selected_location_eligibility_to_pass_for_datepicker=document.getElementById('<?php echo $location_field_to_pass; ?>');



						//alert(selected_location_eligibility_to_pass_for_datepicker);



				<?php } else { ?>



						selected_location_eligibility_to_pass_for_datepicker='location_is_disabled';



				<?php } ?>



				ByconsolewooodtDeliveryWidgetTimePopulate(".byconsolewooodt_widget_date_field",".byconsolewooodt_widget_time_field",selected_location_eligibility_to_pass_for_datepicker);



				<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') {



					include('inc/ajaxScriptWidgetTimeListBySelectedDate.php');



				} ?>



				<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>



						var pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



						var alternate_pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



						<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



								var picklocation = jQuery("#byconsolewooodt_widget_pickup_location").val();



							<?php



						}
						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							?>



								var picklocation = jQuery("#byconsolewooodt_widget_delivery_location").val();



						<?php }

						global $get_byc_wooodt_data;

						$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



						if ($byconsolewooodt_hours_format == 'H:i') {



							$hourformate = '12';



						}



						if ($byconsolewooodt_hours_format == 'h:i A') {



							$hourformate = '24';



						}



						?>



						//alert('picklocation - 1 ' + picklocation);



						//alert('$hourformate- '+ '<?php //echo $hourformate;?>');



						var curtime= new Date().toLocaleTimeString("en-US", { hour<?php echo $hourformate; ?>: false, hour: "numeric", minute: "numeric"});



						var current_system_time= curtime.split(' ');



						var current_system_time_without_comma = curtime.replace(","," "); 



						//alert('picklocation - ' + picklocation);



						jQuery(".loading_image_contanier_for_widget").css("display","block");



						var selected_data = {



						'action': 'get_delivery_time_by_selected_date',



						'selected_date_value' : pickdate,



						'selected_location_value' : picklocation,



						'selected_alternate_pickdate_value' : alternate_pickdate,



						'current_system_time' : current_system_time_without_comma,



						'selected_order_type' : '<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']; ?>',



						};



						// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php



						var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



						jQuery.post( ajaxurl, selected_data, function( response)  {



						//alert( 'Got this from the server: ' + response );



						//console.log('response: ' + response);



						jQuery("#byconsolewooodt_widget_time_field").timepicker("remove");



						jQuery("#byconsolewooodt_widget_time_field").empty();	



						jQuery("#byconsolewooodt_widget_time_field").html('wait a moment please....');	



						jQuery("#byconsolewooodt_widget_time_field").append(response);



						var byconsolewooodt_widget_time_count = jQuery('#byconsolewooodt_widget_time_field option').length;



						if(byconsolewooodt_widget_time_count>1){



							jQuery("#byconsolewooodt_widget_time_field").css("display","block");



							jQuery("#byc_widget_time_field_service_closed_notice").css("display","none");



							jQuery(".loading_image_contanier_for_widget").css("display","none");



						}else{



							jQuery("#byconsolewooodt_widget_time_field").css("display","none");



							jQuery("#byc_widget_time_field_service_closed_notice").css("display","block");	



							jQuery(".loading_image_contanier_for_widget").css("display","none");



						}



						});



				<?php } ?>



				} 



				});



				<?php



		} else { //end of if no pre-order date is set in settings page do the date selection restriction
	


			include('inc/exclude/exclude_shipping_holidays.php');



			?>



				jQuery( ".byconsolewooodt_widget_date_field" ).datepicker({ 



				nextText: '',



				prevText: '',



				minDate: <?php echo $mindate; ?>, 



				maxDate: "<?php echo $get_byc_wooodt_data['byconsolewooodt_preorder_days']; ?>+D", 



				showOtherMonths: true,



				selectOtherMonths: true,



				showAnim: "slideDown",



				//dateFormat: "mm/dd/yy",



				dateFormat:"<?php global $get_byc_wooodt_data;
				echo $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting']; ?>",



				/*beforeShowDay: checkHolidaysDates( date ),*/



				<?php



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



					$location_field_identifier = '#byconsolewooodt_widget_delivery_location';



				}



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



					$location_field_identifier = '#byconsolewooodt_widget_pickup_location';



				}



				?>



				beforeShowDay: function(date){ return checkHolidaysDates( date , "<?php echo $location_field_identifier; ?>" ); },



				altField: "#byconsolewooodt_delivery_date_alternate",



				altFormat: "mm/dd/yy",



				onSelect: function(){



				jQuery(".byconsolewooodt_widget_time_field").timepicker("remove"); 



				jQuery(".byconsolewooodt_widget_time_field").val(''); 



				<?php

				global $get_byc_wooodt_data;

				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



					$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



					$location_field_to_pass = 'byconsolewooodt_widget_delivery_location';



				}

				global $get_byc_wooodt_data;

				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



					$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



					$location_field_to_pass = 'byconsolewooodt_widget_pickup_location';



				}



				if ($is_location_enabled == 'YES') { ?>



						selected_location_eligibility_to_pass_for_datepicker=document.getElementById('<?php echo $location_field_to_pass; ?>');



						//alert(selected_location_eligibility_to_pass_for_datepicker);



				<?php } else { ?>



						selected_location_eligibility_to_pass_for_datepicker='location_is_disabled';



				<?php } ?>



				ByconsolewooodtDeliveryWidgetTimePopulate(".byconsolewooodt_widget_date_field",".byconsolewooodt_widget_time_field",selected_location_eligibility_to_pass_for_datepicker);



				// this variable 'selected_location_eligibility_to_pass_for_datepicker' is created when location was selected, make sure location have to be clicked before date selection in case og location enabled 



				<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') {



					include('inc/ajaxScriptWidgetTimeListBySelectedDate.php');



				} ?>



				<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>



						var pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



						var alternate_pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



						<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



								var picklocation = jQuery("#byconsolewooodt_widget_pickup_location").val();



							<?php



						}
						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							?>



								var picklocation = jQuery("#byconsolewooodt_widget_delivery_location").val();



						<?php }

						global $get_byc_wooodt_data;

						$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



						if ($byconsolewooodt_hours_format == 'H:i') {



							$hourformate = '12';



						}



						if ($byconsolewooodt_hours_format == 'h:i A') {



							$hourformate = '24';



						}



						?>



						//alert('picklocation - 1 ' + picklocation);



						//alert('$hourformate- '+ '<?php //echo $hourformate;?>');



						var curtime= new Date().toLocaleTimeString("en-US", { hour<?php echo $hourformate; ?>: false, hour: "numeric", minute: "numeric"});



						var current_system_time= curtime.split(' ');



						var current_system_time_without_comma = curtime.replace(","," "); 



						//alert('picklocation - ' + picklocation);



						jQuery(".loading_image_contanier_for_widget").css("display","block");



						var selected_data = {



						'action': 'get_delivery_time_by_selected_date',



						'selected_date_value' : pickdate,



						'selected_location_value' : picklocation,



						'selected_alternate_pickdate_value' : alternate_pickdate,



						'current_system_time' : current_system_time_without_comma,



						'selected_order_type' : '<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']; ?>',



						};



						// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php



						var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



						jQuery.post( ajaxurl, selected_data, function( response)  {



						//alert( 'Got this from the server: ' + response );



						//console.log('response: ' + response);



						jQuery("#byconsolewooodt_widget_time_field").timepicker("remove");



						jQuery("#byconsolewooodt_widget_time_field").empty();	



						jQuery("#byconsolewooodt_widget_time_field").html('wait a moment please....');	



						jQuery("#byconsolewooodt_widget_time_field").append(response);



						var byconsolewooodt_widget_time_count = jQuery('#byconsolewooodt_widget_time_field option').length;



						if(byconsolewooodt_widget_time_count>1){



							jQuery("#byconsolewooodt_widget_time_field").css("display","block");



							jQuery("#byc_widget_time_field_service_closed_notice").css("display","none");



							jQuery(".loading_image_contanier_for_widget").css("display","none");



						}else{



							jQuery("#byconsolewooodt_widget_time_field").css("display","none");



							jQuery("#byc_widget_time_field_service_closed_notice").css("display","block");	



							jQuery(".loading_image_contanier_for_widget").css("display","none");



						}



						});



				<?php } ?>



				}



				});



				<?php



		}



		//synchornize both the delivery type radio button in widget and in checkout field in simple way
	


		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			?>



				jQuery("#byconsolewooodt_delivery_type_levering").prop("checked", true);



				<?php



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			?>



				jQuery("#byconsolewooodt_delivery_type_take_away").prop("checked", true);



				<?php



		}



		?>



		jQuery("input#byconsolewooodt_delivery_date").val("<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field']; ?>");



		jQuery("input#byconsolewooodt_delivery_time").val("<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field']; ?>");



		})



		</script>



		<?php



		if (is_checkout()) { // execute on woocommerce check out page only
	


			?>



				<script>



				jQuery(document).ready(function(){



				// call time drop-diwn generator on change of location



				jQuery('#byconsolewooodt_pickup_location').change(function(){



				//ByconsolewooodtDeliveryWidgetTimePopulate('#byconsolewooodt_delivery_date','#byconsolewooodt_delivery_time',this);



				});



				jQuery('#byconsolewooodt_delivery_location').change(function(){



				//ByconsolewooodtDeliveryWidgetTimePopulate('#byconsolewooodt_delivery_date','#byconsolewooodt_delivery_time',this);



				});



				jQuery('#byconsolewooodt_delivery_time').after( '<p id="byconsolewooodt_delivery_time_service_closed_notice"></p>' );



				jQuery("#byconsolewooodt_pickup_location").prepend("<option value=''><?php echo $get_byc_wooodt_data['byconsolewooodt_pickup_location_lebel']; ?></option>");	



				jQuery("#byconsolewooodt_delivery_location").prepend("<option value=''><?php echo $get_byc_wooodt_data['byconsolewooodt_delivery_location_lebel']; ?></option>");



				<?php



				global $get_byc_wooodt_data;



				if ($get_byc_wooodt_data['byconsolewooodt_preorder_days'] == '') { // if no pre-order date is not set in settings page
		


					include('inc/exclude/exclude_shipping_holidays.php');



					?>



						jQuery("#byconsolewooodt_delivery_date").datepicker({

						nextText: '',

						prevText: '',

						minDate: <?php echo $mindate; ?>, 



						showAnim: "slideDown", 



						//dateFormat: "mm/dd/yy",



						dateFormat:"<?php global $get_byc_wooodt_data;
						echo $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting']; ?>",



						<?php



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							$location_field_identifier = '#byconsolewooodt_delivery_location';



						}



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



							$location_field_identifier = '#byconsolewooodt_pickup_location';



						}



						?>



						beforeShowDay: function(date){ return checkHolidaysDates( date , "<?php echo $location_field_identifier; ?>" ); },



						altField: "#byconsolewooodt_delivery_date_alternate",



						altFormat: "mm/dd/yy",



						onSelect: function(){



						jQuery(".byconsolewooodt_widget_time_field").timepicker("remove"); 



						jQuery(".byconsolewooodt_widget_time_field").val(''); 



						<?php

						global $get_byc_wooodt_data;

						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



							$location_field_to_pass = 'byconsolewooodt_delivery_location';



						}

						global $get_byc_wooodt_data;

						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



							$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



							$location_field_to_pass = 'byconsolewooodt_pickup_location';



						}



						if ($is_location_enabled == 'YES') { ?>



								selected_location_eligibility_to_pass_for_datepicker=document.getElementById('<?php echo $location_field_to_pass; ?>');



						<?php } else { ?>



								selected_location_eligibility_to_pass_for_datepicker='location_is_disabled';



						<?php } ?>



						ByconsolewooodtDeliveryWidgetTimePopulate("#byconsolewooodt_delivery_date","#byconsolewooodt_delivery_time",selected_location_eligibility_to_pass_for_datepicker);



						<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>



								var pickdate = jQuery("#byconsolewooodt_delivery_date").val();



								var alternate_pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



								<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



										var picklocation = jQuery("#byconsolewooodt_pickup_location").val();



									<?php



								}
								if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



									?>



										var picklocation = jQuery("#byconsolewooodt_delivery_location").val();



								<?php }

								global $get_byc_wooodt_data;

								$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



								if ($byconsolewooodt_hours_format == 'H:i') {



									$hourformate = '12';



								}



								if ($byconsolewooodt_hours_format == 'h:i A') {



									$hourformate = '24';



								}



								?>



								//alert('picklocation - 1 ' + picklocation);



								//alert('$hourformate- '+ '<?php //echo $hourformate;?>');



								var curtime= new Date().toLocaleTimeString("en-US", { hour<?php echo $hourformate; ?>: false, hour: "numeric", minute: "numeric"});



								var current_system_time= curtime.split(' ');



								var current_system_time_without_comma = curtime.replace(","," "); 



								//alert('picklocation - ' + picklocation);



								jQuery(".loading_image_contanier").css("display","block");



								var selected_data = {



								'action': 'get_delivery_time_by_selected_date',



								'selected_date_value' : pickdate,



								'selected_location_value' : picklocation,



								'selected_alternate_pickdate_value' : alternate_pickdate,



								'current_system_time' : current_system_time_without_comma,



								'selected_order_type' : '<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']; ?>',

								};



								// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php



								var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



								jQuery.post( ajaxurl, selected_data, function( response)  {

								//console.log('response: ' + response);



								jQuery("#byconsolewooodt_delivery_time").timepicker("remove");



								jQuery("#byconsolewooodt_delivery_time").empty();	



								jQuery("#byconsolewooodt_delivery_time").html('wait a moment please....');	



								jQuery("#byconsolewooodt_delivery_time").append(response);



								var byconsolewooodt_delivery_time_count = jQuery('#byconsolewooodt_delivery_time option').length;



								if(byconsolewooodt_delivery_time_count>1){



									jQuery("#byconsolewooodt_delivery_time_field").css("display","block");



									jQuery("#byc_time_field_service_closed_notice").css("display","none");



									jQuery(".loading_image_contanier").css("display","none");



								}else{



									jQuery("#byconsolewooodt_delivery_time_field").css("display","none");



									jQuery("#byc_time_field_service_closed_notice").css("display","block");	



									jQuery(".loading_image_contanier").css("display","none");

								}

								});



						<?php } ?>



						// this variable 'selected_location_eligibility_to_pass_for_datepicker' is created when location was selected, make sure location have to be clicked before date selection in case og location enabled 



						}



						});



						<?php



				} else { //end of if no pre-order date is set in settings page do the date selection restriction
		


					include('inc/exclude/exclude_shipping_holidays.php');



					global $get_byc_wooodt_data;



					?>



						jQuery( "#byconsolewooodt_delivery_date" ).datepicker({ 

						nextText: '',

						prevText: '',

						minDate: <?php echo $mindate; ?>, 



						maxDate: "<?php echo $get_byc_wooodt_data['byconsolewooodt_preorder_days']; ?>+D", 



						showOtherMonths: true,



						selectOtherMonths: true,



						showAnim: "slideDown",



						//dateFormat: "mm/dd/yy",



						dateFormat:"<?php global $get_byc_wooodt_data;
						echo $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting']; ?>",



						/*beforeShowDay: checkHolidaysDates( date ),*/



						<?php



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							$location_field_identifier = '#byconsolewooodt_delivery_location';



						}



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



							$location_field_identifier = '#byconsolewooodt_pickup_location';



						}



						?>



						beforeShowDay: function(date){ return checkHolidaysDates( date , "<?php echo $location_field_identifier; ?>" ); },



						altField: "#byconsolewooodt_delivery_date_alternate",



						altFormat: "mm/dd/yy",



						onSelect: function(){



						jQuery(".byconsolewooodt_widget_time_field").timepicker("remove"); 



						jQuery(".byconsolewooodt_widget_time_field").val(''); 



						<?php

						global $get_byc_wooodt_data;

						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



							$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



							$location_field_to_pass = 'byconsolewooodt_delivery_location';



						}



						global $get_byc_wooodt_data;



						if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



							$is_location_enabled = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



							$location_field_to_pass = 'byconsolewooodt_pickup_location';



						}



						if ($is_location_enabled == 'YES') { ?>



								selected_location_eligibility_to_pass_for_datepicker=document.getElementById('<?php echo $location_field_to_pass; ?>');



						<?php } else { ?>



								selected_location_eligibility_to_pass_for_datepicker='location_is_disabled';



						<?php } ?>



						ByconsolewooodtDeliveryWidgetTimePopulate("#byconsolewooodt_delivery_date","#byconsolewooodt_delivery_time",selected_location_eligibility_to_pass_for_datepicker);



						<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>

								var pickdate = jQuery("#byconsolewooodt_delivery_date").val();



								var alternate_pickdate = jQuery("#byconsolewooodt_delivery_date_alternate").val();



								<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') { ?>



										var picklocation = jQuery("#byconsolewooodt_pickup_location").val();



									<?php



								}
								if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



									?>



										var picklocation = jQuery("#byconsolewooodt_delivery_location").val();



								<?php }

								global $get_byc_wooodt_data;

								$byconsolewooodt_hours_format = $get_byc_wooodt_data['byconsolewooodt_hours_format'];



								if ($byconsolewooodt_hours_format == 'H:i') {



									$hourformate = '12';



								}



								if ($byconsolewooodt_hours_format == 'h:i A') {



									$hourformate = '24';



								}

								?>



								//alert('picklocation - 1 ' + picklocation);



								//alert('$hourformate- '+ '<?php //echo $hourformate;?>');



								var curtime= new Date().toLocaleTimeString("en-US", { hour<?php echo $hourformate; ?>: false, hour: "numeric", minute: "numeric"});



								var current_system_time= curtime.split(' ');



								var current_system_time_without_comma = curtime.replace(","," "); 



								//alert('picklocation - ' + picklocation);



								jQuery(".loading_image_contanier").css("display","block");



								var selected_data = {



								'action': 'get_delivery_time_by_selected_date',



								'selected_date_value' : pickdate,



								'selected_location_value' : picklocation,



								'selected_alternate_pickdate_value' : alternate_pickdate,



								'current_system_time' : current_system_time_without_comma,



								'selected_order_type' : '<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']; ?>',

								};



								// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php



								var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



								jQuery.post( ajaxurl, selected_data, function( response)  {



								//console.log('response: ' + response);



								jQuery("#byconsolewooodt_delivery_time").timepicker("remove");



								jQuery("#byconsolewooodt_delivery_time").empty();	



								jQuery("#byconsolewooodt_delivery_time").html('wait a moment please....');	



								jQuery("#byconsolewooodt_delivery_time").append(response);



								var byconsolewooodt_delivery_time_count = jQuery('#byconsolewooodt_delivery_time option').length;



								if(byconsolewooodt_delivery_time_count>1){



									jQuery("#byconsolewooodt_delivery_time_field").css("display","block");



									jQuery("#byc_time_field_service_closed_notice").css("display","none");



									jQuery(".loading_image_contanier").css("display","none");



								}else{



									jQuery("#byconsolewooodt_delivery_time_field").css("display","none");



									jQuery("#byc_time_field_service_closed_notice").css("display","block");	



									jQuery(".loading_image_contanier").css("display","none");



								}

								});

						<?php } ?>



						// this variable 'selected_location_eligibility_to_pass_for_datepicker' is created when location was selected, make sure location have to be clicked before date selection in case og location enabled 



						}



						});



						<?php



				}



				//synchornize both the delivery type radio button in widget and in checkout field in simple way
		


				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



					?>



						jQuery("#byconsolewooodt_delivery_type_levering").prop("checked", true);



						<?php



				}



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



					?>



						jQuery("#byconsolewooodt_delivery_type_take_away").prop("checked", true);



						<?php



				}



				?>



				jQuery("input#byconsolewooodt_delivery_date").val("<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_date_field']; ?>");



				jQuery("input#byconsolewooodt_delivery_time").val("<?php echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_time_field']; ?>");



				})



				</script>	



				<?php



				// refresh the page once delivery type is changed and if the checkout page dont have the widget present (if it has widget present it will be refresh by widget itself)
		


				//check if it is checkout page
		


				//check if widget is present on checkout page
		


				//if ( !is_active_widget( false, false, 'byconsolewooodt_widget', true ) ) {
		


				//if widget is not present create it and make it hidden (coz we have to refresh the page by widget submit)
		


				echo '<div style="display:none;">';



				echo '<!-- do not remove it -->';



				the_widget('byconsolewooodt_widget');



				echo '</div>';



				//}
		


				?>



				<script>



				jQuery(document).ready(function(){



				if(jQuery('#byconsolewooodt_delivery_time').val()==''){



				jQuery('#byconsolewooodt_delivery_date').val('');



				jQuery('#byconsolewooodt_delivery_time').val('');



				//jQuery('#byconsolewooodt_delivery_location').val('');



				}



				});



				</script>



				<?php



		} // !is_checkout///  Calender Tooltip jQuery Start..
	


		/************************************ Map Array ****************************************/



		/*echo '<div class="abc">';



		   include('inc/set_map_pointer_as_per_address_location.php');



		   echo '</div>';*/



		/***************************************************************************************/



		?>



		<script>



		jQuery(document).on('mouseover','.shopholiday',function(){ 



		jQuery(this).prepend('<span class="shopholidaycaltooltip"><?php echo $get_byc_wooodt_data['byconsolewooodt_calender_holiday_lable']; ?></span>');



		jQuery(this).addClass("shopholidaybackgroundcol");



		});



		jQuery(document).on('mouseout','.shopholiday', function(){ 



		jQuery(".shopholidaycaltooltip").remove();



		jQuery(this).removeClass("shopholidaybackgroundcol");



		});



		jQuery(document).on('mouseover','.shopclosingday',function(){ 



		jQuery(this).prepend('<span class="shopclosingdaycaltooltip"><?php echo $get_byc_wooodt_data['byconsolewooodt_calender_closing_lable']; ?></span>');



		jQuery(this).addClass("shopclosingdaybackgroundcol");



		});



		jQuery(document).on('mouseout','.shopclosingday', function(){ 



		jQuery(".shopclosingdaycaltooltip").remove();



		jQuery(this).removeClass("shopclosingdaybackgroundcol");



		});



		jQuery(document).on('mouseover','.ui-datepicker-unselectable',function(){ 



		if(jQuery(this).not('.shopholiday') || jQuery(this).not('.shopclosingday'))



		{



		jQuery(this).addClass("ordernotallowed");



		jQuery(this).prepend('<span class="ordernotallowedtooltip"><?php echo $get_byc_wooodt_data['byconsolewooodt_calender_pick_notallowed_lable']; ?></span>');



		//jQuery(this).addClass("datenotpickedbackgroundcol");



		}



		});



		jQuery(document).on('mouseout','.ui-datepicker-unselectable',function(){ 



		if(jQuery(this).not('.shopholiday') || jQuery(this).not('.shopclosingday'))



		{



		jQuery(this).removeClass("ordernotallowed");



		jQuery(".ordernotallowedtooltip").remove();



		//jQuery(this).removeClass("datenotpickedbackgroundcol");



		}



		});



		jQuery(document).ready(function(){



		<?php

		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {

			$byconsolewooodt_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_pickup_location_auto_select_and_hide'];

		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {

			$byconsolewooodt_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_delivery_location_auto_select_and_hide'];

		}

		if ($byconsolewooodt_location_auto_select_and_hide == 'yes') {



			$selectValText = 'Please select date first';



		} else {



			//$selectValText = 'Please select location first';
	


			$selectValText = $get_byc_wooodt_data['byconsolewooodt_time_picker_blank_error'];



		}



		if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == '') { ?>	



				jQuery('.byconsolewooodt_widget_time_field').on('click',function(){



				if(! jQuery('.byconsolewooodt_widget_time_field').hasClass('ui-timepicker-input')){



				alert("<?php echo $selectValText; ?>");



				}



				});



				jQuery('#byconsolewooodt_delivery_time').on('click',function(){



				if(! jQuery('#byconsolewooodt_delivery_time').hasClass('ui-timepicker-input')){



				alert("<?php echo $selectValText; ?>");



				}



				});		



		<?php } ?>



		jQuery(document).on('change','#byconsolewooodt_pickup_location',function(){		



		jQuery('body').trigger('update_checkout');



		});



		jQuery(document).on('change','#byconsolewooodt_delivery_location',function(){		



		jQuery('body').trigger('update_checkout');



		});



		jQuery("#billing_postcode").val("");



		});



		</script> <!---Calender Tooltip jQuery End.. -->



		<?php



		include(plugin_dir_path(__FILE__) . 'inc/dynamic-css.php');



		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'take_away') {



			?>



				<script>



				jQuery(document).ready(function($) {



				jQuery('body').on( 'added_to_cart', function(){



				setTimeout(function() { 



				//jQuery("#signInButton").trigger('click');



				//setTimeout(get_cart_val, 300);



				var byc_cart_total_price_with_symbol = jQuery("#byconsolewooodt_cart_total_price").text();



				var byc_cart_total_price = byc_cart_total_price_with_symbol.replace(/[^\d\.]/g, '');



				//alert(byc_cart_total_price);



				//setTimeout(get_cart_val, 300);



				var added_total_price = {



				'action': 'byconsolewoodt_cart_total_action',



				'byc_cart_total_price_val': byc_cart_total_price      // We pass php values differently!



				};



				// We can also pass the url value separately from ajaxurl for front end AJAX implementations



				var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



				jQuery.post(ajaxurl, added_total_price, function(response) {



				//alert('Got this from the server: ' + response);	



				jQuery("#text_content").text(response);	



				//jQuery("#byconsolewooodt_widget_pickup_location").empty();	



				//jQuery("#byconsolewooodt_widget_pickup_location").append(response);



				});



				}, 1000); // for 1 second delay 



				});



				});



				/*function get_cart_val()



				{



				var byc_cart_total_price_with_symbol = jQuery("#byconsolewooodt_cart_total_price").text();



				var byc_cart_total_price = byc_cart_total_price_with_symbol.replace(/[^\d\.]/g, '');



				alert(byc_cart_total_price);



				return byc_cart_total_price;



				}*/



				</script>



		<?php }



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'levering') {



			?>



				<script>



				setTimeout(function() { 



				//jQuery("#signInButton").trigger('click');



				//setTimeout(get_cart_val, 300);



				var byc_cart_total_price_with_symbol = jQuery("#byconsolewooodt_cart_total_price").text();



				var byc_cart_total_price = byc_cart_total_price_with_symbol.replace(/[^\d\.]/g, '');



				//alert(byc_cart_total_price);



				//setTimeout(get_cart_val, 300);



				var added_total_price = {



				'action': 'byconsolewoodt_cart_total_action',



				'byc_cart_total_price_val': byc_cart_total_price      // We pass php values differently!



				};



				// We can also pass the url value separately from ajaxurl for front end AJAX implementations



				var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";



				jQuery.post(ajaxurl, added_total_price, function(response) {



				//alert('Got this from the server: ' + response);	



				jQuery("#text_content").text(response);	



				//jQuery("#byconsolewooodt_widget_delivery_location").empty();	



				//jQuery("#byconsolewooodt_widget_delivery_location").append(response);



				//jQuery("#byconsolewooodt_widget_pickup_location").empty();	



				//jQuery("#byconsolewooodt_widget_pickup_location").append(response);



				});



				}, 1000); // for 1 second delay 



				</script>



		<?php } ?>



		<!--<div id="text_content" style="color:#fff;">



Price Content.



</div>-->



		<div class="byconsole_cart_content1">



		<a class="cart-contents fi-shopping-cart" id="byconsolewooodt_cart_total_price" href="#" title="price" style="display:none;"></a> 



		</div>



		<script>



		jQuery(document).ready(function(){	



				



		<?php

		global $get_byc_wooodt_data;

		$byconsolewooodt_checkout_page_next_prev_button_manage = $get_byc_wooodt_data['byconsolewooodt_checkout_page_next_prev_button_manage'];



		if ($byconsolewooodt_checkout_page_next_prev_button_manage == 'yes') {



			/********************************/



			$bycwooodt_has_virtual_products = false;







			// Default virtual products number
	


			$bycwooodt_virtual_products = 0;







			// Get all products in cart
	


			$bycwooodt_products = $woocommerce->cart->get_cart();







			// Loop through cart products
	


			foreach ($bycwooodt_products as $bycwooodt_product) {







				// Get product ID and '_virtual' post meta
	


				$bycwooodt_product_id = $bycwooodt_product['product_id'];



				$bycwooodt_is_virtual = get_post_meta($bycwooodt_product_id, '_virtual', true);







				// Update $has_virtual_product if product is virtual
	


				if ($bycwooodt_is_virtual == 'yes')



					$bycwooodt_virtual_products += 1;



			}







			if (count($bycwooodt_products) == $bycwooodt_virtual_products) {



				$bycwooodt_both_product_count_val = 'same';



			} else {



				$bycwooodt_both_product_count_val = 'not_same';



			}



			if ($bycwooodt_both_product_count_val == 'not_same') {



				?>				



						jQuery(".woocommerce-billing-fields__field-wrapper").css("display","none");	



						jQuery(".woocommerce-shipping-fields").css("display","none");



						jQuery(".woocommerce-additional-fields").css("display","none");	



						jQuery("#order_review").css("display","none");



						jQuery("#order_review_heading").css("display","none");



						jQuery(".woocommerce-billing-fields h3").css("display","none");



						jQuery("#customer_details").css('width', '100%');



						jQuery("#order_review").css('width', '100%');



						jQuery("#order_review_heading").css('float','left');



						jQuery("#byconsolewooodt_checkout_field").css('width', '100%');



						jQuery("#byc_next_form_of_checkout_page").click(function(){



						jQuery("#byconsolewooodt_checkout_field").css("display","none");



						jQuery(".woocommerce-billing-fields__field-wrapper").css("display","block");	



						jQuery(".woocommerce-shipping-fields").css("display","block");



						jQuery(".woocommerce-additional-fields__field-wrapper").css("display","block");



						jQuery(".woocommerce-billing-fields h3").css("display","block");



						jQuery("#byc_prev_form_of_checkout_page_for_date_time_plugin").css("display","block");



						jQuery("#byc_next_form_of_checkout_page_for_payment").css("display","block");



						jQuery("#byc_next_form_of_checkout_page").css("display","none");



						});



						jQuery("#byc_prev_form_of_checkout_page_for_date_time_plugin").click(function(){



						jQuery("#byconsolewooodt_checkout_field").css("display","block");



						jQuery(".woocommerce-billing-fields__field-wrapper").css("display","none");	



						jQuery(".woocommerce-shipping-fields").css("display","none");



						jQuery(".woocommerce-additional-fields__field-wrapper").css("display","none");



						jQuery(".woocommerce-billing-fields h3").css("display","none");



						jQuery("#byc_prev_form_of_checkout_page_for_date_time_plugin").css("display","none");



						jQuery("#byc_next_form_of_checkout_page_for_payment").css("display","none");



						jQuery("#byc_next_form_of_checkout_page").css("display","block");



						});



						jQuery("#byc_next_form_of_checkout_page_for_payment").click(function(){



						jQuery("#order_review").css("display","block");



						jQuery("#order_review_heading").css("display","block");				



						jQuery("#byconsolewooodt_checkout_field").css("display","none");



						jQuery(".woocommerce-billing-fields__field-wrapper").css("display","none");	



						jQuery(".woocommerce-shipping-fields").css("display","none");



						jQuery(".woocommerce-additional-fields__field-wrapper").css("display","none");



						jQuery(".woocommerce-billing-fields h3").css("display","none");



						jQuery("#byc_prev_form_of_checkout_page_for_date_time_plugin").css("display","none");



						jQuery("#byc_next_form_of_checkout_page_for_payment").css("display","none");



						jQuery("#byc_prev_form_of_checkout_page_for_billing_and_shipping_details").css("display","block");



						});



						jQuery("#byc_prev_form_of_checkout_page_for_billing_and_shipping_details").click(function(){



						jQuery("#order_review").css("display","none");



						jQuery("#order_review_heading").css("display","none");	



						jQuery(".woocommerce-billing-fields__field-wrapper").css("display","block");	



						jQuery(".woocommerce-shipping-fields").css("display","block");



						jQuery(".woocommerce-additional-fields__field-wrapper").css("display","block");



						jQuery(".woocommerce-billing-fields h3").css("display","block");



						jQuery("#byc_prev_form_of_checkout_page_for_date_time_plugin").css("display","block");



						jQuery("#byc_next_form_of_checkout_page_for_payment").css("display","block");



						jQuery("#byc_prev_form_of_checkout_page_for_billing_and_shipping_details").css("display","none");



						});



				<?php }



		}



		?>



		<?php //if($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes'){?>



		//jQuery("#byconsolewooodt_delivery_time_field").css("display","none");



		<?php //} ?>



			jQuery("#byconsolewooodt_pickup_location").change(function(){		



							jQuery("#byconsolewooodt_delivery_date").val('');



							jQuery("#byconsolewooodt_delivery_date_alternate").val('');



					



							jQuery("#byconsolewooodt_delivery_time").timepicker("remove"); 



							jQuery("#byconsolewooodt_delivery_time").val('');		



			});



			jQuery("#byconsolewooodt_delivery_location").change(function(){		



					jQuery("#byconsolewooodt_delivery_date").val('');



					jQuery("#byconsolewooodt_delivery_date_alternate").val('');



			



					jQuery("#byconsolewooodt_delivery_time").timepicker("remove"); 



					jQuery("#byconsolewooodt_delivery_time").val('');		



			});



			jQuery("#byconsolewooodt_delivery_date").prop('readonly',true);



		<?php



		$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



		$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



		?>



			jQuery('#byconsolewooodt_widget_form_validation').submit(function () {



		



				//jQuery("#byconsolewooodt_delivery_date_alternate");



				// Get the Login Name value and trim it



				//alert('<?php //echo $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_order_type_field'];?>');



				<?php if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_order_type_field'] == 'take_away') { ?>



						var locationId = jQuery.trim(jQuery('#byconsolewooodt_widget_pickup_location').val());



				<?php }



				if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_order_type_field'] == 'levering') { ?>



						var locationId = jQuery.trim(jQuery('#byconsolewooodt_widget_delivery_location').val());



				<?php } ?>



				var deliveryDate = jQuery.trim(jQuery('#byconsolewooodt_delivery_date_alternate').val());



				var deliveryTime = jQuery.trim(jQuery('#byconsolewooodt_widget_time_field').val());



			//alert(locationId+'--'+deliveryDate+'--'+deliveryTime);



				// Check if empty of not



				if (locationId  === '') {



					alert('Please select location.');



					return false;



				}



				if (deliveryDate  === '') {



					alert('Please select date.');			



					return false;



				}



				if (deliveryTime  === '' || deliveryTime  === 0) {



					alert('Please select time.');



					return false;



				}



			});



		/*jQuery("#byconsolewooodt_delivery_location").change(function(){



			checkHolidaysDates();



		});



		*/



		<?php

		global $get_byc_wooodt_data;

		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			$multipleLocationEnable = $get_byc_wooodt_data['byconsolewooodt_multiple_pickup_location'];



			$byconsolewooodt_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_pickup_location_auto_select_and_hide'];



		}



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



			$multipleLocationEnable = $get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];



			$byconsolewooodt_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_delivery_location_auto_select_and_hide'];



		}



		if ($multipleLocationEnable != '') {



			if ($byconsolewooodt_location_auto_select_and_hide == 'yes') {







				echo 'jQuery("#byconsolewooodt_pickup_location option[value=1]").attr("selected","selected");



			  jQuery("#byconsolewooodt_delivery_location option[value=1]").attr("selected","selected");



				



			  jQuery("#byconsolewooodt_pickup_location option:eq(1)").prop("selected", true);



			  jQuery("#byconsolewooodt_delivery_location option:eq(1)").prop("selected", true);';



			}



		}



		?>



			jQuery("#byconsolewooodt_delivery_date_alternate").on("input", function(){



				// Print entered value in a div box



			   //alert(jQuery(this).val());



			});



	



		<?php

		global $get_byc_wooodt_data;

		$byconsolewooodt_hide_shipping_fields_when_pickup = $get_byc_wooodt_data['byconsolewooodt_hide_shipping_fields_when_pickup'];



		if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {



			if ($byconsolewooodt_hide_shipping_fields_when_pickup == 'yes') {



				?>	



							jQuery('#ship-to-different-address-checkbox').prop('checked', false);



							jQuery('.woocommerce-shipping-fields').css("display","none");



							jQuery(".shipping_address").css("display","none");



				<?php }
		} ?>

		//Stop Google from translating datepicker input field

		jQuery('.ui-datepicker').addClass('notranslate');



		jQuery("#byconsolewooodt_time_slot_delivery_charges").val('');



			jQuery("#byconsolewooodt_add_tips").change(function(){

				var byconsolewooodt_add_tips_val = jQuery("#byconsolewooodt_add_tips").val();

				jQuery('body').trigger('update_checkout');	

			});

	

			<?php if ($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes') { ?>

					jQuery(document).on("change","#byconsolewooodt_delivery_time", function(){

		

						var orderTypeval = jQuery('input[name="byconsolewooodt_delivery_type"]:checked').val();

		

						if(orderTypeval == 'take_away'){

							var locationId = jQuery("#byconsolewooodt_pickup_location").val();

						}

						if(orderTypeval == 'levering'){

							var locationId = jQuery("#byconsolewooodt_delivery_location").val();

						}

		

						var deliveryDate = jQuery("#byconsolewooodt_delivery_date_alternate").val();

		

						var deliveryTime = jQuery("#byconsolewooodt_delivery_time").val();

						

						var selected_data_val = {

							'action': 'bycwooodt_time_slot_charges',

							'orderTypeval' : orderTypeval,

							'locationId' : locationId,

							'deliveryDate' : deliveryDate,

							'deliveryTime' : deliveryTime,

						};		



						// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php



						var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";

						jQuery.post( ajaxurl, selected_data_val, function( response)  {

							//console.log('response: ' + response);

							jQuery("#byconsolewooodt_time_slot_delivery_charges").val(response);

			

							jQuery('body').trigger('update_checkout');

		

						});

					});

			<?php } ?>

	



		});



		</script>	



		<?php

}



add_action('wp_footer', 'byconsolewooodt_footer_script', 9999);



add_action('woocommerce_after_checkout_form', 'byc_next_and_prev_button_function');



function byc_next_and_prev_button_function()
{



	global $woocommerce;



	global $get_byc_wooodt_data;



	$byconsolewooodt_checkout_page_next_prev_button_manage = $get_byc_wooodt_data['byconsolewooodt_checkout_page_next_prev_button_manage'];



	if ($byconsolewooodt_checkout_page_next_prev_button_manage == 'yes') {



		/********************************/



		$bycwooodt_has_virtual_products = false;







		// Default virtual products number



		$bycwooodt_virtual_products = 0;







		// Get all products in cart



		$bycwooodt_products = $woocommerce->cart->get_cart();







		// Loop through cart products



		foreach ($bycwooodt_products as $bycwooodt_product) {







			// Get product ID and '_virtual' post meta



			$bycwooodt_product_id = $bycwooodt_product['product_id'];



			$bycwooodt_is_virtual = get_post_meta($bycwooodt_product_id, '_virtual', true);







			// Update $has_virtual_product if product is virtual



			if ($bycwooodt_is_virtual == 'yes')



				$bycwooodt_virtual_products += 1;



		}







		if (count($bycwooodt_products) == $bycwooodt_virtual_products) {



			$bycwooodt_both_product_count_val = 'same';



		} else {



			$bycwooodt_both_product_count_val = 'not_same';



		}



		if ($bycwooodt_both_product_count_val == 'not_same') {



			echo '<div style="width:100%; height:56px;"><input type="button" name="byc_next_form_of_checkout_page" id="byc_next_form_of_checkout_page" value="Next" style="float:right;background-color: rgb(61, 156, 210);  color: rgb(255, 255, 255);" />';



			echo '<input type="button" name="byc_prev_form_of_checkout_page_for_date_time_plugin" id="byc_prev_form_of_checkout_page_for_date_time_plugin" value="Prev" style="display:none; float:left;background-color: rgb(61, 156, 210);color: rgb(255, 255, 255);" />';



			echo '<input type="button" name="byc_next_form_of_checkout_page_for_payment" id="byc_next_form_of_checkout_page_for_payment" value="Next" style="display:none; float:right;background-color: rgb(61, 156, 210); color: rgb(255, 255, 255);" />';



			echo '<input type="button" name="byc_prev_form_of_checkout_page_for_billing_and_shipping_details" id="byc_prev_form_of_checkout_page_for_billing_and_shipping_details" value="Prev" style="display:none; float:left;background-color: rgb(61, 156, 210);color: rgb(255, 255, 255);" /></div>';



		}



	}



}



function byconsolewoodt_cart_total_action()
{ //  Widget section location disable as per price.

	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;

	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);



	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);



	global $woocommerce;



	$byc_cart_total_price_substr_val = substr($_POST['byc_cart_total_price_val'], 0, -1);

	global $get_byc_wooodt_data;

	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'take_away') {



		$byconsolewooodt_all_added_location_by_ajax = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];



		echo '<option value="">Select pickup location1</option>';



		foreach ($byconsolewooodt_all_added_location_by_ajax as $byconsolewooodt_all_added_location_key => $byconsolewooodt_all_added_location_val) {



			if ($byc_cart_total_price_substr_val >= $byconsolewooodt_all_added_location_val['min_cart_value']) {



				echo "<option value=" . $byconsolewooodt_all_added_location_key . ">" . $byconsolewooodt_all_added_location_val['location'] . " &nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;(" . get_woocommerce_currency_symbol() . $byconsolewooodt_all_added_location_val['min_cart_value'] . ")</option>";



			} else {



				echo "<option value=" . $byconsolewooodt_all_added_location_key . " disabled='disabled'>" . $byconsolewooodt_all_added_location_val['location'] . " &nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;(" . get_woocommerce_currency_symbol() . $byconsolewooodt_all_added_location_val['min_cart_value'] . ")</option>";



			}



		}



	}



	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] = 'levering') {



		$byconsolewooodt_all_added_location_by_ajax = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];



		echo '<option value="">' . __('Select delivery location', 'ByConsoleWooODTExtended') . '</option>';



		foreach ($byconsolewooodt_all_added_location_by_ajax as $byconsolewooodt_all_added_location_key => $byconsolewooodt_all_added_location_val) {



			if ($byc_cart_total_price_substr_val >= $byconsolewooodt_all_added_location_val['min_cart_value']) {



				echo "<option value=" . $byconsolewooodt_all_added_location_key . ">" . $byconsolewooodt_all_added_location_val['location'] . " &nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;(" . get_woocommerce_currency_symbol() . $byconsolewooodt_all_added_location_val['min_cart_value'] . ")</option>";



			} else {



				echo "<option value=" . $byconsolewooodt_all_added_location_key . " disabled='disabled'>" . $byconsolewooodt_all_added_location_val['location'] . " &nbsp;&nbsp;-- &nbsp;&nbsp; Min. Order:&nbsp;(" . get_woocommerce_currency_symbol() . $byconsolewooodt_all_added_location_val['min_cart_value'] . ")</option>";



			}



		}



	}



	//echo '<b>'.$byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'].'</b>';



	//print_r($byconsolewooodt_all_added_location_by_ajax);



}



add_action('wp_ajax_byconsolewoodt_cart_total_action', 'byconsolewoodt_cart_total_action');



add_action('wp_ajax_nopriv_byconsolewoodt_cart_total_action', 'byconsolewoodt_cart_total_action');



/****************Calling Store Notice*******************/



/****************************************************************************/



include('inc/location_based_shipping_charges.php');



/*****************************************************************************/



function byconsolewooodt_store_closed_remove_addtocart()
{



	//$todaydate = date("m/d/Y");



	$todaydate = current_time('m/d/Y');



	$shownotice = 'none';


	$get_all_dates = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];
	global $get_byc_wooodt_data;
	$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];
	$dateexplode = explode(",", $get_all_dates);
	if (!empty($dateexplode)) {
		foreach ($dateexplode as $get_single_dates) {
			if ($get_single_dates == $todaydate) {
				$shownotice = 'byconsolewooodt_store_holiday';
			}
		}
	} // !empty
	if ($shownotice === 'byconsolewooodt_store_holiday') {
		if ($byconsolewooodt_allow_orders_on_closing_days === '') {
			remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
		}
	} else {
		// get todays date 
		$gattodayname = date("l");
		$gattodaynumericval = date("w");
		$sunday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_sunday'];
		$monday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_monday'];
		$tuesday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_tuesday'];
		$wednessday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_wednessday'];
		$thursday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_thursday'];
		$friday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_friday'];
		$saturday = $get_byc_wooodt_data['byconsolewooodt_admin_closing_saturday'];
		$sunday = !empty($sunday) ? $sunday : 99;
		$monday = !empty($monday) ? $monday : 99;
		$tuesday = !empty($tuesday) ? $tuesday : 99;
		$wednessday = !empty($wednessday) ? $wednessday : 99;
		$thursday = !empty($thursday) ? $thursday : 99;
		$friday = !empty($friday) ? $friday : 99;
		$saturday = !empty($saturday) ? $saturday : 99;
		global $get_byc_wooodt_data;
		$byconsolewooodt_allow_orders_on_closing_days = $get_byc_wooodt_data['byconsolewooodt_allow_orders_on_closing_days'];
		if ($sunday == $gattodaynumericval || $monday == $gattodaynumericval || $tuesday == $gattodaynumericval || $wednessday == $gattodaynumericval || $thursday == $gattodaynumericval || $friday == $gattodaynumericval || $saturday == $gattodaynumericval) {
			if ($byconsolewooodt_allow_orders_on_closing_days == '') {
				remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
				remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
			} else {
			}
		} else {
		}
	}
}
add_action('init', 'byconsolewooodt_store_closed_remove_addtocart');
// ADDING COLUMN TITLES (Here 1 columns)
add_filter('manage_edit-shop_order_columns', 'byconsolewooodt_product_delivery_and_pickup_date_column');
function byconsolewooodt_product_delivery_and_pickup_date_column($columns)
{
	//add columns
	$byconsolewooodt_order_list_new_columns = (is_array($columns)) ? $columns : array();
	unset($byconsolewooodt_order_list_new_columns['order_actions']);
	$byconsolewooodt_order_list_new_columns['byconsolewooodt_product_pickup_or_delivery_date'] = 'Pickup / Delivery </br> Date Time';
	$byconsolewooodt_order_list_new_columns['order_actions'] = $columns['order_actions'];
	return $byconsolewooodt_order_list_new_columns;
}
// adding the data for each orders by column
add_action('manage_shop_order_posts_custom_column', 'byconsolewooodt_product_delivery_and_pickup_date_value', 1);
function byconsolewooodt_product_delivery_and_pickup_date_value($column)
{
	global $post, $woocommerce, $the_order;

	global $get_byc_wooodt_data;




	$order_id = $the_order->id;
	if ($column == 'byconsolewooodt_product_pickup_or_delivery_date') {
		$productdeliverydate = get_post_meta($order_id, 'byconsolewooodt_delivery_date', true);
		$productdeliverytime = get_post_meta($order_id, 'byconsolewooodt_delivery_time', true);
		global $get_byc_wooodt_data;
		$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];
		$fetch_seleted_date = new DateTime($productdeliverydate);
		echo $byconsolewooodtmyVarOne = $fetch_seleted_date->format($formattedproductdeliverydate);
		if ($productdeliverytime != '') {
			echo '<br />';
			if ($productdeliverytime == 'as_early_as_possible') {
				$byconsolewooodt_as_early_as_possible_lable_text = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];
				if ($byconsolewooodt_as_early_as_possible_lable_text != '') {
					echo $byconsolewooodt_as_early_as_possible_lable_text;
				} else {
					echo 'ASAP';
				}
			} else {
				echo $productdeliverytime;
			}
		}
	}
}
function byconsolewooodt_custom_wooemail_headers($headers, $object, $order)
{
	$placed_order_type = get_post_meta($order->ID, 'byconsolewooodt_delivery_type', true);
	if ($placed_order_type == 'levering') {
		$delivery_email_id_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];
		$delivery_email_id_index = get_post_meta($order->ID, 'byconsolewooodt_delivery_location', true);
		$additional_email_id = $delivery_email_id_get_option_array_value[$delivery_email_id_index]["email_id_on_each_location"];
	}
	global $get_byc_wooodt_data;
	if ($placed_order_type == 'take_away') {
		$pickup_email_id_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];
		$pickup_email_id_index = get_post_meta($order->ID, 'byconsolewooodt_pickup_location', true);
		$additional_email_id = $pickup_email_id_get_option_array_value[$pickup_email_id_index]["email_id_on_each_location"];
	}
	// replace the emails below to your desire email
	$emails = array($additional_email_id);
	switch ($object) {
		case 'new_order':
			$headers .= 'Bcc: ' . implode(',', $emails) . "\r\n";
			break;
		case 'customer_processing_order':
		case 'customer_completed_order':
		case 'customer_invoice':
		default:
	}
	return $headers;
}
add_filter('woocommerce_email_headers', 'byconsolewooodt_custom_wooemail_headers', 10, 3);
// shortcodes
include(plugin_dir_path(__FILE__) . 'inc/shortcodes/bycwooodt_pickup_locations.php');
include(plugin_dir_path(__FILE__) . 'inc/shortcodes/bycwooodt_delivery_locations.php');
include(plugin_dir_path(__FILE__) . 'inc/shortcodes/bycwooodt_widget.php');
include(plugin_dir_path(__FILE__) . 'inc/shortcodes/bycwooodt_order_date_time_location.php');
add_filter('woocommerce_add_to_cart_fragments', 'byconsolewooodt_woocommerce_header_add_to_cart_fragment');
function byconsolewooodt_woocommerce_header_add_to_cart_fragment($fragments)
{
	ob_start();
	?>
			<div class="byconsole_cart_content2">
			<a class="cart-contents fi-shopping-cart" id="byconsolewooodt_cart_total_price" href="#" title="cart price" style="display:none;"  ><?php echo WC()->cart->get_cart_total(); ?></a> 
			</div>
			<?php
			$fragments['a.cart-contents'] = ob_get_clean();
			return $fragments;
}
include('inc/ajaxReturnWidgetTimeListBySelectedDate.php');
add_action('woocommerce_cart_calculate_fees', 'byconsolewooodt_time_slot_delivery_charges_fees');
function byconsolewooodt_time_slot_delivery_charges_fees($cart)
{
	global $woocommerce;
	global $get_byc_wooodt_data;
	if (!$_POST || (is_admin() && !is_ajax())) {
		return;
	}
	if (isset($_POST['post_data'])) {
		parse_str($_POST['post_data'], $post_data);
	} else {
		$post_data = $_POST; // fallback for final checkout (non-ajax)
	}
	$bycodt_time_slot_delivery_charges = $post_data['byconsolewooodt_time_slot_delivery_charges'];
	if (isset($bycodt_time_slot_delivery_charges) && $bycodt_time_slot_delivery_charges != '') {
		$bycodt_time_slot_delivery_charges = $post_data['byconsolewooodt_time_slot_delivery_charges'];
		$timeSlotText = $get_byc_wooodt_data['byconsolewooodt_time_slot_charges_label'];
		if ($timeSlotText != '') {
			$timeSlotText = $timeSlotText;
		} else {
			$timeSlotText = 'Timeslot charges';
		}
		WC()->cart->add_fee($timeSlotText, $bycodt_time_slot_delivery_charges);
	}
}
add_action('woocommerce_cart_calculate_fees', 'byconsolewoodt_tips_fee');
function byconsolewoodt_tips_fee($cart)
{
	global $get_byc_wooodt_data;
	global $woocommerce;
	if (!$_POST || (is_admin() && !is_ajax())) {
		return;
	}
	if (isset($_POST['post_data'])) {
		parse_str($_POST['post_data'], $post_data);
	} else {
		$post_data = $_POST; // fallback for final checkout (non-ajax)
	}
	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);
	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);
	if (isset($post_data['byconsolewooodt_add_tips']) && $post_data['byconsolewooodt_add_tips'] != '') {
		$byconsolewooodt_add_tips = $post_data['byconsolewooodt_add_tips'];
		$tipsText = $get_byc_wooodt_data['byconsolewooodt_chekout_page_delivery_tip_label'];
		if ($tipsText != '') {
			$tipsTextVal = $tipsText;
		} else {
			$tipsTextVal = 'Tips';
		}
		WC()->cart->add_fee($tipsTextVal, $byconsolewooodt_add_tips);
	}
}
add_action('woocommerce_cart_calculate_fees', 'byconsolewoodt_day_wise_charges_fee');
function byconsolewoodt_day_wise_charges_fee($cart)
{
	global $get_byc_wooodt_data;
	global $woocommerce;
	if (!$_POST || (is_admin() && !is_ajax())) {
		return;
	}
	if (isset($_POST['post_data'])) {
		parse_str($_POST['post_data'], $post_data);
	} else {
		$post_data = $_POST; // fallback for final checkout (non-ajax)
	}
	if (isset($post_data['byconsolewooodt_selected_day_charges']) && $post_data['byconsolewooodt_selected_day_charges'] != '') {
		$byconsolewooodt_selected_delivery_date = $post_data['byconsolewooodt_delivery_date_alternate'];
		$byconsolewooodt_selected_day_charges = $post_data['byconsolewooodt_selected_day_charges'];
		$byconsolewooodt_day_wise_charges_label = $get_byc_wooodt_data['byconsolewooodt_day_wise_charges_label'];
		$selectedDayName = date('l', strtotime($byconsolewooodt_selected_delivery_date));
		if ($byconsolewooodt_day_wise_charges_label != '') {
			$byconsolewooodt_day_wise_charges_label_val = $byconsolewooodt_day_wise_charges_label;
		} else {
			$byconsolewooodt_day_wise_charges_label_val = 'Additional Charges';
		}
		WC()->cart->add_fee($byconsolewooodt_day_wise_charges_label_val . ' For ' . $selectedDayName, $byconsolewooodt_selected_day_charges);
	}
}
add_action('woocommerce_cart_calculate_fees', 'byconsolewoodt_special_date_charges_fee');
function byconsolewoodt_special_date_charges_fee($cart)
{
	global $get_byc_wooodt_data;
	global $woocommerce;
	if (!$_POST || (is_admin() && !is_ajax())) {
		return;
	}
	if (isset($_POST['post_data'])) {
		parse_str($_POST['post_data'], $post_data);
	} else {
		$post_data = $_POST; // fallback for final checkout (non-ajax)
	}
	if (isset($post_data['byconsolewooodt_special_dates_charges']) && $post_data['byconsolewooodt_special_dates_charges'] != '') {
		$byconsolewooodt_selected_delivery_date = $post_data['byconsolewooodt_delivery_date'];
		$byconsolewooodt_special_dates_charges = $post_data['byconsolewooodt_special_dates_charges'];
		$byconsolewooodt_special_dates_charges_label = $get_byc_wooodt_data['byconsolewooodt_special_dates_charges_label'];
		if ($byconsolewooodt_special_dates_charges_label != '') {
			$byconsolewooodt_special_dates_charges_label_val = $byconsolewooodt_special_dates_charges_label;
		} else {
			$byconsolewooodt_special_dates_charges_label_val = 'Extra Charges';
		}
		WC()->cart->add_fee($byconsolewooodt_special_dates_charges_label_val . ' For ' . $byconsolewooodt_selected_delivery_date, $byconsolewooodt_special_dates_charges);
	}
}

// TODO: important function
function byconsolewooodt_admin_notice_error()
{
	global $wooodtextendeds;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	// $get_byc_wooodtgggggg_data=$ByConsoleWooODTExtended->checkResponse();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$plugins_expire_date = $wooodtextendeds['wooodtextended_expiry'];
	//$plugins_expire_date = $wooodtextendeds['wooodtextendeds_array_data']['0']['expire_date'];
	$woocommerce_before_fifteen_days_future = date('Y-m-d', strtotime('-15 days', strtotime($plugins_expire_date)));
	$woocommerce_current_date = date("Y-m-d");
	if ($woocommerce_before_fifteen_days_future <= $woocommerce_current_date) {
		if ($plugins_expire_date == $woocommerce_current_date) {
			$message = 'VGhpcyBpcyB0byBub3RpZnkgeW91IHRoYXQgdGhlIFdvb09EVCBFeHRlbmRlZCBQbHVnaW4gV2lsbCBiZSBEZWFjdGl2YXRlZCBXaXRoaW4gYSBjb3VwbGUgb2YgaG91cnMgYXMgeW91ciBvbmUgeWVhciBlbmRzIHRvZGF5';
			$expairedDate = '';
		} else {
			$message = 'V29vb2R0IHBsdWdpbnMgd2lsbCBiZSBkZWFjdGl2YXRlZCBvbg== ';
			$expairedDate = $plugins_expire_date;
		}
		$class = 'notice notice-error';
		printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), base64_decode($message) . '&nbsp' . esc_html($expairedDate));
	} else {
		$message = '';
		printf('');
	}

}
add_action('admin_notices', 'byconsolewooodt_admin_notice_error');
function byconsolewooodt_requires_wordpress_version()
{
	if (class_exists('WooCommerce')) {
		if (is_admin()) {
			global $get_byc_wooodt_data;
			$ByConsoleWooODTExtended = new BycWooODT_class();
			$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
			$get_byc_wooodt_data = $wooodtextendeds;
			global $wp_version;
			$plugin = plugin_basename(__FILE__);
			$plugin_data = get_plugin_data(__FILE__, false);
			$require_wp = "4.9.7";
			$wp_version;
			$expireDate = $wooodtextendeds['wooodtextended_expiry'];
			$woocommerce_current_date = date("Y-m-d");
			if ($wooodtextendeds['valid'] == 'no') {
				deactivate_plugins($plugin);
				$textOne = 'UGxlYXNlIHJlbmV3';
				$textTwo = 'aW4gb3JkZXIgdG8gYWN0aXZhdGUgaXQgb24geW91ciB3ZWJzaXRlIGFnYWlu';
				$textThree = 'UmVuZXcgaGVyZQ==';
				$textFour = 'UmV0dXJuIHRvIHBsdWdpbnMgcGFnZQ==';
				$textFive = 'aHR0cHM6Ly93d3cucGx1Z2lucy5ieWNvbnNvbGUuY29tL215LWFjY291bnQv';
				wp_die(base64_decode($textOne) . " <strong>" . $plugin_data['Name'] . "</strong> " . base64_decode($textTwo) . " <a href='" . base64_decode($textFive) . "' target='_new'> " . base64_decode($textThree) . "</a><br/> <a href='" . get_admin_url(null, 'plugins.php') . "'>" . base64_decode($textFour) . "</a>.");
			}
		}
	}
}
add_action('admin_init', 'byconsolewooodt_requires_wordpress_version');
add_filter('woocommerce_checkout_fields', 'byconsoleWooODT_custom_override_checkout_fields');
function byconsoleWooODT_custom_override_checkout_fields($fields)
{
	global $get_byc_wooodt_data;
	$stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);
	$byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);
	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {
		$byconsolewooodt_hide_billing_fields = $get_byc_wooodt_data['byconsolewooodt_hide_billing_fields_when_pickup'];
	}
	if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {
		$byconsolewooodt_hide_billing_fields = $get_byc_wooodt_data['byconsolewooodt_hide_billing_fields_when_delivery'];
	}
	foreach ($byconsolewooodt_hide_billing_fields as $fields_key => $fields_val) {
		unset($fields['billing'][$fields_val]);
	}
	return $fields;
}
// Add custom order meta data to make it accessible in Order preview template
add_filter('woocommerce_admin_order_preview_get_order_details', 'byconsolewooodt_admin_order_preview_add_custom_meta_data', 10, 2);
function byconsolewooodt_admin_order_preview_add_custom_meta_data($data, $order)
{
	global $get_byc_wooodt_data;
	$formattedproductdeliverydate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];
	// Replace '_custom_meta_key' by the correct postmeta key
	if ($delivery_type = $order->get_meta('byconsolewooodt_delivery_type'))
		$data['byconsolewooodt_delivery_type'] = $delivery_type; // <= Store the value in the data array.	
	if ($delivery_type == 'take_away') {
		if ($location_id = $order->get_meta('byconsolewooodt_pickup_location'))
			$pickup_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];
		$pickup_location_name = $pickup_location_get_option_array_value[$location_id]['location'];
		$data['byconsolewooodt_location'] = $pickup_location_name; // <= Store the value in the data array.	
		$data['byconsolewooodt_type'] = 'Pickup'; // <= Store the value in the data array.			
	}
	if ($delivery_type == 'levering') {
		if ($location_id = $order->get_meta('byconsolewooodt_delivery_location'))
			$delivery_location_get_option_array_value = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];
		$delivery_location_name = $delivery_location_get_option_array_value[$location_id]['location'];
		$data['byconsolewooodt_location'] = $delivery_location_name; // <= Store the value in the data array.
		$data['byconsolewooodt_type'] = 'Delivery'; // <= Store the value in the data array.					
	}
	if ($delivery_date = $order->get_meta('byconsolewooodt_delivery_date'))
		$delivery_dateVal = date($formattedproductdeliverydate, strtotime($delivery_date));
	$data['byconsolewooodt_delivery_date'] = $delivery_dateVal; // <= Store the value in the data array.
	if ($delivery_time = $order->get_meta('byconsolewooodt_delivery_time'))
		if ($delivery_time == 'as_early_as_possible') {
			$byconsolewooodt_as_early_as_possible_lable_text = $get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text'];
			if ($byconsolewooodt_as_early_as_possible_lable_text != '') {
				$delivery_time_val = $byconsolewooodt_as_early_as_possible_lable_text;
			} else {
				$delivery_time_val = 'ASAP';
			}
		} else {
			$delivery_time_val = $delivery_time;
		}
	$data['byconsolewooodt_delivery_time'] = $delivery_time_val; // <= Store the value in the data array.
	return $data;
}



// Display custom values in Order preview

add_action('woocommerce_admin_order_preview_start', 'byconsolewooodt_display_order_data_in_admin');

function byconsolewooodt_display_order_data_in_admin()
{

	// Call the stored value and display it



	echo '<div style="padding:15px;">

			<h2>Order Details</h2>

	     <b>Order Type:</b> {{data.byconsolewooodt_type}}<br>

		 <b>Location:</b> {{data.byconsolewooodt_location}}<br>

		 <b>Delivery Date:</b> {{data.byconsolewooodt_delivery_date}}<br>

		 <b>Delivery Time:</b> {{data.byconsolewooodt_delivery_time}}</div>';



}



add_action('wp_ajax_bycwooodt_time_slot_charges', 'bycwooodt_time_slot_charges');

add_action('wp_ajax_nopriv_bycwooodt_time_slot_charges', 'bycwooodt_time_slot_charges');



function bycwooodt_time_slot_charges()
{

	global $get_byc_wooodt_data;
	$ByConsoleWooODTExtended = new BycWooODT_class();
	$wooodtextendeds = $ByConsoleWooODTExtended->checkResponse();
	$get_byc_wooodt_data = $wooodtextendeds;

	$orderTypeval = $_POST['orderTypeval'];

	$locationId = $_POST['locationId'];

	$deliveryDate = $_POST['deliveryDate'];

	$deliveryTime = $_POST['deliveryTime'];
	$deliveryTimeExplode = explode(' - ', $deliveryTime);
	$totalSelecteddTime = date("H:i", strtotime($deliveryTimeExplode[0])) . ' - ' . date("H:i", strtotime($deliveryTimeExplode[1]));



	if ($orderTypeval == 'take_away') {

		$custom_slot = $get_byc_wooodt_data['pickup_per_custom_slot'];

	}

	if ($orderTypeval == 'levering') {

		$custom_slot = $get_byc_wooodt_data['delivery_per_custom_slot'];

	}



	foreach ($custom_slot[$locationId] as $single_loop_key => $single_loop_val) {

		$totalTimeing = date("H:i", strtotime($single_loop_val['start_time_slot'])) . ' - ' . date("H:i", strtotime($single_loop_val['end_time_slot']));
		$totalSelecteddTime;

		if ($totalTimeing == $totalSelecteddTime) {

			echo $single_loop_val['charges'];

		}

	}



	die();

}

add_action('wp_footer', 'byconsoleWooodt_recalculate_shipping');



function byconsoleWooodt_recalculate_shipping()
{

	foreach (WC()->cart->get_cart() as $key => $value) {

		WC()->cart->set_quantity($key, $value['quantity'] + 1);

		WC()->cart->set_quantity($key, $value['quantity']);

		break;



	}

}

add_action('admin_footer', 'bycwooodt_admin_footer');



//send to order edit/details page

function bycwooodt_admin_footer()
{



	?>



			<script>



				function byconsolewooodt_order_page_link(bycorderid){



					var wpadmin_link = '<?php echo get_admin_url(); ?>post.php?post='+bycorderid+'&action=edit';



					//window.location = wpadmin_link;



					window.open(wpadmin_link, '_blank');



				}



			</script>



			<?php



}



//avoid conflict with Elementor

add_action(



	'admin_footer',



	function () {



		$odtmainsettinglink = $_REQUEST['page'];



		if ($odtmainsettinglink == 'byconsolewooodt_general_settings') {



			wp_dequeue_script('react');



			wp_deregister_script('react');



			wp_dequeue_script('react-dom');



			wp_deregister_script('react-dom');



		}



	},



	999



);



?>