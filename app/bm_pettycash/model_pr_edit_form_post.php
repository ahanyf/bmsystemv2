
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
   /*
   $id = $_POST['id'];
   
    $payto = intval($_POST['payto']);

    $remarks = trim($_POST['remarks']);

	$pr_year = (int) date('Y');
	
    $today = date('Y-m-d');
	*/
$id       = isset($_POST['id']) ? intval($_POST['id']) : 0;
$payto    = isset($_POST['payto']) ? intval($_POST['payto']) : 0;
$remarks  = isset($_POST['remarks']) ? trim($_POST['remarks']) : '';
$status   = isset($_POST['status']) ? trim($_POST['status']) : '';
$pr_date  = isset($_POST['pr_date']) ? $_POST['pr_date'] : '';
$pr_year  = isset($_POST['pr_year']) ? intval($_POST['pr_year']) : 0;
$pr_ref   = isset($_POST['pr_ref']) ? trim($_POST['pr_ref']) : '';	
	
	
	
/*
			  ,`pr_link`='[value-8]'
			  ,`prepared_by`='[value-9]'
			  ,`checked_by`='[value-10]'
			  ,`update_by`='[value-12]'
			  ,`update_at`='[value-14]'

 
 */	
	

//// $bm_userid;            // current user ID or system


$sql = "UPDATE `bm_prequest` 
			SET 
			  `pr_year`= $pr_year 
			  ,`pr_date`='$pr_date'
			  ,`pr_ref`= '$pr_ref'
			  ,`payto`= $payto
			  ,`remarks`= '$remarks'
			  ,`pr_status`= '$status'

			   WHERE `pr_id` = $id";



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
