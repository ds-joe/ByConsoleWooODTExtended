<?php if(!empty($byconsolewooodt_multiple_delivery_location_checkbox)){?>





console.log('<?php echo $byconsolewooodt_multiple_delivery_location_checkbox; ?>');





<?php 





}





if($currentlang == 'en_US' || $currentlang == 'en-US')





{





$delivery_calender_day_sun='Sun';		





$delivery_calender_day_mon='Mon';	





$delivery_calender_day_tue='Tue';	





$delivery_calender_day_wed='Wed';	





$delivery_calender_day_thu='Thu';	





$delivery_calender_day_fri='Fri';	





$delivery_calender_day_sat='Sat';	





}




/*Istonimum*/
if($currentlang == 'et')
{
	$delivery_calender_day_sun='P';	
	$delivery_calender_day_mon='E';	
	$delivery_calender_day_tue='T';	
	$delivery_calender_day_wed='K';	
	$delivery_calender_day_thu='N';	
	$delivery_calender_day_fri='R';	
	$delivery_calender_day_sat='L';	
}



/*Japanis*/	

else if($currentlang =='ja')
{
$delivery_calender_day_sun='日';
$delivery_calender_day_mon='月';
$delivery_calender_day_tue='火';
$delivery_calender_day_wed='水';
$delivery_calender_day_thu='木';
$delivery_calender_day_fri='金';
$delivery_calender_day_sat='土';
}





/*Español de México*/

else if($currentlang == 'es_MX' || $currentlang == 'es-MX')

{

	$delivery_calender_day_sun='Dom';

	$delivery_calender_day_mon='Lun';

	$delivery_calender_day_tue='Mar';

	$delivery_calender_day_wed='Mie';	

	$delivery_calender_day_thu='Jue';	

	$delivery_calender_day_fri='Vie';	

	$delivery_calender_day_sat='Sab';

}



/*Íslenska ( is )*/





if($currentlang == 'is')





{





$delivery_calender_day_sun='Sun';





$delivery_calender_day_mon='Mán';





$delivery_calender_day_tue='Þri';	





$delivery_calender_day_wed='Mið';





$delivery_calender_day_thu='Fim';





$delivery_calender_day_fri='Fös';	





$delivery_calender_day_sat='Lau';





}





/*Suomi*/





else if($currentlang =='fi')





{





$delivery_calender_day_sun='su';		





$delivery_calender_day_mon='ma';	





$delivery_calender_day_tue='ti';	





$delivery_calender_day_wed='ke';		





$delivery_calender_day_thu='to';	





$delivery_calender_day_fri='pe';	





$delivery_calender_day_sat='la';		





}





/*Svenska(Svenska)*/





else if($currentlang =='sv-SE' || $currentlang =='sv_SE')





{





$delivery_calender_day_sun='sön';		





$delivery_calender_day_mon='mån';	





$delivery_calender_day_tue='tis';	





$delivery_calender_day_wed='ons';		





$delivery_calender_day_thu='tor';	





$delivery_calender_day_fri='fre';	





$delivery_calender_day_sat='lör';		





}





/*deutsch(sie)*/





else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE')





{





$delivery_calender_day_sun='So';





$delivery_calender_day_mon='Mo';





$delivery_calender_day_tue='Di';





$delivery_calender_day_wed='Mi';





$delivery_calender_day_thu='Do';





$delivery_calender_day_fri='Fr';





$delivery_calender_day_sat='Sa';





}





/*deutsch(schweiz)*/





else if($currentlang =='de_CH' || $currentlang =='de-CH')





{	





$delivery_calender_day_sun='So';





$delivery_calender_day_mon='Mo';





$delivery_calender_day_tue='Di';





$delivery_calender_day_wed='Mi';





$delivery_calender_day_thu='Do';





$delivery_calender_day_fri='Fr';





$delivery_calender_day_sat='Sa';





}





/*Danish*/





else if($currentlang == 'da_DK'  || $currentlang == 'da-DK')





{	





$delivery_calender_day_sun='søn';





$delivery_calender_day_mon='man';





$delivery_calender_day_tue='tirs';





$delivery_calender_day_wed='ons';





$delivery_calender_day_thu='tors';





$delivery_calender_day_fri='fre';





$delivery_calender_day_sat='lør';





}





/*French*/





else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR')





{





$delivery_calender_day_sun='dim';





$delivery_calender_day_mon='lun';





$delivery_calender_day_tue='mar';





$delivery_calender_day_wed='mer';





$delivery_calender_day_thu='jeu';





$delivery_calender_day_fri='ven';





$delivery_calender_day_sat='sam';





}



/*Español de México*/

else if($currentlang == 'es_MX' || $currentlang == 'es-MX')

