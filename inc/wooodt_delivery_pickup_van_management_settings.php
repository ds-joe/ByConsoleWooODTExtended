<?php


function byconsolewooodt_admin_delivery_pickup_van_management_settings_form()


{


?>


<div class="wrap">


<h1>ByConsole van management settings pannel</h1>


<?php


if(!empty($get_byc_wooodt_data['delivery_per_custom_slot']))


{


	$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];


}


//print_r($delivery_per_custom_slot_array);





if(!empty($delivery_per_custom_slot_array))


{


	foreach($delivery_per_custom_slot_array as $delivery_per_custom_slot_key => $delivery_per_custom_slot_val)


	{


		//print_r($delivery_per_custom_slot_val);


		//echo '<hr />';


		//$delivery_per_custom_slot_val['time_slot'];


		//echo '<hr />';


		foreach($delivery_per_custom_slot_val as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value)


		{		


	


				if(array_key_exists('time_slot',$delivery_per_custom_slot_val_single_value))


				{	


					$delivery_time_array_value[] = $delivery_per_custom_slot_val_single_value['time_slot'];			


				}


		}


	}


}


//print_r($delivery_time_array_value);


?>





<form method="post" class="form_byconsolewooodt_plugin_settings" action="options.php">


<?php


settings_fields("vanmanagementsection");


do_settings_sections("byconsolewooodt_vanmanagement_setting_options");      


submit_button(); 


?>


</form>


</div>


<?php 	


}





function byconsolewooodt_delivery_per_custom_slot_confirm_box()


{


?>


	<input type="checkbox" name="byconsolewooodt_delivery_per_custom_slot_confirm_box" id="byconsolewooodt_delivery_per_custom_slot_confirm_box"  class="byconsolewooodt_admin_element_field checkbox" value="yes" 


<?php if($get_byc_wooodt_data['byconsolewooodt_delivery_per_custom_slot_confirm_box'] == 'yes'){ echo 'checked="checked"';}?> style="float: left;width: 15px;" />


    


<?php


}





// For Pickup





function byconsolewooodt_pickup_per_custom_slot()


{


	$byconsolewooodt_pickup_location_for_count = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];


	if(!empty($byconsolewooodt_pickup_location_for_count))





	{


	foreach($byconsolewooodt_pickup_location_for_count as $byconsolewooodt_pickup_location_for_count_key => $byconsolewooodt_pickup_location_for_count_val)
		{
			$byconsolewooodt_pickup_location_for_count_key_value[]=$byconsolewooodt_pickup_location_for_count_key;
		}
	}
	//print_r($byconsolewooodt_pickup_location_for_count_key_value);
