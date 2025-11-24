
<!-- Trigger Button 
<button type="button" class="btn btn-primary" 
        data-bs-toggle="modal" 
        data-bs-target="#m-pr_edit">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-pr_edit" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_pr_edit_form_post.php">
        
        <!-- Header -->
        <div class="modal-header">
          <h5 class="modal-title">Edit Payment Request</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <!-- Vendor -->
          <div class="mb-3">
            <label for="vi_vendor_id" class="form-label">Pay To</label>
            <select class="form-select choices-vendor" id="payto" name="payto" required>
            	
            	<option value="<?php echo $pr_[$id]['payto'];  ?>">
            		<?php echo $bank_account_[ $pr_[$id]['payto'] ]['account_name'];  ?> |
            		<?php echo $bank_account_[ $pr_[$id]['payto'] ]['account_number'];  ?> |
            			<?php echo $bank_account_[ $pr_[$id]['payto'] ]['account_bank'];  ?>
            		</option>
            	 
                <option value="">Choose..</option>
                <?php foreach ($bank_account_ as $account): ?>
					    <option value="<?= htmlspecialchars($account['account_id']) ?>">
					        <?= htmlspecialchars($account['account_name']) ?> | 
					        <?= htmlspecialchars($account['account_number']) ?> | 
					        <?= htmlspecialchars($account['account_bank']) ?>
					    </option>
					<?php endforeach; ?>
              </select>
              
              
            </select>
          </div>

          <!-- Remarks -->
          <div class="mb-3">
            <label for="remarks" class="form-label">Remarks</label>
            <input type="text" id="remarks" name="remarks"  value="<?php echo $pr_[$id]['remarks'];  ?>"   class="form-control" required>
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


		<div class="row">
          <!-- Date -->
          <div class="col-md-4 mb-3">
            <label for="pr_date" class="form-label">Payment Date</label>
            <input type="date" id="pr_date" name="pr_date" value="<?php echo $pr_[$id]['pr_date']; ?>" class="form-control" required>
          </div>

          <!-- Year -->
          <div class="col-md-4 mb-3">
            <label for="pr_year" class="form-label">Year</label>
            <input type="number" id="pr_year" name="pr_year" value="<?php echo $pr_[$id]['pr_year']; ?>" class="form-control" required min="2000" max="2100">
          </div>

          <!-- Ref -->
          <div class="col-md-4 mb-3">
            <label for="pr_ref" class="form-label">Reference</label>
            <input type="text" id="pr_ref" name="pr_ref"  value="<?php echo $pr_[$id]['pr_ref']; ?>"  class="form-control">
          </div>
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
