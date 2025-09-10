
<?php



if(!empty($registry_id_1_)){
	
?>

<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		<div class="alert-icon">
				<i class="far fa-fw fa-bell"></i>
					</div>
						<div class="alert-message">
				<strong> 🚨 Heads up! </strong> You’ve got some new gas registrations 
				that aren’t fully completed. Take a moment to finish them — or tidy up any that aren’t valid.
				<br>
				<hr>
				
				<a href="?app=gas&page=check&location=<?php echo $gas_location_id[$registry_id_1_[0]]; ?>&contact=<?php echo $gas_contact_id[$registry_id_1_[0]]; ?>" class="btn btn-sm btn-warning"  >
				Click to Continue
						</a>
						
						
						
				<?php
		//		 echo $registry_id_1_[0];
	
			//		echo 	$gas_contact_id[$registry_id_1_[0]];

		//		echo $gas_location_id[$registry_id_1_[0]]
	
				///echo $location_id[17] ;
	 ?>
				
				

			</div>
	</div>
	
<?php  } ?>