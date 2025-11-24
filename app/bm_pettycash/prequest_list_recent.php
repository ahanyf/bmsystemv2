<div class="">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title mb-0">Request List</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
			 <table class="table table-striped table-hover">
			  <thead>
			    <tr>
			      <th>Ref #</th>
			      <th>Pay to</th>
			      <th>Remarks</th>
			  
			      <th>Amount</th>
			  
			      <th>Status</th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  
			  
			    	
			    	 <?php foreach ($pr_id_recent_ as $key => $pr_id): ?>
			    	 <?php  $pr_data = $pr_[$pr_id]; ?>
			    	
			      <tr>
			        <td>
			        	
			        	
			        	<?php 
			        
			        	if(empty($pr_data['pr_ref'])){
			        		?>
			        		<a href="?app=pettycash&page=requestid&id=<?php echo $pr_id; ?>" class="btn btn-warning">Select</a>
			        		<?php
			        	}else{
			        		?>
			        		  <a href="?app=pettycash&page=requestid&id=<?php echo $pr_id; ?>" class="btn bm-sm btn-primary"><?php  echo htmlspecialchars($pr_data['pr_ref']); ?></a>
			        		  <?php
			        	}
			        
					 ?></td>
			        <td>
			        	<?php echo $bank_account_[ $pr_data['payto'] ]['account_name'];  ?> |
            		<?php echo $bank_account_[ $pr_data['payto'] ]['account_number'];  ?> |
            			<?php echo $bank_account_[ $pr_data['payto'] ]['account_bank'];  ?>
			        </td>
			        <td><?php echo htmlspecialchars($pr_data['remarks']); ?>
			        	
			        
			        	
			        	
			        </td>
			        <td><?php echo isset($pr_data['amount']) ? htmlspecialchars($pr_data['amount']) : '-'; ?></td>
			      
			        <td><?php echo htmlspecialchars($pr_data['pr_status']); ?></td>
			      </tr>
			    <?php endforeach; ?>
			  </tbody>
			</table>
        </table>
      </div>
    </div>
  </div>
</div>
