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



	$id = $_POST['id'];

   // Sanitize and validate inputs
    $vi_vendor_id = intval($_POST['vi_vendor_id']);
    $vi_date = $_POST['vi_date'];
    $vi_ref = trim($_POST['vi_ref']);
    $vi_gst = floatval($_POST['vi_gst']);
    $vi_total = floatval($_POST['vi_total']);
    $vi_details = trim($_POST['vi_details']);
	$vi_vendor_id = intval($_POST['vi_vendor_id']);

    $vi_costcentre = intval($_POST['vi_costcentre']);
	
	
	//$vi_year = (int) date('Y');
	
    // Optional: validate required fields
    if (!$vi_vendor_id || !$vi_date || !$vi_total) {
        die("Missing required fields.");
    }

    // Prepare SQL

    $sql = "UPDATE `bm_vinvoice` SET 
   
    								`vi_date`= ' $vi_date'
   									 ,`vi_ref`= '$vi_ref'
    							,`vi_vendor_id`= $vi_vendor_id
    							,`vi_gst`=  $vi_gst
    							,`vi_total`= $vi_total
   							 ,`vi_details`= '$vi_details'
   							 
   							 ,`vi_costcentre`= $vi_costcentre
   							 
   							 WHERE `vid`= $id";
    

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
