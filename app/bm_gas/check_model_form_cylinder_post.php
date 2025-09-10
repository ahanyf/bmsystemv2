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
$registry_id       = sanitize($_POST['registry_id']);

$cylinder_type  = sanitize($_POST['cylinder_type']);
$cylinder_price = floatval($_POST['cylinder_price']);

$payment_type   = sanitize($_POST['payment_type']);
$is_active      = -1;

// Optional static or dynamic values
$commissing_date = $_POST['commissing_date']; // or use $_POST['commissing_date']
$end_date        = null; // or leave NULL if not ended
             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system
$ended_by        = null;          // null unless ended

 $sql = "
INSERT INTO `gas_registry_cylinder` (
    `registry_id`,
    `commissing_date`,
    `status`,
    `end_date`,
    `cylinder_price`,
    `cylinder_payment`,
    `cylinder_type`,
   
    `add_by`
) VALUES (
    $registry_id,
    '$commissing_date',
    '$is_active',
    NULL,
    '$cylinder_price',
    '$payment_type',
    '$cylinder_type',

    '$add_by'
)";


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
