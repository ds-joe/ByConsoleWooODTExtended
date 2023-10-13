<?php


/*************************** Location Setting Start **********************/


add_action('admin_init', 'byconsolewooodt_location_settings_fields', 99);


function byconsolewooodt_location_settings_fields()

{

add_settings_section("wooodtlocationsetting", "wooodt Location  Settings", null, "byconsolewooodt_wooodt_location_settings_options");

add_settings_field("byconsolewooodt_multiple_pickup_location_lebel", "Enable Pickup Locations:", "byconsolewooodt_multiple_pickup_location_lebel", "byconsolewooodt_wooodt_location_settings_options", "wooodtlocationsetting");

add_settings_field("byconsolewooodt_pickup_location", "Pickup Location:<br/><span style='color:#a0a5aa;font-size:12px;'>( To disable the pickup location <br/>please check the check box )</span>", "byconsolewooodt_pickup_location", "byconsolewooodt_wooodt_location_settings_options", "wooodtlocationsetting");

add_settings_field("byconsolewooodt_multiple_delivery_location_lebel", "Enable Delivery Locations:", "byconsolewooodt_multiple_delivery_location_lebel", "byconsolewooodt_wooodt_location_settings_options", "wooodtlocationsetting");

add_settings_field("byconsolewooodt_delivery_location", "Delivery Location:<br/><span style='color:#a0a5aa;font-size:12px;'>( To disable the delivery location <br/>please check the check box )</span>", "byconsolewooodt_delivery_location", "byconsolewooodt_wooodt_location_settings_options", "wooodtlocationsetting");

//		print_r(get_option('byconsolewooodt_pickup_location'));

//		print_r(get_option('byconsolewooodt_delivery_location'));

register_setting("wooodtlocationsetting", "byconsolewooodt_pickup_location");

register_setting("wooodtlocationsetting", "byconsolewooodt_delivery_location");

register_setting("wooodtlocationsetting", "byconsolewooodt_multiple_pickup_location");

register_setting("wooodtlocationsetting", "byconsolewooodt_multiple_delivery_location");

}

function byconsolewooodt_multiple_pickup_location_lebel(){

?>

<input type="checkbox" name="byconsolewooodt_multiple_pickup_location" id="byconsolewooodt_multiple_pickup_location" style="float: none;width: auto;" class="byconsolewooodt_admin_element_field checkbox" value="YES" <?php if( get_option('byconsolewooodt_multiple_pickup_location')=='YES'){?> checked="checked"<?php }?> />

<?php //echo __('Enable pickup locations.','ByConsoleWooODTExtended');

}

function byconsolewooodt_pickup_location(){
	?>
	<style>
.location_fields_heading{width:100%;}	
.location_fields_heading .disable_lable{width: 8%;float: left;}
.location_fields_heading .location_lable{width: 22%;float: left;}
.location_fields_heading .latitude_lable{width: 10%;float: left;}
.location_fields_heading .longitude_lable{width: 11%;float: left;}
.location_fields_heading .start_time_lable{width: 11%;float: left; display:none;}
.location_fields_heading .end_time_lable{width: 9%;float: left; display:none;}
.location_fields_heading .min_cart_lable{width: 9%;float: left;}
.location_fields_heading .shipping_cost_lable{width: 9%;float: left;}
.location_fields_heading .email_lable{width: 21%;float: left;}
.fldst{clear:both;}
.fldst input[type=text]{float:left;}
.fldst input[type=number]{float:left;}
.week_days_time_container{clear:both;}
#del_pickup{border-radius: 3px;cursor: pointer;background-color: #000;color: #fff;padding: 7px;margin-left: 8px;float: left;}
.week_days_time_container .single_day_time{width:13%;float:left;}
.please_note_text{clear:both; background-color: #0000005c;color: #fff;width: 90%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;display: inline-block;}
#for_mobile_version{display:none;}
#for_desktop_version{display:block;}

#byc_pickup_copy_value_to_another{background-color: #000;color: #fff;border: none;padding: 5px;}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
/* Styles */
.location_fields_heading{font-size:10px;}
.location_fields_heading .disable_lable{width: 12%;float: left;}
.location_fields_heading .location_lable{width: 15%;float: left;}
.location_fields_heading .latitude_lable{width: 15%;float: left;}
.location_fields_heading .longitude_lable{width: 15%;float: left;}
.location_fields_heading .start_time_lable{width: 15%;float: left; display:none;}
.location_fields_heading .end_time_lable{width: 15%;float: left; display:none;}
.location_fields_heading .min_cart_lable{width: 15%;float: left;}
.location_fields_heading .shipping_cost_lable{width: 15%;float: left;}
.fldst input[type=text]{float:left;width:100% !important;}
.fldst input[type=number]{float:left;width:100% !important;}
#del_pickup{float:none;}
.week_days_time_container .single_day_time{width:32%;float:left;}
.please_note_text{background-color: #0000005c;color: #fff;width: 50%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;display: inline-block;margin-left:10%;}
#for_mobile_version{display:block;}
#for_desktop_version{display:none;}
}

	</style>
	<?php

	if ( is_plugin_active( 'ByConsoleWooODTExtendedMapAddon/ByConsoleWooODTExtendedMapAddon.php' ) ) {	} 

	else 

	{ 

	?>

    <style>

	.byconsolewooodt_pickup_location_address_latitude{display:none !important;}

	.byconsolewooodt_pickup_location_address_longitude{display:none !important;} 	

	#location_field{width:30% !important;}

	.email_field{width:26% !important;}

	.latitude_lable{display:none !important;}

	.longitude_lable{display:none !important;}
	
	#byc_pickup_copy_value_to_another{background-color: #000;
    color: #fff;
    font-weight: 500;
    border-radius: 2px;
	border: 0px;
    padding: 6px;}
	
	#del_pickup{background-color: #000;
    color: #fff;
    padding: 7px;
    margin-left: 10px;
    border-radius: 3px;}
	</style>

	<?php }

$byconsolwooodtgetallpickuplocation=get_option('byconsolewooodt_pickup_location');

//print_r($byconsolwooodtgetallpickuplocation);

if (!empty($byconsolwooodtgetallpickuplocation))

{ 

foreach ($byconsolwooodtgetallpickuplocation as $byconsolwooodtgetallpickuplocation_key => $byconsolwooodtgetallpickuplocation_val)

{

$byconsolwooodtgetallpickuplocation_key_value[]=$byconsolwooodtgetallpickuplocation_key;

//print_r($byconsolwooodtgetallpickuplocation_key_value);

}	

}

else

