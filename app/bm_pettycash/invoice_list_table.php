<div class="col-md-12">
  <div class="card">
  	<!--
    <div class="card-header">
      <h5 class="card-title mb-0">Invoice List</h5>
    </div> -->
    <div class="card-body">
      <div class="table-responsive">
        
        	<table id="datatables-reponsive" class="table table-striped" style="width:100%">
          <thead>
            <tr>
              <th>Invoice #</th>
              <th>Vendor</th>
              <th>Ref / Date</th>
              <th>Amount</th>
               <th>Pay</th>
              <th>Details</th>
              <th>PO</th>
              <td>B. Activity</td>
             <td>P Request</td>
            </tr>
          </thead>
          <tbody>
          	<?php
          
          	?>
          	
          	
            <?php foreach ($vinvoice_ as $vid => $vinvoice_data): ?>
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
                <td><?php echo number_format($vinvoice_data['vi_total'], 2); ?></td>
                <td>
                	<!-- PAID / NOT PAID -->
                	
                	 <?php if (in_array($vid, $pvid_)) : ?>
						      <span class="badge bg-success">Paid</span>
						<?php else : ?>
					  <span class="badge bg-danger">Not Paid</span> 
						<?php endif; ?>
                	
                </td>
                <td><?php echo htmlspecialchars($vinvoice_data['vi_details']); ?></td>
                <td>
                	<!---PO  -->
                	 <?php if (in_array($vid,  $po_vid_)) : ?>
                	 	
                	 	<?php echo $po_invoice_[$po_vid]['po_number']; ?>
                	
                	 <?php if (!empty($po_invoice_[$vid]['po_link'])) : ?>
                	 	
                		<a href="<?php echo $po_invoice_[$vid]['po_link']; ?>"    target="_blank" ><i class="fa fa-link"></i></a>
                		
                		<?php endif; ?>
                	
                	<?php endif; ?>
                	
                	
                </td>
                <td>
                	<!-- B. Activity vi_costcentre  -->
                	 	<?php echo  $program_[  $vinvoice_data['vi_costcentre']   ]['name']; ?>
                	 	
                </td>
                
                <td>
                	
                	<?php
                	
                	if(empty($sql_invoice_pr_id[$vid]['year'])){
                		echo '<i class="fa "></i>Pending';
                	}elseif(empty( $sql_invoice_pr_id[$vid]['ref'] )){
                		
						?>
						<a href="?app=pettycash&page=requestid&id=<?php echo $sql_invoice_pr_id[$vid]['id'] ;  ?>"><i class="fa "></i>Stated</a>
						<?php
                		
                	}else{
                		
						?>
						
						
						<a href="?app=pettycash&page=requestid&id=<?php echo $sql_invoice_pr_id[$vid]['id'] ;  ?>">
						
						<?php
						
						echo 'PR-';
						echo $sql_invoice_pr_id[$vid]['year'];
						echo '/';
						 echo $sql_invoice_pr_id[$vid]['ref'];
						 
						echo '</a>';
						
                	}
					
					
					
                	
                	?>
                	
                
                	
                	
                </td>
                
                
           
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
