<?php
session_start();

// Configuration
$cookieName   = 'password_incorrect';
$message      = '';
$cookieValue  = '';
$cookieExpire = 10; // seconds

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect and sanitize inputs
    $bm_mobile = trim($_POST['bm_mobile'] );
   echo  $bm_pass   = trim($_POST['bm_pass']   );
    $now       = time();

    // Determine message and cookie value
    if ($bm_pass === '123') {
        $message     = 'Password OK. Timestamp: ' . $now;
        $cookieValue = '';
//////////////////////////////////////////////////////////////////////////////////////////		
		
		$_SESSION['bm_session_id'] = time();
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
/////////////////////////////////////////////////////////////////////////////////////////	
    } else {
        $message     = 'Password is not correct. Timestamp: ' . $now;
        $cookieValue = '<span style="color: red;">Password is not Correct</span>';
    }

    // Set the cookie (expires in 20 seconds)
    setcookie($cookieName, $cookieValue, $now + $cookieExpire, '/');

    // Use this fresh value for immediate display
    $cookieDisplay = $cookieValue;
	
////	header("location:/AdminKit-BM");
	
	///echo "<script>window.location.href='/AdminKit-BM';</script>";
	header("Location: ../../bmsystemv2/", true, 302);
    exit;
	
	
	
} else {
    // No submission: try to read from $_COOKIE
    $cookieDisplay = $_COOKIE[$cookieName];
	
///	header("location:/AdminKit-BM");
header("Location: ../bmsystemv2", true, 302);


	
///	echo "<script>window.location.href='/AdminKit-BM';</script>";
    exit;
	
}


?>