{

//echo 'Location Is Empty.<br/>';

}	

?>

<script type="text/javascript">

jQuery(document).ready(function() {	

//byconsolewooodt_pickup_location_count=<?php //echo count(get_option('byconsolewooodt_pickup_location'));?>;

byconsolewooodt_pickup_location_count= 

<?php  if (empty($byconsolwooodtgetallpickuplocation_key_value)){ echo '0' ;} else { echo end($byconsolwooodtgetallpickuplocation_key_value); }?>

//alert(byconsolewooodt_pickup_location_count);

jQuery('#btn_pickup_add_another').click(function(){			 

// byconsolewooodt_pickup_location_count++;

byconsolewooodt_pickup_location_count+=1;

//alert(byconsolewooodt_pickup_location_count);

jQuery('.pickup_options').append('<div class="location_fields_heading" id="for_mobile_version"><div class="disable_lable" style=""><b>Disable</b></div><div class="location_lable" style=""><b>Location</b></div><div class="start_time_lable" style=""><b>Start Time</b></div><div class="end_time_lable" style=""><b>End Time</b></div><div class="min_cart_lable" style=""><b>Min Cart Price</b></div><div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div><div class="email_lable"><b>Email Id</b></div><div class="latitude_lable" style=""><b>Latitude</b></div><div class="longitude_lable" style=""><b>Longitude</b></div></div><fieldset class="fldst pickup_location'+byconsolewooodt_pickup_location_count+'"><input type="checkbox" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][location_disable]" id="byconsolewooodt_pickup_location" value="disable"  style="float: left;margin-top: 10px;width: 5px;" /><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][location]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location'+byconsolewooodt_pickup_location_count+'" placeholder="Pickup Location" value="" onchange="location_finder(this)" style="width:25%; padding:7px;" /><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][start_time]" id="byconsolewooodt_pickup_location" value="" style="width:10%; padding:7px;display:none;" /><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][end_time]" id="byconsolewooodt_pickup_location" value="" style="width:10%; padding:7px;display:none;" /><input type="number" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][min_cart_value]" id="byconsolewooodt_pickup_location" placeholder="Pickup Price" value="" style="width:10%; padding:7px;height: 35px;" /><input type="number" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][shipping_cost]" id="byconsolewooodt_pickup_location" placeholder="Shipping Cost" value="" style="width:10%; padding:7px;height: 35px;" /><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][email_id_on_each_location]" id="byconsolewooodt_pickup_location" placeholder="Enter Email Id" class="email_field" value="" style="width:20%; padding:7px;" /><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][address_latitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_latitude" placeholder="Latitude" value="" readonly="readonly" style="width:10%; padding:7px;" /><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][address_longitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_longitude" placeholder="Longitude" value="" readonly="readonly" style="width:10%; padding:7px;" /><span id="del_pickup" class="pickup_location'+byconsolewooodt_pickup_location_count+'" style="cursor:pointer;">X</span><br /><div class="week_days_time_container"><div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sun][service]" class="byconsolewooodt_pickup_location_sun_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Sun</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sun][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sun][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sun][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sun][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][mon][service]" class="byconsolewooodt_pickup_location_mon_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Mon</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][mon][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][mon][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][mon][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][mon][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][tue][service]" class="byconsolewooodt_pickup_location_tue_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Tue</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][tue][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][tue][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][tue][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][tue][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][wed][service]" class="byconsolewooodt_pickup_location_wed_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Wed</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][wed][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][wed][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][wed][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][wed][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][thu][service]" class="byconsolewooodt_pickup_location_thu_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Thu</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][thu][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][thu][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][thu][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][thu][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][fri][service]" class="byconsolewooodt_pickup_location_fri_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Fri</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][fri][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][fri][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][fri][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][fri][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sat][service]" class="byconsolewooodt_pickup_location_sat_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Sat</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sat][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sat][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sat][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_start_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][sat][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_end_time'+byconsolewooodt_pickup_location_count+'" value="" style="width: 95%;" /></div></div></div><p class="please_note_text">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p><div style="float: left; clear:both; width:12%;display:none; "><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Hours Limit</p><label style="float:left; padding:7px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][threshold_hours]" id="byconsolewooodt_pickup_location" value="" style="width: 50%;" /></div><div style="float: left; width:12%;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Minutes Limit</p><label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][threshold_minutes]" id="byconsolewooodt_pickup_location" value="" style="width:50%; padding:7px;" /></div><div style="float: left; width:32%;display:none;"><p style="margin-top: 8px; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Orders Limit</p><label style="float:left; padding:7px;">order(s)</label><input type="text" name="byconsolewooodt_pickup_location['+byconsolewooodt_pickup_location_count+'][max_order_by_threshold_hours]" id="byconsolewooodt_pickup_location" value="" style="width: 50%;" /><label style="padding:7px;"></label></div></div><div style="float: left; width:38%; padding-top:25px;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">In order to make this function work, please make sure "Limit [X] number of orders per [Y] hour(s)" has been checked on WooODT Features Settings page and <b style="color:#FF5722;">"Display time format as" is select as Fixed Time on ODT Management page.</b></p></div></fieldset><br />');

jQuery("#pickup_last_array_key").val(byconsolewooodt_pickup_location_count);

});

	

});

</script>

<?php 

//$byconsolewooodt_pickup_loacation= unserialize(get_option('byconsolewooodt_pickup_location'));

$byconsolewooodt_pickup_loacation_array= get_option('byconsolewooodt_pickup_location');

//print_r( $byconsolewooodt_pickup_loacation_array);
end($byconsolewooodt_pickup_loacation_array);         // move the internal pointer to the end of the array
$pickupLastKey = key($byconsolewooodt_pickup_loacation_array); 
?>

<input type="hidden" name="pickup_last_array_key" id="pickup_last_array_key" value="<?php echo $pickupLastKey;?>" />
 

<div class="location_fields_heading" id="for_desktop_version">

<div class="disable_lable" style=""><b>Disable</b></div>

<div class="location_lable" style=""><b>Location</b></div>

<div class="start_time_lable" style=""><b>Start Time</b></div>

<div class="end_time_lable" style=""><b>End Time</b></div>

<div class="min_cart_lable" style=""><b>Min Cart Price</b></div>

<div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div>

<div class="email_lable"><b>Email Id</b></div>

<div class="latitude_lable" style=""><b>Latitude</b></div>

<div class="longitude_lable" style=""><b>Longitude</b></div>

</div><br />

<?php

