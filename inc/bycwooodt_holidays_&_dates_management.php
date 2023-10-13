<?php

function byconsolewooodt_admin_holiday_settings_form(){?>

<div class="wrap">
<h1>ByConsole Woocommerce Order Delivery Time holidays and dates settings pannel</h1>
<form method="post" class="form_byconsolewooodt_plugin_settings" action="options.php">
<?php

settings_fields("holidaysection");
do_settings_sections("byconsolewooodt_holiday_setting_options");      
submit_button(); 
?>          
</form>
</div>
<?php 
}


function byconsolewooodt_admin_special_open_date_setting(){
?>
<script>
var dateToday = new Date();
jQuery(document).ready(function() {
jQuery( "#byconsolewooodt_admin_special_open_date" ).multiDatesPicker({
numberOfMonths: 3,
showButtonPanel: true,
dateFormat: 'mm/dd/yy'
//minDate: dateToday
});
});
</script>

<input type="text" id="byconsolewooodt_admin_special_open_date" name="byconsolewooodt_admin_special_open_date" class="bycwooodt_admin_fields_design"  value="<?php printf(get_option('byconsolewooodt_admin_special_open_date')); ?>"><span class="calendar_opentext">Click On Text Box To Open Calendar </span>   
<?php }



function byconsolewooodt_admin_national_holiday_date_setting(){?>

<script>

jQuery(document).ready(function() {

function checkRecurringHolidaysDates(date,$this){	

todays_date_month=(date.getMonth()+1);

todays_date_date=date.getDate();

if(todays_date_month<10){

	todays_date_month = '0'+todays_date_month;
}

else
{

	todays_date_month = todays_date_month;

}

if(todays_date_date<10){

	todays_date_date= '0'+todays_date_date;

}

else
{

	todays_date_date = todays_date_date;

}





	var mon_date = todays_date_month+'/'+todays_date_date;





	





	var strVale = '<?php echo get_option('byconsolewooodt_admin_national_holiday_date')?>';	





	





	if (strVale.indexOf(mon_date) > -1)





	{





		// var element_class=date.closest.className;





		// alert(element_class);





			//alert("Remove Class" + mon_date);





			





			//var a =jQuery(this).closest("td").className;





			





			/*var day  = el.selectedDay,





            var	mon  = el.selectedMonth,





            var	year = el.selectedYear;*/





			//var a=jQuery(date).parent().attr("class");





					





			//alert(a);





			





			//var a = jQuery($this).("td.ui-state-highlight");





			





			//alert(a);





			





			//console.log($this);





			





			$returnclass= "ui-state-highlight"; 





		





		 





		





	}





	else





	{





		$returnclass= "";





	}











	//return [true,$returnclass];





	return [true,$returnclass];





	





	}	

















jQuery( "#byconsolewooodt_admin_national_holiday_date" ).multiDatesPicker({











beforeShowDay: function(date){ return checkRecurringHolidaysDates( date, this ); },











numberOfMonths: 1,





showButtonPanel: true,





changeMonth: true,





changeYear: false,





dateFormat: 'mm/dd'





});





} );





</script>





<input type="text" id="byconsolewooodt_admin_national_holiday_date" name="byconsolewooodt_admin_national_holiday_date" class="bycwooodt_admin_fields_design" value="<?php printf(get_option('byconsolewooodt_admin_national_holiday_date')); ?>"><span class="calendar_opentext">Click On Text Box To Open Calendar And Select Your National Holidays </span>





<?php }	





function byconsolewooodt_admin_holiday_date_setting(){

?>

<script>





var dateToday = new Date();





jQuery(document).ready(function() {





jQuery( "#byconsolewooodt_admin_holiday_date" ).multiDatesPicker({





numberOfMonths: 3,





showButtonPanel: true,





dateFormat: 'mm/dd/yy'





//minDate: dateToday





});





} );





</script>





<input type="text" id="byconsolewooodt_admin_holiday_date" name="byconsolewooodt_admin_holiday_date" class="bycwooodt_admin_fields_design" value="<?php printf(get_option('byconsolewooodt_admin_holiday_date')); ?>"><span class="calendar_opentext">Click On Text Box To Open Calendar </span>   





<?php }





