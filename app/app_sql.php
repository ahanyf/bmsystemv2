<?php





if(isset($app)){
	
		include 'bm_'.$app.'/'.'bm_'.$app.'_sql.php';
	
}else{
	include 'bm_home/bm_home_sql.php';
}




/*

switch ($app) {
	case 'users':
		//include 'bm_users/bm_users_sql.php';
		
		include 'bm_'.$app.'/'.'bm_'.$app.'_sql.php';
		
		break;
	
	default:
	include 'bm_home/bm_home_sql.php';
		break;
}

*/



?>