?>    


	<script type="text/javascript" language="javascript">


	/*jQuery(document).ready(function(){


		jQuery("#btn_pickup_per_custom_slot_add_another").click(function(){


			alert();


		});


	});	*/


	jQuery(document).ready(function(){

		if (jQuery("#byconsolewooodt_pickup_per_custom_slot_confirm_box").is(':checked'))
		{			
			jQuery(".time_slot_per_location").css("display","block");
		}
		else
		{
			jQuery(".time_slot_per_location").css("display","none");
		}

		jQuery("#byconsolewooodt_pickup_per_custom_slot_confirm_box").change(function(event){


			if (this.checked){


				jQuery(".time_slot_per_location").slideDown();


			} else {


				jQuery(".time_slot_per_location").slideUp();


			}


    	});	


			


	});


	function get_start_timeslot_textbox_details($starttimeslotdetails)


	{


		//alert("1");


		var custom_start_timeslot_textbox_className = $starttimeslotdetails.className;


		var custom_start_timeslot_textbox_value = $starttimeslotdetails.value;		


		jQuery('.'+custom_start_timeslot_textbox_className).val(custom_start_timeslot_textbox_value); 


	}


	function get_end_timeslot_textbox_details($endtimeslotdetails)


	{


		//alert("1");


		var custom_end_timeslot_textbox_className = $endtimeslotdetails.className;


		var custom_end_timeslot_textbox_value = $endtimeslotdetails.value;		


		jQuery('.'+custom_end_timeslot_textbox_className).val(custom_end_timeslot_textbox_value); 


	}


	function get_numberofpickup_textbox_details($numberofpickupdetails)


	{


		//alert("2");


		var custom_numberofpickup_textbox_className = $numberofpickupdetails.className;


		var custom_numberofpickup_textbox_value = $numberofpickupdetails.value;		


		jQuery('.'+custom_numberofpickup_textbox_className).val(custom_numberofpickup_textbox_value); 


		


		//alert(custom_numberofpickup_textbox_value);


	}


	


	function pickup_per_custom_slot_add_another($this)


	{


	var btn_pickup_per_custom_slot_add_another_className = $this.className;


	var pickup_per_custom_slot_count_hidden_field = jQuery('#pickup_per_custom_slot_count_hidden_field').val();


console.log(pickup_per_custom_slot_count_hidden_field);


	var n_numTabs = parseInt(pickup_per_custom_slot_count_hidden_field)+1;


	


	//alert(n_numTabs);


	


	jQuery('#pickup_per_custom_slot_count_hidden_field').val(n_numTabs);


	/*	var n_numTab = jQuery("ul."+btn_pickup_per_custom_slot_add_another_className).children().length;*/





	var btn_pickup_per_custom_slot_add_another_className_split = btn_pickup_per_custom_slot_add_another_className.split("_");


	


	//var byconsolewooodt_pickup_per_custom_slot_count = 


<?php  //if (empty($byconsolewooodt_pickup_location_for_count_key_value)){ echo '0' ;} else { echo end($byconsolewooodt_pickup_location_for_count_key_value); }?>;





var byconsolewooodt_pickup_per_custom_slot_count = parseInt(n_numTabs)+1;





//alert(byconsolewooodt_pickup_per_custom_slot_count);





byconsolewooodt_pickup_per_custom_slot_count++;


//alert(byconsolewooodt_pickup_per_custom_slot_count);


//alert(btn_pickup_per_custom_slot_add_another_className);


//alert('pickup_custom_slot_container'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs);


//alert(n_numTabs);


jQuery('.'+btn_pickup_per_custom_slot_add_another_className).append('<li class="" style="margin-bottom: 20px;" id="child_slot"><div class="pickup_custom_slot_container_'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'" style="width: 100%;margin-bottom: 10px; margin-top: -5px;clear: both;"> <div style="width: 13%; float: left; margin-bottom: 10px;"><input type="time" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][start_time_slot]" class="pickup_per_custom_slot_'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_start_time_slot" value="" onChange="get_start_timeslot_textbox_details(this);" style="margin-right: 14px;" /></div><div style="width: 14%; float: left;margin-bottom: 10px;"><input type="time" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][end_time_slot]" class="pickup_per_custom_slot_'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_end_time_slot" value="" onChange="get_end_timeslot_textbox_details(this);" style="margin-right: 14px;" /></div><div style="width: 8%; float: left;  margin-bottom: 10px;margin-right: 8px;"><input type="text" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][number_of_delivery]" class="pickup_per_custom_slot_'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_number_of_pickup" value="" onChange="get_numberofpickup_textbox_details(this);" style="margin-right: 10px;width: 90%;" /></div><div style="width: 8%; float: left;  margin-bottom: 10px;margin-right: 8px;"><input type="text" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][charges]" class="pickup_per_custom_slot_'+btn_pickup_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_charges" value="" onChange="get_numberofpickup_textbox_details(this);" style="margin-right: 10px;width: 90%;" /></div><div style="width:53%; float:left;"><span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][sun][time_slot_for_day]" id="pickup_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][mon][time_slot_for_day]" id="pickup_per_custom_slot" value="mon" style="float: left;margin-top: 1px;" />Mon&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][tue][time_slot_for_day]" id="pickup_per_custom_slot" value="tue" style="float: left;margin-top: 1px;" />Tue&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][wed][time_slot_for_day]" id="pickup_per_custom_slot" value="wed" style="float: left;margin-top: 1px;" />Wed&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][thu][time_slot_for_day]" id="pickup_per_custom_slot" value="thu" style="float: left;margin-top: 1px;" />Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][fri][time_slot_for_day]" id="pickup_per_custom_slot" value="fri" style="float: left;margin-top: 1px;" />Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot['+parseInt(btn_pickup_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][sat][time_slot_for_day]" id="pickup_per_custom_slot" value="sat" style="float: left;margin-top: 1px;" />Sat &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;</div><span id="del_pickup_custom_slot" class="" style="cursor:pointer;background-color:#000;color:#fff;padding:3px;" >X</span></div></li>');		


}


