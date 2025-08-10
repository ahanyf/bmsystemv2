<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmsystem_v2";

/*
$servername = "localhost";
$username = "dhiamazo_dhiamazo"; 	
$password = "yA@_122110#abd";
//$dbname = "dhiamazo_testdb1";
$dbname = "dhiamazo_bmsys_v1";
*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {  
  die("Connection failed: " . mysqli_connect_error());	
}else{
echo 'Connected-bm_v2';
}
//////////////////////////////////////////////////////////////



echo $sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `workshite`, `notes`, `bm_password`, 
`bm_usertype` FROM `bm_user` ";


    $result = mysqli_query($conn, $sql);

 $row = mysqli_fetch_assoc($result);


echo $row["userid"];
echo $row["fullname"];

echo mysqli_num_rows($result);





   



