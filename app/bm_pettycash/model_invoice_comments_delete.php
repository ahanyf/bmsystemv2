

<?php
if(isset($id)){
if (isset($vi_comment_[$id])) {
    foreach ($vi_comment_[$id] as $comment) {

?>


<div class="modal fade" id="m-vi_comment_delete<?php echo 	 $comment['id']; ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xxxsm" role="document">
    <div class="modal-content">
      <form method="post" action="app/bm_pettycash/model_invoice_comments_delete_post.php">
        <div class="modal-header">
          <h5 class="modal-title">Delete Comments</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body m-3">
          <input type="hidden" name="uri" value="<?php echo htmlspecialchars($uri); ?>">
          <input type="hidden" name="id" value="<?php echo htmlspecialchars($comment['id']); ?>">

         

          <div class="row">
            <div class="col-md-12 mb-3">
              <label class="form-label <?php echo $comment['txt_colour']; ?> "><?php echo htmlspecialchars($comment['comment_txt']); ?></label>
          
            </div>
          </div>
   
       
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
}}

}

?>