</script>	





	<?php





	$byconsolewooodt_pickup_location = $get_byc_wooodt_data['byconsolewooodt_pickup_location'];


	


	if(!empty($byconsolewooodt_pickup_location))


	{


		


		$slot=1;





		





		//$bg_color_increment = '1';


		foreach($byconsolewooodt_pickup_location as $byconsolewooodt_pickup_location_single_key => $byconsolewooodt_pickup_location_single_val)





		{





			if($slot%2 == 0)





			{





				$bg_color_increment = '#ddd';





			}





			else





			{





				$bg_color_increment = '#fff';





			}


?>





<div style="width:94%; height: auto;clear: both; background-color:<?php echo $bg_color_increment;?>; padding:25px;">


<div style="width: 98%; background-color: #000;color: #fff;padding: 8px;margin-bottom:10px;">


 <b><?php echo $byconsolewooodt_pickup_location_single_val['location']; ?></b>


 </div>





 


		<div style="width: 98%;height: 24px;clear: both;padding: 10px 2px 5px 12px;color: #000;   background-color:rgba(204, 204, 204, 0.52);">


				<div style="width: 13%; float: left;"><b>Start Time</b></div>


				<div style="width: 14%; float: left;"><b>End Time</b></div>


				<div style="width: 9%; float: left;"><b>Number</b></div>
				
				<div style="width: 9%; float: left;"><b>Charges</b></div>





                





                <div style="width: 18%; float: left;"><b>Days</b></div>


			  </div>


<?php


$pickup_per_custom_slot_array = $get_byc_wooodt_data['pickup_per_custom_slot'];





$pickup_per_custom_slot_array_count = count($pickup_per_custom_slot_array);


/*echo '<pre>';





print_r($pickup_per_custom_slot_array);





echo '</pre>';*/





$pickup_per_custom_slot_fetched_array = $pickup_per_custom_slot_array[$byconsolewooodt_pickup_location_single_key];





end($pickup_per_custom_slot_fetched_array); 


$lastValuekey = key($pickup_per_custom_slot_fetched_array);





if(!empty($lastValuekey)){


	$pickup_per_custom_slot_fetched_array_count = $lastValuekey;


}else{


	$pickup_per_custom_slot_fetched_array_count = '0';


}


	//echo '<hr />';





	





?>


<ul class="pickup_per_custom_slot_add_another_<?php echo $byconsolewooodt_pickup_location_single_key;?>">





<?php


if(!empty($pickup_per_custom_slot_fetched_array))





	{





		





	





	foreach( $pickup_per_custom_slot_fetched_array as $pickup_per_custom_slot_fetched_sots_key => $pickup_per_custom_slot_fetched_sots){





		//echo $pickup_per_custom_slot_fetched_sots_key;





		//echo '<br />';


		


	$pickup_van_for_sun_week_days = $pickup_per_custom_slot_fetched_sots['sun'];


	$pickup_van_for_mon_week_days = $pickup_per_custom_slot_fetched_sots['mon'];


	$pickup_van_for_tue_week_days = $pickup_per_custom_slot_fetched_sots['tue'];


	$pickup_van_for_wed_week_days = $pickup_per_custom_slot_fetched_sots['wed'];


	$pickup_van_for_thu_week_days = $pickup_per_custom_slot_fetched_sots['thu'];


	$pickup_van_for_fri_week_days = $pickup_per_custom_slot_fetched_sots['fri'];


	$pickup_van_for_sat_week_days = $pickup_per_custom_slot_fetched_sots['sat'];


	


	if(!empty($pickup_van_for_sun_week_days))


	{


		$pickup_sun_first_key = key($pickup_van_for_sun_week_days);


	}


	


	if(!empty($pickup_van_for_mon_week_days))


	{


		$pickup_mon_first_key = key($pickup_van_for_mon_week_days);


	}





	if(!empty($pickup_van_for_tue_week_days))


	{


		$pickup_tue_first_key = key($pickup_van_for_tue_week_days);


	}


	


	if(!empty($pickup_van_for_wed_week_days))


	{


		$pickup_wed_first_key = key($pickup_van_for_wed_week_days);


	}


	


	if(!empty($pickup_van_for_thu_week_days))


	{


		$pickup_thu_first_key = key($pickup_van_for_thu_week_days);


	}





	if(!empty($pickup_van_for_fri_week_days))


	{


		$pickup_fri_first_key = key($pickup_van_for_fri_week_days);


	}


	


	if(!empty($pickup_van_for_sat_week_days))


	{


		$pickup_sat_first_key = key($pickup_van_for_sat_week_days);


	}





		?>





<li class="" style="margin-bottom: 20px;">





    <div class="pickup_custom_slot_container_<?php echo $byconsolewooodt_pickup_location_single_key;?>_<?php echo $pickup_per_custom_slot_fetched_sots_key;?>" style="width: 100%;">





        <div style="width: 13%; float: left; margin-top: -5px; margin-bottom: 10px;">





         <input type="time" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][start_time_slot]" id="pickup_per_custom_slot"  value="<?php echo $pickup_per_custom_slot_fetched_sots['start_time_slot']?>" />





        </div>





        <div style="width: 14%; float: left; margin-top: -5px; margin-bottom: 10px;">





         <input type="time" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][end_time_slot]" id="pickup_per_custom_slot"  value="<?php echo $pickup_per_custom_slot_fetched_sots['end_time_slot']?>" />





         





        </div>





        <div style="width: 8%; float: left; margin-top: -5px; margin-bottom: 10px;margin-right: 8px;">
        <input type="text" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][number_of_delivery]" id="pickup_per_custom_slot" value="<?php echo $pickup_per_custom_slot_fetched_sots['number_of_delivery']?>" style="width: 90%;" />  </div>
		
		<div style="width: 8%; float: left; margin-top: -5px; margin-bottom: 10px;margin-right: 8px;">
			<input type="text" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][charges]" id="pickup_per_custom_slot" value="<?php echo $pickup_per_custom_slot_fetched_sots['charges']?>" style="width: 90%;" />  
	    </div>

		
        


        <div style="width:53%; float:left;">


        


        	<?php if($pickup_sun_first_key == 'time_slot_for_day') {?>


        	<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][sun][time_slot_for_day]" id="pickup_per_custom_slot" value="sun" checked="checked" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


        	<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][sun][time_slot_for_day]" id="pickup_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


            <?php if($pickup_mon_first_key == 'time_slot_for_day') {?>


            <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][mon][time_slot_for_day]" id="pickup_per_custom_slot" value="mon" checked="checked" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][mon][time_slot_for_day]" id="pickup_per_custom_slot" value="mon" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


             <?php if($pickup_tue_first_key == 'time_slot_for_day') {?>


            <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][tue][time_slot_for_day]" id="pickup_per_custom_slot" value="tue" checked="checked" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][tue][time_slot_for_day]" id="pickup_per_custom_slot" value="tue" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


             <?php if($pickup_wed_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][wed][time_slot_for_day]" id="pickup_per_custom_slot" value="wed" checked="checked" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][wed][time_slot_for_day]" id="pickup_per_custom_slot" value="wed" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


             <?php if($pickup_thu_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][thu][time_slot_for_day]" id="pickup_per_custom_slot" value="thu" checked="checked" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][thu][time_slot_for_day]" id="pickup_per_custom_slot" value="thu" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


             <?php if($pickup_fri_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="pickup_per_custom_slot" value="fri" checked="checked" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="pickup_per_custom_slot" value="fri" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


              <?php if($pickup_sat_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="pickup_per_custom_slot" value="sat" checked="checked" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][<?php echo $pickup_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="pickup_per_custom_slot" value="sat" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;


             <?php } ?>


        </div>





        <span id="del_pickup_custom_slot" class="" style="cursor:pointer; background-color:#000;color:#fff;padding:3px;">X</span>





    </div>





</li>





<?php


		$pickup_sun_first_key = '';


		$pickup_mon_first_key = '';	


		$pickup_tue_first_key = '';


		$pickup_wed_first_key = '';	


		$pickup_thu_first_key = '';


		$pickup_fri_first_key = '';	


		$pickup_sat_first_key = '';	





		}


}else{


?>


		


<li class="" style="margin-bottom: 20px;">





	 <div class="pickup_custom_slot_container_<?php echo $byconsolewooodt_pickup_location_single_key;?>_0" style="width: 100%;">





    <div style="width: 13%; float: left;">


     <input type="time" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][start_time_slot]" id="pickup_per_custom_slot"  value="" />


    </div>


    <div style="width: 14%; float: left;">


    <input type="time" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][end_time_slot]" id="pickup_per_custom_slot" value="" />


    </div>


    <div style="width: 8%; float: left;margin-right: 8px;">
        <input type="text" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][number_of_delivery]" id="pickup_per_custom_slot" value="" style="width: 90%;" />        
    </div>       
	
	<div style="width: 8%; float: left;margin-right: 8px;">
        <input type="text" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][charges]" id="pickup_per_custom_slot" value="" style="width: 90%;" />        
    </div> 
		

    <div style="width:53%; float:left;">





        





        	<?php 


			if($pickup_sun_first_key == 'time_slot_for_day') {?>





        	<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][sun][time_slot_for_day]" id="pickup_per_custom_slot" value="sun" checked="checked" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





        	<span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][sun][time_slot_for_day]" id="pickup_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





            <?php if($pickup_mon_first_key == 'time_slot_for_day') {?>





            <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][mon][time_slot_for_day]" id="pickup_per_custom_slot" value="mon" checked="checked" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][mon][time_slot_for_day]" id="pickup_per_custom_slot" value="mon" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





             <?php if($pickup_tue_first_key == 'time_slot_for_day') {?>





            <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][tue][time_slot_for_day]" id="pickup_per_custom_slot" value="tue" checked="checked" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][tue][time_slot_for_day]" id="pickup_per_custom_slot" value="tue" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





             <?php if($pickup_wed_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][wed][time_slot_for_day]" id="pickup_per_custom_slot" value="wed" checked="checked" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][wed][time_slot_for_day]" id="pickup_per_custom_slot" value="wed" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





             <?php if($pickup_thu_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][thu][time_slot_for_day]" id="pickup_per_custom_slot" value="thu" checked="checked" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][thu][time_slot_for_day]" id="pickup_per_custom_slot" value="thu" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





             <?php if($pickup_fri_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][fri][time_slot_for_day]" id="pickup_per_custom_slot" value="fri" checked="checked" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][fri][time_slot_for_day]" id="pickup_per_custom_slot" value="fri" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





              <?php if($pickup_sat_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][sat][time_slot_for_day]" id="pickup_per_custom_slot" value="sat" checked="checked" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="pickup_per_custom_slot[<?php echo $byconsolewooodt_pickup_location_single_key;?>][0][sat][time_slot_for_day]" id="pickup_per_custom_slot" value="sat" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;





             <?php } ?>





        </div>


   


        


     </div>


