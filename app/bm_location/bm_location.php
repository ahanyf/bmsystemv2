<?php


switch ($page) {
	
	case 'list':
		echo '<h1 class="h3 mb-3">Address / Location List</h1>';
		include 'location_list.php';
		
		break;

	
	case 'id':
		echo '<h1 class="h3 mb-3">Address / Location List</h1>';
		include 'location_id.php';
		
		
		include 'model_form_edit_location.php';
		
		break;	
		
		
		
		
	default:
		
		break;
		
}



include 'model_form_edit_location.php';

include 'model_form_new_location.php';




?>


	