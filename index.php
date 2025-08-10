<?php
session_start();



if(isset($_SESSION['bmsession_id'])){
	
	include 'get_.php';
	
	include_once  'conn.php';
	
	if(isset($_GET['app'])){
		
	include 'app/app_sql.php';
		
	}
	
	
	include 'app/app.php';
	
	
}else{
	include 'login/login.php';
}

;


?>