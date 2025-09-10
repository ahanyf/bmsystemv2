<!-- BEGIN modal -->
<!-- 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-gas-new">
    Small
</button>
-->
 <?php
 
 if(!empty($gas_cylinder_[$registry_id_1_[0]])){
 foreach ($gas_cylinder_[$registry_id_1_[0]] as $key => $value) {
 	
	
 ?>



<div class="modal fade" id="m-gas-cyl<?php echo $value; ?>" tabindex="-1" role="dialog" aria-labelledby="deleteRegistryLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <form method="post" action="app/bm_gas/check_model_form_delete_cylinder_post.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteRegistryLabel">Delete Cylinder</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body m-3">
                    <input type="hidden" name="uri" value="<?php echo $uri; ?>" />
                    <input type="hidden" name="id" value="<?php echo $value; ?>" />
                    <!--
                    <input type="hidden" name="registry_id" value="<?php  echo $registry_id_1_[0]; ?>" />
                    -->
                    <?php //  echo $registry_id_1_[0]; ?>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h3>Do you Delete Cylinder</h3>
                        </div>
                        <div class="col-md-7">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="confirm_delete" value="yes" required />
                                <label class="form-check-label">Yes, Delete</label>
                            </div>
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
<!-- END modal -->

<?php 

}}

?>
