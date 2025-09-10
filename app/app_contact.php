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
	
case 'delivary':
	include 'bm_delivary/bm_delivary.php';
	break;	
	
	
case 'gas':
	include 'bm_gas/bm_gas.php';
	break;		


case 'location':
	include 'bm_location/bm_location.php';
	break;	


case 'contacts':
	include 'bm_contacts/bm_contacts.php';
	break;	

	
	default:
		include 'bm_home/bm_home.php';
		break;
}


//// no useinclude 'bm_delivary/model_new_delivery.php';


?>
