<?php



if($page == 'id'){
$sql_delivary_id = "SELECT * FROM `bm_delivery` WHERE `delivery_id` = $id";	
}


if(!empty($sql_delivary_id)){	
$result = mysqli_query($conn, $sql_delivary_id );
	
while ($row = mysqli_fetch_assoc($result)) {
 $delivery_id        = $row['delivery_id'];	
 $delivery_id_[] = $delivery_id;	
 $location[$delivery_id]        = $row['location_id'];
 

$delivery_contact[$delivery_id]  = $row['contact_id'];

$delivery_user_id[$delivery_id]  = $row['user_id'];

$delivery_status[$delivery_id]  = $row['delivery_status'];
$delivery_date[$delivery_id]  = $row['delivery_date'];
$delivery_done_time[$delivery_id]  = $row['delivery_done_time'];
$delivery_done_by[$delivery_id]  = $row['delivery_done_by'];
$delivery_done_type[$delivery_id]  = $row['delivery_done_type'];

$delivery_sent_time[$delivery_id]  = $row['delivery_sent_time'];
$delivery_type[$delivery_id]  = $row['delivery_type'];
$delivery_priority[$delivery_id]  = $row['delivery_priority'];
$delivery_started_by[$delivery_id]  = $row['delivery_started_by'];
$delivery_started_time[$delivery_id]  = $row['delivery_started_time'];
$created_time[$delivery_id]  = $row['created_time'];
$updated_time[$delivery_id]  = $row['updated_time'];
$is_active[$delivery_id]  = $row['is_active'];
 
 
 
 
} //////
}

///////////////////////////////////////////////////////////////////////////////////
if($page == 'id'){
$sql_d_item = "SELECT * FROM `bm_delivery_items` WHERE `delivery_id` = $id";
}

if(!empty($sql_d_item)){	
$result = mysqli_query($conn, $sql_d_item );
while ($row = mysqli_fetch_assoc($result)) {

$d_item_id  = $row['d_item_id'];	
	
$d_delivery_id  = $row['delivery_id'];	

$di_id_[$d_delivery_id][] = $d_item_id;

$di_item_qty[$d_item_id ]  = $row['item_qty'];	
$di_item_name[$d_item_id ]  = $row['item_name'];	
$di_added_time[$d_item_id ]  = $row['added_time'];	
$di_added_by[$d_item_id ]  = $row['added_by'];	
$di_update_time[$d_item_id ]  = $row['update_time'];	
$di_update_by[$d_item_id ]  = $row['update_by'];	
$di_picked_by[$d_item_id ]  = $row['picked_by'];	
$di_picked_time[$d_item_id ]  = $row['picked_time'];	
$di_delivery_status[$d_item_id ]  = $row['delivery_status'];	
$di_status_by[$d_item_id ]  = $row['status_by'];	
$di_status_time[$d_item_id ]  = $row['status_time'];	


}
}
////////////////////////////////////////////////////////////////////////////////////


$sql_location = "SELECT * FROM bm_locations WHERE is_active = 1";

$result = mysqli_query($conn, $sql_location );
while ($row = mysqli_fetch_assoc($result)) {
	
 $location_id        = $row['location_id'];
	
 $location_[] = $location_id;
 	
 $location_name[$location_id]        = $row['location_name'];	


}


////////////////////////////////////////////////////////////////////////


$sql_contacts = "SELECT * FROM bm_contacts WHERE is_active = 1";

$result = mysqli_query($conn, $sql_contacts );

while ($row = mysqli_fetch_assoc($result)) {
	
 $contact_id        = $row['contact_id'];
 
  $contact_name[$contact_id]        = $row['full_name'];
    $phone_number[$contact_id]        = $row['phone_number'];

 $contact_[] =  $contact_id;


}

////////////////////////////////////////////////////












?>
