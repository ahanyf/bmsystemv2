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


$id = $_POST['id'];

$costcentre_name       = sanitize($_POST['costcentre_name']);

$remarks  = sanitize($_POST['remarks']);





// Optional static or dynamic values


             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system








$sql = "UPDATE `program` SET `program_name`='$costcentre_name'
							,`program_remarks`='$remarks'
							,`updated_by`= $bm_userid 
							 WHERE `id`= $id";





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
