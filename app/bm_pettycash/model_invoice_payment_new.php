<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-vi_payment_new" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_payment_new_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Add Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Payment Amount:</label>
              <input type="number" name="payment_amount" step="any" class="form-control" placeholder="Amount"
                value="<?php echo htmlspecialchars($vinvoice_[$id]['vi_total']); ?>" required>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Payment Date:</label>
              <input type="date" name="payment_date" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Payment Method:</label>
              <select name="payment_method" class="form-control" required>
                <option value="">Select Payment Method</option>
                <option value="cash_counter_1">Cash – Counter 1</option>
                <option value="cash_counter_2">Cash – Counter 2</option>
                <option value="cash_counter_3">Cash – Counter 3</option>
                <option value="cash_counter_4">Cash – Counter 4</option>
                <option value="reimbursable">Reimbursable (Paid by Employee)</option>
                <option value="transfer_male_office">Bank Transfer – Male Office</option>
                <option value="check_male_office">Cheque – Male Office</option>
              </select>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label">Payment By:</label>
              <input type="text" name="payer_name" class="form-control" placeholder="Name of the Person" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label">Remarks:</label>
              <input type="text" name="remarks" class="form-control" placeholder="Enter Payment Remarks" required>
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
