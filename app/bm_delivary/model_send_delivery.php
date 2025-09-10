
<div class="modal fade" id="m-did_sent" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sxm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Confirm and Send Delivary</h5>
													
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
											<div class="modal-body m-3">
													
													<form method="post" action="app/bm_delivary/model_send_delivery_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
														<input type="hidden" value="<?php  echo $id; ?>" name="id" />
												<!--
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

	
									Delivery Address: 
      							
      								<h2> <?php echo  $location_name[$location[$id]]; ?> </h2>
															
															
								            


												

												</div>
												
													
												
												
												<div class="modal-footer">
													
												
												Confirm and send this delivery
													
												<button type="submit" class="btn btn-primary">Send Delivary</button>
												</form>
												
												</div>
											</div>
										</div>
									</div>
									<!-- END  modal -->

