//alert(location_index);

/*

echo 'if(curtime > "'.get_option('byconsolewooodt_pickup_hours_from').'"){';

echo 'var start_time=curtime;';

echo '}else{';

echo 'var start_time="'.get_option('byconsolewooodt_pickup_hours_from').'";}';

//echo 'alert(start_time);';

*/

//alert('start_time_updated_as_per_selected_date - pickup_ending_time : '+start_time_updated_as_per_selected_date+' - '+pickup_ending_time);

//alert(start_time_updated_as_per_selected_date - pickup_ending_time);

//console.log('pickup_ending_time 1- '+ pickup_ending_time);
//console.log('start_time_updated_as_per_selected_date -'+ start_time_updated_as_per_selected_date);
//console.log('pickup_break_time_start -'+ 'abc');

var byc_start_time_array=start_time_updated_as_per_selected_date.split(':');

var byc_end_time_array=pickup_ending_time.split(':');

//alert('pickup_break_time_start: '+pickup_break_time_start);

var byc_break_start_time_array=pickup_break_time_start.split(':');

//alert(byc_break_start_time_array);

var byc_break_end_time_array=pickup_break_time_end.split(':');

var byc_start_time_hour=byc_start_time_array[0];

var byc_start_time_minute=byc_start_time_array[1];

//alert('byc_start_time_hour:byc_start_time_minute | '+byc_start_time_hour+':'+byc_start_time_minute);

var byc_end_time_hour=byc_end_time_array[0];

var byc_end_time_minute=byc_end_time_array[1];

var byc_break_start_time_hour=byc_break_start_time_array[0];

var byc_break_start_time_minute=byc_break_start_time_array[1];

var byc_break_end_time_hour=byc_break_end_time_array[0];

var byc_break_end_time_minute=byc_break_end_time_array[1];

interval_time_set=[];

interval_time_set[1]=start_time_updated_as_per_selected_date;

var ii=2;

//alert('byc_break_start_time_hour:byc_start_time_hour = '+byc_break_start_time_hour+':'+byc_start_time_hour);

var next_start_hour=parseInt(byc_start_time_hour);

var next_start_minute=parseInt(byc_start_time_minute)+30;

//console.log('next_start_minute - ' + next_start_minute);

//alert("byc_break_start_time_hour>=next_start_hour: " +byc_break_start_time_hour+ '>=' + next_start_hour);

