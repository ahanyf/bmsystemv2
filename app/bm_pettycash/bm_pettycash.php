

<?php


if($pending_invoice_count > 1){
	$pend_invoice_count = 'PR for <strong>'.$pending_invoice_count.'</strong> invoices ';
}else{
	$pend_invoice_count = ' ';
}






switch ($page) {
	


	case 'newinvoice':
		
		$h3_stong = 'New';
		$b3_normal = ' Invoice';
		$case_btn = ' '.$pend_invoice_count;
		$case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-new">New Vendor</button>';
	    $case_btn .= ' <a href="?app=pettycash&page=invoicelist" class="btn btn-sm btn-primary">Invoice List</a>';
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
	
		echo '<div class="row">';
		include 'invoice_new_form.php';
		include 'invoice_recent_list.php';
		echo '</div>';
		
		
	break;	
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
	case 'invoicelist':
		
		$h3_stong = 'Invoice';
		$b3_normal = ' List '. $year;
		$case_btn = ' '.$pend_invoice_count;
		$case_btn .= ' <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#m-change-year"> '.$year.' </button>';
	    $case_btn .= ' <a href="?app=pettycash&page=newinvoice" class="btn btn-sm btn-primary">New Invoice</a>';
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
	
		include 'invoice_list.php';
		
	break;		

/////////////////////////////////////////////////////////////////////////////////////////////////////////	
	case 'invoiceid':
		
		$h3_stong = 'Invoice';
		$b3_normal = ' ';
		$case_btn = ' '.$pend_invoice_count;
	    $case_btn .= ' <a href="?app=pettycash&page=newinvoice" class="btn btn-sm btn-primary">New Invoice</a>';
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
	    
		
		echo '<div class="row">';
		include 'invoice_id.php';
		include 'invoice_recent_list.php';
		echo '</div>';		
		
	break;
			
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	case 'pendinginvoice':
		$h3_stong = 'Pending';
		$b3_normal = ' Invoice List';
		$case_btn = ' '.$pend_invoice_count;
		 $case_btn .= ' <a href="?app=pettycash&page=newinvoice" class="btn btn-sm btn-primary">New Invoice</a>';
	  $case_btn .= ' <a href="?app=pettycash&page=invoicelist" class="btn btn-sm btn-primary">Invoice List</a>';
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
	
		echo '<div class="row">';
		
		include 'invoice_list_pending.php';
		echo '</div>';
		
		
	break;		
	
	
	
		
/////////////////////////////////////////////////////////////////			
	case 'vendorlist':
		
		$h3_stong = 'Vendor';
		$b3_normal = ' List';
		$case_btn = ' '.$pend_invoice_count;
		$case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-new">New Vendor</button>';
	
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
		
		include 'vendor_list.php';		
		break;	
		
		
		
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
	case 'newrequest':
		
			$h3_stong = 'New';
		$b3_normal = ' Payment Request';
		$case_btn = ' '.$pend_invoice_count;
		$case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-new">New Vendor</button>';
		$case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-ac-new">New Bank Account</button>';
	
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
			
		
		echo '<div class="row">';
		include 'prequest_form_new.php';
		echo '<div class="col-md-7">';
		include 'prequest_list_recent.php';
		echo '</div>';
		echo '</div>';
		
		

	break;






	case 'requestid':
		
		$h3_stong = 'Payment';
		$b3_normal = '  Request';
		$case_btn = ' '.$pend_invoice_count;
	
		$case_btn .= ' <a href="?app=pettycash&page=newrequest" class="btn btn-sm btn-primary">New Request</a>';
	    $case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-ac-new">New Bank Account</button>';
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
			
		
		echo '<div class="row">';
		include 'prequestid.php';
		echo '<div class="col-md-4">';
		include 'prequest_list_recent.php';
		echo '</div>';
		
		echo '</div>';
		
		

	break;


/////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////

	case 'requestlist':
		
		$h3_stong = 'Payment';
		$b3_normal = '  Request List';
		$case_btn = ' '.$pend_invoice_count;
	
		$case_btn .= ' <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#m-change-year"> '.$year.' </button>';
	
		$case_btn .= ' <a href="?app=pettycash&page=newrequest" class="btn btn-sm btn-primary">New Request</a>';
	
		
		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';
		include 'manu_top.php';
		echo '</div>';
			
		
		echo '<div class="row">';
		include 'prequest_list.php';
		
		
		echo '</div>';
		
		

	break;



/////////////////////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////////////////////////////////////////////	
		
		
		
		
	case 'vendorid':
		
		$h3_stong = 'Vendor';
		$b3_normal = ' ';	
		$case_btn = ' '.$pend_invoice_count;
		
		$case_btn .= ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-new">New Vendor</button>';
		

		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';

		include 'manu_top.php';
		echo '</div>';
		
		
		
		include 'vendorid.php';		
		break;			
		
	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	case 'cost':
		
		$h3_stong = 'Cost';
		$b3_normal = ' Centre';	
		$case_btn = ' '.$pend_invoice_count;
		
		$case_btn .= '<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-cost-new">New Cost Centre</button>';
		

		echo '<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">';
		echo '<h3><strong>'.$h3_stong.'</strong>'.$b3_normal.'</h3></div>';

		include 'manu_top.php';
		echo '</div>';
		
		
		
		include 'cost.php';
		break;	
		
		
		
	default:
		
		break;
		
}


include 'model_form_new_vendor.php';

include 'model_form_edit_vendor.php';


include 'model_form_new_cost_centre.php';
include 'model_form_edit_cost_centre.php';

include 'model_invoice_payment_new.php';
include 'model_invoice_payment_edit.php';
include 'model_invoice_payment_delete.php';

include 'model_invoice_odoo_po_new.php';
include 'model_invoice_odoo_po_link.php';
include 'model_invoice_odoo_po_edit.php';
include 'model_invoice_odoo_po_delete.php';




include 'model_invoice_comments.php';
include 'model_invoice_comments_edit.php';
include 'model_invoice_comments_delete.php';





if($page == 'requestid' AND  isset($_GET['id'])){
	
	include 'model_pr_confirm_form.php';
	include 'model_pr_invoice_remove_form.php';
	
	include 'model_pr_edit_form.php';
	
	include 'model_pr_status_change_form.php';
	
	
	include 'app/bank_accounts/model_form_new_vendor_ac.php';
}


if($page == 'invoicelist'){
	
	include 'model_invoice_list_change_year.php';
}


if($page == 'requestlist'){
include 'model_pr_change_year.php';

}

?>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Choices.js
			new Choices(document.querySelector(".choices-vendor"));
			
			
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


