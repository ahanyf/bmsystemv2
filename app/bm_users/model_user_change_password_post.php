<?php
require_once '../../session_.php';

$userid = $_POST['userid'];


$uri = $_POST['uri'];

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;


$ERROR_location =  $uri;


require '../../post_.php';
require_once '../../conn.php';


// Sanitize input
echo $password_new = mysqli_real_escape_string($conn, trim($_POST['password_new']));
echo $password_again  = mysqli_real_escape_string($conn, trim($_POST['password_again']));

$userid  = mysqli_real_escape_string($conn, trim($_POST['userid']));

// Prepare SQL


if($password_new === $password_again ){
	
 
  $sql = "UPDATE `bm_user`
			SET 
			    
			    `bm_password`  = '$password_new'
			   
			WHERE `userid` = '$userid'";
			
			



}else{
	
	
	setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ".$uri , true, 302);
	
	exit;
}







// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	
	session_start();

	session_destroy();
	
	
	// Redirect to user list
header("Location: ".$uri , true, 302);
} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ".$uri , true, 302);
}


exit;