if(!empty($byconsolewooodt_pickup_loacation_array)){

$pickup_i=0;

?>

<?php 

$week_day_name_array = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");

//echo '<pre>';

//print_r($byconsolewooodt_pickup_loacation_array);

//echo '</pre>';

	$loopCount = 1;

	foreach ($byconsolewooodt_pickup_loacation_array as $pickup_loacation_single_array_key => $pickup_loacation_single_array_value)

	{

	//print_r($byconsolewooodt_pickup_loacation_single_array);	

	//print_r($pickup_loacation_single_array_key);

	//print_r($pickup_loacation_single_array_value);

	//foreach($pickup_location_array_value as $pickup_location_single_array_key => $pickup_location_single_array_value)

	//{

	//print_r($pickup_location_single_array_value);

	

	

	foreach($pickup_loacation_single_array_value as $pickup_loacation_single_array_value_key_1 => $pickup_loacation_single_array_value_val_1)

	{

		//print_r($pickup_loacation_single_array_value_key_1);

		//echo '<hr />';

		//print_r($pickup_loacation_single_array_value_val_1);

	}

	

	if(!empty($pickup_loacation_single_array_value['week_day']))

	{

		$byconsolewoodt_weekday_name_array = $pickup_loacation_single_array_value['week_day'];

	}

	

	if(!empty($pickup_loacation_single_array_value['week_day_start_time']))

	{

		$byconsolewoodt_week_day_start_time_array = $pickup_loacation_single_array_value['week_day_start_time'];

	}

	

	if(!empty($pickup_loacation_single_array_value['week_day_end_time']))

	{

		$byconsolewoodt_week_day_end_time_array = $pickup_loacation_single_array_value['week_day_end_time'];

	}

	//print_r($byconsolewoodt_weekday_name_array);

	//print_r($byconsolewoodt_week_day_start_time_array);

	//print_r($byconsolewoodt_week_day_end_time_array);

	

	

	if(!empty($byconsolewoodt_week_day_start_time_array))

	{

	

		foreach($byconsolewoodt_week_day_start_time_array as $byconsolewoodt_week_day_start_time_single_array)

		{

			$byconsolewoodt_week_day_start_time_single_array; 

		}

	

	}

	if($loopCount == 1){
		$loopCountVal = 1;	
	}else{
		$loopCountVal = '';
	}

	?>
    
<div class="location_fields_heading" id="for_mobile_version">

<div class="disable_lable" style=""><b>Disable</b></div>

<div class="location_lable" style=""><b>Location</b></div>

<div class="start_time_lable" style=""><b>Start Time</b></div>

<div class="end_time_lable" style=""><b>End Time</b></div>

<div class="min_cart_lable" style=""><b>Min Cart Price</b></div>

<div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div>

<div class="email_lable"><b>Email Id</b></div>

<div class="latitude_lable" style=""><b>Latitude</b></div>

<div class="longitude_lable" style=""><b>Longitude</b></div>

</div>

	<fieldset class="fldst pickup_location<?php echo $pickup_i;?>">

	<input type="checkbox" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][location_disable]" id="byconsolewooodt_pickup_location" 

	<?php if(!empty($pickup_loacation_single_array_value['location_disable']))

		  {

				if($pickup_loacation_single_array_value['location_disable']=='on') {?> checked="checked" <?php } 

		  }

	?>  style="float: left;margin-top: 10px;width: 5px;" />

	<input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][location]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location<?php echo $pickup_i;?>" value="<?php echo $pickup_loacation_single_array_value['location'];?>" placeholder="Location" style="width:25%; padding:7px;" onchange="location_finder(this)"/>

	<input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][start_time]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['start_time'];?>" style="width:10%; padding:7px;display:none;" />

	<input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][end_time]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['end_time'];?>" style="width:10%; padding:7px;display:none;" />

	<input type="number" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][min_cart_value]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['min_cart_value'];?>" placeholder="Pickup Price" style="width:10%; padding:7px;height: 35px;" />

    

    <input type="number" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][shipping_cost]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['shipping_cost'];?>" placeholder="Shipping Cost" style="width:10%; padding:7px;height: 35px;" />

     <input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][email_id_on_each_location]" id="byconsolewooodt_pickup_location" class="email_field" value="<?php echo $pickup_loacation_single_array_value['email_id_on_each_location'];?>" placeholder="Enter Email Id" style="width:20%; padding:7px;" />
     
      <input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][address_latitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_latitude" value="<?php echo $pickup_loacation_single_array_value['address_latitude'];?>" placeholder="Latitude" readonly="readonly" style="width:10%; padding:7px;" />    

    <input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][address_longitude]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_address_longitude" value="<?php echo $pickup_loacation_single_array_value['address_longitude'];?>" placeholder="Longitude"  readonly="readonly" style="width:10%; padding:7px;" />

    <span  id="del_pickup" class="pickup_location<?php echo $pickup_i; ?>">X</span>

	<br />

    <?php

	

	/**************/

	//echo '<hr />';

	$pickup_sun_week_days = $pickup_loacation_single_array_value['sun'];

	$pickup_mon_week_days = $pickup_loacation_single_array_value['mon'];

	$pickup_tue_week_days = $pickup_loacation_single_array_value['tue'];

	$pickup_wed_week_days = $pickup_loacation_single_array_value['wed'];

	$pickup_thu_week_days = $pickup_loacation_single_array_value['thu'];

	$pickup_fri_week_days = $pickup_loacation_single_array_value['fri'];

	$pickup_sat_week_days = $pickup_loacation_single_array_value['sat'];

	

	//echo '<hr />';

	/***************/

	//print_r($week_day_name);

	//print_r($pickup_mon_week_days);	

	if(!empty($pickup_sun_week_days))

	{

		$pickup_sun_first_key = key($pickup_sun_week_days);

	}

if(!empty($pickup_mon_week_days))

	{

		$pickup_mon_first_key = key($pickup_mon_week_days);

	}

if(!empty($pickup_tue_week_days))

	{

		$pickup_tue_first_key = key($pickup_tue_week_days);

	}

if(!empty($pickup_wed_week_days))

	{

		$pickup_wed_first_key = key($pickup_wed_week_days);

	}

if(!empty($pickup_thu_week_days))

	{

		$pickup_thu_first_key = key($pickup_thu_week_days);

	}

if(!empty($pickup_fri_week_days))

	{

		$pickup_fri_first_key = key($pickup_fri_week_days);

	}

if(!empty($pickup_sat_week_days))

	{

		$pickup_sat_first_key = key($pickup_sat_week_days);

	}

	

	echo '<div class="week_days_time_container">';

