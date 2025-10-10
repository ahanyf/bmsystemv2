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
}else{
echo 'Connected-bm_v2';
}
//////////////////////////////////////////////////////////////



$sql = "SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`, `notes`, `bm_password`, `bm_usertype` 
        FROM `bm_user`";

echo "SQL Query: " . $sql . "<br>";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "User ID: " . htmlspecialchars($row["userid"]) . "<br>";
    echo "Full Name: " . htmlspecialchars($row["fullname"]) . "<br>";
    echo "Total Rows: " . mysqli_num_rows($result) . "<br>";
} else {
    echo "No records found or query failed.";
}







?>

<form action="test_post.php" method="POST">
    <div class="mb-3">
      <label for="user_id" class="form-label">User ID</label>
      <input type="text" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="mb-3">
      <label for="new_username" class="form-label">New Username</label>
      <input type="text" class="form-control" id="new_username" name="new_username" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Username</button>
  </form>





