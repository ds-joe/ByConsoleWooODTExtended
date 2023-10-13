<?php if(!empty($byconsolewooodt_multiple_pickup_location_checkbox)){?>





console.log('<?php echo $byconsolewooodt_multiple_pickup_location_checkbox; ?>);





<?php 





}





if($currentlang == 'en_US' || $currentlang == 'en-US')





{





$pickup_calender_day_sun='Sun';		





$pickup_calender_day_mon='Mon';	





$pickup_calender_day_tue='Tue';	





$pickup_calender_day_wed='Wed';		





$pickup_calender_day_thu='Thu';	





$pickup_calender_day_fri='Fri';	





$pickup_calender_day_sat='Sat';	





}



/*Istonimum*/
if($currentlang == 'et')
{
	$pickup_calender_day_sun='P';	
	$pickup_calender_day_mon='E';	
	$pickup_calender_day_tue='T';	
	$pickup_calender_day_wed='K';	
	$pickup_calender_day_thu='N';	
	$pickup_calender_day_fri='R';	
	$pickup_calender_day_sat='L';	
}




/*Japanis*/	

else if($currentlang =='ja')
{
$pickup_calender_day_sun='日';
$pickup_calender_day_mon='月';
$pickup_calender_day_tue='火';
$pickup_calender_day_wed='水';
$pickup_calender_day_thu='木';
$pickup_calender_day_fri='金';
$pickup_calender_day_sat='土';
}





/*Íslenska ( is )*/





if($currentlang == 'is')





{





$pickup_calender_day_sun='Sun';





$pickup_calender_day_mon='Mán';





$pickup_calender_day_tue='Þri';	





$pickup_calender_day_wed='Mið';





$pickup_calender_day_thu='Fim';





$pickup_calender_day_fri='Fös';	





$pickup_calender_day_sat='Lau';





}





/*Suomi*/





else if($currentlang =='fi')





{





$pickup_calender_day_sun='su';		





$pickup_calender_day_mon='ma';	





$pickup_calender_day_tue='ti';	





$pickup_calender_day_wed='ke';		





$pickup_calender_day_thu='to';	





$pickup_calender_day_fri='pe';	





$pickup_calender_day_sat='la';		





}





/*Svenska(Svenska)*/





else if($currentlang =='sv-SE' || $currentlang =='sv_SE')





{





$pickup_calender_day_sun='sön';		





$pickup_calender_day_mon='mån';	





$pickup_calender_day_tue='tis';	





$pickup_calender_day_wed='ons';		





$pickup_calender_day_thu='tor';	





$pickup_calender_day_fri='fre';	





$pickup_calender_day_sat='lör';		





}





/*deutsch(sie)*/





else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE')





{





$pickup_calender_day_sun='So';





$pickup_calender_day_mon='Mo';





$pickup_calender_day_tue='Di';





$pickup_calender_day_wed='Mi';





$pickup_calender_day_thu='Do';





$pickup_calender_day_fri='Fr';





$pickup_calender_day_sat='Sa';





}





/*deutsch(schweiz)*/





else if($currentlang =='de_CH' || $currentlang =='de-CH')





{	





$pickup_calender_day_sun='So';





$pickup_calender_day_mon='Mo';





$pickup_calender_day_tue='Di';





$pickup_calender_day_wed='Mi';





$pickup_calender_day_thu='Do';





$pickup_calender_day_fri='Fr';





$pickup_calender_day_sat='Sa';





}





/*Danish*/





else if($currentlang == 'da_DK'  || $currentlang == 'da-DK')





{	





$pickup_calender_day_sun='søn';





$pickup_calender_day_mon='man';





$pickup_calender_day_tue='tirs';





$pickup_calender_day_wed='ons';





$pickup_calender_day_thu='tors';





$pickup_calender_day_fri='fre';





$pickup_calender_day_sat='lør';





}





/*French*/





else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR')





{





$pickup_calender_day_sun='dim';





$pickup_calender_day_mon='lun';





$pickup_calender_day_tue='mar';





$pickup_calender_day_wed='mer';





$pickup_calender_day_thu='jeu';





$pickup_calender_day_fri='ven';





$pickup_calender_day_sat='sam';





}







/*Español de México*/

else if($currentlang == 'es_MX' || $currentlang == 'es-MX')

{

	$pickup_calender_day_sun='Dom';

	$pickup_calender_day_mon='Lun';

	$pickup_calender_day_tue='Mar';

	$pickup_calender_day_wed='Mie';	

	$pickup_calender_day_thu='Jue';	

	$pickup_calender_day_fri='Vie';	

	$pickup_calender_day_sat='Sab';

}



/*Italian*/





else if($currentlang == 'it_IT' || $currentlang == 'it-IT')





{	





$pickup_calender_day_sun='dom';





$pickup_calender_day_mon='lun';





$pickup_calender_day_tue='mar';





$pickup_calender_day_wed='mer';





$pickup_calender_day_thu='gio';





$pickup_calender_day_fri='ven';





$pickup_calender_day_sat='sab';





}





/*Croatian*/





else if($currentlang == 'hr')





{





$pickup_calender_day_sun='Ned';





$pickup_calender_day_mon='Pon';





$pickup_calender_day_tue='Uto';





$pickup_calender_day_wed='Sri';





$pickup_calender_day_thu='Čet';





$pickup_calender_day_fri='Pet';





$pickup_calender_day_sat='Sub';





}





/*Romanian*/





else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO')





{





$pickup_calender_day_sun='Dum';





$pickup_calender_day_mon='lun';





$pickup_calender_day_tue='mar';





$pickup_calender_day_wed='mie';





$pickup_calender_day_thu='joi';





$pickup_calender_day_fri='vin';





$pickup_calender_day_sat='sâm';





}





/*Bulgarian*/





else if($currentlang =='bg_BG' || $currentlang =='bg-BG')





{	





$pickup_calender_day_sun='нд';





$pickup_calender_day_mon='пн';





$pickup_calender_day_tue='вт';





$pickup_calender_day_wed='ср';





$pickup_calender_day_thu='чт';





$pickup_calender_day_fri='пт';





$pickup_calender_day_sat='сб';





}





/*Czech*/





else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ')





{





$pickup_calender_day_sun='Ne';





$pickup_calender_day_mon='Po';





$pickup_calender_day_tue='Út';





$pickup_calender_day_wed='St';





$pickup_calender_day_thu='Čt';





$pickup_calender_day_fri='Pá';





$pickup_calender_day_sat='So';





}





/*Hungarian*/





else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU')





{





$pickup_calender_day_sun='vas';





$pickup_calender_day_mon='hét';





$pickup_calender_day_tue='ked';





$pickup_calender_day_wed='sze';





$pickup_calender_day_thu='csü';





$pickup_calender_day_fri='pén';





$pickup_calender_day_sat='szo';





}





/*Dutch*/





else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'|| $currentlang == 'nl_NL_formal')





{





$pickup_calender_day_sun='zo';





$pickup_calender_day_mon='ma';





$pickup_calender_day_tue='di';





$pickup_calender_day_wed='wo';





$pickup_calender_day_thu='do';





$pickup_calender_day_fri='vr';





$pickup_calender_day_sat='za';





}





/*Portuguese*/





else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT')





{





$pickup_calender_day_sun='Dom';





$pickup_calender_day_mon='Seg';





$pickup_calender_day_tue='Ter';





$pickup_calender_day_wed='Qua';





$pickup_calender_day_thu='Qui';





$pickup_calender_day_fri='Sex';





$pickup_calender_day_sat='Sáb';





}





/*Slovak*/





else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK')





{





$pickup_calender_day_sun='Ne';





$pickup_calender_day_mon='Po';





$pickup_calender_day_tue='Ut';





$pickup_calender_day_wed='St';





$pickup_calender_day_thu='Št';





$pickup_calender_day_fri='Pi';





$pickup_calender_day_sat='So';





}





/*Finnish*/





else if($currentlang == 'fi')





{





$pickup_calender_day_sun='su';





$pickup_calender_day_mon='ma';





$pickup_calender_day_tue='ti';





$pickup_calender_day_wed='ke';





$pickup_calender_day_thu='to';





$pickup_calender_day_fri='pe';





$pickup_calender_day_sat='la';





}





/*Français du Canada*/	





else if($currentlang =='fr_CA')





{	





$pickup_calender_day_sun='lun';





$pickup_calender_day_mon='mar';





$pickup_calender_day_tue='mer';





$pickup_calender_day_wed='jeu';





$pickup_calender_day_thu='ven';





$pickup_calender_day_fri='sam';





$pickup_calender_day_sat='dim';





}





/*spanish*/	





else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es')





{	





$pickup_calender_day_sun='Lun';





$pickup_calender_day_mon='Mar';





$pickup_calender_day_tue='Mié';





$pickup_calender_day_wed='Jue';





$pickup_calender_day_thu='Vie';





$pickup_calender_day_fri='Sáb';





$pickup_calender_day_sat='Dom';





}





/*CATALA*/	





else if($currentlang =='ca')





{	





$pickup_calender_day_sun='dl.';





$pickup_calender_day_mon='dt.';





$pickup_calender_day_tue='dc.';





$pickup_calender_day_wed='dj.';





$pickup_calender_day_thu='dv.';





$pickup_calender_day_fri='ds.';





$pickup_calender_day_sat='dg.';





}





/*Nederlands Belgie*/





else if($currentlang =='nl-BE')





{	





$pickup_calender_day_sun='Zon';





$pickup_calender_day_mon='Ma';





$pickup_calender_day_tue='Din';





$pickup_calender_day_wed='Woe';





$pickup_calender_day_thu='Do';





$pickup_calender_day_fri='Vrij';





$pickup_calender_day_sat='Zat';





}





/*Hibru*/	





else if($currentlang == 'he-IL')





{	





$pickup_calender_day_sun='א';





$pickup_calender_day_mon='ב';





$pickup_calender_day_tue='ג';





$pickup_calender_day_wed='ד';





$pickup_calender_day_thu='ה';





$pickup_calender_day_fri='ו';





$pickup_calender_day_sat='ש';





}





/*Norsk bokmål*/





else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')





{	





$pickup_calender_day_sun='søn';





$pickup_calender_day_mon='man';





$pickup_calender_day_tue='tir';





$pickup_calender_day_wed='ons';





$pickup_calender_day_thu='tor';





$pickup_calender_day_fri='fre';





$pickup_calender_day_sat='lør';





}





/*Arabic*/





else if($currentlang == 'ar')





{	





$pickup_calender_day_sun='الأحد';





$pickup_calender_day_mon='الأثنين';





$pickup_calender_day_tue='الثلاثاء';





$pickup_calender_day_wed='الأربعاء';





$pickup_calender_day_thu='الخميس';





$pickup_calender_day_fri='الجمعة';





$pickup_calender_day_sat='السبت';





}





else





{





$pickup_calender_day_sun='Sun';		





$pickup_calender_day_mon='Mon';	





$pickup_calender_day_tue='Tue';	





$pickup_calender_day_wed='Wed';		





$pickup_calender_day_thu='Thu';	





$pickup_calender_day_fri='Fri';	





$pickup_calender_day_sat='Sat';	





}





?>





if(selected_date_day=='<?php echo $pickup_calender_day_sun; ?>'){





pickup_opening_time = pickup_location_service_sun_start[location_index];





pickup_ending_time = pickup_location_service_sun_end[location_index];





pickup_break_time_start = pickup_location_service_sun_break_start[location_index];





pickup_break_time_end = pickup_location_service_sun_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_mon; ?>'){





pickup_opening_time = pickup_location_service_mon_start[location_index];





pickup_ending_time = pickup_location_service_mon_end[location_index];





pickup_break_time_start = pickup_location_service_mon_break_start[location_index];





pickup_break_time_end = pickup_location_service_mon_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_tue; ?>'){





pickup_opening_time = pickup_location_service_tue_start[location_index];





pickup_ending_time = pickup_location_service_tue_end[location_index];





pickup_break_time_start = pickup_location_service_tue_break_start[location_index];





pickup_break_time_end = pickup_location_service_tue_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_wed; ?>'){





pickup_opening_time = pickup_location_service_wed_start[location_index];





pickup_ending_time = pickup_location_service_wed_end[location_index];





pickup_break_time_start = pickup_location_service_wed_break_start[location_index];





pickup_break_time_end = pickup_location_service_wed_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_thu; ?>'){





pickup_opening_time = pickup_location_service_thu_start[location_index];





pickup_ending_time = pickup_location_service_thu_end[location_index];





pickup_break_time_start = pickup_location_service_thu_break_start[location_index];





pickup_break_time_end = pickup_location_service_thu_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_fri; ?>'){





pickup_opening_time = pickup_location_service_fri_start[location_index];





pickup_ending_time = pickup_location_service_fri_end[location_index];





pickup_break_time_start = pickup_location_service_fri_break_start[location_index];





pickup_break_time_end = pickup_location_service_fri_break_end[location_index];





}





if(selected_date_day=='<?php echo $pickup_calender_day_sat; ?>'){





pickup_opening_time = pickup_location_service_sat_start[location_index];





pickup_ending_time = pickup_location_service_sat_end[location_index];





pickup_break_time_start = pickup_location_service_sat_break_start[location_index];





pickup_break_time_end = pickup_location_service_sat_break_end[location_index];











}