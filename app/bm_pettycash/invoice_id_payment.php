
<div class="row">
  <div class="col-12 mb-3">
    <div class="alert alert-success alert-dismissible fade show position-relative" role="alert">
      <div class="alert-message">
        <h4 class="alert-heading">Payment Done!</h4>



        <div class="btn-list position-absolute top-0 end-0 mt-2 me-2">
          <button class="btn btn-sm btn-light" type="button"  data-bs-toggle="modal" data-bs-target="#m-vi_payment_edit"   >Edit</button>
          <button class="btn btn-sm btn-secondary" type="button"  data-bs-toggle="modal" data-bs-target="#m-vi_payment_delete"   >Delete</button>
        </div>

        <p>
          <strong>Date:</strong> <?php echo $payment_invoice_[$id]['paid_date']; ?> |
          <strong>Amount:</strong> <?php echo $payment_invoice_[$id]['paid_amount']; ?> 
            (
          <?php
          
        echo   $payment_invoice_[$id]['paid_amount']- $vinvoice_[$id]['vi_total'];
		  
         
		  
          ?>
          ) 
          
          |
          <strong>Paid by:</strong> <?php echo $payment_invoice_[$id]['payer_name']; ?> |
          <strong>Method:</strong> <?php echo $payment_invoice_[$id]['payment_method']; ?> 
        </p>
        <p>Remarks: <?php echo $payment_invoice_[$id]['remarks']; ?>  </p>
     
      </div>
    </div>
  </div>
</div>
