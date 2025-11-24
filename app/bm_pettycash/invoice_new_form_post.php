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


   // Sanitize and validate inputs
    $vi_vendor_id = intval($_POST['vi_vendor_id']);
    $vi_date = $_POST['vi_date'];
    $vi_ref = trim($_POST['vi_ref']);
    $vi_gst = floatval($_POST['vi_gst']);
    $vi_total = floatval($_POST['vi_total']);
    $vi_details = trim($_POST['vi_details']);

	$vi_year = (int) date('Y');
	
    // Optional: validate required fields
    if (!$vi_vendor_id || !$vi_date || !$vi_total) {
        die("Missing required fields.");
    }

    // Prepare SQL
    $sql = "INSERT INTO bm_vinvoice (
                vi_vendor_id, vi_year, vi_date, vi_ref, vi_gst, vi_total, vi_details, vi_entry_by, created_at
            ) VALUES (
                $vi_vendor_id, $vi_year, '$vi_date', '$vi_ref', $vi_gst, $vi_total, '$vi_details', $bm_userid, NOW()
            )";


//// $bm_userid;            // current user ID or system





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