/* Sun Day */	

	if($pickup_sun_first_key == 'service')

	{?>

    	 <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][service]" class="byconsolewooodt_pickup_location_sun_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Sun</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_start_time<?php echo $pickup_loacation_single_array_key;?>" value="<?php echo $pickup_sun_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_end_time<?php echo $pickup_loacation_single_array_key;?>" value="<?php echo $pickup_sun_week_days['end_time'];?>" style="width: 95%;" />


			<div style="background-color:#ffa500;padding:2px;">

            

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_start_time<?php echo $pickup_loacation_single_array_key;?>" value="<?php echo $pickup_sun_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_end_time<?php echo $pickup_loacation_single_array_key;?>" value="<?php echo $pickup_sun_week_days['break_end_time'];?>" style="width: 95%;" />

			

            </div>


            

            </div>

            

	<?php 

	}	

	else

	{ ?>

			<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][service]" value="yes" class="byconsolewooodt_pickup_location_sun_service<?php echo $loopCountVal;?>" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Sun</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sun_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sun_week_days['end_time'];?>" style="width: 95%;" />



	<div style="background-color:#ffa500;padding:2px;">


             <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sun_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sun][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sun_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sun_week_days['break_end_time'];?>" style="width: 95%;" />

	</div>


            </div>

	<?php }

/* Mon Day */	

	if($pickup_mon_first_key == 'service')

	{

		

	?>	

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_service<?php echo $loopCountVal;?>" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Mon</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            </div>

            

	<?php }

	else

	{ ?>

		<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_service<?php echo $loopCountVal;?>" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Mon</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][mon][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_mon_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_mon_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            </div>

	<?php }

/* Tue Day */

	if($pickup_tue_first_key == 'service')

	{

		

	?>

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_service<?php echo $loopCountVal;?>" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Tue</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['start_time'];?>" style="width: 95%;" /><br/>            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            

            </div>

            

	<?php }

	else

	{ ?>

		<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_service<?php echo $loopCountVal;?>" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Tue</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][tue][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_tue_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_tue_week_days['break_end_time'];?>" style="width: 95%;" />


</div>


            </div>

	<?php }

/* Wed Day */

	if($pickup_wed_first_key == 'service')

	{		

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][service]" class="byconsolewooodt_pickup_location_wed_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Wed</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['start_time'];?>" style="width: 95%;" /><br/>            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

           </div> 

	<?php }

	else

	{ ?>

	

    <div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][service]" class="byconsolewooodt_pickup_location_wed_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Wed</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][wed][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_wed_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_wed_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

         </div>

	<?php }

/* Thu Day */

	if($pickup_thu_first_key == 'service')

	{

		

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][service]" class="byconsolewooodt_pickup_location_thu_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Thu</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

           </div>

            

	<?php }

	else

	{ ?>

	<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][service]" class="byconsolewooodt_pickup_location_thu_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Thu</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][thu][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_thu_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_thu_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

           </div>

	<?php }

	

/* Fri Day */

	if($pickup_fri_first_key == 'service')

	{

		

	?>

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][service]" class="byconsolewooodt_pickup_location_fri_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Fri</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            </div>

            

	<?php }

	else

	{ ?>

    	<div class="single_day_time">	

    <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][service]" class="byconsolewooodt_pickup_location_fri_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Fri</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][fri][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_fri_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_fri_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

            </div>

	<?php }

/* Sat Day */

	if($pickup_sat_first_key == 'service')

	{	

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][service]" class="byconsolewooodt_pickup_location_sat_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Sat</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['break_end_time'];?>" style="width: 95%;" />


</div>


            </div>

            

	<?php }

	else

	{ ?>

    

    <div class="single_day_time">

	

    <input type="checkbox" id="byconsolewooodt_pickup_location" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][service]" class="byconsolewooodt_pickup_location_sat_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Sat</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][break_start_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][sat][break_end_time]" id="byconsolewooodt_pickup_location" class="byconsolewooodt_pickup_location_sat_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $pickup_sat_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

           </div>

	<?php }	
	
	echo '</div>';
	?>

      



	<p class="please_note_text">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p>


    <div style="float: left; clear:both; width:12%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Hours Limit</p>

    <label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][threshold_hours]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['threshold_hours'];?>" style="width:50%; padding:7px;" />

</div>



<div style="float: left; width:12%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Minutes Limit</p>

    <label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][threshold_minutes]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['threshold_minutes'];?>" style="width:50%; padding:7px;" />

</div>

<div style="float: left; width:32%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Orders Limit</p>

    <label style="float:left; padding:5px;">order(s)</label><input type="text" name="byconsolewooodt_pickup_location[<?php echo $pickup_loacation_single_array_key;?>][max_order_by_threshold_hours]" id="byconsolewooodt_pickup_location" value="<?php echo $pickup_loacation_single_array_value['max_order_by_threshold_hours'];?>" style="width:50%; padding:7px;" /><label style="padding:5px;"></label>

</div>

<div style="float: left; width:38%; padding-top:25px;display:none;">

<p style="margin-top: 8px; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">In order to make this function work, please make sure "Limit [X] number of orders per [Y] hour(s)" has been checked on WooODT Features Settings page and <b style="color:#FF5722;">"Display time format as" is select as Fixed Time on ODT Management page.</b></p>

</div>

	</fieldset><br />

	

	<!--<input type="text" name="byconsolewooodt_pickup_location[][<?php echo $pickup_location_single_array_key; ?>]" id="byconsolewooodt_pickup_location" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),$pickup_location_single_array_value); ?>" />-->

	<?php 

	/*if($pickup_i % 4 == 0)

	{		

	$byconsolewooodt_division_val = $pickup_i / 4;

	$byconsolewooodt_division_addition_val = $byconsolewooodt_division_val + 1 ; 

	*/	

	//echo $abc = $pickup_i-3;

	//echo '<span  id="del_pickup" class="pickup_location'.$byconsolewooodt_division_val.'">X</span></fieldset><fieldset class="fldst pickup_location'.$byconsolewooodt_division_addition_val.'">';

	/*	}	

	}*/

	$pickup_i++;

	echo '<div class="after_location_field" style="border: 1px dotted #ccc;margin-bottom: 30px; margin-top: 15px;width: 90%;"></div>';
	
	$loopCountVal='';
	
	$loopCount++;

	}

	

}

?>

<div class="pickup_options">

</div>  

<fieldset class="fldst">

<input type="button" id="btn_pickup_add_another" value="Add" class="" />

<input type="button" id="byc_pickup_copy_value_to_another" name="byc_pickup_copy_value_to_another" value="Copy Time" />

</fieldset>

<?php

}

