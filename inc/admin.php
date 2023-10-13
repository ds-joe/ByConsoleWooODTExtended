<?php



// add mmenu



add_action('admin_menu','byconsolewooodt_add_plugin_menu');





function byconsolewooodt_add_plugin_menu(){





global $byconsolewooodt_admin_settings;





global $byconsolewooodt_admin_settings_holidays;





global $byconsolewooodt_admin_feature_settings;





global $byconsolewooodt_admin_location_settings;





global $byconsolewooodt_admin_language_translator_settings;





global $byconsolewooodt_admin_color_picker_settings;





global $byconsolewooodt_admin_delivery_pickup_van_management;



global $byconsolewooodt_admin_day_wise_charges;


global $byconsolewooodt_admin_special_dates_charges;

global $byconsolewooodt_admin_all_fields_settings;











$icon_url   = 'dashicons dashicons-admin-site-alt3';





$byconsolewooodt_admin_settings=add_menu_page( 'ByConsole Order Delivery Time', 'ODT Settings', 'manage_options', 'byconsolewooodt_general_settings', 'byconsolewooodt_admin_all_fields_settings_form',plugin_dir_url( __FILE__ ) . '../images/bycwooodt_admin_menu_icon.png');


$byconsolewooodt_admin_settings_holidays=add_submenu_page('byconsolewooodt_general_settings', 'Order Details Calendar','Order Details Calendar', 'manage_options', 'byconsolewooodt_admin_delivery_pickup_calender_settings_page', 'byconsolewooodt_admin_delivery_pickup_calender_settings_form');




/*
$byconsolewooodt_admin_feature_settings=add_submenu_page('byconsolewooodt_general_settings', 'Features Settings','Features Settings', 'manage_options', 'byconsolewooodt_wooodt_features_settings_page', 'byconsolewooodt_admin_wooodt_features_settings_form');





$byconsolewooodt_admin_location_settings=add_submenu_page('byconsolewooodt_general_settings', 'Location Settings','Location Settings', 'manage_options', 'byconsolewooodt_wooodt_location_settings_page', 'byconsolewooodt_admin_wooodt_location_settings_form');





$byconsolewooodt_admin_language_translator_settings=add_submenu_page('byconsolewooodt_general_settings', 'Language Translator Settings','Language Translator', 'manage_options', 'byconsolewooodt_admin_language_translator_settings_page', 'byconsolewooodt_admin_language_translator_settings_form');





$byconsolewooodt_admin_color_picker_settings=add_submenu_page('byconsolewooodt_general_settings', 'Color Picker Settings','Color Picker Settings', 'manage_options', 'byconsolewooodt_admin_color_picker_settings_page', 'byconsolewooodt_admin_color_picker_settings_form');





$byconsolewooodt_admin_delivery_pickup_van_management=add_submenu_page('byconsolewooodt_general_settings', 'Van Manage Settings','Van Manage Settings', 'manage_options', 'byconsolewooodt_admin_delivery_pickup_van_management_settings_page', 'byconsolewooodt_admin_delivery_pickup_van_management_settings_form');


$byconsolewooodt_admin_day_wise_charges=add_submenu_page('byconsolewooodt_general_settings', 'Day wise charges','Day wise charges', 'manage_options', 'byconsolewooodt_admin_day_wise_charges_settings_page', 'byconsolewooodt_admin_day_wise_charges_settings_form');



$byconsolewooodt_admin_special_dates_charges=add_submenu_page('byconsolewooodt_general_settings', 'Special Dates charges','Special Dates charges', 'manage_options', 'byconsolewooodt_admin_special_dates_charges_settings_page', 'byconsolewooodt_admin_special_dates_charges_settings_form');


$byconsolewooodt_admin_all_fields_settings = add_submenu_page('byconsolewooodt_general_settings', 'All fields','All fields', 'manage_options', 'byconsolewooodt_admin_all_fields_settings_page', 'byconsolewooodt_admin_all_fields_settings_form');*/
}



include('bycwooodt_delivery_pickup_calender_settings.php');