while(parseInt(byc_break_start_time_hour) >= parseInt(next_start_hour)){

//alert(ii);	

if(parseInt(byc_break_start_time_hour) > parseInt(next_start_hour)){

/***/

if(parseInt(next_start_minute) < 60)

{

//alert(parseInt(next_start_minute) + '< 60');

//alert("next_start_minute1:" +next_start_minute);

if(parseInt(next_start_minute)<10){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

next_start_hour=parseInt(next_start_hour);

//next_start_minute=parseInt(next_start_minute)+30;

}

else if(parseInt(next_start_minute) == 60)

{

//alert(parseInt(next_start_minute) + '== 60');

next_start_hour=parseInt(next_start_hour)+1;

next_start_minute=parseInt(0);

//alert(next_start_minute);

if(parseInt(next_start_minute)<=9){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

//next_start_minute=parseInt(next_start_minute)+30;

//alert("next_start_minute2:" +next_start_minute);

}else if(parseInt(next_start_minute) > 60)

{

//alert(parseInt(next_start_minute) + '> 60');

next_start_hour=parseInt(next_start_hour)+1;

next_start_minute=parseInt(next_start_minute)-60;

if(parseInt(next_start_minute)<10){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

//next_start_minute=parseInt(next_start_minute)+30;

//alert("next_start_minute3:" +next_start_minute);

}else

{

alert ('Issue with time settings, please report to site admin - ByConsole');

alert('at poistion 1');

}

/***/

}

if(parseInt(byc_break_start_time_hour) == parseInt(next_start_hour)){

if(parseInt(byc_break_start_time_minute) >= parseInt(next_start_minute)){

/*****/

if(parseInt(next_start_minute) < 60){

//alert(parseInt(next_start_minute) + '< 60');

//alert("next_start_minute1:" +next_start_minute);

if(parseInt(next_start_minute)<10){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

next_start_hour=parseInt(next_start_hour);

//next_start_minute=parseInt(next_start_minute)+30;

}else if(parseInt(next_start_minute) == 60){

//alert(parseInt(next_start_minute) + '== 60');

next_start_hour=parseInt(next_start_hour)+1;

next_start_minute=parseInt(0);

//alert(next_start_minute);

if(parseInt(next_start_minute)<10){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

//next_start_minute=parseInt(next_start_minute)+30;

//alert("next_start_minute2:" +next_start_minute);

}else if(parseInt(next_start_minute) > 60){

//alert(parseInt(next_start_minute) + '> 60');

next_start_hour=parseInt(next_start_hour)+1;

next_start_minute=parseInt(next_start_minute)-60;

if(parseInt(next_start_minute)<10){

next_start_minute_to_push='0'+next_start_minute.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute;

}

interval_time_set[ii]= next_start_hour+':'+next_start_minute_to_push;

//next_start_minute=parseInt(next_start_minute)+30;

//alert("next_start_minute3:" +next_start_minute);

}else{

alert ('Issue with time settings, please report to site admin - ByConsole');

alert('at poistion 1');

}

/*****/

}

}

//alert(next_start_hour);

//alert('next_start_hour:next_start_minute = '+next_start_hour + ':' + next_start_minute);		

next_start_minute=parseInt(next_start_minute)+30;

if(next_start_minute==60){

next_start_minute=00;

next_start_hour=parseInt(next_start_hour)+1;	

//alert("next_start_minute4:" +next_start_minute);		

}

if(next_start_minute>60){

next_start_minute=parseInt(next_start_minute)-60;

next_start_hour=parseInt(next_start_hour)+1;	

//alert("next_start_minute5:" +next_start_minute);		

}

ii++;

}

//console.log('ZZZ');

//console.log(interval_time_set);

//console.log(interval_time_set.length);

/*********************************/

interval_time_set2=[];

interval_time_set2[1]=start_time_updated_as_per_selected_date;

var iii=2;

var next_start_hour2=parseInt(byc_break_end_time_hour);

////var next_start_minute2=parseInt(byc_start_time_minute)+30;

var next_start_minute2=parseInt(byc_start_time_minute);

//alert("next_start_hour2--"+ next_start_hour2);

//alert("byc_end_time_hour-----" + ">=" +byc_end_time_hour+ 'next_start_hour-----' + next_start_hour);

while(parseInt(byc_end_time_hour) >= parseInt(next_start_hour2)){

//alert(next_start_hour2);	

if(parseInt(byc_end_time_hour) > parseInt(next_start_hour2)){

/***/

if(parseInt(next_start_minute2) < 60){

//alert(parseInt(next_start_minute) + '< 60');

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':'+next_start_minute_to_push;

next_start_hour2=parseInt(next_start_hour2);

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else if(parseInt(next_start_minute2) == 60){

//alert(parseInt(next_start_minute) + '== 60');

next_start_hour2=parseInt(next_start_hour2)+1;

//alert(next_start_hour2);

next_start_minute2=parseInt(0);

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':'+next_start_minute_to_push;

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else if(parseInt(next_start_minute2) > 60){

//alert(parseInt(next_start_minute) + '> 60');

next_start_hour2=parseInt(next_start_hour2)+1;

next_start_minute2=parseInt(next_start_minute2)-60;

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':'+next_start_minute_to_push;

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else{

alert ('Issue with time settings, please report to site admin - ByConsole');

alert('at poistion 3');

}

/***/

//alert('parseInt(next_start_minute2: '+parseInt(next_start_minute2));

}

if(parseInt(byc_end_time_hour) == parseInt(next_start_hour2)){

if(parseInt(byc_end_time_minute) >= parseInt(next_start_minute2)){

/***/

if(parseInt(next_start_minute2) < 60){

//alert(parseInt(next_start_minute) + '< 60');

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':'+next_start_minute_to_push;

next_start_hour2=parseInt(next_start_hour2);

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else if(parseInt(next_start_minute2) == 60){

//alert(parseInt(next_start_minute) + '== 60');

next_start_hour2=parseInt(next_start_hour2)+1;

//alert(next_start_hour2);

next_start_minute2=parseInt(0);

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':next_start_minute_to_push';

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else if(parseInt(next_start_minute2) > 60){

//alert(parseInt(next_start_minute) + '> 60');

next_start_hour2=parseInt(next_start_hour2)+1;

next_start_minute2=parseInt(next_start_minute2)-60;

if(parseInt(next_start_minute2)<=9){

next_start_minute_to_push='0'+next_start_minute2.toString();

//alert(next_start_minute_to_push);

}else{

next_start_minute_to_push=next_start_minute2;

}

interval_time_set2[iii]= next_start_hour2+':'+next_start_minute_to_push;

//next_start_minute2=parseInt(next_start_minute2)+30;

}

else{

alert ('Issue with time settings, please report to site admin - ByConsole');

alert('at poistion 4');

}

/***/

}

}

//alert('parseInt(next_start_minute): '+parseInt(next_start_minute);

//alert('next_start_hour2' + next_start_hour2);		

next_start_minute2=parseInt(next_start_minute2)+30;

if(next_start_minute2==60)

{

next_start_minute2=00;

next_start_hour2=parseInt(next_start_hour2)+1;			

}

if(next_start_minute2>60)

{

next_start_minute2=parseInt(next_start_minute2)-60;

next_start_hour2=parseInt(next_start_hour2)+1;			

}

iii++;

}

/*******************************/	

//console.log(interval_time_set2);

var indexToRemove = 2;

var interval_time_set2 = interval_time_set2.splice(indexToRemove);

//console.log(interval_time_set2);

//alert(last);

/*

alert("start_time_updated_as_per_selected_date--" + start_time_updated_as_per_selected_date + "pickup_ending_time--" + pickup_ending_time + "pickup_break_time_start--" + pickup_break_time_start + "pickup_break_time_end--" + pickup_break_time_end);

*/

<?php 

$byconsolewooodt_hours_format_val = $get_byc_wooodt_data['byconsolewooodt_hours_format'];

$display_time_formate_as_val = $get_byc_wooodt_data['display_time_formate_as'];

if($byconsolewooodt_hours_format_val == 'h:i A' && $display_time_formate_as_val == 'time_slot')

{

?>

var interval_time_set2_last_value = interval_time_set2.slice(-1)[0]

//var interval_time_set2_last_value = interval_time_set2[0];

interval_time_set2_last_value_split = interval_time_set2_last_value.split(':');

//alert(interval_time_set2_last_value_split[1]);

if(interval_time_set2_last_value_split[1] == 0)

{

var interval_time_set2_last_value_add_val = '00';

var interval_time_set2_last_value_add_val_minutes_more = parseInt(interval_time_set2_last_value_split[1]) + 30;

var interval_time_set2_last_value_add_val_hours_more = interval_time_set2_last_value_split[0];

}

else

{

var interval_time_set2_last_value_add_val = interval_time_set2_last_value_split[1];

var interval_time_set2_last_value_add_val_minutes_more = parseInt(interval_time_set2_last_value_split[1]) + 30;

}

if(interval_time_set2_last_value_add_val_minutes_more > 59)

{	

//alert("aa");

var interval_time_set2_last_value_add_val_hours_more_break_time_end = (parseInt(interval_time_set2_last_value_split[0]) + 1 )+ ":" + '00';

}

else

{

//alert("bb");

var interval_time_set2_last_value_add_val_hours_more_break_time_end = interval_time_set2_last_value_split[0]+ ':' +interval_time_set2_last_value_add_val_minutes_more;

}

start_time_updated_as_per_selected_date = interval_time_set2_last_value_split[0]+interval_time_set2_last_value_add_val;

pickup_ending_time = interval_time_set2_last_value_split[0]+interval_time_set2_last_value_add_val;

pickup_break_time_start = interval_time_set2_last_value_split[0]+ ':' + interval_time_set2_last_value_split[1];

pickup_break_time_end = interval_time_set2_last_value_add_val_hours_more_break_time_end;

//alert("pickup_break_time_start" + interval_time_set2_last_value_split[0] + '--' + interval_time_set2_last_value_add_val_minutes_more);

// alert("pickup_break_time_end" + interval_time_set2_last_value_add_val_hours_more_break_time_end + '--' + interval_time_set2_last_value_add_val_minutes_more);

var interval_time_set_length = interval_time_set.length;

var pickup_time_data_array = [];

for (var i_len = 1; i_len < interval_time_set_length; i_len++) 

{		

//console.log(i_len);	

//console.log(i_len + '===' + interval_time_set_length);	

var key_val = interval_time_set[i_len];

var key_next_index = parseInt(i_len)+1;		 

//console.log(parseInt(next_index) +'<'+ interval_time_set_length);

if(key_next_index < interval_time_set_length)

{

var key_val_next = interval_time_set[key_next_index];

/******************************************************************/

key_val_split = key_val.split(":");				

key_val_next_split = key_val_next.split(":");

if(key_val_split[1] > 0)

{

var key_next_index_val = parseInt(interval_time_set[i_len])+1+':00';

}

else

{

var key_next_index_val = parseInt(interval_time_set[i_len])+':30';

}

var timeString = key_val;

var hourEnd = timeString.indexOf(":");

var H = +timeString.substr(0, hourEnd);

var h = H % 12 || 12;

var ampm = H < 12 ? "AM" : "PM";

timeString = h + timeString.substr(hourEnd, 3) + ampm;

var timeStringg = key_next_index_val;

var hourEndd = timeStringg.indexOf(":");

var HH = +timeStringg.substr(0, hourEndd);

var hh = HH % 12 || 12;

var ampmm = HH < 12 ? "AM" : "PM";

timeStringg = hh + timeStringg.substr(hourEndd, 3) + ampmm;

/*********************************************************************************************************/

var pickup_time_obj_val = {label: timeString + ' - ' + timeStringg, value: timeString + ' - ' + timeStringg};

pickup_time_data_array.push(pickup_time_obj_val);

}

}

var interval_time_set_length2 = interval_time_set2.length;	

var pickup_time_data_array2 = [];

for (var i_len2 = 0; i_len2 < interval_time_set_length2; i_len2++) 

{		

//console.log(i_len);	

//console.log(i_len2 + '===' + interval_time_set_length2);	

var key_val2 = interval_time_set2[i_len2];

//alert("key_val2---" + key_val2);

var next_index2 = parseInt(i_len2)+1;		 

//console.log(parseInt(next_index2) +'<'+ interval_time_set_length2);

if(next_index2 < interval_time_set_length2)

{

var key_val_next2 = interval_time_set2[next_index2];

/******************************************************************/

key_val_split2 = key_val2.split(":");	

key_val_next_split2 = key_val_next2.split(":");

if(key_val_split2[1] > 0)

{

var key_next_index_val2 = parseInt(interval_time_set2[i_len2])+1+':00';

}

else

{

var key_next_index_val2 = parseInt(interval_time_set2[i_len2])+':30';

}

var timeString2 = key_val2;

var hourEnd2 = timeString2.indexOf(":");

var H_2 = +timeString2.substr(0, hourEnd2);

var h_2 = H_2 % 12 || 12;

var ampm2 = H_2 < 12 ? "AM" : "PM";

timeString2 = h_2 + timeString2.substr(hourEnd2, 3) + ampm2;

var timeStringg2 = key_next_index_val2;

var hourEndd2 = timeStringg2.indexOf(":");

var HH2 = +timeStringg2.substr(0, hourEndd2);

var hh2 = HH2 % 12 || 12;

var ampmm2 = HH2 < 12 ? "AM" : "PM";

timeStringg2 = hh2 + timeStringg2.substr(hourEndd2, 3) + ampmm2;

//console.log(key_val2);

/***************************************************************/

//alert("timeString2:-" + timeString2 + "timeStringg2:- " + timeStringg2);

var pickup_time_obj_val2 = {label: timeString2 + ' - ' + timeStringg2, value: timeString2 + ' - ' + timeStringg2};

pickup_time_data_array2.push(pickup_time_obj_val2);

}

}

//alert("AAAA");

var pickup_time_data_array3 = pickup_time_data_array.concat(pickup_time_data_array2); 

<?php } 

else if($byconsolewooodt_hours_format_val == 'H:i' && $display_time_formate_as_val == 'time_slot') { ?>

//alert("BBBB");

var interval_time_set2_last_value = interval_time_set2.slice(-1)[0];

//var interval_time_set2_last_value = interval_time_set2[0];

interval_time_set2_last_value_split = interval_time_set2_last_value.split(':');

//alert(interval_time_set2_last_value_split[1]);

if(interval_time_set2_last_value_split[1] == 0)

{

var interval_time_set2_last_value_add_val = '00';

var interval_time_set2_last_value_add_val_minutes_more = parseInt(interval_time_set2_last_value_split[1]) + 30;

var interval_time_set2_last_value_add_val_hours_more = interval_time_set2_last_value_split[0];

}

else

{

var interval_time_set2_last_value_add_val = interval_time_set2_last_value_split[1];

var interval_time_set2_last_value_add_val_minutes_more = parseInt(interval_time_set2_last_value_split[1]) + 30;

}

if(interval_time_set2_last_value_add_val_minutes_more > 59)

{	

//alert("aa");

var interval_time_set2_last_value_add_val_hours_more_break_time_end = (parseInt(interval_time_set2_last_value_split[0]) + 1 )+ ":" + '00';

}

else

{

//alert("bb");

var interval_time_set2_last_value_add_val_hours_more_break_time_end = interval_time_set2_last_value_split[0]+ ':' +interval_time_set2_last_value_add_val_minutes_more;

}

start_time_updated_as_per_selected_date = interval_time_set2_last_value_split[0]+interval_time_set2_last_value_add_val;

pickup_ending_time = interval_time_set2_last_value_split[0]+interval_time_set2_last_value_add_val;

pickup_break_time_start = interval_time_set2_last_value_split[0]+ ':' + interval_time_set2_last_value_split[1];

pickup_break_time_end = interval_time_set2_last_value_add_val_hours_more_break_time_end;

var interval_time_set_length = interval_time_set.length;

var pickup_time_data_array = [];

for (var i_len = 1; i_len < interval_time_set_length; i_len++) 

{		

//console.log(i_len);	

//console.log(i_len + '===' + interval_time_set_length);	

var key_val = interval_time_set[i_len];

var key_next_index = parseInt(i_len)+1;		 

//console.log(parseInt(next_index) +'<'+ interval_time_set_length);

if(key_next_index < interval_time_set_length)

{

var key_val_next = interval_time_set[key_next_index];

/******************************************************************/

key_val_split = key_val.split(":");				

key_val_next_split = key_val_next.split(":");

if(key_val_split[1] > 0)

{

var key_next_index_val = parseInt(interval_time_set[i_len])+1+':00';

}

else

{

var key_next_index_val = parseInt(interval_time_set[i_len])+':30';

}

/*********************************************************************************************************/

var pickup_time_obj_val = {label: key_val + ' - ' + key_next_index_val, value: key_val + ' - ' + key_next_index_val};

pickup_time_data_array.push(pickup_time_obj_val);

}

}

var interval_time_set_length2 = interval_time_set2.length;	

var pickup_time_data_array2 = [];

for (var i_len2 = 0; i_len2 < interval_time_set_length2; i_len2++) 

{		

//console.log(i_len);	

//console.log(i_len2 + '===' + interval_time_set_length2);	

var key_val2 = interval_time_set2[i_len2];

var next_index2 = parseInt(i_len2)+1;		 

//console.log(parseInt(next_index2) +'<'+ interval_time_set_length2);

if(next_index2 < interval_time_set_length2)

{

var key_val_next2 = interval_time_set2[next_index2];

/******************************************************************/

key_val_split2 = key_val2.split(":");	

key_val_next_split2 = key_val_next2.split(":");

if(key_val_split2[1] > 0)

{

var key_next_index_val2 = parseInt(interval_time_set2[i_len2])+1+':00';

}

else

{

var key_next_index_val2 = parseInt(interval_time_set2[i_len2])+':30';

}

//console.log(key_val2);

/***************************************************************/

var pickup_time_obj_val2 = {label: key_val2 + ' - ' + key_next_index_val2, value: key_val2 + ' - ' + key_next_index_val2};

pickup_time_data_array2.push(pickup_time_obj_val2);

}

}

var pickup_time_data_array3 = pickup_time_data_array.concat(pickup_time_data_array2); 

<?php } else { ?>

<?php } ?>

//alert(start_time_updated_as_per_selected_date);

//alert(pickup_ending_time);

//console.log(pickup_time_data);

jQuery(time_field_identifier).timepicker({

//if it is not today's date selected in dateicker then do not do the past time resriction 

//if(jQuery(".byconsolewooodt_widget_date_field").datepicker( "getDate" )!= new Date();

<?php 

$byconsolewooodt_hours_format_val = $get_byc_wooodt_data['byconsolewooodt_hours_format'];	

$display_time_formate_as_val = $get_byc_wooodt_data['display_time_formate_as'];	

if(($byconsolewooodt_hours_format_val == 'h:i A' && $display_time_formate_as_val == 'time_slot') || ($byconsolewooodt_hours_format_val == 'H:i' && $display_time_formate_as_val == 'time_slot'))

{

?>

/******************************************/

'noneOption': pickup_time_data_array3,

/*********************************************/

<?php } ?>

"minTime": start_time_updated_as_per_selected_date,

//"maxTime": "<?php //echo get_option('byconsolewooodt_pickup_hours_to');?>",

"maxTime": pickup_ending_time,

"step": "15",

"timeFormat": "<?php echo $get_byc_wooodt_data['byconsolewooodt_hours_format'];?>",

"disableTimeRanges": [

[pickup_break_time_start, pickup_break_time_end]

],

"disableTextInput": "true",

"disableTouchKeyboard": "true",

"scrollDefault": "now",

"selectOnBlur": "true"


});