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
$po_number     = $_POST['po_number'];

$po_ref     = $_POST['po_ref'];

$po_status     = $_POST['po_status'];


$remarks      = trim($_POST['remarks']);
$created_by   = $bm_userid; // Assuming this is already defined

// Prepare SQL

 $sql = "UPDATE `bm_vinvoice_po`
             SET 
                `po_number`   = '$po_number',
                `po_ref`      = '$po_ref',
                `po_remarks`  = '$remarks',
               
                `po_status`   = '$po_status'
                
             WHERE `invoice_id` = $id";





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
