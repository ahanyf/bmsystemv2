<div class="card-body h-100">

	<?php
	//print_r($vi_comment_);
	/*
	foreach ($vi_comment_ as $invoice_id => $comments) {
    echo "Invoice ID: {$invoice_id}<br>";

    foreach ($comments as $comment_id => $comment) {
        echo "Comment ID: {$comment_id}<br>";
        echo "Text: {$comment['comment_txt']}<br>";
        echo "Entry By: {$comment['entry_by']} at {$comment['entry_at']}<br>";
        echo "Updated By: {$comment['update_by']} at {$comment['update_at']}<br>";
        echo "<hr>";
    }
}
	
	print_r($comments);
	*/
	
	?>
	
	
	<?php
// Example: loop through comments for a given invoice $id
if (isset($vi_comment_[$id])) {
    foreach ($vi_comment_[$id] as $comment) {
        ?>
        <div class="d-flex align-items-start">
            <img src="userphoto/avatar.jpg" width="36" height="36" class="rounded-circle me-2" alt="Charles Hall">
            <div class="flex-grow-1">
                <small class="float-end text-navy"><?php echo $comment['entry_at']; ?></small>
                <strong><?php echo htmlspecialchars($comment['entry_by']); ?></strong><br>
                <small class="text-xmuted"><?php echo $comment['update_at']; ?></small>
                
                <?php
           //     echo $bm_userid;
				
				if($bm_userid == $comment['entry_by']){
                ?>
                <small> | <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#m-vi_comment_id<?php echo 	 $comment['id']; ?>" >Edit</button> 
                	
                	 <button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#m-vi_comment_delete<?php echo 	 $comment['id']; ?>" >Delete</button> 
                	  </small>
                <?php
				}
                ?>
                
                

                <div class="xborder p-2 mt-1 <?php echo $comment['txt_colour']; ?> "> 
                	<strong>
                    <?php echo nl2br(htmlspecialchars($comment['comment_txt'])); ?>
                    </strong>
                </div>
            </div>
        </div>
        <hr>
        <?php
    }
}
?>		
								
<!--

									<div class="d-grid">
										<a href="#" class="btn btn-primary">Add New Comment</a>
									</div>
									
	-->								
									
								</div>