</li>


<?php }?>


</ul>





<!--ul class="pickup_per_custom_slot_add_another_<?php // echo $byconsolewooodt_pickup_location_single_key;?>"></ul-->


<input type="hidden" name="pickup_per_custom_slot_count_hidden_field" id="pickup_per_custom_slot_count_hidden_field" value="<?php echo $pickup_per_custom_slot_fetched_array_count;?>" />





<div class="fldst" style="clear: both;">


 <input type="button" id="btn_pickup_per_custom_slot_add_another" class="pickup_per_custom_slot_add_another_<?php echo $byconsolewooodt_pickup_location_single_key;?>" value="Add" onclick="pickup_per_custom_slot_add_another(this)" >


 </div>


</div>


<hr/>





<?php	


		$slot++;


		}


echo '</div>';		


	}


}


// For Delivery...





function byconsolewooodt_delivery_per_custom_slot()


{


	$byconsolewooodt_delivery_location_for_count = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];


	if(!empty($byconsolewooodt_delivery_location_for_count))





	{





	





		foreach($byconsolewooodt_delivery_location_for_count as $byconsolewooodt_delivery_location_for_count_key => $byconsolewooodt_delivery_location_for_count_val)





	





		{





	





			$byconsolewooodt_delivery_location_for_count_key_value[]=$byconsolewooodt_delivery_location_for_count_key;





	





		}





		





	}


	//print_r($byconsolewooodt_delivery_location_for_count_key_value);


