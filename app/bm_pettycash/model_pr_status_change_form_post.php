
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

$status   = isset($_POST['status']) ? trim($_POST['status']) : '';

$notes   = isset($_POST['notes']) ? trim($_POST['notes']) : '';	

$paid_date  = isset($_POST['paid_date']) ? trim($_POST['paid_date']) : '';	
	
	
if($status == "Paid"){
	
	
$sql = "UPDATE `bm_prequest` 
			SET 
			 
			  `pr_status`= '$status',
			  
			  `paid_notes`= '$notes',
			  
			   `paid_by`= $bm_userid,
			   
			    `paid_date`= $paid_date
					
			   WHERE `pr_id` = $id";	


	
	
}	else{
	

$sql = "UPDATE `bm_prequest` 
			SET 
			 
			  `pr_status`= '$status',
			  
			  `paid_notes`= '$notes'
					
			   WHERE `pr_id` = $id";	
	
	
	
}
	
	
	
/*
			  ,`pr_link`='[value-8]'
			  ,`prepared_by`='[value-9]'
			  ,`checked_by`='[value-10]'
			  ,`update_by`='[value-12]'
			  ,`update_at`='[value-14]'

 
 */	
	

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
