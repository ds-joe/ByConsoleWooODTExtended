<?php
function get_delivery_time_for_widget_by_selected_date()
{


    global $wpdb; // this is how you get access to the database

    $byconsolewooodt_hours_format = get_option('byconsolewooodt_hours_format');


    $stripped_out_byconsolewooodt_delivery_widget_cookie = stripslashes($_COOKIE['byconsolewooodt_delivery_widget_cookie']);
    $byconsolewooodt_delivery_widget_cookie_array = json_decode($stripped_out_byconsolewooodt_delivery_widget_cookie, true);

    $location_time_disable_by_date_array = array();
    $selected_location_value = $_POST['selected_location_value'];
    $selected_data_val = $_POST['selected_date_value'];
    $date_from = date('m/d/Y', strtotime($selected_data_val . ' -4 day'));
    $date_to = $selected_data_val;

    $byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'];

    if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {


        $byconsolewooodt_pickup_or_delivery_time = get_option('byconsolewooodt_chekout_page_time_placeholder');





        $filters = array(


            /*'post_status' => 'any',*/


            'post_status' => array('wc-pending', 'wc-processing', 'wc-on-hold'),


            'post_type' => 'shop_order',


            'posts_per_page' => 90000,


            'paged' => -1,


            'meta_key' => '_customer_user',


            'date_query' => array(


                'after' => date('Y-m-d', strtotime($date_from)),


                'before' => date('Y-m-d', strtotime($date_to)),


                'inclusive' => true


            ),


            'meta_query' => array(


                array(


                    'key' => 'byconsolewooodt_delivery_date',


                    'value' => $date_to,


                    'compare' => '='


                ),


                array(


                    'key' => 'byconsolewooodt_pickup_location',


                    'value' => $selected_location_value,


                    'compare' => '='


                )


            )
        );



    }




    // The Query


    $the_query = new WP_Query($filters);


    //echo '<pre>';


    //var_dump($the_query);


    //echo '</pre>';


    // The Loop





    $sorted_orders = $the_query->posts;


    $delivery_on_selected_time_array = array();


    if (!empty($sorted_orders)) {








        array_push($selected_loaction_maxmimum_delivery_array, get_post_meta($selected_location_value, 'delivery_per_custom_slot[number_of_delivery]', true));





        foreach ($sorted_orders as $single_order) {


            //echo $single_order_id=$single_order->ID;








            array_push($delivery_on_selected_time_array, get_post_meta($single_order->ID, 'byconsolewooodt_delivery_time', true));


        }





        // get max order limit and custom slot from option table


        if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {
            $location_max_order_array = get_option('pickup_per_custom_slot');
        }


        if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'levering') {



            $location_max_order_array = get_option('delivery_per_custom_slot');



        }





        $selected_location_max_order_array = $location_max_order_array[$selected_location_value];


        //print_r($selected_location_max_order_array);





        $count = count($delivery_on_selected_time_array);



        foreach ($selected_location_max_order_array as $key => $max_order_per_custom_slot) {


            $order_booked_count = 0;


            $delivery_on_selected_time_array_temp = $delivery_on_selected_time_array;


            //echo '----------------------------';


            //print_r($delivery_on_selected_time_array_temp);


            $i = 1;


            while ($i <= $count) {


                $admin_time_slot = date($byconsolewooodt_hours_format, strtotime($max_order_per_custom_slot["start_time_slot"])) . ' - ' . date($byconsolewooodt_hours_format, strtotime($max_order_per_custom_slot["end_time_slot"]));





                //echo '<br />';





                if (in_array($admin_time_slot, $delivery_on_selected_time_array_temp)) {



                    $key_to_remove = array_search($admin_time_slot, $delivery_on_selected_time_array_temp);


                    //echo '$key_to_remove - '.$key_to_remove;


                    unset($delivery_on_selected_time_array_temp[$key_to_remove]);


                    //echo 'printing $delivery_on_selected_time_array_temp';


                    //print_r($delivery_on_selected_time_array_temp);


                    //echo '-----------------------------';


                    $order_booked_count++;


                    $location_order_status[$selected_location_value][$key]["max_allowed"] = $max_order_per_custom_slot["number_of_delivery"];





                    $location_order_status[$selected_location_value][$key]["posted_order"] = $order_booked_count;





                    $location_order_status[$selected_location_value][$key]["used_time_slot"] = $max_order_per_custom_slot["start_time_slot"] . ' - ' . $max_order_per_custom_slot["end_time_slot"];


                }


                $i++;


            }



            //array_push($location_time_disable_by_date_array,$max_order_per_custom_slot["time_slot"]);



        }


    } // not empty





    foreach ($location_order_status as $location_order_status_values) {


        foreach ($location_order_status_values as $single_key => $single_value) {
            if ($single_value['max_allowed'] == $single_value['posted_order']) {
                array_push($location_time_disable_by_date_array, $single_value['used_time_slot']);
            }
        }


    }





    $delivery_location_id = $_POST['selected_location_value'];


    if ($byconsolewooodt_delivery_widget_cookie_array['byconsolewooodt_widget_type_field'] == 'take_away') {
        $delivery_per_custom_slot_array = get_option('pickup_per_custom_slot');
    }




    $delivery_per_custom_slot_array_by_location_id = $delivery_per_custom_slot_array[$delivery_location_id];


    //print_r($delivery_per_custom_slot_array_by_location_id);

    //print_r($_POST['current_system_time']);
    $byconsolewooodt_hours_format = get_option('byconsolewooodt_hours_format');


    echo '<option value="0">' . $byconsolewooodt_pickup_or_delivery_time . '</option>';


    foreach ($delivery_per_custom_slot_array_by_location_id as $delivery_per_custom_slot_val_single_key => $delivery_per_custom_slot_val_single_value) {


        //echo '********************************************';


        $total_time_value = $delivery_per_custom_slot_val_single_value['start_time_slot'] . ' - ' . $delivery_per_custom_slot_val_single_value['end_time_slot'];


        //echo '********************************************';


        $current_system_time = $_POST['system_current_time'];

        $start_time_slot = $delivery_per_custom_slot_val_single_value['start_time_slot'];


        $end_time_slot = $delivery_per_custom_slot_val_single_value['end_time_slot'];


        $vanManagementTime = date($byconsolewooodt_hours_format, strtotime($start_time_slot)) . ' - ' . date($byconsolewooodt_hours_format, strtotime($end_time_slot));

        //echo '$current_system_time <= $start_time_slot '. strtotime($current_system_time) .'<='. strtotime($start_time_slot)  .'-- ';

        //echo $current_date = current_time('m/d/Y');
        //echo $_POST['selected_date_value'];

        if ($_POST['selected_date_value'] == current_time('m/d/Y')) {
            if (strtotime($current_system_time) <= strtotime($start_time_slot)) {
                if (in_array($total_time_value, $location_time_disable_by_date_array)) {

                    echo '<option disabled="disabled" value="' . $vanManagementTime . '">' . $vanManagementTime . '</option>';


                } else {
                    echo '<option value="' . $vanManagementTime . '">' . $vanManagementTime . '</option>';


                }
            } else {
                echo '<option disabled="disabled" style="color:#f00; font-size:12px;">(' . $start_time_slot . '-' . $end_time_slot . ') This time is available for today</option>';
            }
        } else {
            //echo $total_time_value.','.$location_time_disable_by_date_array.'----';
            if (in_array($total_time_value, $location_time_disable_by_date_array)) {

                echo '<option disabled="disabled" value="' . $vanManagementTime . '">' . $vanManagementTime . '</option>';


            } else {
                echo '<option value="' . $vanManagementTime . '">' . $vanManagementTime . '</option>';

            }
        }








    }




    wp_die(); // this is required to terminate immediately and return a proper response



}
?>