include('wooodt_delivery_pickup_van_management_settings.php');

include('bycwooodt_location_field_settings.php');

include('bycwooodt_day_wise_charges.php');

include('bycwooodt_holidays_&_dates_management.php');

include('bycwooodt_special_dates_charges_settings.php');

include('bycwooodt_all_fields_settings.php');

/*
* Holiday Management has been removed from Here..
*/

function byconsolewooodt_admin_wooodt_location_settings_form() 





{?>





<div class="wrap">





<h1>ByConsole Woocommerce Order Delivery Location Settings</h1>





<form method="post" class="form_byconsolewooodt_wooodt_location_settings" action="options.php">





<?php





settings_fields("wooodtlocationsetting");





do_settings_sections("byconsolewooodt_wooodt_location_settings_options");





submit_button(); 





?>          





</form>





</div>	





<?php 





}





















function byconsolewooodt_admin_general_settings_form()





{





?>





<div class="wrap">





<h1>ByConsole Woocommerce Order Delivery Time management settings pannel</h1>





<form method="post" class="form_byconsolewooodt_plugin_settings" action="options.php">





<?php





settings_fields("section");





do_settings_sections("byconsolewooodt_plugin_options");      





submit_button(); 





?>          





</form>





</div>





<?php }





function byconsolewooodt_chekout_page_section_heading()





{





?>





<input type="text" name="byconsolewooodt_chekout_page_section_heading" id="byconsolewooodt_chekout_page_section_heading" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_section_heading')); ?>"/>





<label><?php echo __('Texts to display on checkout page as section heading.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: Desired delivery date and time)</span>





<?php





}











function byconsolewooodt_hours_format()





{                                        





?>





<select id="byconsolewooodt_hours_format" name="byconsolewooodt_hours_format" class="bycwooodt_admin_fields_design" style="width:35%;" >





<option   value="H:i" <?php if( get_option('byconsolewooodt_hours_format')=='H:i'){?> selected="selected"<?php }?> >24 hours</option>





<option   value="h:i A"<?php if( get_option('byconsolewooodt_hours_format')=='h:i A'){?> selected="selected"<?php }?> >12 hours</option>





</select>





<label><?php echo __('24 hours or 12 hours with AM / PM.','ByConsoleWooODTExtended');?> </label>





<?php





}











function display_time_formate_as()





{





	$display_time_formate_as_val = get_option('display_time_formate_as');





?>



















<label for="display_time_formate_as">



	<input type="radio" name="display_time_formate_as" id="display_time_formate_as" value="time_slot" class="byconsolewooodt_admin_element_field radio" <?php if($display_time_formate_as_val == 'time_slot') {?> checked="checked" <?php }?>  />&nbsp; <p>Time Slot</p></label>



















<label for="display_time_formate_as">



    <input type="radio" name="display_time_formate_as" id="display_time_formate_as" value="fixed_time" class="byconsolewooodt_admin_element_field radio" <?php if($display_time_formate_as_val == 'fixed_time') {?> checked="checked" <?php }?>  />&nbsp;<p> Fixed Time</p></label>





<?php	





}











function byconsolewooodt_preorder_days()





{





?>





<input type="number" name="byconsolewooodt_preorder_days" id="byconsolewooodt_preorder_days" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_preorder_days')); ?>" class="bycwooodt_admin_fields_design"/>





<label><?php echo __('Leave blank not to set any pre-order days, this is number of days from current date customer can place an order.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: 10 Only number)</span>





<?php





}





function byconsolewooodt_restricted_preorder_days()





{





?>





<input type="number" name="byconsolewooodt_restricted_preorder_days" id="byconsolewooodt_restricted_preorder_days" style="width:30%; padding:7px;" class="bycwooodt_admin_fields_design" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_restricted_preorder_days')); ?>"/>





<label><?php echo __('Leave blank to not set any restricted pre-order days,This is number of days customer can not place an order before these number of days from current date.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: 7 ; Only number)</span>





<?php





}











function byconsolewooodt_exclude_holidays_from_preorder_restriction_days()











{











	$byconsolewooodt_exclude_holidays_from_preorder_restriction_days = get_option('byconsolewooodt_exclude_holidays_from_preorder_restriction_days');











?>







<label>



<input type="checkbox" name="byconsolewooodt_exclude_holidays_from_preorder_restriction_days" id="byconsolewooodt_exclude_holidays_from_preorder_restriction_days" class="byconsolewooodt_admin_element_field checkbox" value="YES" <?php if($byconsolewooodt_exclude_holidays_from_preorder_restriction_days == 'YES') { ?> checked="checked" <?php } ?> style="float: left;width: 0%;margin-top:-12px;margin-bottom:10px;" />



<?php echo __('If checked then it will increase lead time by x number of days, where x is the number of holidays fall within above pre-order restriction days counted from current date. ');?></label><br />



<?php







}











function byconsolewooodt_allow_orders_on_closing_days()



{







	$byconsolewooodt_allow_orders_on_closing_days = get_option('byconsolewooodt_allow_orders_on_closing_days');



?>



<label>



<input type="checkbox" name="byconsolewooodt_allow_orders_on_closing_days" id="byconsolewooodt_allow_orders_on_closing_days" value="YES" class="byconsolewooodt_admin_element_field checkbox" <?php if($byconsolewooodt_allow_orders_on_closing_days == 'YES') { ?> checked="checked" <?php } ?> style="float: left;width: 0%;margin-top:-12px;" />



<?php echo __('If checked then shop will accept order on holidays.');?></label><br />



<?php	







}











function byconsolewooodt_opening_hours()





{





?>





<label><?php echo __('From','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_opening_hours_from" id="byconsolewooodt_opening_hours_from" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_opening_hours_from')); ?>" />





<label><?php echo __('To','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_opening_hours_to" class="bycwooodt_admin_fields_design" id="byconsolewooodt_opening_hours_to" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_opening_hours_to')); ?>" />





<label><?php echo __('Allowbale Pickup Time.','ByConsoleWooODTExtended');?></label>





<?php





}





function byconsolewooodt_delivery_hours()





{





?>





<label><?php echo __('From','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_delivery_hours_from" id="byconsolewooodt_delivery_hours_from" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_hours_from')); ?>" />





<label><?php echo __('To','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_delivery_hours_to" id="byconsolewooodt_delivery_hours_to" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_hours_to')); ?>" />





