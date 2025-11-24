<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-vi_po_edit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_odoo_po_edit_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Edit Purchase Order: <?php echo $po_invoice_[$id]['po_number']; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">PO Number:</label>
               <input type="text" name="po_number" value="<?php echo $po_invoice_[$id]['po_number']; ?>" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">PO Ref:</label>
              <input type="text" name="po_ref" value="<?php echo $po_invoice_[$id]['po_ref']; ?>" class="form-control" required>
            </div>
          </div>

          <div class="row">
          	 <div class="col-md-8 mb-3">
          	 	<label class="form-label">PO Status</label>
          	<select name="po_status" class="form-control" required>
          		<option value="<?php echo $po_invoice_[$id]['po_status']; ?>"><?php echo $po_invoice_[$id]['po_status']; ?></option>
          	
          		    <option value="">Select Status</option>
				    <?php foreach ($po_status_ as $value => $label): ?>
				        <option value="<?php echo $value; ?>">
				            <?php echo $label; ?>
				        </option>
				    <?php endforeach; ?>
          		
          	</select>
          	
			</div>
			</div>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label">Remarks:</label>
              <input type="text" name="remarks" value="<?php echo $po_invoice_[$id]['po_remarks']; ?>"  class="form-control" placeholder="Enter PO Remarks" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
