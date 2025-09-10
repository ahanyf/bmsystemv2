



					<div class="row">
						 <div class="col-12 col-xl-7">
						
							<div class="card">
								 <div class="card-header">
      							New Delivary
      							
      							
      							<span style="float: right">
      								<span class="btn btn-pill btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#m-location-new"  >New location</span> 
      							</span>
      							
      							
      							
     							 </div>
								
								<div class="card-body">
									
									
		 <form method="post" action="app/bm_delivary/delivary_new_form_post.php">
		 	
		 		<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
          
          <!-- Row 1: Location & Contact -->
          <div class="row">
          	
            <div class="col-md-12 mb-3">
              <label class="form-label">Location / Address:  </label>  
              <select class="form-control choices-location" name="location" required>
                <option value="">Select Location / Address</option>
                <?php foreach ($location_ as $key => $value): ?>
                  <option value="<?php echo htmlspecialchars($value); ?>"><?php echo htmlspecialchars($location_name[$value]); ?></option>
                <?php endforeach; ?>
              </select>
              <label></label>
            </div>
          </div>

          
          <!-- Submit Button -->
          <div class="row">
            <div class="col-12">
            	
         
            
     <!--         <span class="btn btn-pill btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#m-contact-new" >New Contact</span> -->
            	<span class="align-right">
            		 <button type="submit" class="btn btn-primary">Submit</button>
            	</span>
             
            
             
              
            </div>
          </div>

        </form>
        
									
									
									
									
									
									
									
									
									
									
									
									
									
									
								</div>
							</div>
						</div>
					</div>