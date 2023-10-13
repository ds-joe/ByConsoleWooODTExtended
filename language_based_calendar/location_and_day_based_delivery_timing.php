<?php 

global $get_byc_wooodt_data;

$byconsolewooodt_multiple_delivery_location_checkbox=$get_byc_wooodt_data['byconsolewooodt_multiple_delivery_location'];


if($byconsolewooodt_multiple_delivery_location_checkbox=='YES'){?>



//Now check pickup location closing days



//var selected_location_id=jQuery('#byconsolewooodt_delivery_location').val();


var selected_location_id=jQuery(location_field_identifier).val();


//alert('location_field_identifier: '+location_field_identifier);


//alert('selected_location_id='+selected_location_id);



var delivery_location_open_days=[];



if(delivery_location_service_sun[selected_location_id]=='yes'){






	<?php  



	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Sun');	



	<?php }



    /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('P');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('日');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Sun');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('su');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('sön');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('So');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('So');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('søn');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('dim');	



	<?php }	






	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Dom');	


	<?php }





	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('dom');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Ned');	



	<?php }	


	


/*Romanian*/


	else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('Dum');	



	<?php }	


	


/*Bulgarian*/


	else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('нд');	



	<?php }	


	


/*Czech*/


	else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('Ne');	



	<?php }	


	



/*Hungarian*/


	else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('vas');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE' || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('zo');	



	<?php }	


	


/*Portuguese*/


	else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Dom');	



	<?php }	


	


/*Slovak*/


	else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('Ne');	



	<?php }	


	


/*Finnish*/


	else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('su');	



	<?php }	


	


/*Français du Canada*/	


	else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('lun');	



	<?php }


	


	/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Lun');	



	<?php }


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dl.');	



	<?php }	



	



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Zon');



	<?php } 



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('א');	


	<?php }	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('søn');	



	<?php }	



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الأحد');	



	<?php } else { ?>



    



	delivery_location_open_days.push('Sun');



	<?php } ?>



	






	//alert ('yes');






	}



if(delivery_location_service_mon[selected_location_id]=='yes'){



	<?php 	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Mon');	



	<?php }



   /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('E');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('月');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Mán');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('ma');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('mån');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Mo');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Mo');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('man');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('lun');	



	<?php }	






	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Lun');	


	<?php }


	





	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('lun');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Pon');	



	<?php }	


	


/*Romanian*/


	else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('lun');	



	<?php }	


	


/*Bulgarian*/


	else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('пн');	



	<?php }	


	


/*Czech*/


	else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('Po');	



	<?php }	


	



/*Hungarian*/


	else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('hét');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('ma');	



	<?php }	


	


/*Portuguese*/


	else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Seg');	



	<?php }	


	


/*Slovak*/


	else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('Po');	



	<?php }	


	


/*Finnish*/


	else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('ma');	



	<?php }	


	


/*Français du Canada*/	


	else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('mar');	



	<?php }	


	


/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Mar');	



	<?php }	


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dt.');	



	<?php } 



	



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Ma');



	<?php } 



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ב');	


	<?php } 



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('man');	



	<?php } 



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الأثنين');	



	<?php } else { ?>



    



	delivery_location_open_days.push('Mon');



	<?php } ?>



	}



    



    



    



if(delivery_location_service_tue[selected_location_id]=='yes'){



	<?php 	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Tue');	



	<?php }



    /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('T');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('火');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Þri');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('ti');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('tis');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Di');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Di');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('tirs');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('mar');	



	<?php }	




	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Mar');	


	<?php }


	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('mar');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Uto');	



	<?php }	


	


/*Romanian*/


else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('mar');	



	<?php }	


	


/*Bulgarian*/


else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('вт');	



	<?php }	


	


/*Czech*/


else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('Út');	



	<?php }	


	



/*Hungarian*/


else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('ked');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('di');	



	<?php }	


	


/*Portuguese*/


else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Ter');	



	<?php }	


	


/*Slovak*/


else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('Ut');	



	<?php }	


	


/*Finnish*/


else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('ti');	



	<?php }	


	


/*Français du Canada*/	


else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('mer');	



	<?php }	 


	


/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Mié');	



	<?php } 


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dc.');	



	<?php }



	



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Din');



	<?php }



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ג');	


	<?php } 	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('tir');	



	<?php } 



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الثلاثاء');	



	<?php } else { ?>



	delivery_location_open_days.push('Tue');



	<?php } ?>






	}



    



    



    



