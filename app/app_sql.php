<?php


switch ($app) {
	case 'users':
		include 'bm_users/bm_users_sql.php';
		break;
	
	default:
	include 'bm_home/bm_home_sql.php';
		break;
}





?>

