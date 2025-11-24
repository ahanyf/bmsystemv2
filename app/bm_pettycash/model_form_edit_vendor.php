
<?php
							
// Loop through vendor array
foreach ($vendor_ as $vendor_id => $vendor_data) {
												
												
?>

<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->				
						
						
									
									<div class="modal fade" id="m-vendor-id<?php echo $vendor_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">New Vendor: <?php echo $vendor_data['vendor_name'] ?> </h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_pettycash/model_form_edit_vendor_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
													
														<input type="hidden" value="<?php  echo $vendor_id; ?>" name="id" />
													<!--
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Vendor Name:</label>
								              <input type="text" name="vendor_name" value="<?php echo $vendor_data['vendor_name']; ?> " class="form-control" placeholder="Vendor Name" required>
								            </div>
								            </div>
								            
								            
								            <div class="row">
								   			  <div class="col-md-6 mb-3">
             						 			<label class="form-label">Tin Number:</label>
             									 <input type="text" name="vendor_tin" value="<?php echo $vendor_data['vendor_tin']; ?> " class="form-control" placeholder="Entre Tin Number"  required>
           									 </div>
								           
								   			  <div class="col-md-6 mb-3">
             						 			<label class="form-label">Contact:</label>
             									 <input type="text" name="vendor_contact" value="<?php echo $vendor_data['vendor_contact']; ?> " class="form-control" placeholder="Entre Contact Number"  required>
           									 </div>
								            </div>
								            
								            
								            
										
										<div class="row">
								   			  <div class="col-md-12 mb-3">
								   			  	<label class="form-label"   >Notes:</label>
								   			  	<textarea  name="notes" required  class="form-control" ><?php echo $vendor_data['notes']; ?></textarea>
								   			  	</div>
								   			  	</div>
            
											

												</div>
												<div class="modal-footer">
													
													
													
												<button type="submit" class="btn btn-primary">Submit</button>
												</form>
												
												</div>
												
												<span>
														
															Created: <?php echo $bm_user_[$vendor_data['created_by']]['fullname']; ?>
															
															(<?php echo $vendor_data['created_at']; ?>)
															 | 
															 <?php if($vendor_data['edited_by']>=1){
															 ?>	
															Updated: <?php echo $vendor_data['edited_by']; ?>
															(<?php echo $vendor_data['updated_at']; ?>)
															<?php } ?>
															
														
													</span>
												
												
											</div>
										</div>
									</div>
									<!-- END  modal -->
									
<?php
}
?>