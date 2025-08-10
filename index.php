<?php
session_start();



if(isset($_SESSION['bmsession_id'])){
	
	include 'app/app.php';
	
	
}else{
	include 'login/login.php';
}

;


?>