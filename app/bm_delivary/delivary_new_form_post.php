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

            
$user_id          = $bm_userid;            // current user ID or system
$user_time = time();




$sql = "INSERT INTO `bm_delivery`( `location_id`, `user_id`) VALUES ( $location_id , $user_id )";





// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	
	
	
	$sql_max = "SELECT MAX(`delivery_id`) AS `latest_delivery_id` FROM `bm_delivery` WHERE `user_id` = $user_id ";
	$result = mysqli_query($conn, $sql_max );
	$row = mysqli_fetch_assoc($result);
	$latest_delivery_id       = $row['latest_delivery_id'];
	
	
	$uri = "../../../v2/?app=delivary&page=id&id=".$latest_delivery_id;
	
	
	// Redirect to user list
 header("Location: ".$uri , true, 302);

} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ".$ERROR_location, true, 302);
}


exit;
