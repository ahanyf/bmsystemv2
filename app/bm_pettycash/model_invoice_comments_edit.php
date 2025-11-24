

<?php




if(isset($id)){
	




if (isset($vi_comment_[$id])) {
    foreach ($vi_comment_[$id] as $comment) {

?>


<div class="modal fade" id="m-vi_comment_id<?php echo 	 $comment['id']; ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_comments_edit_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Edit Comments</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($comment['id']); ?>">

         

          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label">comments:</label>
              <input type="text" name="comment" class="form-control"  value="<?php echo htmlspecialchars($comment['comment_txt']); ?>"  placeholder="Entre your Comments" required>
            </div>
          </div>
   
          <div class="row">
            <div class="col-md-5 mb-3">
              <label class="form-label">Text:</label>
             <select name="txt_colour" class="form-control"  required>
             	
             	<option value="<?php echo $comment['txt_colour']; ?>" ><?php echo $comment['txt_colour']; ?></option>
             	
             	 <option value="text-black" class="text-black">Black Text</option>
				<option value="text-primary" class="text-primary">Blue Text</option>
				<option value="text-danger" class="text-danger">Red Text</option>
				<option value="text-success" class="text-success">Green Text</option>
				<option value="text-warning" class="text-warning">Orange Text</option>
             	
             </select>
            </div>
          </div>
          
          	
          
          
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
}}	
}
?>