?>    


	<script type="text/javascript" language="javascript">


	/*jQuery(document).ready(function(){


		jQuery("#btn_delivery_per_custom_slot_add_another").click(function(){


			alert();


		});


	});	*/


	jQuery(document).ready(function(){


		


			


		if (jQuery("#byconsolewooodt_delivery_per_custom_slot_confirm_box").is(':checked'))


		{			


			jQuery(".time_slot_per_location").css("display","block");


		}


		else


		{


			jQuery(".time_slot_per_location").css("display","none");


		}


		


		


		jQuery("#byconsolewooodt_delivery_per_custom_slot_confirm_box").change(function(event){


			if (this.checked){


				jQuery(".time_slot_per_location").slideDown();


			} else {


				jQuery(".time_slot_per_location").slideUp();


			}


    	});	


			


	});


	function get_start_timeslot_textbox_details($starttimeslotdetails)


	{


		//alert("1");


		var custom_start_timeslot_textbox_className = $starttimeslotdetails.className;


		var custom_start_timeslot_textbox_value = $starttimeslotdetails.value;		


		jQuery('.'+custom_start_timeslot_textbox_className).val(custom_start_timeslot_textbox_value); 


	}


	function get_end_timeslot_textbox_details($endtimeslotdetails)


	{


		//alert("1");


		var custom_end_timeslot_textbox_className = $endtimeslotdetails.className;


		var custom_end_timeslot_textbox_value = $endtimeslotdetails.value;		


		jQuery('.'+custom_end_timeslot_textbox_className).val(custom_end_timeslot_textbox_value); 


	}


	function get_numberofdelivery_textbox_details($numberofdeliverydetails)


	{


		//alert("2");


		var custom_numberofdelivery_textbox_className = $numberofdeliverydetails.className;


		var custom_numberofdelivery_textbox_value = $numberofdeliverydetails.value;		


		jQuery('.'+custom_numberofdelivery_textbox_className).val(custom_numberofdelivery_textbox_value); 


		


		//alert(custom_numberofdelivery_textbox_value);


	}


	


	function delivery_per_custom_slot_add_another($this){


	var btn_delivery_per_custom_slot_add_another_className = $this.className;


	var delivery_per_custom_slot_count_hidden_field = jQuery('#delivery_per_custom_slot_count_hidden_field').val();





	var n_numTabs = parseInt(delivery_per_custom_slot_count_hidden_field)+1;


	


	//alert(n_numTab);


	


	jQuery('#delivery_per_custom_slot_count_hidden_field').val(n_numTabs);


	/*	var n_numTab = jQuery("ul."+btn_delivery_per_custom_slot_add_another_className).children().length;*/





	var btn_delivery_per_custom_slot_add_another_className_split = btn_delivery_per_custom_slot_add_another_className.split("_");


	


	//var byconsolewooodt_delivery_per_custom_slot_count = 


<?php  //if (empty($byconsolewooodt_delivery_location_for_count_key_value)){ echo '0' ;} else { echo end($byconsolewooodt_delivery_location_for_count_key_value); }?>;





var byconsolewooodt_delivery_per_custom_slot_count = parseInt(n_numTabs)+1;





//alert(byconsolewooodt_delivery_per_custom_slot_count);





byconsolewooodt_delivery_per_custom_slot_count++;


//alert(byconsolewooodt_delivery_per_custom_slot_count);


//alert(btn_delivery_per_custom_slot_add_another_className_split);


jQuery('.'+btn_delivery_per_custom_slot_add_another_className).append('<li class="" style="margin-bottom: 20px;" id="child_slot"><div class="delivery_custom_slot_container_'+btn_delivery_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'" style="width: 100%;margin-bottom: 10px; margin-top: -5px;clear: both;"> <div style="width: 13%; float: left; margin-bottom: 10px;"><input type="time" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][start_time_slot]" class="delivery_per_custom_slot_'+btn_delivery_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_start_time_slot" value="" onChange="get_start_timeslot_textbox_details(this);" style="margin-right: 14px;" /></div><div style="width: 14%; float: left;margin-bottom: 10px;"><input type="time" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][end_time_slot]" class="delivery_per_custom_slot_'+btn_delivery_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_end_time_slot" value="" onChange="get_end_timeslot_textbox_details(this);" style="margin-right: 14px;" /></div><div style="width: 8%; float: left;  margin-bottom: 10px;margin-right: 8px;"><input type="text" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][number_of_delivery]" class="delivery_per_custom_slot_'+btn_delivery_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_number_of_delivery" value="" onChange="get_numberofdelivery_textbox_details(this);" style="margin-right: 10px;width: 90%;" /></div><div style="width: 8%; float: left;  margin-bottom: 10px;margin-right: 8px;"><input type="text" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][charges]" class="delivery_per_custom_slot_'+btn_delivery_per_custom_slot_add_another_className_split[6]+'_'+n_numTabs+'_charges" value="" onChange="get_numberofdelivery_textbox_details(this);" style="margin-right: 10px;width: 90%;" /></div><div style="width:53%; float:left;"><span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][sun][time_slot_for_day]" id="delivery_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][mon][time_slot_for_day]" id="delivery_per_custom_slot" value="mon" style="float: left;margin-top: 1px;" />Mon&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][tue][time_slot_for_day]" id="delivery_per_custom_slot" value="tue" style="float: left;margin-top: 1px;" />Tue&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][wed][time_slot_for_day]" id="delivery_per_custom_slot" value="wed" style="float: left;margin-top: 1px;" />Wed&nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][thu][time_slot_for_day]" id="delivery_per_custom_slot" value="thu" style="float: left;margin-top: 1px;" />Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][fri][time_slot_for_day]" id="delivery_per_custom_slot" value="fri" style="float: left;margin-top: 1px;" />Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot['+parseInt(btn_delivery_per_custom_slot_add_another_className_split[6])+']['+n_numTabs+'][sat][time_slot_for_day]" id="delivery_per_custom_slot" value="sat" style="float: left;margin-top: 1px;" />Sat &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;</div><span id="del_delivery_custom_slot" class="" style="cursor:pointer;background-color:#000;color:#fff;padding:3px;" >X</span></div></li>');		


}


