

					<div class="row">
						<div class="col-12">
						
							<div class="card">
							<!--	 <div class="card-header">
      							 
      							  
     							</div> -->
								
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>Vendor Name</th>
												<th>Tin</th>
												<th>Contact</th>
												<th>Notes</th>
												<th>Status</th>
											
												
											</tr>
										</thead>
										<tbody>
											
											<?php
							
											// Loop through vendor array
											foreach ($vendor_ as $vendor_id => $vendor_data) {
											    ?>
											    <tr>
											        <td>
											            <i class="align-middle" data-feather="external-link"
											               data-bs-toggle="modal"
											               data-bs-target="#m-vendor-id<?php echo $vendor_id; ?>"></i>
											               
											           
											           <a href="?app=pettycash&page=vendorid&id=<?php echo $vendor_id; ?>">Clik</a>    
											                  
											        </td>
											        <td><?php echo htmlspecialchars($vendor_data['vendor_name']); ?></td>
											        <td><?php echo htmlspecialchars($vendor_data['vendor_tin']); ?></td>
											        <td><?php echo htmlspecialchars($vendor_data['vendor_contact']); ?></td>
											        <td><?php echo htmlspecialchars($vendor_data['notes']); ?></td>
											        <td><?php echo htmlspecialchars($vendor_data['status']); ?></td>
											    </tr>
											    <?php
											}
											?>
																					
										
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>



	


