<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover align-middle">
    <thead class="">
      <tr>
        <th>Invoice #</th>
        <th>Vendor</th>
        <th>Invoice Ref & Date</th>
        <th>Amount</th>
        <th>Remarks</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	
    	<?php
    	
    	//// print_r($pr_invoice_);
    	
    	$pr_invoice_total = 0;
		$pr_invoice_count = 0;
    	
    	?>
    	
    	
    	
      <?php if (!empty($pr_invoice_[$id])): ?>
        <?php foreach ($pr_invoice_[$id] as $inv_id => $inv_data): ?>
        	
          <tr>
            <!-- Invoice No -->
            <td>
              <?php 
                echo 'PI' . htmlspecialchars($vinvoice_[$inv_id]['vi_year']) . '/' . htmlspecialchars($vinvoice_[$inv_id]['vi_no']); 
              ?>
            </td>

            <!-- Vendor Name + PO -->
            <td>
              <?php 
                echo htmlspecialchars($vendor_[$vinvoice_[$inv_id]['vi_vendor_id']]['vendor_name']); 
                if (in_array($inv_id, $po_vid_)) {
                  echo '<br><strong>' . htmlspecialchars($po_invoice_[$inv_id]['po_number']) . '</strong>';
                  if (!empty($po_invoice_[$inv_id]['po_link'])) {
                    echo ' <a href="' . htmlspecialchars($po_invoice_[$inv_id]['po_link']) . '" class="badge bg-info my-2" target="_blank">Open Odoo</a>';
                  }
                }
              ?>
            </td>

            <!-- Invoice Ref & Date -->
            <td>
              <div>
                <?php echo htmlspecialchars($vinvoice_[$inv_id]['vi_ref']); ?>
                <br>
                <small class="text-muted">
                  <?php echo htmlspecialchars($vinvoice_[$inv_id]['vi_date']); ?>
                </small>
              </div>
            </td>

            <!-- Amount + Paid/Not Paid -->
            <td>
              <?php 
              
              $pr_invoice_total += $vinvoice_[$inv_id]['vi_total'];
			  $pr_invoice_count +=1;
              
                echo number_format($vinvoice_[$inv_id]['vi_total'], 2); 
				
				
                if (in_array($inv_id, $pvid_)) {
                  echo '<br><div class="badge bg-success my-2">Paid</div>';
                } else {
                  echo '<br><div class="badge bg-warning my-2">Not Paid</div>';
                }
              ?>
            </td>

            <!-- Remarks + Cost Centre -->
            <td>
              <?php 
                echo htmlspecialchars($vinvoice_[$inv_id]['vi_details']); 
                echo '<br><i>' . htmlspecialchars($program_[$vinvoice_[$inv_id]['vi_costcentre']]['name']).'</i>'; 
              ?>
            </td>

            <!-- Action Buttons -->
            <td>
              <a href="?app=pettycash&page=invoiceid&id=<?php echo $inv_id; ?>" 
                 class="btn btn-sm btn-outline-primary">
                <i class="fa fa-external-link-alt"></i>
              </a>
              <button class="btn btn-sm btn-outline-danger" 
                      data-bs-toggle="modal" 
                      data-bs-target="#m-pr_invoice_remove<?php echo $inv_data['id']; ?>">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>


