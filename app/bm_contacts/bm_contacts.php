<?php



echo '<h1 class="h3 mb-3">Contacts / Persons</h1>';

switch ($page) {
	
	case 'list':
		
		include 'contact_list.php';
		
		break;

	
	case 'id':
	
		include 'contact_id.php';
		
		
	//	include 'model_form_edit_location.php';
		
		break;	
		
		
		
		
	default:
		
		break;
		
}



include 'model_form_edit_contact.php';

include 'model_form_new_contact.php';




?>