function byconsolewooodt_multiple_delivery_location_lebel(){

?>

<input type="checkbox" name="byconsolewooodt_multiple_delivery_location" id="byconsolewooodt_multiple_delivery_location" style="float: none; width: auto;" class="byconsolewooodt_admin_element_field checkbox" value="YES" <?php if( get_option('byconsolewooodt_multiple_delivery_location')=='YES'){?> checked="checked"<?php }?> />

<?php //echo __('Enable delivery locations.','ByConsoleWooODTExtended');

}

function byconsolewooodt_delivery_location(){
	?>
	<style>
.location_fields_heading{width:100%;}	
.location_fields_heading .disable_lable{width: 8%;float: left;}
.location_fields_heading .location_lable{width: 22%;float: left;}
.location_fields_heading .latitude_lable{width: 10%;float: left;}
.location_fields_heading .longitude_lable{width: 11%;float: left;}
.location_fields_heading .start_time_lable{width: 11%;float: left; display:none;}
.location_fields_heading .end_time_lable{width: 9%;float: left; display:none;}
.location_fields_heading .min_cart_lable{width: 9%;float: left;}
.location_fields_heading .shipping_cost_lable{width: 9%;float: left;}
.location_fields_heading .email_lable{width: 21%;float: left;}
.fldst{clear:both;}
.fldst input[type=text]{float:left;}
.fldst input[type=number]{float:left;}
.week_days_time_container{clear:both;}
#del_delivery{border-radius: 3px;cursor: pointer;background-color: #000;color: #fff;padding: 7px;margin-left: 8px;float: left;}
.week_days_time_container .single_day_time{width:13%;float:left;}
.please_note_text{clear:both; background-color: #0000005c;color: #fff;width: 90%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;display: inline-block;}
#for_mobile_version{display:none;}
#for_desktop_version{display:block;}

#byc_delivery_copy_value_to_another{background-color: #000;color: #fff;border: none;padding: 5px;}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
/* Styles */
.location_fields_heading{font-size:10px;}
.location_fields_heading .disable_lable{width: 12%;float: left;}
.location_fields_heading .location_lable{width: 15%;float: left;}
.location_fields_heading .latitude_lable{width: 15%;float: left;}
.location_fields_heading .longitude_lable{width: 15%;float: left;}
.location_fields_heading .start_time_lable{width: 15%;float: left; display:none;}
.location_fields_heading .end_time_lable{width: 15%;float: left; display:none;}
.location_fields_heading .min_cart_lable{width: 15%;float: left;}
.location_fields_heading .shipping_cost_lable{width: 15%;float: left;}
.fldst input[type=text]{float:left;width:100% !important;}
.fldst input[type=number]{float:left;width:100% !important;}
#del_delivery{float:none;}
.week_days_time_container .single_day_time{width:32%;float:left;}
.please_note_text{background-color: #0000005c;color: #fff;width: 50%;font-weight: 600;padding: 5px 7px;font-size: 13px;text-align: center;display: inline-block;margin-left:10%;}
#for_mobile_version{display:block;}
#for_desktop_version{display:none;}
}

	</style>
	<?php

	if ( is_plugin_active( 'ByConsoleWooODTExtendedMapAddon/ByConsoleWooODTExtendedMapAddon.php' ) ) {	} 

	else 

	{ 

	?>

    <style>

	.byconsolewooodt_delivery_location_address_latitude{display:none !important;}

	.byconsolewooodt_delivery_location_address_longitude{display:none !important;} 	

	#location_field{width:30% !important;}

	.email_field{width:26% !important;}

	.latitude_lable{display:none !important;}

	.longitude_lable{display:none !important;}
	
	#byc_delivery_copy_value_to_another{background-color: #000;
    color: #fff;
    font-weight: 500;
    border-radius: 2px;
	border: 0px;
    padding: 6px;}
	
	#del_delivery{background-color: #000;
    color: #fff;
    padding: 7px;
    margin-left: 10px;
    border-radius: 3px;}
	</style>

	<?php }

$byconsolwooodtgetalldeliverylocation=get_option('byconsolewooodt_delivery_location');

//print_r($byconsolwooodtgetalldeliverylocation);

if (!empty($byconsolwooodtgetalldeliverylocation))

{ 

foreach ($byconsolwooodtgetalldeliverylocation as $byconsolwooodtgetalldeliverylocation_key => $byconsolwooodtgetalldeliverylocation_val)

{

$byconsolwooodtgetalldeliverylocation_key_value[]=$byconsolwooodtgetalldeliverylocation_key;

//print_r($byconsolwooodtgetalldeliverylocation_key_value);

}	

}

else

{

//echo 'Location Is Empty.<br/>';

}	

?>

<script type="text/javascript">

