<?php
$file_[] = 'auth.php';


// Set timeout period in seconds (e.g., 600 seconds = 10 minutes)
$timeout_duration = 1800;  // days

// Check if the session variable exists
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    // Last request was more than timeout_duration ago
    

    session_unset();     // Unset $_SESSION variable for the runtime
    session_destroy();   // Destroy session data in storage
    
       echo "<script>window.location.href='../v1/';</script>";
    exit;
    
    
}


// Update last activity time stamp
$_SESSION['LAST_ACTIVITY'] = time();



?>