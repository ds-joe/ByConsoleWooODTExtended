
jQuery("#byc_loading_image").css("display","block");

var systemCurrentDateTime = new Date(); // for now
var GetHours = systemCurrentDateTime.getHours(); // => 9
var GetMinutes = systemCurrentDateTime.getMinutes(); // =>  30
//var GetSecond = systemCurrentDateTime.getSeconds(); // => 51


if(GetHours < 10)
{
	var GetHoursVal = '0'+GetHours;
}
else
{
	var GetHoursVal = GetHours;
}

if(GetMinutes < 10)
{
	var GetMinutesVal = '0'+GetMinutes;
}
else
{
	var GetMinutesVal = GetMinutes;
}


var widgetSelectedLocation = jQuery("#byconsolewooodt_widget_pickup_location").val();

var widgetSelectedDate = jQuery("#byconsolewooodt_delivery_date_alternate").val();

var systemCurrentTime = GetHoursVal+':'+GetMinutesVal;

//alert('pickup - 1 '+ widgetSelectedDate);

//alert('systemCurrentTime  - ' + systemCurrentTime);

var selected_data = {
      'action': 'get_delivery_time_for_widget_by_selected_date',
      'selected_location_value' : widgetSelectedLocation,
      'selected_date_value' : widgetSelectedDate,
      'system_current_time' : systemCurrentTime,
    };


    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php

	var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    jQuery.post( ajaxurl, selected_data, function( response)  {
		
    //alert( 'Got this from the server: ' + response );

		jQuery("#byconsolewooodt_widget_time_field").timepicker("remove");
		jQuery("#byconsolewooodt_widget_time_field").empty();		
		jQuery("#byconsolewooodt_widget_time_field").html('wait a moment please....');
		jQuery("#byconsolewooodt_widget_time_field").append(response);
        
        jQuery("#byc_loading_image").css("display","none");

    });   