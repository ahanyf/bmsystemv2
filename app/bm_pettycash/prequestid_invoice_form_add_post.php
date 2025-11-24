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



	
	
	// Sanitize and validate input
$id     = intval($_POST['id']);


	
	
	
$invoice_id   = intval($_POST['invoice_id']);

$created_by   = $bm_userid; // Assuming this is already defined

// Prepare SQL
 $sql = "INSERT INTO `bm_prequest_invoice`( `pr_id`, `invoice_id`, `entry_by` )
 VALUES 
 ( $id , $invoice_id, $bm_userid )";





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
