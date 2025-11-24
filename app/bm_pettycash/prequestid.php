<div class="col-8">
  <div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h3 class="mb-0">Ref#:
      	
      	 <?php 
      	 if(empty($pr_[$id]['pr_ref'] )){
      	 	
			echo '  <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#m-pr_confirm">
         	Confirm
        </button>';
			
			
      	 }else{
      	 	
		echo 'BM-PR/';
		echo $pr_[$id]['pr_year'];	
		echo '/';	
      	echo $pr_[$id]['pr_ref']; 	
		 
      	 }
echo ' ';
	
      	 ?>
      	 
    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#m-pr_edit_status"  ><?php  echo $pr_[$id]['pr_status'];  ?></button>  	 
      	 
      	 
  
      	 </h3>
      	 
      	&nbsp;&nbsp; <?php echo $pr_[$id]['paid_notes']; ?> | <?php echo $pr_[$id]['paid_by']; ?>
      	 
      <div class="col-auto ms-auto text-end mt-n1">
        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#m-pr_edit">
          Edit
        </button>
        
        
        <a href="app/bm_pettycash/prequestid__download_.php?id=<?php echo $id; ?>&page=requestid" target="_blank" class="btn btn-outline-primary"><i class="fa fa-file"></i> Download</a>
        
        <a href="app/bm_pettycash/prequestid__print_.php?id=<?php echo $id; ?>&page=requestid" target="_blank" class="btn btn-outline-primary"><i class="fa fa-print"></i> Print</a>
        
      </div>
    </div>

    <div class="card-body">
    	<h4>Payto: 
    		
    		      <?php echo $bank_account_[  $pr_[$id]['payto']  ]['account_name'];  ?> |
            		<?php echo $bank_account_[   $pr_[$id]['payto']   ]['account_number'];  ?> |
            			<?php echo $bank_account_[ $pr_[$id]['payto'] ]['account_bank'];  ?>
    		
    		
    	</h4>
      <p><strong>Total:</strong> 45.50 (0 Invoice) | 
      <strong>Remarks:</strong>  <?php echo $pr_[$id]['remarks']; ?> </p>

      <!-- Table or content goes here -->
      <div>
      
        <?php
          include 'prequestid_invoice_table.php';
          include 'prequestid_invoice_form_add.php';
        ?>
      </div>
      
      Total: <strong>
      	<?php echo number_format($pr_invoice_total,2); ?> 
      </strong>
      
      
        | Count: <?php echo $pr_invoice_count; ?> 
      
    </div>
  </div>
</div>