jQuery(document).ready(function() {	

//byconsolewooodt_delivery_location_count=<?php //echo count(get_option('byconsolewooodt_delivery_location'));?>;

byconsolewooodt_delivery_location_count= 

<?php  if (empty($byconsolwooodtgetalldeliverylocation_key_value)){ echo '0' ;} else { echo end($byconsolwooodtgetalldeliverylocation_key_value); }?>

//alert(byconsolewooodt_delivery_location_count);

jQuery('#btn_delivery_add_another').click(function(){			 

// byconsolewooodt_delivery_location_count++;

byconsolewooodt_delivery_location_count+=1;

//alert(byconsolewooodt_delivery_location_count);

jQuery('.delivery_options').append('<div class="location_fields_heading" id="for_mobile_version"><div class="disable_lable" style=""><b>Disable</b></div><div class="location_lable" style=""><b>Location</b></div><div class="start_time_lable" style=""><b>Start Time</b></div><div class="end_time_lable" style=""><b>End Time</b></div><div class="min_cart_lable" style=""><b>Min Cart Price</b></div><div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div><div class="email_lable"><b>Email Id</b></div><div class="latitude_lable" style=""><b>Latitude</b></div><div class="longitude_lable" style=""><b>Longitude</b></div></div><fieldset class="fldst delivery_location'+byconsolewooodt_delivery_location_count+'"><input type="checkbox" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][location_disable]" id="byconsolewooodt_delivery_location" value="disable"  style="float: left;margin-top: 10px;width: 5px;" /><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][location]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location'+byconsolewooodt_delivery_location_count+'" placeholder="Delivery Location" value="" onchange="location_finder(this)" style="width:25%; padding:7px;" /><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][start_time]" id="byconsolewooodt_delivery_location" value="" style="width:10%; padding:7px;display:none;" /><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][end_time]" id="byconsolewooodt_delivery_location" value="" style="width:10%; padding:7px;display:none;" /><input type="number" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][min_cart_value]" id="byconsolewooodt_delivery_location" placeholder="Delivery Price" value="" style="width:10%; padding:7px;height: 35px;" /><input type="number" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][shipping_cost]" id="byconsolewooodt_delivery_location" placeholder="Shipping Cost" value="" style="width:10%; padding:7px;height: 35px;" /><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][email_id_on_each_location]" id="byconsolewooodt_delivery_location" placeholder="Enter Email Id" class="email_field" value="" style="width:20%; padding:7px;" /><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][address_latitude]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_address_latitude" placeholder="Latitude" value="" readonly="readonly" style="width:10%; padding:7px;" /><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][address_longitude]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_address_longitude" placeholder="Longitude" value="" readonly="readonly" style="width:10%; padding:7px;" /><span id="del_delivery" class="delivery_location'+byconsolewooodt_delivery_location_count+'" style="cursor:pointer;">X</span><br /><div class="week_days_time_container"><div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sun][service]" class="byconsolewooodt_delivery_location_sun_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Sun</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sun][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sun][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sun][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sun][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][mon][service]" class="byconsolewooodt_delivery_location_mon_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Mon</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][mon][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][mon][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][mon][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][mon][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][tue][service]" class="byconsolewooodt_delivery_location_tue_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Tue</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][tue][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][tue][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][tue][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][tue][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][wed][service]" class="byconsolewooodt_delivery_location_wed_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Wed</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][wed][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][wed][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][wed][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][wed][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][thu][service]" class="byconsolewooodt_delivery_location_thu_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Thu</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][thu][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][thu][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][thu][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][thu][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][fri][service]" class="byconsolewooodt_delivery_location_fri_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Fri</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][fri][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][fri][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][fri][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][fri][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div>&nbsp;<div class="single_day_time"><input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sat][service]" class="byconsolewooodt_delivery_location_sat_service" value="yes" style="margin-top: 10px;width: 5px;float:left;"><p style="margin-top: 8px;">Sat</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sat][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sat][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><div style="background-color:#ffa500;padding:2px;"><p style="margin-top: 6px;text-align: center; color: #000;font-weight:bold;font-size: 10px;margin-bottom: 6px;">Break Time</p><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sat][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_start_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /><br/><input type="time" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][sat][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_end_time'+byconsolewooodt_delivery_location_count+'" value="" style="width: 95%;" /></div></div></div><p class="please_note_text">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p><div style="float: left; clear:both; width:12%;display:none; "><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Hours Limit</p><label style="float:left; padding:7px;">Limit</label><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][threshold_hours]" id="byconsolewooodt_delivery_location" value="" style="width: 50%;" /></div><div style="float: left; width:12%;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Minutes Limit</p><label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][threshold_minutes]" id="byconsolewooodt_delivery_location" value="" style="width:50%; padding:7px;" /></div><div style="float: left; width:32%;display:none;"><p style="margin-top: 8px; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Orders Limit</p><label style="float:left; padding:7px;">order(s)</label><input type="text" name="byconsolewooodt_delivery_location['+byconsolewooodt_delivery_location_count+'][max_order_by_threshold_hours]" id="byconsolewooodt_delivery_location" value="" style="width: 50%;" /><label style="padding:7px;"></label></div></div><div style="float: left; width:38%; padding-top:25px;display:none;"><p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">In order to make this function work, please make sure "Limit [X] number of orders per [Y] hour(s)" has been checked on WooODT Features Settings page and <b style="color:#FF5722;">"Display time format as" is select as Fixed Time on ODT Management page.</b></p></div></fieldset><br />');

jQuery("#delivery_last_array_key").val(byconsolewooodt_delivery_location_count);

});

	

});

</script>

<?php 

//$byconsolewooodt_delivery_loacation= unserialize(get_option('byconsolewooodt_delivery_location'));

$byconsolewooodt_delivery_loacation_array= get_option('byconsolewooodt_delivery_location');

//print_r( $byconsolewooodt_delivery_loacation_array);
end($byconsolewooodt_delivery_loacation_array);         // move the internal pointer to the end of the array
$deliveryLastKey = key($byconsolewooodt_delivery_loacation_array); 
?>

<input type="hidden" name="delivery_last_array_key" id="delivery_last_array_key" value="<?php echo $deliveryLastKey;?>" />
 

<div class="location_fields_heading" id="for_desktop_version">

<div class="disable_lable" style=""><b>Disable</b></div>

<div class="location_lable" style=""><b>Location</b></div>

<div class="start_time_lable" style=""><b>Start Time</b></div>

<div class="end_time_lable" style=""><b>End Time</b></div>

<div class="min_cart_lable" style=""><b>Min Cart Price</b></div>

<div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div>

<div class="email_lable"><b>Email Id</b></div>

<div class="latitude_lable" style=""><b>Latitude</b></div>

<div class="longitude_lable" style=""><b>Longitude</b></div>

</div><br />

<?php

