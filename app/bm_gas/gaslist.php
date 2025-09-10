
					<div class="row">
						<div class="col-12">
						
							<div class="card">
								
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th>Location</th>
												<th>Contacts</th>
												
												<th>Cylinder</th>
												<th>Date</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											
											<?php
											foreach ($registry_id_ as $key => $registry_id) {
												
											foreach ($gas_cylinder_[$registry_id] as $key => $cylinder_id) {
													
												
										
											 ?>
											
											
											
											
											<tr>
												<td><?php echo $location_name[$gas_location_id[$registry_id]]; ?></td>
												<td><?php echo  $contact_name[$gas_contact_id[$registry_id]];   ?></td>
												
											
												
												<td><?php echo $cylinder[$cylinder_type[$cylinder_id]]; ?></td>
												<td><?php echo $commissing_date[$cylinder_id]; ?></td>
												<td><?php echo $cylinder_status[$cylinder_id]; ?></td>
												<td></td>
											</tr>
											
										<?php
											}
											}
										?>
										
										
										
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>




