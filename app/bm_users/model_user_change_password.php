

									
	
						<div class="alert alert-warning alert-dismissible" role="alert">
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											<div class="alert-message">
												<h4 class="alert-heading">Thanks for logging in. Please change your password</h4>
												<p> 🔒 Your default password is your phone number (also your username). Please change it to keep your account secure. </p>
												<hr>
												<div class="btn-list">
													
											<button class="btn  btn-danger" type="button"  data-bs-toggle="modal" data-bs-target="#m-user-change-password" >
												Click to Change Password
											</button>
									</div>
								</div>
							</div>								
									
									
									
									
									
									
									
					
									
									<div class="modal fade" id="m-user-change-password" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Change Password : <?php echo $_SESSION['username']; ?></h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													Mobile Number: <?php echo $_SESSION['usermobile'] ?>
													
													<hr>
													
													<form method="post" action="app/bm_users/model_user_change_password_post.php">
														
														<input type="hidden" value="<?php echo $uri; ?>" name="uri" />
														<input type="hidden" value="<?php echo $_SESSION['userid']; ?>" name="userid" />
														
														
														
												<div class="mb-3">
													<label class="form-label">New Password</label>
													<input type="password" name="password_new"  value=""  class="form-control"   placeholder="New Password" required="" >
												</div>
												<div class="mb-3">
													<label class="form-label">New Password (Again)</label>
													<input type="password"  name="password_again" value=""   class="form-control" placeholder="Same Password" required="" >
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