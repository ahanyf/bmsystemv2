<?php


switch ($page) {
	
	case 'list':
		echo '<h1 class="h3 mb-3">Gas Registry</h1>';
		include 'new_regist_alart.php';	
		include 'gaslist.php';
		break;

	case 'new':
	echo '<h1 class="h3 mb-3">New Gas Registration</h1>';
	echo '<div class="row">';
		include 'new_regist_alart.php';		
		include 'new_form.php';
		include 'new_recent_registration.php';
	echo '</div>';	
	
	include 'app/bm_contacts/model_form_new_contact.php';
	include 'app/bm_location/model_form_new_location.php';
	
		break;


	case 'check':
	echo '<h1 class="h3 mb-3">Confirm New Registration</h1>';
	echo '<div class="row">';		
		include 'check_form_confirm.php';
		
	echo '</div>';	
			include 'check_model_form_delete.php';
			include 'check_model_form_cylinder.php';
			include 'check_model_form_confirm.php';
			include 'check_model_form_delete_cylinder.php';
		break;	

	case 'registryid':	
		echo '<h1 class="h3 mb-3">Registration id</h1>';
	
	
		break;
		
	default:
		
		break;
		
}





?>


	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Choices.js
			new Choices(document.querySelector(".choices-location"));
			new Choices(document.querySelector(".choices-contact"));
			
			
			new Choices(document.querySelector(".choices-multiple"));
			// Flatpickr
			flatpickr(".flatpickr-minimum");
			flatpickr(".flatpickr-datetime", {
				enableTime: true,
				dateFormat: "Y-m-d H:i",
			});
			flatpickr(".flatpickr-human", {
				altInput: true,
				altFormat: "F j, Y",
				dateFormat: "Y-m-d",
			});
			flatpickr(".flatpickr-multiple", {
				mode: "multiple",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-range", {
				mode: "range",
				dateFormat: "Y-m-d"
			});
			flatpickr(".flatpickr-time", {
				enableTime: true,
				noCalendar: true,
				dateFormat: "H:i",
			});
		});
	</script>