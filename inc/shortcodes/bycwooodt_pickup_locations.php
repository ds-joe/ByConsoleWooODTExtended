<?php






add_shortcode('WooODT_Extended_pickup_points','function_WooODT_Extended_pickup_points');	













function function_WooODT_Extended_pickup_points( $atts, $content = null ){






	$byc_pickup_locations=$get_byc_wooodt_data['byconsolewooodt_pickup_location'];






		//print_r($byc_pickup_locations);






		






		






?>






<table  class="location_listing_cell_padding" cellpadding="5px" cellspacing="5px" align="center" width="100%">






<tr class="listing_header">






<th>Location</th>






<th>Min Cart Price</th>






<?php






if($atts["show_email"]=='YES')






{ ?>






<th>Location email</th>













<?php }






if($atts["show_weekdays"]=='YES') { ?>






<th>Sunday</th>






<th>Monday</th>






<th>Tuesday</th>






<th>Wednesday</th>






<th>Thursday</th>






<th>Friday</th>






<th>Saturday</th>






<?php } ?>



























</tr> 













<?php













$count=1;













//$a= ksort($byc_pickup_locations[location]);	






//print_r($byc_pickup_locations);






//$locatio_array_val = array();













foreach($byc_pickup_locations as $key => $value)






{






	$location_array_val[] = $value["location"].'_#_'.$key;






}













sort($location_array_val);




















$count_i = 1;






$ordered_array=array();






foreach($location_array_val as $location_array_single_key => $location_array_single_value)






{






	//echo $count_i.')&nbsp;&nbsp;'.$location_array_single_value;






	//echo '<br/>';






	






	$locatin_id=explode('_#_',$location_array_single_value);






	$locatin_id=$locatin_id[1];






	array_push($ordered_array,$locatin_id);






	






	






$count_i++;	






}




















//reordering the complete array













$new_ordered_array=array();






foreach($ordered_array as $ordered_array_key){






	






foreach($byc_pickup_locations as $key=>$val){






	






	if($key==$ordered_array_key)






	{






		array_push($new_ordered_array,$byc_pickup_locations[$key]);






		}






	






	}













}






if($atts["sort_by_alphabetical"]=='YES')






{ $prepared_pickup_location_array=$new_ordered_array;






}






else{













$prepared_pickup_location_array=$byc_pickup_locations;	






	}






		//foreach($byc_pickup_locations as $key => $value)






		foreach($prepared_pickup_location_array as $key => $value)






		{






	






			if($count%2==0){






				$class='even';






				}else{






					$class='odd';






					}






			






			//print_r($value);






			echo '<tr  class="'.$class.'">';






			foreach($value as $index => $val)






		{






		













if($index == "location")






	{		  






	






		echo '<td>';






		






		print_r($val);






		echo '</td>';






	}






	






	






	













if($index == "min_cart_value")






	{		  






		echo '<td>';






		






		print_r($val);






		echo '</td>';






	}



























if($atts["show_email"]=='YES')






{	






	if($index == "email_id_on_each_location")






	{		  






		echo '<td>';






		






		print_r($val);






		echo '</td>';






	}






}




















if($atts["show_weekdays"]=='YES') {			






     if($index == "sun")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td ><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val[start_time].' - '.$val[break_end_time].' </br> '.$val[break_end_time].' - '.$val[end_time]; }






		else {






			if($value["start_time"]!="" || $value["end_time"]!="" ){






			echo $value["start_time"].' - '.$value["end_time"];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td ><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






						






    if($index == "mon")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value["start_time"]!="" || $value["end_time"]!="" ){






			echo $value["start_time"].' - '.$value["end_time"];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






			






	if($index == "tue")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value[start_time]!="" || $value[end_time]!="" ){






			echo $value[start_time].' - '.$value[end_time];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






			






	if($index == "wed")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value[start_time]!="" || $value[end_time]!="" ){






			echo $value[start_time].' - '.$value[end_time];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






			






	if($index == "thu")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value[start_time]!="" || $value[end_time]!="" ){






			echo $value[start_time].' - '.$value[end_time];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






			






	if($index == "fri")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value[start_time]!="" || $value[end_time]!="" ){






			echo $value[start_time].' - '.$value[end_time];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 






			






	if($index == "sat")






		{






			






			 if (array_key_exists("service",$val))






  { ?>






        <td><?php if($val["start_time"]!="" || $val["end_time"]!="" ){






		echo $val["start_time"].' - '.$val["break_end_time"].' </br> '.$val["break_end_time"].' - '.$val["end_time"]; }






		else {






			if($value[start_time]!="" || $value[end_time]!="" ){






			echo $value[start_time].' - '.$value[end_time];






			}






			else{






				echo "Service Time Not Available";






				}






			}






		?></td>






  <?php }






else






  				{ ?>






 					<td ><?php echo '<span style="color:red">CLOSED</span>'; ?> </td>






				<?php  } 






			






            






           






			} 













}






	






		 






			 






			 }






		 






 






        













			 echo '</tr>';






		$count++;






		}






}













?>