

	
  <div class="col-5">
    <div class="card">
    	 <div class="card-header">
    	 	Fill out this form to Create New Request
    	 	

    	 	</div>
    	
      <div class="card-body">
        <form action="app/bm_pettycash/prequest_form_new_post.php" method="POST">
          <input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="vi_vendor_id" class="form-label">Pay To</label>
              
              <select  class="form-control choices-vendor"  id="vi_vendor_id" name="payto" required>
              	
                <option value="">Choose..</option>
                
                <?php foreach ($bank_account_ as $account): ?>
					    <option value="<?= htmlspecialchars($account['account_id']) ?>">
					        <?= htmlspecialchars($account['account_name']) ?> | 
					        <?= htmlspecialchars($account['account_number']) ?> | 
					        <?= htmlspecialchars($account['account_bank']) ?>
					    </option>
					<?php endforeach; ?>
              </select>
              
            </div>
          </div>

    

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="remarks" class="form-label">Remarks</label>
              <input type="text" name="remarks"  class="form-control"  required="" />
  
            </div>
          </div>
<hr>
          <button type="submit" class="btn btn-primary">Save Invoice</button>
        </form>
      </div>
    </div>
  </div>
  
  

