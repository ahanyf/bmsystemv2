<?php

//echo $page;

//echo $app;




switch ($app) {
	
/////////////////////////////////////////////////////////////////////////////////////////////////////	
	case 'users':
		
		 if (!empty($_SESSION['permission']) && in_array('user_control', $_SESSION['permission'])) {
            include 'bm_users/bm_users.php';
        } else {
            echo "🚫 Access denied: You don't have permission to view this page.";
        }
        break;
	
//////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	
	default:
		include 'bm_home/bm_home.php';
		break;
}


?>
