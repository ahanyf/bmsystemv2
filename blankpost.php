
<?php
session_start();

// Configuration
$cookiePost   = 'POST';
$cookieExpire = 3; // seconds
$now          = time(); // Current timestamp

// Redirect if not a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../v2/", true, 302);
    exit;
}

require_once '../../conn.php';

// Sanitize input
$bm_mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
$fullname  = mysqli_real_escape_string($conn, trim($_POST['fullname']));

// Prepare SQL


 $sql = "INSERT INTO `bm_user`( `fullname`, `mobile`, `status`, `designation`, `worksite`,  `bm_password`, `bm_usertype`) 
						 VALUES ('$fullname',$bm_mobile,'1','designation','1','$bm_mobile','1')";
						 


// Execute and handle result
if (mysqli_query($conn, $sql)) {
    setcookie($cookiePost, 'OK', $now + $cookieExpire, '/');
	// Redirect to user list
header("Location: ../../../v2/?app=users&page=list", true, 302);
} else {
    setcookie($cookiePost, 'NOT-OK', $now + $cookieExpire, '/');
	// Redirect to user list
header("Location: ../../../v2/?app=users&page=new", true, 302);
}

exit;


		
						 