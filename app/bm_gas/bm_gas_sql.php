<?php


if(isset($_GET['location'])){
	$get_location = $_GET['location'];
}

if(isset($_GET['contact'])){
	$get_location = $_GET['contact'];
}


// $gas_coustomer_type_[] = "";
$gas_coustomer_type_[] = "Household";
$gas_coustomer_type_[] = "Cafe and Restaurant";
$gas_coustomer_type_[] = "Gov. Office and NGOs";
$gas_coustomer_type_[] = "Worksites and Temporary Locations";


$gas_coustomer_payment_[] = "Credit Customer";
$gas_coustomer_payment_[] = "Full Paid";



////////////////////////////////////////////////////////////////////////

$sql = "SELECT * FROM `gas_cylinder_type`";

$result = mysqli_query($conn, $sql);	
	
$gas_cylinder_option_value = ''; // Initialize before the loop

while ($row = mysqli_fetch_assoc($result)) {
    $cylinder_id = $row['cylinder_id'];
    $status = $row['status'];
    $cylinder_name = $row['cylinder'];

    // Grouping by status
    $cylinder_id_[$status][] = $cylinder_id;

    // Mapping ID to name
    $cylinder[$cylinder_id] = $cylinder_name;
	
    // Building option tag safely
    if($status == 1){
    $safe_name = htmlspecialchars($cylinder_name, ENT_QUOTES, 'UTF-8');
    $safe_id = htmlspecialchars($cylinder_id, ENT_QUOTES, 'UTF-8');
    $gas_cylinder_option_value .= "<option value='$safe_id'>$safe_name</option>\n";
	}
}







/////////////////////////////////////////////////////////////////////////////////////////




if (isset($_GET['location'])) {
    $get_location = (int) $_GET['location']; // Cast to integer for safety
    $sql_gas = "SELECT registry_id FROM `gas_registry` WHERE location_id = $get_location";
    $result = mysqli_query($conn, $sql_gas);
    while ($row = mysqli_fetch_assoc($result)) {
        $registry_id_0_[] = $row['registry_id'];
		$registry_id_location_[] = $row['registry_id'];
    }
}


if (isset($_GET['contact'])) {
    $get_contact = (int) $_GET['contact'];
     $sql_contact = "SELECT registry_id FROM `gas_registry` WHERE contact_id = $get_contact";
    $result = mysqli_query($conn, $sql_contact);
    while ($row = mysqli_fetch_assoc($result)) {
        $registry_id_0_[] = $row['registry_id'];
		$registry_id_contact_[] = $row['registry_id'];
    }
}





    // Also fetch status = -1 if contact is set
 $sql_status = "SELECT registry_id  FROM `gas_registry` WHERE status = -1";
     $result = mysqli_query($conn, $sql_status);
    while ($row = mysqli_fetch_assoc($result)) {
		 $registry_id_1_[] = $row['registry_id'];
		 $registry_id_0_[] = $row['registry_id'];		 
		 
    }
    

   
   
 
    
    
    

/////////////////////////////////////////////////////////////////////////////

if (!empty($registry_id_0_)) {
// Sanitize and build the IN clause
$sanitized_ids = array_map('intval', array_unique($registry_id_0_) );

$id_list = implode(',', $sanitized_ids);

  $sql_gas_registry = "SELECT * FROM `gas_registry` WHERE registry_id IN ($id_list)";

}elseif($page == 'list'){
		
	 $sql_gas_registry = "SELECT * FROM `gas_registry`";
}






//////////////////////////////////////////////////////////////////////////////////////
$registry_id_ = [];

if(!empty($sql_gas_registry)){
	

	
$result = mysqli_query($conn, $sql_gas_registry);
	
while ($row = mysqli_fetch_assoc($result)) {
	
  $registry_id        = $row['registry_id'];

$registry_id_[] = $registry_id;

$gas_location_id[$registry_id]    = $row['location_id'];

$commissing_date[$registry_id]   = $row['commissing_date'];
$use_type[$registry_id]           = $row['use_type'];
$registry_status[$registry_id]             = $row['status'];
$end_date[$registry_id]           = $row['end_date'];

$gas_contact_id[$registry_id]         = $row['contact_id'];

$gas_reg_status[$registry_id]         = $row['status'];

$remarks[$registry_id]            = $row['remarks'];
 $add_by[$registry_id]             = $row['add_by'];
$ended_by[$registry_id]           = $row['ended_by'];

}
}










/////////////////////////////////////////////////////////////////////////////////


if (!empty($registry_id_0_)) {
	
  $sql_gas_cylinder = "SELECT * FROM `gas_registry_cylinder` WHERE registry_id IN ($id_list)";
}elseif($page == 'list'){
	$sql_gas_cylinder = "SELECT * FROM `gas_registry_cylinder`";
}



if(!empty($sql_gas_cylinder)){
	$result = mysqli_query($conn, $sql_gas_cylinder);
		while ($row = mysqli_fetch_assoc($result)) {
			
		$gas_cylinder_id        = $row['gas_cylinder_id'];
			
		$registry_id        = $row['registry_id'];	
			   
				$gas_cylinder_id_[] = $gas_cylinder_id;
				
				$gas_cylinder_[$registry_id][] = $gas_cylinder_id;
			
				$cylinder_type[$gas_cylinder_id] = $row['cylinder_type'];
				$cylinder_price[$gas_cylinder_id] = $row['cylinder_price'];

				$cylinder_payment[$gas_cylinder_id] = $row['cylinder_payment'];
			   
			   $commissing_date[$gas_cylinder_id] = $row['commissing_date'];
			   $cylinder_status[$gas_cylinder_id] = $row['status'];
			   
			   
			}
} // end if Empty

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


