<?php


	function byconsolewooodt_admin_wooodt_features_settings_form()	


	{


?>    


    <div class="wrap">


			<h1>ByConsole Woocommerce Order Delivery Features Settings</h1>


            <form method="post" class="form_byconsolewooodt_wooodt_features_settings" action="options.php">


				<?php				


					settings_fields("wooodtfeaturessetting");


					do_settings_sections("byconsolewooodt_wooodt_features_settings_options");      


					submit_button(); 


				?>          


			</form>


	</div>


	<?php


	}
	
	function byconsolewooodt_odt_show_hide_on_live_site(){
	  $byconsolewooodt_odt_show_hide_on_live_site = $get_byc_wooodt_data['byconsolewooodt_odt_show_hide_on_live_site'];	
	?>
    <input type="checkbox" name="byconsolewooodt_odt_show_hide_on_live_site" id="byconsolewooodt_odt_show_hide_on_live_site" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_odt_show_hide_on_live_site == 'yes') {?> checked="checked" <?php }?>/>	<label>Checkbox checked means ODT hide on checkout page</label>	
	<?php
	}
	
	
	function byconsolewooodt_hide_shipping_fields_when_pickup(){
	  $byconsolewooodt_hide_shipping_fields_when_pickup = $get_byc_wooodt_data['byconsolewooodt_hide_shipping_fields_when_pickup'];	
	?>
    <input type="checkbox" name="byconsolewooodt_hide_shipping_fields_when_pickup" id="byconsolewooodt_hide_shipping_fields_when_pickup" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_hide_shipping_fields_when_pickup == 'yes') {?> checked="checked" <?php }?>/>	<label>Checkbox checked means shiping fields hide when pickup</label>	
	<?php
	}
	
	
	function byconsolewooodt_hide_billing_fields_when_pickup(){
		$byconsolewooodt_hide_billing_fields_when_pickup = $get_byc_wooodt_data['byconsolewooodt_hide_billing_fields_when_pickup'];
		$billingFieldsArray = array('billing_first_name'  => 'Billing first name','billing_last_name' => 'Billing last name','billing_company' => 'Billing company','billing_address_1' => 'Billing address 1','billing_address_2' => 'Billing address 2','billing_city' => 'Billing city','billing_postcode' => 'Billing postcode','billing_state' => 'Billing state');		
		?>
        
                
		 <select multiple="multiple" name="byconsolewooodt_hide_billing_fields_when_pickup[]" id="byconsolewooodt_hide_billing_fields_when_pickup">
         	<?php foreach($billingFieldsArray as $billingKey => $billingVal){
				if(in_array($billingKey,$byconsolewooodt_hide_billing_fields_when_pickup)){
					echo '<option value="'.$billingKey.'" selected="selected">'.$billingVal.'</option>';
				}else{
					echo '<option value="'.$billingKey.'">'.$billingVal.'</option>';
				}
			}?>           
         </select>
         <label>Select option/s to hide from billing field for pickup</label>
         
		<?php
	}
	
	function byconsolewooodt_hide_billing_fields_when_delivery(){
		$byconsolewooodt_hide_billing_fields_when_delivery = $get_byc_wooodt_data['byconsolewooodt_hide_billing_fields_when_delivery'];
		
		$billingFieldsArray = array('billing_first_name'  => 'Billing first name','billing_last_name' => 'Billing last name','billing_company' => 'Billing company','billing_address_1' => 'Billing address 1','billing_address_2' => 'Billing address 2','billing_city' => 'Billing city','billing_postcode' => 'Billing postcode','billing_state' => 'Billing state');	
			
		?>
        
        
		 <select multiple="multiple" name="byconsolewooodt_hide_billing_fields_when_delivery[]" id="byconsolewooodt_hide_billing_fields_when_delivery">
         	<?php foreach($billingFieldsArray as $billingKey => $billingVal){
				if(in_array($billingKey,$byconsolewooodt_hide_billing_fields_when_delivery)){
					echo '<option value="'.$billingKey.'" selected="selected">'.$billingVal.'</option>';
				}else{
					echo '<option value="'.$billingKey.'">'.$billingVal.'</option>';
				}
			}?>           
         </select>
         <label>Select option/s to hide from billing field for delivery</label>
         
		<?php
	}
	
	
	
	function byconsolewooodt_locations_alphabetical_order(){

	  $byconsolewooodt_locations_alphabetical_order = $get_byc_wooodt_data['byconsolewooodt_locations_alphabetical_order'];	

	?>

    <input type="checkbox" name="byconsolewooodt_locations_alphabetical_order" id="byconsolewooodt_locations_alphabetical_order" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_locations_alphabetical_order == 'yes') {?> checked="checked" <?php }?>/>		

	<?php

	}

	function byconsolewooodt_checkout_page_loading_image_manage()

	{

	  $byconsolewooodt_checkout_page_loading_image_manage = get_option('byconsolewooodt_checkout_page_loading_image_manage');	

	?>

    <input type="checkbox" name="byconsolewooodt_checkout_page_loading_image_manage" id="byconsolewooodt_checkout_page_loading_image_manage" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_checkout_page_loading_image_manage == 'yes') {?> checked="checked" <?php }?>/>		

	<?php

	}
		function byconsolewooodt_pickup_location_auto_select_and_hide(){	  $byconsolewooodt_pickup_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_pickup_location_auto_select_and_hide'];		?>    <input type="checkbox" name="byconsolewooodt_pickup_location_auto_select_and_hide" id="byconsolewooodt_pickup_location_auto_select_and_hide" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_pickup_location_auto_select_and_hide == 'yes') {?> checked="checked" <?php }?>/>			<?php	}
	
	function byconsolewooodt_delivery_location_auto_select_and_hide(){
	  $byconsolewooodt_delivery_location_auto_select_and_hide = $get_byc_wooodt_data['byconsolewooodt_delivery_location_auto_select_and_hide'];	
	?>
    <input type="checkbox" name="byconsolewooodt_delivery_location_auto_select_and_hide" id="byconsolewooodt_delivery_location_auto_select_and_hide" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_delivery_location_auto_select_and_hide == 'yes') {?> checked="checked" <?php }?>/>		
	<?php
	}
	
	
	function byconsolewooodt_upload_loading_image()	{
	  $byconsolewooodt_upload_loading_image = get_option('byconsolewooodt_upload_loading_image');	
	?>

    <input type="text" name="byconsolewooodt_upload_loading_image" id="byconsolewooodt_upload_loading_image" class="bycwooodt_admin_fields_design" value="<?php echo $byconsolewooodt_upload_loading_image;?>" style="float:left;"/>		
    <input id="_btn" class="upload_image_button img_button_2" type="button" value="Upload Image" style="width: 18%;padding: 4px;font-size: 11px;float: left;margin: 8px 10px;" />
	<?php
    if($byconsolewooodt_upload_loading_image != ''){
		echo '<img src="'.$byconsolewooodt_upload_loading_image.'" alt="" style="" />';	
	}
	?><br />
 <span>(Select / Upload image -> File URL -> Insert into post)</span>

	<?php
	

	}


	function byconsolewooodt_checkout_page_next_prev_button_manage()


	{


		$byconsolewooodt_checkout_page_next_prev_button_manage = $get_byc_wooodt_data['byconsolewooodt_checkout_page_next_prev_button_manage'];	


	?>


    <input type="checkbox" name="byconsolewooodt_checkout_page_next_prev_button_manage" id="byconsolewooodt_checkout_page_next_prev_button_manage" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_checkout_page_next_prev_button_manage == 'yes') {?> checked="checked" <?php }?>/>		


	<?php


	}


	function byconsolewooodt_checkout_page_tax_include_with_shipping_cost()

	{

	  $byconsolewooodt_checkout_page_tax_include_with_shipping_cost = $get_byc_wooodt_data['byconsolewooodt_checkout_page_tax_include_with_shipping_cost'];	

	?>

    <input type="checkbox" name="byconsolewooodt_checkout_page_tax_include_with_shipping_cost" id="byconsolewooodt_checkout_page_tax_include_with_shipping_cost" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($byconsolewooodt_checkout_page_tax_include_with_shipping_cost == 'yes') {?> checked="checked" <?php }?> style="float: left;"/>		

	<?php

	}


	function byconsolewooodt_wooodt_disable_delivery_date_settings()


	{


		$wooodt_disable_delivery_date = get_option('byconsolewooodt_wooodt_disable_delivery_date');	


	?>


    <div class="closings_by_day">


	<input type="checkbox" name="byconsolewooodt_wooodt_disable_delivery_date" id="byconsolewooodt_wooodt_disable_delivery_date_settings" class="byconsolewooodt_admin_element_field checkbox" value="1" <?php if($wooodt_disable_delivery_date == '1') {?> checked="checked" <?php }?>/>


    </div>


    <?php }


	function byconsolewooodt_wooodt_disable_delivery_time_settings()


	{


		$wooodt_disable_delivery_time = get_option('byconsolewooodt_wooodt_disable_delivery_time');		


	?>


    <div class="closings_by_day">


	<input type="checkbox" name="byconsolewooodt_wooodt_disable_delivery_time" id="byconsolewooodt_wooodt_disable_delivery_time_settings" class="byconsolewooodt_admin_element_field checkbox" value="2" <?php if($wooodt_disable_delivery_time == '2') {?> checked="checked" <?php }?>/>


    </div>


	<?php }


	function byconsolewooodt_wooodt_disable_pickup_date_settings()


	{


		$wooodt_disable_pickup_date = get_option('byconsolewooodt_wooodt_disable_pickup_date');	


	?>


    <div class="closings_by_day">


	<input type="checkbox" name="byconsolewooodt_wooodt_disable_pickup_date" id="byconsolewooodt_wooodt_disable_pickup_date_settings" class="byconsolewooodt_admin_element_field checkbox" value="3" <?php if($wooodt_disable_pickup_date == '3') {?> checked="checked" <?php }?>/>


    </div>


	<?php }


	function byconsolewooodt_wooodt_disable_pickup_time_settings()


	{


		$wooodt_disable_pickup_time = get_option('byconsolewooodt_wooodt_disable_pickup_time');		


	?>


    <div class="closings_by_day">


	<input type="checkbox" name="byconsolewooodt_wooodt_disable_pickup_time" id="byconsolewooodt_wooodt_disable_pickup_time_settings" class="byconsolewooodt_admin_element_field checkbox" value="4" <?php if($wooodt_disable_pickup_time == '4') {?> checked="checked" <?php }?>/>


    </div>


    <?php }


	function byconsolewooodt_wooodt_date_formate_settings()


	{


		 $wooodt_date_formate = $get_byc_wooodt_data['byconsolewooodt_wooodt_date_formate_setting'];		


	?>


    <div class="closings_by_day">


	<label for="display_date_formate"><input type="radio" name="byconsolewooodt_wooodt_date_formate_setting" id="byconsolewooodt_wooodt_date_formate_settings" class="byconsolewooodt_admin_element_field radio" value="Y-m-d" <?php if($wooodt_date_formate == 'Y-m-d') { ?>  checked="checked"  <?php }?> /><p>Y-m-d</p></label><br />


    <label for="display_date_formate"><input type="radio" name="byconsolewooodt_wooodt_date_formate_setting" id="byconsolewooodt_wooodt_date_formate_settings" class="byconsolewooodt_admin_element_field radio" value="d-m-Y" <?php if($wooodt_date_formate == 'd-m-Y') { ?>  checked="checked"  <?php }?>/><p>d-m-Y</p></label><br />


   <label for="display_date_formate"><input type="radio" name="byconsolewooodt_wooodt_date_formate_setting" id="byconsolewooodt_wooodt_date_formate_settings" class="byconsolewooodt_admin_element_field radio" value="m-d-Y" <?php if($wooodt_date_formate == 'm-d-Y') { ?>  checked="checked"  <?php }?>/><p>m-d-Y</p></label><br />

   

    <label for="display_date_formate" style="display:none;"><input type="radio" name="byconsolewooodt_wooodt_date_formate_setting" id="byconsolewooodt_wooodt_date_formate_settings" class="byconsolewooodt_admin_element_field radio" value="dS-F-Y" <?php if($wooodt_date_formate == 'dS-F-Y') { ?>  checked="checked"  <?php }?> /><p>25th-May-2015</p></label> 


    </div>


    <?php } 


	function byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable()


	{?>


		<input type="checkbox" name="byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode" id="byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable" class="byconsolewooodt_admin_element_field checkbox" value="yes" <?php if($get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode'] == 'yes') {?> checked="checked" <?php }?>  />


		


	<?php 


	}


	function byconsolewooodt_as_early_as_possible_lable()


	{


	?>


    <p id="byconsolewooodt_as_early_as_possible_lable_content">


    <input type="text" name="byconsolewooodt_as_early_as_possible_lable_text" id="byconsolewooodt_as_early_as_possible_lable" style="width:30%; padding:7px;" class="bycwooodt_admin_fields_design" value="<?php printf( __('%s','ByConsoleWooODTExtended'),$get_byc_wooodt_data['byconsolewooodt_as_early_as_possible_lable_text']); ?>" />	


	 <label> <?php echo __('Displayed as early as possible lebel on checkout page and widget area.','ByConsoleWooODTExtended');?></label>


    </p>


	<?php 


	}


	function byconsolewooodt_exact_time_lable()


	{


	?>


    <p id="byconsolewooodt_exact_time_lable_content">


    <input type="text" name="byconsolewooodt_exact_time_lable_text" id="byconsolewooodt_exact_time_lable" style="width:30%; padding:7px;" class="bycwooodt_admin_fields_design" value="<?php printf( __('%s','ByConsoleWooODTExtended'),$get_byc_wooodt_data['byconsolewooodt_exact_time_lable_text']); ?>" />	


	 <label> <?php echo __('Displayed exact time lebel on checkout page and widget area.','ByConsoleWooODTExtended');?></label>


    </p>


	<?php 


	}


	


	


	function byconsolewooodt_wooodt_disable_order_limiting_per_hours()


	{


		$wooodt_order_limiting_per_hours = get_option('byconsolewooodt_wooodt_disable_order_limiting_per_hours');		


	?>


    <div class="closings_by_day">


	<input style="float:left;" type="checkbox" name="byconsolewooodt_wooodt_disable_order_limiting_per_hours" id="byconsolewooodt_wooodt_disable_delivery_order_limiting_per_hours" class="byconsolewooodt_admin_element_field checkbox"  value="YES" <?php if($wooodt_order_limiting_per_hours == 'YES') {?> checked="checked" <?php }?>/>


    </div>


	<?php }


	/*function byconsolewooodt_order_per_day_name_confirm()


	{


		


	?>


    	<input type="checkbox" name="byconsolewooodt_order_per_day_name_confirm" id="byconsolewooodt_order_per_day_name_confirm" value="yes" <?php if(get_option('byconsolewooodt_order_per_day_name_confirm')== 'yes') {?> checked="checked" <?php }?> style="float: left;width: 5px;" />


		


	<?php


		


	}


	function byconsolewooodt_order_per_day_name()


	{


		$byconsolewooodt_order_per_day_name = get_option('byconsolewooodt_order_per_day_name');


		//print_r($byconsolewooodt_order_per_day_name);


	?>


        


   <table width="50%" border="0" cellpadding="4" cellspacing="4">


      <tr>


        <td><b>Day</b></td>


        <td><b>Order</b></td>


      </tr>


      


      <tr>


        <td>Sun</td>        


        <td><input type="text" name="byconsolewooodt_order_per_day_name[sun]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['sun'];?>" /></td>     


      </tr>


      


      <tr>


        <td>Mon</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[mon]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['mon'];?>" /></td>


      </tr>


      


      <tr>


        <td>Tue</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[tue]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['tue'];?>" /></td>


      </tr>


      


      <tr>


        <td>Wed</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[wed]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['wed'];?>" /></td>     


      </tr>


      


      <tr>


        <td>Thu</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[thu]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['thu'];?>" /></td>


      </tr>


      <tr>


        <td>Fri</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[fri]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['fri'];?>" /></td>


      </tr>


      <tr>


        <td>Sat</td>


        <td><input type="text" name="byconsolewooodt_order_per_day_name[sat]" id="byconsolewooodt_order_per_day_name" value="<?php echo $byconsolewooodt_order_per_day_name['sat'];?>" /></td>


      </tr>


      


   </table>


		<?php


	}*/


		


/**************************wooodt features settings Field Start **********************************************/	


add_action('admin_init', 'byconsolewooodt_wooodt_features_settings_fields');


function byconsolewooodt_wooodt_features_settings_fields()


{


	add_settings_section("wooodtfeaturessetting", "Wooodt Features Settings", null, "byconsolewooodt_wooodt_features_settings_options");


	//add_settings_field("byconsolewooodt_wooodt_disable_delivery_date", "Disable Delivery Date:", "byconsolewooodt_wooodt_disable_delivery_date_settings", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	//add_settings_field("byconsolewooodt_wooodt_disable_delivery_time", "Disable Delivery Time:", "byconsolewooodt_wooodt_disable_delivery_time_settings", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");	


	//add_settings_field("byconsolewooodt_wooodt_disable_pickup_date", "Disable Pickup Date:", "byconsolewooodt_wooodt_disable_pickup_date_settings", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	//add_settings_field("byconsolewooodt_wooodt_disable_pickup_time", "Disable Pickup Time:", "byconsolewooodt_wooodt_disable_pickup_time_settings", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	
	add_settings_field("byconsolewooodt_odt_show_hide_on_live_site", "<p>ODT show or hide on live site:</p>", "byconsolewooodt_odt_show_hide_on_live_site", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	
	add_settings_field("byconsolewooodt_hide_shipping_fields_when_pickup", "<p>Remove shipping fields for pickup:</p>", "byconsolewooodt_hide_shipping_fields_when_pickup", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	
	add_settings_field("byconsolewooodt_hide_billing_fields_when_pickup", "<p>Remove billing fields for pickup:</p>", "byconsolewooodt_hide_billing_fields_when_pickup", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	
	add_settings_field("byconsolewooodt_hide_billing_fields_when_delivery", "<p>Remove billing fields for delivery:</p>", "byconsolewooodt_hide_billing_fields_when_delivery", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");	
	
	
	add_settings_field("byconsolewooodt_locations_alphabetical_order", "<p>Location alphabetical order:</p>", "byconsolewooodt_locations_alphabetical_order", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");

	add_settings_field("byconsolewooodt_checkout_page_loading_image_manage", "<p>Manage loading image on checkout page:</p>", "byconsolewooodt_checkout_page_loading_image_manage", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
			add_settings_field("byconsolewooodt_pickup_location_auto_select_and_hide", "<p>Checkout page pickup location auto select and hide:</p>", "byconsolewooodt_pickup_location_auto_select_and_hide", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	add_settings_field("byconsolewooodt_delivery_location_auto_select_and_hide", "<p>Checkout page delivery location auto select and hide:</p>", "byconsolewooodt_delivery_location_auto_select_and_hide", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");
	
	add_settings_field("byconsolewooodt_upload_loading_image", "<p>Upload loading image:</p>", "byconsolewooodt_upload_loading_image", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


		


	add_settings_field("byconsolewooodt_checkout_page_next_prev_button_manage", "<p>Manage next prev button on checkout page:</p>", "byconsolewooodt_checkout_page_next_prev_button_manage", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");

	

	

	add_settings_field("byconsolewooodt_checkout_page_tax_include_with_shipping_cost", "<p>Checkout page tax calculate with shipping cost:</p>", "byconsolewooodt_checkout_page_tax_include_with_shipping_cost", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");




	add_settings_field("byconsolewooodt_wooodt_date_formate_setting", "<p>Date Formate Setting:</p>", "byconsolewooodt_wooodt_date_formate_settings", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");	


	add_settings_field("byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable", "<p>ASAP text enable mode:</p>", "byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	add_settings_field("byconsolewooodt_as_early_as_possible_lable", "<p>As early as possible text:</p>", "byconsolewooodt_as_early_as_possible_lable", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	add_settings_field("byconsolewooodt_exact_time_lable", "<p>Exact time text:</p>", "byconsolewooodt_exact_time_lable", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	//add_settings_field("byconsolewooodt_wooodt_disable_order_limiting_per_hours", "<p>Limit [X] number of orders per [Y] hour(s):</p>", "byconsolewooodt_wooodt_disable_order_limiting_per_hours", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");

	/*add_settings_field("byconsolewooodt_order_per_day_name_confirm", "Order per day confirm box:</p>", "byconsolewooodt_order_per_day_name_confirm", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");


	add_settings_field("byconsolewooodt_order_per_day_name", "Order per day limit :</p>", "byconsolewooodt_order_per_day_name", "byconsolewooodt_wooodt_features_settings_options", "wooodtfeaturessetting");*/


	//register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_disable_delivery_date");


	//register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_disable_delivery_time");	


	//register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_disable_pickup_date");


	//register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_disable_pickup_time");
	
	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_odt_show_hide_on_live_site");
	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_hide_shipping_fields_when_pickup");	
	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_hide_billing_fields_when_pickup");	
	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_hide_billing_fields_when_delivery");					
	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_locations_alphabetical_order");

	register_setting("wooodtfeaturessetting", "byconsolewooodt_checkout_page_loading_image_manage");
			register_setting("wooodtfeaturessetting", "byconsolewooodt_pickup_location_auto_select_and_hide");	
	register_setting("wooodtfeaturessetting", "byconsolewooodt_delivery_location_auto_select_and_hide");
	
		
	register_setting("wooodtfeaturessetting", "byconsolewooodt_upload_loading_image");

	

	register_setting("wooodtfeaturessetting", "byconsolewooodt_checkout_page_next_prev_button_manage");

	

	register_setting("wooodtfeaturessetting", "byconsolewooodt_checkout_page_tax_include_with_shipping_cost");

	register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_date_formate_setting");


	register_setting("wooodtfeaturessetting", "byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode");	


	register_setting("wooodtfeaturessetting", "byconsolewooodt_as_early_as_possible_lable_text");


	register_setting("wooodtfeaturessetting", "byconsolewooodt_exact_time_lable_text");


	register_setting("wooodtfeaturessetting", "byconsolewooodt_wooodt_disable_order_limiting_per_hours");

	/*register_setting("wooodtfeaturessetting", "byconsolewooodt_order_per_day_name_confirm");

	register_setting("wooodtfeaturessetting", "byconsolewooodt_order_per_day_name");*/


}


/******************wooodt features settings Field End*************************************/	?>