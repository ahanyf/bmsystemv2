<?php
session_start();

// Configuration
$cookieName   = 'password_incorrect';
$cookieExpire = 10; // seconds
$now          = time(); // Current timestamp

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../conn.php';

    // Collect and sanitize inputs
    $bm_mobile = mysqli_real_escape_string($conn, trim($_POST['bm_mobile']));
    $bm_pass   = mysqli_real_escape_string($conn, trim($_POST['bm_pass']));

//$bm_mobile = '7704557';

//$bm_pass = 123;

    // Prepare SQL query
   echo  $sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `workshite`, `notes`, `bm_password`, `userphoto`, `bm_usertype` 
            FROM `bm_user` 
            WHERE `mobile` = '$bm_mobile' AND `bm_password` = '$bm_pass' AND `status` = 1";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
    	
        $row = mysqli_fetch_assoc($result);

        if ((int)$row["userid"] > 0) {
        	
            // Set session variables
             
            $_SESSION['bmsession_id']  = time();
    echo    $_SESSION['userid']        = $row["userid"];
            $_SESSION['username']      = $row["fullname"];
            $_SESSION['userphoto']     = $row["userphoto"];
            $_SESSION['usermobile']    = $row["mobile"];
            $_SESSION['usertype']      = $row["bm_usertype"];
            $_SESSION['userworkshite'] = $row["workshite"];

            session_write_close();

		//		echo 'login ok';
            // Clear error cookie
            setcookie($cookieName, '', $now + $cookieExpire, '/');

           header("Location: ../../v2/", true, 302);
            exit;
        }
    }

    // If login fails
    $cookieValue = '<span style="color: red;">Password is not Correct</span>';
    setcookie($cookieName, $cookieValue, $now + $cookieExpire, '/');

    header("Location: ../../v2/", true, 302);
    exit;
} else {
    // Invalid request method
    header("Location: ../../v2/", true, 302);
    exit;
}
?>
