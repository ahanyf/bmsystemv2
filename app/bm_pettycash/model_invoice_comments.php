<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-vi_comment" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_comments_post.php">
        <div class="modal-header">
          <h5 class="modal-title">New Comments</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

         

          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label">comments:</label>
              <input type="text" name="comment" class="form-control" placeholder="Entre your Comments" required>
            </div>
          </div>
   
          <div class="row">
            <div class="col-md-5 mb-3">
              <label class="form-label">Text:</label>
             <select name="txt_colour" class="form-control"  required>
             	 <option value="text-black" class="text-black">Black Text</option>
				<option value="text-primary" class="text-primary">Blue Text</option>
				<option value="text-danger" class="text-danger">Red Text</option>
				<option value="text-success" class="text-success">Green Text</option>
				<option value="text-warning" class="text-warning">Orange Text</option>
             	
             </select>
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