if(delivery_location_service_wed[selected_location_id]=='yes'){



	<?php 	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Wed');	



	<?php }



   /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('K');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('水');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Mið');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('ke');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('ons');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Mi');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Mi');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('ons');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('mer');	



	<?php }	



	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Mie');	


	<?php }



	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('mer');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Sri');	



	<?php }	


	


/*Romanian*/


else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('mie');	



	<?php }	


	


/*Bulgarian*/


else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('ср');	



	<?php }	


	


/*Czech*/


else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('St');	



	<?php }	


	



/*Hungarian*/


else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('sze');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('wo');	



	<?php }	


	


/*Portuguese*/


else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Qua');	



	<?php }	


	


/*Slovak*/


else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('St');	



	<?php }	


	


/*Finnish*/


else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('ke');	



	<?php }	


	


/*Français du Canada*/	


else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('jeu');	



	<?php }



/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Jue');	



	<?php }  


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dj.');	



	<?php } 



	



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Woe');



	<?php } 



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ד');	


	<?php }  	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('ons');	



	<?php } 



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الأربعاء');	



	<?php } else { ?>



	delivery_location_open_days.push('Wed');



	<?php } ?>






	}



    



    



if(delivery_location_service_thu[selected_location_id]=='yes'){


	<?php if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Thu');	



	<?php }



   /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('N');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('木');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Fim');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('to');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('tor');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Do');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Do');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('tors');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('jeu');	



	<?php }	




	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Jue');	


	<?php }


	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('gio');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Čet');	



	<?php }	


	


/*Romanian*/


else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('joi');	



	<?php }	


	


/*Bulgarian*/


else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('чт');	



	<?php }	


	


/*Czech*/


else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('Čt');	



	<?php }	


	



/*Hungarian*/


else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('csü');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('do');	



	<?php }	


	


/*Portuguese*/


else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Qui');	



	<?php }	


	


/*Slovak*/


else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('Št');	



	<?php }	


	


/*Finnish*/


else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('to');	



	<?php }	


	


/*Français du Canada*/	


else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('ven');	



	<?php } 


	


/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Vie');	



	<?php } 


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dv.');	



	<?php }



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Do');



	<?php } 



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ה');	


	<?php }   	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('tor');	



	<?php } 



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الخميس');	



	<?php } else { ?>



	delivery_location_open_days.push('Thu');



	<?php } ?>






	}



if(delivery_location_service_fri[selected_location_id]=='yes'){



<?php	


	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Fri');	



	<?php }






   /*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('R');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('金');	


	<?php }





/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Fös');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('pe');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('fre');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Fr');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Fr');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('fre');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>



	delivery_location_open_days.push('ven');	



	<?php }	



	/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Vie');	


	<?php }	



	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('ven');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Pet');	



	<?php }	


	


/*Romanian*/


	else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('vin');	



	<?php }	


	


/*Bulgarian*/


	else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('пт');	



	<?php }	


	


/*Czech*/


	else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('Pá');	



	<?php }	


	



/*Hungarian*/


	else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('pén');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('vr');	



	<?php }	


	


/*Portuguese*/


	else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Sex');	



	<?php }	


	


/*Slovak*/


	else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('Pi');	



	<?php }	


	


/*Finnish*/


	else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('pe');	



	<?php }	


	


/*Français du Canada*/	


	else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('sam');	



	<?php }	


	


/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Sáb');	



	<?php }	 


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('ds.');	



	<?php } 



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Vrij');



	<?php }



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ו');	


	<?php }    	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('fre');	



	<?php } 



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('الجمعة');	



	<?php } else { ?>



	delivery_location_open_days.push('Fri');



	<?php } ?>



	}



    



    



    



