
<?php
if(!empty($registry_id_1_)){
	

?>



  <div class="col-12 col-xl-8">
    <div class="card">
    	
      <div class="card-header">
    <?php
  // echo count($gas_cylinder_[$registry_id_1_[0]]);
  

 
    if($gas_reg_status[$registry_id_1_[0]] == -1 AND !empty($gas_cylinder_[$registry_id_1_[0]]) ){
    ?>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#m-gas-confirm" >Complete Registration</button>
        
      <?php } ?>  
        
      </div> 
      <div class="card-body">
    
    
 <div class="row">  	
 <div class="col-12 col-xl-6">     	
 <div class="alert alert-primary alert-dismissible" role="alert">
		
<div class="alert-icon">
		<i class="fas fa-home"></i>
		</div>
		<div class="alert-message">
			<strong>
			<h4>
			<?php echo  $location_name[$get_location]; ?></h4>
			</strong>	
			<hr> 
			Dh. Kudahuvadhoo /
			<br>
	
	</div>
</div>     
</div>     
      

 <div class="col-12 col-xl-6">     	
 <div class="alert alert-info alert-dismissible" role="alert">
		
	<div class="alert-icon">
		<i class="far fa-user"></i>
		</div>
		
<div class="alert-message">
			<strong>
			<h4>
			<?php echo   $contact_name[$get_contact]; ?></h4>
			</strong>	
			<hr> 
			770457
			<br>Rankokaage / Island
	
	</div>
</div>     
</div>       
 

 
      
 </div>         
    

 <?php
 
 if(!empty($gas_cylinder_[$registry_id_1_[0]])){
 foreach ($gas_cylinder_[$registry_id_1_[0]] as $key => $value) {
 ?>


<div class="col-12 col-xl-12">     	
 <div class="alert alert-success alert-dismissible" role="alert">
	<div class="alert-icon">
		<img src="userphoto/cyclinder.png" width="40px" />
		</div>
		
		<div class="alert-message">
			<strong><?php echo  $cylinder[$cylinder_type[$value]];  ?></strong>
			<hr>
			Price: <?php echo  $cylinder_price[$value]; ?>  | <?php echo  $cylinder_payment[$value]; ?> 
			<br>Date: <?php echo  $commissing_date[$value]; ?>
			<br>Status: <span class="badge bg-success">Active</span>
			
			
 			<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#m-gas-cyl<?php echo $value; ?>" >Delete</button>

	
	</div>
	</div>     
</div>        
  
   <?php
 }
  }
 
   ?>   
   

 
 
 
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m-gas-new">
			Add Cylinder
	</button>
 
      
<?php
//echo $gas_reg_status[$registry_id_1_[0]];
if($gas_reg_status[$registry_id_1_[0]] == -1){
?>
      
   <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#m-gas-reg-delete">
			Delete Registration
	</button>    
  <?php
}
  ?>
        
       
       <small>Created by: <?php echo $add_by[$registry_id_1_[0]]; ?></small>
       
        
        
      </div>
    </div>
  </div>

<?php } ?>