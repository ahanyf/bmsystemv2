<!--

<div class="container">
	

  	
  		 <form method="post"  action="app/bm_delivary/delivary_id_items_form1_post.php"  class="row g-3 align-items-center"   >
		 	
		 		<input type="hidden" value="<?php  echo $uri; ?>" name="uri" />
		 		<input type="hidden" value="<?php  echo $id; ?>" name="id" />
		 		
    
    <div class="col-md-2">
      <label class="visually-hidden" for="inlineFormInputQty">Qty</label>
      <input type="text" name="item_qty"  class="form-control" id="inlineFormInputQty" placeholder="Qty">
    </div>

    <div class="col-md-8">
      <label class="visually-hidden" for="inlineFormInputItem">Item Name</label>
      <div class="input-group">
        <input type="text" name="item_name"    autocomplete="off"      class="form-control"  placeholder="Item Name (BM Code)">
         
      </div>
    </div>

    <div class="col-md-2">
      <button type="submit" class="btn btn-primary w-100">Add</button>
    </div>

  </form>
</div>

-->

<?php
include 'index.php';
?>