</script>	





	<?php





	$byconsolewooodt_delivery_location = $get_byc_wooodt_data['byconsolewooodt_delivery_location'];


	


	if(!empty($byconsolewooodt_delivery_location))


	{


		


		$slot=1;


		foreach($byconsolewooodt_delivery_location as $byconsolewooodt_delivery_location_single_key => $byconsolewooodt_delivery_location_single_val)


		{





			





			if($slot%2 == 0)





			{





				$bg_color_increment = '#ddd';





			}





			else





			{





				$bg_color_increment = '#fff';





			}


?>





 





 





<div style="width:94%; height: auto;clear: both; background-color:<?php echo $bg_color_increment;?>; padding:25px;">


<div style="width: 98%; background-color: #000;color: #fff;padding: 8px;margin-bottom:10px;">


 <b><?php echo $byconsolewooodt_delivery_location_single_val['location']; ?></b>


 </div>





 


		<div style="width: 98%;height: 24px;clear: both;padding: 10px 2px 5px 12px;color: #000;   background-color:rgba(204, 204, 204, 0.52);">


				<div style="width: 13%; float: left;"><b>Start Time</b></div>


				<div style="width: 14%; float: left;"><b>End Time</b></div>


				<div style="width: 9%; float: left;"><b>Number</b></div>

				<div style="width: 9%; float: left;"><b>Charges</b></div>



                





                <div style="width: 18%; float: left;"><b>Days</b></div>


			  </div>


<?php


$delivery_per_custom_slot_array = $get_byc_wooodt_data['delivery_per_custom_slot'];





$delivery_per_custom_slot_fetched_array = $delivery_per_custom_slot_array[$byconsolewooodt_delivery_location_single_key];





end($delivery_per_custom_slot_fetched_array); 


$lastValuekey = key($delivery_per_custom_slot_fetched_array);





if(!empty($lastValuekey)){


	$delivery_per_custom_slot_fetched_array_count = $lastValuekey;


}else{


	$delivery_per_custom_slot_fetched_array_count = '0';


}


//print_r($delivery_per_custom_slot_fetched_array);


	//echo '<hr />';





?>


<ul class="delivery_per_custom_slot_add_another_<?php echo $byconsolewooodt_delivery_location_single_key;?>">


<?php





	if(!empty($delivery_per_custom_slot_fetched_array))





	{





		





	





	foreach( $delivery_per_custom_slot_fetched_array as $delivery_per_custom_slot_fetched_sots_key => $delivery_per_custom_slot_fetched_sots){





		//echo $delivery_per_custom_slot_fetched_sots_key;





		//echo '<br />';


		


	$delivery_van_for_sun_week_days = $delivery_per_custom_slot_fetched_sots['sun'];


	$delivery_van_for_mon_week_days = $delivery_per_custom_slot_fetched_sots['mon'];


	$delivery_van_for_tue_week_days = $delivery_per_custom_slot_fetched_sots['tue'];


	$delivery_van_for_wed_week_days = $delivery_per_custom_slot_fetched_sots['wed'];


	$delivery_van_for_thu_week_days = $delivery_per_custom_slot_fetched_sots['thu'];


	$delivery_van_for_fri_week_days = $delivery_per_custom_slot_fetched_sots['fri'];


	$delivery_van_for_sat_week_days = $delivery_per_custom_slot_fetched_sots['sat'];


	


	if(!empty($delivery_van_for_sun_week_days))


	{


		$delivery_sun_first_key = key($delivery_van_for_sun_week_days);


	}


	


	if(!empty($delivery_van_for_mon_week_days))


	{


		$delivery_mon_first_key = key($delivery_van_for_mon_week_days);


	}





	if(!empty($delivery_van_for_tue_week_days))


	{


		$delivery_tue_first_key = key($delivery_van_for_tue_week_days);


	}


	


	if(!empty($delivery_van_for_wed_week_days))


	{


		$delivery_wed_first_key = key($delivery_van_for_wed_week_days);


	}


	


	if(!empty($delivery_van_for_thu_week_days))


	{


		$delivery_thu_first_key = key($delivery_van_for_thu_week_days);


	}





	if(!empty($delivery_van_for_fri_week_days))


	{


		$delivery_fri_first_key = key($delivery_van_for_fri_week_days);


	}


	


	if(!empty($delivery_van_for_sat_week_days))


	{


		$delivery_sat_first_key = key($delivery_van_for_sat_week_days);


	}


		?>





<li class="" style="margin-bottom: 20px;">





    <div class="delivery_custom_slot_container_<?php echo $byconsolewooodt_delivery_location_single_key;?>_<?php echo $delivery_per_custom_slot_fetched_sots_key;?>" style="width: 100%;">





        <div style="width: 13%; float: left; margin-top: -5px; margin-bottom: 10px;">
         <input type="time" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][start_time_slot]" id="delivery_per_custom_slot"  value="<?php echo $delivery_per_custom_slot_fetched_sots['start_time_slot']?>" />
        </div>

        <div style="width: 14%; float: left; margin-top: -5px; margin-bottom: 10px;">
         <input type="time" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][end_time_slot]" id="delivery_per_custom_slot"  value="<?php echo $delivery_per_custom_slot_fetched_sots['end_time_slot']?>" />
        </div>
		
        <div style="width: 8%; float: left; margin-top: -5px; margin-bottom: 10px;margin-right: 8px;">
			<input type="text" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][number_of_delivery]" id="delivery_per_custom_slot" value="<?php echo $delivery_per_custom_slot_fetched_sots['number_of_delivery']?>" style="width: 90%;" />        
        </div>
		
		<div style="width: 8%; float: left; margin-top: -5px; margin-bottom: 10px;margin-right: 8px;">
			<input type="text" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][charges]" id="delivery_per_custom_slot" value="<?php echo $delivery_per_custom_slot_fetched_sots['charges']?>" style="width: 90%;" />        
        </div>


        


        <div style="width:53%; float:left;">


        


        	<?php if($delivery_sun_first_key == 'time_slot_for_day') {?>


        	<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sun][time_slot_for_day]" id="delivery_per_custom_slot" value="sun" checked="checked" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


        	<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sun][time_slot_for_day]" id="delivery_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


            <?php if($delivery_mon_first_key == 'time_slot_for_day') {?>


            <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][mon][time_slot_for_day]" id="delivery_per_custom_slot" value="mon" checked="checked" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][mon][time_slot_for_day]" id="delivery_per_custom_slot" value="mon" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


             <?php if($delivery_tue_first_key == 'time_slot_for_day') {?>


            <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][tue][time_slot_for_day]" id="delivery_per_custom_slot" value="tue" checked="checked" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][tue][time_slot_for_day]" id="delivery_per_custom_slot" value="tue" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;


            <?php }?>


            


             <?php if($delivery_wed_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][wed][time_slot_for_day]" id="delivery_per_custom_slot" value="wed" checked="checked" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][wed][time_slot_for_day]" id="delivery_per_custom_slot" value="wed" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


             <?php if($delivery_thu_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][thu][time_slot_for_day]" id="delivery_per_custom_slot" value="thu" checked="checked" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][thu][time_slot_for_day]" id="delivery_per_custom_slot" value="thu" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


             <?php if($delivery_fri_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="delivery_per_custom_slot" value="fri" checked="checked" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="delivery_per_custom_slot" value="fri" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;


             <?php } ?>


             


              <?php if($delivery_sat_first_key == 'time_slot_for_day') {?>


             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="delivery_per_custom_slot" value="sat" checked="checked" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;


             <?php } else {?>


              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="delivery_per_custom_slot" value="sat" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;


             <?php } ?>


        </div>





        <span id="del_delivery_custom_slot" class="" style="cursor:pointer; background-color:#000;color:#fff;padding:3px;">X</span>





    </div>





