
<?php
$file_[] = 'conn.php';


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
	
///echo 'Connected-bm_v2';


}







?>