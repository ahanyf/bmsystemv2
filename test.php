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



$sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`, `notes`, `bm_password`, `bm_usertype` 
        FROM `bm_user`";

echo "SQL Query: " . $sql . "<br>";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "User ID: " . htmlspecialchars($row["userid"]) . "<br>";
    echo "Full Name: " . htmlspecialchars($row["fullname"]) . "<br>";
    echo "Total Rows: " . mysqli_num_rows($result) . "<br>";
} else {
    echo "No records found or query failed.";
}








