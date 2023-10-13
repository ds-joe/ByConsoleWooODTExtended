<?php
function byconsolewooodt_admin_day_wise_charges_settings_form(){
?>
<div class="wrap">
<h1>Day wise charges settings pannel</h1>
<form method="post" class="form_byconsolewooodt_plugin_settings" action="options.php">
<?php
settings_fields("daywisecharges");
do_settings_sections("byconsolewooodt_day_wise_charges_setting_options");      
submit_button(); 
?>
</form>
</div>
<?php 
}


function byconsolewooodt_day_wise_charges(){
	
	$byconsolewooodt_day_wise_charges_val = get_option('byconsolewooodt_day_wise_charges');
	
	// echo '<pre>';
	// print_r($byconsolewooodt_day_wise_charges_val);
	// echo '</pre>';
	
	$byconsolewooodt_day_wise_charges_val_sun = $byconsolewooodt_day_wise_charges_val['0'];
	$byconsolewooodt_day_wise_charges_val_mon = $byconsolewooodt_day_wise_charges_val['1'];
	$byconsolewooodt_day_wise_charges_val_tue = $byconsolewooodt_day_wise_charges_val['2'];
	$byconsolewooodt_day_wise_charges_val_wed = $byconsolewooodt_day_wise_charges_val['3'];
	$byconsolewooodt_day_wise_charges_val_thu = $byconsolewooodt_day_wise_charges_val['4'];
	$byconsolewooodt_day_wise_charges_val_fri = $byconsolewooodt_day_wise_charges_val['5'];
	$byconsolewooodt_day_wise_charges_val_sat = $byconsolewooodt_day_wise_charges_val['6'];	
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_sun)){
		$sundayAmount = $byconsolewooodt_day_wise_charges_val_sun['amount'];
		$sundayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_mon)){
		$mondayAmount = $byconsolewooodt_day_wise_charges_val_mon['amount'];
		$mondayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_tue)){
		$tuedayAmount = $byconsolewooodt_day_wise_charges_val_tue['amount'];
		$tuedayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_wed)){
		$weddayAmount = $byconsolewooodt_day_wise_charges_val_wed['amount'];
		$weddayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_thu)){
		$thudayAmount = $byconsolewooodt_day_wise_charges_val_thu['amount'];
		$thudayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_fri)){
		$fridayAmount = $byconsolewooodt_day_wise_charges_val_fri['amount'];
		$fridayChecked = 'checked';
	}
	
	if(array_key_exists('day_number',$byconsolewooodt_day_wise_charges_val_sat)){
		$satdayAmount = $byconsolewooodt_day_wise_charges_val_sat['amount'];
		$satdayChecked = 'checked';
	}
	
?>
Sun:&nbsp; <input type="checkbox" name="byconsolewooodt_day_wise_charges[0][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes" <?php echo $sundayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[0][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $sundayAmount;?>" /><br />

Mon:<input type="checkbox" name="byconsolewooodt_day_wise_charges[1][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $mondayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[1][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;"  value="<?php echo $mondayAmount;?>" /><br />

Tue:&nbsp;<input type="checkbox" name="byconsolewooodt_day_wise_charges[2][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $tuedayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[2][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $tuedayAmount;?>" /><br />


Wed:<input type="checkbox" name="byconsolewooodt_day_wise_charges[3][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $weddayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[3][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $weddayAmount;?>" /><br />

Thu:&nbsp;<input type="checkbox" name="byconsolewooodt_day_wise_charges[4][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $thudayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[4][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $thudayAmount;?>" /><br />

Fri:&nbsp;&nbsp;<input type="checkbox" name="byconsolewooodt_day_wise_charges[5][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $fridayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[5][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $fridayAmount;?>" /><br />


Sat:<input type="checkbox" name="byconsolewooodt_day_wise_charges[6][day_number]" id="byconsolewooodt_day_wise_charges" class="byconsolewooodt_admin_element_field checkbox" style="width:30%; padding:7px;margin: 20px;" value="yes"  <?php echo $satdayChecked;?> />
<input type="text" name="byconsolewooodt_day_wise_charges[6][amount]" id="byconsolewooodt_day_wise_charges" class="bycwooodt_admin_fields_design" style="width:30%; padding:7px;margin-top: 15px;" value="<?php echo $satdayAmount;?>" /><br />

<?php

}

add_action('admin_init', 'byconsolewooodt_day_wise_charges_settings_fields');

function byconsolewooodt_day_wise_charges_settings_fields(){
	
add_settings_section("daywisecharges", "", null, "byconsolewooodt_day_wise_charges_setting_options");

add_settings_field("byconsolewooodt_day_wise_charges", "Day wise charges:", "byconsolewooodt_day_wise_charges", "byconsolewooodt_day_wise_charges_setting_options", "daywisecharges");

register_setting("daywisecharges", "byconsolewooodt_day_wise_charges");
}
?>