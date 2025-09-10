

					<div class="row">
						<div class="col-12">
						
							<div class="card">
								 <div class="card-header">
      							 
      							  
      							  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-contact-new">
										New Contacts
									</button>
      							  
      							  
      							  
     							 </div>
								
								<div class="card-body">
									<table id="datatables-reponsive" class="table table-striped" style="width:100%">
										<thead>
											<tr>
												<th></th>
												<th>Contact Name</th>
												<th>Mobile Number</th>
												<th>Address</th>
											
												
											</tr>
										</thead>
										<tbody>
											
											<?php
											foreach ($contact_id_ as $key => $contact_id) {

										
											 ?>
											
											<tr>
												<td>
													<!--
												<a href="?app=contacts&page=id&id=<?php echo  $contact_id; ?>"><i class="align-middle" data-feather="external-link"></i></a>
											-->
											
											<i class="align-middle" data-feather="external-link"   data-bs-toggle="modal" data-bs-target="#m-contact-id<?php echo $contact_id; ?>"   ></i>
													
												</td>
												<td><?php  echo $full_name[$contact_id];  ?></td>
												<td><?php echo $phone_number[$contact_id];  ?></td>

												<td><?php echo $address[$contact_id]; ?></td>
												
												
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




