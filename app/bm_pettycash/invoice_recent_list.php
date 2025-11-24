<div class="col-md-5">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Invoice List</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>Invoice #</th>
              <th>Vendor</th>
              <th>Ref / Date</th>
              <th>Amount</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
          	
          	<?php
          	foreach ($recent_invoice_ as $key => $vid):
				
          		$vinvoice_data =	$vinvoice_[$vid];

          	?>
              <tr>  	
                <td>
			                	
			<?php 
			if (empty($vinvoice_data['vi_no'])) : ?>
			    <a href="?app=pettycash&page=invoiceid&id=<?= htmlspecialchars($vid) ?>" class="btn btn-warning">
			        Select
			    </a>
			<?php else : ?>
			    <a href="?app=pettycash&page=invoiceid&id=<?= htmlspecialchars($vid) ?>" class="btn btn-outline-secondary">
			        <?= htmlspecialchars($vinvoice_[$vid]['vi_year']) ?>/<?= htmlspecialchars($vinvoice_data['vi_no']) ?>
			    </a>
			<?php endif; ?>
			                	
                	
                	
                	
                </td>
                <td>
                	<?php 
                	
                	echo htmlspecialchars(($vendor_[$vinvoice_data['vi_vendor_id']]['vendor_name']));
					
					 ?></td>
                <td>
                  <?php echo htmlspecialchars($vinvoice_data['vi_ref']); ?><br>
                  <small class="text-muted"><?php echo htmlspecialchars($vinvoice_data['vi_date']); ?></small>
                </td>
                <td><?php echo number_format($vinvoice_data['vi_total'], 2); ?>
						 <?php if (in_array($vid, $pvid_)) : ?>
						 <small class="text-muted">     <span class="badge bg-success">Paid</span> </small>
						<?php else : ?>
					 <small class="text-muted">	 <span class="badge bg-danger">Not Paid</span> </small>
						<?php endif; ?>

                	
                </td>
                <td><?php echo htmlspecialchars($vinvoice_data['vi_details']); ?>
                	
                	 <?php if (in_array($vid,  $po_vid_)) : ?>
                	 	<span class="badge bg-info">
                	 	<?php echo $po_invoice_[$po_vid]['po_number']; ?>
                	</span>
                	<?php endif; ?>
                </td>
           
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