<label><?php echo __('Allowbale Delivery Time.','ByConsoleWooODTExtended');?></label>





<?php





}



function byconsolewooodt_pickup_wait_times()
{
?>

<input type="number" name="byconsolewooodt_pickup_wait_times" id="byconsolewooodt_pickup_wait_times" style="width:30%; padding:7px;" class="bycwooodt_admin_fields_design" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_pickup_wait_times')); ?>" />

<label> <?php echo __('This is minimum waiting time for pickup, applied on time dropdown on front-end in case of same day delivery/pickup.','ByConsoleWooODTExtended');?></label><br />

<span style="color:#a0a5aa">(Eg: 30, only numbers of minutes )</span>





<?php





}



function byconsolewooodt_delivery_times()





{





?>





<input type="number" name="byconsolewooodt_delivery_times" id="byconsolewooodt_delivery_times" style="width:30%; padding:7px;" class="bycwooodt_admin_fields_design" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_times')); ?>" />





<label> <?php echo __('This is minimum waiting time for delivery, applied on time dropdown on front-end in case of same day delivery/pickup.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: 30, only numbers of minutes )</span>





<?php





}













function byconsolewooodt_same_day_pickup_order_placing_cutout_time()















{















?>















<input type="time" name="byconsolewooodt_same_day_pickup_order_placing_cutout_time" id="byconsolewooodt_same_day_pickup_order_placing_cutout_time" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_same_day_pickup_order_placing_cutout_time')); ?>" />















<label> <?php echo __('Customers need to place an order before this time for next day pickup, leave balnk for no restriction.','ByConsoleWooODTExtended');?></label><br />















<span style="color:#a0a5aa">(Eg: 30 )</span>















<?php















}















function byconsolewooodt_same_day_delivery_order_placing_cutout_time()















{















?>















<input type="time" name="byconsolewooodt_same_day_delivery_order_placing_cutout_time" id="byconsolewooodt_same_day_delivery_order_placing_cutout_time" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_same_day_delivery_order_placing_cutout_time')); ?>" />















<label> <?php echo __('Customers need to place an order before this time for next day delivery, leave balnk for no restriction.','ByConsoleWooODTExtended');?></label><br />















<span style="color:#a0a5aa">(Eg: 30 )</span>















<?php















}





















function byconsolewooodt_next_day_pickup_order_placing_cutout_time()





{





?>





<input type="time" name="byconsolewooodt_next_day_pickup_order_placing_cutout_time" id="byconsolewooodt_next_day_pickup_order_placing_cutout_time" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_next_day_pickup_order_placing_cutout_time')); ?>" />





<label> <?php echo __('Customers need to place an order before this time for next day pickup, leave balnk for no restriction.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: 30 )</span>





<?php





}























function byconsolewooodt_next_day_delivery_order_placing_cutout_time()





{





?>





<input type="time" name="byconsolewooodt_next_day_delivery_order_placing_cutout_time" id="byconsolewooodt_next_day_delivery_order_placing_cutout_time" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_next_day_delivery_order_placing_cutout_time')); ?>" />





<label> <?php echo __('Customers need to place an order before this time for next day delivery, leave balnk for no restriction.','ByConsoleWooODTExtended');?></label><br />





<span style="color:#a0a5aa">(Eg: 30 )</span>





<?php





}























function byconsolewooodt_widget_field_position()





{                                        





?>





<select id="byconsolewooodt_widget_field_position" name="byconsolewooodt_widget_field_position" class="bycwooodt_admin_fields_design" style="width:35%;" >





<option   value="top" <?php if( get_option('byconsolewooodt_widget_field_position')=='top'){?> selected="selected"<?php }?> >Show on top</option>





<option   value="bottom"<?php if( get_option('byconsolewooodt_widget_field_position')=='bottom'){?> selected="selected"<?php }?> >Show on Bottom</option>





</select>





<label><?php echo __('Choose if tracking text have to be shown on top(before order product list) or bottom(after product list).','ByConsoleWooODTExtended');?> </label>





<?php





}





function byconsolewooodt_opening_break_hours()





{





?>





<label><?php echo __('From','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_opening_break_hours_from" id="byconsolewooodt_opening_break_hours_from" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_opening_break_hours_from')); ?>" />





<label><?php echo __('To','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_opening_break_hours_to" id="byconsolewooodt_opening_break_hours_to" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_opening_break_hours_to')); ?>" />





<label><?php echo __('The time for which no opening will be Proceeded.','ByConsoleWooODTExtended');?></label>





<?php





}





