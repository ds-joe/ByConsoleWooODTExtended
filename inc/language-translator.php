<?php


	function byconsolewooodt_admin_language_translator_settings_form()


	{


?>


	<div class="wrap">


			<h1>ByConsole Woocommerce Language Traslator Settings</h1>


            <form method="post" class="form_byconsolewooodt_wooodt_features_settings" action="options.php">


				<?php


					settings_fields("languagetraslatorsetting");


					do_settings_sections("byconsolewooodt_admin_language_translator_settings_options");      


					submit_button(); 


				?>          


			</form>


	</div>


		


<?php 	}


function byconsolewooodt_orders_delivered()


{


?>


<input type="text" name="byconsolewooodt_orders_delivered" id="byconsolewooodt_orders_delivered" 

class="bycwooodt_admin_language_fields_design"

 style="width:50%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_orders_delivered')); ?>" />


<label> <?php echo __('This is the text showed in Order Delivered page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(<?php echo __('Eg: The order will be delivered on','ByConsoleWooODTExtended');?>  [deliver_date] <?php echo __('at','ByConsoleWooODTExtended');?>   [deliver_time])<br>


Delivery date will work as short code on [deliver_date] <br>


Delivery time will work as short code on [deliver_time]</span>


<?php


}





function byconsolewooodt_orders_pick_up()


{


?>


<input type="text" name="byconsolewooodt_orders_pick_up" id="byconsolewooodt_orders_pick_up" 

class="bycwooodt_admin_language_fields_design"

 style="width:50%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_orders_pick_up')); ?>" />


<label> <?php echo __('This is the text showed in Order Picked Up page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(<?php echo __('Eg: The order can be Picked Up on','ByConsoleWooODTExtended');?>  [pickup_date] <?php echo __('at','ByConsoleWooODTExtended');?>  [pickup_time])<br>


Pickup date will work as short code on [pickup_date] <br>


Pickup time will work as short code on [pickup_time]</span>


<?php


}


function byconsolewooodt_chekout_page_section()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_section_heading" id="byconsolewooodt_chekout_page_section_heading"  

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_section_heading')); ?>"/>


<label><?php echo __('Texts to display on checkout page as section heading.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Desired delivery date and time)</span>


<?php


}


function byconsolewooodt_chekout_page_order_type_lebel()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_order_type_lebel" id="byconsolewooodt_chekout_page_order_type_lebel" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_order_type_lebel')); ?>"/>


<label><?php echo __('Displayed as time drop-down lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Select order type)</span>


<?php


}


function byconsolewooodt_chekout_page_date_lebel()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_date_lebel" id="byconsolewooodt_chekout_page_date_lebel" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_date_lebel')); ?>"/>


<label><?php echo __('Displayed as calendar lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Select date)</span>


<?php


}





function byconsolewooodt_chekout_page_time_lebel()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_time_lebel" id="byconsolewooodt_chekout_page_time_lebel" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_time_lebel')); ?>"/>


<label><?php echo __('Displayed as time drop-down lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Select time)</span>


<?php


}


function byconsolewooodt_pickup_location_lebel()


{


?>


<input type="text" name="byconsolewooodt_pickup_location_lebel" id="byconsolewooodt_pickup_location_lebel" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_pickup_location_lebel')); ?>" />


<label> <?php echo __('Displayed as pickup location drop-down lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: select pickup location)</span>


<?php


}


function byconsolewooodt_delivery_location_lebel()


{


?>


<input type="text" name="byconsolewooodt_delivery_location_lebel" id="byconsolewooodt_delivery_location_lebel" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_location_lebel')); ?>" />


<label> <?php echo __('Displayed as delivery location drop-down lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: select delivery location)</span>


<?php


}





function byconsolewooodt_pickup_location_date_textbox_placeholder()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_date_placeholder" id="byconsolewooodt_chekout_page_date_placeholder" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_date_placeholder')); ?>" /><br />


<span style="color:#a0a5aa">(Eg: select your pickup date)</span>	


<?php


}


function byconsolewooodt_pickup_location_time_textbox_placeholder()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_time_placeholder" id="byconsolewooodt_chekout_page_time_placeholder" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_time_placeholder')); ?>" /><br />


<span style="color:#a0a5aa">(Eg: select your pickup time)</span>


<?php	


}


function byconsolewooodt_delivery_location_date_textbox_placeholder()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_delivery_date_placeholder" id="byconsolewooodt_chekout_page_delivery_date_placeholder" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_delivery_date_placeholder')); ?>" /><br />


<span style="color:#a0a5aa">(Eg: select your delivery date)</span>	


<?php


}


function byconsolewooodt_delivery_location_time_textbox_placeholder()


{


?>


<input type="text" name="byconsolewooodt_chekout_page_delivery_time_placeholder" id="byconsolewooodt_chekout_page_delivery_time_placeholder" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_chekout_page_delivery_time_placeholder')); ?>" /><br />


<span style="color:#a0a5aa">(Eg: select your delivery time)</span>


<?php	


}


function byconsolewooodt_store_close_lebel()


{


?>


<input type="text" name="byconsolewooodt_store_close_notice" id="byconsolewooodt_store_close_notice" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_store_close_notice')); ?>" />


<label> <?php echo __('Displayed as store close notice drop-down lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: We are closed now)</span>


<?php


}

function byconsolewooodt_pickup_lable()


{


?>


<input type="text" name="byconsolewooodt_pickup_lable" id="byconsolewooodt_pickup_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_pickup_lable')); ?>" />


<label> <?php echo __('Displayed as pickup lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Pickup)</span>


<?php	


}


function byconsolewooodt_delivery_lable()


{


?>


<input type="text" name="byconsolewooodt_delivery_lable" id="byconsolewooodt_delivery_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_delivery_lable')); ?>" />


<label> <?php echo __('Displayed as delivery lebel on checkout page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Delivery)</span>


<?php	


}


function byconsolewooodt_order_page_order_type_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_order_type_lable" id="byconsolewooodt_order_page_order_type_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_order_type_lable')); ?>" />


<label> <?php echo __('Displayed order type lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: order type)</span>


<?php	


}


function byconsolewooodt_order_page_pickup_location_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_pickup_location_lable" id="byconsolewooodt_order_page_pickup_location_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_pickup_location_lable')); ?>" />


<label> <?php echo __('Displayed pickup location lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: pickup location)</span>


<?php	


}


function byconsolewooodt_order_page_pickup_date_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_pickup_date_lable" id="byconsolewooodt_order_page_pickup_date_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_pickup_date_lable')); ?>" />


<label> <?php echo __('Displayed pickup date lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: pickup date)</span>


<?php	


}


function byconsolewooodt_order_page_pickup_time_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_pickup_time_lable" id="byconsolewooodt_order_page_pickup_time_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_pickup_time_lable')); ?>" />


<label> <?php echo __('Displayed pickup time lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: pickup time)</span>


<?php	


}


function byconsolewooodt_order_page_delivery_location_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_delivery_location_lable" id="byconsolewooodt_order_page_delivery_location_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_delivery_location_lable')); ?>" />


<label> <?php echo __('Displayed delivery location lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: delivery location)</span>


<?php	


}


function byconsolewooodt_order_page_delivery_date_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_delivery_date_lable" id="byconsolewooodt_order_page_delivery_date_lable"  

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_delivery_date_lable')); ?>" />


<label> <?php echo __('Displayed delivery date lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: delivery date)</span>


<?php	


}


function byconsolewooodt_order_page_delivery_time_lable()


{


?>


<input type="text" name="byconsolewooodt_order_page_delivery_time_lable" id="byconsolewooodt_order_page_delivery_time_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_order_page_delivery_time_lable')); ?>" />


<label> <?php echo __('Displayed delivery time lebel on order page.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: delivery time)</span>


<?php	


}




function byconsolewooodt_checkout_page_pickup_date_blank_error_msg(){
?>
<input type="text" name="byconsolewooodt_checkout_page_pickup_date_blank_error_msg" id="byconsolewooodt_checkout_page_pickup_date_blank_error_msg" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_checkout_page_pickup_date_blank_error_msg')); ?>" />

<label> <?php echo __('Displayed pickup date error msg on checkout page.','ByConsoleWooODTExtended');?></label><br />
<span style="color:#a0a5aa">(Eg: pickup time)</span>
<?php	
}


function byconsolewooodt_checkout_page_pickup_time_blank_error_msg(){
?>
<input type="text" name="byconsolewooodt_checkout_page_pickup_time_blank_error_msg" id="byconsolewooodt_checkout_page_pickup_time_blank_error_msg" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_checkout_page_pickup_time_blank_error_msg')); ?>" />

<label> <?php echo __('Displayed pickup time error msg on checkout page.','ByConsoleWooODTExtended');?></label><br />
<span style="color:#a0a5aa">(Eg: pickup time)</span>
<?php	
}




function byconsolewooodt_checkout_page_delivery_date_blank_error_msg(){
?>
<input type="text" name="byconsolewooodt_checkout_page_delivery_date_blank_error_msg" id="byconsolewooodt_checkout_page_delivery_date_blank_error_msg" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_checkout_page_delivery_date_blank_error_msg')); ?>" />

<label> <?php echo __('Displayed delivery date error msg on checkout page.','ByConsoleWooODTExtended');?></label><br />
<span style="color:#a0a5aa">(Eg: delivery time)</span>
<?php	
}


function byconsolewooodt_checkout_page_delivery_time_blank_error_msg(){
?>
<input type="text" name="byconsolewooodt_checkout_page_delivery_time_blank_error_msg" id="byconsolewooodt_checkout_page_delivery_time_blank_error_msg" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_checkout_page_delivery_time_blank_error_msg')); ?>" />

<label> <?php echo __('Displayed delivery time error msg on checkout page.','ByConsoleWooODTExtended');?></label><br />
<span style="color:#a0a5aa">(Eg: delivery time)</span>
<?php	
}






function byconsolewooodt_calender_holiday_lable()


{


?>


<input type="text" name="byconsolewooodt_calender_holiday_lable" id="byconsolewooodt_calender_holiday_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_calender_holiday_lable')); ?>" />


<label> <?php echo __('Calender holiday label.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: calender holiday label)</span>


<?php	


}


function byconsolewooodt_calender_closing_lable()


{


?>


<input type="text" name="byconsolewooodt_calender_closing_lable" id="byconsolewooodt_calender_closing_lable" 

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_calender_closing_lable')); ?>" />


<label> <?php echo __('Calender closing label.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: We are closed for the day)</span>


<?php	


}


function byconsolewooodt_calender_pick_notallowed_lable()


{


?>


<input type="text" name="byconsolewooodt_calender_pick_notallowed_lable" id="byconsolewooodt_calender_pick_notallowed_lable"  

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_calender_pick_notallowed_lable')); ?>" />


<label> <?php echo __('Calender date pick not allowed label.','ByConsoleWooODTExtended');?></label><br />


<span style="color:#a0a5aa">(Eg: Order not allowed)</span>


<?php	


}

function byconsolewooodt_minimum_order_text_lable()
{


?>


<input type="text" name="byconsolewooodt_minimum_order_text_lable" id="byconsolewooodt_minimum_order_text_lable"  

class="bycwooodt_admin_language_fields_design"

 style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_minimum_order_text_lable')); ?>" />


<label> <?php echo __('Cart minimum order.','ByConsoleWooODTExtended');?></label>


<?php	


}


function byconsolewooodt_day_wise_charges_label(){?>
<input type="text" name="byconsolewooodt_day_wise_charges_label" id="byconsolewooodt_day_wise_charges_label"  class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_day_wise_charges_label')); ?>" /> <label> <?php echo __('Day wise charges label.','ByConsoleWooODTExtended');?></label>
<?php	

}


function byconsolewooodt_special_dates_charges_label(){?>
<input type="text" name="byconsolewooodt_special_dates_charges_label" id="byconsolewooodt_special_dates_charges_label"  class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_special_dates_charges_label')); ?>" /> <label> <?php echo __('Special dates charges label.','ByConsoleWooODTExtended');?></label>
<?php	

}

function byconsolewooodt_time_picker_blank_error(){?>
<input type="text" name="byconsolewooodt_time_picker_blank_error" id="byconsolewooodt_time_picker_blank_error"  class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_time_picker_blank_error')); ?>" /> <label> <?php echo __('Time picker blank error.','ByConsoleWooODTExtended');?></label>
<?php	

}	function byconsolewooodt_chekout_page_tips_label(){	?>	 <input type="text" name="byconsolewooodt_chekout_page_tips_label" id="byconsolewooodt_chekout_page_tips_label" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','byconsole-woo-order-delivery-time'),get_option('byconsolewooodt_chekout_page_tips_label')); ?>"/>	 <label><?php echo __('This text will displayed on order summary table as extra fees paid for','ByConsoleWooODTExtended');?></label><br />	 <span style="color:#a0a5aa">(Eg: Tips to delivery person)</span>	<?php	}

function byconsolewooodt_chekout_page_delivery_tip_label()	{	?>	 <input type="text" name="byconsolewooodt_chekout_page_delivery_tip_label" id="byconsolewooodt_chekout_page_delivery_tip_label" class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','byconsole-woo-order-delivery-time'),get_option('byconsolewooodt_chekout_page_delivery_tip_label')); ?>"/>	 <label><?php echo __('This text will be displayed on order summary table, email & order details page as extra fees paid for','ByConsoleWooODTExtended');?></label><br />	 <span style="color:#a0a5aa">(Eg: Tips to delivery person)</span>	<?php	}


function byconsolewooodt_time_slot_charges_label(){?>
<input type="text" name="byconsolewooodt_time_slot_charges_label" id="byconsolewooodt_time_slot_charges_label"  class="bycwooodt_admin_language_fields_design" style="width:30%; padding:7px;" value="<?php printf( __('%s','ByConsoleWooODTExtended'),get_option('byconsolewooodt_time_slot_charges_label')); ?>" /> <label> <?php echo __('Time slot charges label.','ByConsoleWooODTExtended');?></label>
<?php
}



add_action('admin_init', 'byconsolewooodt_wooodt_language_traslator_settings_fields');


function byconsolewooodt_wooodt_language_traslator_settings_fields()


{


add_settings_section("languagetraslatorsetting", "Language Translator Settings", null, "byconsolewooodt_admin_language_translator_settings_options");


add_settings_field("byconsolewooodt_orders_delivered", "<p>Exact time text:</p>", "byconsolewooodt_orders_delivered", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_orders_pick_up", "The order can be Pickup:", "byconsolewooodt_orders_pick_up", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_section_heading", "Checkout page section heading", "byconsolewooodt_chekout_page_section", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");





add_settings_field("byconsolewooodt_chekout_page_order_type_lebel", "Order type lebel on checkout page:", "byconsolewooodt_chekout_page_order_type_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");





add_settings_field("byconsolewooodt_chekout_page_date_lebel", "Calendar lebel on checkout page:", "byconsolewooodt_chekout_page_date_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_time_lebel", "Time select lebel on checkout page:", "byconsolewooodt_chekout_page_time_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_pickup_location_lebel", "Pickup location lebel:", "byconsolewooodt_pickup_location_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_delivery_location_lebel", "Delivery location lebel:", "byconsolewooodt_delivery_location_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_date_placeholder", "Pickup Date Placeholder:", "byconsolewooodt_pickup_location_date_textbox_placeholder", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_time_placeholder", "Pickup Time Placeholder:", "byconsolewooodt_pickup_location_time_textbox_placeholder", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_delivery_date_placeholder", "Delivery Date Placeholder:", "byconsolewooodt_delivery_location_date_textbox_placeholder", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_chekout_page_delivery_time_placeholder", "Delivery Time Placeholder:", "byconsolewooodt_delivery_location_time_textbox_placeholder", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_store_close_lebel", "Store close notice:", "byconsolewooodt_store_close_lebel", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_pickup_lable", "Pickup Label:", "byconsolewooodt_pickup_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_delivery_lable", "Delivery Label:", "byconsolewooodt_delivery_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_order_type_lable", "Order Type Label:", "byconsolewooodt_order_page_order_type_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_pickup_location_lable", "Pickup Location Label:", "byconsolewooodt_order_page_pickup_location_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_pickup_date_lable", "Pickup Date Label:", "byconsolewooodt_order_page_pickup_date_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_pickup_time_lable", "Pickup Time Label:", "byconsolewooodt_order_page_pickup_time_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_delivery_location_lable", "Delivery Location Label:", "byconsolewooodt_order_page_delivery_location_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_delivery_date_lable", "Delivery Date Label:", "byconsolewooodt_order_page_delivery_date_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	


add_settings_field("byconsolewooodt_order_page_delivery_time_lable", "Delivery Time Label:", "byconsolewooodt_order_page_delivery_time_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");



add_settings_field("byconsolewooodt_checkout_page_pickup_date_blank_error_msg", "Pickup date blank error msg:", "byconsolewooodt_checkout_page_pickup_date_blank_error_msg", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_checkout_page_pickup_time_blank_error_msg", "Pickup time blank error msg:", "byconsolewooodt_checkout_page_pickup_time_blank_error_msg", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_checkout_page_delivery_date_blank_error_msg", "Delivery date blank error msg:", "byconsolewooodt_checkout_page_delivery_date_blank_error_msg", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_checkout_page_delivery_time_blank_error_msg", "Delivery time blank error msg:", "byconsolewooodt_checkout_page_delivery_time_blank_error_msg", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_calender_holiday_lable", "Calender Holiday Tooltip Label:", "byconsolewooodt_calender_holiday_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");	

add_settings_field("byconsolewooodt_calender_closing_lable", "Calender Closing Tooltip Label:", "byconsolewooodt_calender_closing_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_calender_pick_notallowed_lable", "Calender Not Allowed Tooltip Label:", "byconsolewooodt_calender_pick_notallowed_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");



add_settings_field("byconsolewooodt_minimum_order_text_lable", "Minimum Order Text Label:", "byconsolewooodt_minimum_order_text_lable", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


add_settings_field("byconsolewooodt_day_wise_charges_label", "Day wise charges Label:", "byconsolewooodt_day_wise_charges_label", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_special_dates_charges_label", "Special Dates charges Label:", "byconsolewooodt_special_dates_charges_label", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_time_picker_blank_error", "Time Picker blank error:", "byconsolewooodt_time_picker_blank_error", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_chekout_page_tips_label", __('Tips label text:','byconsole-woo-order-delivery-time'), "byconsolewooodt_chekout_page_tips_label", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_chekout_page_delivery_tip_label", __('Delivery tips text label on checkout page:','byconsole-woo-order-delivery-time'), "byconsolewooodt_chekout_page_delivery_tip_label", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");

add_settings_field("byconsolewooodt_time_slot_charges_label", __('Time slot charges label:','byconsole-woo-order-delivery-time'), "byconsolewooodt_time_slot_charges_label", "byconsolewooodt_admin_language_translator_settings_options", "languagetraslatorsetting");


register_setting("languagetraslatorsetting", "byconsolewooodt_orders_delivered");


register_setting("languagetraslatorsetting", "byconsolewooodt_orders_pick_up");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_section_heading");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_order_type_lebel");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_date_lebel");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_time_lebel");


register_setting("languagetraslatorsetting", "byconsolewooodt_pickup_location_lebel");


register_setting("languagetraslatorsetting", "byconsolewooodt_delivery_location_lebel");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_date_placeholder");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_time_placeholder");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_delivery_date_placeholder");


register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_delivery_time_placeholder");


register_setting("languagetraslatorsetting", "byconsolewooodt_store_close_notice");


register_setting("languagetraslatorsetting", "byconsolewooodt_pickup_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_delivery_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_order_type_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_pickup_location_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_pickup_date_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_pickup_time_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_delivery_location_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_delivery_date_lable");


register_setting("languagetraslatorsetting", "byconsolewooodt_order_page_delivery_time_lable");

register_setting("languagetraslatorsetting", "byconsolewooodt_checkout_page_pickup_date_blank_error_msg");

register_setting("languagetraslatorsetting", "byconsolewooodt_checkout_page_pickup_time_blank_error_msg");


register_setting("languagetraslatorsetting", "byconsolewooodt_checkout_page_delivery_date_blank_error_msg");

register_setting("languagetraslatorsetting", "byconsolewooodt_checkout_page_delivery_time_blank_error_msg");



register_setting("languagetraslatorsetting", "byconsolewooodt_calender_holiday_lable");





register_setting("languagetraslatorsetting", "byconsolewooodt_calender_closing_lable");





register_setting("languagetraslatorsetting", "byconsolewooodt_calender_pick_notallowed_lable");



register_setting("languagetraslatorsetting", "byconsolewooodt_minimum_order_text_lable");

register_setting("languagetraslatorsetting", "byconsolewooodt_day_wise_charges_label");

register_setting("languagetraslatorsetting", "byconsolewooodt_special_dates_charges_label");

register_setting("languagetraslatorsetting", "byconsolewooodt_time_picker_blank_error");

register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_tips_label");

register_setting("languagetraslatorsetting", "byconsolewooodt_chekout_page_delivery_tip_label");

register_setting("languagetraslatorsetting", "byconsolewooodt_time_slot_charges_label");









}


?>