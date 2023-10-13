<?php


// get allowable pickup days


//$byconsolewooodt_pickupdays_array=get_option('byconsolewooodt_pickup_days');
//$byconsolewooodt_pickupdays_array=$get_byc_wooodt_data['byconsolewooodt_pickup_days'];
$byconsolewooodt_pickupdays_array=explode(' ', $get_byc_wooodt_data['byconsolewooodt_pickup_days']);


$string_for_pickupdays_js_array='';


$allowable_pickup_days_js_array='';


if(!empty($byconsolewooodt_pickupdays_array)){


foreach($byconsolewooodt_pickupdays_array as $allowable_pickupday){


/*English*/


if($currentlang == 'en_US' || $currentlang == 'en-US')


{


	if ($allowable_pickupday==1){


	$calendar_day='Sun';	


	}else if ($allowable_pickupday==2){	


	$calendar_day='Mon';	


	}else if ($allowable_pickupday==3){	


	$calendar_day='Tue';	


	}else if ($allowable_pickupday==4){	


	$calendar_day='Wed';	


	}else if ($allowable_pickupday==5){	


	$calendar_day='Thu';	


	}else if ($allowable_pickupday==6){	


	$calendar_day='Fri';	


	}else if ($allowable_pickupday==7){	


	$calendar_day='Sat';	


	}else {	


	$calendar_day='';	


	}


}











/*Istonimum*/



else if($currentlang == 'et')



{



	if ($allowable_pickupday==1){



	$calendar_day='P';	



	}else if ($allowable_pickupday==2){	



	$calendar_day='E';	



	}else if ($allowable_pickupday==3){	



	$calendar_day='T';	



	}else if ($allowable_pickupday==4){	



	$calendar_day='K';	



	}else if ($allowable_pickupday==5){	



	$calendar_day='N';	



	}else if ($allowable_pickupday==6){	



	$calendar_day='R';	



	}else if ($allowable_pickupday==7){	



	$calendar_day='L';	



	}else {	



	$calendar_day='';	



	}



}







/*Svenska(Svenska)*/



else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{

	

	if ($allowable_pickupday==1){	

	$calendar_day='sön';

	}else if ($allowable_pickupday==2){

	$calendar_day='mån';

	}else if ($allowable_pickupday==3){

	$calendar_day='tis';

	}else if ($allowable_pickupday==4){

	$calendar_day='ons';

	}else if ($allowable_pickupday==5){

	$calendar_day='tor';

	}else if ($allowable_pickupday==6){

	$calendar_day='fre';

	}else if ($allowable_pickupday==7){

	$calendar_day='lör';

	}else {

	$calendar_day='';

	}

	

}







/*Japanis*/	







else if($currentlang =='ja')



{



	if ($allowable_pickupday==1){	



	$calendar_day='日';



	}else if ($allowable_pickupday==2){



	$calendar_day='月';



	}else if ($allowable_pickupday==3){



	$calendar_day='火';



	}else if ($allowable_pickupday==4){



	$calendar_day='水';



	}else if ($allowable_pickupday==5){



	$calendar_day='木';



	}else if ($allowable_pickupday==6){



	$calendar_day='金';



	}else if ($allowable_pickupday==7){



	$calendar_day='土';



	}else {



	$calendar_day='';



	}



}



















/*Icelandic*/	


else if($currentlang =='is')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Sun';


	}else if ($allowable_pickupday==2){


	$calendar_day='Mán';


	}else if ($allowable_pickupday==3){


	$calendar_day='Þri';


	}else if ($allowable_pickupday==4){


	$calendar_day='Mið';


	}else if ($allowable_pickupday==5){


	$calendar_day='Fim';


	}else if ($allowable_pickupday==6){


	$calendar_day='Fös';


	}else if ($allowable_pickupday==7){


	$calendar_day='Lau';


	}else {


	$calendar_day='';


	}


}


/*deutsch(sie)*/


else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE')


{


	if ($allowable_pickupday==1){


	$calendar_day='So';


	}else if ($allowable_pickupday==2){


	$calendar_day='Mo';


	}else if ($allowable_pickupday==3){


	$calendar_day='Di';


	}else if ($allowable_pickupday==4){


	$calendar_day='Mi';


	}else if ($allowable_pickupday==5){


	$calendar_day='Do';


	}else if ($allowable_pickupday==6){


	$calendar_day='Fr';


	}else if ($allowable_pickupday==7){


	$calendar_day='Sa';


	}else {


	$calendar_day='';


	}


}


/*deutsch(schweiz)*/


else if($currentlang =='de_CH' || $currentlang =='de-CH')


