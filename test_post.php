
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmsystem_v2";

/*
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmsystem_v2";

$servername = "localhost";
$username = "ivjmxzmy_122110"; 	

$password = "wQ_*wNt.a3E{g@9";


$dbname = "ivjmxzmy_bmsystem_v2";

*/

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data safely
$user_id = $_POST['user_id'];
$new_username = $_POST['new_username'];

if ($user_id && $new_username) {
    // Prepare and bind to prevent SQL injection
    $stmt = $conn->prepare("UPDATE bm_user SET fullname = ? WHERE userid = ?");
    $stmt->bind_param("ss", $new_username, $user_id);

    if ($stmt->execute()) {
        echo "✅ Username updated successfully.";
    } else {
        echo "❌ Error updating username: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "⚠️ Missing user ID or new username.";
}

$conn->close();
?>
