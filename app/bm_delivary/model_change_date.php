
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-location-new">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-date-change" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sxm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Change Date:</h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<h2> <?php echo  $location_name[$location[$id]]; ?> </h2>
													
													<hr>
													
													<form method="post" action="app/bm_delivary/model_change_date_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
														<input type="hidden" value="<?php  echo $id; ?>" name="id" />
												<!--
														 <input type="hidden" name="registry_id" value="" />
														-->

											<div class="row">
								            <div class="col-md-12 mb-3">
								            <label class="form-label">Date </label> 
								              <input type="date" class="form-control" name="change_date" required="" />
								           
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