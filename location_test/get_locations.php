
<?php
/*
$conn = new mysqli("localhost", "root", "", "location_db");
$result = $conn->query("SELECT * FROM locations ORDER BY timestamp DESC");
*/

require '../conn.php';


$sql = "SELECT * FROM locations ORDER BY timestamp DESC";

$result = mysqli_query($conn, $sql );

$locations = [];



	
while ($row = mysqli_fetch_assoc($result)) {

	
///$di_item_name  = $row['item_name'];	

  $locations[] = $row;

}


/*
while ($row = $result->fetch_assoc()) {
  $locations[] = $row;
}

 * 
 */
 
print_r( $locations);
 
 
echo json_encode($locations);
?>

asdddddddddddddddddddddddddddddddd