{

	$delivery_calender_day_sun='Dom';

	$delivery_calender_day_mon='Lun';

	$delivery_calender_day_tue='Mar';

	$delivery_calender_day_wed='Mie';	

	$delivery_calender_day_thu='Jue';	

	$delivery_calender_day_fri='Vie';	

	$delivery_calender_day_sat='Sab';

}





/*Italian*/





else if($currentlang == 'it_IT' || $currentlang == 'it-IT')





{	





$delivery_calender_day_sun='dom';





$delivery_calender_day_mon='lun';





$delivery_calender_day_tue='mar';





$delivery_calender_day_wed='mer';





$delivery_calender_day_thu='gio';





$delivery_calender_day_fri='ven';





$delivery_calender_day_sat='sab';





}





/*Croatian*/





else if($currentlang == 'hr')





{





$delivery_calender_day_sun='Ned';





$delivery_calender_day_mon='Pon';





$delivery_calender_day_tue='Uto';





$delivery_calender_day_wed='Sri';





$delivery_calender_day_thu='Čet';





$delivery_calender_day_fri='Pet';





$delivery_calender_day_sat='Sub';





}





/*Romanian*/





else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO')





{





$delivery_calender_day_sun='Dum';





$delivery_calender_day_mon='lun';





$delivery_calender_day_tue='mar';





$delivery_calender_day_wed='mie';





$delivery_calender_day_thu='joi';





$delivery_calender_day_fri='vin';





$delivery_calender_day_sat='sâm';





}





/*Bulgarian*/





else if($currentlang =='bg_BG' || $currentlang =='bg-BG')





{	





$delivery_calender_day_sun='нд';





$delivery_calender_day_mon='пн';





$delivery_calender_day_tue='вт';





$delivery_calender_day_wed='ср';





$delivery_calender_day_thu='чт';





$delivery_calender_day_fri='пт';





$delivery_calender_day_sat='сб';





}





/*Czech*/





else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ')





{





$delivery_calender_day_sun='Ne';





$delivery_calender_day_mon='Po';





$delivery_calender_day_tue='Út';





$delivery_calender_day_wed='St';





$delivery_calender_day_thu='Čt';





$delivery_calender_day_fri='Pá';





$delivery_calender_day_sat='So';





}





/*Hungarian*/





else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU')





{





$delivery_calender_day_sun='vas';





$delivery_calender_day_mon='hét';





$delivery_calender_day_tue='ked';





$delivery_calender_day_wed='sze';





$delivery_calender_day_thu='csü';





$delivery_calender_day_fri='pén';





$delivery_calender_day_sat='szo';





}





/*Dutch*/





else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE' || $currentlang == 'nl_NL_formal')





{





$delivery_calender_day_sun='zo';





$delivery_calender_day_mon='ma';





$delivery_calender_day_tue='di';





$delivery_calender_day_wed='wo';





$delivery_calender_day_thu='do';





$delivery_calender_day_fri='vr';





$delivery_calender_day_sat='za';





}





/*Portuguese*/





else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT')





{





$delivery_calender_day_sun='Dom';





$delivery_calender_day_mon='Seg';





$delivery_calender_day_tue='Ter';





$delivery_calender_day_wed='Qua';





$delivery_calender_day_thu='Qui';





$delivery_calender_day_fri='Sex';





$delivery_calender_day_sat='Sáb';





}





/*Slovak*/





else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK')





{





$delivery_calender_day_sun='Ne';





$delivery_calender_day_mon='Po';





$delivery_calender_day_tue='Ut';





$delivery_calender_day_wed='St';





$delivery_calender_day_thu='Št';





$delivery_calender_day_fri='Pi';





$delivery_calender_day_sat='So';





}





/*Finnish*/





else if($currentlang == 'fi')





{





$delivery_calender_day_sun='su';





$delivery_calender_day_mon='ma';





$delivery_calender_day_tue='ti';





$delivery_calender_day_wed='ke';





$delivery_calender_day_thu='to';





$delivery_calender_day_fri='pe';





$delivery_calender_day_sat='la';





}





/*Français du Canada*/	





else if($currentlang =='fr_CA' || $currentlang =='fr-CA')





{	





$delivery_calender_day_sun='lun';





$delivery_calender_day_mon='mar';





$delivery_calender_day_tue='mer';





$delivery_calender_day_wed='jeu';





$delivery_calender_day_thu='ven';





$delivery_calender_day_fri='sam';





$delivery_calender_day_sat='dim';





}





/*spanish*/	





else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es')





{	





$delivery_calender_day_sun='Lun';





$delivery_calender_day_mon='Mar';





$delivery_calender_day_tue='Mié';





$delivery_calender_day_wed='Jue';





$delivery_calender_day_thu='Vie';





$delivery_calender_day_fri='Sáb';





$delivery_calender_day_sat='Dom';





}





