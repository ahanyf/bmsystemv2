
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-cost-new" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">New Cost Centre</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_pettycash/model_form_new_cost_centre_post.php">
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														<!--
														<input type="hidden" value="<?php  echo $id; ?>" name="userid" />
												
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Cost Centre Name:</label>
								              <input type="text" name="costcentre_name" class="form-control" placeholder="Cost Centre Name" required>
								            </div>
								            </div>
								            
								            
								          
								            
							
									  <div class="row">
								   			  <div class="col-md-12 mb-3">
             						 			<label class="form-label">Remarks:</label>
             									 <input type="text" name="remarks" class="form-control" placeholder="Remarks"  required>
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