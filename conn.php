
<?php
$file_[] = 'conn.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmsystem_v2";


/*
$servername = "localhost";
$username = "bmsysliv_root"; 	
$password = "GO2B4@mb[Go}";
$dbname = "bmsysliv_bmsystem_v2";

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