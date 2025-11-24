<?php





if(isset($app)){
	
		include 'bm_'.$app.'/'.'bm_'.$app.'_sql.php';
	
}else{
	include 'bm_home/bm_home_sql.php';
}






///print_r($userids_);//

$bm_userid = $_SESSION['userid'];

$userids = [$bm_userid]; // Initialize array directly

$userids_unique = array_unique($userids); // Remove duplicates

$id_list = implode(', ', $userids_unique); // Convert to comma-separated string

$sql_user = "SELECT * FROM `bm_user` WHERE `userid` IN ($id_list)";

$result = mysqli_query($conn, $sql_user);

$bm_user_[] = "";

while ($row = mysqli_fetch_assoc($result)) {
	
    $userid = $row['userid'];
	
    $bm_user_[$userid] = [
        'fullname'    => $row['fullname'],
		'mobile'    => $row['mobile'],
		'status'    => $row['status'],
		'worksite'    => $row['worksite'],
		'userphoto'    => $row['userphoto']
	  ];  
}
		

//print_r($bm_user_);

///////////////////////////////////////////////




?>

