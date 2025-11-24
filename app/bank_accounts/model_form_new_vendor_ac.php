
<!--
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-vendor-ac-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-vendor-ac-new" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Add Bank Account</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bank_accounts/model_form_new_vendor_ac_post.php">
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
												<!--		<input type="hidden" value="<?php  echo $id; ?>" name="id" />
												
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Account Name:</label>
								              <input type="text" name="account_name" class="form-control" placeholder="Account Name" required>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Account Number:</label>
             									 <input type="text" name="account_number" class="form-control" placeholder="Account Number"  required>
           									 </div>
								            </div>
								            
							
									  <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Bank:</label>
             									 <input type="text" name="account_bank" class="form-control" placeholder="Entre Contact Number"  required>
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