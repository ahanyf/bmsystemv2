
<!-- Trigger Button 
<button type="button" class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#m-pr_edit">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-pr_edit_status" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_pr_status_change_form_post.php">
        
        <!-- Header -->
        <div class="modal-header">
          <h5 class="modal-title">Chnage Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo $id; ?>">

       <input type="hidden" name="paid_date" value="<?php echo date('Y-m-d'); ?>">


          <!-- Remarks -->
          <div class="mb-3">
            <label for="remarks" class="form-label"><?php echo $pr_[$id]['remarks'];  ?></label>
          </div>


		<div class="row">
          <!-- Date -->
          <div class="col-md-12 mb-3">
            <label for="pr_date" class="form-label">Date: <?php echo $pr_[$id]['pr_date']; ?>" | Year:<?php echo $pr_[$id]['pr_year']; ?> </label>
          </div>
        </div>
        
        
                <!-- Status -->
          <div class="col-md-5 mb-3">
            <label for="status" class="form-label">Status</label>
          <select name="status" id="status" class="form-select" required>
          		<option  value="<?php echo $pr_[$id]['pr_status'];  ?>" ><?php echo $pr_[$id]['pr_status'];  ?></option>
				  <option value="">Choose...</option>
				  <?php foreach ($pr_status as $status): ?>
				    <option value="<?php echo htmlspecialchars($status); ?>">
				      <?php echo htmlspecialchars($status); ?>
				    </option>
				  <?php endforeach; ?>
				</select>
          
          </div>
        
        
        
                   <!-- Status -->
          <div class="col-md-12 mb-3">
            <label for="status" class="form-label">Notes</label>
          <input type="text" name="notes"  value="<?php echo $pr_[$id]['paid_notes'];  ?>"  class="form-control" required  />
    
          </div>     
        
        
        
        
        
        
		</div>
        <!-- Footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"> Update </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