{


	if ($allowable_pickupday==1){	


	$calendar_day='So';


	}else if ($allowable_pickupday==2){


	$calendar_day='Mo';


	}else if ($allowable_pickupday==3){


	$calendar_day='Di';


	}else if ($allowable_pickupday==4){


	$calendar_day='Mi';


	}else if ($allowable_pickupday==5){


	$calendar_day='Do';


	}else if ($allowable_pickupday==6){


	$calendar_day='Fr';


	}else if ($allowable_pickupday==7){


	$calendar_day='Sa';


	}else {


	$calendar_day='';


	}


}


/*Danish*/


else if($currentlang == 'da_DK'  || $currentlang == 'da-DK')


{


	if ($allowable_pickupday==1){	


	$calendar_day='søn';


	}else if ($allowable_pickupday==2){


	$calendar_day='man';


	}else if ($allowable_pickupday==3){


	$calendar_day='tirs';


	}else if ($allowable_pickupday==4){


	$calendar_day='ons';


	}else if ($allowable_pickupday==5){


	$calendar_day='tors';


	}else if ($allowable_pickupday==6){


	$calendar_day='fre';


	}else if ($allowable_pickupday==7){


	$calendar_day='lør';


	}else {


	$calendar_day='';


	}


}


/*French*/


else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR')







{


	if ($allowable_pickupday==1){	


	$calendar_day='dim';


	}else if ($allowable_pickupday==2){


	$calendar_day='lun';


	}else if ($allowable_pickupday==3){


	$calendar_day='mar';


	}else if ($allowable_pickupday==4){


	$calendar_day='mer';


	}else if ($allowable_pickupday==5){


	$calendar_day='jeu';


	}else if ($allowable_pickupday==6){


	$calendar_day='ven';


	}else if ($allowable_pickupday==7){


	$calendar_day='sam';


	}else {


	$calendar_day='';


	}


}


/*Español de México*/







else if($currentlang == 'es_MX' || $currentlang == 'es-MX')







{







	if ($allowable_pickupday==1){	







	$calendar_day='Dom';







	}else if ($allowable_pickupday==2){







	$calendar_day='Lun';







	}else if ($allowable_pickupday==3){







	$calendar_day='Mar';







	}else if ($allowable_pickupday==4){







	$calendar_day='Mie';







	}else if ($allowable_pickupday==5){







	$calendar_day='Jue';







	}else if ($allowable_pickupday==6){







	$calendar_day='Vie';







	}else if ($allowable_pickupday==7){







	$calendar_day='Sab';







	}else {







	$calendar_day='';







	}







}


/*Italian*/


else if($currentlang == 'it_IT' || $currentlang == 'it-IT')


{


	if ($allowable_pickupday==1){	


	$calendar_day='dom';


	}else if ($allowable_pickupday==2){


	$calendar_day='lun';


	}else if ($allowable_pickupday==3){


	$calendar_day='mar';


	}else if ($allowable_pickupday==4){


	$calendar_day='mer';


	}else if ($allowable_pickupday==5){


	$calendar_day='gio';


	}else if ($allowable_pickupday==6){


	$calendar_day='ven';


	}else if ($allowable_pickupday==7){


	$calendar_day='sab';


	}else {


	$calendar_day='';


	}


}


/*Croatian*/


else if($currentlang == 'hr')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Ned';


	}else if ($allowable_pickupday==2){


	$calendar_day='Pon';


	}else if ($allowable_pickupday==3){


	$calendar_day='Uto';


	}else if ($allowable_pickupday==4){


	$calendar_day='Sri';


	}else if ($allowable_pickupday==5){


	$calendar_day='Čet';


	}else if ($allowable_pickupday==6){


	$calendar_day='Pet';


	}else if ($allowable_pickupday==7){


	$calendar_day='Sub';


	}else {


	$calendar_day='';


	}


}


/*Romanian*/


else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Dum';


	}else if ($allowable_pickupday==2){


	$calendar_day='lun';


	}else if ($allowable_pickupday==3){


	$calendar_day='mar';


	}else if ($allowable_pickupday==4){


	$calendar_day='mie';


	}else if ($allowable_pickupday==5){


	$calendar_day='joi';


	}else if ($allowable_pickupday==6){


	$calendar_day='vin';


	}else if ($allowable_pickupday==7){


	$calendar_day='sâm';


	}else {


	$calendar_day='';


	}


}


/*Bulgarian*/


else if($currentlang =='bg_BG' || $currentlang =='bg-BG')


