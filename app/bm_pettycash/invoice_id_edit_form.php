      
        <form action="app/bm_pettycash/invoice_id_edit_form_post.php" method="POST">
          <input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
           <input type="hidden" value="<?php  echo $id; ?>" name="id" />
          
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="vi_vendor_id" class="form-label">Vendor</label>
              
              <select  class="form-control choices-vendor"  id="vi_vendor_id" name="vi_vendor_id" required>
              	
              <option value="<?php echo $vinvoice_[$id]['vi_vendor_id']; ?>"><?php echo  $vendor_[$vinvoice_[$id]['vi_vendor_id']]['vendor_name']; ?></option>
              	
                <option value="">Select Vendor</option>
                <?php
                foreach ($vendor_ as $vendor_id => $vendor_data) {
					?>
					<option value="<?php echo $vendor_id; ?>"><?php echo htmlspecialchars($vendor_data['vendor_name']); ?></option>
					<?php
				}
                ?>
              </select> 
            </div>
          </div>
			
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="vi_date" class="form-label">Invoice Date</label>
              <input type="date" value="<?php echo $vinvoice_[$id]['vi_date']; ?>"    class="form-control" id="vi_date" name="vi_date" required>
            </div>
            <div class="col-md-3 mb-3">
              <label for="vi_ref" class="form-label">Reference</label>
              <input type="text" value="<?php echo $vinvoice_[$id]['vi_ref']; ?>"    class="form-control" id="vi_ref" name="vi_ref" maxlength="50">
            </div>
            <div class="col-md-3 mb-3">
              <label for="vi_gst" class="form-label">GST Amount</label>
              <input type="number" value="<?php echo $vinvoice_[$id]['vi_gst']; ?>"   step="0.01" class="form-control" id="vi_gst" name="vi_gst" value="0.00">
            </div>
            <div class="col-md-3 mb-3">
              <label for="vi_total" class="form-label">Total Amount</label>
              <input type="number" value="<?php echo $vinvoice_[$id]['vi_total']; ?>"   step="0.01" class="form-control" id="vi_total" name="vi_total" value="0.00" required>
            </div>
          </div>
          
           <div class="row">
             <div class="col-md-4 mb-3">	
     		   <label for="vi_costcentre" class="form-label">Cost Centre:</label>
		      <select class="form-control" name="vi_costcentre" id="vi_costcentre" required >
		      	
		      <?php  if(!empty($vinvoice_[$id]['vi_costcentre'])) { ?>
		      	<option value="<?php echo $vinvoice_[$id]['vi_costcentre']; ?>"><?php echo $program_[ $vinvoice_[$id]['vi_costcentre']] ['name']; ?></option>
		      	<?php } ?>
		      	
		        <option value="">Select</option>
		        <?php foreach ($program_ as $program => $program_data): ?>
		          <option value="<?php echo htmlspecialchars($program); ?>">
		            <?php echo htmlspecialchars($program_data['name']); ?>
		          </option>
		        <?php endforeach; ?>
		      </select>
             	</div>
          </div>

          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="vi_details" class="form-label">Details</label>
              <textarea class="form-control" id="vi_details" name="vi_details" rows="4" required><?php echo $vinvoice_[$id]['vi_details'];  ?></textarea>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Update Invoice</button>
        </form>