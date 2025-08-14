

<?php

//echo $page;



switch ($page) {
	case 'list':
		include 'userlist.php';
		break;

	case 'new':
		include 'new_form.php';
		break;

	case 'select':
		include 'select.php';
		break;

	
	default:
		
		break;
}




?>