{


	if ($allowable_pickupday==1){	


	$calendar_day='нд';


	}else if ($allowable_pickupday==2){


	$calendar_day='пн';


	}else if ($allowable_pickupday==3){


	$calendar_day='вт';


	}else if ($allowable_pickupday==4){


	$calendar_day='ср';


	}else if ($allowable_pickupday==5){


	$calendar_day='чт';


	}else if ($allowable_pickupday==6){


	$calendar_day='пт';


	}else if ($allowable_pickupday==7){


	$calendar_day='сб';


	}else {


	$calendar_day='';


	}


}


/*Czech*/


else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ') 


{


	if ($allowable_pickupday==1){	


	$calendar_day='Ne';


	}else if ($allowable_pickupday==2){


	$calendar_day='Po';


	}else if ($allowable_pickupday==3){


	$calendar_day='Út';


	}else if ($allowable_pickupday==4){


	$calendar_day='St';


	}else if ($allowable_pickupday==5){


	$calendar_day='Čt';


	}else if ($allowable_pickupday==6){


	$calendar_day='Pá';


	}else if ($allowable_pickupday==7){


	$calendar_day='So';


	}else {


	$calendar_day='';


	}


}


/*Hungarian*/


else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU')


{


	if ($allowable_pickupday==1){	


	$calendar_day='vas';


	}else if ($allowable_pickupday==2){


	$calendar_day='hét';


	}else if ($allowable_pickupday==3){


	$calendar_day='ked';


	}else if ($allowable_pickupday==4){


	$calendar_day='sze';


	}else if ($allowable_pickupday==5){


	$calendar_day='csü';


	}else if ($allowable_pickupday==6){


	$calendar_day='pén';


	}else if ($allowable_pickupday==7){


	$calendar_day='szo';


	}else {


	$calendar_day='';


	}


}


/*Dutch*/


else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'|| $currentlang == 'nl_NL_formal')


{


	if ($allowable_pickupday==1){	


	$calendar_day='zo';


	}else if ($allowable_pickupday==2){


	$calendar_day='ma';


	}else if ($allowable_pickupday==3){


	$calendar_day='di';


	}else if ($allowable_pickupday==4){


	$calendar_day='wo';


	}else if ($allowable_pickupday==5){


	$calendar_day='do';


	}else if ($allowable_pickupday==6){


	$calendar_day='vr';


	}else if ($allowable_pickupday==7){


	$calendar_day='za';


	}else {


	$calendar_day='';


	}


}


/*Portuguese*/


else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Dom';


	}else if ($allowable_pickupday==2){


	$calendar_day='Seg';


	}else if ($allowable_pickupday==3){


	$calendar_day='Ter';


	}else if ($allowable_pickupday==4){


	$calendar_day='Qua';


	}else if ($allowable_pickupday==5){


	$calendar_day='Qui';


	}else if ($allowable_pickupday==6){


	$calendar_day='Sex';


	}else if ($allowable_pickupday==7){


	$calendar_day='Sáb';


	}else {


	$calendar_day='';


	}


}


/*Slovak*/


else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Ne';


	}else if ($allowable_pickupday==2){


	$calendar_day='Po';


	}else if ($allowable_pickupday==3){


	$calendar_day='Ut';


	}else if ($allowable_pickupday==4){


	$calendar_day='St';


	}else if ($allowable_pickupday==5){


	$calendar_day='Št';


	}else if ($allowable_pickupday==6){


	$calendar_day='Pi';


	}else if ($allowable_pickupday==7){


	$calendar_day='So';


	}else {


	$calendar_day='';


	}


}


/*Finnish*/


else if($currentlang == 'fi')


{


	if ($allowable_pickupday==1){	


	$calendar_day='su';


	}else if ($allowable_pickupday==2){


	$calendar_day='ma';


	}else if ($allowable_pickupday==3){


	$calendar_day='ti';


	}else if ($allowable_pickupday==4){


	$calendar_day='ke';


	}else if ($allowable_pickupday==5){


	$calendar_day='to';


	}else if ($allowable_pickupday==6){


	$calendar_day='pe';


	}else if ($allowable_pickupday==7){


	$calendar_day='la';


	}else {


	$calendar_day='';


	}


}


/*Français du Canada*/	


else if($currentlang =='fr_CA' || $currentlang =='fr-CA')


{


	if ($allowable_pickupday==1){	


	$calendar_day='lun';


	}else if ($allowable_pickupday==2){


	$calendar_day='mar';


	}else if ($allowable_pickupday==3){


	$calendar_day='mer';


	}else if ($allowable_pickupday==4){


	$calendar_day='jeu';


	}else if ($allowable_pickupday==5){


	$calendar_day='ven';


	}else if ($allowable_pickupday==6){


	$calendar_day='sam';


	}else if ($allowable_pickupday==7){


	$calendar_day='dim';


	}else {


	$calendar_day='';


	}


}


/*spanish*/	


