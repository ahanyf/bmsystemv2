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

$id = isset($_POST['vendor_id']) ? sanitize($_POST['vendor_id']) : '-1';



$account_name       = sanitize($_POST['account_name']);

$account_number  = sanitize($_POST['account_number']);

$account_bank = sanitize($_POST['account_bank']);

$id = $_POST['id'];

// Optional static or dynamic values

$account_status = '1';

             // fixed or from form
$added_by          = $bm_userid;            // current user ID or system



$sql = "INSERT INTO `bank_accounts`( `account_name`, `account_number`, `account_bank`, `added_by`) 

						VALUES ( '$account_name', '$account_number', '$account_bank',  $added_by ) ";





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
