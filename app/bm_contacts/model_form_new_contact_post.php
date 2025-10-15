<?php
require_once '../../session_.php';

$uri = $_POST['uri'];

//$ERROR_location = "../../../v2/?app=users&page=select&id=".$userid;


$ERROR_location =  $uri;




require '../../post_.php';
require_once '../../conn.php';



// Helper function to sanitize input
function sanitize($data) {
    return htmlspecialchars(trim($data));
}


// Sanitize and assign variables
//`full_name`, `phone_number`, `address`,

$full_name       = sanitize($_POST['full_name']);

$phone_number  = sanitize($_POST['phone_number']);

$address = sanitize($_POST['address']);


$is_active      = 1;

// Optional static or dynamic values


             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system



$sql = "INSERT INTO `bm_contacts` (`full_name`, `phone_number`, `address`, `is_active`) 
        VALUES ('$full_name', '$phone_number', '$address', 1)";







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
