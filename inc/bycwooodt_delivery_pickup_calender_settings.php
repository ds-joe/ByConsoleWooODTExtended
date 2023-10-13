<?php function byconsolewooodt_admin_delivery_pickup_calender_settings_form(){ ?>
	
			<!--h1>ByConsole Special Dates Charges Settings</h1-->
            <form method="post" class="form_byconsolewooodt_ordered_calender_settings" action="options.php">
				<?php
					settings_fields("ordered_calender_setting");
					do_settings_sections("byconsolewooodt_admin_ordered_calender_settings_options");      
					//submit_button(); 
				?> 
             </form>
			<?php //error_reporting(0); ?>

			

			<script>  

      

     jQuery(document).ready(function() {  

      var date = new Date();  

      var d = date.getDate();  

      var m = date.getMonth();  

      var y = date.getFullYear();  

      

      var calendar = jQuery('#byc_wooodt_calendar').fullCalendar({  

       editable: false,  

       header: {  

        left: 'prev,next today',

		//left: '',  

        center: 'title',  

        //right: 'month,agendaWeek,agendaDay'

		right: ''

       },  

      

       events: <?php include('bycwooodt_get_all_orders.php');?>, 

	   eventRender: function(event, element) {

        	element.attr('title', event.description);

    	}

    

       

     

      

         

      });  

        

     });  

      

    </script> 

    <div class="byc_main_container">
		<div class="byc_calendar_order_type_container">
    		<div class="byc_delivery_pickup_container"><span class="byc_delivery_color"></span>Delivery</div>
    		<div class="byc_delivery_pickup_container"><span class="byc_pickup_color"></span>Pickup</div>
        </div>
        <div class="byc_calendar_filter_container">
        <form name="frm" method="post" action="">
        	<div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_select_all_val" id="byc_calendar_filter_select_all_val" class="byc_calendar_filter_val" value="select_all_order_status" <?php if(!empty($_POST['byc_calendar_filter_select_all_val'])) { ?> checked="checked" <?php } ?>/><p class="byc_select_unselect_val"><?php if(!empty($_POST['byc_calendar_filter_select_all_val'])) { ?>Unselect all<?php } else {?>Select all <?php } ?></p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-pending" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-pending',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php }} ?> /><p>Pending</p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-processing" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-processing',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php } }?>/><p>Processing</p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-on-hold" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-on-hold',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php }} ?>/><p>On Hold</p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-completed" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-completed',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php }} ?>/><p>Completed</p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-cancelled" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-cancelled',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php } }?>/><p>Cancelled</p>
            </div>
            <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-refunded" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-refunded',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php } }?>/><p>Refunded</p>
            </div>
             <div class="byc_calendar_filter">
            	<input type="checkbox" name="byc_calendar_filter_val[]" id="byc_calendar_filter_val" class="byc_calendar_filter_val" value="wc-failed" <?php if(!empty($_POST['byc_calendar_filter_val'])){if(in_array('wc-failed',$_POST['byc_calendar_filter_val'])){?> checked="checked" <?php }} ?>/><p>Failed</p>
            </div>
            
            <div class="byc_calendar_filter2">
            	<select name="byc_calendar_order_type_search" id="byc_calendar_order_type_search">
                	<option value="" <?php if(empty($_POST['byc_calendar_order_type_search'])) { ?> selected="selected" <?php } ?>>Both</option>
                	<option value="take_away" <?php if($_POST['byc_calendar_order_type_search'] == 'take_away') {?> selected="selected"<?php }?>>Pickup</option>                 
                	<option value="levering" <?php if($_POST['byc_calendar_order_type_search'] == 'levering') { ?> selected="selected" <?php } ?>>Delivery</option>                                        
                </select>
            </div>
            
            
             <div class="byc_calendar_filter2">
            	<input type="submit" name="byc_calender_order_status_filter_submit" id="byc_calender_order_status_filter_submit" value="Search" />
            </div>
            </form>
        </div>

    </div>

	<div id='byc_wooodt_calendar'></div>  

	

	



<?php 	



}



