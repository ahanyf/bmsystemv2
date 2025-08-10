
<?php




	
$sql_user_llist = 'SELECT `userid`, `fullname`, `mobile`, `status`, `designation`, `workshite`,  `bm_usertype`, `userphoto`  FROM `bm_user`';	
	
	 $result = mysqli_query($conn, $sql_user_llist);
	 
	  $row = mysqli_fetch_assoc($result);
	 
	 
	$userid = $row["userid"];
	

	
	$userid_ = (array)$userid;
	
	






?>