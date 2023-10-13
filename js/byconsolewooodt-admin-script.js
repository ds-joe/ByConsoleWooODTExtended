/*jQuery(document).ready(function(){


	jQuery("#byconsolewooodt_multiple_delivery_location").click(function(){


		//alert();	


		


		jQuery("#byconsolewooodt_delivery_location").each(function() {


			alert(jQuery(this).val());


		});


	});	


});*/


/*function location_finder($this)


{


	alert();


	


	console.log($this);


	//console.log(sel);


	var address_string = $this.value;


	var location_finder_className = $this.className;


    //alert(location_finder_className);


	


	var geocoder = new google.maps.Geocoder();


	var address_var = address_string;


	


	geocoder.geocode( { 'address': address_var}, function(results, status) 


	{


	


	  if (status == google.maps.GeocoderStatus.OK) 


	  {


		var latitude = results[0].geometry.location.lat();


		var longitude = results[0].geometry.location.lng();


		


		//alert(latitude);


		//alert(longitude);


		


		jQuery("."+location_finder_className).siblings('.byconsolewooodt_pickup_location_address_latitude').val(latitude);


		jQuery("."+location_finder_className).siblings('.byconsolewooodt_pickup_location_address_longitude').val(longitude);


		


	  } 


	}); 


	


}*/

jQuery("#byc_calendar_filter_select_all_val").click(function(){
	if(this.checked){
	   jQuery(".byc_select_unselect_val").text('Unselct All');	
	   jQuery('.byc_calendar_filter_val').each(function(){
			jQuery(".byc_calendar_filter_val").prop('checked', true);
		})
	}else{	
		jQuery(".byc_select_unselect_val").text('Select All');			
		jQuery('.byc_calendar_filter_val').each(function(){
			jQuery(".byc_calendar_filter_val").prop('checked', false);
		})
	}
});

