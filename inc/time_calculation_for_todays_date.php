/******************************************************************************************************************************************/

/******************************************************************************************************************************************/



//alert(selected_date +'=='+ todays_formated_date);





//if current time is grater than openning time then show current time





<?php if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='take_away'){?>





//alert(curtime +"||"+ pickup_opening_time);





if(curtime <= pickup_opening_time){





start_time_updated_as_per_selected_date = pickup_opening_time;





}





//alert('cur_minute:'+cur_minute + 'pickup_opening_time:' + pickup_opening_time);





//console.log('cur_minute:'+cur_minute + 'pickup_opening_time:' + pickup_opening_time);





if(curtime > pickup_opening_time){





//alert(start_time_updated_as_per_selected_date);





//alert('cur_minute:'+cur_minute);





<?php





$minimum_wait_time=$get_byc_wooodt_data['byconsolewooodt_pickup_wait_times'];





if($minimum_wait_time!='')





{





	$minimum_wait_time=$minimum_wait_time;





}





else{





	$minimum_wait_time=0;





}





?>

















cur_minute_plus_preparation_time=parseInt(cur_minute) + parseInt(<?php echo $minimum_wait_time;?>);





//alert('cur_minute+<?php //echo get_option('byconsolewooodt_delivery_times');?>:'+cur_minute_plus_preparation_time);





cur_minute_plus_preparation_time_hour=parseInt(cur_minute_plus_preparation_time/60);





cur_minute_plus_preparation_time_minute=cur_minute_plus_preparation_time%60;





//alert(cur_minute_plus_preparation_time_hour+'|'+cur_minute_plus_preparation_time_minute);





delayed_cur_hour=parseInt(cur_hour)+parseInt(cur_minute_plus_preparation_time_hour);





delayed_cur_minute=parseInt(cur_minute_plus_preparation_time_minute); //reove the current minte coz its gonna to be start from 0 as hour increased





//alert('updated time:'+ delayed_cur_hour+':'+delayed_cur_minute);





//start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute); // check this function in wp_footer





start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(delayed_cur_hour,delayed_cur_minute); // check this function in wp_footer





//alert(start_time_updated_as_per_selected_date);





//start_time_updated_as_per_selected_date=start_time_updated_as_per_selected_date + 10*60000;





//alert(start_time_updated_as_per_selected_date);





if(start_time_updated_as_per_selected_date>=pickup_ending_time){ // if the updated time is grater that closing time then say it to customer





var service_status='close';





}





}





// do not accept orders for today if the current time is closing time already





if(curtime >= pickup_ending_time){





var service_status='close';





}





<?php }





if($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field']=='levering'){?>





if(curtime <= delivery_opening_time){





start_time_updated_as_per_selected_date = delivery_opening_time;





}





if(curtime > delivery_opening_time){





//alert(start_time_updated_as_per_selected_date);





//alert('cur_minute:'+cur_minute);





<?php





$minimum_wait_time=$get_byc_wooodt_data['byconsolewooodt_delivery_times'];





if($minimum_wait_time!='')











{











	$minimum_wait_time=$minimum_wait_time;











}











else











{











	$minimum_wait_time=0;











}





?>





cur_minute_plus_preparation_time=parseInt(cur_minute) + parseInt(<?php echo $minimum_wait_time ; ?>);





alert('cur_minute+<?php //echo get_option('byconsolewooodt_delivery_times');?>:'+cur_minute_plus_preparation_time);





cur_minute_plus_preparation_time_hour=parseInt(cur_minute_plus_preparation_time/60);





cur_minute_plus_preparation_time_minute=cur_minute_plus_preparation_time%60;





alert(cur_minute_plus_preparation_time_hour+'|'+cur_minute_plus_preparation_time_minute);





delayed_cur_hour=parseInt(cur_hour)+parseInt(cur_minute_plus_preparation_time_hour);





delayed_cur_minute=parseInt(cur_minute_plus_preparation_time_minute); //reove the current minte coz its gonna to be start from 0 as hour increased





alert('updated time:'+ delayed_cur_hour+':'+delayed_cur_minute);





//start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(cur_hour,cur_minute); // check this function in wp_footer





/*











#####











#











#











#











#####











*/











// add threshold time if threshold time defined





//alert('threshold_delayed_start_time_for_delivery: '+threshold_delayed_start_time_for_delivery);











//if(threshold_delayed_start_time_for_delivery!=''){











//	start_time_updated_as_per_selected_date=threshold_delayed_start_time_for_delivery;











	//}else{





start_time_updated_as_per_selected_date = ByConsoleWooODTStartTimeByInterval(delayed_cur_hour,delayed_cur_minute); // check this function in wp_footer











	//}

















alert(start_time_updated_as_per_selected_date);





//start_time_updated_as_per_selected_date=start_time_updated_as_per_selected_date + 10*60000;





//alert(start_time_updated_as_per_selected_date);





if(start_time_updated_as_per_selected_date>=delivery_ending_time){ // if the updated time is grater that closing time then say it to customer





var service_status='close';





}





}





// do not accept orders for today if the current time is closing time already





if(curtime >= delivery_ending_time){





var service_status='close';





}





<?php }?>





//alert('equal date, so starting time is current time '+start_time_updated_as_per_selected_date)





