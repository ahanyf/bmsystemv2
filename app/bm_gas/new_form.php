


  <div class="col-12 col-xl-8">
    <div class="card">
      <div class="card-header">
        New Registration Form <small>Complete this form to add a new registration</small>
        
        <span style="float: right">
        	
            <span class="btn btn-pill btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#m-location-new"  >New location</span>
            
            <span class="btn btn-pill btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#m-contact-new" >New Contact</span>        
        
        </span>
        
      </div>
      <div class="card-body">
      	
      	<?php
      	//empty($registry_id_1_)
      	if(empty($registry_id_1_)){
		//	if(1 == 1){
				
			?>
      	
        <form method="post" action="app/bm_gas/new_form_post.php">
          
          <!-- Row 1: Location & Contact -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">Location / Address:  </label>
              <select class="form-control choices-location" name="location" required>
                <option value="">Select Location / Address</option>
                <?php foreach ($location_ as $key => $value): ?>
                  <option value="<?php echo htmlspecialchars($value); ?>"><?php echo htmlspecialchars($location_name[$value]); ?></option>
                <?php endforeach; ?>
              </select>
              <label></label>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label">Contact Person:   </label>
              <select class="form-control choices-contact" name="contact" required>
                <option value="">Select Contact Person</option>
                <?php foreach ($contact_ as $key => $value): ?>
                  <option value="<?php echo htmlspecialchars($value); ?>">   
                  	<?php echo htmlspecialchars($contact_name[$value]); ?> | 
                  	  <?php echo htmlspecialchars($phone_number[$value]); ?>
                  	</option>
                <?php endforeach; ?>
              </select>
             
            </div>
          </div>

          <!-- Row 2: Cylinder Type & Price --> 
          <div class="row">
     

			<div class="col-md-4 mb-3">
			  <label class="form-label">Customer Type:</label>
			  <select class="form-control" name="customer_type" required>
			    <option value="">Select Customer Type</option>
			    <?php foreach ($gas_coustomer_type_ as $key => $value):  ?>
					<option value="<?php echo htmlspecialchars($key); ?>"><?php echo htmlspecialchars($value); ?></option>
				<?php endforeach; ?>
			  
			  </select>
			</div>
            
                   
         
          <div class="col-md-4 mb-3">
              <label class="form-label">Date:</label>
              <input type="date" name="commissing_date" class="form-control" placeholder="" required>
            </div>
          	
            <div class="col-md-6 mb-3">
              <label class="form-check m-0"> </label>
              <input type="checkbox" class="form-check-input" name="is_active" value="1">
            	<span class="form-check-label">Customer Siged Aggrement form</span>
            </div>
          </div>
          
          
          
          
          
          <!-- Submit Button -->
          <div class="row">
            <div class="col-12">
            	

            	
              <button type="submit" class="btn btn-primary">Submit</button>
              
            </div>
          </div>

        </form>
        
          <?php
 			 }else{
 			 	?>
 			 	🚫 New Registration Disabled <br><br> - Please complete your existing registration before starting a new one.
 			 	<?php 
 			 	
 			 }
 			 ?>
        
        
      </div>
    </div>
  </div>

