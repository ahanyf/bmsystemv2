<?php

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

// Optional static or dynamic values

$item_qty  = sanitize($_POST['item_qty']);

$item_name  = sanitize($_POST['item_name']);

$id = $_POST['id'];
            
$user_id          = $bm_userid;            // current user ID or system
$user_time = time();


$sql = "INSERT INTO `bm_delivery_items`( `delivery_id`, `item_qty`, `item_name`, `added_by`
										) VALUES ($id, '$item_qty', '$item_name', $user_id )";






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
