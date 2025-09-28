<?php
include '_AdminKitPro/_head.php';
?>

<!--
  HOW TO USE: 
  data-theme: default (default), dark, light, colored
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-layout: default (default), compact
-->


	
<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default"> 
	<div class="wrapper">
		<?php
		include '_bar_side.php';
		?>
		<div class="main">
		<?php
		include '_bar_top.php';
		?>

		<main class="content">
			
				<div class="container-fluid p-0">


				<?php
				
				if (isset($_COOKIE['password'])) {
					
				
				include 'app/bm_users/model_user_change_password.php';
				
				
				
				} 
				
				//else {
				//    echo "Password cookie is not set.";
			   //	}
				
				
				if(isset($_GET['app'])){
				include 'app_contact.php';
				}
				
				?>
	
	




						

			
				</div>
			</main>
			<?php
			include '_AdminKitPro/_footer.php';
			?>

		</div>
	
	
	
	
	</div>
	
	

	<script src="_AdminKitPro/js/app.js"></script>



	<script src="_AdminKitPro/js/datatables.js"></script>
	
	
	
		<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true
			});
		});
	</script>

</body>
</html>