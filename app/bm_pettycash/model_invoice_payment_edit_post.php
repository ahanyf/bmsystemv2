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
$invoice_id     = intval($_POST['id']);

$amount         = floatval($_POST['payment_amount']);
$payment_date   = $_POST['payment_date'];
$method         = trim($_POST['payment_method']);
$payer_name     = trim($_POST['payer_name']);
$remarks        = trim($_POST['remarks']);
$created_by     = $bm_userid;
	
	
	
$invoice_id   = intval($_POST['id']);
$amount       = floatval($_POST['payment_amount']);
$payment_date = $_POST['payment_date'];
$method       = trim($_POST['payment_method']);
$payer_name   = trim($_POST['payer_name']);
$remarks      = trim($_POST['remarks']);
$created_by   = $bm_userid; // Assuming this is already defined

// Prepare SQL
$sql = "UPDATE bm_vinvoice_payment SET
            payer_name = '$payer_name',
            payment_method = '$method',
            paid_amount = $amount,
            paid_date = '$payment_date',
            payment_by = $created_by,
            remarks = '$remarks'
        WHERE invoice_id = $invoice_id";





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
