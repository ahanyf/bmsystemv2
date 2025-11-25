<div class="">
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
            	<th></th>
              <th>Ref #</th>
              <th>Pay to</th>
              <th>Remarks</th>
              <th>No of Invoice</th>
              <th>Amount</th>
              <th>Status</th>
             
              <th>Notes</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pr_ as $pr_id => $pr_data): ?>
              <tr>
              	
              	
              	
                <td>
                  <?php if (empty($pr_data['pr_ref'])): ?>
                    <a href="?app=pettycash&page=requestid&id=<?php echo $pr_id; ?>" class="btn btn-warning">Select</a>
                  <?php else: ?>
                    <a href="?app=pettycash&page=requestid&id=<?php echo $pr_id; ?>" class="btn btn-sm btn-primary">
                    <i class="fa fa-mouse-pointer"></i>
                    </a>
                  <?php endif; ?>
                </td>
                
                
                
                <td>
                	
                 PR-<?php echo htmlspecialchars($pr_data['pr_year']); ?>/<?php echo htmlspecialchars($pr_data['pr_ref']); ?>	
                </td>
                
                
                
                
                
                <td>
                 <?php echo $bank_account_[ $pr_data['payto'] ]['account_name']; ?>
                 |
                  <?php echo $bank_account_[ $pr_data['payto']  ]['account_number']; ?>
                
                </td>
                <td><?php echo htmlspecialchars($pr_data['remarks']  ); ?></td>
                
                <td><?php 
                
                if(!empty( $invoice_count [ $pr_id ] )){
                echo  $invoice_count [ $pr_id ];
				}else{
					echo '-';
				}
				
				 ?></td>
                
               <td><?php  
               
               if(!empty($total_vi [ $pr_id ])){
              echo  	$total_vi [ $pr_id ];
               }else{
					echo '-';
				}
               
                  ?></td>
                
                <td><?php echo htmlspecialchars($pr_data['pr_status']); ?></td>
             
                  <td><?php echo htmlspecialchars($pr_data['paid_notes']); ?></td>
              </tr>
            <?php endforeach; ?>

     
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
