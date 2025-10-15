<?php

// Configuration
$cookiePost   = 'POST';
$cookieExpire = 3; // seconds
$now          = time(); // Current timestamp

// Redirect if not a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../../v2/", true, 302);
    exit;
}

///require_once '../../conn.php';


// 🔒 Catch fatal errors and redirect
register_shutdown_function(function () use ($ERROR_location) {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR])) {
        setcookie('POST', 'FATAL-ERROR', time() + 3, '/');
        header("Location: " . $ERROR_location, true, 302);
        exit;
    }
});


$bm_userid = $_SESSION['userid'];

/////////////////////////////////////////////////////////////////////