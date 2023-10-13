<?php 			
$mindate=$get_byc_wooodt_data['byconsolewooodt_restricted_preorder_days'];
$todaydate_array_var = array();
$wp_today=current_time( 'm/d/Y' );

if(!empty($mindate) || $mindate!=0 ){
	/***********************************************************/
	for($mindatecount = 1;  $mindatecount <= $mindate; $mindatecount++){		
			if($mindate == 1){
				$todaydate_array_var[] = $wp_today;
			}else{			
				$todaydate_array_var[] = date('m/d/Y' , strtotime($wp_today."+".$mindatecount." day"));
			}	
	}

	$get_all_national_holidays_dates_for_disable_date = $get_byc_wooodt_data['byconsolewooodt_admin_national_holiday_date'];

	$national_holidays_array_for_disable_date = explode(",",$get_all_national_holidays_dates_for_disable_date);
	foreach($national_holidays_array_for_disable_date as $national_holidays_array_for_disable_date_key => $national_holidays_array_for_disable_date_val)
	{

		$national_holidays_array_for_disable_date_val_with_year[] = trim($national_holidays_array_for_disable_date_val.'/'.date("Y"));
	}



$get_all_casual_holidays_dates_for_disable_date = $get_byc_wooodt_data['byconsolewooodt_admin_holiday_date'];

$casual_holidays_dates_for_disable_date_explode = explode(",", $get_all_casual_holidays_dates_for_disable_date);

foreach($casual_holidays_dates_for_disable_date_explode as $casual_holidays_dates_for_disable_date_explode_key => $casual_holidays_dates_for_disable_date_explode_val)
{

	$casual_holidays_array_for_disable_date_val[] = trim($casual_holidays_dates_for_disable_date_explode_val);

}

$nation_and_casual_holiday_merge_array = array_merge($national_holidays_array_for_disable_date_val_with_year,$casual_holidays_array_for_disable_date_val);

$nation_and_casual_holiday_array_unique_of_merge_array = array_unique($nation_and_casual_holiday_merge_array);

















foreach($todaydate_array_var as $todaydate_array_var_single_key => $todaydate_array_var_single_val)








{








	if(in_array($todaydate_array_var_single_val,$nation_and_casual_holiday_array_unique_of_merge_array))








	{		








		$byconsolewoodt_disable_date_array[] = $todaydate_array_var_single_val;		








	}

















}

















//print_r($byconsolewoodt_disable_date_array);















if(!empty($byconsolewoodt_disable_date_array)){
	$byconsolewoodt_disable_date_array_count = count($byconsolewoodt_disable_date_array);
}else{
	$byconsolewoodt_disable_date_array_count = 0;
}















//echo $subtract_val = $byconsolewoodt_total_array_matching_first_count + $byconsolewoodt_total_array_matching_second_count;








	/***********************************************************/

















//$mindate=$mindate+$subtract_val;

















	$byconsolewooodt_exclude_holidays_from_preorder_restriction_days = $get_byc_wooodt_data['byconsolewooodt_exclude_holidays_from_preorder_restriction_days'];

















	if($byconsolewooodt_exclude_holidays_from_preorder_restriction_days == 'YES')








	{








		$mindate=$mindate+$byconsolewoodt_disable_date_array_count;








	}








	else








	{








		$mindate=$mindate;








	}








	

















}else{

















$mindate=0;	

















}








		








		








		








		








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_sunday']!= '' ){ $closing_sunday = "Sunday"; } else { $closing_sunday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_monday']!= '' ){ $closing_monday = "Monday";  } else { $closing_monday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_tuesday']!= ''){ $closing_tuesday = "Tuesday"; } else { $closing_tuesday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_wednessday']!= '' ){ $closing_wednessday = "Wednessday";  } else { $closing_wednessday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_thursday']!= '' ){ $closing_thursday = "Thursday";  } else { $closing_thursday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_friday']!= '' ) { $closing_friday = "Friday";  } else { $closing_friday = ""; }








if($get_byc_wooodt_data['byconsolewooodt_admin_closing_saturday']!= '' ) { $closing_saturday = "Saturday"; } else { $closing_saturday = ""; }












































$byconsolewooodt_all_closing_day_list = $closing_sunday .'<",">'.  $closing_monday .'<",">'. $closing_tuesday .'<",">'. $closing_wednessday .'<",">'. $closing_thursday .'<",">'. $closing_friday .'<",">'. $closing_saturday;

















$byconsolewooodt_all_closing_day_list_explode = explode('<",">' ,  $byconsolewooodt_all_closing_day_list);

















$byconsolewooodt_all_closing_day_list_array_filter = array_filter($byconsolewooodt_all_closing_day_list_explode);

















//echo '<pre>';








//print_r($byconsolewooodt_all_closing_day_list_array_filter);








//echo '</pre>';

















$byconsolewooodt_today_name = date("l",strtotime($wp_today));   // Today name


























$byconsolewooodt_restricted_preorder_days_for_dayname = $get_byc_wooodt_data['byconsolewooodt_restricted_preorder_days'];

















$byconsolewooodt_next_multiple_day_name=array();

















for($r = 1; $r<= $byconsolewooodt_restricted_preorder_days_for_dayname; $r++)			//  Next Multiple Day Name.








{








	$byconsolewooodt_next_multiple_day_name[] = date("l",strtotime($wp_today . "+".$r." day"));	








}

















//echo '<pre>';








//print_r($byconsolewooodt_next_multiple_day_name);








//echo '</pre>';

















$byconsolewooodt_all_closing_day_name_array_intersect = array_intersect($byconsolewooodt_next_multiple_day_name,$byconsolewooodt_all_closing_day_list_array_filter);

















//print_r($byconsolewooodt_all_closing_day_name_array_intersect);
















if(!empty($byconsolewooodt_all_closing_day_name_array_intersect)){
	$byconsolewooodt_all_closing_day_name_array_count = count($byconsolewooodt_all_closing_day_name_array_intersect);
}else{
	$byconsolewooodt_all_closing_day_name_array_count = 0;
}



































$mindate = $mindate + $byconsolewooodt_all_closing_day_name_array_count;








?>