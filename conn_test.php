<?php

include 'conn.php';

if (!$conn) {
    
  die("Connection failed: " . mysqli_connect_error());
		
}else{
	echo 'Connrected;';
	
}



?>