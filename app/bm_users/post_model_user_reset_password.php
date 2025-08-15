
<?php

$userid = $_POST['userid'];


$uri = $_POST['uri'];

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;


$ERROR_location =  $uri;

require '../../post_.php';
require_once '../../conn.php';


// Sanitize input
$bm_mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
$fullname  = mysqli_real_escape_string($conn, trim($_POST['fullname']));
$userid  = mysqli_real_escape_string($conn, trim($_POST['userid']));

// Prepare SQL


 
 
 $sql = "UPDATE `bm_user`
			SET 
			    
			    `bm_password`  = '$bm_mobile'
			    
			WHERE `userid` = '$userid'";









// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	// Redirect to user list
header("Location: ".$uri , true, 302);
} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ".$uri , true, 302);
}


exit;
