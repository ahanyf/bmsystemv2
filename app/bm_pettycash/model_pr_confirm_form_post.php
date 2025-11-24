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
$year     = intval($_POST['year']);



 $sql_count    = "SELECT pr_year, COUNT(pr_id) AS total_records
FROM `bm_prequest`
WHERE `pr_ref` IS NOT NULL
  AND pr_year = $year 
GROUP BY pr_year";



$result = mysqli_query($conn, $sql_count);


$row = mysqli_fetch_assoc($result);



 
	
	if(empty($row['total_records'])){
		$ref = 1;
	}else{
		$count = $row['total_records'];
		$ref = $count+1;
	}





// Prepare SQL
 $sql = "UPDATE `bm_prequest` SET `pr_year`= $year,`pr_ref`='$ref' WHERE `pr_id`= $id";





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
