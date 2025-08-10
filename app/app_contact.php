<?php

//echo $page;

//echo $app;




switch ($app) {
	case 'users':
		include 'bm_users/bm_users.php';
		break;
	
	default:
		include 'bm_home/bm_home.php';
		break;
}


?>
