<!-- Modal -->
<div class="modal fade" id="m-vi_payment_delete" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_payment_delete_post.php">
        <div class="modal-header">
          <h5 class="modal-title text-danger">Confirm Delete Payment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

          <p><strong>Date:</strong> <?php echo htmlspecialchars($payment_invoice_[$id]['paid_date']); ?></p>
          
          <p><strong>Amount:</strong> <?php echo $payment_invoice_[$id]['paid_amounte']; ?></p>
          
          <p><strong>Paid By:</strong> <?php echo htmlspecialchars($payment_invoice_[$id]['payer_name']); ?></p>
          <p><strong>Method:</strong> <?php echo htmlspecialchars($payment_invoice_[$id]['payment_method']); ?></p>
          <p><strong>Remarks:</strong> <?php echo htmlspecialchars($payment_invoice_[$id]['remarks']); ?></p>

          <div class="alert alert-warning mt-3">
            Are you sure you want to permanently delete this payment record?
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
