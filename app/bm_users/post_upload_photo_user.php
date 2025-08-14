<?php

$uri = $_POST['uri'];
$ERROR_location = $uri;

require '../../post_.php';
require_once '../../conn.php';

// Sanitize inputs
$userid   = mysqli_real_escape_string($conn, trim($_POST['userid']));
$fullname = mysqli_real_escape_string($conn, trim($_POST['fullname']));

// Handle image upload
$uploadDir = '../../userphoto/';
$imageType = strtolower(pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION));

// Validate image type
$allowedTypes = ['jpg', 'jpeg', 'png'];
if (!in_array($imageType, $allowedTypes)) {
    setcookie('POST', 'NOT-OK', time() + 3, '/');
    header("Location: $ERROR_location", true, 302);
    exit;
}

// Generate unique filename using timestamp
$timestamp   = time();
$imageName   = "user_" . $timestamp . "." . $imageType;
$targetFile  = $uploadDir . $imageName;

// Move and update
if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $targetFile)) {
    $sql = "
        UPDATE `bm_user`
        SET 
            `userphoto`    = '$imageName'
           
        WHERE `userid` = '$userid'
    ";
 
 //////////////////////////////////////   
	
	///////////////////////////////

    if (mysqli_query($conn, $sql)) {
        setcookie('POST', 'OK', time() + 3, '/');
       // header("Location: ../../../v2/?app=users&page=list", true, 302);
		 header("Location: ".$uri, true, 302);
		
    } else {
        setcookie('POST', 'NOT-OK', time() + 3, '/');
      //  header("Location: $ERROR_location", true, 302);
      header("Location: ".$uri, true, 302);
    }
	
} else {
	
    setcookie('POST', 'NOT-OK', time() + 3, '/');
   // header("Location: $ERROR_location", true, 302);
   header("Location: ".$uri, true, 302);
}

exit;
