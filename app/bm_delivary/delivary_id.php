



					<div class="row">
						 <div class="col-12 col-xl-7">
						
							<div class="card">
								 <div class="card-header">
								 	<span style="float: right">
								 		
				          	<span class="btn btn-pill btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#m-location-change"  >Change</span> 			 			
								 		<i class=""></i>
      								<span class="btn btn-pill btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#m-location-new"  >New</span> 
      								<?php
      							//	echo $delivery_status[$delivery_id];
									
									
								if ($delivery_status[$delivery_id] == -1) {
									
										    echo '<span class="btn btn-success" data-bs-toggle="modal" data-bs-target="#m-did_sent">Send Delivery</span>';
									
										} elseif ($delivery_status[$delivery_id] == 0 && $delivery_started_by[$delivery_id] == -1) {
											
											echo '<div class="spinner-grow spinner-grow-sm text-warning me-2" role="status"><span class="visually-hidden">Loading...</span></div>';
											echo 'Waiting';
											
										   
											
										} elseif ($delivery_status[$delivery_id] == 0 && $delivery_started_by[$delivery_id] > -1 && $delivery_done_type[$delivery_id] == 0) {
											
										   echo '<div class="spinner-grow spinner-grow-sm text-primary me-2" role="status"><span class="visually-hidden">Loading...</span></div>';
											echo 'Partly Deliverd';
											
										} elseif ($delivery_status[$delivery_id] == 0 && $delivery_started_by[$delivery_id] > -1 && $delivery_done_type[$delivery_id] == -1 ) {
											
										   // echo 'Started by User ID: ' . $delivery_started_by[$delivery_id];
											
											 echo '<div class="spinner-grow spinner-grow-sm text-success me-2" role="status"><span class="visually-hidden">Loading...</span></div>';
											echo 'Started';
											
										} elseif ($delivery_status[$delivery_id] == 1) {
											
										    echo 'DONE';
										}
																		
      								?>
      								
      								
      								
      							</span>
      							
      							Delivery Address: 
      							
      							<h2> <?php echo  $location_name[$location[$id]]; ?> </h2>
      							
      							
      							
     							 </div>
								
								<div class="card-body">
									
					
					<?php
					include 'delivary_id_items.php';
					?>
						
									
					<?php
					
					if($delivery_status[$delivery_id] != 1){
						include 'delivary_id_items_form1.php';
					}
					
					
					?>	
					
					
					
										
			</div>
			
			
			<div class="card-body">
				<h4>
					Delivary Date: <?php  echo $delivery_date[$delivery_id]; ?> 	<span class="btn btn-pill btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#m-date-change"  >Change Date</span> 	
				</h4>
				
					<?php
					include 'delivary_id_bar.php';
					
					?>
				
			</div>
			
			
			
			
			
			
			
		    	
			</div>
		</div>
	</div>