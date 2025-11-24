<!-- Trigger Button 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vi_payment_new">
  Add Payment
</button>
-->
<!-- Modal -->
<div class="modal fade" id="m-change-year" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="get" action="">
        <div class="modal-header">
          <h5 class="modal-title">Change Year : <?php echo $year; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          

          <input type="hidden" name="app" value="pettycash" />
          
           <input type="hidden" name="page" value="requestlist" />
          
          <div class="row">
       
            <div class="col-md-4 mb-3">
              <label class="form-label">year:</label>
              <input type="number" name="year" value="<?php echo $year; ?>" class="form-control"  required>
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