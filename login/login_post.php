<?php
require_once '../session_.php';
require_once '../conn.php';

// Configuration
$ERROR_location = "../../v2/";
$cookieName     = 'password_incorrect';
$cookieExpire   = 3; // seconds
$now            = time(); // Current timestamp
$cook_pass= 'pass';
$cook_user = 'user';
$cook_name = 'name';

// Collect and sanitize inputs
$bm_mobile = mysqli_real_escape_string($conn, trim($_POST['bm_mobile']));
$bm_pass   = mysqli_real_escape_string($conn, trim($_POST['bm_pass']));

// Prepare SQL query
$sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`, `notes`, `bm_password`, `userphoto`, `bm_usertype` 
        FROM `bm_user` 
        WHERE `mobile` = '$bm_mobile' AND `bm_password` = '$bm_pass' AND `status` = 1";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if ((int)$row["userid"] > 0) {
        // Set session variables
        $_SESSION['bmsession_id']  = $now;
        $_SESSION['userid']        = $row["userid"];
        $_SESSION['username']      = $row["fullname"];
        $_SESSION['userphoto']     = $row["userphoto"];
        $_SESSION['usermobile']    = $row["mobile"];
        $_SESSION['usertype']      = $row["bm_usertype"];
        $_SESSION['userworkshite'] = $row["worksite"]; // Corrected key from 'workshite' to 'worksite'

        // Load permissions
        $userid = $row["userid"];
        $_SESSION['permission'] = [];

        $sql_permission = "SELECT `permision` FROM `bm_user_access` WHERE `userid` = $userid";
        $result_p = mysqli_query($conn, $sql_permission);

        while ($row_p = mysqli_fetch_assoc($result_p)) {
            $_SESSION['permission'][] = $row_p['permision'];
        }

        session_write_close();

        // Set password change cookie if mobile equals password
        if ($bm_mobile === $bm_pass) {
            setcookie('password', 'need_to_change', $now + 3600, '/');
        } else {
            setcookie('password', '', $now - 3600, '/');
        }

        // Clear error cookie
        setcookie($cookieName, 'pass_correct', $now + $cookieExpire, '/');
		
		setcookie($cook_user, $bm_mobile, $now + 324000, '/');
		
		setcookie($cook_pass, $bm_pass, $now + 324000, '/');
		
		setcookie($cook_name, $row["fullname"] , $now + 324000, '/');
		


        header("Location: $ERROR_location", true, 302);
        exit;
    }
}

// If login fails
$cookieValue = '<span style="color: red;">Password is not Correct</span>';
setcookie($cookieName, $cookieValue, $now + $cookieExpire, '/');

header("Location: $ERROR_location", true, 302);
exit;
?>
