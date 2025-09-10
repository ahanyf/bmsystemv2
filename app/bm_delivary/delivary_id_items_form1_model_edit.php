
<?php
if(!empty($di_id_[$id])){
foreach ($di_id_[$id] as $key => $d_item_id) {
?>


	<div class="modal fade" id="m-did-id<?php echo $d_item_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-sxm" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit: | <?php echo $di_item_name[$d_item_id ]; ?> 
									
									| Qty: <?php echo $di_item_qty[$d_item_id ]; ?>
									</h5>
													
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
											<div class="modal-body m-3">
													
													<form method="post" action="app/bm_delivary/delivary_id_items_form1_model_edit_post.php">
														
														<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
														
														<input type="hidden" value="<?php  echo $d_item_id; ?>" name="id" />
												<!--
														 <input type="hidden" name="registry_id" value="" />
														 `full_name`, `phone_number`, `address`,
														-->

									            <div class="row">
								   			  <div class="col-md-7 mb-3">
             						 			<label class="form-label">Qty:</label>
             									 <input type="text" name="item_qty" class="form-control"  value="<?php echo $di_item_qty[$d_item_id ]; ?>"  placeholder="Entre Mobile Number"  required>
           									 </div>
								            </div>
	
	
	
											<div class="row">
								            <div class="col-md-12 mb-3">
								              <label class="form-label">Item Name / BM Code:</label>
								              <input type="text" name="item_name" class="form-control"  value="<?php echo $di_item_name[$d_item_id ]; ?>"   placeholder="Contact Person Name" required>
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















<?php
}
}
?>