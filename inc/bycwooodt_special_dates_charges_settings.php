<?php function byconsolewooodt_admin_special_dates_charges_settings_form(){ ?>

	<div class="wrap">

			<h1>ByConsole Special Dates Charges Settings</h1>

            <form method="post" class="form_byconsolewooodt_wooodt_features_settings" action="options.php">

				<?php

					settings_fields("special_dates_charges_setting");

					do_settings_sections("byconsolewooodt_admin_special_dates_charges_settings_options");      

					submit_button(); 

				?>          

			</form>

	</div>

    <style>

		.bycwooodt_special_dates_charges_container{}

	</style>

<?php 	

}



function byconsolewooodt_special_dates_charges_field(){

	

	$byconsolewooodt_admin_special_open_date = get_option('byconsolewooodt_admin_special_open_date');

	$byconsolewooodt_special_dates_charges = get_option('byconsolewooodt_special_dates_charges');

	
print_r($byconsolewooodt_special_dates_charges);
	

	

	if(!empty($byconsolewooodt_admin_special_open_date)){

		$byconsolewooodt_admin_special_open_date_explode = explode(',',$byconsolewooodt_admin_special_open_date);

		foreach($byconsolewooodt_admin_special_open_date_explode as $single_special_date_key => $single_special_date_val){

			$dateTrimVal = trim($single_special_date_val);

			if(array_key_exists($dateTrimVal,$byconsolewooodt_special_dates_charges)){

				

				$dateCharges = $byconsolewooodt_special_dates_charges[$dateTrimVal];

			}

			echo '<div class="bycwooodt_special_dates_charges_container">'.$single_special_date_val.' : &nbsp;<input type="text" name="byconsolewooodt_special_dates_charges['.$dateTrimVal.']" class="bycwooodt_admin_language_fields_design"  style="width:30% !important; padding:7px;" id="byconsolewooodt_special_dates_charges" value="'.$dateCharges.'" /></div><br />';

			

		}

	}

	

}







add_action('admin_init', 'byconsolewooodt_special_dates_charges_settings_fields');





function byconsolewooodt_special_dates_charges_settings_fields(){



add_settings_section("special_dates_charges_setting", "", null, "byconsolewooodt_admin_special_dates_charges_settings_options");



add_settings_field("byconsolewooodt_special_dates_charges", "Special Dates", "byconsolewooodt_special_dates_charges_field", "byconsolewooodt_admin_special_dates_charges_settings_options", "special_dates_charges_setting");



register_setting("special_dates_charges_setting", "byconsolewooodt_special_dates_charges");

}

?>