
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-vendor-new" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">New Vendor</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_pettycash/model_form_new_vendor_post.php">
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														<!--
														<input type="hidden" value="<?php  echo $id; ?>" name="userid" />
												
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Vendor Name:</label>
								              <input type="text" name="vendor_name" class="form-control" placeholder="Vendor Name" required>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Tin Number:</label>
             									 <input type="text" name="vendor_tin" class="form-control" placeholder="Entre Tin Number"  required>
           									 </div>
								            </div>
								            
							
									  <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Contact:</label>
             									 <input type="text" name="vendor_contact" class="form-control" placeholder="Entre Contact Number"  required>
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