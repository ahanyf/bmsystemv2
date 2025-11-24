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
    $payto = intval($_POST['payto']);

    $remarks = trim($_POST['remarks']);

	$pr_year = (int) date('Y');
	
    $today = date('Y-m-d');

//// $bm_userid;            // current user ID or system


$sql = "INSERT INTO `bm_prequest`(

  `pr_year`, 
  `pr_date`, 
  
  `payto`, 
  `remarks`, 
 
  
  `prepared_by`, 
 
  `entry_by`
 

) VALUES (
 
  $pr_year,
  '$today',
  $payto,
  '$remarks',
 
 
  $bm_userid,

 $bm_userid


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
