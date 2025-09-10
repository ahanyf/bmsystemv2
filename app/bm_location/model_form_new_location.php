
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-location-new" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">New Address / Location</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_location/model_form_new_location_post.php">
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														<!--
														<input type="hidden" value="<?php  echo $id; ?>" name="userid" />
												
														 <input type="hidden" name="registry_id" value="" />
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Address / Location Name:</label>
								              <input type="text" name="location_name" class="form-control" placeholder="Entre Location / Address Name" required>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-12 mb-3">
             						 			<label class="form-label">Notes:</label>
             									 <input type="text" name="location_notes" class="form-control" placeholder="Location Remartks" value="NA" required>
           									 </div>
								            </div>
								            
							
							
										<div class="row">
							            <div class="col-md-12 mb-3">
							              <label class="form-label">Location Type:</label>
							              
							              <select class="form-control" name="location_type" required>
							              	
							              <option value="">Select Location type</option>
										    <option value="House Hold">House Hold</option>
										    <option value="Gov. Office">Gov. Office</option>
										     <option value="Work Site /Workshops">Work Site /Workshops</option>
										      <option value="Boat, Loach and Ferry">Boat, Loach and Ferry</option>
										      <option value="Other Public Places">Other Public Places</option>
										      
										     
							              
							              </select>
							              
							            </div>
            							</div>
            
            
       							     <div class="row">
         							    <div class="col-md-7 mb-3">
           							   <label class="form-label">Island:</label>
           							   <input  class="form-control" type="text" name="island" required  />
           							   
            	
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