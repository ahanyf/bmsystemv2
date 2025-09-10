<?php
$file_[] = 'bm_location_sql.php';




if($page == 'list'){
	$sql_location = "SELECT * FROM bm_locations";	
}elseif($page == 'id'){
	$sql_location = "SELECT * FROM bm_locations where location_id = $id";
}



if(!empty($sql_location)){
	
$result = mysqli_query($conn, $sql_location );
while ($row = mysqli_fetch_assoc($result)) {
	
 $location_id        = $row['location_id'];
	
 $location_[] = $location_id;
 	
 $location_name[$location_id]        = $row['location_name'];	
 $location_type[$location_id]        = $row['location_type'];	
  $location_island[$location_id]        = $row['island'];	
   $location_photo[$location_id]        = $row['location_photo'];	
   $location_notes[$location_id]        = $row['location_notes'];	
  $location_active[$location_id]        = $row['is_active'];	
	 $location_maplink[$location_id]        = $row['location_maplink'];

	 $location_created_at[$location_id]        = $row['created_at'];
	  $location_created_at[$location_id]        = $row['created_at'];
	  
}

}

//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////




?>

