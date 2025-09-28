<?php


// $conn = new mysqli("localhost", "root", "", "location_db");

require '../conn.php';

$lat = $_POST['lat'];
$lon = $_POST['lon'];
$employee_id = $_POST['employee_id'];


/*
$stmt = $conn->prepare("INSERT INTO locations (employee_id, latitude, longitude) VALUES (?, ?, ?)");
$stmt->bind_param("idd", $employee_id, $lat, $lon);
$stmt->execute();
 * 
 */
 
///  echo $sql = "INSERT INTO `locations`( `employee_id`, `latitude`, `longitude` ) VALUES ('$employee_id','$lat','$lon')";
 
 $sql = "INSERT INTO `locations` (`id`, `employee_id`, `latitude`, `longitude`) VALUES (NULL, '1', '$lat', '$lon')";
 
 mysqli_query($conn, $sql );
 
?>