</li>





<?php





		$delivery_sun_first_key = '';


		$delivery_mon_first_key = '';	


		$delivery_tue_first_key = '';


		$delivery_wed_first_key = '';	


		$delivery_thu_first_key = '';


		$delivery_fri_first_key = '';	


		$delivery_sat_first_key = '';	





		}


	}else{





?>


<li class="" style="margin-bottom: 20px;">





	<div class="delivery_custom_slot_container_<?php echo $byconsolewooodt_delivery_location_single_key;?>_0" style="width: 100%;">





    <div style="width: 13%; float: left;">


     <input type="time" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][start_time_slot]" id="delivery_per_custom_slot"  value="" />


    </div>


    <div style="width: 14%; float: left;">


    <input type="time" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][end_time_slot]" id="delivery_per_custom_slot" value="" />


    </div>


    <div style="width: 8%; float: left;margin-right: 8px;">
        <input type="text" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][number_of_delivery]" id="delivery_per_custom_slot" value="" style="width: 90%;" />        
    </div> 

	<div style="width: 8%; float: left;margin-right: 8px;">
        <input type="text" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][charges]" id="delivery_per_custom_slot" value="" style="width: 90%;" />        
    </div> 


    <div style="width:53%; float:left;">





        





        	<?php if($delivery_sun_first_key == 'time_slot_for_day') {?>





        	<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][sun][time_slot_for_day]" id="delivery_per_custom_slot" value="sun" checked="checked" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





        	<span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][sun][time_slot_for_day]" id="delivery_per_custom_slot" value="sun" style="float: left;margin-top: 1px;" />Sun &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





            <?php if($delivery_mon_first_key == 'time_slot_for_day') {?>





            <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][mon][time_slot_for_day]" id="delivery_per_custom_slot" value="mon" checked="checked" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][mon][time_slot_for_day]" id="delivery_per_custom_slot" value="mon" style="float: left;margin-top: 1px;"/>Mon &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





             <?php if($delivery_tue_first_key == 'time_slot_for_day') {?>





            <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][tue][time_slot_for_day]" id="delivery_per_custom_slot" value="tue" checked="checked" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][tue][time_slot_for_day]" id="delivery_per_custom_slot" value="tue" style="float: left;margin-top: 1px;"/>Tue &nbsp;&nbsp;&nbsp;</span>&nbsp;





            <?php }?>





            





             <?php if($delivery_wed_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][wed][time_slot_for_day]" id="delivery_per_custom_slot" value="wed" checked="checked" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][wed][time_slot_for_day]" id="delivery_per_custom_slot" value="wed" style="float: left;margin-top: 1px;"/>Wed &nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





             <?php if($delivery_thu_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][thu][time_slot_for_day]" id="delivery_per_custom_slot" value="thu" checked="checked" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][0][thu][time_slot_for_day]" id="delivery_per_custom_slot" value="thu" style="float: left;margin-top: 1px;"/>Thu &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





             <?php if($delivery_fri_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="delivery_per_custom_slot" value="fri" checked="checked" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][fri][time_slot_for_day]" id="delivery_per_custom_slot" value="fri" style="float: left;margin-top: 1px;"/>Fri &nbsp;&nbsp;&nbsp;&nbsp;</span>&nbsp;





             <?php } ?>





             





              <?php if($delivery_sat_first_key == 'time_slot_for_day') {?>





             <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="delivery_per_custom_slot" value="sat" checked="checked" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;





             <?php } else {?>





              <span style="float: left;"><input type="checkbox" name="delivery_per_custom_slot[<?php echo $byconsolewooodt_delivery_location_single_key;?>][<?php echo $delivery_per_custom_slot_fetched_sots_key;?>][sat][time_slot_for_day]" id="delivery_per_custom_slot" value="sat" style="float: left;margin-top: 1px;"/>Sat &nbsp;</span>&nbsp;





             <?php } ?>





        </div>





	</div>


