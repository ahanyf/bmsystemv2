<?php
session_start();



if(isset($_SESSION['bm_session_id'])){
	
	include 'app/app.php';
	
	
}else{
	include 'login/login.php';
}

;


?>