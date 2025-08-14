<?php

$userid = $_POST['userid'];


$uri = $_POST['uri'];

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;


$ERROR_location =  $uri;

require '../../post_.php';
require_once '../../conn.php';

$userid  = mysqli_real_escape_string($conn, trim($_POST['userid']));

// Prepare SQL

$value_ = $_POST['user_access'];
 
$permissions =  $value_; //['user_control_two', 'user_control_three'];

$userid = $userid;

$ids = $value_; // e.g., [1, 5, 6, 7, 8]

$id_list = implode(',', $ids);

$sql = "DELETE FROM `bm_user_access` WHERE `user_access_id` IN ($id_list)";



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

