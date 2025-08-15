
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-edit-user">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-reset-password" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Reset User Password:  : <?php echo $fullname[$id]; ?></h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_users/post_model_user_reset_password.php">
														
														<input type="hidden" value="<?php echo $uri; ?>" name="uri" />
														<input type="hidden" value="<?php echo $id; ?>" name="userid" />
														
														
														
												<div class="mb-3">
													<label class="form-label">Full Name: <?php echo $fullname[$id]; ?></label>
													<input type="hidden" name="fullname"  value="<?php echo $fullname[$id]; ?>"  class="form-control"   placeholder="Full Name" required="" >
												</div>
												<div class="mb-3">
													<label class="form-label">Mobile: <?php echo htmlspecialchars($mobile[$id]); ?></label>
													<input type="hidden"  name="mobile" value="<?php echo htmlspecialchars($mobile[$id]); ?>"   class="form-control" placeholder="Mobile Number" required="" >
												
													
												</div>
												
												<div class="mb-3">
													
													<input type="checkbox" required=""> Yes, Reset User Password to <b> <?php echo htmlspecialchars($mobile[$id]); ?></b>
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