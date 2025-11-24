
	
	
  <div class="col-7">
    <div class="card">
    	 <div class="card-header">
    	 	
    	 	<?php
     	///echo $vinvoice_[$id]['vi_no'];
     	if(empty($vinvoice_[$id]['vi_no'])){
     		echo 'Fill out this form to register a new invoice';
     		echo '<div class="card-body">';
     			include 'invoice_id_register_no.php';
				echo '</div><hr>';
     	}


if(!empty($vinvoice_[$id]['vi_no'])){
 	?>

	<div class="row mb-2 mb-xl-3"><div class="col-auto d-none d-sm-block">
		<h1>Registry #: <strong><?php echo $vinvoice_[$id]['vi_year']; echo '/';  echo $vinvoice_[$id]['vi_no']; ?></strong>
			
			<?php
			
			if(in_array($id, $pvid_)){
				echo '<span class="text-danger"><i class="fa fa-check-square"></i> PAID</span>';
			}
			
		///////////////////////////////	
			
			
		
			
			if(in_array($id, $po_vid_)){
				echo ' : <span class="text-success" > '.$po_invoice_[$id]['po_number'].'</span>';
			}
			
			
			
			?>
			
			
			
			
			
			
		

			
		</h1></div>
		<div class="col-auto ms-auto text-end mt-n1">
		<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new" >Add Payments</button>
		<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_odoo_po_new" >Add Odoo PO</button>
		<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_comment" >+ Comments</button>
		</div>
		</div>

    <?php } ?>

    	</div>

    	
      <div class="card-body">	
      	
		<?php
		
		include 'invoice_id_edit_form.php';
	
      
      include 'invoice_id_comment.php';
      
  	  if(in_array($id, $pvid_)){
    	  include 'invoice_id_payment.php';
		}
	  
	  
	   if(in_array($id, $po_vid_ )){
    	   include 'invoice_id_odoo_po.php';
		}
	  
	 
	
	  
      ?>
      </div>
      
    </div>
  </div>
  
  

