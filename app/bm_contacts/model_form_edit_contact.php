
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->			
					
					
	<?php
	foreach ($contact_id_ as $key => $contact_id) {
	?>					
									
									<div class="modal fade" id="m-contact-id<?php echo $contact_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Edit: <?php  echo $full_name[$contact_id];  ?></h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_contacts/model_form_edit_contact_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
														<input type="hidden" value="<?php  echo $contact_id; ?>" name="id" />
												<!--
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Contact Name:</label>
								              <input type="text" name="full_name" class="form-control"  value="<?php  echo $full_name[$contact_id];  ?>"   placeholder="Contact Person Name" required>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Mobile:</label>
             									 <input type="text" name="phone_number" class="form-control"  value="<?php echo $phone_number[$contact_id];  ?>"  placeholder="Entre Mobile Number"  required>
           									 </div>
								            </div>
								            
						
            
            
       							     <div class="row">
         							    <div class="col-md-12 mb-3">
           							   <label class="form-label">Address:</label>
           							   <input  class="form-control" type="text"  value="<?php echo $address[$contact_id]; ?>"   name="address" required  />
           							   
            	
          							  </div>
          							  </div>
          								
						
												

												</div>
												<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Submit</button>
												</form>
												
												</div>
											</div>
										</div>
									</div>
									<!-- END  modal -->
									

<?php   

}
 ?>
