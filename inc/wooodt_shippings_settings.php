<?php
	function byconsolewooodt_shipping_settings_form()	
	{
?>    
    <div class="wrap">
			<h1>ByConsole Woocommerce Order Delivery Shipping settings</h1>
            <form method="post" class="form_byconsolewooodt_shipping_settings" action="options.php">
				<?php
					settings_fields("wooodtshippingssetting");
					do_settings_sections("byconsolewooodt_shippings_settings_options");      
					submit_button(); 
				?>          
			</form>
	</div>
	<?php
	}
/**********************************************wooodt features settings Field Start**************************************************************/	




add_action('admin_init', 'byconsolewooodt_shippings_settings_fields');

	function byconsolewooodt_pickup_dtl_exluded_shippings()

	{

		//$wooodt_disable_delivery_date = get_option('byconsolewooodt_pickup_dtl_exluded_shippings');	

	?>

    <div class="closings_by_day">
    <?php 
	global $woocommerce;
	$available_shipping_methods=array();
	
	$byconsolewooodt_pickup_dtl_exluded_shippings=get_option('byconsolewooodt_pickup_dtl_exluded_shippings');
	print_r($byconsolewooodt_pickup_dtl_exluded_shippings);
	//print_r( $woocommerce->shipping->get_shipping_methods() );
	//print_r( $woocommerce->shipping->load_shipping_methods() );
	foreach($woocommerce->shipping->get_shipping_methods() as $key=>$val){
		/*
		var_dump( $key);
		echo '=>DDDD=>';
		//var_dump($val);
		echo '<hr/>';
		array_push($available_shipping_methods,$key);
		*/
		?>
		<input type="checkbox" name="byconsolewooodt_pickup_dtl_exluded_shippings[]" id="byconsolewooodt_pickup_dtl_exluded_shippings" value="<?php echo $key;?>" <?php if(in_array($key,'$byconsolewooodt_pickup_dtl_exluded_shippings')) {?> checked="checked" <?php }?>/> 
		<?php echo $val->method_title;
		echo '<br />';
		}
		
		echo '<hr />';
		echo '<hr />';
		print_r($available_shipping_methods);
		echo '<hr />';
		
	/*
	foreach($woocommerce->shipping->get_shipping_methods() as $active_shipping_method){
		var_dump($active_shipping_method);
		echo '<hr/>';
		}

*/	
	?>

	

    </div>

    <?php }



function byconsolewooodt_shippings_settings_fields()
{
	add_settings_section("wooodtshippingssetting", "wooodt shippings Settings", null, "byconsolewooodt_shippings_settings_options");
	add_settings_field("byconsolewooodt_pickup_dtl_exluded_shippings", "<p>Do not make date time location mandatory for following shipping methods:</p>", "byconsolewooodt_pickup_dtl_exluded_shippings", "byconsolewooodt_shippings_settings_options", "wooodtshippingssetting");	
	register_setting("wooodtshippingssetting", "byconsolewooodt_pickup_dtl_exluded_shippings_setting");
}

/**********************************************wooodt features settings Field End**************************************************************/		

?>