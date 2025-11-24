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

$vendor_name       = sanitize($_POST['vendor_name']);

$vendor_tin  = sanitize($_POST['vendor_tin']);

$vendor_contact = sanitize($_POST['vendor_contact']);


$is_active      = 1;

// Optional static or dynamic values


             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system






 $sql = "INSERT INTO `vendor`( `vendor_name`, `vendor_tin`, `vendor_contact`,   `created_by`)

		VALUES ( '$vendor_name' ,  '$vendor_tin' ,  '$vendor_contact' , $bm_userid ) ";


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
