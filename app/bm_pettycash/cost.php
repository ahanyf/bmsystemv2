

<?php



///print_r($program_);




?>




					<div class="row">
						<div class="col-12">
						
							<div class="card">
								<!-- <div class="card-header">
      							  
     				</div> -->
								
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												
												<th>Remarks</th>
												<th>Status</th>
											
												
											</tr>
										</thead>
										<tbody>
											
											<?php
							
											// Loop through vendor array
											foreach ($program_ as $program_id => $program_data) {
											    ?>
											    <tr>
											        <td>
											            <i class="align-middle" data-feather="external-link"
											               data-bs-toggle="modal"
											               data-bs-target="#m-cost-edit<?php echo $program_id; ?>"></i>
											               
											           
											            
											                  
											        </td>
											        <td><?php echo htmlspecialchars($program_data['name']); ?></td>
											        <td><?php echo htmlspecialchars($program_data['remarks']); ?></td>
											        <td><?php echo htmlspecialchars($program_data['status']); ?></td>
											       
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
