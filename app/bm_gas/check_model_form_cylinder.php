
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-gas-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-gas-new" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">New Gas Cylinder</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_gas/check_model_form_cylinder_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														<input type="hidden" value="<?php  echo $id; ?>" name="userid" />
												
														 <input type="hidden" name="registry_id" value="<?php  echo $registry_id_1_[0]; ?>" />


											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Cylinder Type:</label>
								              <select class="form-control" name="cylinder_type" required>
								                <option value="">Select Cylinder Type</option>
								               =
								                <?php echo $gas_cylinder_option_value; ?>
								              </select>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Cylinder Price:</label>
             									 <input type="number" name="cylinder_price" class="form-control" placeholder="Enter price" required>
           									 </div>
								            </div>
								            
							
							
										<div class="row">
							            <div class="col-md-12 mb-3">
							              <label class="form-label">Payment Type:</label>
							              <select class="form-control" name="payment_type" required>
							              	 <option value="">Select Payment Status</option>
										    <?php foreach ($gas_coustomer_payment_ as $key => $value):  ?>
												<option value="<?php echo htmlspecialchars($key); ?>"><?php echo htmlspecialchars($value); ?></option>
											<?php endforeach; ?>
							              
							              </select>
							            </div>
            							</div>
            
            
       							     <div class="row">
         							    <div class="col-md-7 mb-3">
           							   <label class="form-label">Date:</label>
            						  <input type="date" name="commissing_date" class="form-control" placeholder="" required>
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