
<?php


$userid_ = [];
$fullname = [];
$mobile = [];
$worksite = [];
$photo = [];
	
if($page == 'list')	{	
$sql_user_list = 'SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`,  `bm_usertype`, `userphoto`  FROM `bm_user`';	
}

if($page == 'select')	{
 	$sql_user_list = 'SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `worksite`,  `bm_usertype`, `userphoto`  FROM `bm_user` WHERE `userid` = '.$id;	
}		


if(!empty($sql_user_list)){	
	
$result = mysqli_query($conn, $sql_user_list);	
	

while ($row = mysqli_fetch_assoc($result)) {
    	
    $userid = $row['userid'];

    $userid_[] = $userid;
    $fullname[$userid] = $row['fullname'];
    $mobile[$userid] = $row['mobile'];
    $worksite[$userid] = $row['worksite']; 
    $photo[$userid] = $row['userphoto'];
	
}

}
//////////////////////////////////////////////////////////////////////////////////////	


if($page == 'select')	{
	
	$sql =  "SELECT user_access_id, permision FROM `bm_user_access` WHERE userid = $userid";
	
	$result = mysqli_query($conn, $sql);	
	
	while ($row = mysqli_fetch_assoc($result)) {
			
		$user_access_id = $row['user_access_id'];
		
		$permision_[]  = $row['permision'];	
		
		$user_access_id_[] = $user_access_id;
		
		$user_access[$user_access_id] = $row['permision'];	
		
	}
}









?>