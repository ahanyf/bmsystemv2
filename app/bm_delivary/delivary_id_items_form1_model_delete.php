
<?php
if(!empty($di_id_[$id])){
foreach ($di_id_[$id] as $key => $d_item_id) {
?>


	<div class="modal fade" id="m-did_delete-id<?php echo $d_item_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sxm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Delete </h5>
													
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
											<div class="modal-body m-3">
													
													<form method="post" action="app/bm_delivary/delivary_id_items_form1_model_delete_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
														<input type="hidden" value="<?php  echo $d_item_id; ?>" name="id" />
												<!--
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

									           
	
	
															<h3>Qty: <?php echo $di_item_qty[$d_item_id ]; ?></h3>
															
															<h3><?php echo $di_item_name[$d_item_id ]; ?> </h3>
								            

								            
						
            
            
       							     
          								
						
												

												</div>
												<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Delete</button>
												</form>
												
												</div>
											</div>
										</div>
									</div>
									<!-- END  modal -->















<?php
}
}
?>