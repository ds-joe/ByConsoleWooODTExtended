<?php

@include(__DIR__ . "/customization.php");

class BycWooODT_class extends Customization
{

    private $responseData = "";
    private $WooODTdataStoreArray = array();
    public function call_api()
    {
        $url = $_SERVER['SERVER_NAME'];
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $this->api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "url:$url",
                ),
            )
        );
        $response = curl_exec($curl);

        $err = curl_error($curl);
        if ($err) {
            $msg = "This plugin need cURL, please make sure your server support cURL and then try again. In case of you see this repeatedly inspite of having cURL enabled please contact it support@byconsole.com or https://support.byconsole.com";
            $this->ShowMsg($msg);
        }
        if (empty($response)) {
            $apiResponse = false;
        } else {
            $apiResponse = true;
            $this->responseData = $response;
        }
        curl_close($curl);
        return $apiResponse;
    }

    public function checkResponse()
    {
        if ($this->call_api() == false) {
            for ($i = 0; $i <= 2; $i++) {
                if ($this->call_api() == true) {
                    return $this->WooODTdata($this->responseData);
                    break;
                }
                if ($i == 2) {
                    $msg = "Please renew your copy or contact support@byconsole.com or https://support.byconsole.com";
                    $this->ShowMsg($msg);
                    $this->doDecide();
                }
            }
        } else {
            return $this->WooODTdata($this->responseData);
        }
    }
    public function doDecide()
    {
        //run deactivation code
        //echo 'Do deactivation';
        return false;
    }
    public function SetWooODTData($wooodtextendeds, $config)
    {
        /**********************/
        $special_date_charges_array = array();
        $special_date_charges_data = "";
        foreach ($wooodtextendeds['special_dates_decode'] as $key => $specialValue) {
            if ($wooodtextendeds['special_chages_decode'][$key]['Special_Dates_charges'] != "0") {
                $special_date_charges_data = $wooodtextendeds['special_chages_decode'][$key]['Special_Dates_charges'];
            } else {
                $special_date_charges_data = "";
            }
            array_push($special_date_charges_array[$wooodtextendeds['special_dates_decode'][$key]] = $special_date_charges_data);
            // array_push($special_date_charges_array, [$wooodtextendeds['special_dates_decode'][$key]=>$special_date_charges_data]);
        }
        $config['special_date_charges_array'] = $special_date_charges_array;
        $wooodt_data = array(
            'byconsolewooodt_order_type' => $wooodtextendeds['wooodtextendeds_array_data']['0']['order_type'],
            'byconsolewooodt_preorder_days' => $wooodtextendeds['wooodtextendeds_array_data']['0']['preorder_days'],
            'byconsolewooodt_delivery_hours_from' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_hours_from'],
            'byconsolewooodt_delivery_hours_to' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_hours_to'],
            'byconsolewooodt_opening_hours_from' => $wooodtextendeds['wooodtextendeds_array_data']['0']['opening_hours_from'],
            'byconsolewooodt_opening_hours_to' => $wooodtextendeds['wooodtextendeds_array_data']['0']['opening_hours_to'],
            "byconsolewooodt_exclude_holidays_from_preorder_restriction_days" => $wooodtextendeds['wooodtextendeds_array_data']['0']['holidays_from_preorder_restriction_days'],
            'byconsolewooodt_restricted_preorder_days' => $wooodtextendeds['wooodtextendeds_array_data']['0']['restricted_preorder_days'],
            'byconsolewooodt_opening_break_hours_from' => $wooodtextendeds['wooodtextendeds_array_data']['0']['opening_break_hours_from'],
            'byconsolewooodt_opening_break_hours_to' => $wooodtextendeds['wooodtextendeds_array_data']['0']['opening_break_hours_to'],
            'byconsolewooodt_hours_format' => $wooodtextendeds['wooodtextendeds_array_data']['0']['hours_format'],
            'byconsolewooodt_delivery_hours_break_from' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_hours_break_from'],
            'byconsolewooodt_delivery_hours_break_to' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_hours_break_to'],
            'byconsolewooodt_pickup_wait_times' => $wooodtextendeds['wooodtextendeds_array_data']['0']['pickup_wait_times'],
            'byconsolewooodt_delivery_times' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_wait_times'],
            'byconsolewooodt_pickup_days' => $wooodtextendeds['wooodtextendeds_array_data']['0']['pickup_days'],
            'byconsolewooodt_delivery_days' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_days'],
            'byconsolewooodt_widget_field_position' => $wooodtextendeds['wooodtextendeds_array_data']['0']['widget_field_position'],
            'display_time_formate_as' => $wooodtextendeds['wooodtextendeds_array_data']['0']['display_time_format_as'],
            'byconsolewooodt_wooodt_date_formate_setting' => $wooodtextendeds['features_settings_data_array']['0']['wooodt_date_formate_setting'],
            ///Y-m-d
            'byconsolewooodt_orders_delivered' => $wooodtextendeds['wooodtextendeds_array_data']['0']['orders_delivered'],
            //byconsolewooodt_orders_delivered
            'byconsolewooodt_time_field_validation' => $wooodtextendeds['wooodtextendeds_array_data']['0']['time_field_validation'],
            'byconsolewooodt_time_field_show' => $wooodtextendeds['wooodtextendeds_array_data']['0']['time_field_show'],
            'byconsolewooodt_allow_orders_on_closing_days' => $wooodtextendeds['wooodtextendeds_array_data']['0']['orders_on_closing_days'],
            'byconsolewooodt_delivery_per_custom_slot_confirm_box' => $wooodtextendeds['wooodtextendeds_array_data']['0']['delivery_per_custom_slot_confirm_box'],
            'byconsolewooodt_odt_show_hide_on_live_site' => $config['odt_show_hide_on_live_site'],
            "plugins_activation_date" => $this->plugins_activation_date,
            'byconsolewooodt_multiple_pickup_location' => $config['multiple_pickup_location'],
            'byconsolewooodt_multiple_delivery_location' => $config['multiple_delivery_location'],
            'byconsolewooodt_pickup_location' => $config['location_data'],
            'byconsolewooodt_delivery_location' => $config['delivery_data'],
            'byconsolewooodt_pickup_lable' => $wooodtextendeds['language_translator_data_array']['0']['pickup_lable'],
            'byconsolewooodt_delivery_lable' => $wooodtextendeds['language_translator_data_array']['0']['delivery_lable'],

            'byconsolewooodt_chekout_page_date_placeholder' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_date_placeholder'],

            'byconsolewooodt_chekout_page_time_placeholder' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_time_placeholder'],

            'byconsolewooodt_chekout_page_section_heading' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_section_heading'],



            'byconsolewooodt_chekout_page_order_type_lebel' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_order_type_lebel'],

            'byconsolewooodt_pickup_location_lebel' => $wooodtextendeds['language_translator_data_array']['0']['pickup_location_lebel'],

            'byconsolewooodt_delivery_location_lebel' => $wooodtextendeds['language_translator_data_array']['0']['delivery_location_lebel'],

            'byconsolewooodt_chekout_page_date_lebel' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_date_lebel'],

            'byconsolewooodt_order_page_delivery_time_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_delivery_time_lable'],

            'byconsolewooodt_order_page_delivery_date_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_delivery_date_lable'],





            'byconsolewooodt_chekout_page_tips_label' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_tips_label'],

            'byconsolewooodt_checkout_page_pickup_date_blank_error_msg' => $wooodtextendeds['language_translator_data_array']['0']['checkout_page_pickup_date_blank_error_msg'],

            'byconsolewooodt_checkout_page_pickup_time_blank_error_msg' => $wooodtextendeds['language_translator_data_array']['0']['checkout_page_pickup_time_blank_error_msg'],

            'byconsolewooodt_checkout_page_delivery_date_blank_error_msg' => $wooodtextendeds['language_translator_data_array']['0']['checkout_page_delivery_date_blank_error_msg'],

            'byconsolewooodt_checkout_page_delivery_time_blank_error_msg' => $wooodtextendeds['language_translator_data_array']['0']['checkout_page_delivery_time_blank_error_msg'],

            'byconsolewooodt_chekout_page_delivery_date_placeholder' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_delivery_date_placeholder'],

            'byconsolewooodt_chekout_page_delivery_time_placeholder' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_delivery_time_placeholder'],

            'byconsolewooodt_minimum_order_text_lable' => $wooodtextendeds['language_translator_data_array']['0']['minimum_order_text_lable'],

            'byconsolewooodt_store_close_notice' => $wooodtextendeds['language_translator_data_array']['0']['store_close_notice'],

            'byconsolewooodt_order_page_pickup_time_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_pickup_time_lable'],

            'byconsolewooodt_order_page_pickup_date_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_pickup_date_lable'],

            'byconsolewooodt_order_page_pickup_location_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_pickup_location_lable'],

            'byconsolewooodt_order_page_delivery_location_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_delivery_location_lable'],

            'byconsolewooodt_order_page_order_type_lable' => $wooodtextendeds['language_translator_data_array']['0']['order_page_order_type_lable'],

            'byconsolewooodt_calender_holiday_lable' => $wooodtextendeds['language_translator_data_array']['0']['calender_holiday_lable'],

            'byconsolewooodt_calender_closing_lable' => $wooodtextendeds['language_translator_data_array']['0']['calender_closing_lable'],

            'byconsolewooodt_calender_pick_notallowed_lable' => $wooodtextendeds['language_translator_data_array']['0']['calender_pick_notallowed_lable'],

            'byconsolewooodt_time_picker_blank_error' => $wooodtextendeds['language_translator_data_array']['0']['time_picker_blank_error'],

            'byconsolewooodt_time_slot_charges_label' => $wooodtextendeds['language_translator_data_array']['0']['time_slot_charges_label'],

            'byconsolewooodt_chekout_page_time_lebel' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_time_lebel'],

            'byconsolewooodt_orders_pick_up' => $wooodtextendeds['language_translator_data_array']['0']['orders_pick_up'],

            'byconsolewooodt_day_wise_charges_label' => $wooodtextendeds['language_translator_data_array']['0']['day_wise_charges_label'],

            'byconsolewooodt_special_dates_charges_label' => $wooodtextendeds['language_translator_data_array']['0']['special_dates_charges_label'],

            'byconsolewooodt_chekout_page_delivery_tip_label' => $wooodtextendeds['language_translator_data_array']['0']['chekout_page_delivery_tip_label'],







            'byconsolewooodt_admin_national_holiday_date' => $config['national_holidays_day_and_month'],

            'byconsolewooodt_admin_closing_sunday' => $config['sun'],

            'byconsolewooodt_admin_closing_monday' => $config['mon'],

            'byconsolewooodt_admin_closing_tuesday' => $config['tue'],

            'byconsolewooodt_admin_closing_wednessday' => $config['wed'],

            'byconsolewooodt_admin_closing_thursday' => $config['thu'],

            'byconsolewooodt_admin_closing_friday' => $config['fri'],

            'byconsolewooodt_admin_closing_saturday' => $config['sat'],

            'byconsolewooodt_admin_holiday_date' => $config['casual_holidays_date']['0'],
            //'byconsolewooodt_admin_holiday_date'=>$config['casual_holidays_date'],

            'byconsolewooodt_admin_special_open_date' => $config['special_open_dates_month_days_years'],

            'byconsolewooodt_pickup_location_auto_select_and_hide' => $config['pickup_location_auto_select_and_hide'],

            'byconsolewooodt_delivery_location_auto_select_and_hide' => $config['delivery_location_auto_select_and_hide'],

            'byconsolewooodt_hide_shipping_fields_when_pickup' => $config['hide_shipping_fields_when_pickup'],

            'byconsolewooodt_locations_alphabetical_order' => $config['locations_alphabetical_order'],

            'byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode' => $config['exact_time_text_lable_enable_mode'],

            'pickup_per_custom_slot' => $wooodtextendeds['pickup_per_custom_slot'],

            'delivery_per_custom_slot' => $wooodtextendeds['delivery_per_custom_slot'],



            'byconsolewooodt_day_wise_charges' => $wooodtextendeds['byconsolewooodt_day_wise_charges'],



            'byconsolewooodt_calender_color' => $wooodtextendeds['color_picker_settings']['color'],

            'byconsolewooodt_calender_text_color' => $wooodtextendeds['color_picker_settings']['text_color'],

            'byconsolewooodt_calender_arrow_color' => $wooodtextendeds['color_picker_settings']['arrow_color'],

            'byconsolewooodt_calender_current_date_color' => $wooodtextendeds['color_picker_settings']['current_date_color'],

            'byconsolewooodt_hide_billing_fields_when_pickup' => $wooodtextendeds['array_remove_billing_fields_for_pickup'],

            'byconsolewooodt_hide_billing_fields_when_delivery' => $wooodtextendeds['array_remove_billing_fields_for_delivery'],


            "byconsolewooodt_checkout_page_tax_include_with_shipping_cost" => $config['checkout_page_tax_include_with_shipping_cost'],

            "byconsolewooodt_checkout_page_next_prev_button_manage" => $config['checkout_page_next_prev_button_manage'],

            "byconsolewooodt_delivery_tips_amount" => $wooodtextendeds['features_settings_data_array']['0']['delivery_tips_amount'],

            'byconsolewooodt_special_dates_charges' => $config['special_date_charges_array'],



            "byconsolewooodt_same_day_pickup_order_placing_cutout_time" => $wooodtextendeds['wooodtextendeds_array_data']['0']['same_day_pickup_order_placing_cutout_time'],

            "byconsolewooodt_next_day_pickup_order_placing_cutout_time" => $wooodtextendeds['wooodtextendeds_array_data']['0']['next_day_pickup_order_placing_cutout_time'],

            "byconsolewooodt_same_day_delivery_order_placing_cutout_time" => $wooodtextendeds['wooodtextendeds_array_data']['0']['same_day_delivery_order_placing_cutout_time'],

            "byconsolewooodt_next_day_delivery_order_placing_cutout_time" => $wooodtextendeds['wooodtextendeds_array_data']['0']['next_day_delivery_order_placing_cutout_time'],



            'hide_delivery_tips' => $wooodtextendeds['features_settings_data_array']['0']['hide_delivery_tips'],

            'byconsolewooodt_as_early_as_possible_lable_text' => $wooodtextendeds['features_settings_data_array']['0']['as_early_as_possible_lable_text'],

            'byconsolewooodt_exact_time_lable_text' => $wooodtextendeds['features_settings_data_array']['0']['exact_time_lable_text'],

            'select_delivery_tips_text' => $wooodtextendeds['language_translator_data_array']['0']['select_delivery_tips_text'],

            'wooodtextended_expiry' => $this->plugin_expired_date,


        );
        // var_dump($wooodt_data);
        return $wooodt_data;
    }

    public function WooODTdata($response)
    {
        //prepare the whole data here
        $wooodtextendeds = json_decode($response, true);
        /**************************************/
        $config['multiple_pickup_location'] = "";
        $config['multiple_delivery_location'] = "";
        $config['special_open_dates_array'] = array();
        $config['special_open_dates_month_days_years'] = "";
        $config['national_holidays_day_and_month'] = "";
        $config['casual_holidays_date'] = array();
        $config['odt_show_hide_on_live_site'] = "";
        $config['location_data'] = $wooodtextendeds['pickup_delivery_data_array']['location_data'];
        $config['delivery_data'] = $wooodtextendeds['pickup_delivery_data_array']['delivery_data'];
        foreach ($wooodtextendeds['pickup_delivery_data_array']['multiple_pickup_location'] as $value) {
            if ($value['multiple_pickup_location'] == 1) {
                $config['multiple_pickup_location'] = "YES";
            } else {
                $config['multiple_pickup_location'] = "";
            }
        }
        foreach ($wooodtextendeds['pickup_delivery_data_array']['multiple_delivery_location'] as $value) {
            if ($value['multiple_delivery_location'] == 1) {
                $config['multiple_delivery_location'] = "YES";
            } else {
                $config['multiple_delivery_location'] = "";
            }
        }
        $special_open_dates = json_decode($wooodtextendeds['holidays_open_date_setting_data_array']['0']['Special_Open_Dates'], true);
        if (!empty($special_open_dates)) {
            $special_open_dates_explode = explode(",", $special_open_dates['0']);
            foreach ($special_open_dates_explode as $key => $value) {
                $special_open_dates_explode = explode("/", $value);
                $special_open_dates_array[] = $special_open_dates_explode['1'] . "/" . $special_open_dates_explode['0'] . "/" . $special_open_dates_explode['2'];
            }
        } else {
            $special_open_dates_array = array();
        }
        $config['special_open_dates_month_days_years'] = implode(", ", $special_open_dates_array);
        $national_Holidays = json_decode($wooodtextendeds['holidays_open_date_setting_data_array']['0']['National_Holidays_Date'], true);
        $national_Holidays_date_explode = explode(",", $national_Holidays['0']);
        foreach ($national_Holidays_date_explode as $value) {
            $national_Holidays_date_explode = explode("/", $value);
            $national_holidays_date_array[] = $national_Holidays_date_explode['1'] . "/" . $national_Holidays_date_explode['0'];
        }
        $config['national_holidays_day_and_month'] = implode(", ", $national_holidays_date_array);
        $config['casual_holidays_date'] = json_decode($wooodtextendeds['holidays_open_date_setting_data_array']['0']['Casual_Holidays_Date'], true);
        $config['sun'] = "";
        $config['mon'] = "";
        $config['tue'] = "";
        $config['wed'] = "";
        $config['thu'] = "";
        $config['fri'] = "";
        $config['sat'] = "";
        $config['pickup_location_auto_select_and_hide'] = "";
        $config['delivery_location_auto_select_and_hide'] = "";
        $config['hide_shipping_fields_when_pickup'] = "";
        $config['locations_alphabetical_order'] = "";
        $config['exact_time_text_lable_enable_mode'] = "";
        $config['checkout_page_tax_include_with_shipping_cost'] = "";
        $config['checkout_page_next_prev_button_manage'] = "";
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['sun'] == true) {
            $config['sun'] = 0;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['mon'] == true) {
            $config['mon'] = 1;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['tue'] == true) {
            $config['tue'] = 2;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['wed'] == true) {
            $config['wed'] = 3;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['thu'] == true) {
            $config['thu'] = 4;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['fri'] == true) {
            $config['fri'] = 5;
        }
        if ($wooodtextendeds['holidays_open_date_setting_data_array']['0']['sat'] == true) {
            $config['sat'] = 6;
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['odt_show_hide_on_live_site'] == 1) {
            $config['odt_show_hide_on_live_site'] = 'yes';
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['pickup_location_auto_select_and_hide'] == 1) {
            $config['pickup_location_auto_select_and_hide'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['delivery_location_auto_select_and_hide'] == 1) {
            $config['delivery_location_auto_select_and_hide'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['hide_shipping_fields_when_pickup'] == 1) {
            $config['hide_shipping_fields_when_pickup'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['locations_alphabetical_order'] == 1) {
            $config['locations_alphabetical_order'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['as_early_as_possible_and_exact_time_text_lable_enable_mode'] == 1) {
            $config['exact_time_text_lable_enable_mode'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['checkout_page_tax_include_with_shipping_cost'] == 1) {
            $config['checkout_page_tax_include_with_shipping_cost'] = "yes";
        }
        if ($wooodtextendeds['features_settings_data_array']['0']['checkout_page_next_prev_button_manage'] == 1) {
            $config['checkout_page_next_prev_button_manage'] = "yes";
        }
        $wooodtextendeds['expiry'] = $this->plugin_expired_date;
        /**************************************/

        return $this->SetWooODTData($wooodtextendeds, $config);

    }


    public function ShowMsg($msg)
    {
        echo $msg;
    }


    public function GetWooODTData($data, $data_array)
    {
        if (!is_array($data_array)) {
            echo $data_array;
        }
        if (array_key_exists($data, $data_array)) {
            $value = $data_array[$data];
        } else {
            $value = false;
        }

        return $value;

    }


    public function get_blank()
    {
        return $default_array = array(
            'byconsolewooodt_order_type' => '0',
            'byconsolewooodt_preorder_days' => '0',
            'byconsolewooodt_delivery_hours_from' => '0',
            'byconsolewooodt_delivery_hours_to' => '0',
            'byconsolewooodt_opening_hours_from' => '0',
            'byconsolewooodt_opening_hours_to' => '0',
            "byconsolewooodt_exclude_holidays_from_preorder_restriction_days" => '0',
            'byconsolewooodt_restricted_preorder_days' => '0',
            'byconsolewooodt_opening_break_hours_from' => '0',
            'byconsolewooodt_opening_break_hours_to' => '0',
            'byconsolewooodt_hours_format' => '0',
            'byconsolewooodt_delivery_hours_break_from' => '0',
            'byconsolewooodt_delivery_hours_break_to' => '0',
            'byconsolewooodt_pickup_wait_times' => '0',
            'byconsolewooodt_delivery_times' => '0',
            'byconsolewooodt_pickup_days' => '0',
            'byconsolewooodt_delivery_days' => '0',
            'byconsolewooodt_widget_field_position' => '0',
            'display_time_formate_as' => '0',
            'byconsolewooodt_wooodt_date_formate_setting' => '0',
            ///Y-m-d
            'byconsolewooodt_orders_delivered' => '0',
            //byconsolewooodt_orders_delivered
            'byconsolewooodt_time_field_validation' => '0',
            'byconsolewooodt_time_field_show' => '0',
            'byconsolewooodt_allow_orders_on_closing_days' => '0',
            'byconsolewooodt_delivery_per_custom_slot_confirm_box' => '0',
            'byconsolewooodt_odt_show_hide_on_live_site' => '0',
            "plugins_activation_date" => '0',
            'byconsolewooodt_multiple_pickup_location' => '0',
            'byconsolewooodt_multiple_delivery_location' => '0',
            'byconsolewooodt_pickup_location' => '0',
            'byconsolewooodt_delivery_location' => '0',
            'byconsolewooodt_pickup_lable' => '0',
            'byconsolewooodt_delivery_lable' => '0',
            'byconsolewooodt_chekout_page_date_placeholder' => '0',
            'byconsolewooodt_chekout_page_time_placeholder' => '0',
            'byconsolewooodt_chekout_page_section_heading' => '0',

            'byconsolewooodt_chekout_page_order_type_lebel' => '0',
            'byconsolewooodt_pickup_location_lebel' => '0',
            'byconsolewooodt_delivery_location_lebel' => '0',
            'byconsolewooodt_chekout_page_date_lebel' => '0',
            'byconsolewooodt_order_page_delivery_time_lable' => '0',
            'byconsolewooodt_order_page_delivery_date_lable' => '0',


            'byconsolewooodt_chekout_page_tips_label' => '0',
            'byconsolewooodt_checkout_page_pickup_date_blank_error_msg' => '0',
            'byconsolewooodt_checkout_page_pickup_time_blank_error_msg' => '0',
            'byconsolewooodt_checkout_page_delivery_date_blank_error_msg' => '0',
            'byconsolewooodt_checkout_page_delivery_time_blank_error_msg' => '0',
            'byconsolewooodt_chekout_page_delivery_date_placeholder' => '0',
            'byconsolewooodt_chekout_page_delivery_time_placeholder' => '0',
            'byconsolewooodt_minimum_order_text_lable' => '0',
            'byconsolewooodt_store_close_notice' => '0',
            'byconsolewooodt_order_page_pickup_time_lable' => '0',
            'byconsolewooodt_order_page_pickup_date_lable' => '0',
            'byconsolewooodt_order_page_pickup_location_lable' => '0',
            'byconsolewooodt_order_page_delivery_location_lable' => '0',
            'byconsolewooodt_order_page_order_type_lable' => '0',
            'byconsolewooodt_calender_holiday_lable' => '0',
            'byconsolewooodt_calender_closing_lable' => '0',
            'byconsolewooodt_calender_pick_notallowed_lable' => '0',
            'byconsolewooodt_time_picker_blank_error' => '0',
            'byconsolewooodt_time_slot_charges_label' => '0',
            'byconsolewooodt_chekout_page_time_lebel' => '0',
            'byconsolewooodt_orders_pick_up' => '0',
            'byconsolewooodt_day_wise_charges_label' => '0',
            'byconsolewooodt_special_dates_charges_label' => '0',
            'byconsolewooodt_chekout_page_delivery_tip_label' => '0',



            'byconsolewooodt_admin_national_holiday_date' => '0',
            'byconsolewooodt_admin_closing_sunday' => '0',
            'byconsolewooodt_admin_closing_monday' => '0',
            'byconsolewooodt_admin_closing_tuesday' => '0',
            'byconsolewooodt_admin_closing_wednessday' => '0',
            'byconsolewooodt_admin_closing_thursday' => '0',
            'byconsolewooodt_admin_closing_friday' => '0',
            'byconsolewooodt_admin_closing_saturday' => '0',
            'byconsolewooodt_admin_holiday_date' => '0',
            'byconsolewooodt_admin_special_open_date' => '0',
            'byconsolewooodt_pickup_location_auto_select_and_hide' => '0',
            'byconsolewooodt_delivery_location_auto_select_and_hide' => '0',
            'byconsolewooodt_hide_shipping_fields_when_pickup' => '0',
            'byconsolewooodt_locations_alphabetical_order' => "0",
            'byconsolewooodt_as_early_as_possible_and_exact_time_text_lable_enable_mode' => '0',
            'delivery_per_custom_slot' => '0',

            'byconsolewooodt_day_wise_charges' => '0',

            'byconsolewooodt_calender_color' => '0',
            'byconsolewooodt_calender_text_color' => '0',
            'byconsolewooodt_calender_arrow_color' => '0',
            'byconsolewooodt_calender_current_date_color' => '0',
            'byconsolewooodt_hide_billing_fields_when_pickup' => '0',
            'byconsolewooodt_hide_billing_fields_when_delivery' => '0',
            "byconsolewooodt_checkout_page_tax_include_with_shipping_cost" => '0',
            "byconsolewooodt_checkout_page_next_prev_button_manage" => '0',
            "byconsolewooodt_delivery_tips_amount" => '0',
            'byconsolewooodt_special_dates_charges' => '0',

            "byconsolewooodt_same_day_pickup_order_placing_cutout_time" => '0',
            "byconsolewooodt_next_day_pickup_order_placing_cutout_time" => '0',
            "byconsolewooodt_same_day_delivery_order_placing_cutout_time" => '0',
            "byconsolewooodt_next_day_delivery_order_placing_cutout_time" => '0',

            'hide_delivery_tips' => '0',
            'byconsolewooodt_as_early_as_possible_lable_text' => '0',
            'byconsolewooodt_exact_time_lable_text' => '0',
            'select_delivery_tips_text' => '0',


        );
    }


}
?>