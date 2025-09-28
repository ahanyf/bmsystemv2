<?php


echo '<h1 class="h3 mb-3">Delivery</h1>';

switch ($page) {


	case 'new':

	include 'delivary_new_form.php';
		
	include 'app/bm_contacts/model_form_new_contact.php';
	include 'app/bm_location/model_form_new_location.php';

		break;


	case 'id':
		
		include 'delivary_id.php';
		
		
		include 'app/bm_contacts/model_form_new_contact.php';
		include 'app/bm_location/model_form_new_location.php';
		
		
		include 'delivary_id_items_form1_model_edit.php';
		include 'delivary_id_items_form1_model_delete.php';
		include 'model_change_location.php';
		
		include 'model_send_delivery.php';
		include 'model_change_date.php';
		
		
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
