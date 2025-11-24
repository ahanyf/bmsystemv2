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


  
	$vi_year = (int) $_POST['vi_year'];
	
	$id = $_POST['id'];
	
	$vi_costcentre = $_POST['vi_costcentre'];
	
	
	/////////////////////////////////////////////////////////
	
	//echo $sql_count = "SELECT COUNT(`vid`) AS invoice_count FROM `bm_vinvoice` WHERE `vi_year` = $vi_year";
	
	$sql_count = "SELECT COUNT(vid) AS invoice_count FROM bm_vinvoice WHERE vi_year = $vi_year AND vi_no IS NOT NULL AND vi_no != '';";
	
	
	
	
	$result = mysqli_query($conn, $sql_count );
	$row = mysqli_fetch_assoc($result);
	 $invoice_count = $row['invoice_count'];
	
	if(empty($invoice_count)){
		$vi_count = 1;
	}else{
		$vi_count = 1+$invoice_count;
	}
	
	
	 $vi_no = $vi_count;
	////////////////////////////////////////////////




    // Prepare SQL
    $sql = "UPDATE `bm_vinvoice` SET `vi_no`='$vi_no'
    			,`vi_year`= $vi_year 
    			,`vi_costcentre` = $vi_costcentre  WHERE `vid` = $id";


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
