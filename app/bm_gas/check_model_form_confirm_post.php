<?php
require_once '../../session_.php';
$uri = $_POST['uri'];

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;

$ERROR_location =  $uri;

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;



require '../../post_.php';
require_once '../../conn.php';



// Helper function to sanitize input
function sanitize($data) {
    return htmlspecialchars(trim($data));
}


// Sanitize and assign variables
$registry_id       = sanitize($_POST['registry_id']);


$uri = "../../../v2/?app=gas&page=registryid&id=".$registry_id;

$remarks = 'NEW Regisration';

       // null unless ended


$sql = "UPDATE `gas_registry` SET `status` = 1, `remarks` = '$remarks' WHERE `registry_id` = $registry_id";
	

// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	// Redirect to user list
 header("Location: ".$uri , true, 302);

} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ".$ERROR_location, true, 302);
}


exit;
