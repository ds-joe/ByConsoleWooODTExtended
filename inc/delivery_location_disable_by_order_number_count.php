<script>

jQuery(document).ready(function(){

//console.log('initialising byconsolewooodt_thresholded_delivery_locations_delayed_start_time');

byconsolewooodt_thresholded_delivery_locations_delayed_start_time=[];

});

</script>

<?php

$byconsolewooodt_delivery_location_array = get_option('byconsolewooodt_delivery_location');

if(!empty($byconsolewooodt_delivery_location_array))

{	

foreach($byconsolewooodt_delivery_location_array as $byconsolewooodt_delivery_location_key => $byconsolewooodt_delivery_location_value)

{

/*echo '<hr/>';

print_r($byconsolewooodt_delivery_location_key);

echo '<br/>';

print_r($byconsolewooodt_delivery_location_value);

echo '<hr/>';*/

if(array_key_exists('location_disable',$byconsolewooodt_delivery_location_value)){

if($byconsolewooodt_delivery_location_value['location_disable']!='on'){

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["threshold_hours"] = $byconsolewooodt_delivery_location_value["threshold_hours"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["threshold_minutes"] = $byconsolewooodt_delivery_location_value["threshold_minutes"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["max_order_by_threshold_hours"] = $byconsolewooodt_delivery_location_value["max_order_by_threshold_hours"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["order_posted_in_threshold_hours"]=0;

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["soonest_shipping_time"]=0;

}

}else{

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["threshold_hours"] = $byconsolewooodt_delivery_location_value["threshold_hours"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["threshold_minutes"] = $byconsolewooodt_delivery_location_value["threshold_minutes"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["max_order_by_threshold_hours"] = $byconsolewooodt_delivery_location_value["max_order_by_threshold_hours"];

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["order_posted_in_threshold_hours"]=0;

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["soonest_shipping_time"]=0;

//creatimg the js array

?>

<script>

jQuery(document).ready(function(){	

byconsolewooodt_thresholded_delivery_locations_delayed_start_time[<?php echo $byconsolewooodt_delivery_location_key;?>]="<?php echo $byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_key]["soonest_shipping_time"];?>";

//alert('byconsolewooodt_thresholded_delivery_locations_delayed_start_time - '+ byconsolewooodt_thresholded_delivery_locations_delayed_start_time);

});

</script>

<?php

}

}

}

/**************************************************************** For Deliver ************************************************************************/

if(is_checkout() || is_active_widget( false, false, 'byconsolewooodt_widget', true )){

$get_options_display_fixed_time_formate_as=get_option('display_time_formate_as');

if($get_options_display_fixed_time_formate_as=='fixed_time'){	

$get_option_wooodt_order_limiting_per_hours_for_delivery = get_option('byconsolewooodt_wooodt_disable_order_limiting_per_hours');

if($get_option_wooodt_order_limiting_per_hours_for_delivery=='YES'){

global $wpdb;

global $wp_query;

global $woocommerce;

if(!empty($byconsolewooodt_delivery_location_order_count)){

/********************************************************/

$count=1;

foreach($byconsolewooodt_delivery_location_order_count as $byconsolewooodt_delivery_location_order_count_key => $byconsolewooodt_delivery_location_order_count_val)

{

/********************************/

//set initial date and time value to search through orders	

$byconsole_current_date = current_time("Y-m-d");

$wptime=current_time('H:i:s');

$wp_current_date_time=current_time('Y-m-d H:i:s');

if($byconsolewooodt_delivery_location_order_count_val['threshold_hours']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_hours']=0;

}

if($count==1){

$delayed_time= date('H:i:s' , strtotime($wptime.'+'.$byconsolewooodt_delivery_location_order_count_val['threshold_hours'] .'hour')); 

}else{

$delayed_time= date('H:i:s' , strtotime($next_available_time.'+'.$byconsolewooodt_delivery_location_order_count_val['threshold_hours'] .'hour')); 

}

if($byconsolewooodt_delivery_location_order_count_val['threshold_minutes']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_minutes']=0;

}

$delayed_time= date('H:i:s' , strtotime($delayed_time.'+'.$byconsolewooodt_delivery_location_order_count_val['threshold_minutes'] .'minute'));

$wp_todays_date=current_time('m/d/Y');

//echo '<hr/>$byconsole_order_counting_start_time<br/>';

if($byconsolewooodt_delivery_location_order_count_val['threshold_hours']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_hours']=0;

}

//$byconsole_order_counting_start_time = date('H:i:s' , strtotime($wptime.'-'.$byconsolewooodt_delivery_location_order_count_val['threshold_hours'] .'hour')); 

$byconsole_order_counting_start_time = date('Y-m-d H:i:s' , strtotime($wp_current_date_time.'-'.$byconsolewooodt_delivery_location_order_count_val['threshold_hours'] .'hour'));

if($byconsolewooodt_delivery_location_order_count_val['threshold_minutes']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_minutes']=0;

}

$byconsole_order_counting_start_time = date('Y-m-d H:i:s', strtotime($byconsole_order_counting_start_time.'-'.$byconsolewooodt_delivery_location_order_count_val['threshold_minutes'] .'minute'));

/********************************************************/

$xyz=1;

$date_query_before_plus_one_minute=date('Y-m-d H:i:s' , strtotime($wp_current_date_time.'+'.$xyz.'minute'));

//echo $date_query_before_plus_one_minute=date('Y-m-d H:i:s', strtotime($wp_current_date_time.'+'.$xyz .'minute'));

$order_post_filters_delivery = 

array(

'post_status' =>array('wc-completed', 'wc-pending', 'wc-processing', 'wc-on-hold'), 

'post_type' => 'shop_order',

'posts_per_page' => -1,

'paged' => 1,

'order' => 'DESC',

'date_query' => array(

array(

'after' => date('Y-m-d h:i A', strtotime($byconsole_order_counting_start_time)),

'before' => date('Y-m-d h:i A', strtotime($date_query_before_plus_one_minute ))

//'before' => $date_query_before_plus_one_minute

)

),

'meta_query'    => array(

array(

'key'       => 'byconsolewooodt_delivery_location',

'value'     => $byconsolewooodt_delivery_location_order_count_key,

'compare'   => '='

),

array(

'key'       => 'byconsolewooodt_delivery_date',

'value'     => $wp_todays_date,

'compare'   => '='

),

array(

'key'       => 'byconsolewooodt_delivery_time',

'value'     => date('h:i A',strtotime($delayed_time)),

'compare'   => '<'

),

array(

'key'       => 'byconsolewooodt_delivery_time',

'value'     => date('h:i A',strtotime($wptime)),

'compare'   => '>'

)

)

);

/*********The Loop****************/

$placed_order = new WP_Query($order_post_filters_delivery);

$location_count = 1;

$byconsolewooodt_shipping_time_array=array();

//$count=1;

foreach($placed_order->posts as $single_order){

$should_break='NO';

$single_order_id=$single_order->ID;

$byconsolewooodt_delivery_location_by_order = get_post_meta( $single_order_id, 'byconsolewooodt_delivery_location', true );

$byconsolewooodt_shipping_date = get_post_meta( $single_order_id, 'byconsolewooodt_delivery_date', true );

$byconsolewooodt_shipping_time = get_post_meta( $single_order_id, 'byconsolewooodt_delivery_time', true );

if($byconsolewooodt_delivery_location_by_order==$byconsolewooodt_delivery_location_order_count_key)

{

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]['order_posted_in_threshold_hours']++;

//$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]["soonest_shipping_time"]

//$byconsolewooodt_shipping_time_array[$single_order_id]=$byconsolewooodt_shipping_time;

$byconsolewooodt_shipping_time_array[$single_order_id]=strtotime($byconsolewooodt_shipping_date.' '.$byconsolewooodt_shipping_time);

if($byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]['order_posted_in_threshold_hours']>=$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]['max_order_by_threshold_hours'])

{

//find soonest shipping time				

//get next soonest delivery time	

if(!empty($byconsolewooodt_shipping_time_array)){

//echo '<hr />$byconsolewooodt_shipping_time_array';

//print_r($byconsolewooodt_shipping_time_array);

//echo '<br/>';

sort($byconsolewooodt_shipping_time_array);

//echo '<br/>';

//print_r($byconsolewooodt_shipping_time_array);

//echo '<hr/>';

$formated_soonest_shipping_time=date('Y-m-d h:i A',$byconsolewooodt_shipping_time_array[0]);

//push the soonest delivery time in location order count array

$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]["soonest_shipping_time"]=$formated_soonest_shipping_time;

$formated_soonest_shipping_time_hour=date('H:i:s',strtotime($formated_soonest_shipping_time));

// Now change the date time parameter to search in next slot

$formated_soonest_shipping_time_hour=date('H:i:s',strtotime($formated_soonest_shipping_time));

if($byconsolewooodt_delivery_location_order_count_val['threshold_hours']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_hours']=0;

}

$next_available_time=date('H:i:s',strtotime( $formated_soonest_shipping_time_hour.'+'.$byconsolewooodt_delivery_location_order_count_val['threshold_hours'].'hour'));

if($byconsolewooodt_delivery_location_order_count_val['threshold_minutes']==''){

$byconsolewooodt_delivery_location_order_count_val['threshold_minutes']=0;

}

$next_available_time=date('H:i:s',strtotime($next_available_time.'+'.$byconsolewooodt_delivery_location_order_count_val['threshold_minutes'].'minute'));

// create JS array for soonest shipping tim		

?>

<script>

jQuery(document).ready(function(){	

//byconsolewooodt_thresholded_delivery_locations_delayed_start_time[<?php //echo $byconsolewooodt_delivery_location_order_count_key;?>]="<?php //echo $formated_soonest_shipping_time;?>";

byconsolewooodt_thresholded_delivery_locations_delayed_start_time[<?php echo $byconsolewooodt_delivery_location_order_count_key;?>]="<?php echo $formated_soonest_shipping_time;?>";

//threshold_delayed_start_time_for_delivery='<?php //echo $formated_soonest_shipping_time;?>';

//console.log('byconsolewooodt_thresholded_delivery_locations_delayed_start_time (originated here): ');

//console.log(byconsolewooodt_thresholded_delivery_locations_delayed_start_time);

})

</script>

<?php

$should_break='YES';

//break;

}	

}

/****************************************************************/						

}

if($should_break=='YES')		

break;

}//$single_order foreach

$count++;

}

}//foreach empty check

//echo '<hr />$byconsolewooodt_delivery_location_order_count';

//print_r($byconsolewooodt_delivery_location_order_count);

//$formated_soonest_shipping_time=date('H:i:s',$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]["soonest_shipping_time"]);

$byconsolewooodt_thresholded_delivery_locations=array();

if(!empty($byconsolewooodt_delivery_location_order_count)){

foreach($byconsolewooodt_delivery_location_order_count as $byconsolewooodt_delivery_location_order_count_key => $byconsolewooodt_delivery_location_order_count_val)

{

if($byconsolewooodt_delivery_location_order_count_val['max_order_by_threshold_hours'] <= $byconsolewooodt_delivery_location_order_count_val['order_posted_in_threshold_hours']) 

{

//		$byconsolewooodt_delivery_location_order_count_val_array[] = $byconsolewooodt_delivery_location_order_count_key;

//$formated_soonest_shipping_time=date('H:i A',$byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]["soonest_shipping_time"]);

//get the final array to use on checkout time selection drop-down

//		$byconsolewooodt_thresholded_delivery_locations[$byconsolewooodt_delivery_location_order_count_key]=$formated_soonest_shipping_time;

?>

<script>

jQuery(document).ready(function(){	

//byconsolewooodt_thresholded_delivery_locations_delayed_start_time[<?php echo $byconsolewooodt_delivery_location_order_count_key;?>]="<?php echo $byconsolewooodt_delivery_location_order_count[$byconsolewooodt_delivery_location_order_count_key]["soonest_shipping_time"];?>";

//threshold_delayed_start_time_for_delivery='<?php //echo $formated_soonest_shipping_time;?>';

//console.log('byconsolewooodt_thresholded_delivery_locations_delayed_start_time (originated here): ');

//console.log(byconsolewooodt_thresholded_delivery_locations_delayed_start_time);

})

</script>

<?php

}

}

}

}/*threshold_hours enable or disable*/

}/*Fixed time*/

}/*is checkout page*/











?>