function byconsolewooodt_delivery_break_hours()





{





?>





<label><?php echo __('From','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_delivery_hours_break_from" id="byconsolewooodt_delivery_hours_break_from" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_hours_break_from')); ?>" />





<label><?php echo __('To','ByConsoleWooODTExtended');?></label>





<input type="time" name="byconsolewooodt_delivery_hours_break_to" id="byconsolewooodt_delivery_hours_break_to" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_hours_break_to')); ?>" />





<label><?php echo __('The time for which no delivery will be Proceeded.','ByConsoleWooODTExtended');?></label>





<?php





}











function byconsolewooodt_delivery_day_option_setting()





{





$delivery_days = get_option('byconsolewooodt_delivery_days');





?>





<div class="closings_by_day">



















<span> Select All:</span><input type="checkbox" id="check_all_delivery_days" value="all" name="check_all_delivery_days" class="custom byconsolewooodt_admin_element_field checkbox" <?php if(!empty($delivery_days)){if(in_array('all',$delivery_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Sunday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="1" <?php if(!empty($delivery_days)){if(in_array(1,$delivery_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Monday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="2" <?php if(!empty($delivery_days)){if(in_array(2,$delivery_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Tuesday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="3" <?php if(!empty($delivery_days)){if(in_array(3,$delivery_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Wednessday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="4" <?php if(!empty($delivery_days)){if(in_array(4,$delivery_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Thursday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="5" <?php if(!empty($delivery_days)){if(in_array(5,$delivery_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Friday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="6" <?php if(!empty($delivery_days)){if(in_array(6,$delivery_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Saturday:</span><input type="checkbox" name="byconsolewooodt_delivery_days[]" id="byconsolewooodt_delivery_days" class="custom delivery byconsolewooodt_admin_element_field checkbox" value="7" <?php if(!empty($delivery_days)){if(in_array(7,$delivery_days)) { ?> checked="checked" <?php }}?>/>





</div>





<script>





jQuery('#check_all_delivery_days').click(function(){      





jQuery('.custom.delivery').attr('checked', true);   





});





</script>





<?php





}





function byconsolewooodt_pickup_day_option_setting()





{





$pickup_days = get_option('byconsolewooodt_pickup_days');





?>





<div class="closings_by_day">





<span> Select All:</span><input type="checkbox" id="check_all_pickup_days" value="all" name="check_all_pickup_days" class="custom byconsolewooodt_admin_element_field checkbox" <?php if(!empty($delivery_days)){if(in_array('all',$pickup_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Sunday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" class="custom selector byconsolewooodt_admin_element_field checkbox" value="1" <?php if(!empty($pickup_days)){if(in_array(1,$pickup_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Monday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" class="custom selector byconsolewooodt_admin_element_field checkbox" value="2" <?php if(!empty($pickup_days)){if(in_array(2,$pickup_days)) { ?> checked="checked" <?php }}?> /><br /><br />





<span>Tuesday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" class="custom selector byconsolewooodt_admin_element_field checkbox" value="3" <?php if(!empty($pickup_days)){if(in_array(3,$pickup_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Wednessday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" class="custom selector byconsolewooodt_admin_element_field checkbox" value="4" <?php if(!empty($pickup_days)){if(in_array(4,$pickup_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Thursday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" class="custom selector byconsolewooodt_admin_element_field checkbox" value="5" <?php if(!empty($pickup_days)){if(in_array(5,$pickup_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Friday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" value="6" class="custom selector byconsolewooodt_admin_element_field checkbox" <?php if(!empty($pickup_days)){if(in_array(6,$pickup_days)) { ?> checked="checked" <?php }}?>/><br /><br />





<span>Saturday:</span><input type="checkbox" name="byconsolewooodt_pickup_days[]" id="byconsolewooodt_pickup_days" value="7" class="custom selector byconsolewooodt_admin_element_field checkbox" <?php if(!empty($pickup_days)){if(in_array(7,$pickup_days)) { ?> checked="checked" <?php }}?>/>





</div>





<script>





jQuery('#check_all_pickup_days').click(function(){      





jQuery('.custom.selector').attr('checked', true);   





});





</script>





<?php





}





function byconsolewooodt_order_type()

{





?>











<label>



    <input type="radio" name="byconsolewooodt_order_type" id="byconsolewooodt_order_type" class="byconsolewooodt_admin_element_field radio" value="levering" <?php if( get_option('byconsolewooodt_order_type')=='levering'){?> checked="checked"<?php }?> />Delivery



</label>



  



<label>



  <input type="radio" name="byconsolewooodt_order_type" id="byconsolewooodt_order_type" class="byconsolewooodt_admin_element_field radio" value="take_away" <?php if( get_option('byconsolewooodt_order_type')=='take_away'){?> checked="checked"<?php }?> />Pickup    



</label>







<label>



  <input type="radio" name="byconsolewooodt_order_type" id="byconsolewooodt_order_type" class="byconsolewooodt_admin_element_field radio" value="both" <?php if( get_option('byconsolewooodt_order_type')=='both'){?> checked="checked"<?php }?> />Both    



</label>















<script>





</script>





<?php } 



function byconsolewooodt_time_field_validation(){

		

		$byconsolewooodt_time_field_validation = get_option('byconsolewooodt_time_field_validation');

		if($byconsolewooodt_time_field_validation == 'yes'){

			$checked = 'checked="checked"';

		}else{

			$checked = '';

		}

		?>

			<input type="checkbox" name="byconsolewooodt_time_field_validation" id="byconsolewooodt_time_field_validation" value="yes" <?php echo $checked;?> style="float: left;width: 0%;margin-top: 3px;"/>

            <label><?php echo __('Make time selection mendatory.','ByConsoleWooODTExtended');?></label>

		<?php

		

	}





function byconsolewooodt_time_field_show(){

	

	$byconsolewooodt_time_field_show = get_option('byconsolewooodt_time_field_show');

	if($byconsolewooodt_time_field_show == 'yes'){

		$checked = 'checked="checked"';

	}else{

		$checked = '';

	}

	?>

		<input type="checkbox" name="byconsolewooodt_time_field_show" id="byconsolewooodt_time_field_show" value="yes" <?php echo $checked;?> style="float: left;width: 0%;margin-top: 3px;"/>

		<label><?php echo __('Ask for delivery/pickup time.','ByConsoleWooODTExtended');?></label>

	<?php

}











add_action('admin_init', 'byconsolewooodt_plugin_settings_fields');





function byconsolewooodt_plugin_settings_fields()





{





add_settings_section("section", "All Settings", null, "byconsolewooodt_plugin_options");





add_settings_field("byconsolewooodt_order_type", "Delivery Type:", "byconsolewooodt_order_type", "byconsolewooodt_plugin_options", "section");



add_settings_field("byconsolewooodt_time_field_validation", __('Time field validation:','byconsole-woo-order-delivery-time'), "byconsolewooodt_time_field_validation", "byconsolewooodt_plugin_options", "section");



add_settings_field("byconsolewooodt_time_field_show", __('Ask for time:','byconsole-woo-order-delivery-time'), "byconsolewooodt_time_field_show", "byconsolewooodt_plugin_options", "section");







add_settings_field("byconsolewooodt_preorder_days", "Preorder Days:", "byconsolewooodt_preorder_days", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_restricted_preorder_days", "Preorder Days Restriction:", "byconsolewooodt_restricted_preorder_days", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_exclude_holidays_from_preorder_restriction_days", "Exclude Shipping Holiday:", "byconsolewooodt_exclude_holidays_from_preorder_restriction_days", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_allow_orders_on_closing_days", "Allow Orders On Closing Days:", "byconsolewooodt_allow_orders_on_closing_days", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_opening_hours", "Pickup Hours:", "byconsolewooodt_opening_hours", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_pickup_day_option_setting", "Pickup Day(s):", "byconsolewooodt_pickup_day_option_setting", "byconsolewooodt_plugin_options", "section");





//add_settings_field("byconsolewooodt_multiple_pickup_location_lebel", "Multiple Pickup Location:", "byconsolewooodt_multiple_pickup_location_lebel", "byconsolewooodt_plugin_options", "section");





//add_settings_field("byconsolewooodt_pickup_location", "Pickup Location:", "byconsolewooodt_pickup_location", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_delivery_hours", "Delivery Hours:", "byconsolewooodt_delivery_hours", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_delivery_day_option_setting", "Delivery Day(s):", "byconsolewooodt_delivery_day_option_setting", "byconsolewooodt_plugin_options", "section");





//add_settings_field("byconsolewooodt_multiple_delivery_location_lebel", "Multiple Delivery Location:", "byconsolewooodt_multiple_delivery_location_lebel", "byconsolewooodt_plugin_options", "section");





// add_settings_field("byconsolewooodt_delivery_location", "Delivery Location:", "byconsolewooodt_delivery_location", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_opening_break_hours", "Pickup break Time:", "byconsolewooodt_opening_break_hours", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_delivery_break_hours", "Delivery break Time:", "byconsolewooodt_delivery_break_hours", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_pickup_wait_times", "Pickup Minimum wait times (in minutes):", "byconsolewooodt_pickup_wait_times", "byconsolewooodt_plugin_options", "section");


add_settings_field("byconsolewooodt_delivery_times", "Delivery Minimum wait times (in minutes):", "byconsolewooodt_delivery_times", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_same_day_pickup_order_placing_cutout_time", "Same Day Pickup Order Placing Cutout Time:", "byconsolewooodt_same_day_pickup_order_placing_cutout_time", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_same_day_delivery_order_placing_cutout_time", "Same Day Delivery Order Placing Cutout Time:", "byconsolewooodt_same_day_delivery_order_placing_cutout_time", "byconsolewooodt_plugin_options", "section");





add_settings_field("byconsolewooodt_next_day_pickup_order_placing_cutout_time", "Next Day Pickup Order Placing Cutout Time:", "byconsolewooodt_next_day_pickup_order_placing_cutout_time", "byconsolewooodt_plugin_options", "section");











add_settings_field("byconsolewooodt_next_day_delivery_order_placing_cutout_time", "Next Day Delivery Order Placing Cutout Time:", "byconsolewooodt_next_day_delivery_order_placing_cutout_time", "byconsolewooodt_plugin_options", "section");











add_settings_field("byconsolewooodt_widget_field_position", "Position of the text in the orders page:", "byconsolewooodt_widget_field_position", "byconsolewooodt_plugin_options", "section");











add_settings_field("byconsolewooodt_hours_format", "Time format:", "byconsolewooodt_hours_format", "byconsolewooodt_plugin_options", "section");











add_settings_field("display_time_formate_as", "Display time format as:", "display_time_formate_as", "byconsolewooodt_plugin_options", "section");

















	





register_setting("section", "byconsolewooodt_preorder_days");





register_setting("section", "byconsolewooodt_time_field_validation");





register_setting("section", "byconsolewooodt_time_field_show");





register_setting("section", "byconsolewooodt_restricted_preorder_days");





register_setting("section", "byconsolewooodt_exclude_holidays_from_preorder_restriction_days");





register_setting("section", "byconsolewooodt_allow_orders_on_closing_days");





register_setting("section", "byconsolewooodt_opening_hours_from");





register_setting("section", "byconsolewooodt_opening_hours_to");





register_setting("section", "byconsolewooodt_delivery_hours_from");





register_setting("section", "byconsolewooodt_delivery_hours_to");



register_setting("section", "byconsolewooodt_pickup_wait_times");


register_setting("section", "byconsolewooodt_delivery_times");





register_setting("section", "byconsolewooodt_same_day_pickup_order_placing_cutout_time");















register_setting("section", "byconsolewooodt_same_day_delivery_order_placing_cutout_time");





register_setting("section", "byconsolewooodt_next_day_pickup_order_placing_cutout_time");





register_setting("section", "byconsolewooodt_next_day_delivery_order_placing_cutout_time");











register_setting("section", "byconsolewooodt_orders_pick_up");





register_setting("section", "byconsolewooodt_widget_field_position");

















register_setting("section", "byconsolewooodt_hours_format");











register_setting("section", "display_time_formate_as");











//register_setting("section", "byconsolewooodt_pickup_location");





//register_setting("section", "byconsolewooodt_delivery_location");





register_setting("section", "byconsolewooodt_opening_break_hours_from");





register_setting("section", "byconsolewooodt_opening_break_hours_to");





register_setting("section", "byconsolewooodt_delivery_hours_break_from");





register_setting("section", "byconsolewooodt_delivery_hours_break_to");











//register_setting("section", "byconsolewooodt_delivery_location_lebel");

















//register_setting("section", "byconsolewooodt_multiple_pickup_location");





//register_setting("section", "byconsolewooodt_multiple_delivery_location");





register_setting("section", "byconsolewooodt_delivery_days");























register_setting("section", "byconsolewooodt_pickup_days");





register_setting("section", "byconsolewooodt_order_type");



}

?>