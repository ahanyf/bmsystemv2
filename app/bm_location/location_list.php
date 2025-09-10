

					<div class="row">
						<div class="col-12">
						
							<div class="card">
								 <div class="card-header">
      							 
      							  
      							  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Add New Address / Location
									</button>
      							  
      							  
      							  
     							 </div>
								
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>Location</th>
												<th>Notes</th>
												<th>Location Type</th>
												<th>Island</th>
												
												<th>Status</th>
												
											</tr>
										</thead>
										<tbody>
											
											<?php
											foreach ($location_ as $key => $location_id) {

										
											 ?>
											
											<tr>
												<td>
												<a href="?app=location&page=id&id=<?php echo  $location_id; ?>"><i class="align-middle" data-feather="external-link"></i></a>
												<a href=""><i class="align-middle" data-feather="image"></i></a>
												<a href=""><i class="align-middle" data-feather="map-pin"></i></a>
													
												</td>
												<td><?php  echo $location_name[$location_id];  ?></td>
												<td><?php echo $location_notes[$location_id];  ?></td>

												<td><?php echo $location_type[$location_id]; ?></td>
												<td><?php echo  $location_island[$location_id];   ?></td>
												<td><?php  echo $location_active[$location_id]; ?></td>
												
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




