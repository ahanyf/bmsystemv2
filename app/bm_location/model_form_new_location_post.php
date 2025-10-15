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
$location_name       = sanitize($_POST['location_name']);

$location_notes  = sanitize($_POST['location_notes']);

$location_type = sanitize($_POST['location_type']);

$island   = sanitize($_POST['island']);

$is_active      = 1;

// Optional static or dynamic values


             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system





 $sql = "INSERT INTO `bm_locations` (`location_name`, `location_type`, `location_notes`, `island`, `is_active`)
						
						VALUES ('$location_name', '$location_type', '$location_notes', '$island', 1)";





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
