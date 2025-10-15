<?php
require_once '../../session_.php';require_once '../../session_.php';

$ERROR_location = "../../../v2/?app=users&page=new";


require '../../post_.php';
require_once '../../conn.php';


// Helper function to sanitize input
function sanitize($data) {
    return htmlspecialchars(trim($data));
}


// Sanitize and assign variables
$location       = sanitize($_POST['location']);
$contact        = sanitize($_POST['contact']);



$is_active      = -1;

// Optional static or dynamic values
$commissing_date = $_POST['commissing_date']; // or use $_POST['commissing_date']
$end_date        = null; // or leave NULL if not ended
$use_type        = 4;             // fixed or from form
$add_by          = $bm_userid;            // current user ID or system
$ended_by        = null;          // null unless ended



// Prepare SQL
echo $sql = "
    INSERT INTO gas_registry (
        registry_id,
        location_id,
        commissing_date,
        use_type,
        status,
        end_date,
        contact_id,
      
        add_by,
        ended_by
    ) VALUES (
        NULL,
        '$location',
        '$commissing_date',
        '$use_type',
        '$is_active',
        '$end_date',
        '$contact',
      
      
        '$add_by',
        NULL
    )
";



// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	// Redirect to user list
header("Location: ../../../v2/?app=gas&page=check&location=".$location."&contact=".$contact, true, 302);
} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');	
	// Redirect to user NEW
header("Location: ../../../v2/?app=gas&page=new", true, 302);
}


exit;
