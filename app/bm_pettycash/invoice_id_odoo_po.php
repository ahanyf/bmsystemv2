
<div class="row">
  <div class="col-12 mb-3">
    <div class="alert alert-info alert-dismissible fade show position-relative" role="alert">
      <div class="alert-message">
        <h4 class="alert-heading">Purchase Order : <?php echo $po_invoice_[$id]['po_number']; ?>
        	
        	(Po Ref: <?php echo $po_invoice_[$id]['po_ref']; ?> )
        	
        	
        	<?php
        	
        	if(empty($po_invoice_[$id]['po_link'])){
        		
        	}else{
        		?>
				<a href="<?php echo $po_invoice_[$id]['po_link']; ?>" target="_blank" class="btn btn-info">Open Odoo</a>
				<?php
        	}
        	
        	?>
        	
        	
        	
        	<button class="btn btn-warning" type="button"  data-bs-toggle="modal" data-bs-target="#m-vi_po_link"   >Add Po Link</button>
        	
        	
        	
        </h4>





        <div class="btn-list position-absolute top-0 end-0 mt-2 me-2">
        	
        	
          <button class="btn btn-sm btn-light" type="button"  data-bs-toggle="modal" data-bs-target="#m-vi_po_edit"   >Edit</button>
          <button class="btn btn-sm btn-secondary" type="button"  data-bs-toggle="modal" data-bs-target="#m-vi_po_delete"   >Delete</button>
        </div>

      
        <p>Status:  <strong><?php echo $po_invoice_[$id]['po_status']; ?></strong>     | Remarks: <?php echo $po_invoice_[$id]['po_remarks']; ?>  </p>
     
      </div>
    </div>
  </div>
</div>
