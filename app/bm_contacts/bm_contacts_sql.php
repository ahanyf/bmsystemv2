
<?php



$sql_contacts = "SELECT * FROM `bm_contacts`";



$result = mysqli_query($conn, $sql_contacts);

while ($row = mysqli_fetch_assoc($result)) {
	
 $contact_id        = $row['contact_id'];
	
	 $contact_id_[] =  $contact_id;
	
	 $full_name[$contact_id]        = $row['full_name'];
	  $phone_number[$contact_id]        = $row['phone_number'];
	   $address[$contact_id]        = $row['address'];


}




?>