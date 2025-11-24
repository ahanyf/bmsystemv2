<div class="card">
  <div class="card-body">
    <form class="row g-3 align-items-center" 
          action="app/bm_pettycash/prequestid_invoice_form_add_post.php" 
          method="POST">

      <!-- Hidden fields -->
      <input type="hidden" name="uri" value="<?php echo $uri; ?>" />
      <input type="hidden" name="id" value="<?php echo $id; ?>" />

<table width="100%">
	<tr>
		<td width="2%">
			  <label for="invoice_id">Invoice</label>
		</td>
		
		<td>
			
			
			 	
			
			   <select name="invoice_id" id="invoice_id" 
                  class="form-select choices-vendor" required>
            <option value="">Choose...</option>
            	
  <?php foreach ($pending_invoice_ as $vid => $inv): ?>
    <option value="<?php echo htmlspecialchars($inv); ?>">
      <?php 
        echo  htmlspecialchars( $vendor_[ $vinvoice_[$inv]['vi_vendor_id']]['vendor_name'] ) ;
          echo    ' | ' . htmlspecialchars($vinvoice_[$inv]['vi_no']);
             
			 if (!empty($po_invoice_[$inv]['po_number'])) {
   			 echo ' | <strong>' . $po_invoice_[$inv]['po_number'].'</strong>';
				}
			 
			 
            echo  ' | Amount: ' . number_format($vinvoice_[$inv]['vi_total'], 2);
      ?>
    </option>
  <?php endforeach; ?>
          </select>
			
		</td>
		
		<td width="10%">
			   <button type="submit" class="btn btn-sm btn-primary">
            Add Invoice
          </button>
      
		</td>
		
		
	</tr>
	
</table>

      <!-- Inline select + button -->
   
    

  
  
    </form>
  </div>
</div>