function byconsolewooodt_admin_closing_setting()

{ 





$sunday = get_option('byconsolewooodt_admin_closing_sunday');





$monday = get_option('byconsolewooodt_admin_closing_monday');





$tuesday = get_option('byconsolewooodt_admin_closing_tuesday');





$wednessday = get_option('byconsolewooodt_admin_closing_wednessday');





$thursday = get_option('byconsolewooodt_admin_closing_thursday');





$friday = get_option('byconsolewooodt_admin_closing_friday');





$saturday = get_option('byconsolewooodt_admin_closing_saturday');





?>





<div class="closings_by_day">





<span>Sunday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_sunday" id="byconsolewooodt_admin_closing"  class="byconsolewooodt_admin_element_field checkbox" value="0" <?php if($sunday =='0') { ?> checked="checked" <?php }?> /><br /><br />





<span>Monday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_monday" id="byconsolewooodt_admin_closing" class="byconsolewooodt_admin_element_field checkbox" value="1" <?php if($monday =='1') { ?> checked="checked" <?php }?> /><br /><br />





<span>Tuesday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_tuesday" id="byconsolewooodt_admin_closing" class="byconsolewooodt_admin_element_field checkbox" value="2" <?php if($tuesday =='2') { ?> checked="checked" <?php }?>/><br /><br />





<span>Wednessday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_wednessday" id="byconsolewooodt_admin_closing" class="byconsolewooodt_admin_element_field checkbox" value="3" <?php if($wednessday =='3') { ?> checked="checked" <?php }?>/><br /><br />





<span>Thursday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_thursday" id="byconsolewooodt_admin_closing"class="byconsolewooodt_admin_element_field checkbox" value="4" <?php if($thursday =='4') { ?> checked="checked" <?php }?>/><br /><br />





<span>Friday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_friday" id="byconsolewooodt_admin_closing" class="byconsolewooodt_admin_element_field checkbox" value="5" <?php if($friday =='5') { ?> checked="checked" <?php }?>/><br /><br />





<span>Saturday:</span><input type="checkbox" name="byconsolewooodt_admin_closing_saturday" id="byconsolewooodt_admin_closing" class="byconsolewooodt_admin_element_field checkbox" value="6" <?php if($saturday =='6') { ?> checked="checked" <?php }?>/>





</div>





<?php }



add_action('admin_init', 'byconsolewooodt_holiday_settings_fields');

function byconsolewooodt_holiday_settings_fields(){

add_settings_section("holidaysection", "", null, "byconsolewooodt_holiday_setting_options");



add_settings_field("byconsolewooodt_admin_special_open_date", "Special Open Dates:", "byconsolewooodt_admin_special_open_date_setting", "byconsolewooodt_holiday_setting_options", "holidaysection");

add_settings_field("byconsolewooodt_admin_national_holiday_date", "National Holidays Date:", "byconsolewooodt_admin_national_holiday_date_setting", "byconsolewooodt_holiday_setting_options", "holidaysection");





add_settings_field("byconsolewooodt_admin_holiday_date", "Casual Holidays Date:", "byconsolewooodt_admin_holiday_date_setting", "byconsolewooodt_holiday_setting_options", "holidaysection");





add_settings_field("byconsolewooodt_admin_holiday", "Select Closing Day:", "byconsolewooodt_admin_closing_setting", "byconsolewooodt_holiday_setting_options", "holidaysection");




register_setting("holidaysection", "byconsolewooodt_admin_special_open_date");

register_setting("holidaysection", "byconsolewooodt_admin_national_holiday_date");

register_setting("holidaysection", "byconsolewooodt_admin_holiday_date");

register_setting("holidaysection", "byconsolewooodt_admin_closing_sunday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_monday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_tuesday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_wednessday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_thursday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_friday");

register_setting("holidaysection", "byconsolewooodt_admin_closing_saturday");

}
?>