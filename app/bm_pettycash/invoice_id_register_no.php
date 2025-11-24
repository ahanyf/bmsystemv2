<form method="post" action="app/bm_pettycash/invoice_id_register_no_post.php">
  <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>" />
  <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>" />

  <div class="row">
  	
    <div class="col-md-6 mb-3">
      <label for="vi_costcentre" class="form-label">Cost Centre:</label>
      
      <select class="form-control" name="vi_costcentre" id="vi_costcentre" required >
        <option value="">Select</option>
        <?php foreach ($program_ as $program => $program_data): ?>
          <option value="<?php echo htmlspecialchars($program); ?>">
            <?php echo htmlspecialchars($program_data['name']); ?>
          </option>
        <?php endforeach; ?>
      </select>
      
    </div>

 <div class="col-md-2 mb-3">
      <label class="form-label">Year:</label>
      <input type="number" value="<?php echo $vinvoice_[$id]['vi_year']; ?>"  class="form-control" name="vi_year" required />

</div>

    <div class="col-md-4 mb-3">
      <label class="form-label">Check Information:</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="check_info" id="check1" value="yes" required>
        <label class="form-check-label" for="check1">Yes</label>
      </div>
      
      <div class="form-check">
        
      </div>
      
    </div>
    
    
  </div>

  <button type="submit" class="btn btn-primary">Save to Invoice Registry</button>
</form>