</li>





<?php }?>


</ul>





<!--ul class="delivery_per_custom_slot_add_another_<?php // echo $byconsolewooodt_delivery_location_single_key;?>"></ul-->


<input type="hidden" name="delivery_per_custom_slot_count_hidden_field" id="delivery_per_custom_slot_count_hidden_field" value="<?php echo $delivery_per_custom_slot_fetched_array_count;?>" />


<div class="fldst" style="clear:both;">


 <input type="button" id="btn_delivery_per_custom_slot_add_another" class="delivery_per_custom_slot_add_another_<?php echo $byconsolewooodt_delivery_location_single_key;?>" value="Add" onclick="delivery_per_custom_slot_add_another(this)">


 </div>


</div>


<hr/>





<?php	


		$slot++;


		}


echo '</div>';		


	}


}


add_action('admin_init', 'byconsolewooodt_delivery_per_custom_slot_settings_fields');





function byconsolewooodt_delivery_per_custom_slot_settings_fields()


{	


add_settings_section("vanmanagementsection", "Van Management Settings", null, "byconsolewooodt_vanmanagement_setting_options");





add_settings_field("byconsolewooodt_delivery_per_custom_slot_confirm_box", "Enable custom slot:<p style='color: #999;'>( This will remove the default time slot and populate your custom timing and this will be same for all days )  </p>", "byconsolewooodt_delivery_per_custom_slot_confirm_box", "byconsolewooodt_vanmanagement_setting_options", "vanmanagementsection");





add_settings_field("pickup_per_custom_slot", "Pick Up Location:", "byconsolewooodt_pickup_per_custom_slot", "byconsolewooodt_vanmanagement_setting_options", "vanmanagementsection");





add_settings_field("delivery_per_custom_slot", "Delivery Location:", "byconsolewooodt_delivery_per_custom_slot", "byconsolewooodt_vanmanagement_setting_options", "vanmanagementsection");


register_setting("vanmanagementsection", "byconsolewooodt_delivery_per_custom_slot_confirm_box");


register_setting("vanmanagementsection", "pickup_per_custom_slot");


register_setting("vanmanagementsection", "delivery_per_custom_slot");


}





?>