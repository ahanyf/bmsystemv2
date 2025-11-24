
<?php

 if(!empty($pr_invoice_[$id])){
foreach ($pr_invoice_[$id] as $inv_id => $inv_data): ?>

<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-pr_invoice_remove<?php echo $inv_data['id'];  ?>">
  Add Payment
</button>   m-pr_invoice_remove
-->
<!-- Modal -->
<div class="modal fade" id="m-pr_invoice_remove<?php echo $inv_data['id'];  ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_pr_invoice_remove_form_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Do you want Remove Invoice</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo $inv_data['id'];  ?>">


          <div class="row">
       
          
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Remove</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  endforeach; 
  }
 ?>