if(delivery_location_service_sat[selected_location_id]=='yes'){



	<?php	


	if($currentlang == 'en_US' || $currentlang == 'en-US'){ ?>



	delivery_location_open_days.push('Sat');	



	<?php }



	/*Istonium ( et )*/


	else if($currentlang == 'et')	{ ?>


	delivery_location_open_days.push('L');	


	<?php }


	


	/*Japanish ( ja )*/


	else if($currentlang == 'ja')	{ ?>


	delivery_location_open_days.push('土');	


	<?php }



/*Íslenska ( is )*/



	else if($currentlang == 'is')	{ ?>



	delivery_location_open_days.push('Lau');	



	<?php }



/*Suomi*/



	else if($currentlang == 'fi')	{ ?>



	delivery_location_open_days.push('la');	



	<?php }


	


	


/*Svenska(Svenska)*/



	else if($currentlang =='sv-SE' || $currentlang =='sv_SE')	{ ?>



	delivery_location_open_days.push('lör');	



	<?php }


	


/*deutsch(sie)*/	


	else if($currentlang == 'de_DE_formal' || $currentlang == 'de_DE' || $currentlang == 'de-DE') {?>



	delivery_location_open_days.push('Sa');



	<?php }	


	


/*deutsch(schweiz)*/



	else if($currentlang =='de_CH' || $currentlang =='de-CH')	{ ?>



	delivery_location_open_days.push('Sa');	



	<?php }	


	


/*Danish*/


	else if($currentlang == 'da_DK' || $currentlang == 'da-DK')	{ ?>



	delivery_location_open_days.push('lør');	



	<?php } 


	


/*French*/


	else if($currentlang == 'fr_FR' || $currentlang == 'fr-FR'){ ?>


	delivery_location_open_days.push('sam');	


	<?php }	


	


	


/*Español de México*/


	else if($currentlang == 'es_MX' || $currentlang == 'es-MX'){ ?>


	delivery_location_open_days.push('Sab');	


	<?php }		


	


/*Italian*/


	else if($currentlang == 'it_IT' || $currentlang == 'it-IT'){ ?>



	delivery_location_open_days.push('sab');	



	<?php }	


	


/*Croatian*/


	else if($currentlang =='hr')	{ ?>



	delivery_location_open_days.push('Sub');	



	<?php }	


	


/*Romanian*/


	else if($currentlang == 'ro_RO' || $currentlang == 'ro-RO'){ ?>



	delivery_location_open_days.push('sâm');	



	<?php }	


	


/*Bulgarian*/


	else if($currentlang =='bg_BG' || $currentlang =='bg-BG')	{ ?>



	delivery_location_open_days.push('сб');	



	<?php }	


	


/*Czech*/


	else if($currentlang =='cs_CZ' || $currentlang =='cs-CZ'){ ?>


	delivery_location_open_days.push('So');	



	<?php }	


	



/*Hungarian*/


	else if($currentlang == 'hu_HU' || $currentlang == 'hu-HU'){ ?>



	delivery_location_open_days.push('szo');	



	<?php }	



/*NL*/



	else if($currentlang == 'nl_NL' || $currentlang == 'nl-NL'  || $currentlang == 'nl'   || $currentlang == 'nl_BE'   || $currentlang == 'nl_NL_formal')	{ ?>



	delivery_location_open_days.push('za');	



	<?php }	


	


/*Portuguese*/


	else if($currentlang == 'pt_PT' || $currentlang == 'pt-PT'){ ?>



	delivery_location_open_days.push('Sáb');	



	<?php }	


	


/*Slovak*/


	else if($currentlang == 'sk_SK' || $currentlang == 'sk-SK'){ ?>



	delivery_location_open_days.push('So');	



	<?php }	


	


/*Finnish*/


	else if($currentlang == 'fi'){ ?>



	delivery_location_open_days.push('la');	



	<?php }	


	


/*Français du Canada*/	


	else if($currentlang =='fr_CA'){ ?>



	delivery_location_open_days.push('dim');	



	<?php }	


	


/*spanish*/	


	else if($currentlang =='es_ES' || $currentlang =='es-ES'  || $currentlang =='es'){ ?>



	delivery_location_open_days.push('Dom');	



	<?php }	 


	


	/*CATALA*/	


	else if($currentlang =='ca'){ ?>



	delivery_location_open_days.push('dg.');	



	<?php } 



	/*Nederlands Belgie*/	



	else if($currentlang =='nl-BE'){ ?>



	delivery_location_open_days.push('Zat');



	<?php } 	



	



	/*Hibru*/	


	else if($currentlang =='he-IL'){ ?>


	delivery_location_open_days.push('ש');	


	<?php }     	



	



	/*Norsk bokmål*/



	else if($currentlang == 'nb-NO' || $currentlang == 'nb_NO')	{ ?>



	delivery_location_open_days.push('lør');	



	<?php } 



	



	



	/*Arabic*/



	else if($currentlang == 'ar')	{ ?>



	delivery_location_open_days.push('السبت');	



	<?php } else { ?>



	delivery_location_open_days.push('Sat');



	<?php } ?>






	}


    console.log('delivery_location_open_days = '+delivery_location_open_days);



//alert ('$checkday='+$checkday);



if(jQuery.inArray($checkday,delivery_location_open_days) === -1)



{



$return = false;



$returnclass= "unavailable delivery_location_closed";



}


<?php } ?>