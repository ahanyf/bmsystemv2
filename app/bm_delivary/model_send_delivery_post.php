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

$location_id = $_POST['location'];

$id = $_POST['id'];
            
$user_id          = $bm_userid;            // current user ID or system
$user_time = time();


//,`delivery_sent_time`='[value-10]' 


$sql = "UPDATE `bm_delivery` SET `delivery_status`=0 WHERE  `delivery_id`= $id";

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
