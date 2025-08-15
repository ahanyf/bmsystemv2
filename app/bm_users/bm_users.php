

<?php

/// dont chane any Value here---///
$user_permission_[] = 'user_control';
$user_permission_[] = 'user_control_two';

$permision_[] = '';

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
		
		include 'model_edit_user.php';
		include 'model_upload_photo.php';
		include 'model_user_access.php';
		include 'model_user_access_remove.php';
		include 'model_user_reset_password.php';
		
		break;

	
	default:
		
		break;
}




?>