jQuery("#byc_pickup_copy_value_to_another").click(function(){
	
	var sunStartTime = jQuery(".byconsolewooodt_pickup_location_sun_start_time1").val();
	var sunEndTime = jQuery(".byconsolewooodt_pickup_location_sun_end_time1").val();
	var sunBreakStartTime = jQuery(".byconsolewooodt_pickup_location_sun_break_start_time1").val();
	var sunBreakEndTime = jQuery(".byconsolewooodt_pickup_location_sun_break_end_time1").val();	
	
	var monStartTime = jQuery(".byconsolewooodt_pickup_location_mon_start_time1").val();
	var monEndTime = jQuery(".byconsolewooodt_pickup_location_mon_end_time1").val();
	var monBreakStartTime = jQuery(".byconsolewooodt_pickup_location_mon_break_start_time1").val();
	var monBreakEndTime = jQuery(".byconsolewooodt_pickup_location_mon_break_end_time1").val();	
	
	var tueStartTime = jQuery(".byconsolewooodt_pickup_location_tue_start_time1").val();
	var tueEndTime = jQuery(".byconsolewooodt_pickup_location_tue_end_time1").val();
	var tueBreakStartTime = jQuery(".byconsolewooodt_pickup_location_tue_break_start_time1").val();
	var tueBreakEndTime = jQuery(".byconsolewooodt_pickup_location_tue_break_end_time1").val();	
	
	var wedStartTime = jQuery(".byconsolewooodt_pickup_location_wed_start_time1").val();
	var wedEndTime = jQuery(".byconsolewooodt_pickup_location_wed_end_time1").val();
	var wedBreakStartTime = jQuery(".byconsolewooodt_pickup_location_wed_break_start_time1").val();
	var wedBreakEndTime = jQuery(".byconsolewooodt_pickup_location_wed_break_end_time1").val();	
	
	var thuStartTime = jQuery(".byconsolewooodt_pickup_location_thu_start_time1").val();
	var thuEndTime = jQuery(".byconsolewooodt_pickup_location_thu_end_time1").val();
	var thuBreakStartTime = jQuery(".byconsolewooodt_pickup_location_thu_break_start_time1").val();
	var thuBreakEndTime = jQuery(".byconsolewooodt_pickup_location_thu_break_end_time1").val();	
	
	var friStartTime = jQuery(".byconsolewooodt_pickup_location_fri_start_time1").val();
	var friEndTime = jQuery(".byconsolewooodt_pickup_location_fri_end_time1").val();
	var friBreakStartTime = jQuery(".byconsolewooodt_pickup_location_fri_break_start_time1").val();
	var friBreakEndTime = jQuery(".byconsolewooodt_pickup_location_fri_break_end_time1").val();	
	
	var satStartTime = jQuery(".byconsolewooodt_pickup_location_sat_start_time1").val();
	var satEndTime = jQuery(".byconsolewooodt_pickup_location_sat_end_time1").val();
	var satBreakStartTime = jQuery(".byconsolewooodt_pickup_location_sat_break_start_time1").val();
	var satBreakEndTime = jQuery(".byconsolewooodt_pickup_location_sat_break_end_time1").val();	
	
	var pickup_last_array_key_val = jQuery("#pickup_last_array_key").val();
	
	
	
	
	if (jQuery(".byconsolewooodt_pickup_location_sun_service1").prop('checked')==true){ 
	
		jQuery('.byconsolewooodt_pickup_location_sun_service').attr('checked', true);
	
		for (i = 0; i <= pickup_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_p_sun_start_time_val = jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val();
			var bycwooodt_p_sun_end_time_val = jQuery(".byconsolewooodt_pickup_location_sun_end_time"+i).val();
			var bycwooodt_p_sun_break_start_time = jQuery(".byconsolewooodt_pickup_location_sun_break_start_time"+i).val();
			var bycwooodt_p_sun_break_end_time = jQuery(".byconsolewooodt_pickup_location_sun_break_end_time"+i).val();
			
						
			if(bycwooodt_p_sun_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val(sunStartTime);
			}
			if(bycwooodt_p_sun_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_sun_end_time"+i).val(sunEndTime);
			}
			
			if(bycwooodt_p_sun_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_sun_break_start_time"+i).val(sunBreakStartTime);
			}
			if(bycwooodt_p_sun_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_sun_break_end_time"+i).val(sunBreakEndTime);
			}
			
		}
		
		
		/*jQuery(".byconsolewooodt_pickup_location_sun_start_time").val(sunStartTime);	
		jQuery(".byconsolewooodt_pickup_location_sun_end_time").val(sunEndTime);
		jQuery(".byconsolewooodt_pickup_location_sun_break_start_time").val(sunBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_sun_break_end_time").val(sunBreakEndTime);*/
		
				
	}else{
		
		jQuery('.byconsolewooodt_pickup_location_sun_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_sun_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_sun_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_sun_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_sun_break_end_time").val('');	
			
	}
	
	
	if (jQuery(".byconsolewooodt_pickup_location_mon_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_pickup_location_mon_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_mon_start_time_val = jQuery(".byconsolewooodt_pickup_location_mon_start_time"+i).val();
			var bycwooodt_p_mon_end_time_val = jQuery(".byconsolewooodt_pickup_location_mon_end_time"+i).val();
			var bycwooodt_p_mon_break_start_time = jQuery(".byconsolewooodt_pickup_location_mon_break_start_time"+i).val();
			var bycwooodt_p_mon_break_end_time = jQuery(".byconsolewooodt_pickup_location_mon_break_end_time"+i).val();
			
						
			if(bycwooodt_p_mon_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_mon_start_time"+i).val(monStartTime);
			}
			if(bycwooodt_p_mon_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_mon_end_time"+i).val(monEndTime);
			}
			
			if(bycwooodt_p_mon_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_mon_break_start_time"+i).val(monBreakStartTime);
			}
			if(bycwooodt_p_mon_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_mon_break_end_time"+i).val(monBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_mon_start_time").val(monStartTime);	
		jQuery(".byconsolewooodt_pickup_location_mon_end_time").val(monEndTime);
		jQuery(".byconsolewooodt_pickup_location_mon_break_start_time").val(monBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_mon_break_end_time").val(monBreakEndTime);*/	
			
	}else{
		jQuery('.byconsolewooodt_pickup_location_mon_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_mon_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_mon_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_mon_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_mon_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_pickup_location_tue_service1").prop('checked')==true){ 	
		jQuery('.byconsolewooodt_pickup_location_tue_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_tue_start_time_val = jQuery(".byconsolewooodt_pickup_location_tue_start_time"+i).val();
			var bycwooodt_p_tue_end_time_val = jQuery(".byconsolewooodt_pickup_location_tue_end_time"+i).val();
			var bycwooodt_p_tue_break_start_time = jQuery(".byconsolewooodt_pickup_location_tue_break_start_time"+i).val();
			var bycwooodt_p_tue_break_end_time = jQuery(".byconsolewooodt_pickup_location_tue_break_end_time"+i).val();
			
						
			if(bycwooodt_p_tue_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_tue_start_time"+i).val(tueStartTime);
			}
			if(bycwooodt_p_tue_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_tue_end_time"+i).val(tueEndTime);
			}
			
			if(bycwooodt_p_tue_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_tue_break_start_time"+i).val(tueBreakStartTime);
			}
			if(bycwooodt_p_tue_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_tue_break_end_time"+i).val(tueBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_tue_start_time").val(tueStartTime);	
		jQuery(".byconsolewooodt_pickup_location_tue_end_time").val(tueEndTime);
		jQuery(".byconsolewooodt_pickup_location_tue_break_start_time").val(tueBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_tue_break_end_time").val(tueBreakEndTime);*/	
			
	}else{
		jQuery('.byconsolewooodt_pickup_location_tue_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_tue_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_tue_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_tue_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_tue_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_pickup_location_wed_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_pickup_location_wed_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_wed_start_time_val = jQuery(".byconsolewooodt_pickup_location_wed_start_time"+i).val();
			var bycwooodt_p_wed_end_time_val = jQuery(".byconsolewooodt_pickup_location_wed_end_time"+i).val();
			var bycwooodt_p_wed_break_start_time = jQuery(".byconsolewooodt_pickup_location_wed_break_start_time"+i).val();
			var bycwooodt_p_wed_break_end_time = jQuery(".byconsolewooodt_pickup_location_wed_break_end_time"+i).val();
			
						
			if(bycwooodt_p_wed_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_wed_start_time"+i).val(wedStartTime);
			}
			if(bycwooodt_p_wed_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_wed_end_time"+i).val(wedEndTime);
			}
			
			if(bycwooodt_p_wed_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_wed_break_start_time"+i).val(wedBreakStartTime);
			}
			if(bycwooodt_p_wed_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_wed_break_end_time"+i).val(wedBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_wed_start_time").val(wedStartTime);	
		jQuery(".byconsolewooodt_pickup_location_wed_end_time").val(wedEndTime);
		jQuery(".byconsolewooodt_pickup_location_wed_break_start_time").val(wedBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_wed_break_end_time").val(wedBreakEndTime);	*/
			
	}else{
		jQuery('.byconsolewooodt_pickup_location_wed_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_wed_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_wed_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_wed_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_wed_break_end_time").val('');		
	}
	
	
	if (jQuery(".byconsolewooodt_pickup_location_thu_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_pickup_location_thu_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_thu_start_time_val = jQuery(".byconsolewooodt_pickup_location_thu_start_time"+i).val();
			var bycwooodt_p_thu_end_time_val = jQuery(".byconsolewooodt_pickup_location_thu_end_time"+i).val();
			var bycwooodt_p_thu_break_start_time = jQuery(".byconsolewooodt_pickup_location_thu_break_start_time"+i).val();
			var bycwooodt_p_thu_break_end_time = jQuery(".byconsolewooodt_pickup_location_thu_break_end_time"+i).val();
			
						
			if(bycwooodt_p_thu_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_thu_start_time"+i).val(thuStartTime);
			}
			if(bycwooodt_p_thu_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_thu_end_time"+i).val(thuEndTime);
			}
			
			if(bycwooodt_p_thu_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_thu_break_start_time"+i).val(thuBreakStartTime);
			}
			if(bycwooodt_p_thu_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_thu_break_end_time"+i).val(thuBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_thu_start_time").val(thuStartTime);	
		jQuery(".byconsolewooodt_pickup_location_thu_end_time").val(thuEndTime);
		jQuery(".byconsolewooodt_pickup_location_thu_break_start_time").val(thuBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_thu_break_end_time").val(thuBreakEndTime);*/
				
	}else{
		jQuery('.byconsolewooodt_pickup_location_thu_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_thu_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_thu_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_thu_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_thu_break_end_time").val('');		
	}
	
	
	if (jQuery(".byconsolewooodt_pickup_location_fri_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_pickup_location_fri_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_fri_start_time_val = jQuery(".byconsolewooodt_pickup_location_fri_start_time"+i).val();
			var bycwooodt_p_fri_end_time_val = jQuery(".byconsolewooodt_pickup_location_fri_end_time"+i).val();
			var bycwooodt_p_fri_break_start_time = jQuery(".byconsolewooodt_pickup_location_fri_break_start_time"+i).val();
			var bycwooodt_p_fri_break_end_time = jQuery(".byconsolewooodt_pickup_location_fri_break_end_time"+i).val();
			
						
			if(bycwooodt_p_fri_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_fri_start_time"+i).val(friStartTime);
			}
			if(bycwooodt_p_fri_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_fri_end_time"+i).val(friEndTime);
			}
			
			if(bycwooodt_p_fri_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_fri_break_start_time"+i).val(friBreakStartTime);
			}
			if(bycwooodt_p_fri_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_fri_break_end_time"+i).val(friBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_fri_start_time").val(friStartTime);	
		jQuery(".byconsolewooodt_pickup_location_fri_end_time").val(friEndTime);
		jQuery(".byconsolewooodt_pickup_location_fri_break_start_time").val(friBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_fri_break_end_time").val(friBreakEndTime);*/	
			
	}else{
		jQuery('.byconsolewooodt_pickup_location_fri_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_fri_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_fri_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_fri_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_fri_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_pickup_location_sat_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_pickup_location_sat_service').attr('checked', true);
		
		for (i = 0; i <= pickup_last_array_key_val; i++) {
						
			var bycwooodt_p_sat_start_time_val = jQuery(".byconsolewooodt_pickup_location_sat_start_time"+i).val();
			var bycwooodt_p_sat_end_time_val = jQuery(".byconsolewooodt_pickup_location_sat_end_time"+i).val();
			var bycwooodt_p_sat_break_start_time = jQuery(".byconsolewooodt_pickup_location_sat_break_start_time"+i).val();
			var bycwooodt_p_sat_break_end_time = jQuery(".byconsolewooodt_pickup_location_sat_break_end_time"+i).val();
			
						
			if(bycwooodt_p_sat_start_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_sat_start_time"+i).val(satStartTime);
			}
			if(bycwooodt_p_sat_end_time_val == ''){
				jQuery(".byconsolewooodt_pickup_location_sat_end_time"+i).val(satEndTime);
			}
			
			if(bycwooodt_p_sat_break_start_time == ''){
				jQuery(".byconsolewooodt_pickup_location_sat_break_start_time"+i).val(satBreakStartTime);
			}
			if(bycwooodt_p_sat_break_end_time == ''){
				jQuery(".byconsolewooodt_pickup_location_sat_break_end_time"+i).val(satBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_pickup_location_sat_start_time").val(satStartTime);	
		jQuery(".byconsolewooodt_pickup_location_sat_end_time").val(satEndTime);
		jQuery(".byconsolewooodt_pickup_location_sat_break_start_time").val(satBreakStartTime);	
		jQuery(".byconsolewooodt_pickup_location_sat_break_end_time").val(satBreakEndTime);	*/
			
	}else{
		jQuery('.byconsolewooodt_pickup_location_sat_service').attr('checked', false);
		jQuery(".byconsolewooodt_pickup_location_sat_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_sat_end_time").val('');
		jQuery(".byconsolewooodt_pickup_location_sat_break_start_time").val('');	
		jQuery(".byconsolewooodt_pickup_location_sat_break_end_time").val('');		
	}
	
		
	
});

jQuery("#byc_delivery_copy_value_to_another").click(function(){
	
	var sunStartTime = jQuery(".byconsolewooodt_delivery_location_sun_start_time1").val();
	var sunEndTime = jQuery(".byconsolewooodt_delivery_location_sun_end_time1").val();
	var sunBreakStartTime = jQuery(".byconsolewooodt_delivery_location_sun_break_start_time1").val();
	var sunBreakEndTime = jQuery(".byconsolewooodt_delivery_location_sun_break_end_time1").val();	
	
	var monStartTime = jQuery(".byconsolewooodt_delivery_location_mon_start_time1").val();
	var monEndTime = jQuery(".byconsolewooodt_delivery_location_mon_end_time1").val();
	var monBreakStartTime = jQuery(".byconsolewooodt_delivery_location_mon_break_start_time1").val();
	var monBreakEndTime = jQuery(".byconsolewooodt_delivery_location_mon_break_end_time1").val();	
	
	var tueStartTime = jQuery(".byconsolewooodt_delivery_location_tue_start_time1").val();
	var tueEndTime = jQuery(".byconsolewooodt_delivery_location_tue_end_time1").val();
	var tueBreakStartTime = jQuery(".byconsolewooodt_delivery_location_tue_break_start_time1").val();
	var tueBreakEndTime = jQuery(".byconsolewooodt_delivery_location_tue_break_end_time1").val();	
	
	var wedStartTime = jQuery(".byconsolewooodt_delivery_location_wed_start_time1").val();
	var wedEndTime = jQuery(".byconsolewooodt_delivery_location_wed_end_time1").val();
	var wedBreakStartTime = jQuery(".byconsolewooodt_delivery_location_wed_break_start_time1").val();
	var wedBreakEndTime = jQuery(".byconsolewooodt_delivery_location_wed_break_end_time1").val();	
	
	var thuStartTime = jQuery(".byconsolewooodt_delivery_location_thu_start_time1").val();
	var thuEndTime = jQuery(".byconsolewooodt_delivery_location_thu_end_time1").val();
	var thuBreakStartTime = jQuery(".byconsolewooodt_delivery_location_thu_break_start_time1").val();
	var thuBreakEndTime = jQuery(".byconsolewooodt_delivery_location_thu_break_end_time1").val();	
	
	var friStartTime = jQuery(".byconsolewooodt_delivery_location_fri_start_time1").val();
	var friEndTime = jQuery(".byconsolewooodt_delivery_location_fri_end_time1").val();
	var friBreakStartTime = jQuery(".byconsolewooodt_delivery_location_fri_break_start_time1").val();
	var friBreakEndTime = jQuery(".byconsolewooodt_delivery_location_fri_break_end_time1").val();	
	
	var satStartTime = jQuery(".byconsolewooodt_delivery_location_sat_start_time1").val();
	var satEndTime = jQuery(".byconsolewooodt_delivery_location_sat_end_time1").val();
	var satBreakStartTime = jQuery(".byconsolewooodt_delivery_location_sat_break_start_time1").val();
	var satBreakEndTime = jQuery(".byconsolewooodt_delivery_location_sat_break_end_time1").val();	
	
	var delivery_last_array_key_val = jQuery("#delivery_last_array_key").val();
	
	
	
	if (jQuery(".byconsolewooodt_delivery_location_sun_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_sun_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_sun_start_time_val = jQuery(".byconsolewooodt_delivery_location_sun_start_time"+i).val();
			var bycwooodt_d_sun_end_time_val = jQuery(".byconsolewooodt_delivery_location_sun_end_time"+i).val();
			var bycwooodt_d_sun_break_start_time = jQuery(".byconsolewooodt_delivery_location_sun_break_start_time"+i).val();
			var bycwooodt_d_sun_break_end_time = jQuery(".byconsolewooodt_delivery_location_sun_break_end_time"+i).val();
			
						
			if(bycwooodt_d_sun_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_sun_start_time"+i).val(sunStartTime);
			}
			if(bycwooodt_d_sun_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_sun_end_time"+i).val(sunEndTime);
			}
			
			if(bycwooodt_d_sun_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_sun_break_start_time"+i).val(sunBreakStartTime);
			}
			if(bycwooodt_d_sun_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_sun_break_end_time"+i).val(sunBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_sun_start_time").val(sunStartTime);	
		jQuery(".byconsolewooodt_delivery_location_sun_end_time").val(sunEndTime);
		jQuery(".byconsolewooodt_delivery_location_sun_break_start_time").val(sunBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_sun_break_end_time").val(sunBreakEndTime);*/
				
	}else{
		jQuery('.byconsolewooodt_delivery_location_sun_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_sun_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_sun_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_sun_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_sun_break_end_time").val('');		
	}
	
	
	if (jQuery(".byconsolewooodt_delivery_location_mon_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_mon_service').attr('checked', true);
		
		/*jQuery(".byconsolewooodt_delivery_location_mon_start_time").val(monStartTime);	
		jQuery(".byconsolewooodt_delivery_location_mon_end_time").val(monEndTime);
		jQuery(".byconsolewooodt_delivery_location_mon_break_start_time").val(monBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_mon_break_end_time").val(monBreakEndTime);*/	
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_mon_start_time_val = jQuery(".byconsolewooodt_delivery_location_mon_start_time"+i).val();
			var bycwooodt_d_mon_end_time_val = jQuery(".byconsolewooodt_delivery_location_mon_end_time"+i).val();
			var bycwooodt_d_mon_break_start_time = jQuery(".byconsolewooodt_delivery_location_mon_break_start_time"+i).val();
			var bycwooodt_d_mon_break_end_time = jQuery(".byconsolewooodt_delivery_location_mon_break_end_time"+i).val();
			
						
			if(bycwooodt_d_mon_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_mon_start_time"+i).val(monStartTime);
			}
			if(bycwooodt_d_mon_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_mon_end_time"+i).val(monEndTime);
			}
			
			if(bycwooodt_d_mon_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_mon_break_start_time"+i).val(monBreakStartTime);
			}
			if(bycwooodt_d_mon_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_mon_break_end_time"+i).val(monBreakEndTime);
			}
			
		}
			
	}else{
		jQuery('.byconsolewooodt_delivery_location_mon_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_mon_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_mon_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_mon_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_mon_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_delivery_location_tue_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_tue_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_tue_start_time_val = jQuery(".byconsolewooodt_delivery_location_tue_start_time"+i).val();
			var bycwooodt_d_tue_end_time_val = jQuery(".byconsolewooodt_delivery_location_tue_end_time"+i).val();
			var bycwooodt_d_tue_break_start_time = jQuery(".byconsolewooodt_delivery_location_tue_break_start_time"+i).val();
			var bycwooodt_d_tue_break_end_time = jQuery(".byconsolewooodt_delivery_location_tue_break_end_time"+i).val();
			
						
			if(bycwooodt_d_tue_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_tue_start_time"+i).val(tueStartTime);
			}
			if(bycwooodt_d_tue_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_tue_end_time"+i).val(tueEndTime);
			}
			
			if(bycwooodt_d_tue_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_tue_break_start_time"+i).val(tueBreakStartTime);
			}
			if(bycwooodt_d_tue_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_tue_break_end_time"+i).val(tueBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_tue_start_time").val(tueStartTime);	
		jQuery(".byconsolewooodt_delivery_location_tue_end_time").val(tueEndTime);
		jQuery(".byconsolewooodt_delivery_location_tue_break_start_time").val(tueBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_tue_break_end_time").val(tueBreakEndTime);*/
		
				
	}else{
		jQuery('.byconsolewooodt_delivery_location_tue_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_tue_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_tue_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_tue_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_tue_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_delivery_location_wed_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_wed_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_wed_start_time_val = jQuery(".byconsolewooodt_delivery_location_wed_start_time"+i).val();
			var bycwooodt_d_wed_end_time_val = jQuery(".byconsolewooodt_delivery_location_wed_end_time"+i).val();
			var bycwooodt_d_wed_break_start_time = jQuery(".byconsolewooodt_delivery_location_wed_break_start_time"+i).val();
			var bycwooodt_d_wed_break_end_time = jQuery(".byconsolewooodt_delivery_location_wed_break_end_time"+i).val();
			
						
			if(bycwooodt_d_wed_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_wed_start_time"+i).val(wedStartTime);
			}
			if(bycwooodt_d_wed_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_wed_end_time"+i).val(wedEndTime);
			}
			
			if(bycwooodt_d_wed_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_wed_break_start_time"+i).val(wedBreakStartTime);
			}
			if(bycwooodt_d_wed_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_wed_break_end_time"+i).val(wedBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_wed_start_time").val(wedStartTime);	
		jQuery(".byconsolewooodt_delivery_location_wed_end_time").val(wedEndTime);
		jQuery(".byconsolewooodt_delivery_location_wed_break_start_time").val(wedBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_wed_break_end_time").val(wedBreakEndTime);*/
				
	}else{
		jQuery('.byconsolewooodt_delivery_location_wed_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_wed_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_wed_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_wed_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_wed_break_end_time").val('');		
	}
	
	
	if (jQuery(".byconsolewooodt_delivery_location_thu_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_thu_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_thu_start_time_val = jQuery(".byconsolewooodt_delivery_location_thu_start_time"+i).val();
			var bycwooodt_d_thu_end_time_val = jQuery(".byconsolewooodt_delivery_location_thu_end_time"+i).val();
			var bycwooodt_d_thu_break_start_time = jQuery(".byconsolewooodt_delivery_location_thu_break_start_time"+i).val();
			var bycwooodt_d_thu_break_end_time = jQuery(".byconsolewooodt_delivery_location_thu_break_end_time"+i).val();
			
						
			if(bycwooodt_d_thu_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_thu_start_time"+i).val(thuStartTime);
			}
			if(bycwooodt_d_thu_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_thu_end_time"+i).val(thuEndTime);
			}
			
			if(bycwooodt_d_thu_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_thu_break_start_time"+i).val(thuBreakStartTime);
			}
			if(bycwooodt_d_thu_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_thu_break_end_time"+i).val(thuBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_thu_start_time").val(thuStartTime);	
		jQuery(".byconsolewooodt_delivery_location_thu_end_time").val(thuEndTime);
		jQuery(".byconsolewooodt_delivery_location_thu_break_start_time").val(thuBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_thu_break_end_time").val(thuBreakEndTime);*/	
			
	}else{
		jQuery('.byconsolewooodt_delivery_location_thu_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_thu_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_thu_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_thu_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_thu_break_end_time").val('');		
	}
	
	
	if (jQuery(".byconsolewooodt_delivery_location_fri_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_fri_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_fri_start_time_val = jQuery(".byconsolewooodt_delivery_location_fri_start_time"+i).val();
			var bycwooodt_d_fri_end_time_val = jQuery(".byconsolewooodt_delivery_location_fri_end_time"+i).val();
			var bycwooodt_d_fri_break_start_time = jQuery(".byconsolewooodt_delivery_location_fri_break_start_time"+i).val();
			var bycwooodt_d_fri_break_end_time = jQuery(".byconsolewooodt_delivery_location_fri_break_end_time"+i).val();
			
						
			if(bycwooodt_d_fri_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_fri_start_time"+i).val(friStartTime);
			}
			if(bycwooodt_d_fri_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_fri_end_time"+i).val(friEndTime);
			}
			
			if(bycwooodt_d_fri_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_fri_break_start_time"+i).val(friBreakStartTime);
			}
			if(bycwooodt_d_fri_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_fri_break_end_time"+i).val(friBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_fri_start_time").val(friStartTime);	
		jQuery(".byconsolewooodt_delivery_location_fri_end_time").val(friEndTime);
		jQuery(".byconsolewooodt_delivery_location_fri_break_start_time").val(friBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_fri_break_end_time").val(friBreakEndTime);*/
		
				
	}else{
		jQuery('.byconsolewooodt_delivery_location_fri_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_fri_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_fri_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_fri_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_fri_break_end_time").val('');		
	}
	
	if (jQuery(".byconsolewooodt_delivery_location_sat_service1").prop('checked')==true){ 
		jQuery('.byconsolewooodt_delivery_location_sat_service').attr('checked', true);
		
		for (i = 0; i <= delivery_last_array_key_val; i++) {
			
			//alert('pickup_last_array_key_val - '+ pickup_last_array_key_val + i);	
			//alert(jQuery(".byconsolewooodt_pickup_location_sun_start_time"+i).val());	
			
			var bycwooodt_d_sat_start_time_val = jQuery(".byconsolewooodt_delivery_location_sat_start_time"+i).val();
			var bycwooodt_d_sat_end_time_val = jQuery(".byconsolewooodt_delivery_location_sat_end_time"+i).val();
			var bycwooodt_d_sat_break_start_time = jQuery(".byconsolewooodt_delivery_location_sat_break_start_time"+i).val();
			var bycwooodt_d_sat_break_end_time = jQuery(".byconsolewooodt_delivery_location_sat_break_end_time"+i).val();
			
						
			if(bycwooodt_d_sat_start_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_sat_start_time"+i).val(satStartTime);
			}
			if(bycwooodt_d_sat_end_time_val == ''){
				jQuery(".byconsolewooodt_delivery_location_sat_end_time"+i).val(satEndTime);
			}
			
			if(bycwooodt_d_sat_break_start_time == ''){
				jQuery(".byconsolewooodt_delivery_location_sat_break_start_time"+i).val(satBreakStartTime);
			}
			if(bycwooodt_d_sat_break_end_time == ''){
				jQuery(".byconsolewooodt_delivery_location_sat_break_end_time"+i).val(satBreakEndTime);
			}
			
		}
		
		/*jQuery(".byconsolewooodt_delivery_location_sat_start_time").val(satStartTime);	
		jQuery(".byconsolewooodt_delivery_location_sat_end_time").val(satEndTime);
		jQuery(".byconsolewooodt_delivery_location_sat_break_start_time").val(satBreakStartTime);	
		jQuery(".byconsolewooodt_delivery_location_sat_break_end_time").val(satBreakEndTime);*/	
			
	}else{
		jQuery('.byconsolewooodt_delivery_location_sat_service').attr('checked', false);
		jQuery(".byconsolewooodt_delivery_location_sat_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_sat_end_time").val('');
		jQuery(".byconsolewooodt_delivery_location_sat_break_start_time").val('');	
		jQuery(".byconsolewooodt_delivery_location_sat_break_end_time").val('');		
	}
	
		
	
});

jQuery(document.body).on('click', '.img_button_2' ,function(){
//jQuery('.img_button_2').click(function() {
	//alert();
	jQuery('html').addClass('Image');
	formfield = jQuery(this).prev().attr('name');
	//alert('formfield----3 '+ formfield);
	tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	return false;
	});
	window.original_send_to_editor = window.send_to_editor;
	window.send_to_editor = function(html){
		//alert('formfield----4 '+ formfield);
	if (formfield) {
	fileurl = jQuery('img',html).attr('src');
	//alert(fileurl);
	//alert('formfield----5 '+ formfield);
	//jQuery('#'+formfield).val(fileurl);
	jQuery('input[name="'+formfield+'"]').val(fileurl);
	tb_remove();
	jQuery('html').removeClass('Image');
	} else {
	window.original_send_to_editor(html);
	}
};

function locationDelete(str){


	alert(str);


	jQuery('fieldset.'+str).remove();


	}


jQuery(document).on('click','#del_pickup_custom_slot',function(e){


 var alert_confirmation = confirm("Do you want to remove it.");


	if (alert_confirmation == true) {


		


		var custom_slot_to_remove=jQuery(this).parent().prop('className');


		//alert(custom_slot_to_remove);


		jQuery("div."+custom_slot_to_remove).remove();


	} else {	


	}


});





jQuery(document).on('click','#del_delivery_custom_slot',function(e){


 var alert_confirmation = confirm("Do you want to remove it.");


	if (alert_confirmation == true) {


		


		var custom_slot_to_remove=jQuery(this).parent().prop('className');


		//alert(custom_slot_to_remove);


		jQuery("div."+custom_slot_to_remove).remove();


	} else {	


	}


});





jQuery(document).on('click','#del_pickup',function(e){


 var alert_confirmation = confirm("If any order was placed for this location in past, would not be able to show this location any more on order details section.");


	


	if (alert_confirmation == true) {


		var plickup_location_to_remove=jQuery(this).attr("class");


		jQuery('fieldset.'+plickup_location_to_remove).remove();


	} else {		


	}


	


	})


	


jQuery(document).on('click','#del_delivery',function(e){


 var alert_confirmation = confirm("If any order was placed for this location in past, would not be able to show this location any more on order details section.");


	


	if (alert_confirmation == true) {


		var delivery_location_to_remove=jQuery(this).attr("class");


		jQuery('fieldset.'+delivery_location_to_remove).remove();


	} else {		


	}


	


	});	


//jQuery("#byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable").click(function(){		


//		if(jQuery("#byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable").prop('checked') === true){


//			jQuery("#byconsolewooodt_as_early_as_possible_lable_content").css("display","block");


//			jQuery("#byconsolewooodt_exact_time_lable_content").css("display","block");


//			jQuery("#byconsolewooodt_as_early_as_possible_lable_content_text").css("display","block");


//			jQuery("#byconsolewooodt_exact_time_lable_content_text").css("display","block");


//        }else{


//			jQuery("#byconsolewooodt_as_early_as_possible_lable_content").css("display","none");


//			jQuery("#byconsolewooodt_exact_time_lable_content").css("display","none");


//			jQuery("#byconsolewooodt_as_early_as_possible_lable_content_text").css("display","none");


//			jQuery("#byconsolewooodt_exact_time_lable_content_text").css("display","none");


//        }


//});