/*CATALA*/	





else if($currentlang =='ca')





{	





$delivery_calender_day_sun='dl.';





$delivery_calender_day_mon='dt.';





$delivery_calender_day_tue='dc.';





$delivery_calender_day_wed='dj.';





$delivery_calender_day_thu='dv.';





$delivery_calender_day_fri='ds.';





$delivery_calender_day_sat='dg.';





}





/*Nederlands Belgie*/





else if($currentlang =='nl-BE')





{	





$delivery_calender_day_sun='Zon';





$delivery_calender_day_mon='Ma';





$delivery_calender_day_tue='Din';





$delivery_calender_day_wed='Woe';





$delivery_calender_day_thu='Do';





$delivery_calender_day_fri='Vrij';





$delivery_calender_day_sat='Zat';





}





/*Hibru*/	





else if($currentlang == 'he-IL')





{	





$delivery_calender_day_sun='א';





$delivery_calender_day_mon='ב';





$delivery_calender_day_tue='ג';





$delivery_calender_day_wed='ד';





$delivery_calender_day_thu='ה';





$delivery_calender_day_fri='ו';





$delivery_calender_day_sat='ש';





}





/*Norsk bokmål*/





else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')





{	





$delivery_calender_day_sun='søn';





$delivery_calender_day_mon='man';





$delivery_calender_day_tue='tir';





$delivery_calender_day_wed='ons';





$delivery_calender_day_thu='tor';





$delivery_calender_day_fri='fre';





$delivery_calender_day_sat='lør';





}





/*Arabic*/





else if($currentlang == 'ar')





{	





$delivery_calender_day_sun='الأحد';





$delivery_calender_day_mon='الأثنين';





$delivery_calender_day_tue='الثلاثاء';





$delivery_calender_day_wed='الأربعاء';





$delivery_calender_day_thu='الخميس';





$delivery_calender_day_fri='الجمعة';





$delivery_calender_day_sat='السبت';





}





else





{





$delivery_calender_day_sun='Sun';		





$delivery_calender_day_mon='Mon';	





$delivery_calender_day_tue='Tue';	





$delivery_calender_day_wed='Wed';		





$delivery_calender_day_thu='Thu';	





$delivery_calender_day_fri='Fri';	





$delivery_calender_day_sat='Sat';	





}





?>





if(selected_date_day=='<?php echo $delivery_calender_day_sun; ?>'){





delivery_opening_time = delivery_location_service_sun_start[location_index];





delivery_ending_time = delivery_location_service_sun_end[location_index];





delivery_break_time_start = delivery_location_service_sun_break_start[location_index];





delivery_break_time_end = delivery_location_service_sun_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_mon; ?>'){





delivery_opening_time = delivery_location_service_mon_start[location_index];





delivery_ending_time = delivery_location_service_mon_end[location_index];





delivery_break_time_start = delivery_location_service_mon_break_start[location_index];





delivery_break_time_end = delivery_location_service_mon_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_tue; ?>'){





delivery_opening_time = delivery_location_service_tue_start[location_index];





delivery_ending_time = delivery_location_service_tue_end[location_index];





delivery_break_time_start = delivery_location_service_tue_break_start[location_index];





delivery_break_time_end = delivery_location_service_tue_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_wed; ?>'){





delivery_opening_time = delivery_location_service_wed_start[location_index];





delivery_ending_time = delivery_location_service_wed_end[location_index];





delivery_break_time_start = delivery_location_service_wed_break_start[location_index];





delivery_break_time_end = delivery_location_service_wed_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_thu; ?>'){





delivery_opening_time = delivery_location_service_thu_start[location_index];





delivery_ending_time = delivery_location_service_thu_end[location_index];





delivery_break_time_start = delivery_location_service_thu_break_start[location_index];





delivery_break_time_end = delivery_location_service_thu_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_fri; ?>'){





delivery_opening_time = delivery_location_service_fri_start[location_index];





delivery_ending_time = delivery_location_service_fri_end[location_index];





delivery_break_time_start = delivery_location_service_fri_break_start[location_index];





delivery_break_time_end = delivery_location_service_fri_break_end[location_index];





}





if(selected_date_day=='<?php echo $delivery_calender_day_sat; ?>'){





delivery_opening_time = delivery_location_service_sat_start[location_index];





delivery_ending_time = delivery_location_service_sat_end[location_index];





delivery_break_time_start = delivery_location_service_sat_break_start[location_index];





delivery_break_time_end = delivery_location_service_sat_break_end[location_index];





}





//alert('end of file language_and_day_based_delivery_time_population.php');