else if($currentlang =='es_ES' || $currentlang =='es-ES' || $currentlang =='es')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Lun';


	}else if ($allowable_pickupday==2){


	$calendar_day='Mar';


	}else if ($allowable_pickupday==3){


	$calendar_day='Mié';


	}else if ($allowable_pickupday==4){


	$calendar_day='Jue';


	}else if ($allowable_pickupday==5){


	$calendar_day='Vie';


	}else if ($allowable_pickupday==6){


	$calendar_day='Sáb';


	}else if ($allowable_pickupday==7){


	$calendar_day='Dom';


	}else {


	$calendar_day='';


	}


}


/*CATALA*/	


else if($currentlang =='ca')


{


	if ($allowable_pickupday==1){	


	$calendar_day='dl.';


	}else if ($allowable_pickupday==2){


	$calendar_day='dt.';


	}else if ($allowable_pickupday==3){


	$calendar_day='dc.';


	}else if ($allowable_pickupday==4){


	$calendar_day='dj.';


	}else if ($allowable_pickupday==5){


	$calendar_day='dv.';


	}else if ($allowable_pickupday==6){


	$calendar_day='ds.';


	}else if ($allowable_pickupday==7){


	$calendar_day='dg.';


	}else {


	$calendar_day='';


	}


}


/*Nederlands Belgie*/


else if($currentlang =='nl-BE')


{


	if ($allowable_pickupday==1){	


	$calendar_day='Zon';


	}else if ($allowable_pickupday==2){


	$calendar_day='Ma';


	}else if ($allowable_pickupday==3){


	$calendar_day='Din';


	}else if ($allowable_pickupday==4){


	$calendar_day='Woe';


	}else if ($allowable_pickupday==5){


	$calendar_day='Do';


	}else if ($allowable_pickupday==6){


	$calendar_day='Vrij';


	}else if ($allowable_pickupday==7){


	$calendar_day='Zat';


	}else {


	$calendar_day='';


	}


}


/*Hibru*/	


else if($currentlang =='he-IL')


{


	if ($allowable_pickupday==1){	


	$calendar_day='א';


	}else if ($allowable_pickupday==2){


	$calendar_day='ב';


	}else if ($allowable_pickupday==3){


	$calendar_day='ג';


	}else if ($allowable_pickupday==4){


	$calendar_day='ד';


	}else if ($allowable_pickupday==5){


	$calendar_day='ה';


	}else if ($allowable_pickupday==6){


	$calendar_day='ו';


	}else if ($allowable_pickupday==7){


	$calendar_day='ש';


	}else {


	$calendar_day='';


	}


}


/*Norsk bokmål*/


else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')


{


	if ($allowable_pickupday==1){	


	$calendar_day='søn';


	}else if ($allowable_pickupday==2){


	$calendar_day='man';


	}else if ($allowable_pickupday==3){


	$calendar_day='tir';


	}else if ($allowable_pickupday==4){


	$calendar_day='ons';


	}else if ($allowable_pickupday==5){


	$calendar_day='tor';


	}else if ($allowable_pickupday==6){


	$calendar_day='fre';


	}else if ($allowable_pickupday==7){


	$calendar_day='lør';


	}else {


	$calendar_day='';


	}


}


/*Arabic*/


else if($currentlang == 'ar')


{


	if ($allowable_pickupday==1){	


	$calendar_day='الأحد';


	}else if ($allowable_pickupday==2){


	$calendar_day='الأثنين';


	}else if ($allowable_pickupday==3){


	$calendar_day='الثلاثاء';


	}else if ($allowable_pickupday==4){


	$calendar_day='الأربعاء';


	}else if ($allowable_pickupday==5){


	$calendar_day='الخميس';


	}else if ($allowable_pickupday==6){


	$calendar_day='الجمعة';


	}else if ($allowable_pickupday==7){


	$calendar_day='السبت';


	}else {


	$calendar_day='';


	}


}


else


{


	if ($allowable_pickupday==1){	


	$calendar_day='Sun';


	}else if ($allowable_pickupday==2){


	$calendar_day='Mon';


	}else if ($allowable_pickupday==3){


	$calendar_day='Tue';


	}else if ($allowable_pickupday==4){


	$calendar_day='Wed';


	}else if ($allowable_pickupday==5){


	$calendar_day='Thu';


	}else if ($allowable_pickupday==6){


	$calendar_day='Fri';


	}else if ($allowable_pickupday==7){


	$calendar_day='Sat';


	}else {


	$calendar_day='';


	}


}


$string_for_pickupdays_js_array=$string_for_pickupdays_js_array.'"'.$calendar_day.'",';


}


$allowable_pickup_days_js_array='['.trim($string_for_pickupdays_js_array).']';


}


?>