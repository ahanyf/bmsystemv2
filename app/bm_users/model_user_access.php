
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-edit-user">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-user-access" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Access Permision: <?php echo $fullname[$id]; ?></h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_users/post_add_access.php">
														
														<input type="hidden" value="<?php echo $uri; ?>" name="uri" />
														<input type="hidden" value="<?php echo $id; ?>" name="userid" />
														

												<div class="mb-3">
													<select multiple  name="user_access[]"  class="form-control" style="height: 550px" >
														
														<?php
														foreach ($user_permission_ as $key => $value) {
															if(!in_array( $value , $permision_)){
															?>
															<option value="<?php echo $value; ?>" ><?php echo $value; ?></option>
															<?php
															}
														}
														?>
													</select>				
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