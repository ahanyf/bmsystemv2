<?php

$ERROR_location = "../../v2/";
 //header("Location: ../../v2/", true, 302);

require '../post_.php';
require_once '../conn.php';


// Configuration
$cookieName   = 'password_incorrect';
$cookieExpire = 3; // seconds
$now          = time(); // Current timestamp

// Handle form submission

	
	
    require_once '../conn.php';

    // Collect and sanitize inputs
    $bm_mobile = mysqli_real_escape_string($conn, trim($_POST['bm_mobile']));
    $bm_pass   = mysqli_real_escape_string($conn, trim($_POST['bm_pass']));

//$bm_mobile = '7704557';

//$bm_pass = 123;

    // Prepare SQL query
     $sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`, `notes`, `bm_password`, `userphoto`, `bm_usertype` 
            FROM `bm_user` 
            WHERE `mobile` = '$bm_mobile' AND `bm_password` = '$bm_pass' AND `status` = 1";

    $result = mysqli_query($conn, $sql);
	
	
	
	
	

    if ($result && mysqli_num_rows($result) > 0) {
    	
        $row = mysqli_fetch_assoc($result);

        if ((int)$row["userid"] > 0) {
        	
            // Set session variables
             
            $_SESSION['bmsession_id']  = time();
            $_SESSION['userid']        = $row["userid"];
            $_SESSION['username']      = $row["fullname"];
            $_SESSION['userphoto']     = $row["userphoto"];
            $_SESSION['usermobile']    = $row["mobile"];
            $_SESSION['usertype']      = $row["bm_usertype"];
            $_SESSION['userworkshite'] = $row["workshite"];
			
			
			$userid = $row["userid"];
			
		//	$_SESSION['permission'] = [];
			
			$sql_permission = "SELECT `permision` FROM `bm_user_access` WHERE userid = $userid";
			
			$result_p = mysqli_query($conn, $sql_permission );
			
			while ($row_p = mysqli_fetch_assoc($result_p)) {
    	
   				$_SESSION['permission'][] = $row_p['permision'];
			}
			

            session_write_close();
			
			
				if ($bm_mobile === $bm_pass) {
					    // Set cookie for 1 hour
					    setcookie('password', 'need_to_change', time() + 3600, '/');
					} else {
					    // Clear cookie by setting expiration in the past
					    setcookie('password', '', time() - 3600, '/');
					}
			

		//		echo 'login ok';
            // Clear error cookie
            setcookie($cookieName, 'pass_correct', $now + $cookieExpire, '/');

           header("Location: ../../v2/", true, 302);
            exit;
        }
    }

    // If login fails
    $cookieValue = '<span style="color: red;">Password is not Correct</span>';
    setcookie($cookieName, $cookieValue, $now + $cookieExpire, '/');

    header("Location: ../../v2/", true, 302);
    exit;


?>