if(!empty($byconsolewooodt_delivery_loacation_array)){

$delivery_i=0;

?>

<?php 

$week_day_name_array = array("sun", "mon", "tue", "wed", "thu", "fri", "sat");

//echo '<pre>';

//print_r($byconsolewooodt_delivery_loacation_array);

//echo '</pre>';

	$loopCount = 1;

	foreach ($byconsolewooodt_delivery_loacation_array as $delivery_loacation_single_array_key => $delivery_loacation_single_array_value)

	{

	//print_r($byconsolewooodt_delivery_loacation_single_array);	

	//print_r($delivery_loacation_single_array_key);

	//print_r($delivery_loacation_single_array_value);

	//foreach($delivery_location_array_value as $delivery_location_single_array_key => $delivery_location_single_array_value)

	//{

	//print_r($delivery_location_single_array_value);

	

	

	foreach($delivery_loacation_single_array_value as $delivery_loacation_single_array_value_key_1 => $delivery_loacation_single_array_value_val_1)

	{

		//print_r($delivery_loacation_single_array_value_key_1);

		//echo '<hr />';

		//print_r($delivery_loacation_single_array_value_val_1);

	}

	

	if(!empty($delivery_loacation_single_array_value['week_day']))

	{

		$byconsolewoodt_weekday_name_array = $delivery_loacation_single_array_value['week_day'];

	}

	

	if(!empty($delivery_loacation_single_array_value['week_day_start_time']))

	{

		$byconsolewoodt_week_day_start_time_array = $delivery_loacation_single_array_value['week_day_start_time'];

	}

	

	if(!empty($delivery_loacation_single_array_value['week_day_end_time']))

	{

		$byconsolewoodt_week_day_end_time_array = $delivery_loacation_single_array_value['week_day_end_time'];

	}

	//print_r($byconsolewoodt_weekday_name_array);

	//print_r($byconsolewoodt_week_day_start_time_array);

	//print_r($byconsolewoodt_week_day_end_time_array);

	


	

	if(!empty($byconsolewoodt_week_day_start_time_array))

	{

	

		foreach($byconsolewoodt_week_day_start_time_array as $byconsolewoodt_week_day_start_time_single_array)

		{

			$byconsolewoodt_week_day_start_time_single_array; 

		}

	

	}

	if($loopCount == 1){
		$loopCountVal = 1;	
	}else{
		$loopCountVal = '';
	}

	?>
    
<div class="location_fields_heading" id="for_mobile_version">

<div class="disable_lable" style=""><b>Disable</b></div>

<div class="location_lable" style=""><b>Location</b></div>

<div class="start_time_lable" style=""><b>Start Time</b></div>

<div class="end_time_lable" style=""><b>End Time</b></div>

<div class="min_cart_lable" style=""><b>Min Cart Price</b></div>

<div class="shipping_cost_lable" style=""><b>Shipping Cost</b></div>

<div class="email_lable"><b>Email Id</b></div>

<div class="latitude_lable" style=""><b>Latitude</b></div>

<div class="longitude_lable" style=""><b>Longitude</b></div>

</div>

	<fieldset class="fldst delivery_location<?php echo $delivery_i;?>">

	<input type="checkbox" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][location_disable]" id="byconsolewooodt_delivery_location" 

	<?php if(!empty($delivery_loacation_single_array_value['location_disable']))

		  {

				if($delivery_loacation_single_array_value['location_disable']=='on') {?> checked="checked" <?php } 

		  }

	?>  style="float: left;margin-top: 10px;width: 5px;" />

	<input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][location]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location<?php echo $delivery_i;?>" value="<?php echo $delivery_loacation_single_array_value['location'];?>" placeholder="Location" style="width:25%; padding:7px;" onchange="location_finder(this)"/>

	<input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][start_time]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['start_time'];?>" style="width:10%; padding:7px;display:none;" />

	<input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][end_time]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['end_time'];?>" style="width:10%; padding:7px;display:none;" />

	<input type="number" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][min_cart_value]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['min_cart_value'];?>" placeholder="Delivery Price" style="width:10%; padding:7px;height: 35px;" />

    

    <input type="number" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][shipping_cost]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['shipping_cost'];?>" placeholder="Shipping Cost" style="width:10%; padding:7px;height: 35px;" />

     <input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][email_id_on_each_location]" id="byconsolewooodt_delivery_location" class="email_field" value="<?php echo $delivery_loacation_single_array_value['email_id_on_each_location'];?>" placeholder="Enter Email Id" style="width:20%; padding:7px;" />
     
      <input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][address_latitude]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_address_latitude" value="<?php echo $delivery_loacation_single_array_value['address_latitude'];?>" placeholder="Latitude" readonly="readonly" style="width:10%; padding:7px;" />    

    <input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][address_longitude]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_address_longitude" value="<?php echo $delivery_loacation_single_array_value['address_longitude'];?>" placeholder="Longitude"  readonly="readonly" style="width:10%; padding:7px;" />

    <span  id="del_delivery" class="delivery_location<?php echo $delivery_i; ?>">X</span>

	<br />

    <?php

	

	/**************/

	//echo '<hr />';

	$delivery_sun_week_days = $delivery_loacation_single_array_value['sun'];

	$delivery_mon_week_days = $delivery_loacation_single_array_value['mon'];

	$delivery_tue_week_days = $delivery_loacation_single_array_value['tue'];

	$delivery_wed_week_days = $delivery_loacation_single_array_value['wed'];

	$delivery_thu_week_days = $delivery_loacation_single_array_value['thu'];

	$delivery_fri_week_days = $delivery_loacation_single_array_value['fri'];

	$delivery_sat_week_days = $delivery_loacation_single_array_value['sat'];

	

	//echo '<hr />';

	/***************/

	//print_r($week_day_name);

	//print_r($delivery_mon_week_days);	

	if(!empty($delivery_sun_week_days))

	{

		$delivery_sun_first_key = key($delivery_sun_week_days);

	}

if(!empty($delivery_mon_week_days))

	{

		$delivery_mon_first_key = key($delivery_mon_week_days);

	}

if(!empty($delivery_tue_week_days))

	{

		$delivery_tue_first_key = key($delivery_tue_week_days);

	}

if(!empty($delivery_wed_week_days))

	{

		$delivery_wed_first_key = key($delivery_wed_week_days);

	}

if(!empty($delivery_thu_week_days))

	{

		$delivery_thu_first_key = key($delivery_thu_week_days);

	}

if(!empty($delivery_fri_week_days))

	{

		$delivery_fri_first_key = key($delivery_fri_week_days);

	}

if(!empty($delivery_sat_week_days))

	{

		$delivery_sat_first_key = key($delivery_sat_week_days);

	}

	

	echo '<div class="week_days_time_container">';

/* Sun Day */	

	if($delivery_sun_first_key == 'service')

	{?>

    	 <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][service]" class="byconsolewooodt_delivery_location_sun_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Sun</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_start_time<?php echo $delivery_loacation_single_array_key;?>" value="<?php echo $delivery_sun_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_end_time<?php echo $delivery_loacation_single_array_key;?>" value="<?php echo $delivery_sun_week_days['end_time'];?>" style="width: 95%;" />


			<div style="background-color:#ffa500;padding:2px;">

            

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_start_time<?php echo $delivery_loacation_single_array_key;?>" value="<?php echo $delivery_sun_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_end_time<?php echo $delivery_loacation_single_array_key;?>" value="<?php echo $delivery_sun_week_days['break_end_time'];?>" style="width: 95%;" />

			

            </div>


            

            </div>

            

	<?php 

	}	

	else

	{ ?>

			<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][service]" value="yes" class="byconsolewooodt_delivery_location_sun_service<?php echo $loopCountVal;?>" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Sun</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sun_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sun_week_days['end_time'];?>" style="width: 95%;" />



	<div style="background-color:#ffa500;padding:2px;">


             <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sun_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sun][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sun_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sun_week_days['break_end_time'];?>" style="width: 95%;" />

	</div>


            </div>

	<?php }

