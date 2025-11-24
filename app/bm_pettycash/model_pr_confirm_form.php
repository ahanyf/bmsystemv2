<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-pr_confirm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_pr_confirm_form_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Confirm Payment Requuest</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

          <div class="row">
            <div class="col-md-6 mb-3">
              Total:
            </div>
          </div>

          

          <div class="row">
       
            <div class="col-md-4 mb-3">
              <label class="form-label">year:</label>
              <input type="number" name="year" value="<?php echo $pr_[$id]['pr_year']; ?>" class="form-control"  required>
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