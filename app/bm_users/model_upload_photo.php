
<!-- BEGIN  modal 
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-edit-user">
										Small
									</button>
									
					-->				
									
									<div class="modal fade" id="m-photo-user" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-sm" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Upload Photo : <?php echo $fullname[$id]; ?></h5>
													
													<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body m-3">
													
													<form method="post" action="app/bm_users/post_upload_photo_user.php" enctype="multipart/form-data">
														
														<input type="hidden" value="<?php echo $uri; ?>" name="uri" />
														<input type="hidden" value="<?php echo $id; ?>" name="userid" />
														
														
														
														
												
												
												 <div class="mb-3">
											        <label class="form-label">Upload Image</label>
											        <input type="file" name="profile_image" class="form-control" accept="image/*" required>
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