/* Mon Day */	

	if($delivery_mon_first_key == 'service')

	{

		

	?>	

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_service<?php echo $loopCountVal;?>" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Mon</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            </div>

            

	<?php }

	else

	{ ?>

		<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_service<?php echo $loopCountVal;?>" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Mon</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][mon][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_mon_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_mon_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            </div>

	<?php }

/* Tue Day */

	if($delivery_tue_first_key == 'service')

	{

		

	?>

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_service<?php echo $loopCountVal;?>" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Tue</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['start_time'];?>" style="width: 95%;" /><br/>            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            

            </div>

            

	<?php }

	else

	{ ?>

		<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_service<?php echo $loopCountVal;?>" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][service]" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Tue</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][tue][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_tue_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_tue_week_days['break_end_time'];?>" style="width: 95%;" />


</div>


            </div>

	<?php }

/* Wed Day */

	if($delivery_wed_first_key == 'service')

	{		

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][service]" class="byconsolewooodt_delivery_location_wed_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Wed</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['start_time'];?>" style="width: 95%;" /><br/>            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

           </div> 

	<?php }

	else

	{ ?>

	

    <div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][service]" class="byconsolewooodt_delivery_location_wed_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Wed</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][wed][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_wed_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_wed_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

         </div>

	<?php }

/* Thu Day */

	if($delivery_thu_first_key == 'service')

	{

		

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][service]" class="byconsolewooodt_delivery_location_thu_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Thu</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

           </div>

            

	<?php }

	else

	{ ?>

	<div class="single_day_time">

    <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][service]" class="byconsolewooodt_delivery_location_thu_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Thu</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][thu][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_thu_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_thu_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

           </div>

	<?php }

	

/* Fri Day */

	if($delivery_fri_first_key == 'service')

	{

		

	?>

    	<div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][service]" class="byconsolewooodt_delivery_location_fri_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Fri</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['break_end_time'];?>" style="width: 95%;" />

</div>


            </div>

            

	<?php }

	else

	{ ?>

    	<div class="single_day_time">	

    <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][service]" class="byconsolewooodt_delivery_location_fri_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Fri</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][fri][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_fri_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_fri_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

            

            </div>

	<?php }

/* Sat Day */

	if($delivery_sat_first_key == 'service')

	{	

	?>

    <div class="single_day_time">

		 <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][service]" class="byconsolewooodt_delivery_location_sat_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;" checked="checked">

         <p style="margin-top: 8px; text-transform:capitalize;">Sat</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['start_time'];?>" style="width: 95%;" /><br/>

            

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['end_time'];?>" style="width: 95%;" />

            



<div style="background-color:#ffa500;padding:2px;">


            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['break_end_time'];?>" style="width: 95%;" />


</div>


            </div>

            

	<?php }

	else

	{ ?>

    

    <div class="single_day_time">

	

    <input type="checkbox" id="byconsolewooodt_delivery_location" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][service]" class="byconsolewooodt_delivery_location_sat_service<?php echo $loopCountVal;?>" value="yes" style="margin-top: 10px;width: 5px;float:left;">

         <p style="margin-top: 8px; text-transform:capitalize;">Sat</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['end_time'];?>" style="width: 95%;" />

            


<div style="background-color:#ffa500;padding:2px;">

            <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #000; font-weight:bold;">Break Time</p>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][break_start_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_start_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['break_start_time'];?>" style="width: 95%;" /><br/>

            <input type="time" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][sat][break_end_time]" id="byconsolewooodt_delivery_location" class="byconsolewooodt_delivery_location_sat_break_end_time<?php echo $loopCountVal;?>" value="<?php echo $delivery_sat_week_days['break_end_time'];?>" style="width: 95%;" />


</div>



            

           </div>

	<?php }	
	
	echo '</div>';
	?>

      



	<p class="please_note_text">Please note - break time will be between start time and end time. If no break time then use same time i.e 2:00 P.M - 2:00 P.M</p>


    <div style="float: left; clear:both; width:12%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Hours Limit</p>

    <label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][threshold_hours]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['threshold_hours'];?>" style="width:50%; padding:7px;" />

</div>



<div style="float: left; width:12%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Minutes Limit</p>

    <label style="float:left; padding:6px;">Limit</label><input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][threshold_minutes]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['threshold_minutes'];?>" style="width:50%; padding:7px;" />

</div>

<div style="float: left; width:32%;display:none;">

     <p style="margin-top: 8px; text-transform:capitalize; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">Orders Limit</p>

    <label style="float:left; padding:5px;">order(s)</label><input type="text" name="byconsolewooodt_delivery_location[<?php echo $delivery_loacation_single_array_key;?>][max_order_by_threshold_hours]" id="byconsolewooodt_delivery_location" value="<?php echo $delivery_loacation_single_array_value['max_order_by_threshold_hours'];?>" style="width:50%; padding:7px;" /><label style="padding:5px;"></label>

</div>

<div style="float: left; width:38%; padding-top:25px;display:none;">

<p style="margin-top: 8px; margin-bottom: 8px;font-size: 10px;text-align: center; color: #2231ff;">In order to make this function work, please make sure "Limit [X] number of orders per [Y] hour(s)" has been checked on WooODT Features Settings page and <b style="color:#FF5722;">"Display time format as" is select as Fixed Time on ODT Management page.</b></p>

</div>

	</fieldset><br />

	

	<!--<input type="text" name="byconsolewooodt_delivery_location[][<?php echo $delivery_location_single_array_key; ?>]" id="byconsolewooodt_delivery_location" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),$delivery_location_single_array_value); ?>" />-->

	<?php 

	/*if($delivery_i % 4 == 0)

	{		

	$byconsolewooodt_division_val = $delivery_i / 4;

	$byconsolewooodt_division_addition_val = $byconsolewooodt_division_val + 1 ; 

	*/	

	//echo $abc = $delivery_i-3;

	//echo '<span  id="del_delivery" class="delivery_location'.$byconsolewooodt_division_val.'">X</span></fieldset><fieldset class="fldst delivery_location'.$byconsolewooodt_division_addition_val.'">';

	/*	}	

	}*/

	$delivery_i++;

	echo '<div class="after_location_field" style="border: 1px dotted #ccc;margin-bottom: 30px; margin-top: 15px;width: 90%;"></div>';
	
	$loopCountVal='';
	
	$loopCount++;

	}

	

}

?>

<div class="delivery_options">

</div>  

<fieldset class="fldst">

<input type="button" id="btn_delivery_add_another" value="Add" class="" />

<input type="button" id="byc_delivery_copy_value_to_another" name="byc_delivery_copy_value_to_another" value="Copy Time" />

</fieldset>

<?php

}

/************************** Location Setting End ***********************************/

?>